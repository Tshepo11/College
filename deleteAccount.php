<?php

include 'connect.php';
require 'session.php';

$member_id = $_SESSION['SESS_MEMBER_ID'];

$query = mysql_query("DELETE FROM members  
						WHERE member_id = '". $_SESSION['SESS_MEMBER_ID']."'");
						
						
$day = mysql_query("DELETE FROM day  
						WHERE member_id = '". $_SESSION['SESS_MEMBER_ID']."'");
						
$comment = mysql_query("DELETE FROM comment  
						WHERE member_id = '". $_SESSION['SESS_MEMBER_ID']."'");

$friends = mysql_query("DELETE FROM friends  
						WHERE member_id = '". $_SESSION['SESS_MEMBER_ID']."'");

$likes = mysql_query("DELETE FROM likes  
						WHERE member_id = '". $_SESSION['SESS_MEMBER_ID']."'");	

$month = mysql_query("DELETE FROM month  
						WHERE member_id = '". $_SESSION['SESS_MEMBER_ID']."'");

$music = mysql_query("DELETE FROM music  
						WHERE member_id = '". $_SESSION['SESS_MEMBER_ID']."'");

$pdf = mysql_query("DELETE FROM pdf  
						WHERE member_id = '". $_SESSION['SESS_MEMBER_ID']."'");

$photos = mysql_query("DELETE FROM photos  
						WHERE member_id = '". $_SESSION['SESS_MEMBER_ID']."'");

$postcomment = mysql_query("DELETE FROM postcomment  
						WHERE member_id = '". $_SESSION['SESS_MEMBER_ID']."'");

$videos = mysql_query("DELETE FROM videos  
						WHERE member_id = '". $_SESSION['SESS_MEMBER_ID']."'");

$year = mysql_query("DELETE FROM year  
						WHERE member_id = '". $_SESSION['SESS_MEMBER_ID']."'");						
	
		header('location:index.php');

?>