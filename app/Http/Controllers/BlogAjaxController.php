<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class BlogAjaxController extends Controller
{
    public function sortBlogs(){
        // return $data =  Blog::with(['blogdetail','comments','user'])->get();    // All
        $data =  Blog::with('user')->orderBy('id', 'desc')->get();
        // dd($data);
        return $data;
    }

    public function singleBLog($id){
        $blog = Blog::with(['blogdetail','comments' => function($query){
            $query->orderBy('created_at', 'desc');
        },'user'])->find($id);
        return $blog;
    }

    public function reciveAJAXData(Request $request){
        // return $request;

        $comment = new Comment;
        $comment->comment = $request->userComment;
        $comment->blog_id = $request->blogId;
        $comment->user_id = 3;

        $comment->save();
    }
}
