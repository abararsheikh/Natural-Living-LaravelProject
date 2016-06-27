@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Parks and Recreation Facilities</div>
                <div class="panel-body">
                    <input id="facility" type="text" placeholder="Parks , Recreation Facilities , Recreation Centers"/>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    #map {
        width: 73%;
        height: 600px;
    }
    #result{
        display: inline-block;
        float: right;
        width: 25%;
        background-color: darkgrey;
        padding: 15px;
        overflow:scroll;
        height: 600px;
    }
    #facility{
        width:50%;
    }
</style>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
    var typingTimer;                //timer identifier
    var doneTypingInterval = 2000;  //time in ms, 5 second for example
    var myLatLng=[];
    var infolocation=[];
    function update(mylat){
        myLatLng=mylat;
    }
    $(document).ready(function() {

//on keyup, start the countdown
        $('#facility').on('keyup', function () {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        });
//on keydown, clear the countdown
        $('#facility').on('keydown', function () {
            clearTimeout(typingTimer);
        });

//user is "finished typing," do something
        function doneTyping () {
            var myLatLng1=[];
            var result="";
            var fac=$('#facility').val();
            $.get( "RecreationLocations.xml", function(data) {
                $(data).find('Location').each(function() {
                    var location=$(this);
                    var facility=location.find('LocationName');
                    if (fac == fac.toLowerCase() || fac[0] === fac[0].toUpperCase()){
                        facUP=fac.toUpperCase();
                    }
                    if(facility.text().search(facUP)!=-1){
                        location.children().each(function(){
                            if($(this).prop("tagName")=='Address'){
                                var address=$(this).text().trim();
                                address+=", Toronto, ON, Canada";
                                var GoogleMapAPI = "https://maps.googleapis.com/maps/api/geocode/json";
                                $.getJSON(GoogleMapAPI,{address: address,key:"AIzaSyDonA-uL5xYVbfsk9usZf3DC7zRR0UyMqA"},
                                    function(data){
                                        var mylatLng1=[];
                                        myLatLng1.push(data.results[0].geometry.location);
                                        update(myLatLng1);
                                        // console.log(myLatLng1);
                                        initMap();
                                    }); // end getJSON
                            }
                            result+="<b>"+$(this).prop("tagName")+" : </b>"+$(this).text()+"<br/>";
                        });
                        result+="<hr/>";
                    }
                    else{
                        var facilities=location.find('Facilities');
                        facilities.find('Facility').each(function(){
                            var facility=$(this);
                            if(fac[0] === fac[0].toLowerCase()){
                                fac = fac.toLowerCase().replace(/\b[a-z]/g, function(letter) {
                                    return letter.toUpperCase();
                                });
                                //alert(fac);
                            }
                            if(facility.find('FacilityDisplayName').text().search(fac)!=-1){
                                location.children().each(function(){
                                    if($(this).prop("tagName")=='Address'){
                                        var address=$(this).text().trim();
                                        address+=", Toronto, ON, Canada";
                                        var GoogleMapAPI = "https://maps.googleapis.com/maps/api/geocode/json";
                                        $.getJSON(GoogleMapAPI,{address: address,key:"AIzaSyDonA-uL5xYVbfsk9usZf3DC7zRR0UyMqA"},
                                            function(data){
                                                var mylatLng1=[];
                                                myLatLng1.push(data.results[0].geometry.location);
                                                update(myLatLng1);
                                                // console.log(myLatLng1);
                                                initMap();
                                            }); // end getJSON
                                    }
                                    result+="<b>"+$(this).prop("tagName")+" : </b>"+$(this).text()+"<br/>";
                                });
                                result+="<hr/>";
                            }
                        });
                    }
                    $("#result").html(result);

                }, "xml");
            });
        }

      //  $('#facility').change(function(){

   // });
});
    function initMap() {
        var infor="hhhhhh";
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center:  {lat: 43.660800, lng: -79.415168}
        });
        var infowindow = new google.maps.InfoWindow({
            content: infor,
            maxWidth: 500
        });
        var markers=[];
        var location;
        var information;
        information=document.getElementById('result').innerHTML;
        var inf=information.split("<hr>");

        for(var i= 0;i<myLatLng.length;i++){
            location=myLatLng[i];
            var marker=new google.maps.Marker({
                position: location,
                map: map,
                animation: google.maps.Animation.DROP,
                title: "Tourist locations"
            });
            google.maps.event.addListener(marker, "click", (function(marker) {
                var test=inf[i];
                return function(evt) {
                    infowindow.setContent(test);
                    infowindow.open(map, marker);
                }
            })(marker));

            markers.push(marker);
        }
    }
</script>
<div id="result"></div>
<div id="map"></div>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDonA-uL5xYVbfsk9usZf3DC7zRR0UyMqA&callback=initMap">
</script>

@endsection