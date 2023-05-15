<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\comment;

class c_comment extends Controller
{
    public function getlist()
    {
    	$comment = comment::orderBy('id','desc')->get();
    	return view('admin.comment.list',['comment'=>$comment]);
    }

    public function getedit($id)
    {
        $data = comment::findOrFail($id);
    	return view('admin.comment.edit',['data'=>$data]);
    }

    public function postedit(Request $Request,$id)
    {
		$comment = comment::findOrFail($id);
        $comment->reply = $Request->reply;
		$comment->save();
		return redirect('admin/comment/edit/'.$id)->with('Success','Thành công');
        
    }

    public function getdelete($id)
    {
        $comment = comment::find($id);
		$comment->delete();
		return redirect('admin/comment/list')->with('Success','Success');
    }
}
