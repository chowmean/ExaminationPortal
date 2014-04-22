<?php
usleep(5000000);
$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');
$sql="update `exams` SET `visible`=1 WHERE `exam_number`=2;";
$result = $pdo->exec($sql);
?>