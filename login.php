<?php include("connect.php")?>
<?php
//Start session
session_start();

include 'session1.php';


	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
		//Sanitize the POST values
$UserName = clean($_POST['UserName']);
	$Password =(md5($_POST['Password']));
		
	
		//Create query
	$qry="SELECT * FROM members WHERE UserName='$UserName' AND Password='$Password'";
	$result=mysql_query($qry);
	
		//Check whether the query was successful or not
if($result) {
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['member_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['FirstName'];
			$_SESSION['SESS_LAST_NAME'] = $member['profImage'];
			
			$time = date("H:i:s");
			$member_id = $_SESSION['SESS_MEMBER_ID'];
			$name = $_SESSION['SESS_FIRST_NAME'];
			
			$query = "INSERT INTO online(session, time, name)
				 VALUES('$member_id', '$time', '$name')";
				 
			$res = mysql_query($query);
				$ww = mysql_fetch_array($res);
			
			if($ww)
				{
					//$we = "";
					echo '<script>alert("welcome")</script>';
				}
			
			session_write_close();
			header("location: Home.php");
			exit();
		}else {
			//Login failed
			echo '<script>alert("Incorrect details")</script>';
			header("location: errorlogin.php");
			
			exit();
		}
	}else {
		die("Query failed");
	}	
	
?>
