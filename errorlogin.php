
<html>
<head>
<title>Login</title>
</head>
<style type="text/css">
<!--
body {
	background-image: url(bg/bg3.jpg);
	background-repeat:repeat-x;
	background-color:#d9deeb;

}
-->
</style>
<link href="errorlogin.css" rel="stylesheet" type="text/css" />

<body>
<div class="mainr">
<div class="topleft"> <a href="img/ri.png" rel="facebox"><img src="img/rich.png" width="250" height="95" /></a></div>
</div>
<div class="bi">
</div>  
<div class="font">
<div class="right">
<h3 style="color:red; text-align:center"> &nbsp;The details you entered are incorrect please provide valid information</h3>
<form action="login.php" method="post">

<hr>
<table>
<tr>
<td>Username:</td><td><input type="text" name="UserName" class="textright" value=""/></td>
</tr>
<tr>
<td>Password:</td><td><input type="password" name="Password" class="textright" value=""/></td>
</tr>
<tr>
<td></td><td><input type="submit" class="greenButton" name="OK" value="Login"/><a href="index.php" class="t"> or sign up </a> </td>
</tr>

 </table>
</form>
</div>
</div>
</body>
</html>
