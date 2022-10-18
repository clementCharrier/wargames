<?php
ini_set('display_errors', 'on');
error_reporting(E_ALL);
require_once ('database.php');
session_start();
if(isset($_POST['login']) && isset($_POST['password']))
{
   $db = dbconnect();
   $username=$_POST['login'];
   $password=$_POST['password'];
   if($username !== "" && $password !== "")
   {
      try{
      $requete=$db->query("SELECT count(*) FROM users WHERE 
      login='$username' AND password='$password'");
      $result=$requete->fetch(PDO::FETCH_ASSOC);
      }

      catch (PDOException $e){
      echo 'Connexion échouée : ' . $e->getMessage();
      return FALSE;
      }

      $count = implode(" ",$result);
      echo $count;

      if($count!=0) // nom d'utilisateur et mot de passe correctes
      {
         try{
            $requete=$db->query("SELECT prenom FROM users WHERE 
            login='$username'");
            $result=$requete->fetch(PDO::FETCH_ASSOC);
            $name = implode(" ",$result); //Conversion array to string
         }

         catch (PDOException $e){
            echo 'Connexion échouée : ' . $e->getMessage();
            return FALSE;
         }
         
         $_SESSION['username'] = $name;
         header('Location: ../index.php');
      }
      else
      {
         header('Location: connexion.php?erreur=1'); // utilisateur ou mot de passe incorrect
      }
   }
   else
   {
      header('Location: connexion.php?erreur=2'); // utilisateur ou mot de passe vide
   }
}
else
{
   header('Location: connexion.php');
}

?>