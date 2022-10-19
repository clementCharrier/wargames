<?php

function dbConnect(){
    $dbname="usertable";
    $host="127.0.0.1";
    $port=5432; 
    $dsn = "pgsql:dbname=$dbname;host=$host;port=$port";
    $user = "useradmin";
    $password = "test";
    
    try {
        $conn = new PDO($dsn, $user, $password);
        return $conn;
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }
}
?>