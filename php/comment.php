<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);
require_once ('database.php');
$db = dbconnect();
if($_GET['request']=='receive'){
    try{
            $requete= $db->query('SELECT * FROM contact');
            $resultat = $requete -> fetchAll (PDO::FETCH_ASSOC);
            $json=json_encode($resultat);
            print_r($json);
            return $resultat;
        }catch (PDOException $e){
            echo 'Connexion échouée : ' . $e->getMessage();
            return FALSE;
        }
}
if($_GET['request']=='add'){
    if (isset($_GET['firstname']) && isset($_GET['subject']) && isset($_GET['email']) && isset($_GET['message'])){
            $firstname=$_GET['firstname'];
            $subject = $_GET['subject'];
            $email = $_GET['email'];
            $message =$_GET['message'];

        try{
            $requete=$db->query("INSERT INTO contact (firstname, login, subject, message) VALUES ('$firstname', '$email', '$subject', '$message')");
            $result=$requete->fetch(PDO::FETCH_ASSOC);
            header('Location: ../index.php');
        }catch (PDOException $e){
            echo 'Connexion échouée : ' . $e->getMessage();
            return FALSE;
        }
    }
}
?>