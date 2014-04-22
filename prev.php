<?php
session_start();
if($_SESSION['question_number']!=1)
$_SESSION['question_number']=$_SESSION['question_number']-1;
header('location:exam.php');
?>