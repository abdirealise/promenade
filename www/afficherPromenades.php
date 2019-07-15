<!DOCTYPE html>
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
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-info fas fa-globe-europe" href="#">Discover & Workout</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-warning" href="http://localhost/afficherMenuPromenades.php">Promenades</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="http://localhost/formulaire.php">Créer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#footer">Contact</a>
      </li>
    </ul>
    
  </div>
</nav>
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
            <form action="http://maps.google.com/maps" method="get" target="_blank">
    <input type="hidden" name="saddr" value="<?php echo $promenade->getDepart();?>"/>
    <input type="hidden" name="daddr" value="<?php echo $promenade->getArrivee(); ?>" />
   <input type="submit" value="Voir Itineraire sur Google Map" />
   <br><br>
</form>
            <a href="process-delete.php?id=<?php echo $promenade->getId(); ?>">Delete</a>
            <br><br>
            <a href="afficherMenuPromenades.php">Retour a la liste</a>
            <br><br>
        </div>
        </div>
        <!--Footer-->
        <footer class="page-footer font-small teal pt-4 bg-dark text-light">

  
  <div class="container-fluid text-center text-md-left">

    
    <div class="row">

      
      <div class="col-md-6 mb-md-0 mb-3">

        
        <h5 class="text-uppercase font-weight-bold">Contact</h5>
        <p>
          <i class="fas fa-home mr-3"></i>Rue Viguet 8, 1227 Les Acacias</p>
        <p>
          <i class="fas fa-envelope mr-3"></i>info@realise.ch</p>
        <p>
          <i class="fas fa-phone mr-3"></i>+ 41 (0)22 308 60 10</p>

        <p>
          <i class="far fa-id-badge mr-3"></i>  Abdi & Emmanuel</p>
      </div>
      <div class="col-md-6 mb-md-0 mb-3">
      <h5 class="text-uppercase font-weight-bold">Social</h5>
      <p>
        <i class="fab fa-discord mr-3"></i>Rejoignez nous sur Discord !</p>
        <p>
        <i class="fab fa-facebook mr-3"></i>Rejoignez nous sur Facebook !</p>
        <p>
        <i class="fab fa-twitter mr-3"></i>Rejoignez nous sur Twitter !</p>
        <p>
        <i class="fab fa-telegram mr-3"></i>Rejoignez nous sur Telegram !</p>
      
      </div>

    </div>
  

  </div>

</footer>  
    </body>
</html>
