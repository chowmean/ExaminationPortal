<?php
session_start();
if($_SESSION["admin"]!=1)
header('location:/crypton/home.php');
else
{
$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');
$exam_number=$_GET["exam_number"];
$sql = 'SELECT username,score FROM crypt_score WHERE exam_number='.$exam_number.';';
$result = $pdo->query($sql);
while($row=$result->fetch())
{$score=0;
$sql2='SELECT score FROM score WHERE username= "'.$row[0].'" and exam_number='.$exam_number.';';
$result2=$pdo->query($sql2);
$row2=$result2->fetch();
$score=$row[1]+$row2[0];
echo $row['username'].'=>'.$score."<br>";
$sql3='insert into final_score values ("'.$row[0].'",'.$exam_number.','.$score.');';
$result3 = $pdo->exec($sql3);
}


}