<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Forum;
use App\Thread;
use App\Comment;
use Illuminate\Support\Facades\Redirect;


class CommentController extends Controller
{

    public function create($threadid){
        $thread = Thread::find($threadid);
        return view('comments.create')->with('thread', $thread);
    }

    public function store(Request $request, $thread_id){

        $this->validate($request,
            [
                'com_username' => 'required',
                'com_password' => 'required',
                'com_comment' => 'required'
            ]

        );
        $inputs = $request->all();

        Comment::create($inputs);

        $thread= Thread::find($thread_id);
        $comments = Comment::where('com_thread', '=', $thread_id)->get();
        return view('threads.show')->with(['thread'=> $thread, 'comments'=>$comments]);
    }



    public function pwdchkfordelete($id){
        $comment= Comment::find($id);
        return view('comments.checkpasswordfordelete')->with('comment',$comment);
    }

    public function pwdchkfordelete2($id){

        $comment = Comment::find($id);
        $thread_id = $comment->com_thread;


        if($_POST['chk_password'] == $_POST['orig_password']){
            Comment::find($id)->delete();

            $thread= Thread::find($thread_id);
            $comments = Comment::where('com_thread', '=', $thread_id)->get();
            return view('threads.show')->with(['thread'=> $thread, 'comments'=>$comments]);
        }
        else{
            return view('comments.errdel')->with('comment', $comment);
        }

    }

}
