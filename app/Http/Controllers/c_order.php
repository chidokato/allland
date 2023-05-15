<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\order;

class c_order extends Controller
{
    public function getlist()
    {
        $order = order::orderBy('id','desc')->get();
    	return view('admin.order.list',[
            'order'=>$order,
		]);
    }

    

    public function getdelete($id)
    {
        $order = order::find($id);
        
        $order->delete();
        return redirect('admin/order/list')->with('Alerts','Thành công');
    }
}
