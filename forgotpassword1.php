

<html>
<head><title>forgot password</title></head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

 </style>
 </head>

</style>
<link href="signup-success.css" rel="stylesheet" type="text/css" />
<body>
<div class="mainr">
<div class="topleft"><img src="img/rich.png" width="250" height="80" /></div>
</div> 

<div class="topleft"><div>
<div>
<a href="index1.php" style="color:GREen">HOME</a></li>
<a href="logout.php" style="color:GREen">LOGOUT</a></li>
</div>
</div>

<div class="right">
<div class="signup" style="text-align:center">Forgot Password</div>
<hr>
</br>

<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>User Name:</td><td><input type='text' name='user'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='submit'/></td></tr>
<tr><td></td><td>SET NEW PASSWORD:</td></td></tr>
<tr><td>User Name:</td><td><input type='text' name='user'/></td></tr>
<tr><td>ENTER NEW PASSWORD:</td><td><input type='text' name='pass0'/></td></tr>
<tr><td>CONFIRM PASSWORD:</td><td><input type='text' name='pass1'/></td></tr>
<tr><td></td><td><input type='submit' name='pass' value='submit'/></td></tr>


</table>
</form>

</div>

<div class="bi">


</div>
<div class="be">


</div>


</body>
</html>


<?php

require 'connect.php';
//$connect = mysql_connect('localhost', 'root', '', 'db');

$pass0 = $_POST['pass0'];
$pass1 = $_POST['pass1'];

$pass0 = mysql_real_escape_string($pass0);
$pass1 = mysql_real_escape_string($pass1);

$username = $_POST['user'];
$username = mysql_real_escape_string($username);

if(isset($_POST['submit']))
	{
	if(empty($_POST['username']))
		{
			$query = "SELECT * FROM members 
						WHERE username = '$username' ";
						
			$result = mysql_query($query);			
			$user = mysql_fetch_array($result);
			
			if($user)
				{ 
					$password = $user['password'];
					echo $password;
				}
						
			echo '<script>alert("password sent to your email")</script>';
			//echo "<script>alert('Your password is .'$password'.')</script>";
			echo $password;		
		}
		
		else
			{
				echo "<script>alert('Please enter your user name')</script>";
				//header('refresh:forgotpassword1.php');
			}
	}	
	
	$errflag = false;
	
	if($pass0 == '') {
		$errmsg_arr[] = 'Confirm password missing';
		$errflag = true;
		
	}
	if( strcmp($pass0, $pass1) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	
	if(isset($_POST['pass']))
	{
//if($usern !== "" && $pass0 !== "" && $pass1 !=="")
	//	{
		
			$update = mysql_query("UPDATE members 
						SET password = '$pass1'
						WHERE username = '$usern'");
			
				$row = mysql_affected_rows($update);
					
					if($usern == $row['UserName'])
						{
							echo '<script>alert("New password set, Please use your new password to log in")</script>';
						}
						
						else
							{
								echo "Password not set, Please try again ";
							}
							
							
		//}		
	
	}
	
?>