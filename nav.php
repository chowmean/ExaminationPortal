<div id="nav" style="right:0%;position:absolute;top:15%;background:blue;color:red;border:2px solid black;border-radius:3px;">
<u>QUESTIONS</u>
<?php

$max_question=$_SESSION['max_question'];
//if($_SESSION['question_number']!=$max_question)
//{
//$_SESSION['question_number']=$_SESSION['question_number']+1;
//header('location:crypt-exam.php');
//}

$i=1;
while($i<=$max_question)
{
echo "<li><a href='change.php?question=".$i."'><font color='white'>Ques ".$i."</font></a></li>";

$i=$i+1;
}
?>
</div>