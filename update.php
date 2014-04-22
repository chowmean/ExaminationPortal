<div id="update"><font size="5"><center><u>UPDATES</u></font>
<?php $pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');
$sql = 'SELECT *
FROM `update`;';
$result = $pdo->query($sql);
echo "<font color='white'>";
echo "<br><b>";
while($row=$result->fetch())
{
echo $row[0];
echo "<br>";
}
echo "</b>"
?>
</font>
</div>

<style>
#update{
height:15%;
width:100%;
position:absolute;
left:0%;
top:0%;
background: black;
color:blue;opacity:0.8;
}
</style>