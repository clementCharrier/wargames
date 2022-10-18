<?php
ini_set('display_errors', 'on');
require_once ('database.php');
error_reporting(E_ALL);
$db = dbconnect();
try{
    $requete= $db->query('SELECT * FROM contact');
    $resultat = $requete -> fetchAll (PDO::FETCH_ASSOC);
    $json=json_encode($resultat);
    print_r($json);
    return $json;
    }catch (PDOException $e){
        echo 'Connexion échouée : ' . $e->getMessage();
        return FALSE;
    }
?>