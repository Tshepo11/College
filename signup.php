<?php include('connect.php')?>
<?php

	//Start session
	session_start();
		
	//Array to store validation errors
	$errmsg_arr = array();
	
		//Validation error flag
	$errflag = false;
	
		//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	
	//Sanitize the POST values
	$fname = clean($_POST['fname']);
	$lname = clean($_POST['lname']);
	$login = clean($_POST['login']);
	$password = clean($_POST['password2']);
	$cpassword = clean($_POST['cpassword']);
	$address = clean($_POST['address']);
	$cnumber = clean($_POST['cnumber']);
	$email = clean($_POST['email']);
	$gender = clean($_POST['gender']);
	$faculty = clean($_POST['faculty'])
	//$bdate = clean($_POST['bdate']);
	
	$propic = clean($_POST['propic']);
	$bday=$_POST['month'] . "/" . $_POST['day'] . "/" . $_POST['year'];
  	$month=$_POST['month'];
	$day=$_POST['day'];
	$year=$_POST['year'];
	//Input Validations
	
		
			if($fname == '') {
		$errmsg_arr[] = 'First name missing';
		$errflag = true;
	}
	

	/*if($bdate == '') {
		$errmsg_arr[] = 'birthdate field is  missing';
		$errflag = true;
	}*/
		if($lname == '') {
		$errmsg_arr[] = 'First name missing';
		$errflag = true;
	}
	
	if($month == '') {
		$errmsg_arr[] = 'month field is  missing';
		$errflag = true;
	}
	if($day == '') {
		$errmsg_arr[] = 'day field is  missing';
		$errflag = true;
	}
	if($year == '') {
		$errmsg_arr[] = 'year field is  missing';
		$errflag = true;
	}
	if($gender == '') {
		$errmsg_arr[] = 'gender field is  missing';
		$errflag = true;
	}
	if($email == '') {
		$errmsg_arr[] = 'email field is  missing';
		$errflag = true;
	}
	if($cnumber == '') {
		$errmsg_arr[] = 'contactnumber field is  missing';
		$errflag = true;
	}
	if($address == '') {
		$errmsg_arr[] = 'address field is  missing';
		$errflag = true;
	}

	if($lname == '') {
		$errmsg_arr[] = 'Last name missing';
		$errflag = true;
	}
	if($login == '') {
		$errmsg_arr[] = 'Login ID missing';
		$errflag = true;
	}
	
	if($faculty == '') {
		$errmsg_arr[] = 'Faculty required';
		$errflag = true;
	}
	
	/*
		if (empty($password))
			{
				$error = true;
				$passError = "Please enter password";
				
			}
			else if(strlen($password) < 6)
				{
					$error = true;
					$passError = "password must have atleast 6 charaters.";
				}
				
				$pass = hash('sha256', $password)
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
	
	*/
	if($cpassword == '') {
		$errmsg_arr[] = 'Confirm password missing';
		$errflag = true;
		
	}
	if( strcmp($password, $cpassword) != 0 ) {
		$errmsg_arr[] = 'Passwords do not match';
		$errflag = true;
	}
	
	//Check for duplicate login ID
	if($login != '') {
		$qry = "SELECT * FROM members WHERE UserName='$login'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr[] = 'UserName already in use';
				$errflag = true;
			}
			@mysql_free_result($result);
		}
		else {
			die("Query failed");
		}
	}

//If there are input validations, redirect back to the registration form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}

	//Create INSERT query
	/*
	$qry = "INSERT INTO members(UserName, Password, FirstName, LastName, Address, ContactNo, Url, Birthdate, Gender, profImage, curcity, month, day, year) VALUES('$login','$password','$fname','$lname','$address','$cnumber','$email','$bday','$gender','$propic','$address','$month','$day','$year')";
	$result = @mysql_query($qry);
	
	$query = "INSERT INTO friends(username)
				VALUES('$login')";
				
	$friends = @mysql_query($query);
*/
							
						///
				
					$faculty = $_POST['faculty'];
						
			$query = "SELECT * FROM user";
				$result = mysql_query($query);
				$row = mysql_fetch_array($result);
				
				if(isset($row['UserName']== $login && $row['email']==$email))
					{				
						
		$insert = "DECLARE TRANSACTION
						DECLARE @UserName
					INSERT INTO members(UserName, Password, FirstName, LastName, Address, ContactNo, email, Birthdate, Gender, profImage, curcity, month, day, year)
					VALUES('$login','$password','$fname','$lname','$address','$cnumber','$email','$bday','$gender','$propic','$address','$month','$day','$year')
					
					SELECT @UserName=SCOPE_IDENTITY();
					SET @UserName=SCOPE_IDENTITY();
					
					INSERT INTO friends(member_id, UserName)
						VALUES('', @Username)
						
					COMMIT TRANSACTION	";
	
			$result = @mysql_query($insert);
			
				if($faculty == $row['ICT'])
					{
						$add = "INSERT INTO friends(member_id, uasername,datetime, status, friends_with)
								VALUES('', '$login', '', 'conf', '$row['member_id']')";
								
							$r = mysql_query($add);	
							$qq = mysql_affected_rows($r);
								else{
										echo '<script>alert("Failed to add friend")</script>';
									}
					}
					else if($faculty = $row['humanities'])
						{
							$humanities = "INSERT INTO friends(member_id, uasername,datetime, status, friends_with)
											VALUES('', '$login', '', 'conf', '$row['member_id']')";
											
								$result = mysql_query($humanities);
									$q = mysql_affected_rows($result);
									
									else{
										echo '<script>alert("Failed to add friend")</script>';
									}
						}
			
					}
					else
						{
							echo "email or username does not match the one already in the system"
						}

		//Check whether the query was successful or not
	if($result) {
	$errmsg_arr[] = 'Success You can now log-in to bookface';
		$errflag = true;
		if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
		
		session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['member_id'];
			$_SESSION['SESS_FIRST_NAME'] = $member['FirstName'];
			$_SESSION['SESS_LAST_NAME'] = $member['profImage'];
			//$_SESSION['SESS_PRO_PIC'] = $member['profImage'];
			session_write_close();
			
		header("location: signup-success.php");
		exit();
	}else {
		die("Query failed");
	}

	
	function addfriends();
	{
		
		$faculty = $_POST['faculty'];
		$query = mysql_query("SELECT * from faculty");
		`
		$results = mysql_fetch_array($query);
		if($faculty = $results['facultyName'])
			{
				$add = "INSERT INTO friends(member_id, uasername,datetime, status, friends_with)
								VALUES('', '$login', '', 'conf', '$row['member_id']')";
								
				
				$r = mysql_query($add);	
				$qq = mysql_affected_rows($r);
			}
			
			//return addfriends();
	}

	addfriends();
?>
