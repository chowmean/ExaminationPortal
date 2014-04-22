<?php
session_start();
$_SESSION['question_number']=$_GET['question']-1;
header('location:next.php');

?>