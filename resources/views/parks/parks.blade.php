@extends('layouts.app')

@section('content')
<style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
    #map {
        width: 100%;
        height: 400px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Parks and Recreation Facilities</div>

                <div class="panel-body">
                    <input id="facility" type="text" />
                </div>
            </div>
        </div>
    </div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
    var myLatLng=[];
    var infolocation=[];
    function update(mylat){
        myLatLng=mylat;
    }
    $(document).ready(function() {
        $('#facility').change(function(){
            var myLatLng1=[];
            var result="";
            var fac=$('#facility').val();
            $.get( "RecreationLocations.xml", function(data) {
                $(data).find('Location').each(function() {
                    var location=$(this).find('Facilities');
                    location.find('Facility').each(function(){
                        var facility=$(this);
                        if(facility.find('FacilityDisplayName').text()==fac){
                            location.children().each(function(){
                                if($(this).prop("tagName")=='Address'){
                                    var address=$(this).text().trim();
                                    address+=", Toronto, ON, Canada";
                                    var GoogleMapAPI = "https://maps.googleapis.com/maps/api/geocode/json";
                                    $.getJSON(GoogleMapAPI,{address: address,key:"AIzaSyDonA-uL5xYVbfsk9usZf3DC7zRR0UyMqA"},
                                        function(data){
                                            //alert('test');
                                            var mylatLng1=[];
                                            myLatLng1.push(data.results[0].geometry.location);
                                            update(myLatLng1);
                                            console.log(myLatLng1);
                                            initMap();
                                        }); // end getJSON
                                }
                                //if($(this).text()!="" && ($(this).prop("tagName")!='LocationID') && ($(this).prop("tagName")!='Address')&& ($(this).prop("tagName")!='parent_page_2')&& ($(this).prop("tagName")!='facility')&& ($(this).prop("tagName")!='ADDRESS_POINT_ID')){
                                result+="<b>"+$(this).prop("tagName")+" : </b>"+$(this).text()+"<br/>";
                                //}
                            });
                            result+="<hr/>";
                        }
                    })

                    initMap();
                });
                $("#result").html(result);

            }, "xml");
        });
    });
    function initMap() {
        var infor="hhhhhh";
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 12,
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

<!--<script>
    $(document).ready(function() {
        // alert("test");
        var result="<select id='type'><option value=''>Select a Facility</option>";
        $.get( "RecreationLofacions.xml", function(data) {
            $(data).find('Lofacion').each(function() {
                var lofacion=$(this);
                var facilities=lofacion.find('Facilities');
                facilities.find('Facility').each(function(){
                    var type=$(this).find('FacilityDisplayName').text();
                    result+="<option value='"+type+"'>"+type+"</option>"
                })
            });
            result+="</select>";
            $(".panel-body").html(result);
        }, "xml");
    });
</script>-->