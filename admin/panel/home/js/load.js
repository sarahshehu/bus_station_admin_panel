// window.coord = [];
// $(document).ready(function() {
// 	$('#linjat').change(function() {
// 		var l = $(this).val();
// 		$(".result").load('../home/maps/query_maps.php', {linja: l}, function(data){
// 			var res = JSON.parse(data);
// 			for (var i = 0; i < res.length; i++) {
// 				coord.push({
// 					location: {
// 						lat: parseFloat(res[i].gjer), 
// 						lng: parseFloat(res[i].gjat)
// 					},
// 					stopover: true
// 				});
// 			}
// 			// alert(res[0].gjer);
// 			alert(coord);

// 		});

// 	});
// });
var coord = [];
function initMap() {
	var map = new google.maps.Map(document.getElementById('map'), {
		center: {
			lat: 41.3275,
			lng: 19.8187
		},
		zoom: 14,
	});

	$('#linjat').change(function() {
		var l = $(this).val();
		$.post('../home/maps/query_maps.php', {linja: l}, function(data){
			var res = JSON.parse(data);
			// alert(res);
			for (var i = 0; i < res.length; i++) {
				coord.push({
					location: {
						lat: parseFloat(res[i].gjer), 
						lng: parseFloat(res[i].gjat)
					},
					stopover: true
				});
			}
			addRoute(coord, map);
		});
	});
}

function addRoute(path, map){
	var ds = new google.maps.DirectionsService;
	var dd = new google.maps.DirectionsRenderer;
	dd.setMap(map);
	var start = path[0].location;
	path.shift();
	var request = {
		origin: start,
		waypoints: path,
		destination: start,
		travelMode: 'DRIVING'
	};
	ds.route(request, function(result, status){
		if (status == 'OK') {
			dd.setDirections(result)
		}
	});
	map.setZoom(14);
}

$('#1').click(function(event) {
	alert("hello darkness my old friend");
});