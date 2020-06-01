

<?PHP
include('connect.php');
$id = $_GET['id'];

$del = mysql_query("DELETE FROM online WHERE session = '$id'");

/*

			$member_id = $_SESSION['SESS_MEMBER_ID'];
$del = mysql_query("DELETE FROM online
					WHERE session = '$member_id'");
*/
	header('location:index1.php');
	
session_destroy();
session_unset();
exit();

?>