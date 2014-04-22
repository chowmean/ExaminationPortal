<?php

$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton',
'cryptonGaurav');
//$pdo_infotsav = new PDO('mysql:host=localhost;dbname=infotsav', 'root',
//'');?>


<link rel="stylesheet" type="text/css" href="style.css"/>
<div id="back" style="font-size:12pt;top:10%;height:70%;" > <div id="head"style='left:10%;'><img src="logo.png"/><br><sup><u>Break it and Crack it</u></sup></div>
<form action="team_register.php" method="POST" style='left:50%;'>

<table><tr><td>
Team Name</td><td><input type="text"name="team"></td></tr>
<tr><td>
First Member's Infotsav Username:</td><td><input type="text" name="player1"></td></tr><td >
Second Member's Infotsav Username:</td><td><input type="text" name="player2"></td></tr><td >
Third Member's Infotsav Username:</td><td><input type="text" name="player3"></td></tr><td >

Password</td><td><input type="password" name="password"></td></tr><td >
<input type="submit" name="REGISTER NOW" Value="REGISTER NOW" ></td></table>
<font size="5">Only one member should play the event , else the member with the lowest score will be considered as the team score.<br>You can also play individually.</font>
</form></div>



