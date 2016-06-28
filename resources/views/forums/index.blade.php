@extends('layouts.app')
@section('title')
    Discussion Board - Natural Living
@endsection

@section('navbar')
    this is my sub menu<br />
    @parent
    <br />this is my sub sub menu<br />
@endsection
@section('content')
    <div style="width:90%; margin-left: auto; margin-right: auto;">
    <h2 style="text-align: center;">Natural Living Forum</h2>
    <p style="text-align: right;"><a href="{{ url('/forum/create')}}"><button type="button">Add New Forum</button></a></p>
    <style>
        th{
            padding: 10px;
            background-color: #281E98;
            color: white;
        }
        tr:hover{
            background-color: #E4F472;
        }
    </style>


    <table style="border: 1px solid black; width: 100%;">
        <tr>
            <th>Forum</th>
            <th>Description</th>
            <th>Number of Threads</th>
            <th></th>
        </tr>
        @foreach($forums as $forum)
            <tr>
                <td><a href="{{ url('/thread', $forum->id) }}">{{ $forum->forum_title }}</a></td>
                <td>{{ $forum->forum_description }}</td>
                <td style="text-align:center;"><?php
                    $count = 0;
                    foreach($threads as $thread){
                        if($thread->thread_forum == $forum->id){
                            $count++;
                        }
                    }
                    echo $count;
                    ?></td>
                <td style="text-align:center;">
                    <a href="{{ url('/forum/checkpassword2',$forum->id) }}" style="<?php if($count != 0){echo 'display:none;';} else{echo 'display:inline;';}?>"><button>EDIT</button></a>
                    <a href="{{ url('/forum/checkpassword',$forum->id) }}" ><button>DELETE</button></a>
                </td>
            </tr>
        @endforeach
    </table>
    </div>

@endsection


