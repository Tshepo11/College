



<html>
<head><title>members</title></head>

<style type="text/css">
	
	#h11
	{
		text-align:center;
		color:green;
	}
	
	#navigation
	{
		border:1px solid gold;
		margin:auto;
		color:blue;
		font-family:algerian;
		text-align:center;
		background-color:lightblue;
	}
	
	#fieldlogin
	{
		margin:auto;
		background-color:lightblue;
		text-align:center;
		width:800px;
	}
	
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
 <div class="topleft">  <a href="img/ri.png" rel="facebox"><img src="img/rich.png" width="250" height="95" /></a></div>

      </div>
     
  <body id="bodyhome">
  
		<h1 id="h11"><b><i>RICHFIELD INSTITUTION OF TECHNOLOLGY</i></b></h1>
		
	
			<div id="navigation">
				<div class="menu uppercase">
				<nav navigation>
				
				<ul> <strong> | </strong>
					<a href="index1.php" title="HOME"> HOME</a><strong> | </strong>
					<a href="alogin.php" title="ADMIN"> ADMIN</a> <strong> | </strong>
						
					<a href="about.php" title="ABOUT US"> ABOUT US</a> <strong> | </strong>
					<a href="contact.php" title="CONTACT US"> CONTACT US</a> <strong> | </strong>
					<a href="gallery.php" title="GALLERY"> GALLERY</a> <strong> | </strong>
					<a href="index.php" title="SIGN UP"> SIGN UP</a> <strong> | </strong>
					<?PHP echo date("H:i:s");?> <strong> | </strong>
					<a href="admin.php">BACK</a>
					</ul>
				</div>	
			</div>
			
	</div>	

<fieldset id= "fieldlogin"><legend id="leg"><strong>MEMBERS</strong></legend>
		
			<table>

		 <label><td></td><td>/////</td><td>USERNAME </td><td>/////</td><td>EMAIL</td><td>/////</td><td>FIRSTNAME</td><td>/////</td><td>LASTNAME</td><td>/////</td></label>
		 <br />
	

<?PHP

require 'connect.php';

//$user = $_GET['username'];

$select = mysql_query("SELECT * from members ORDER by username");

 //echo '<td>/////</td><td>USERNAME </td><td>/////</td><td>EMAIL</td><td>/////</td><td>FIRSTNAME</td><td>/////</td><td>LASTNAME</td><td>/////</td><td>CONTACT</td><td>/////</td>';

while($result = mysql_fetch_array($select))
	{
		echo '<table align="center">';
		echo '<tr><br />';
		
		echo '<td></td><td style="align:center">/////'.$result['UserName'].' //////  - '.$result['email'].' /////// - '.$result['FirstName'].' ////// - '.$result['LastName'].' ///// </td>';
		echo '</tr>';
		echo '</table>';
	}
?>
</table>
	</fieldset>
	
</html>

</body>
	