@extends('layouts.app')
        <!DOCTYPE html>
<html>
<head>
    <title>Body Data</title>
    <link href="{!! asset('css/styleplanner.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/planner.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bodyDatajs.js') }}"></script>
</head>
<body id="plannerhomebody">
@section('content')
    <div id="sidebarplanner">
        <ul>
            <li><a href="{{url('planner')}}"><i class="fa fa-home fa-2x" aria-hidden="true"></i> Homepage</a></li>
            <li><a href="#"><i class="fa fa-play-circle fa-2x" aria-hidden="true"></i> Start Workout</a> </li>
            <li><a href="{{url('bodyData')}}"><i class="fa fa-user fa-2x" aria-hidden="true"></i> Body Data</a> </li>
            <li><a href="#"><i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> Plan Your Diet</a> </li>
            <li><a href="#"><i class="fa fa-line-chart fa-2x" aria-hidden="true"></i>Statistics</a> </li>
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
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Body Data</div>
                    <div class="panel-body">
                        <a class="btn btn-default" href="#" role="button" id="bodymeasurementbtn">Body Measurements</a>
                        <a class="btn btn-default" href="#" role="button" id="bodydatabtn">Basic Body Data</a>

                        <div id="fetchBodyMeasures">
                            <h3>Log Book - Body Measurements</h3>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th> </th>
                                    <th>Chest</th>
                                    <th>Biceps(L)</th>
                                    <th>Biceps(R)</th>
                                    <th>Thighs</th>
                                    <th>Calves</th>
                                    <th>Waist</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($rowsbm as $row)
                                    <tr>
                                        <td>{{$row->date_Created}}</td>
                                        <td>{{$row->user_Chest}}</td>
                                        <td>{{$row->user_BicepsL}}</td>
                                        <td>{{$row->user_BicepsR}}</td>
                                        <td>{{$row->user_Thighs}}</td>
                                        <td>{{$row->user_Calves}}</td>
                                        <td>{{$row->user_Waist}}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>


                        </div>
                        <div id="fetchBodyData">
                            <h3>Log Book - Body Data</h3>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th> </th>
                                    <th>Height</th>
                                    <th>Weight</th>
                                    <th>Fat</th>
                                    <th>Water</th>
                                    <th>Muscles</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($rowsbd as $row)
                                    <tr>
                                        <td>{{$row->date_Created}}</td>
                                        <td>{{$row->user_Height}}</td>
                                        <td>{{$row->user_Weight}}</td>
                                        <td>{{$row->user_Fat}}</td>
                                        <td>{{$row->user_Water}}</td>
                                        <td>{{$row->user_Muscles}}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div id="body-measurements">
                            <form id="body-measurements-form" method="post" action="{{url('newBodyMeasureData')}}">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="inputchest" class="col-sm-2 form-control-label" name="chestlbl">Chest</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="inputChest" name= "user_Chest" value="1">
                                    </div>
                                    <label for="chestmeasure" class="col-sm-1 form-control-label units" name="chestunitlbl">in</label>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="minusValue('inputChest');"><i class="fa fa-minus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="plusValue('inputChest');"><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputbicepsl" class="col-sm-2 form-control-label" name="bicepsllbl">Biceps(L)</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="inputbicepsl" name= "user_BicepsL" value="1">
                                    </div>
                                    <label for="bicepslmeasure" class="col-sm-1 form-control-label units" name="bicepslunitlbl">in</label>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="minusValue('inputbicepsl');"><i class="fa fa-minus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="plusValue('inputbicepsl');"><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputbicepsr" class="col-sm-2 form-control-label" name="bicepsrlbl">Biceps(R)</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="inputbicepsr" name= "user_BicepsR" value="1">
                                    </div>
                                    <label for="bicepsrmeasure" class="col-sm-1 form-control-label units" name="bicepsrunitlbl">in</label>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="minusValue('inputbicepsr');"><i class="fa fa-minus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="plusValue('inputbicepsr');"><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputthighs" class="col-sm-2 form-control-label" name="thighslbl">Thighs</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="inputthighs" name= "user_Thighs" value="1">
                                    </div>
                                    <label for="thighsmeasure" class="col-sm-1 form-control-label units" name="thighsunitlbl">in</label>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="minusValue('inputthighs');"><i class="fa fa-minus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="plusValue('inputthighs');"><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputcalves" class="col-sm-2 form-control-label" name="calveslbl">Calves</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="inputcalves" name= "user_Calves" value="1">
                                    </div>
                                    <label for="calvesmeasure" class="col-sm-1 form-control-label units" name="calvesunitlbl">in</label>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="minusValue('inputcalves');"><i class="fa fa-minus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="plusValue('inputcalves');"><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputwaist" class="col-sm-2 form-control-label" name="waistlbl">Waist</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="inputwaist" name= "user_Waist" value="1">
                                    </div>
                                    <label for="waistmeasure" class="col-sm-1 form-control-label units" name="waistunitlbl">in</label>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="minusValue('inputwaist');"><i class="fa fa-minus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="plusValue('inputwaist');"><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default" id="bodymeasurementsubmitbtn">
                                            <i class="fa fa-check-circle fa-5x"></i>
                                        </button>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="body-data">
                            <form id="body-data-form" method="post" action="{{url('newBodyData')}}">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="inputheight" class="col-sm-2 form-control-label" name="heightlbl">Height</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="inputHeight" name= "user_Height" value="1">
                                    </div>
                                    <label for="heightmeasure" class="col-sm-1 form-control-label units" name="heightunitlbl">in</label>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="minusValue('inputHeight');"><i class="fa fa-minus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="plusValue('inputHeight');"><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="inputWeight" class="col-sm-2 form-control-label">Weight</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="inputWeight" name="user_Weight" value="1">
                                    </div>
                                    <label for="weightmeasure" class="col-sm-1 form-control-label units">lbs</label>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="minusValue('inputWeight');"><i class="fa fa-minus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="plusValue('inputWeight');"><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputfat" class="col-sm-2 form-control-label">Fat</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="inputFat" name="user_Fat" value="1">
                                    </div>
                                    <label for="fatmeasure" class="col-sm-1 form-control-label units" >%</label>
                                    <div class="col-sm-1">
                                        <a href="#" role="button"  onclick="minusValue('inputFat');"><i class="fa fa-minus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="plusValue('inputFat');"><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputWater" class="col-sm-2 form-control-label">Water</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="inputWater" name="user_Water" value="1">
                                    </div>
                                    <label for="watermeasure" class="col-sm-1 form-control-label units">%</label>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="minusValue('inputWater');"><i class="fa fa-minus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="plusValue('inputWater');"><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputmuscles" class="col-sm-2 form-control-label">Muscles</label>
                                    <div class="col-sm-2">
                                        <input type="number" class="form-control" id="inputMuscles" name="user_Muscles" value="1">
                                    </div>
                                    <label for="musclesmeasure" class="col-sm-1 form-control-label units">%</label>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="minusValue('inputMuscles');"><i class="fa fa-minus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="col-sm-1">
                                        <a href="#" role="button" onclick="plusValue('inputMuscles');"><i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default" id="bodydatasubmitbtn">
                                            <i class="fa fa-check-circle fa-5x"></i>
                                        </button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
</body>
</html>
