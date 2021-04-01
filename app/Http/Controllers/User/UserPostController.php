<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\user\like;
use App\Models\user\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserPostController extends Controller
{
    public function post(post $post)
    {

        return view('user/post',compact('post'));
    }
    public function getAllPost()
    {
        return $posts= post::with('likes')->where('status',1)->orderBy('created_at','DESC')->simplePaginate(5);
    }
    public function  saveLike(Request $request)
    {


        $likecheck = like::where(['user_id'=>Auth::id(),'post_id'=>$request->id])->first();
        if($likecheck)
        {
            like::where(['user_id'=>Auth::id(),'post_id'=>$request->id])->delete();
            return 'deleted';
        }
        else
        {
            $like = new like;
            $like->user_id = Auth::id();
            $like->post_id = $request->id;
            $like->save();
        }

    }

}
