<?php

$user = 'root';
$pass = 'digital2019';

try {
     $dbh = new PDO('mysql:host=mariadb;dbname=mysql', $user, $pass);
     $dbh = null;
     echo "Success: A proper connection to MySQL was made! The docker database is great.<br>";
} catch (PDOException $e) {
     echo "Error: Unable to connect to MySQL. <br>";
     print $e->getMessage() . "<br>";
     die();
}

//Import des fichiers nécessaires aux test
require_once ("database.php");

//J'affiche le titre de ma page
echo "<h1> Tests de la database : </h1>";

//J'instance une nouvelle connexion à ma base de données
$database=new Database();

//Affichage du contenu de la variable pour débugger
//var_dump($database);

if($database->getConnexion() == null){
     echo"<p>la connexion a échoué</p>";
} else{
     echo "<p>Connexion réussie</p>";
}

//J'insère une nouvelle promenade et je récupère son id
$nouvelId=$database->insertPromenade("Abdi","Lac Leman","Suisse","Geneve","1200","Eaux-Vives","Paquis"
,"Rive,Bel-Air,Cornavin");

echo"<p>Une nouvelle promenade insérée avec le numéro: $nouvelId</p>";

?>

<html>


<head>
<link rel="stylesheet" href="style.css">
</head>

<body>

</body>


</html>