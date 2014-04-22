
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<div id="result" style="position:absolute;top:40%;left:0%;height:20%;width:100%;background:white;"><center>
<br>











<?php
session_start();
if(isset($_SESSION['username']))
{$username=$_SESSION['username'];
$exam_number=$_GET['nameofexam'];
$max_question=$_GET['max_question'];

$question_number=1;
}
else
header('location:home.php');
{


$score=0;$outof=0;
$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');


$sql = 'SELECT submit_value FROM submit_crypt WHERE username="'.$username.'" AND exam_number='.$exam_number.';';
$result = $pdo->query($sql);
$row=$result->fetch();



if($row[0]==0)
{echo "First Submit the paper to see your result";
}

else
{

$i=0;
while($i<$max_question)
{$sql = 'SELECT answer
FROM crypt_correct WHERE exam_number='.$exam_number.' AND answer_number='.$question_number.';';

$result = $pdo->query($sql);

$sql2 = 'SELECT answer
FROM crypt_answers WHERE username="'.$username.'" AND exam_number ='.$exam_number.' AND answer_number ='.$question_number.';';

$result2 = $pdo->query($sql2);

$row=$result->fetch();  
$row2=$result2->fetch();

if($row[0]==$row2[0] && $row!=NULL)
$score=$score+3;
$outof=$outof+3;
$i=$i+1;
$question_number=$question_number+1;

}

echo "your score in the exam is ".$score."out of ".$outof;

$sql="INSERT INTO crypt_score
VALUES (
'".$username."',".$exam_number.",".$score."
);";

$result21= $pdo->exec($sql);



$sql="update `crypt_score` SET `score`='".$score."' WHERE `username`='".$username."' AND `exam_number`='".$exam_number."';";

$result3 = $pdo->exec($sql);
if($result3)
echo "<br>YOUR SCORE HAS BEEN CHANGED";
else
echo "<br>NO CHANGE IN YOUR SCORE";}}
?>

<br><br>
<a href="home.php"><input type="button" value="HOME" /></a>
<center>
</div>
</html>