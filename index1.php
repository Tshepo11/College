

<html>
<head><title>index</title></head>

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
	
	.footer
	{
		text-align:center;
		position:bottom;
		margin-bottom:center;
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
					<?PHP  echo date("Y-m-d ");?> <strong> +|+</strong>
					<?PHP	echo date("h:i:sa");?> <strong> |</strong>
					</ul>
				</div>	
			</div>
	</div>	


<div class="downleft">
<div class="picture">
<img  src="im/3.png" width="700" height="400" />
</div>
	</div>

	<div class="field">
</div>

</div>	
	

	<div class="text">
	<p style="text-align:center"> CopyRights Reserved, 2017, RICHFIELD INSTITUTION OF TECHNOLOLGY...</p>
	
</div>
	
</body>
</html>	