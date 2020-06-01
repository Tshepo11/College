




<html>
<head><title>Admin</title></head>
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
<a href="index1.php" style="color:GREen">HOME</a></li>

<div class="right">
<div class="signup" style="text-align:center">ADMIN LOG IN PAGE</div>
<hr>
</br>

<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>NAME:</td><td><input type='text' name='name'/></td>
<tr><td>PASSWORD:</td><td><input type='text' name='password'/></td>
</tr>
<td></td><td><input type='submit' name='submit' value='Log in'/></td></tr>
							
				

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
session_start();

$name = $_POST['name'];
$paasword = $_POST['password'];

$name = mysql_real_escape_string($name);
$password = mysql_real_escape_string($password);

if(isset($_POST['submit']))
	{
		$query = "SELECT * FROM admin";

		$results = mysql_query($query);
		$row = mysql_fetch_array($results);

	if($name == $row['name']  && $password = $row['password'])
		{
			header('location:admin.php');
		}	
		else if($name !=$row['name'] && $password !=$row['password'])
			{
				echo '<script>alert("Invalid details")</script>';
			}

		else if($name =='' && $password == '')
			{
				echo '<script>alert("Fields can not be empty")</script>';
			}
		
	else
		{
			echo '<scrpit>alert("invalid user, please check your password and name")</script>';
		}
	}
?>