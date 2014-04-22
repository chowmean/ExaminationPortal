
<div id="content" style="top:20%;position:absolute;left:20%;font-size:36pt;">
<?php

$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');
$pdo_infotsav = new PDO('mysql:host=localhost;dbname=infotsav', 'crypton','cryptonGaurav');
$username=$_POST["username"];
$password=md5($_POST["password"]);
$sql="select username from crypton.users where username='".$username."'";
$result = $pdo->query($sql);
echo $result->rowCount();
if($result==NULL)
{
	$sql1="select username,password from infotsav where username='".$username."'";
	$result1 = $pdo_infotsav->query($sql1);
	if($result1==NULL)
	{
		echo 'Please Do register on Infotsav <br><br> <a href="register.php"><u>go back to registration<u>  </a>  <br><br> <a href="home.php"><u>HOME<u></a>';
	}
	else
	{
		$sql1="select username,password from infotsav where username='".$username."'";
		$result1 = $pdo_infotsav->query($sql1);
		while($row1=$result1->fetch())
		{
			$sql2='insert into crypton.users values("'.$row1[0].'","'.$row1[1].'");';
			$result2 = $pdo->exec($sql2);
			if($result2==NULL)
				echo 'please try again <br><br> <a href="register.php"><u>go back to registration<u>  </a>  <br><br> <a href="home.php"><u>HOME<u></a>';
			else
				echo 'succesfully registered <br><br> Go To Arena<a href="home.php"><u>HOME<u></a>';
		}
	}
}
else
{
	echo 'User already exist <br><br> <a href="register.php"><u>go back to registration<u>  </a>  <br><br> <a href="home.php"><u>HOME<u></a>';
}


?>
</div>
<link rel="stylesheet" type="text/css" href="style.css"/>