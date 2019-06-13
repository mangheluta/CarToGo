<?php
	include 'header.php';
?>

<div class="row contact">

	<div class="col-md-6 center">
		<h3>Where you can find us</h3>
	</div>

	<div class="col-md-6">
		<div id="map"></div>
	</div> 

</div>

<script>
	// Initialize and add the map
	function initMap() {
	  // The location of Uluru
	  var uluru = {lat: 44.420117, lng: 26.044449};
	  // The map, centered at Uluru
	  var map = new google.maps.Map(
	      document.getElementById('map'), {zoom: 4, center: uluru});
	  // The marker, positioned at Uluru
	  var marker = new google.maps.Marker({position: uluru, map: map});
	}
</script>

<script async defer
    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBMavG7bi1sSGtemSBuX54PIuJZ2FgjVo0&callback=initMap">
</script>

<?php
	include 'footer.php';
?>

