<?php
require 'templates/header.php';
?>
<p>Search for the place you are looking for:</p>
<input type="text" id="term" class="input-xlarge" name="term">
<br>
<p>Find your location using <div class="btn btn-danger" onclick="getLocation()">HTML5 Geolocation</div></p>
<div>Latitude:</div>
<input type="text" id="lat" class="input-xlarge" name="lat">
<div>Longitude:</div>
<input type="text" id="lng" class="input-xlarge" name="lng">
<p>or fill the following box with the street address using the format "Street Address, City, State":</p>
<input type="text" id="user-put-address" class="input-xlarge" name="street">
<br>
<button id="submit-btn" class="btn btn-primary" type="none">Submit</button>
<p class="hidden" id="login-invalid">Login Invalid</p>
<?php
require 'templates/footer.php'
?>
