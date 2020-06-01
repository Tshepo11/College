
<?PHP

require 'connect.php';


$query = "SELECT members.member_id, 
			(SELECT friends.member_id as id
				FROM friends) AS friends
		FROM members, friends		
			WHERE members.member_id != friends";


			
			
?>


<?PHP

require 'connect.php';

$q = "SELECT member_id
		FROM members
			WHERE member_id != ALL(SELECT member_id FROM friends WHERE member_id != '$id')";



?>