<?php
/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:dbname=ereporting;host=db';
$user = 'root';
$password = '';
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
$sql = 'SELECT id, value FROM test';
$values = $dbh->query($sql);
foreach ($values as $row) {
    print $row["id"] . "-" . $row["value"] . PHP_EOL ;
}