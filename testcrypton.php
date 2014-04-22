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
<center><font size="7">PRACTICE EXAM
</font><br><?php echo "HEllo ,".$username." This is practice exam number ".$exam_number."<br>Total Questions are ".$max_question; ?></center>
<br><br><br><br><center>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');

$sql = 'SELECT visible
FROM exams WHERE exam_number='.$exam_number.';';
$result2 = $pdo->query($sql);
$row2=$result2->fetch();
if($row2[0]==0)
{header('location:home.php');
}
$sql = 'SELECT *
FROM questions WHERE exam_number='.$exam_number.' AND question_number='.$question_number.';';
echo "<div id='question' style='width:100%;background:white;'>";
$result = $pdo->query($sql);




while($row=$result->fetch())
{
echo $row[1].".";
echo $row[2];
echo "<br><br><br>1)".$row[3];
echo "<br><br>2)".$row[4];
echo "<br><br>3)".$row[5];
echo "<br><br>4)".$row[6];
}
echo '</div>'
?><br><br>
<br> 



<form id="myform" onsubmit="return disp_confirm()" action="save_answer.php"  method="POST" style="" ><input  type="text" name="answer"  placeholder="Your choice here"><input  type="submit" name="save" value="save"/></form>





<br><br>
<a href="prev.php"><input type="button" name="previous" value="previous"></a>
<a href="next.php"><input type="button" name="next" value="next"></a><br><br>
<a href="home.php"><input type="button" name="home" value="home"></a>
<a href="logout.php"><input type="button" name="logout" value="logout"></a>
</center>
</html>