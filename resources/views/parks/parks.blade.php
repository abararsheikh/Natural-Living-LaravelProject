
<html>
<head>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
           // alert("test");
            var result="<select id='type'><option value=''>Select a Facility</option>";
            $.get( "RecreationLocations.xml", function(data) {
                $(data).find('Location').each(function() {
                    var location=$(this);
                    var facilities=location.find('Facilities');
                    facilities.find('Facility').each(function(){
                        var type=$(this).find('FacilityDisplayName').text();
                        result+="<option value='"+type+"'>"+type+"</option>"
                    })
                });
                result+="</select>";
                $(".panel-body").html(result);
            }, "xml");
        });
    </script>
</head>
<body>
<div class="panel-body"></div>
</body>
</html>