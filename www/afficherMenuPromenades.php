<?php
// Import de la database

require_once ("database.php");
$database = new Database();
$id = $_GET["id"];
//Récupération de la liste de promenade
$listePromenade = $database->getAllPromenade();
?>

<html>
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>D&W</title>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- bootstrap cdn-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- fontawesome-->
        <script src="https://kit.fontawesome.com/c557fd0a43.js"></script>

        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <h1> liste des promenades </h1>

        <ul>
        <?php foreach($listePromenade as $promenade){ ?>
        <li>
        <?php   echo "<a href?afficherPromenades.php?id=".$promenade->getId().">";
                echo "Promenade n°: ".$promenade->getId()."Auteur: ".$promenade->getAuteur().
                "Nom: ".$promenade->getNom()." Pays: ".$promenade->getPays()." Ville: ".$promenade->getVille().
                "NPA: ".$promenade->getNpa()." Depart: ".$promenade->getDepart()." Arrivee: ".$promenade->getArrivee().
                " Itineraire: ".$promenade->getItineraire();
                echo "</a>";
        ?>
        </li>
        <?php } ?>
        </ul>
        </body>
        </html>