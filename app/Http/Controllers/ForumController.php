<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Forum;
use App\Thread;
use App\Comment;
use Illuminate\Support\Facades\Redirect;


class ForumController extends Controller
{
    public function index(){
        $forums = Forum::all();
        $threads = Thread::all();
        return view('forums.index')->with(['forums'=>$forums, 'threads'=>$threads]);
    }

    public function create(){
        return view('forums.create');
    }

    public function store(Request $request){

        $this->validate($request,
            [
                'forum_title' => 'required',
                'forum_description' => 'required',
                'forum_password' => 'required'
            ]

        );
        $inputs = $request->all();

        Forum::create($inputs);

        return Redirect('forum');
    }



    public function pwd($id){
        $forum= Forum::find($id);
        return view('forums.checkpassword')->with('forum',$forum);
    }

    public function pwd2($id){
        if($_POST['chk_password'] == $_POST['orig_password']){
            Forum::find($id)->delete();
            Thread::where('thread_forum', '=', $id)->delete();
            return Redirect('forum');
        }
        else{
            return view('forums.errdel');
        }
    }

    public function pwd4($id){
        $forum= Forum::find($id);
        return view('forums.checkpassword2')->with('forum',$forum);
    }

    public function pwd3($id){
        if($_POST['chk_password'] == $_POST['orig_password']){
            $forum = Forum::find($id);
            return view('forums.edit')->with('forum',$forum);
        }
        else{
            return view('forums.errdel');
        }
    }

    
    public function update(Request $request,$id){
        $this->validate($request,
            [
                'forum_title' => 'required',
                'forum_description' => 'required',
                'forum_password' => 'required'
            ]

        );
        $forums = $request->all();
        $forum = Forum::find($id);
        $forum->update($forums);

        return Redirect('forum');
    }



}
