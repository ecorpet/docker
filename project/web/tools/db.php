<?php
/* Connexion à une base MySQL avec l'invocation de pilote */
$dsn = 'mysql:dbname=ereporting;host=db';
$user = 'root';
$password = 'sweetpwd';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>