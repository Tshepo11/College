<?php include('connect.php');?>	
<?php

		//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
///
		$vfname = "";
		$vlname = "";
		$vlogin="";
		$vpassword="";
		$vcpassword="";
	    $vaddress="";
		$vcnumber="";
		$vemail="";
		$vfaculty ="";

		$a="";
		$u="";
		$e="";
		
		
		
//

		$fname = "";
		$lname = "";
		$login="";
		$password="";
		$cpassword="";
	    $address="";
		$cnumber="";
		$email="";
		$faculty = "";
		
if (isset($_POST['Submit'])) {
	
	//Sanitize the POST values
	$fname = ($_POST['fname']);
	$lname = ($_POST['lname']);
	$login =($_POST['login']);
	$password = md5($_POST['password2']);
	$cpassword = md5($_POST['cpassword']);
	$address = ($_POST['address']);
	$cnumber =($_POST['cnumber']);
	$email = ($_POST['email']);
	$gender = ($_POST['gender']);
	//$bdate = ($_POST['month']);
	$propic = ($_POST['propic']);
	//$bday=$_POST['month'];
	$faculty = $_POST['faculty'];
  	
	$pattern = "/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i";
	//Input Validations
		
	if (!preg_match($pattern,$email)){
	$e = "Invalid Email Address";	
}

if ($email=="") {
		$e	= "";
		}
	if ($fname=="") {
		$vfname	= "<td>Field Missing.</td>";
		}else{
		$vfname="";
		}

			if($faculty == "")
			{ $vfaculty = "<td>Field Missing</td>";
			}	else{
				$vfaculty ="";
			}
			
	if ($lname==""){
	$vlname	= "<td>Field Missing.</td>";
		}else{
		$vlname="";
		}
	if ($login=="") {
	$vlogin	= "<td>Field Missing.</td>";
	} else{
	$vlogin = "";
	}
		if ($password=="") {
		$vpassword	= "<td>Field Missing.</td>";
	} else{
	$vpassword="";
	}
		if ($cpassword=="") {
		$vcpassword	= "<td>Field Missing.</td>";
	} else{
	$vcpassword="";
	}
	if ($address=="") {
	$vaddress	= "<td>Field Missing.</td>";
	} else{
	$vaddress="";
	}

			if ($cnumber=="") {
		$vcnumber= "<td>Field Missing.</td>";
	} else{
	$vcnumber="";
	}
	if ($email=="") {
		$vemail	= "<td>Field Missing.</td>";
	} else{
	$vemail="";
	}
	
	if($cpassword!=$password){
	$a="Password do not Match";}
	if ($cpassword==""){
	$a="";
	}

	
	//date_default_timezone_set("Cairo");
	
	function getDatetimeNow()
		{
			$tz = new dateTimeZone('Africa/Pretoria');
			
			$datetime = new dateTime();
			$datetime -> setTimezone($tz);
			
			return $datetime->format('mm/dd/yy');
		
	
		if($datetime >= new date())
			{
				echo "user is not yet born";
			}
		}
	//Check for duplicate login ID
	if($login != '') {
		$query = "SELECT * FROM members WHERE UserName='$login'";
		$result = mysql_query($query);
		if($result) {
			if(mysql_num_rows($result) > 0) {
			$u = 'UserName already in use';
			
			}
			@mysql_free_result($result);
		}
		else {
		
			die("Query failed");
		}
	}
	
	
	
	

if ($fname!= "" && $lname!= "" && $login!= "" && $password!= "" && $cpassword==$password && $address!="" && preg_match($pattern,$email) && $cnumber!="" ) {
		$link = mysql_connect("localhost", "root", "");
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	
	}
	
	//Select database
	$db = mysql_select_db("db");
	if(!$db) {
		die("Unable to select database");
	}
				
		$email = $_POST['email'];		
					
		$q = "SELECT * from user
				WHERE email = '$email'";
		$result =  mysql_query($q);
		$row = mysql_fetch_array($result);
		
		if($email == $row['email'])
			{
					
				$query = mysql_query("INSERT INTO members(UserName, Password, FirstName, LastName, Address, ContactNo, email, Gender,faculty, profImage,curcity)
				VALUES('$login','$password','$fname','$lname','$address','$cnumber','$email','$gender', '$faculty', '$propic','$address')")or die(mysql_error());  
				
				
				////////
				/////////////////////////////
				
				$faculty = $_POST['faculty'];
				$fa = mysql_query("SELECT * FROM members WHERE UserName= '$faculty'");
				$res = mysql_fetch_array($fa);				
				
				$member_id = $res['member_id'];
				
				if($faculty == $res['UserName'])	
					{
						 
						//$addfriend = mysql_query("INSERT INTO friends(member_id,datetime,status,friends_with) VALUES('$member',now(),'conf','$res['member_id']) ")or die(mysql_error());
					
					$ins = ("INSERT INTO friends(member_id,datetime,status,friends_with)
							VALUES('$member', now(),'conf', '$member_id') ");
							
					$result = mysql_query($ins);		
					
					}
				
				header('Location: signup-success.php');
				echo "login success";
			}
			
			else{
				echo '<script>alert("email does not exist")</script>';
				header('refresh:index.php');
			}
			
			
		}		
}
			
		
							
							/*
				if($faculty ==  'ICT' || $faculty == 'HUMANITIES' || $faculty == 'ECONOMICS' || $faculty == 'SCIENCE')		//$row['facultyName'])
					{
						$select = mysql_query(" SELECT * FROM members WHERE UserName ='$faculty' ");
						while($results = mysql_fetch_array($select))
						{						
							if($faculty == $result['UserName'])
							{
							mysql_query("INSERT INTO friends(member_id,datetime,status,friends_with) VALUES('$member',now(),'unconf','$select') ")or die(mysql_error());
							}
							else {
						echo '<script>alert("Faculty does not exist")</script>';
							}
						}
					}
	
				*/
	
?>

<html>
<head><title>sign up</title></head>

<style type="text/css">
<!--
body {
	background-image: url(bg/bg3.jpg);
	background-repeat:repeat-x;
	background-color:#d9deeb;

}
-->
</style>
<link href="index.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="img/icon.png" type="image" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="./js/jquery-1.4.2.min.js"></script>
	<link href="facebox1.2/src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
			<link href="../css/example.css" media="screen" rel="stylesheet" type="text/css" />
			<script src="facebox1.2/src/facebox.js" type="text/javascript"></script>
			<script type="text/javascript">

jQuery(document).ready(function($) {
  $('a[rel*=facebox]').facebox() 
  	closeImage   : " ../src/closelabel.png" 
})
</script>


<script>
		!window.jQuery && document.write('<script src="jquery-1.4.3.min.js"><\/script>');
	</script>
	<script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.4.css" media="screen" />
 	<link rel="stylesheet" href="style.css" />
	<script type="text/javascript">
		$(document).ready(function() {
			
			
		$("a#example2").fancybox({
				'overlayShow'	: false,
				'transitionIn'	: 'elastic',
				'transitionOut'	: 'elastic'
			});


			$("a[rel=example_group]").fancybox({
				'transitionIn'		: 'none',
				'transitionOut'		: 'none',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			
		});
	</script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<!--datepicker -->
<link href="css/datepicker/ui.datepicker.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="js/datepicker/ui.datepicker.js"></script>
<!--datepicker -->
<script type="text/javascript" charset="utf-8">
jQuery(function($){
$(".date").datepicker();
});
</script>

<body>
<div class="mainr">
 <div class="topleft"> 
<a href="index1.php" style="color:white; margin:left; text-family:algerian">HOME</a><br /> 
<a href="img/ri.png" rel="facebox"><img src="img/rich.png" width="250" height="95" /></a></div>
<form action="login.php" method="post">
  
  <div class="qwerty">
  <div class="label">
        <div class="email style1">&nbsp;UserName</div>
        <div class="password">&nbsp;&nbsp;Password</div>
      </div>
      <div class="label1">
        <div class="emailtext">
          <input name="UserName" type="text"/>
        </div>
        <div class="passwordtext">
          <input name="Password" type="password"  />
          <input name="submit" type="submit" class="greenButton" value="Login" />
        </div>
      </div>
      <div class="label2">
        
		
        <div class="password">
		<a href="forgotpassword1.php">&nbsp;Forgot Password?</a></div>
      </div>
    </div>
 
  </form>
   
  </div>

<div class="downleft">
  <div class="picture">
  <img src="bg/b.jpg" width="500" height="330"  />
  </div>
  <div class="field">
    <div class="signup">Sign Up</div>
	<div class="free">It's free, and always will be</div>
	<div class="text">
	<form  method="POST">
	  	<div class="textleft">FirstName:</div>
		<div class="textright"><input name="fname" type="text" class="textfield" maxlength="10" value="<?php echo $fname; ?>"/><font color="Red"><?php echo $vfname; ?> </font>
		</div>
		<div class="textleft">LastName:</div>
		<div class="textright"><input name="lname" type="text" class="textfield" value="<?php echo $lname; ?>"/><font color="Red"><?php echo $vlname; ?> </font>
		</div>
		<div class="textleft">UserName:</div>
		<div class="textright"><input name="login" type="text" class="textfield" value="<?php echo $login; ?>"/><font color="Red"><?php echo $vlogin; ?> </font><font color="Red"> <?php echo $u; ?></font>
		</div>
		<div class="textleft">Password:</div>
		<div class="textright"><input name="password2" type="password" class="textfield"value="<?php echo $password; ?>"/><font color="Red"><?php echo $vpassword; ?> </font>
		</div>
		<div class="textleft">Retype Password:</div>
		<div class="textright"><input name="cpassword" type="password" class="textfield"value="<?php echo $cpassword; ?>"/><font color="Red"><?php echo $vcpassword; ?> </font><font color="Red"><?php echo $a; ?> </font>
		</div>
		<div class="textleft">Address:</div>
		<div class="textright"><input name="address" type="text" class="textfield" value="<?php echo $address; ?>"/><font color="Red"><?php echo $vaddress; ?> </font>
		</div>
		<div class="textleft">Contact Number:</div>
		<div class="textright"><input name="cnumber" type="text" class="textfield" maxlength="11" size="40" value="<?php echo $cnumber; ?>" /><font color="Red"><?php echo $vcnumber; ?> </font>
		<input name="propic" id="dadded" type="hidden" value="upload/p.jpg" /></div>
		<div class="textleft">Email:</div>
		<div class="textright"><input name="email" type="text" class="textfield" value="<?php echo $email; ?>"><font color="Red"><?php echo $vemail; ?> </font><font color="Red"><?php echo $e; ?> </font>
		</div>
		<div class="textleft">Gender:</div>
		<div class="textright1">
			<div class="input-container">
			  <select name="gender" id="gender" class="textfield1"><?php echo $vgender; ?> 
                <option >Female</option>
                <option >Male</option>
              </select><br />
			</div>
		</div>
		<div class="textleft">Faculty:</div>
		<div class="textright"><input name="faculty" type="text" class="textfield"></div>
		<div class="input-container">
	

		<div class="textright">
		  <input type="submit" name="Submit" value="Sign Up" class="greenButton1" />
	
		</div>
		 
		</form>
		 </div>
		 </div>
</body>
</html>

