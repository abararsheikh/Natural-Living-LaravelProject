@extends('layouts.app')
        <!DOCTYPE html>
<html>
<head>
    <title>Meal Planner</title>
    <link href="{!! asset('css/styleplanner.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/planner.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/mealPlannerJS.js') }}"></script>
</head>
<body id="plannerhomebody">
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
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <!-- Adding Breakfast -->
            <div class="buttons-navigation" style="margin-left: 25%;margin-bottom: 5%;">
                <ul class="nav nav-pills">
                    @if($today == 'Mon')
                        <li><a class="btn btn-default" id="Mon" href="{{url('/mealplanner') }}">Monday</a></li>
                    @elseif($day== 'Mon')
                        <li><a class="btn btn-default active" id="Mon" href="{{url('/mealplanner/Mon') }}">Monday</a></li>
                    @else
                        <li><a class="btn btn-default" id="Mon" href="{{url('/mealplanner/Mon') }}">Monday</a></li>
                    @endif

                    @if($today == 'Tue')
                        <li><a class="btn btn-default" id="Tue" href="{{url('/mealplanner') }}">Tuesday</a></li>
                    @elseif($day== 'Tue')
                        <li><a class="btn btn-default active" id="Tue" href="{{url('/mealplanner/Tue') }}">Tuesday</a></li>
                    @else
                        <li><a class="btn btn-default" id="Tue" href="{{url('/mealplanner/Tue') }}">Tuesday</a></li>
                    @endif

                    @if($today == 'Wed')
                        <li><a class="btn btn-default " id="Wed" href="{{url('/mealplanner') }}">Wednesday</a></li>
                    @elseif($day== 'Wed')
                        <li><a class="btn btn-default active" id="Wed" href="{{url('/mealplanner/Wed') }}">Wednesday</a></li>
                    @else
                        <li><a class="btn btn-default" id="Wed" href="{{url('/mealplanner/Wed') }}">Wednesday</a></li>
                    @endif

                    @if ($today == 'Thu')
                        <li><a class="btn btn-default " id="Thu" href="{{url('/mealplanner') }}">Thursday</a></li>
                    @elseif($day== 'Thu')
                        <li><a class="btn btn-default active" id="Thu" href="{{url('/mealplanner/Thu') }}">Thursday</a></li>
                    @else
                        <li><a class="btn btn-default" id="Thu" href="{{url('/mealplanner/Thu') }}">Thursday</a></li>
                    @endif

                    @if($today == 'Fri')
                        <li><a class="btn btn-default " id="Fri" href="{{url('/mealplanner') }}">Friday</a></li>
                    @elseif($day== 'Fri')
                        <li><a class="btn btn-default active" id="Fri" href="{{url('/mealplanner/Fri') }}">Friday</a></li>
                    @else
                        <li><a class="btn btn-default" id="Fri" href="{{url('/mealplanner/Fri') }}">Friday</a></li>
                    @endif

                    @if($today == 'Sat')
                        <li><a class="btn btn-default" id="Sat" href="{{url('/mealplanner') }}">Saturday</a></li>
                    @elseif($day== 'Sat')
                        <li><a class="btn btn-default active" id="Sat" href="{{url('/mealplanner/Sat') }}">Saturday</a></li>
                    @else
                        <li><a class="btn btn-default" id="Sat" href="{{url('/mealplanner/Sat') }}">Saturday</a></li>
                    @endif

                    @if($today == 'Sun')
                        <li><a class="btn btn-default active" id="Sun" href="{{url('/mealplanner') }}">Sunday</a></li>
                    @elseif($day== 'Sun')
                        <li><a class="btn btn-default active" id="Sun" href="{{url('/mealplanner/Sun') }}">Sunday</a></li>
                    @else
                        <li><a class="btn btn-default" id="Sun" href="{{url('/mealplanner/Sun') }}">Sunday</a></li>
                    @endif
                </ul>
            </div>
            <div class="panel-body">
                @include('common.errors')

                        <!-- New Task Form -->
                <form action="{{ url('breakfastAdd',$day) }}" method="POST" class="form-horizontal">
                    {{ csrf_field() }}

                            <!-- Task Name -->
                    <div class="form-group">
                        <label for="task" class="col-sm-3 control-label">Breakfast</label>

                        <div class="col-sm-6">
                            <input type="text" name="breakfastFoodName" id="bfood-name" class="form-control">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default">
                                <i class="fa fa-plus"></i> Add Food
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Display Meals -->
    <!-- Current Tasks -->
    <div class="container col-sm-offset-3 col-sm-6">
        @if (count($mealType) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Breakfast Items
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">

                        <!-- Table Headings -->
                        <thead>
                        <th>Meal Added</th>
                        <th>&nbsp;</th>
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                        @foreach ($mealType as $meal)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $meal->food_Wish }}</div>
                                </td>

                                <td>
                                    <form action="{{ url('deleteMealFoodDay/'.$meal->id)."/".$day }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    @if($meal->food_Status == false)
                                        <form action="{{ url('doneMealFoodDay/'.$meal->id)."/".$day }}" method="POST">
                                            {{ csrf_field() }}

                                            <button type="submit" class="btn btn-default">
                                                <i class="fa fa-square-o" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    @elseif($meal->food_Status == true)
                                        <form action="{{ url('undoMealFoodDay/'.$meal->id)."/".$day }}" method="POST">
                                            {{ csrf_field() }}

                                            <button type="submit" class="btn btn-default" name="breakfastFoodAdd">
                                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>

    <!-- Adding Lunch -->
    <div class="container">
        <div class="row">
            <br/>
            <div class="panel-body">

                <!-- New Task Form -->
                <form action="{{ url('lunchAdd',$day) }}" method="POST" class="form-horizontal" name="formLunch">
                    {{ csrf_field() }}

                            <!-- Task Name -->
                    <div class="form-group">
                        <label for="lunch" class="col-sm-3 control-label">Lunch</label>

                        <div class="col-sm-6">
                            <input type="text" name="lunchFoodName" id="lfood-name" class="form-control">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default" name="lunchFoodAdd">
                                <i class="fa fa-plus"></i> Add Food
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Showing Values Added in Lunch -->

    <!-- Display Meals -->
    <!-- Current Tasks -->
    <div class="container col-sm-offset-3 col-sm-6">
        @if (count($mealTypeLunch) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Lunch Items
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">

                        <!-- Table Headings -->
                        <thead>
                        <th>Meal Added</th>
                        <th>&nbsp;</th>
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                        @foreach ($mealTypeLunch as $meal)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $meal->food_Wish }}</div>
                                </td>

                                <td>
                                    <form action="{{ url('deleteMealFoodDay/'.$meal->id)."/".$day }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    @if($meal->food_Status == false)
                                        <form action="{{ url('doneMealFoodDay/'.$meal->id)."/".$day }}" method="POST">
                                            {{ csrf_field() }}

                                            <button type="submit" class="btn btn-default">
                                                <i class="fa fa-square-o" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    @elseif($meal->food_Status == true)
                                        <form action="{{ url('undoMealFoodDay/'.$meal->id)."/".$day }}" method="POST">
                                            {{ csrf_field() }}

                                            <button type="submit" class="btn btn-default" name="lunchFoodAdd">
                                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>


    <!-- Adding Dinner -->

    <div class="container">
        <div class="row">
            <br/>
            <div class="panel-body">

                <!-- New Task Form -->
                <form action="{{ url('dinnerAdd',$day) }}" method="POST" class="form-horizontal" name="formDinner">
                    {{ csrf_field() }}

                            <!-- Task Name -->
                    <div class="form-group">
                        <label for="dinner" class="col-sm-3 control-label">Dinner</label>

                        <div class="col-sm-6">
                            <input type="text" name="dinnerFoodName" id="dfood-name" class="form-control">
                        </div>
                    </div>

                    <!-- Add Task Button -->
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-default" name="dinnerFoodAdd">
                                <i class="fa fa-plus"></i> Add Food
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>




    <div class="container col-sm-offset-3 col-sm-6">
        @if (count($mealTypeDine) > 0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Dinner Items
                </div>

                <div class="panel-body">
                    <table class="table table-striped task-table">

                        <!-- Table Headings -->
                        <thead>
                        <th>Meal Added</th>
                        <th>&nbsp;</th>
                        </thead>

                        <!-- Table Body -->
                        <tbody>
                        @foreach ($mealTypeDine as $meal)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $meal->food_Wish }}</div>
                                </td>

                                <td>
                                    <form action="{{ url('deleteMealFoodDay/'.$meal->id)."/".$day }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    @if($meal->food_Status == false)
                                        <form action="{{ url('doneMealFoodDay/'.$meal->id)."/".$day }}" method="POST">
                                            {{ csrf_field() }}

                                            <button type="submit" class="btn btn-default">
                                                <i class="fa fa-square-o" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    @elseif($meal->food_Status == true)
                                        <form action="{{ url('undoMealFoodDay/'.$meal->id)."/".$day }}" method="POST">
                                            {{ csrf_field() }}

                                            <button type="submit" class="btn btn-default" name="lunchFoodAdd">
                                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                            </button>
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>

@endsection
</body>
</html>


