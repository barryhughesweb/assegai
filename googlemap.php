<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;"></script>

<?php $address1 = get_field('target_location');
$size = get_field('size_of_area');
$zoom = get_field('zoom_level');
$address = $address1;
function getCoordinates($address){
$address = str_replace(" ", "+", $address); // replace all the white space with "+" sign to match with google search pattern
$url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address+UK";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);
$json = json_decode($response,TRUE); //generate array object from the response from the web
return ($json['results'][0]['geometry']['location']['lat'].",".$json['results'][0]['geometry']['location']['lng']);
}
$coordinates = getCoordinates($address);
?>
<script> 
function initialize() {
  var citymap = {};
citymap['chicago'] = {
  center: new google.maps.LatLng(<?php echo $coordinates ?>),
};
var cityCircle;
var mapOptions = {
    zoom: <?php echo $zoom ?>,
    center: new google.maps.LatLng(<?php echo $coordinates ?>),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
     disableDefaultUI: true,
     zoomControl: true,
     minZoom:true,
     draggable: false,
     scrollwheel: false,
  };
var map = new google.maps.Map(document.getElementById('map-canvas'),
  mapOptions);
for (var city in citymap) {
  var populationOptions = {
      strokeColor: '#022550',
      strokeOpacity: 0.8,
      strokeWeight: 1,
      fillColor: '#022550',
      fillOpacity: 0.35,
      map: map,
      center: citymap[city].center,
      radius: 750 * <?php echo $size; ?>
    };
    cityCircle = new google.maps.Circle(populationOptions);
  }
}
google.maps.event.addDomListener(window, 'resize', initialize);
google.maps.event.addDomListener(window, 'load', initialize);
</script>