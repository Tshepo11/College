<html>
<head><title>signup-success</title></head>
<style type="text/css">
<!--
body {
	background-image: url(bg/bg3.jpg);
	background-repeat:repeat-x;
	background-color:#d9deeb;

}
-->
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
<div class="s">Welcome To Richfield Social Network</div>
<div class="a"><select name="faulty"><option value="0" selected="selected">CHOOSE FACULTY</option>
	<?PHP$query = mysql_query("SELECT * FROM faculty");?>
	<?php
	
	while($row = mysql_fetch_array($query))
		{
			$faculty = $row['facultyName'];
			
	?>
	<option value= <? $faculty ?> <?echo $faculty ?>> </option>
	
		<?php
		  }
		  ?>
		  
		  </select>
<label>FACULTY<input name="text" type="text" placeholder = "Enter your faculty" />		  
	</div>
	<input name="button" type="submit" value = "submit" />
 <div class="ss"><a href ="index.php" class="a">Click Here To Login</a></div>
</div>

<div class="bi">


</div>
<div class="be">


</div>


</body>
</html>


<?php


$member = $_SESSION['SESS_MEMBER_ID'];
if(isset($_POST['submit']))
	{
		$faculty = $_POST['faculty'];		
		$query =mysql_query("SELECT * FROM faculty");
		$row = mysql_fetch_array($query);
		
		if($faculty = $row['facultyName'])
			{
				
				$ins = ("INSERT INTO friends(member_id,datetime,status,friends_with)
							VALUES('$member', now(),'conf', '$member_id') ");
							
					$result = mysql_query($ins);
					
					echo '<script>alert("Now you go and log in")<script>';
					echo '<script>window:location="signup-success.php"</script>';
	
			}
		
		}

?>