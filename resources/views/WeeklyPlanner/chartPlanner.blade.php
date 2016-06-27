@extends('layouts.app')
@section('content')
<html>
<head>
    <script src="{{asset('Chart.js/Chart.js-master/dist/Chart.min.js')}}"></script>
    <link href="{!! asset('css/styleplanner.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/planner.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/mealPlannerJS.js') }}"></script>
</head>
<body id="chartStatisticsBody">
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
        <span></span>
        <span></span>
        <span></span>
    </div>
</div>
<div class="container">
    <div style="width: 80%;margin-left:60px;">
        <canvas id="mycanvas" height="450" width="600"></canvas>
    </div>
</div>
<script>
    var ctx = document.getElementById("mycanvas").getContext("2d");

    var data = {
        labels: ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        datasets: [
            {
                label: "My Last Week Meal Planner",
                backgroundColor: "rgba(255,99,132,0.2)",
                borderColor: "rgba(255,99,132,1)",
                borderWidth: 1,
                hoverBackgroundColor: "rgba(255,99,132,0.4)",
                hoverBorderColor: "rgba(255,99,132,1)",
                data: [<?php echo $mon;?>, <?php echo $tue;?>, <?php echo $wed; ?>, <?php echo $thu;?>, <?php echo $fri; ?> ,<?php echo $sat;?>, <?php echo $sun;?>],
            }
        ]
    };
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: data
    })
</script>
</body>
</html>

@endsection