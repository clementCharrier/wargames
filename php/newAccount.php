<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);
session_start();
require_once ('database.php');
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']))
{
    $db = dbconnect();
    $firstname=$_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password=$_POST['password'];
    $role = 'user';
    
    if($firstname !== "" && $lastname !== "" && $email !== "" && $password !== "" && $role !== ""){
       
        try{
            $requete=$db->query("SELECT count(*) FROM users WHERE login = '$email'");
            $result=$requete->fetch(PDO::FETCH_ASSOC);

        if($result == 0){
            try{
                $requete=$db->query("INSERT INTO users (nom, prenom, login, password, role) VALUES ('$firstname', '$lastname', '$email', '$password', '$role')");
                $result=$requete->fetch(PDO::FETCH_ASSOC);
                $_SESSION['username'] = $firstname;
                header('Location: ../index.php');
            }
                
            catch (PDOException $e){
                echo 'Connexion échouée : ' . $e->getMessage();
                return FALSE;
            }
        }
        else{
            header('Location: createAccount.php?erreur=1'); 
        }
        }
        catch (PDOException $e){
            echo 'Connexion échouée : ' . $e->getMessage();
            return FALSE;
        }

        
    }
    else{
        header('Location: createAccount.php'); 
    }
}
else{
    header('Location: createAccount.php'); 
}
?>