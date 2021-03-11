<?php
 try
{    // connection à la base de données
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=detectiot', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());  // En cas d'erreur, on affiche un message et on arrête tout
}
    
if (isset($_GET['distance1'])) // test si la variable existe
        {
            
        $_GET['distance1'] = $_GET['distance1'];
        echo ('donnee ' .$_GET["distance1"]. ' en cours d\'ecriture</br>');
        $bdd->exec('INSERT INTO distance (distance) VALUES('.$_GET["distance1"].')');
         echo ('donnee ' .$_GET['distance1']. ' ecrite!');
        } else {
            echo "pb";
        }
       
?>