<br>
<script type="text/javascript" src="static/js/review.js"></script>
<textarea rows="3" id="review" class="input-xlarge"></textarea>
<br>
<select id="gender">
    <option>Male</option>
    <option>Female</option>
</select>
<br>
<button id="submit-review" class="btn btn-primary">Review</button>
<div id="review-list">
<?php
require 'lib/config.php';
$id = "irtefa-coffee";
$num = 1;
$query = "SELECT * from Reviews WHERE yelp_id='".$id."'";

$result = mysql_query($query);
echo("<ul>");
if(mysql_num_rows($result) > 0) {
    while($row = mysql_fetch_assoc($result)) {
        echo("<li>");
        echo($row['review_text']);
        echo("</li>");
        echo("<br>");
    }
}
else {
    echo("suck");
}
echo("</ul>");
?>
</div>


