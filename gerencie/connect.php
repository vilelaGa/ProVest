<?php

$dsn = 'mysql:host=localhost;dbname=provestnovo';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $ex) {
    echo 'ERRO DE CONEXÃO DB: ' . $ex->getMessage();
}

?>
