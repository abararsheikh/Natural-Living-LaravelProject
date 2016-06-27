@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <title>Weekly Planner Home</title>
    <link href="{!! asset('css/styleplanner.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/planner.js') }}"></script>
</head>
<body id="plannerhomebody" style="background-image:url('{{ asset('/Images/photo-1427384906349-30452365b5e8.jfif') }}');background-repeat: no-repeat;background-size: cover;background-size: 100%;";>
@section('content')
    <div id="sidebarplanner">
        <ul>
            <li><a href="{{url('planner')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Homepage</a></li>
            <li><a href="#"><i class="fa fa-play-circle fa-2x" aria-hidden="true"></i> Start Workout</a> </li>
            <li><a href="{{url('bodyData')}}"><i class="fa fa-user fa-2x" aria-hidden="true"></i> Body Data</a> </li>
            <li><a href="{{url('mealplanner')}}"><i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> Plan Your Diet</a> </li>
            <li><a href="{{url('chart')}}"><i class="fa fa-line-chart fa-2x" aria-hidden="true"></i>Statistics</a> </li>
            <li><a href="{{url('quotations')}}"><i class="fa fa-quote-left fa-2x" aria-hidden="true"></i>Daily Quote</a> </li>
        </ul>
        <div id="sidebar-btn">
            <span style="background-color: white;"></span>
            <span style="background-color: white;"></span>
            <span style="background-color: white;"></span>
        </div>
    </div>
    <div class="container" style="margin-top: 15%;">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info">
                    <div class="panel-heading" style="background-color:#E91E63;color: white;">Daily Motivational Quote</div>
                    <div class="panel-body">
                        <!--JavaScript code for single Motivational Quote of the Day, http://www.tqpage.com/ from The Quotations Page-->
                        <script language="javascript" src="http://www.quotationspage.com/data/1mqotd.js">
                        </script> <!--End JavaScript Quotations code-->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>


