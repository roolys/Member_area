<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;


class CommentsController extends Controller
{
    //

    public function app(Post $post)
    {

                $comments=Comment::All()->sortByDesc('created_at');

        return view('layout.app',[
            'post'=>$post,
            // 'comments' => $post->comments()->get()
            'comments' => Comment::where('post_id','=', $post->id)->get()
        ]);
            
         
    }


    public function store(Post $post, Request $request){

        $user=Auth()->user();
        $user_id=$user->id;
        $post_id=$post->id;
        $name=$user->name;
        $usertype=$user->usertype;

        $comment=new Comment;
        $comment->post_id=$post_id;
        $comment->user_id=$user_id;
        $comment->name=$name;
        $comment->usertype=$usertype;
        $comment->comment=$request->comment;

        $comment->save();

        return back();

    }

  
}
