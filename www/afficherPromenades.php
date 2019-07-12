<?php
//Import de la database
require_once("database.php");
//Création de la connexion
$database = new Database();
//Récupérer l'id depuis l'url
//var_dump($_GET);

$id = $_GET["id"];

//var_dump($id);
//Récupération de la liste des promenades
$promenade=$database->getPromenadeById($id);
?>
<html>
    <header>
        <link rel="stylesheet" href="style.css">
    </header>
    <body>
        <h1>Information de la promenade</h1>

            <p>Auteur: <?php echo $promenade->getAuteur(); ?></p>
            <p>Nom: <?php echo $promenade->getNom(); ?></p>
            <p>Pays: <?php echo $promenade->getPays();?></p>
            <p>Ville: <?php echo $promenade->getVille(); ?></p>
            <p>NPA: <?php echo $promenade->getNpa(); ?></p>
            <p>Depart: <?php echo $promenade->getDepart();?></p>
            <p>Arrivee: <?php echo $promenade->getArrivee(); ?></p>
            <p>Itineraire: <?php echo $promenade->getItineraire();?></p>
            
            <br><br>
            <a href="process-delete.php?id=<?php echo $promenade->getId(); ?>">Supprimer la promenade</a>
            
    </body>
</html>