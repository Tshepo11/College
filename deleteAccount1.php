<?php

include 'connect.php';
//require 'session.php';

//$member_id = $_SESSION['SESS_MEMBER_ID'];
/*
$query = "DELETE FROM  members 
			WHERE member_id = '". $_SESSION['SESS_MEMBER_ID']."';
			DELETE FROM comment 
				WHERE member_id= '". $_SESSION['SESS_MEMBER_ID']."';
			DELETE FROM mesdsages
				WHERE member_id= '". $_SESSION['SESS_MEMBER_ID']."';
			DELETE FROM photos
				WHERE member_id= '". $_SESSION['SESS_MEMBER_ID']."';
			DELETE FROM friends
				WHERE member_id= '". $_SESSION['SESS_MEMBER_ID']."'
			and members.member_id = friends.member_id; ";
			
		*/	
			
			$query = "DELETE FROM  members 
			WHERE member_id = '$id'";
					
$result = mysql_query($query);

if($result)
	{
		header("location:index.php");
	}	

?>