<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </head>
  <body>
	  <?php
	  		require ("navigationBar.html");
	  ?>
	<div id="topMain">
		<p><center><h1>You are at: KJ Somaiya College.</h1></center></p>
	</div>
    <div id="map"></div>
    <div id="bottomMain" >
    	<button type="button" class="btn btn-success">Get Home</button>
    	<br><br><br>
    	<button type="button" class="btn btn-success">Nearby Stores</button>
    </div>
    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 19.0730, lng: 72.8997},
          zoom: 14
        });
        var infoWindow = new google.maps.InfoWindow({map: map});

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
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYJY_vFKIl-VEdyoEd3hZI8Wv1JdNzTmI&callback=initMap">
    </script>
  </body>
<style>
      html, body {
      	background-image: url("city.jpg");
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #topMain{
      	color: pink ;
      }
      #map {
        height: 50%;
        width: 50%;
        border:1px solid black;
        float: left;
        margin-left: 55px;
      }
      #bottomMain{
      	float: right;
      	margin-right: 155px;
      }
    </style>
</html>
