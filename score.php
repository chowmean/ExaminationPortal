<?php 



$sql="INSERT INTO score
VALUES (
'".$username."',".$exam_number.",".$score."
);";

$result3 = $pdo->exec($sql);
?>