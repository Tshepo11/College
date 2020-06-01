<?PHP    
require 'connect.php';
 ?>

<html>
<head><title>signup-success</title></head>
<style type="text/css">

</style>
<link href="signup-success.css" rel="stylesheet" type="text/css" />
<body>
<div class="mainr">
<div class="topleft"><img src="img/rich.png" width="250" height="80" /></div>
</div> 
<div class="right">
<div class="signup">Sign Up Success</div>
<hr>
</br>

<label> FACULTY<input name="text" type="text" placeholder = "Enter your faculty" />		  
	<input name="submit" type="submit" value = "submit" />
	</div>
 

<div class="bi">

</div>
<div class="be">
</div>
</body>

	<script>
	
	var x = document.createElement("INPUT");
	x.setAttribute("type", "text");

</script>
	
</html>


<?php

$member = $_SESSION['SESS_MEMBER_ID'];
if(isset($_POST['submit']))
	{
		$faculty = $_POST['faculty'];		
		$query =mysql_query("SELECT * FROM members");
		$row = mysql_fetch_array($query);
		
		if($faculty = $row['UserName'])
			{
				$member_id = $row['member_id'];
				
				$ins = mysql_query("INSERT INTO friends(member_id,datetime,status,friends_with)
							VALUES('$member', now(),'conf', '$member_id') ");
					
					echo '<script>alert("Now you can go and log in")<script>';
					echo '<script>window:location="signup-success.php"</script>';
			}
			else
				{
					echo '<script>alert("User not added, please log in and addfaculty")</script>';
				}
		
		
		echo 'location:home.php';
		
		}
		
				
		$members = mysql_query("SELECT * FROM members");
		while($row = mysql_fetch_array($members)
		{
			$idto = $_GET['id'];
			$member = $_SESSION['SESS_MEMBER_ID'];
			mysql_query("INSERT INTO friends(member_id,datetime,status,friends_with) VALUES('$member',now(),'unconf','$idto') ")or die(mysql_error());

		}
		
		
?>