<?php

include "kepala/head_mat.php";

?><body>
<br><br>
<div class="container">

    <div id="map" style="padding-top:1px;width:auto;height:400px;"></div>

</div>
<script>
function myMap() {
var mapOptions = {
center: new google.maps.LatLng(-6.91757808164908, 107.60850421142572),
zoom: 10,
mapTypeId: google.maps.MapTypeId.ROADMAP
}
    var myCenter = new google.maps.LatLng(-6.91757808164908,107.60850421142572);
    var marker = new google.maps.Marker({
        position: myCenter,
        animation: google.maps.Animation.BOUNCE
    });

var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABAiRMExl_KVCugrFbUO5FJwNTo_94vt0&callback=myMap"></script>




</body>
