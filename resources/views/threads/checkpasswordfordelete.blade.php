@extends('layouts.app')
@section('title')
    Discussion Board - Natural Living
@endsection


@section('content')
    <div style="width:90%; margin-left: auto; margin-right: auto; text-align:center;">

        <h2 style="text-align:center;">Check the Password</h2>

        <form method="post" action="{{ url('/thread/checkpwd02',$thread->id) }}">

            {{ csrf_field() }}

            <p>Please type the password</p>
            <p><input type="password" name="chk_password" /></p>
            <input type="hidden" name="orig_password" value="<?php echo $thread->thread_password ?>" />
            <p><input type="submit" value="submit" /><a href="{{ url('/thread', $thread->thread_forum)}}"><button type="button">Cancel</button></a></p>
        </form>
    </div>
@endsection
