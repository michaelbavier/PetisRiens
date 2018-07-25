<?php
include 'config.php';
try {
    $connexion = new PDO("mysql:host=$serveur;dbname=petitrien", $login, $pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $requete = $connexion->prepare("
    SELECT * FROM user");
    
    $requete->execute();
    
    $resultat = $requete-> fetchall();
    
    echo'<pre>';
    print_r($resultat);
    echo'</pre>';
    
    }
    
    catch(PDOExeption $e){
        echo 'Echec : ' .$e->getMessage();
    }

 ?>