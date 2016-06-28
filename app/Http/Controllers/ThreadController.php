<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Forum;
use App\Thread;
use App\Comment;
use Illuminate\Support\Facades\Redirect;


class ThreadController extends Controller
{
    public function index($id){
        $comments = Comment::where('com_forum', '=', $id)->get();      
        $threads = Thread::where('thread_forum', '=', $id)->orderBy('thread_date', 'desc')->get();
        return view('threads.index')->with(['comments'=>$comments, 'threads'=>$threads, 'forum_id'=>$id]);
    }


    public function create($forum_id){
        return view('threads.create')->with('forum_id', $forum_id);
    }

    public function store(Request $request, $forum_id){

        $this->validate($request,
            [
                'thread_topic' => 'required',
                'thread_content' => 'required',
                'thread_username' => 'required',
                'thread_password' => 'required'
            ]

        );
        $inputs = $request->all();

        Thread::create($inputs);

        $comments = Comment::where('com_forum', '=', $forum_id)->get();
        $threads = Thread::where('thread_forum', '=', $forum_id)->orderBy('thread_date', 'desc')->get();
        return view('threads.index')->with(['comments'=>$comments, 'threads'=>$threads, 'forum_id'=>$forum_id]);

    }

    public function show($thread_id){
        $thread= Thread::find($thread_id);
        $comments = Comment::where('com_thread', '=', $thread_id)->get();
        return view('threads.show')->with(['thread'=> $thread, 'comments'=>$comments]);
    }

    public function pwdcheckforedit($thread_id){
        $thread = Thread::find($thread_id);
        return view('threads.checkpasswordforedit')->with('thread',$thread);
    }

    public function pwdcheckforedit2($id){
        $thread = Thread::find($id);        
        if($_POST['chk_password'] == $_POST['orig_password']){
            return view('threads.edit')->with('thread',$thread);
        }
        else{
            return view('threads.errdel')->with('thread', $thread);
        }
    }


    public function update(Request $request,$id){
        $this->validate($request,
            [
                'thread_topic' => 'required',
                'thread_content' => 'required',
                'thread_username' => 'required',
                'thread_password' => 'required'
            ]

        );
        $threads = $request->all();
        $thread = Thread::find($id);
        $thread->update($threads);

        $comments = Comment::where('com_forum', '=', $thread->thread_forum)->get();
        $threads = Thread::where('thread_forum', '=', $thread->thread_forum)->orderBy('thread_date', 'desc')->get();
        return view('threads.index')->with(['comments'=>$comments, 'threads'=>$threads, 'forum_id'=>$thread->thread_forum]);
    }


    public function pwdcheckfordelete($id){
        $thread= Thread::find($id);
        return view('threads.checkpasswordfordelete')->with('thread',$thread);
    }

    public function pwdcheckfordelete2($id){
        $thread = Thread::find($id);
        $forumid = $thread->thread_forum;


        if($_POST['chk_password'] == $_POST['orig_password']){
            Thread::find($id)->delete();
            Comment::where('com_thread', '=', $id)->delete();
            $comments = Comment::where('com_forum', '=',  $forumid)->get();
            $threads = Thread::where('thread_forum', '=', $forumid)->orderBy('thread_date', 'desc')->get();
            return view('threads.index')->with(['comments'=>$comments, 'threads'=>$threads, 'forum_id'=> $forumid]);
        }
        else{
            return view('threads.errdel')->with('thread', $thread);
        }
    }


}
