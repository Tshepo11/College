
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
<div class="signup" style="text-align:center">ALL USERS</div>

<hr>
</br>

<form action='' method='post'>
			

</table>
</form>
<tr>
<td></td><td><input type='submit' name='submit' value='USERS'/></td></tr>
	
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

$session = session_id();
$time = time();
$time_check = $time - 300;


if(isset($_POST['submit']))
{
$query = "SELECT * 
			FROM session
			WHERE session ='$session'";
			
	$result = mysql_query($query);
	$users = mysql_affected_rows($result);
	
if($users > 0)
	{
		$query1 = "INSERT INTO online(session, time)
					VALUES('$session','$time' )";
			$result1 = mysql_query($query1);		
	}	
		else
			{
				$query2 = "UPDATE online
							SET time = '$time'
							WHERE session = '$session'";
					$result2 = mysql_query($query2);		
							
			}
			
			$sql = "SELECT * 
					FROM online";
				$result3 = mysql_query($sql);
					
				$count_user_online = mysql_num_rows($result3);
					
			echo  '<script>alert($count_user_online)</script>';	
				
		$q = "DELETE FROM online
				WHERE time<$time_check";
			$qr = mysql_query($q);

		mysql_close();	
}		
		
/*		
		/////////////////////////////////////////////
		////////////
		//////
		
		/////
		$display = mysql_query("SELECT *
					FROM members");
				
					$disp = mysql_query($display);
			$row = mysql_fetch_array($disp);
				
				if($row)
					{
						/*echo '<div clas="container">
								<div clas="table">
									<table>
										<tr><td>Username ."'$disp['username']."'</td>
											<td>
						
						';
						echo '<script>alert(.'$disp['UserName'].'"'.$disp['faculty']")</script>';
					
						echo $row['username'];
					
					}

					*/
/*
session_start();

if(isset($_POST['submit']))
{
$q = "SELECT *
		FROM members";
		
	$mem = mysql_query($q);
	$members = mysql_fetch_array($mem);
	
	if($members)
		{		
			echo $members['username'];
			echo $members['firstname'];
			echo $members['email'];
			echo '<br>';
		}

}
*/

?>