<?php


try
{     // connection à la base de données
    $bdd = new PDO('mysql:host=localhost;dbname=mesure', 'root', '1234');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());     // En cas d'erreur, on affiche un message et on arrête tout
}    

?>
 
<html> 

   <head>
      <title>données</title>
    <meta http-equiv="refresh" content="5"/>
        <link rel="stylesheet" href="style.css" />
   </head>
<body>
   <h1>Donn&eacute;es</h1>
  <!--
   <table border="1" cellspacing="1" cellpadding="1" >
        <tr class='titre_tab'>
            <td>&nbsp;Date & heure&nbsp;</td>
            <td>&nbsp;valeur&nbsp;</td>
        </tr>
-->
     <?php
    $bdd->exec("INSERT INTO Mesure_Table VALUES ('20')");
    //$reponse = $bdd->query('SELECT * FROM Mesure_Table LIMIT 0, 12');
/*
    while ($donnees = $reponse->fetch())
    {
    ?>
      <tr><td>
          <?php echo $donnees['distance']; ?>
        </td></tr>
    <?php
    }
    */
    

      ?>

</body>
</html>