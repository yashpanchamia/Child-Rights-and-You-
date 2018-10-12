<!--DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -34.397, lng: 150.644},
    zoom: 6
  });
  var infoWindow = new google.maps.InfoWindow({map: map});
  var geoOptions = {
    enableHighAccuracy: true;
  }
  // Try HTML5 geolocation.
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      infoWindow.setPosition(pos);
      infoWindow.setContent('Location found.');
      map.setCenter(pos);
    }, function() {
      handleLocationError(true, infoWindow, map.getCenter());
    });
  } else {
    // Browser doesn't support Geolocation
    handleLocationError(false, infoWindow, map.getCenter());
  }
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: The Geolocation service failed.' :
                        'Error: Your browser doesn\'t support geolocation.');
}

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAH3bZUkMAVBtyaAIOUTDQ0j0YRgJABJ8Y&signed_in=true&callback=initMap"
        async defer>
    </script>
  </body>
</html>-->

<?php
 
  $db = new mysqli("localhost", "root", "", "sample");
  $adress = $db->query("SELECT adress from users WHERE type=volunteer ")
  $zipLatitude  = $_GET['latitude'];
  $zipLongitude = $_GET['longitude'];
  $radius       = $_GET['radius'];
   
  $query = "SELECT id, latitude, longitude, 
    ( 3959 * acos( cos( radians($zipLatitude) ) * cos( radians( latitude ) ) * 
    cos( radians( longitude ) - radians($zipLongitude) ) + sin( radians($zipLatitude) ) * 
    sin( radians( latitude ) ) ) ) AS distance 
    FROM location HAVING distance < $radius ORDER BY distance";
 
  $result = $db->query($query);
 
  $coordinates = array();
   
  while ($row = $result->fetch_object()) {
    $coordinates[] = array("latitude" => $row->latitude, "longitude" => $row->longitude);   
  }
   
  $coordinates = json_encode($coordinates);
 
  echo $coordinates;
 
?>
