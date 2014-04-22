<?php
session_start();
if($_SESSION["admin"]!=1)
header('location:/crypton/home.php');
else
{




$exam_number=$_GET["exam_number"];
echo "===================================================EVALUATING exam ".$exam_number."========================================================";

$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');

$sql = 'SELECT max_question FROM crypt_exam WHERE exam_number='.$exam_number.';';
$result = $pdo->query($sql);
$row=$result->fetch();
$max_question=$row[0];

$sql = 'SELECT username FROM users';
$result10 = $pdo->query($sql);


while($row10=$result10->fetch())
{$username=$row10[0];
echo "<br>=============processing for user =============================".$username;	






$sql = 'insert into submit_crypt values("'.$username.'",'.$exam_number.',1);';
$result = $pdo->exec($sql);
$score=0;
$outof=0;
$question_number=1;
$answer_number=1;
$i=0;
	while($i<$max_question)
	{echo "<br>======>submitting answer".($i+1)." for user ".$username;
	$sql = 'insert into crypt_answers values("'.$username.'","'.$exam_number.'",wrong,"'.$answer_number.'");';
	$result = $pdo->exec($sql);	
	$i=$i+1;
	$answer_number=$answer_number+1;
	}
	
	$i=0;
	while($i<$max_question)
	{echo "<br>======>calculating scores for question ".($i+1)." for user ".$username;
	$sql = 'SELECT answer
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
};
$sql="INSERT INTO crypt_score
VALUES (
'".$username."',".$exam_number.",".$score."
);";

$result21= $pdo->exec($sql);



$sql="update `crypt_score` SET `score`='".$score."' WHERE `username`='".$username."' AND `exam_number`='".$exam_number."';";

$result3 = $pdo->exec($sql);


}
echo "<br><br><br>===========================RANKINGS====================";
$sql = 'SELECT username,score
	FROM crypt_score WHERE exam_number='.$exam_number.';';
$result31 = $pdo->query($sql);
$rank=0;$prev=100;
while($row31 = $result31->fetch())
{
if($row31[1]<$prev)
	{$prev=$row31[1];
	$rank=$rank+1;
	}
echo "<br>".$rank." ".$row31[0]." ".$row31[1]."<br>";
}
}
?>