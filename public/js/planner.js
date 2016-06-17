$(document).ready(function(){
    $('#sidebar-btn').click(function(){
        $('#sidebarplanner').toggleClass('visible');
    });
    $('#bodymeasurementbtn').click(function()
    {

        $("#body-data").css('display', 'none');
        $("#body-measurements").css('display', 'block');
        $('#fetchBodyData').css('display','none');
        $('#fetchBodyMeasures').css('display','block');


    });
    $('#bodydatabtn').click(function()
    {
        $("#body-measurements").css('display', 'none');
        $("#body-data").css('display', 'block');
        $('#fetchBodyData').css('display','block');
        $('#fetchBodyMeasures').css('display','none');

    });
});
