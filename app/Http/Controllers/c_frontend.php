<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\themes;
use App\news;
use App\category;
use App\product;
use App\setting;
use App\city;
use App\district;
use App\product_images;
use App\order;
use App\User;
use App\comment;
use Mail;


class c_frontend extends Controller
{
    function __construct()
    {
        $head_logo = themes::where('id',1)->first();
        $head_logo_trang = themes::where('id',2)->first();
        $head_setting = setting::where('id',1)->first();
        $head_category = category::orderBy('view','asc')->get();
        $sidebar_news = news::take(10)->orderBy('id','desc')->get();
        $city = city::all();
        $user = User::where('permission',0)->get();

        view()->share( [
            'head_logo'=>$head_logo,
            'head_logo_trang'=>$head_logo_trang,
            'head_setting'=>$head_setting,
            'head_category'=>$head_category,
            'sidebar_news'=>$sidebar_news,
            'citys'=>$city,
            'user'=>$user,
        ]);
    }

    public function home()
    {
        $home_slider = themes::where('note','slide')->orderBy('id','desc')->get();
        $home_banner = themes::where('note','banner')->get();
        $home_doitac = themes::where('note','logo-doitac')->get();
        $product = product::take(6)->orderBy('id','desc')->get();
        $product_hot = product::where('hot','true')->orderBy('id','desc')->take(6)->get();
		$home_district = district::all();
		$home_news = news::take(4)->orderBy('id','desc')->get();
        $activemenu = '';
        
        return view('pages.home',[
            'home_slider'=>$home_slider,
            'home_banner'=>$home_banner,
            'home_doitac'=>$home_doitac,
            'product'=>$product,
            'product_hot'=>$product_hot,
            'home_district'=>$home_district,
            'home_news'=>$home_news,
            'activemenu'=>$activemenu,
            ]);
    }
	
	public function iframe()
    {
        return view('pages.iframe');
    }

    public function sitemap()
    {
        $sitemap_category = category::orderBy('sitemap','desc')->get();
        $sitemap_product = product::all();
        $sitemap_news = news::all();
        $sitemap_city = city::all();
        $sitemap_district = district::all();
        return response()->view('pages.sitemap', [
            'sitemap_category' => $sitemap_category,
            'sitemap_product' => $sitemap_product,
            'sitemap_news' => $sitemap_news,
            'sitemap_city' => $sitemap_city,
            'sitemap_district' => $sitemap_district,
            ])->header('Content-Type', 'text/xml');
    }
	
	public function about()
    {
        $activemenu = 'gioi-thieu';
        return view('pages.about',['activemenu'=>$activemenu]);
    }

    public function contact()
    {
        $category = category::where('slug','lien-he')->first();
        $activemenu = 'lien-he';
        return view('pages.contact',['activemenu'=>$activemenu, 'category'=>$category]);
    }
	public function map()
    {
        $activemenu = 'sitemap';
		$category = category::orderBy('view','asc')->get();
        return view('pages.map',[
			'activemenu'=>$activemenu,
			'category'=>$category,
		]);
    }

    public function category($curl)
    {
        $activemenu = $curl;
        $category = category::where('slug',$curl)->first();
        $cat_id = $category["id"];
        
        if ($category["sort_by"]==1) {
            if($category["parent"] == 0)
            {
                $product = product::join('tbl_category', 'tbl_category.id', '=', 'tbl_product.cat_id')
                    ->select('tbl_product.*')
                    ->Where(function ($query) use ($cat_id){
                        return $query->where('tbl_product.status','true')->Where('cat_id',$cat_id);
                    })
                    ->orWhere(function ($query) use ($cat_id){
                        return $query->where('tbl_product.status','true')->Where('parent',$cat_id);
                    })
                    ->orWhere('parent',$cat_id)
                    ->orderBy('id','desc')
                    ->paginate(12);
            }
            else
            {
                $product=product::where('cat_id',$cat_id)->where('tbl_product.status','true')->orderBy('id','desc')->paginate(18);
            }
            return view('pages.product',['activemenu'=>$activemenu, 'category'=>$category,'product'=>$product]);
        }

        if ($category["sort_by"]==2) {
            if($category["parent"] == 0)
            {
                $news = news::join('tbl_category', 'tbl_category.id', '=', 'tbl_news.cat_id')
                    ->select('tbl_news.*')
                    ->Where(function ($query) use ($cat_id){
                        return $query->where('tbl_news.status','true')->Where('cat_id',$cat_id);
                    })
                    ->orWhere(function ($query) use ($cat_id){
                        return $query->where('tbl_news.status','true')->Where('parent',$cat_id);
                    })
                    ->orWhere('parent',$cat_id)
                    ->orderBy('id','desc')
                    ->paginate(12);
            }
            else
            {
                $news = news::join('tbl_category', 'tbl_category.id', '=', 'tbl_news.cat_id')
                    ->select('tbl_news.*')
                    ->where('cat_id',$cat_id)->where('tbl_news.status','true')->orderBy('id','desc')->paginate(10);
            }
            return view('pages.news',['activemenu'=>$activemenu, 'category'=>$category,'news'=>$news]);
        }

        if ($category["sort_by"]==3) {
            return view('pages.singlepage',['activemenu'=>$activemenu, 'category'=>$category]);
        }
    }

    public function singleproduct($curl,$purl)
    {
        $activemenu = $curl;
        $singleproduct = product::where('slug',$purl)->first();
        $id = $singleproduct['id'];
		$product_banner = product_images::where('p_id',$id)->where('section','banner')->get();
		$product_news = news::where('p_id',$id)->orderBy('id','desc')->get();
		$comment = comment::where('p_id',$id)->orderBy('id','desc')->get();
		
        $singleproduct->hits = $singleproduct->hits + 1;
        $singleproduct->save();
        
		$lienquan = product::where('status','true')
            ->where('cat_id',$singleproduct->cat_id)
            ->whereNotin('id',[$id])
            ->take(8)
            ->get();
        return view('pages.chitiet',[
            'activemenu'=>$activemenu,
            'datas'=>$singleproduct,
            'product_banner'=>$product_banner,
            'product_news'=>$product_news,
            'lienquan'=>$lienquan,
            'comment'=>$comment,
        ]);
    }

    public function singlenews($curl,$nurl,$id)
    {
        $activemenu = $curl;
        $singlenews = news::find($id);
		$comment = comment::where('n_id',$id)->orderBy('id','desc')->get();
        $singlenews->hits = $singlenews->hits + 1;
        $singlenews->save();
        $tinlienquan = news::where('status','true')->where('cat_id',$singlenews->cat_id)->whereNotin('id',[$id])->take(10)->get();
        return view('pages.singlenews',[
			'activemenu'=>$activemenu, 
			'datas'=>$singlenews, 
			'tinlienquan'=>$tinlienquan,
			'comment'=>$comment,
		]);
    }

    public function district($city, $dis)
    {
        $activemenu = '$curl';
        $district = district::where('slug',$dis)->first();
        $product=product::where('dis_id',$district['id'])->where('status','true')->orderBy('id','desc')->paginate(18);
        return view('pages.product',['activemenu'=>$activemenu, 'category'=>$district,'product'=>$product]);
    }
    public function city($city)
    {
        $activemenu = '$curl';
        $city = city::where('slug',$city)->first();
        $product = product::join('tbl_district', 'tbl_district.id', '=', 'tbl_product.dis_id')
                    ->select('tbl_product.*')
                    ->where('city_id',$city['id'])
                    ->where('tbl_product.status','true')
                    ->orderBy('id','desc')
                    ->paginate(18);
        return view('pages.product',['activemenu'=>$activemenu, 'category'=>$city,'product'=>$product]);
    }

    public function search(Request $Request)
    {
		$activemenu = 'search';
        $key = $Request->key;
        $product = product::where('status','true')->where('name','like',"%$key%")->orderBy('id','desc')->get();
        return view('pages.search',[
			'product'=>$product,
			'key'=>$key,
			'activemenu'=>$activemenu,
		]);
    }
	
	public function comment(Request $Request)
    {
    	$comment = new comment;
        $comment->name = $Request->name;
        $comment->phone = $Request->phone;
        $comment->content = $Request->content;
        $comment->link = $Request->link;
		$comment->date = date('Y-m-d');
		if($Request->sort_by==1){$comment->p_id = $Request->id;}elseif($Request->sort_by==2){$comment->n_id = $Request->id;}
        
        $comment->save();
        return redirect($Request->link)->with('Alerts','Thành công');
    }

    public function dangky(Request $Request)
    {
        $head_setting = setting::where('id',1)->first();
        $mail = $head_setting['email'];
		if (!empty($_SERVER['HTTP_CLIENT_IP']))     
		  {  
			$ip_address = $_SERVER['HTTP_CLIENT_IP'];  
		  }  
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))    
		  {  
			$ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];  
		  }  
		else  
		  {  
			$ip_address = $_SERVER['REMOTE_ADDR'];  
		  }  
		$activemenu = 'dang-ky';
		$order = new order;
		$order->name = $Request->name;
		$order->ip = $ip_address;
		$order->phone = $Request->phone;
		$order->email = $Request->email;
		$order->link = $Request->link;
		$order->content = $Request->content;
		$order->date = date('m/d/Y h:i:s', time());
		$order->save();
        
        Mail::send('email_feedback', array('name'=>$Request->name,'phone'=>$Request->phone,'email'=>$Request->email,'link'=>$Request->link,'content'=>$Request->content,'date'=>$order->date), function($message) use ($mail){
           $message->from($mail, 'allland.com.vn');
           $message->to($mail, 'allland.com.vn')->subject('Thông tin khách hàng');
        });
        // return view('pages.thankyou',['activemenu'=>$activemenu]);
        return redirect('/')->with('Alerts','Thành công');
    }


}


