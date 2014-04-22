
<LINK REL="SHORTCUT ICON" HREF="FAV.png">

<title>CRYPTON</title>











<?php
session_start();
if(isset($_SESSION['username']))
{$username=$_SESSION['username'];
header('location:main.php');}
?>



<html><link rel="stylesheet" type="text/css" href="style.css">

<div id="back" style="font-size:12pt;"> <div id="head"><img src="logo.png"/><br><sup><u>Break it and Crack it</u></sup></div>
<form action="checkin.php" method="POST">

<table><tr><td>
Username:</td><td><input type="text"name="username"></td></tr>
<tr><td>
Password:</td><td><input type="Password" name="password"></td></tr><td ><input type="submit" name="ENTER" Value="Enter" class='button'></td></table>

</form></div><br><br><br><br><br><br>
<!--<center><a href="register.php"><button class='button'> Register Here with Infotsav Credential</button></a> </center><br/><br/>-->
<center><a href="team.php"><button class='button'> Register Your Team Here</button></a> </center>
<?php
	include('update.php');
?>