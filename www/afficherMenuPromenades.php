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
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-info fas fa-globe-europe" href="#"> Discover & Workout</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="http://localhost/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-warning" href="">Promenades</a>
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

        <h1> Liste des promenades </h1>
        <div>
        <ul>
        <?php foreach($listePromenade as $promenade){ ?>
        <li >

        <?php   echo "<a href=afficherPromenades.php?id=".$id=$promenade->getId().">";
                     
                echo "Promenade n°: ".$promenade->getId()."Auteur: ".$promenade->getAuteur().
                "Nom: ".$promenade->getNom()." Pays: ".$promenade->getPays()." Ville: ".$promenade->getVille();
                echo "<img class= container-fluid src=".$image=$promenade->getImage().">";
                echo "</a>";
        ?><br>
        </li>
        <?php } ?>
        </ul>
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

    <p><a target="_blank" rel="noopener noreferrer" href="https://discord.gg/ANvh99Y%22%3E">
    <i class="fab fa-discord mr-3 text-light"></i>Rejoignez nous sur Discord !</a></p>

    <p><a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/%22%3E">
    <i class="fab fa-facebook mr-3 text-light"></i>Rejoignez nous sur Facebook !</a></p>

    <p><a target="_blank" rel="noopener noreferrer" href="https://twitter.com/?lang=fr%22%3E">
    <i class="fab fa-twitter mr-3 text-light"></i>Rejoignez nous sur Twitter !</a></p>

    <p><a target="_blank" rel="noopener noreferrer" href="https://telegram.org/%22%3E">
    <i class="fab fa-telegram mr-3 text-light"></i>Rejoignez nous sur Telegram !</a></p>

    </div>
    </div>
  

  </div>

</footer>
        </body>
        </html>
