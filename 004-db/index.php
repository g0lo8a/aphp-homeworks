<?php
declare(strict_types=1);

$pdo = new PDO("sqlite:/Users/g0lo8a/Sites/aphp-1/004-db/004_db.sqlite");
$sql = 'INSERT INTO shop(name, address) VALUES(:name, :address)';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', 'new_магазинчик');
$stmt->bindValue(':address', 'new_адресочек');
$stmt->bindValue(':name', 'магазинчик');
$stmt->bindValue(':address', 'адресочек');
$stmt->execute();
$insertedId = $pdo->lastInsertId();
var_dump($insertedId);