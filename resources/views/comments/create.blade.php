@extends('layouts.app')
@section('title')
    Discussion Board - Natural Living
@endsection


@section('content')
    <div style="width:90%; margin-left: auto; margin-right: auto;">
        @if($errors->any())
            @foreach($errors->all() as $error)
                <li style="color:red; font-weight: bold;">{{ $error }}</li>
            @endforeach
        @endif
        <h2 style="text-align:center;">Add New Comment</h2>
        <style>
            th{
                background-color: #281E98;
                color: white;
            }

        </style>
        <p style="text-align:right; color:red;">*Every form elements are required fields</p>
        <form method="post" action="{{ url('/comment/add', $thread->id) }}">

            {{ csrf_field() }}
            <table style="background-color: #F6FEBE; border: 1px solid lightslategray; padding: 20px; width:100%;">
                <tr>
                    <th>Username : </th>
                    <td><input style="width:80%;" type="text" name="com_username" value="{{ Request::old('com_username') }}" /></td>
                </tr>
                <tr>
                    <th>Password : </th>
                    <td><input style="width:80%;" type="password" name="com_password" value="{{ Request::old('com_password') }}" /></td>
                </tr>
                <tr>
                    <th>Comment: </th>
                    <td><textarea style="width:80%;" name="com_comment">{{ Request::old('com_comment') }}</textarea></td>
                </tr>
                <tr>
                    <?php
                    date_default_timezone_set("America/Toronto");
                    ?>
                    <input type="hidden" name="com_date" value="<?php echo date("Y-m-d H:i:s");?>" />
                    <input type="hidden" name="com_forum" value="<?php echo $thread->thread_forum; ?>" />
                        <input type="hidden" name="com_thread" value="<?php echo $thread->id; ?>" />
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit" />
                        <a href="{{ url('/thread/show', $thread->id)}}"><button type="button">Cancel</button></a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection
