@extends('layouts.app')
@section('title')
    Discussion Board - Natural Living
@endsection


@section('content')
    <div style="width:90%; margin-left: auto; margin-right: auto; text-align:center;">

        <h2 style="text-align:center;">Check the Password</h2>

        <form method="post" action="{{ url('/forum/checkpassword2',$forum->id) }}">

            {{ csrf_field() }}

            <p>Please type the password</p>
            <p><input type="password" name="chk_password" /></p>
            <input type="hidden" name="orig_password" value="<?php echo $forum->forum_password ?>" />
            <p><input type="submit" value="submit" /><a href="{{ url('/forum')}}"><button type="button">Cancel</button></a></p>
        </form>
    </div>
@endsection
