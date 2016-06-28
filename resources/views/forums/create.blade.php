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
    <h2 style="text-align:center;">Add New Forum</h2>
    <style>
        th{
            background-color: #281E98;
            color: white;
        }
        td, th {
            padding: 2px 15px;
        }

    </style>
    <p style="text-align:right; color:red;">*Every form elements are required fields</p>
    <form method="post" action="{{ url('forum') }}">

        {{ csrf_field() }}
        <table style="background-color: #F6FEBE; border: 1px solid lightslategray; padding: 20px; width:100%;">
            <tr>
                <th>Forum Name : </th>
                <td><input style="width:80%;" type="text" name="forum_title" value="{{ Request::old('forum_title') }}" /></td>
            </tr>
            <tr>
                <th>Description : </th>
                <td><textarea style="width:80%;" name="forum_description">{{ Request::old('forum_description') }}</textarea></td>
            </tr>
            <tr>
                <th>Password : </th>
                <td><input style="width:80%;" type="password" name="forum_password" value="{{ Request::old('forum_password') }}" /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Submit" />
                    <a href="{{ url('/forum')}}"><button type="button">Cancel</button></a>
                </td>
            </tr>
        </table>
    </form>
    </div>
@endsection
