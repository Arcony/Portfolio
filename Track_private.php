<?php
header("Access-Control-Allow-Origin: https://www.tf1.fr");
header("Access-Control-Allow-Origin: http://slpubmedias.tf1.fr");

//Connexion à la DB avant d'effectuer notre requête

require_once ('connect.php');

$champs = isset($_POST['champs']) ? $_POST['champs'] : "";

PRINT $champs;

try {

	
    $sql = "UPDATE PRIVATE SET ".$champs." = ".$champs." + 1";
    // On exécute la requête

    $req = $db->exec($sql);

	$db = null;

 }

catch(PDOException $e)

{

   echo "Erreur";

}



?>