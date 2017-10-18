<?php 
	$conn=mysqli_connect("localhost", "root", "","stacione");
	$sql="insert into detyra4 values (1,'41.329864','19.818081', 'qender',500)";
	$query = "select * from detyra4";
	$rez=mysqli_query($conn, $query);
		while ($data=mysqli_fetch_assoc($rez)) {
			echo '<input type="hidden" id="gjer'.$data["id"].'" value="'.$data["lat"].'">';
			echo '<input type="hidden" id="gjat'.$data["id"].'" value="'.$data["lng"].'">';
			echo '<input type="hidden" id="val'.$data["id"].'" value="'.$data["val"].'">';
			echo '<input type="hidden" id="name'.$data["id"].'" value="'.$data["name"].'">';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detyra 4</title>
	<style>
		#map{
			width: 100%;
			height: 500px;
		}
	</style>
</head>
<body>
	<div id="map"></div>
	<script>
	var infoW;
		function initMap(){
			var map = new google.maps.Map(document.getElementById('map'), {
				center: {
					lat: 41.3275,
					lng: 19.8187
				},
				zoom: 14
			});
			createCircle(map);
		}

		function createCircle(map){
			var total = (document.getElementsByTagName('input').length)/4;
			var gjer = {};
			var gjat = {};
			var name = {};
			var val = {};
			var circle;
			for (var i = 1; i <= total; i++) {
				gjer[i] = parseFloat(document.getElementById('gjer'+i).value);
				gjat[i] = parseFloat(document.getElementById('gjat'+i).value);
				name[i] = document.getElementById('name'+i).value;
				val[i] = parseFloat(document.getElementById('val'+i).value);
				circle = new google.maps.Circle({
				center: {
					lat: gjer[i],
					lng: gjat[i]
				},
				radius: val[i],
				strokeColor: '#ff0000',
				strokeOpacity: 1,
				strokeWeight: 2,
				fillColor: '#ff0000',
				fillOpacity: 0.2,
				map: map
			});
				
			circle.addListener('click', function(event){
				var center = this.getCenter();
				for (var j = 1; j <= total; j++) {
					if(gjer[j] == center.lat()){
						poz = j;
					}
				}
				infoW = new google.maps.InfoWindow({
					content: "Name: "+name[poz]+"<br />Value: "+val[poz]+"<br /><button>Delete</button>",
					position: center
				});
				infoW.open(map);
				
			});	

			}

		}

	</script>



	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8vnHNOlgcYkG07SXlK2Vsx8DlKC_OR3E&callback=initMap"></script>
	
</body>
</html>