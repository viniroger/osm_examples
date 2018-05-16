<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>OpenStreetMaps - Example with KML</title>
		<!-- Style page to show buttons correctly -->
		<link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
		<!-- Map div's style -->
		<style>
		.map {
			height: 400px;
			width: 100%;
		}
		</style>
		<!-- Openlayers's Javascript -->
		<script src="https://openlayers.org/en/v4.6.5/build/ol.js" type="text/javascript"></script>
	</head>
	<body>
		<h2>Exemplo de mapa com KML</h2>
		<div id="map" class="map"></div>
		<!-- Minimum personalization: center location (lon,lat) and start zoom -->
		<script type="text/javascript">
			<!-- Variable with KML information -->
			var vector = new ol.layer.Vector({
				source: new ol.source.Vector({
					url: 'riobranco.kml',
					format: new ol.format.KML()
				})
			});
			
			var map = new ol.Map({
				target: 'map',
				layers: [
					new ol.layer.Tile({
						source: new ol.source.OSM()
					}),
					vector],
				view: new ol.View({
					center: ol.proj.fromLonLat([-67.813611,-9.973542]),
					zoom: 15
				})
			});
		</script>
	</body>
</html>
