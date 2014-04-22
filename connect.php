<?php
try
{
$pdo = new PDO('mysql:host=localhost;dbname=crypton', 'crypton','cryptonGaurav');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
echo $e->getMessage();

exit();
}
if ($pdo)

$pdo=NULL;
if($pdo)
echo "error connecting";