<?php
ini_set('display_errors', 'on');
require_once ('database.php');
$db = dbconnect();
if (isset($_POST['firstname']) && isset($_POST['subject']) && isset($_POST['email']) && isset($_POST['message'])){
    $firstname=$_POST['firstname'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $message =$_POST['message'];
    try{
        $requete=$db->query("INSERT INTO contact (nom, login, subject, message) VALUES ('$firstname', '$email', '$subject', '$message')");
        $result=$requete->fetch(PDO::FETCH_ASSOC);
        header('Location: ../index.php');
    }catch (PDOException $e){
        echo 'Connexion échouée : ' . $e->getMessage();
        return FALSE;
    }
}
?>