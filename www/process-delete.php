<?php
//Import de la database
require_once("database.php");
//Création de la connexion
$database = new Database();
//Récupérer l'id depuis l'url
$id = $_GET["id"];

$resultat = $database->deletePromenade($id);
if($resultat == true){

    //php url redirection
    header('Location: afficherMenuPromenades.php');
}else{
    //Si ça n'a pas fonctionné afficher un message
    echo "Suppression impossible";
}
?>