<?php
header("Access-Control-Allow-Origin: https://www.tf1.fr");
header("Access-Control-Allow-Origin: http://slpubmedias.tf1.fr");

//Connexion � la DB avant d'effectuer notre requ�te

require_once ('connect.php');

$champs = isset($_POST['champs']) ? $_POST['champs'] : "";

PRINT $champs;

try {

	
    $sql = "UPDATE PRIVATE SET ".$champs." = ".$champs." + 1";
    // On ex�cute la requ�te

    $req = $db->exec($sql);

	$db = null;

 }

catch(PDOException $e)

{

   echo "Erreur";

}



?>