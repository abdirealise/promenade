<html>
<header>
    <link rel="stylesheet" href="style.css">
</header>


<body>

<h1>Création d'une nouvelle promenade </h1>

    <form action = "process-create.php" method="post">

        <label for="auteur">Auteur</label>
        <input type="text" id="auteur" name="auteur" placeholder="Abdi">

        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" placeholder="Lac Léman">

        <label for="pays">Pays</label>
        <input type="text" id="pays" name="pays" placeholder="Suisse">

        <label for="ville">Ville</label>
        <input type="text" id="ville" name="ville" placeholder="Genève">

        <label for="npa">NPA</label>
        <input type="text" id="npa" name="npa" placeholder="1200">

        <label for="depart">Depart</label>
        <input type="text" id="depart" name="depart" placeholder="Eaux-Vives">

        <label for="arrivee">Arrivee</label>
        <input type="text" id="arrivee" name="arrivee" placeholder="Paquis">

        <label for="itineraire">Itineraire</label>
        <textarea rows="10" cols="50" type="text" id="itineraire" name="itineraire" placeholder="Rive,Bel-Air,Cornavin"></textarea>

        
        <input type="submit">
    </form>

</body>
</html>