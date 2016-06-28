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
        <p style="text-align: right;"><a href="{{ url('/forum')}}"><button type="button">Back to the Forum</button></a>
            <a href="{{ url('/thread/create', $forum_id)}}"><button type="button">Add New Thread</button></a></p>
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
                <th>Date</th>
                <th>Thread</th>
                <th>Author</th>
                <th>Num. of Comments</th>
                <th></th>
            </tr>
            @foreach($threads as $thread)
                <tr>
                    <td style="text-align:center;">{{ $thread->thread_date }}</td>
                    <td><a href="{{ url('/thread/show', $thread->id) }}">{{ $thread->thread_topic }}</a></td>
                    <td>{{ $thread->thread_username }}</td>
                    <td style="text-align:center;"><?php
                        $count = 0;
                        foreach($comments as $comment){
                            if($comment->com_thread == $thread->id){
                                $count++;
                            }
                        }
                        echo $count;
                        ?></td>
                    <td style="text-align:center;">
                        <a href="{{ url('/thread/checkpwd01',$thread->id) }}" style="<?php if($count != 0){echo 'display:none;';} else{echo 'display:inline;';}?>"><button>EDIT</button></a>
                        <a href="{{ url('/thread/checkpwd02',$thread->id) }}" ><button>DELETE</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection


