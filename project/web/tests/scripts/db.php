<?php
require '_config.php';

$dsn = "mysql:dbname=".DATABASE_NAME.";host=".DATABASE_HOST;
$user = 'root';
$password = '';
try {
    $dbh = new PDO($dsn, DATABASE_USER, DATABASE_PASSWORD);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
$sql = 'SELECT id, value FROM test';
$values = $dbh->query($sql);
foreach ($values as $row) {
    print $row["id"] . "-" . $row["value"] . PHP_EOL ;
}