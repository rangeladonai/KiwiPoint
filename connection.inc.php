<?php

//XAMPP DB Connection
$host = 'localhost';
$port = 3306;
$user = 'root';
$password = '';
$dbname = 'Letrim';


//Docker DB Connection
// $host = 'db';
// $port = '3306';
// $dbname = 'Letrim';
// $user = 'root';
// $password = 'root';

try {
    $DB = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $user, $password, [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_LOCAL_INFILE => true
    ]);
    echo '\conectado/';
} catch (PDOException $e) {
    die('Erro na conexão: ' . $e->getMessage());
}
