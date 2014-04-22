<div id="content" style="top:20%;position:absolute;left:20%;font-size:36pt;">
<link rel="stylesheet" type="text/css" href="style.css"/>
<?php

$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton',
'cryptonGaurav');
$pdo_infotsav = new PDO('mysql:host=localhost;dbname=infotsav', 'crypton',
'cryptonGaurav');
if(isset($_POST["team"]))
	$team=$_POST["team"];
else
	header('location:home.php');
	
$player1=$_POST["player1"];
$player2=$_POST["player2"];
$player3=$_POST["player3"];
$password=md5($_POST["password"]);


$sql="select * from team_reg ";
$result12 = $pdo->query($sql);
$a1=0;
while($row12=$result12->fetch())
{
if($row12[0]==$team || ($row12[1]==$player1 && $row12[1]!=NULL) || ($row12[1]==$player2 && $row12[1]!=NULL)|| ($row12[1]==$player3 && $row12[1]!=NULL))

$a1=1;
if($row12[0]==$team || ($row12[2]==$player1 && $row12[2]!=NULL) || ($row12[2]==$player2 && $row12[2]!=NULL)|| ($row12[2]==$player3 && $row12[2]!=NULL))

$a1=1;

if($row12[0]==$team || ($row12[3]==$player1 && $row12[3])!=NULL || ($row12[3]==$player2 && $row12[3]!=NULL)|| ($row12[3]==$player3 && $row12[3]!=NULL))

$a1=1;



}
if($a1==1)
echo "player or team allready exist please try another team name<br> <a href='team.php'>Back</a>";
else{

if($player1=="" && $player2=="" && $player3=="")
{
	echo "Insert Atleast One Player<br> <a href='team.php'>Back</a>";
}
else
{
$flag = true;
 if($player1!="")
 {	
	$sql1="select username from users where username='".$player1."'";	
	$result = $pdo_infotsav->query($sql1);
	$a1=0;
	while($row=$result->fetch())
	$a1=$a1+1;
	if($a1==0)
	{echo $player1." is not registered on Infotsav<br><a href='http://infotsav.org/'>Register now</a><br>";$flag=false;}
}

if($player2!="")
{	
	$sql1="select username from users where username='".$player2."'";
	$result = $pdo_infotsav->query($sql1);
		$a1=0;
		while($row=$result->fetch())
		$a1=$a1+1;
		if($a1==0)
		{echo $player2." is not registered on Infotsav<br><a href='http://infotsav.org/'>Register now</a><br>";$flag=false;}
}

if($player3!="")
{	
	$sql1="select username from users where username='".$player3."'";
				$result = $pdo_infotsav->query($sql1);
				$a1=0;
				while($row=$result->fetch())
				$a1=$a1+1;
				if($a1==0)
				{echo $player3." is not registered on Infotsav<br><a href='http://infotsav.org/'>Register now</a><br>";$flag=false;}
						
}

	
	















		if($flag==true)
		{
				$sql2='insert into team_reg values("'.$team.'","'.$player1.'","'.$player2.'","'.$player3.'","'.$password.'");';
				$result2=$pdo->exec($sql2);
				if($result2==NULL)
				echo "error while registering try again";
				else
				echo"Registration Succesfull<br><a href='home.php'>Login now</a>";
				
		}
		else
		{
			echo "<br>Invalid Registration Details<br>";
				
		}
		
}
}
?>
