<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	  
	  <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Crypton : Reverse engineering and cryptography contest" />
<meta name="description" content="Crypton : Reverse engineering and cryptography contest" />
<LINK REL="SHORTCUT ICON" HREF="FAV.png">

<title>CRYPTON</title>




<?php
session_start();
if(isset($_SESSION['username']))
$username=$_SESSION['username'];
else
header('location:home.php');
?>



<html>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="script.js"></script>
<a href="#"><div id="back" style="top:10%;height:25%;font-size:58pt;"><div id="head"><img src="logo.png"  /></font></div><form style="left:90%;top:30%;"><font size="4"><?php echo $username;?>, <a href="logout.php">Logout</a></font></form></div>
<a href="#"><div id="back" style="top:40%;height:10%;width:20%;" onclick="show(1)" >Description</div></a>
<a href="#"><div id="back" style="top:55%;height:10%;width:20%;"	onclick="show(2)">Rules</div></a>
<a href="#"><div id="back" style="top:70%;height:10%;width:20%;" onclick="show(3)">Practice</div></a>
<a href="#"><div id="back" style="top:85%;height:10%;width:20%;" onclick="show(4)">Downloads</div></a>

<div id="lack" style="position:absolute;top:15%;height:10%;right:15%;width:20%;font-size:28pt;" onclick="show(4)"><font size="3">organized under</font><a href="http://www.infotsav.org"  >INFOTSAV</a></div>














<div id="back" style="top:40%;height:55%;left:30%;width:60%;text-align:center">

<div id="exams">



<?php

function alot($value)
{
$_SESSION['exam_number']=$value;
}



$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');
$sql = 'SELECT exam_number,max_question
FROM exams WHERE visible=1;';
$result = $pdo->query($sql);
echo '<div id="check" ><u>List of Exams for Trials (Attempt Both).</u><br><br>';
while($row=$result->fetch())
{
$value=$row[0];
$max=$row[1];
$sql = 'SELECT exam_number,max_question
FROM crypt_exam WHERE exam_number='.$value.';';
$result1 = $pdo->query($sql);
$row1= $result1->fetch();
echo '<font size="3" ><center><table><tr><td><a href="alot.php?nameofexam='.$value.'&max_question='.$max.'">Section 1 Aptitude</a></td><td></td><td><a href="submission.php?exam_number='.$value.'">SEE YOUR SUBMISSIONS</td></tr><tr><td><a href="crypt_alot.php?nameofexam='.$row1[0].'&max_question='.$row1[1].'"> Section 2 Cryptography </a></td></tr></table></center><br></font><br></font>';

}

echo "<u>Rules:</u> <br><li>Marking scheme for section 1 is +2 -1.</li><li>Marking scheme for section 2 is +3 0.</li>";
echo "</div>";
?>




</div>



</div>
<div id="information" style="height:70%;width:77%;background:black;position:absolute;top:30%;left:21%;visibility:hidden;border-radius:20px;border:2px solid white;"><div id="close" style="font-size:38pt;margin-top:0%;color:white;" onclick="hide()"><center><a href="#" ><font color='white'>
Close</font></a></center>
</div>
<div id="element" style="height:60%;width:100%;background:black;position:absolute;top:20%;visibility:hidden;color:white">

</div>
</div>
<?php
	include('update.php');
?>
</html>