<?PHP

require 'connect.php';
ob_start();


//$username = $_POST['username'];
//$password = $_POST['password'];
session_start();

$_SESSION['username'] = $username;

if(isset($_POST['submit']))
	{

		$query = " SELECT * 
				FROM members
				WHERE username= '$username'
				AND password = '$password' ";

		$result = mysql_query($query);
		
		$row = mysql_fetch_array($result);
		
		if($row['username'] == $username && $row['password'] ==$password)
			{
				//echo '<script>window:location= "home.php" </script>';
				header('location:home.php');
			}
			else
				{
					//header('location:errorlogin.php');
					//echo "<script>alert('The details you entered are incorrecrt, Please check your username and password')";
					echo '<script> window:location = "errorlogin.php" </script>';
				}
	
	}


?>