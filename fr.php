

<?PHP

include 'connect.php';

//$member_id = $_GET['member_id'];

$members = mysql_query("select * from members");
	$get = mysql_fetch_array($members);
foreach($get as $mrow){
	 $member = $mrow['member_id'];
}

$friends = mysql_query("SELECT * FROM friends");
	$frie = mysql_fetch_array($friends);
	
foreach($frie as $frow){
	$friends = $frow['member_id'];
}

$row = mysql_fetch_array($memberid);

if(!in_array($memberid, $friendid))
	{
		while($row = mysql_fetch_array($memberid))
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


?>