<?php
session_start();
$max_question=$_SESSION['max_question'];
if($_SESSION['question_number']!=$max_question)
{
$_SESSION['question_number']=$_SESSION['question_number']+1;
header('location:crypt-exam.php');
}
else 
{
echo "<br><br><center><font size='3'>You have completed your questions<br><br><br><a href='prev_crypt.php'>Go to previous question</a><br><br><a href='main.php'>Go to list of exams</a><br>

<br><br><br></font><font size='5'><a href='submit_paper_crypt.php?submitvalue=1'>Submit Paper</a><br></font>Dont forgot to submit</center>";
}
?>

<style>
@font-face
{
font-family:weblysleek;
src:url('weblysleekuil.ttf');
}
body{
font-family:weblysleek;
}
</style>