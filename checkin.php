<link rel="stylesheet" type="text/css" href="style.css"/>
<?php



include 'connect.php';
$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');
$sql = 'SELECT team,password FROM team_reg';
$result = $pdo->query($sql);

$var=0;
$username=$_POST["username"];
$password=md5($_POST["password"]);
while($row=$result->fetch())
  {
  if($row[0]==$username)
	{if($row[1]==$password)
		{$var=1;
		}
	}
  }
  
  if($var==0)
  header('location:home.php');

else
{session_start();
  $_SESSION["username"]=$username;
  
header('location:main.php');}

?> 