<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF -8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    var myMap;
    var myLatlng = new google.maps.LatLng(-5.8853182,   -35.1736427);
    function initialize() {
        var mapOptions = {
            zoom: 16,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP  ,
            scrollwheel: false
        }
        myMap = new google.maps.Map(document.getElementById('map'), mapOptions);
        var marker = new google.maps.Marker({
            position: myLatlng,
            map: myMap,
            title: 'Name Of Business',
            icon: 'http://www.google.com/intl/en_us/mapfiles/ms/micons/red-dot.png'
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="map" style="width:700px; height: 500px;">

</div>
       
    </head>
    <body onload="locate()">

   <div id="map_canvas" style="width: 700px; height: 500px;"></div>
    </body>
</html>