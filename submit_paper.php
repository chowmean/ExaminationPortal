<html>
<link rel="stylesheet" type="text/css" href="style.css">
<div id="result" style="position:absolute;top:40%;height:20%;left:0%;width:100%;background:white;"><center>
<br>







<?php
session_start();
if(isset($_SESSION['username']))
{$username=$_SESSION['username'];
$exam_number=$_SESSION['exam_number'];
$answer_number=1;
$max_question=$_SESSION['max_question'];


$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');
$i=0;$answer_number=1;
while($i<$max_question)
{$sql = 'insert into answers values("'.$username.'","'.$exam_number.'",5,"'.$answer_number.'");';
$result = $pdo->exec($sql);
$i=$i+1;
$answer_number=$answer_number+1;
}


echo '<a href="evaluate.php?nameofexam='.$exam_number.'&max_question='.$max_question.'"><input type="button" value="SEE YOUR RESULT"></a>';

$time = date('Y-m-d H:i:s');

$sql = 'insert into submit values("'.$username.'",'.$exam_number.',1,"'.$time.'");';
$result = $pdo->exec($sql);

}
else
header('location:main.php');
?>
<br><br>
<a href="home.php"><input type="button" value="HOME" /></a>
<center>
</div>
</html>
