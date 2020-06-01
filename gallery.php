
<html>

<head>

<title>GALLERY</title>

<style type="text/css">

body {

background: #222;

margin-top: 20px;

}

h3 {

color: #eee;

font-family: Verdana;

}

.thumbnails img {

height: 80px;

border: 4px solid #555;

padding: 1px;

margin: 0 10px 10px 0;

}

.thumbnails img:hover {
border: 4px solid #00ccff;

cursor:pointer;
}

.preview img {
border: 4px solid #444;

padding: 1px;

height: 500px;
}

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

</style>

</head>

<body>

<div class="gallery" align="center">

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
					
					</ul>
				</div>	
			</div>
	</div>	

<div class="thumbnails">

<img onmouseover="preview.src=img1.src" id="img1" src="im/1.png" alt="Image Not Loaded"/>

<img onmouseover="preview.src=img2.src" id="img2" src="im/2.png" alt="Image Not Loaded"/>

<img onmouseover="preview.src=img3.src" id="img3" src="im/3.png" alt="Image Not Loaded"/>

<img onmouseover="preview.src=img6.src" id="img6" src="im/6.jpg" alt="Image Not Loaded"/>


<img onmouseover="preview.src=img7.src" id="img7" src="im/11.jpg" alt="Image Not Loaded"/>
<img onmouseover="preview.src=img8.src" id="img8" src="im/8.jpg" alt="Image Not Loaded"/>
<img onmouseover="preview.src=img9.src" id="img9" src="im/9.jpg" alt="Image Not Loaded"/>
<img onmouseover="preview.src=img11.src" id="img11" src="im/12.jpg" alt="Image Not Loaded"/>
<img onmouseover="preview.src=img12.src" id="img12" src="im/13.jpg" alt="Image Not Loaded"/>


</div><br/>


<div class="preview" align="center">
 
<img id="preview" src="im/image001.jpg" alt="No Image Loaded"/>
</div>

</div> 
<!-- Close the gallery div -->

</body>

</html>


<?php

include 'connect.php';

?>
