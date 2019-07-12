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

    </header>
    <body>
        <div class="container text-center">
        <h1>Information de la promenade</h1>
        <div class="column text-center">
            <p>Auteur: <?php echo $promenade->getAuteur(); ?></p>
            <p>Nom: <?php echo $promenade->getNom(); ?></p>
            <p>Pays: <?php echo $promenade->getPays();?></p>
            <p>Ville: <?php echo $promenade->getVille(); ?></p>
            <p>NPA: <?php echo $promenade->getNpa(); ?></p>
            <p>Depart: <?php echo $promenade->getDepart();?></p>
            <p>Arrivee: <?php echo $promenade->getArrivee(); ?></p>
            <p>Itineraire: <?php echo $promenade->getItineraire();?></p>
            <p>Image: <?php echo $promenade->getImage();?></p>
            
            <br><br>
            <a href="process-delete.php?id=<?php echo $promenade->getId(); ?>">Delete</a>
        </div>
        </div>  
    </body>
</html>