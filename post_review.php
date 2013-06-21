<?php
// add the required files
require 'lib/config.php';

// use mysql real escape to remove sql injections from the comments if any

$review_text = mysql_real_escape_string($_POST['review_text']);
$gender = mysql_real_escape_string($_POST['gender']);
$yelp_id = mysql_real_escape_string($_POST['yelp_id']);

// insert the comment along with it's entries into the database
$query = "INSERT INTO Reviews (review_text, gender, yelp_id) VALUES ('$review_text', '$gender', '$yelp_id')";
$result = mysql_query($query);
?>
