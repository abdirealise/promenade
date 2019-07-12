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
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand text-info" href="#">Discover & Workout</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="http://localhost/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="http://localhost/afficherPromenades.php">Promenades</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-warning">Créer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#footer">Contact</a>
      </li>
    </ul>
    
  </div>
</nav>
<div>
    <h1>Création d'une nouvelle promenade </h1>

    <form action = "process-create.php" method="post">

        <label for="auteur">Auteur</label>
        <input type="text" id="auteur" name="auteur" placeholder="Abdi"><br>

        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" placeholder="Lac Léman"><br>

        <label for="pays">Pays</label>
        <input type="text" id="pays" name="pays" placeholder="Suisse"><br>

        <label for="ville  ">Ville</label>
        <input type="text" id="ville" name="ville" placeholder="Genève"><br>

        <label for="npa">NPA</label>
        <input type="text" id="npa" name="npa" placeholder="1200"><br>

        <label for="depart">Depart</label>
        <input type="text" id="depart" name="depart" placeholder="Eaux-Vives"><br>

        <label for="arrivee">Arrivee</label>
        <input type="text" id="arrivee" name="arrivee" placeholder="Paquis"><br><br>
        </form>
        
        <div class="upload_container">
                <br clear="all" />
                <div id='preview'></div>
                <form id="image" enctype="multipart/form-data" action="upload.php" method="post" class="change-pic">
                <label for="image">Inserer une image</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                <input style="padding-left:20px; color:#4d4d4d" type="file"  id="file" name="image" accept="image/*" />
                <script type="text/javascript">
                document.getElementById("file").onchange = function() {
                document.getElementById("image").submit();
                };
                </script>
                </div>
                </div><br><br>
                </form>
                <form action = "process-create.php" method="post">
                <label for="itineraire">Itineraire</label>
                <textarea rows="10" cols="50" type="text" id="itineraire" name="itineraire" placeholder="Rive,Bel-Air,Cornavin"></textarea>

                
        <input type="submit">
</div>
    </form>
    <!-- Footer -->
<footer class="page-footer font-small teal pt-4 bg-dark text-light">

<!-- Footer Text -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mb-md-0 mb-3">

      <!-- Content -->
      <h5 class="text-uppercase font-weight-bold">Contact</h5>
      <p>
        <i class="fas fa-home mr-3"></i> Rue Viguet 8, 1227 Les Acacias</p>
      <p>
        <i class="fas fa-envelope mr-3"></i> info@realise.ch</p>
      <p>
        <i class="fas fa-phone mr-3"></i> + 41 (0)22 308 60 10</p>
    </div>

    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Text -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">By Abdi & Emmanuel
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>