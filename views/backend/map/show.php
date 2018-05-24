<!DOCTYPE html>
<html>
<body>
<div>

<div id="map" style="width:500px;height:500px;margin-left:40px"></div>


<div id="map2" style="width:500px;height:500px;margin-left:810px;margin-top:-500px"></div>

<div id="map3" style="width:500px;height:500px;margin-left:40px;margin-top:100px"></div>

<div id="map4" style="width:500px;height:500px;margin-left:810px;margin-top:-500px"></div>



<script>
function myMap() {
var mapOptions = {
    center: new google.maps.LatLng(41, 29),
    zoom: 10,
    mapTypeId: google.maps.MapTypeId.HYBRID
}

var mapOptions2 = {
    center: new google.maps.LatLng(51.5, -0.12),
    zoom: 8,
    mapTypeId: google.maps.MapTypeId.HYBRID
}
var mapOptions3 = {
    center: new google.maps.LatLng(40.7, -74),
    zoom: 12,
    mapTypeId: google.maps.MapTypeId.HYBRID
}

var mapOptions4 = {
    center: new google.maps.LatLng(35, 139),
    zoom: 9,
    mapTypeId: google.maps.MapTypeId.HYBRID
}

var map4 = new google.maps.Map(document.getElementById("map4"), mapOptions4);

var map3 = new google.maps.Map(document.getElementById("map3"), mapOptions3);

var map2 = new google.maps.Map(document.getElementById("map2"), mapOptions);

var map = new google.maps.Map(document.getElementById("map"), mapOptions2);
}


</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARtXHF5xXkGiWD9vnTkNk68a4IuQ64jv8&callback=myMap"></script>

</div>
</body>
</html>
