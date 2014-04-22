<?php

$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');
//$pdo_infotsav = new PDO('mysql:host=localhost;dbname=infotsav', 'root',
//'');?>


<link rel="stylesheet" type="text/css" href="style.css"/>
<div id="back" style="font-size:12pt;"> <div id="head"><img src="logo.png"/><br><sup><u>Break it and Crack it</u></sup></div>
<form action="registratin.php" method="POST">

<table><tr><td>
Username:</td><td><input type="text"name="username"></td></tr>
<tr><td>
Password:</td><td><input type="Password" name="password"></td></tr><td ><input type="submit" name="REGISTER NOW" Value="REGISTER NOW" ></td></table>
<font size="3">If you want your password may be diferent form infotsav password.</font>
</form></div>



