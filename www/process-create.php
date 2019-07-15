<?php
//Page Intermédiaire => QUE du PHP

//Récupérer les infos du formulaire avec $_POST
$auteur = $_POST["auteur"];
$nom = $_POST["nom"];
$pays = $_POST["pays"];
$ville = $_POST["ville"];
$npa = $_POST["npa"];
$depart = $_POST["depart"];
$arrivee = $_POST["arrivee"];
$image = $_SERVER["image"];
$itineraire = $_POST["itineraire"];
//Importer et instancier une database
require_once("database.php");
$database = new Database();

//appeler la fonction en lui passant les infos du formulaire

$nouvelId = $database->insertPromenade($auteur,$nom,$pays,$ville,$npa,$depart,$arrivee,$image,$itineraire);

//Rediriger l'utilisateur 
header("Location:afficherPromenades.php?id=".$nouvelId);

?>