<?php
session_start();
?>
<h2 size="7"> TRIALS RESULTS</h2>
<table style="border:1px solid black;">
<tr style='border:1px solid black;'><td style='border:1px solid black;width:200px;'>Rank</td><td style='border:1px solid black;width:200px;'>Name</td><td style='border:1px solid black;width:200px;'>Score</td>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');
//$exam_number=$_GET["exam_number"];
$sql = 'SELECT username,score FROM final_score WHERE exam_number="1" order by score desc';
$result = $pdo->query($sql);
$rank=1;

while($row=$result->fetch())
{

echo "<tr style='border:1px solid black;'>";

echo "<td style='border:1px solid black;width:200px;'>".$rank."</td><td style='border:1px solid black;width:200px;'>".$row['username']."<td style='border:1px solid black;width:200px;'>".$row['score']."</td>";
$rank++;

echo "</tr>";
}

?>
</table>