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
        <h2 style="text-align:center;">Edit the Thread</h2>
        <style>
            th{
                background-color: #281E98;
                color: white;
            }

        </style>
        <p style="text-align:right; color:red;">*Every form elements are required fields</p>
        <form method="post" action="{{ url('/thread/edit', $thread->id) }}">

            {{ csrf_field() }}
            <table style="background-color: #F6FEBE; border: 1px solid lightslategray; padding: 20px; width:100%;">
                <tr>
                    <th>Thread Topic :  </th>
                    <td><input style="width:80%;" type="text" name="thread_topic" value="{{ $thread->thread_topic }}" /></td>
                </tr>
                <tr>
                    <th>Thread Content :</th>
                    <td><textarea style="width:80%;" name="thread_content">{{ $thread->thread_content }}</textarea></td>
                </tr>
                <tr>
                    <th>Username : </th>
                    <td><input style="width:80%;" type="text" name="thread_username" value="{{ $thread->thread_username }}" /></td>
                </tr>
                <tr>
                    <th>Password : </th>
                    <td><input style="width:80%;" type="password" name="thread_password" value="{{ $thread->thread_password }}" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit" />
                        <a href="{{ url('/thread',  $thread->thread_forum)}}"><button type="button">Cancel</button></a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection
