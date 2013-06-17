<?php
    $hostname = 'localhost';
    $user = 'root';
    $password = 'root';
    $db = 'Hagu';

    $link = mysql_connect($hostname, $user, $password) or die("Cannot connect to the database");
    mysql_select_db($db) or die("Cannot select the database");
?>
