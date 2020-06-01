<?PHP
session_start();
session_destroy();

/*
$member = $_SESSION['session'];

$delete = mysql_query("DELETE FROM online
			WHERE session = '$member'");
			
		$result = mysql_affected_rows($delete);	

		*/
	
$member_id = $_SESSION['SESS_MEMBER_ID'];
$query = mysql_query("DELETE FROM online  
						WHERE session = '$member_id'");
	
header('location:index1.php');
exit();
?>