<?php
//Page Intermédiaire => QUE du PHP

//Récupérer les infos du formulaire avec $_POST
$auteur = $_POST['auteur'];
$nom = $_POST['nom'];
$pays = $_POST['pays'];
$ville = $_POST['ville'];
$npa = $_POST['npa'];
$depart = $_POST['depart'];
$arrivee = $_POST['arrivee'];
$itineraire = $_POST['itineraire'];
//Importer et instancier une database
require_once("database.php");
$database = new Database();

//appeler la fonction insterDog en lui passant les infos du formulaire
//récupérer le nouvel id du chien crée
//insertDog($nom,$age,$race,$idMaitre)
$nouvelId = $database->insertPromenade($auteur,$nom,$pays,$ville,$npa,$depart,$arrivee,$itineraire);

//Rediriger l'utilisateur  vers la page du profit du nouveau chien 
header("Location:afficherPromenades.php?id=".$nouvelId);

?>