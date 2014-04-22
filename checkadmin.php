<?php
session_start();
if(isset($_SESSION['admin']))
header('location:home.php');
else
{
include 'connect.php';
$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');
$sql = 'SELECT * FROM admin';
$result = $pdo->query($sql);

$var=0;
$username=$_POST["username"];
$password=$_POST["password"];
while($row=$result->fetch())
  {
  if($row[0]==$username)
	{if($row[1]==$password)
		{$var=1;
		}
	}
  }
  
  if($var==0)
  ;

else
{
  $_SESSION["admin"]=1;
echo "HELLO ADMIN logged in succesfully<br><a href='logout.php'>logout</a>";

  
}}