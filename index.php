<!Doctype html>
<html>
<head>
	<?php
	require "config/dbconnect.php";
	require "template/header.php";
	?>
	<style>
    #mapid{ height: 100% }
  </style>
  <script>
		ACCESS_TOKEN = 'pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpandmbXliNDBjZWd2M2x6bDk3c2ZtOTkifQ._QA7i5Mpkd_m30IGElHziw';
		MB_ATTR = 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>';
		MB_URL = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=' + ACCESS_TOKEN;
		OSM_URL = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
		OSM_ATTRIB = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors';
	</script>
</head>
<body>
	
	<div id="mapid1" class="mapclass" style="height: 720px"></div>

	<script>
	var greenmarker = L.icon({
		iconUrl: 'plugins/leaflet/images/greenmarker.png',
		iconSize:     [38, 38],
		iconAnchor:   [38, 38],
		popupAnchor:  [-20, -39]
	});

	var mymap1 = L.map('mapid1').setView([0.7893, 113.9213], 5);
	L.tileLayer(MB_URL, {attribution: MB_ATTR, id: 'ybpranawa.0p0gee2o'}).addTo(mymap1);

	L.marker([-7.370151, 112.788023], {icon: greenmarker}).addTo(mymap1).bindPopup("<b>SUB</b><br />Juanda Intl.");

	L.marker([-6.131005, 106.65609], {icon: greenmarker}).addTo(mymap1).bindPopup("<b>CGK</b><br />Soekarno-Hatta Intl.");

	</script>

	<?php
	require "template/footer.php";
	?>	
</body>
</html>