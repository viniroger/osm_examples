<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>OpenStreetMaps - Example with static image</title>
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
		<h2>Exemplo de mapa</h2>
		<div id="map" class="map"></div>
		<!-- Minimum personalization: center location (lon,lat) and start zoom -->
		<script type="text/javascript">
			var map = new ol.Map({
				target: 'map',
				layers: [
					new ol.layer.Tile({
						source: new ol.source.OSM()
					})
				],
				view: new ol.View({
					center: ol.proj.fromLonLat([-67.813611,-9.973542]),
					zoom: 15
				})
			});
			
			<!-- Include static image over map -->
			map.addLayer(new ol.layer.Image({
				source: new ol.source.ImageStatic({
					url: 'https://www.monolitonimbus.com.br/wp-content/uploads/2014/07/riobranco1.jpg',
					imageExtent: ol.proj.transformExtent(
						[-67.812490, -9.981496, -67.808820, -9.978759],
						'EPSG:4326', 'EPSG:3857'
					)
				}),
				opacity: 0.5
			}));
		</script>
	</body>
</html>
