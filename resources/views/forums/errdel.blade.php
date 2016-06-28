@extends('layouts.app')
@section('title')
    Discussion Board - Natural Living
@endsection


@section('content')
    <div style="width:90%; margin-left: auto; margin-right: auto; text-align:center;">

        <h2 style="text-align:center; color:red;">The password you typed doesn't match!</h2>
        <a href="{{ url('/forum')}}"><button type="button">Back to List</button></a>

    </div>
@endsection
