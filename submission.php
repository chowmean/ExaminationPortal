<center><font color='red' size="6"><u> Your Submissions</u></font><br><br><br><br>
<table style="border 1px solid white;color:white;"><tr><td>Question</td><td>Answer</td></tr>
<font size="5" color="white">
<?php
session_start();
if(isset($_SESSION['username']))
{$username=$_SESSION['username'];
$exam_number=$_GET['exam_number'];
$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');
$sql='select answer_number,answer from answers where username="'.$username.'" and exam_number="'.$exam_number.'" order by answer_number';
$result=$pdo->query($sql);
while($row=$result->fetch())
{
echo "<tr><td>".$row[0]."</td><td>";
if($row[1]==5)
echo "Not attempted </td></tr>";
else
echo $row[1]."</td></tr>";

}
}
else
header('location:home.php');


?></table>
</center>
<link rel="stylesheet" type="text/css" href="style.css"/><center>
<a href="main.php"><button class='button'>Back</button></a></center>