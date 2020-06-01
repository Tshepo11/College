


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
<a href="logout.php" style="color:green">LOGOUT</a>

<div class="right">
<div class="signup" style="text-align:center">Admin page</div>
<hr>
</br>

<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td></td><td>ADD USER</td></tr>
<tr><td>Email:</td><td><input type='text' name='email' placeholder="User Email" align="center"/></td>
<tr><td>Faculty:</td><td><input type='text' name='faculty'placeholder="Faculty name" align="center"/></td></tr>
<tr>
<td></td><td><input type='submit' name='submit' value='ADD USER'/></td></tr>
<tr><td>DELETE:</td><td><input type='text' name='delete' placeholder='enter username' /></td>
<td></td><td><input type='submit' name='del' value='DELETE MEMBER'/></td></tr>
			</tr>	
		<tr>
			<td></td><td><a href="members.php">MEMBERS</td></tr>
			<tr><td></td><td><a href="online.php">ONLINE USERS</td>
				</tr>
			
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

$email = $_POST['email'];
$faculty = $_POST['faculty'];

$faculty = mysql_real_escape_string($faculty);
$email = mysql_real_escape_string($email);

	
if(isset($_POST['submit']))
	{	
		if($email !='' && $faculty !='')
		{
			$query = "INSERT INTO user(user_id, email, faculty)	
						VALUES ('', '$email', '$faculty') ";						
			$result = mysql_query($query);			
			$user = mysql_fetch_array($result);

			if($user)
				{
					echo '<script>alert("user successfully added")</script>';
				}
				echo '<script>alert("user successfully added")</script>';
		}
		else
		{
		echo '<script>alert("Fields can not be empty")</script>';
		}
	}		
	

$delete = $_POST['delete'];

if(isset($_POST['del']))
	{	
		if($delete !='' )
		{
			$query = "SELECT * FROM members
					WHERE UserName = '$delete'";					
			$result = mysql_query($query);
				$row = mysql_fetch_array($result);
				
			if($delete == $row['UserName'])
			{
				$query = "DELETE FROM members
					WHERE UserName = '$delete'";
					
					$dell = mysql_query($query);
					$d = mysql_fetch_array($dell);
					
					if($d)
						{
							echo '<script>alert("user deleted")<script>';
						}
												
					else if($delete != $row['UserName'])
						{
							echo 'user does not exist';
						}
						else
							{
							echo '<script>alert(""Please enter usser name")<script>';
							}
			}
		
			else
				{
					echo '<script>alert(""Please enter usser name")<script>';
				} 
		}		
			
	}

	
	
?>