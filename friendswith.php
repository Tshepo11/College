

<?PHP

include 'connect.php';


/*
$query = "SELECT * 
			FROM members, friends
			WHERE member_id != '$id'
			AND members.member_id = friends.member_id
			AND friends.status != 'conf' ";

		$result = mysql_query($query);
		
$friends = array($result);

if(in_array($friends))
	{
		mysql_fetch_array($friends);
		
		while($row = mysql_fetch_array($friends))
			{
							echo '
							<ul id="sddm11">
							<li> 
								<a href="friendprofile.php?id='.$row['member_id'].'"><img class="img" src="'.$row['profImage'].'" alt="" height="40" width="40" " />
								<font color="#1d3162">'.$row['FirstName']." ".$row['LastName'].'</font>
								</br>
							
								<a href="addfriend.php?id='.$row['member_id'].'" rel="facebox"style="text-decoration:none;"  >Add as Friend</a></p>
								<hr width=200>
								</ul>
							</li>';
			}
	}


////////////////
$id = $_SESSION['SESS_MEMBER_ID'];

$query = "SELECT * 
			FROM friends
			WHERE member_id != '$id' ";

		$result = mysql_query($query);
		
$row = mysql_fetch_array($result);

if(in_array("SELECT * FROM members, friends WHERE members.member_id = friends.member_id", $row))
	{
		echo '
			<ul id="sddm11">
				<li> 
					<a href="friendprofile.php?id='.$row['member_id'].'"><img class="img" src="'.$row['profImage'].'" alt="" height="40" width="40" " />
					<font color="#1d3162">'.$row['FirstName']." ".$row['LastName'].'</font>
						</br>
							
						<a href="addfriend.php?id='.$row['member_id'].'" rel="facebox"style="text-decoration:none;"  >Add as Friend</a></p>
						<hr width=200>
								</ul>
							</li>';
			
	}

*/	
	
	
	
	$query = "SELECT firstname, lastname 
			FROM members order by member_id ASC ";

		$result = mysql_query($query);
		
		
		while($row = mysql_fetch_array($result))
			{
				$new_array[] = $row;
				$new_array[$row['firstname']] = $row;
				$new_array[$row['lastname']] = $row;
			}
			
			//mysql_close($connect);
			echo '
			<table>
			<ul id="sddm11">
				<li> 
					<a href="friendprofile.php?id='.$row['member_id'].'"><img class="img" src="'.$row['profImage'].'" alt="" height="40" width="40" " />
					<font color="#1d3162">'.$row['FirstName']." ".$row['LastName'].'</font>
						</br>
							
						<a href="addfriend.php?id='.$row['member_id'].'" rel="facebox"style="text-decoration:none;"  >Add as Friend</a></p>
						<hr width=200>
								</ul>
							</li>	</table>';
			
			
?>
