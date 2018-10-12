<?php
error_reporting(0);
	$userid=$_GET["u"];
	$rid = $_GET["r"];
	$conn = new mysqli("localhost","root","","sample");
	$dataset = $conn->query("SELECT username,contact FROM users where id='".$userid."'");
	if($conn->query("UPDATE donor_requests SET done='1' WHERE r_id='$rid'")){
		echo "Your Service Confirmed";
	}
	while($row=$dataset->fetch_assoc()){
		echo $row["username"];
		echo "<br/>";
		echo $_GET["a"];
		echo "<br/>";
		echo $row["contact"];
		echo "<br/>";
	}
?>





<?php
$conn = new mysqli("localhost","root","","sample");
$dataset = $conn->query("select * from users");
$addresshort = array();
$address = array();
$name = array();
$i = 0;
while($row = $dataset->fetch_assoc()){
	$from = $row["address"];
	$address[$i] = $row["address"];
	$name[$i] = $row["username"];
	$addresshort[$i] = shortdist($from);
	$i++;
}
$k = 0;
$min = $addresshort[0];
for($j=1 ; $j<count($addresshort) ; $j++)
{
	if($addresshort[$j] < $min)
	{
		$min = $addresshort[$j];
		$k = $j;
	}
}
echo $address[$k];
echo "<br/>";
echo $name[$k];

function shortdist ($from) {
	$to = $_GET['a'];

$from = urlencode($from);
$to = urlencode($to);

$data = file_get_contents("http://maps.googleapis.com/maps/api/distancematrix/json?origins=$from&destinations=$to&language=en-EN&sensor=false");
$data = json_decode($data);

$time = 0;
$distance = 0;

foreach($data->rows[0]->elements as $road) {
    //$time += $road->duration->value;
    $distance += $road->distance->value;
}
return $distance;

}


$conn = new mysqli("localhost","root","","sample");
$dataset = $conn->query("select * from users");

// We define our address
$address1 = $address[$k];
$address2 = $_GET['a'];
// We get the JSON results from this request
$geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address1).'&sensor=false');
// We convert the JSON to an array
$geo = json_decode($geo, true);
$latitude = array();
$longitude = array();
// If everything is cool
if ($geo['status'] = 'OK') {
  // We set our values
  $latitude[0] = $geo['results'][0]['geometry']['location']['lat'];
  $longitude[0] = $geo['results'][0]['geometry']['location']['lng'];
  //echo $latitude[0]." ".$longitude[0];
  //echo "<br/>";
}
$geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($address2).'&sensor=false');
// We convert the JSON to an array
$geo = json_decode($geo, true);
if ($geo['status'] = 'OK') {
  // We set our values
  $latitude[1] = $geo['results'][0]['geometry']['location']['lat'];
  $longitude[1] = $geo['results'][0]['geometry']['location']['lng'];
  //echo $latitude[1]." ".$longitude[1];
}
?>
<html>
<head>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
    var markers = [
            
            {
                //"title": 'Mumbai',
                "lat": <?php echo json_encode($latitude[0]); ?>,
                "lng": <?php echo json_encode($longitude[0]); ?>,
                //"description": 'Mumbai formerly Bombay, is the capital city of the Indian state of Maharashtra.'
            }
        ,
            {
                //"title": 'Pune',
                "lat": <?php echo $latitude[1]; ?>,
                "lng": <?php echo $longitude[1]; ?>,
                //"description": 'Pune is the seventh largest metropolis in India, the second largest in the state of Maharashtra after Mumbai.'
            }
    ];
    window.onload = function () {
        var mapOptions = {
            center: new google.maps.LatLng(markers[0].lat, markers[0].lng),
            zoom: 10,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
        var infoWindow = new google.maps.InfoWindow();
        var lat_lng = new Array();
        var latlngbounds = new google.maps.LatLngBounds();
        for (i = 0; i < markers.length; i++) {
            var data = markers[i];
            var myLatlng = new google.maps.LatLng(data.lat, data.lng);
            lat_lng.push(myLatlng);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: data.title
            });
            latlngbounds.extend(marker.position);
            (function (marker, data) {
                google.maps.event.addListener(marker, "click", function (e) {
                    infoWindow.setContent(data.description);
                    infoWindow.open(map, marker);
                });
            })(marker, data);
        }
        map.setCenter(latlngbounds.getCenter());
        map.fitBounds(latlngbounds);
 
        //***********ROUTING****************//
 
        //Initialize the Path Array
        var path = new google.maps.MVCArray();
 
        //Initialize the Direction Service
        var service = new google.maps.DirectionsService();
 
        //Set the Path Stroke Color
        var poly = new google.maps.Polyline({ map: map, strokeColor: '#4986E7' });
 
        //Loop and Draw Path Route between the Points on MAP
        for (var i = 0; i < lat_lng.length; i++) {
            if ((i + 1) < lat_lng.length) {
                var src = lat_lng[i];
                var des = lat_lng[i + 1];
                path.push(src);
                poly.setPath(path);
                service.route({
                    origin: src,
                    destination: des,
                    travelMode: google.maps.DirectionsTravelMode.DRIVING
                }, function (result, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        for (var i = 0, len = result.routes[0].overview_path.length; i < len; i++) {
                            path.push(result.routes[0].overview_path[i]);
                        }
                    }
                });
            }
        }
    }
</script>
</head>
<body>
<div id="dvMap" style="width: 500px; height: 500px">
</div>
</body>
</html>

<?php
/*
$from = "";
//$to = $_POST['location'];
$to = $_GET['location'];

$from = urlencode($from);
$to = urlencode($to);

$data = file_get_contents("http://maps.googleapis.com/maps/api/distancematrix/json?origins=$from&destinations=$to&language=en-EN&sensor=false");
$data = json_decode($data);

$time = 0;
$distance = 0;

foreach($data->rows[0]->elements as $road) {
    $time += $road->duration->value;
    $distance += $road->distance->value;
}

echo "To: ".$data->destination_addresses[0];
echo "<br/>";
echo "From: ".$data->origin_addresses[0];
echo "<br/>";
echo "Time: ".$time." seconds";
echo "<br/>";
echo "Distance: ".$distance." meters";
*/
?>