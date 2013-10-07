<br>
<textarea rows="3" id="review-text" class="input-xlarge"></textarea>
<br>
<select id="gender">
    <option>Male</option>
    <option>Female</option>
</select>
<br>
<button id="submit-review" class="btn btn-primary">Review</button>
<div>
<?php
require 'lib/redis-config.php';
#redis part will go here
echo("<p>".$value."</p>");
?>
</div>


