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
$itineraire = $_POST["itineraire"];
//Importer et instancier une database
require_once("database.php");
$database = new Database();


// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Vérifie si le fichier a été uploadé sans erreur.
    if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["image"]["name"];
        $filetype = $_FILES["image"]["type"];
        $filesize = $_FILES["image"]["size"];

        // Vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

        // Vérifie la taille du fichier - 5Mo maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");

        // Vérifie le type MIME du fichier
        if(in_array($filetype, $allowed)){
            // Vérifie si le fichier existe avant de le télécharger.
            if(file_exists("upload/" . $_FILES["image"]["name"])){
                echo $_FILES["image"]["name"] . " existe déjà.";
            } else{
                $image = "upload/" . $_FILES["image"]["name"];
                move_uploaded_file($_FILES["image"]["tmp_name"], $image);
                //echo "Votre fichier a été téléchargé avec succès.";
            } 
        } else{
            echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
        }
    } else{
        echo "Error: " . $_FILES["image"]["error"];
    }
}


//appeler la fonction en lui passant les infos du formulaire

$nouvelId = $database->insertPromenade($auteur,$nom,$pays,$ville,$npa,$depart,$arrivee,$image,$itineraire);

//Rediriger l'utilisateur 
header("Location:afficherPromenades.php?id=".$nouvelId);
?>