<?php
session_start();
if($_SESSION["admin"]!=1)
header('location:/crypton/home.php');
else
{




$exam_number=$_GET["exam_number"];

$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');

$sql = 'SELECT max_question FROM exams WHERE exam_number='.$exam_number.';';
$result = $pdo->query($sql);
$row=$result->fetch();
$max_question=$row[0];

$sql = 'SELECT team FROM team_reg';
$result10 = $pdo->query($sql);


while($row10=$result10->fetch())
{$username=$row10[0];






$sql = 'insert into submit values("'.$username.'",'.$exam_number.',1);';
$result = $pdo->exec($sql);
$score=0;
$outof=0;
$question_number=1;
$answer_number=1;
$i=0;
	while($i<$max_question)
	{
	$sql = 'insert into answers values("'.$username.'","'.$exam_number.'",5,"'.$answer_number.'");';
	$result = $pdo->exec($sql);	
	$i=$i+1;
	$answer_number=$answer_number+1;
	}
	
	$i=0;
	while($i<$max_question)
	{
	$sql = 'SELECT answer
	FROM correct WHERE exam_number='.$exam_number.' AND answer_number='.$question_number.';';

	$result = $pdo->query($sql);

	$sql2 = 'SELECT answer
	FROM answers WHERE username="'.$username.'" AND exam_number ='.$exam_number.' AND answer_number ='.$question_number.';';

	$result2 = $pdo->query($sql2);

	$row=$result->fetch();  
	$row2=$result2->fetch();

		if($row[0]==$row2[0] && $row2[0]!=NULL)
		$score=$score+2;
		else
		if
		($row[0]!=$row2[0] && $row2[0]==5 )
		$score=$score;
		else
		if($row[0]!=$row2[0] && $row2[0] !=5 && $row2[0]!=NULL)
		$score=$score-1;
		$outof=$outof+1;
		$i=$i+1;
		$question_number=$question_number+1;
};
$sql="INSERT INTO score
VALUES (
'".$username."',".$exam_number.",".$score."
);";

$result21= $pdo->exec($sql);



$sql="update `score` SET `score`='".$score."' WHERE `username`='".$username."' AND `exam_number`='".$exam_number."';";

$result3 = $pdo->exec($sql);


}
echo "<br><br><br>===========================RANKINGS====================";
$sql = 'SELECT username,score
	FROM score WHERE exam_number='.$exam_number.' order by score desc;';
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













<?php

{




$exam_number=$_GET["exam_number"];

$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');

$sql = 'SELECT max_question FROM crypt_exam WHERE exam_number='.$exam_number.';';
$result = $pdo->query($sql);
$row=$result->fetch();
$max_question=$row[0];

$sql = 'SELECT team FROM team_reg';
$result10 = $pdo->query($sql);


while($row10=$result10->fetch())
{$username=$row10[0];	






$sql = 'insert into submit_crypt values("'.$username.'",'.$exam_number.',1);';
$result = $pdo->exec($sql);
$score=0;
$outof=0;
$question_number=1;
$answer_number=1;
$i=0;
	while($i<$max_question)
	{
	$sql = 'insert into crypt_answers values("'.$username.'","'.$exam_number.'",wrong,"'.$answer_number.'");';
	$result = $pdo->exec($sql);	
	$i=$i+1;
	$answer_number=$answer_number+1;
	}
	
	$i=0;
	while($i<$max_question)
	{
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
	FROM crypt_score WHERE exam_number='.$exam_number.' order by score desc;';
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

<?php

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
$sql3='insert into final_score values ("'.$row[0].'",'.$exam_number.','.$score.');';
$result3 = $pdo->exec($sql3);
}


}?>




<h2 size="7"> TRIALS RESULTS</h2>
<table style="border:1px solid black;">
<tr style='border:1px solid black;'><td style='border:1px solid black;width:200px;'>Rank</td><td style='border:1px solid black;width:200px;'>Name</td><td style='border:1px solid black;width:200px;'>Score</td>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');
//$exam_number=$_GET["exam_number"];
$sql = 'SELECT username,score FROM final_score WHERE exam_number="4" order by score desc';
$result = $pdo->query($sql);
$rank=1;

while($row=$result->fetch())
{

echo "<tr style='border:1px solid black;'>";

echo "<td style='border:1px solid black;width:200px;'>".$rank."</td><td style='border:1px solid black;width:200px;'>".$row['username']."<td style='border:1px solid black;width:200px;'>".$row['score']."</td>";
$rank++;

echo "</tr>";
}

?>
</table>