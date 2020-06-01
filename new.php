<?php

REQUIRE 'connect.php';


$time = date("Y-m-d H:i:s");

$gap = 10;
$time = date("Y-m-d H:i:s", mktime(date("H"),date("i")-$gap, date("s"),date("d"), date("y")));

$ut mysql_query("UPDATE online")

?>