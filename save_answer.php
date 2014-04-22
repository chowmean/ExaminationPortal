
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<div id="result" style="position:absolute;top:30%;left:0%;width:100%;background:white;"><center>



<?php
session_start();
if(isset($_SESSION['username']))
{$username=$_SESSION['username'];
$exam_number=$_SESSION['exam_number'];
$answer_number=$_SESSION['question_number'];
$answer=$_POST['answer'];
}
else
header('location:home.php');

$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');
$sql = 'insert into answers values("'.$username.'","'.$exam_number.'","'.$answer.'","'.$answer_number.'");';
$result = $pdo->exec($sql);
if($result)
header('location:next.php');
else echo "<br><br><center><font size='5'>Error! you have allready submitted solution for this question<br><br><a href='next.php'><input type='button' value='Go to next question'></a></font></center>";




?>
<br><br><br>
<a href="home.php"><input type="button" value="HOME" /></a>
<center>
</div>
</html>