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
{$username=$_SESSION['username'];
$exam_number=$_SESSION['exam_number'];
$question_number=$_SESSION['question_number'];
$max_question=$_SESSION['max_question'];
}
else
header('location:home.php');
?>

<script src="script.js">
</script>


<html>

<link rel="stylesheet" type="text/css" href="style.css"/>
<center><font size="7" color="white">Round one (Cryptography and reverse engineering)
</font><br><?php echo"<br><br><br><br><br><center>";

$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');

$sql = 'SELECT visible
FROM crypt_exam WHERE exam_number='.$exam_number.';';
$result2 = $pdo->query($sql);
$row2=$result2->fetch();
if($row2[0]==0)
{header('location:home.php');
}
$sql = 'SELECT *
FROM crypt_question WHERE exam_number='.$exam_number.' AND question_number='.$question_number.';';
echo "<div id='question' style='top:10%;position:absolute;left:15%;'>";
$result = $pdo->query($sql);




while($row=$result->fetch())
{

echo $row[2];
}
echo '</div>'
?><br><br>
<br> 



<form id="myform"  action="save_answer1.php"  method="POST" style="position:absolute;top:65%;left:43%;" ><input  type="text" name="answer"  placeholder="Your choice here"/><input  type="submit" name="save" value="save" class='button' style='height:25px;'/></form>





<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<a href="prev_crypt.php"><input type="button" name="previous" value="previous" class='button'></a>
<a href="next_crypt.php"><input type="button" name="next" value="next" class='button'></a><br><br>
<a href="home.php"><input type="button" name="home" value="home" class='button'></a>
<a href="logout.php"><input type="button" name="logout" value="logout" class='button'></a>
</center>
</html>