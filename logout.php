<?php
session_start();	


$query = "SELECT *
			FROM online";
			
		$result = mysql_query($query);			
		if($result)
		{
			if(mysql_num_rows($result) > 0)
			{
				$member = $_SESION['SESS_MEMBER_ID'];				
				$q = "DELETE from online
						WHERE session = '$member'";						
						$qq = mysql_query($q);
						$delete = mysql_affected_rows($qq);
			}
		}			
								
session_destroy();
header('Location: index1.php');	
?>
