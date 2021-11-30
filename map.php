<!DOCTYPE html>
<html lang="en">
  <head>
	  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
	  <meta charset="utf-8">
	  <title>Map Example</title>
	  <script src="assets/js/mapdata.js"></script>
      <?php
      include "assets/php/DB.php";
      $locations = DB::get()->select("SELECT * FROM map_locations ");
      echo $locations
      ?>
      <script>
          var userData =  "<?php $locations; ?>" ;
          for( var key in userData){
              var data = userData[key];
              simplemaps_worldmap_mapdata["locations"] = {"0" : data[0]}
          }

      </script>
	  <script src="assets/js/worldmap.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	  <link rel="stylesheet" href="assets/css/main.css" />
	  <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
  </head>
	<body>
		<div style="margin: auto; width: 50%;">
			<h1>Travel</h1>
			<div style="max-width: 1000px"> <!-- Keep map above fold -->
				<div id="map"></div>
			</div>

		</div>
	</body>
</html>
      
    

