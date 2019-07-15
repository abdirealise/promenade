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
  <a class="navbar-brand text-info fas fa-globe-europe" href="#"> Discover & Workout</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-warning" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="http://localhost/afficherMenuPromenades.php">Promenades</a>
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
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="image/geneva.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/Mandarin_Oriental_01.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="image/Think-Switzerland-Geneva.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="row">

      <!--Grille-->
      <div class="col-md-6 mt-md-0 mt-3">

        <!--Text 1-->
        <h5 class="text-uppercase font-weight-bold">Familles</h5>
        <hr>
        <p>Sur ce site, les familles auront la possibilité de partager entre elles les meilleurs endroits à visiter.
          Des lieux remplis d'histoire, des points de vue à couper le souffle, ...
        </p>

      </div>
      
      <!--Grille-->
      <div class="col-md-6 mb-md-0 mb-3">
        
        <!--Text 2-->
        <h5 class="text-uppercase font-weight-bold">Sportifs</h5>
        <hr>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga perferendis modi earum
          commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam, aspernatur id
          excepturi hic.</p>

      </div>
      <!-- Grid column -->

    </div>

<!-- Footer -->
<footer id = footer class="page-footer font-small teal pt-4 bg-dark text-light">

  
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
