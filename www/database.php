<?php
require_once ("classPromenades.php");

class Database{
    //attributs
    private $connexion;

    //le constructeur
    public function __construct(){
        // le chemin vers le serveur
        $PARAM_hote="mariadb";
        // le port de connexion à la base de donnée
        $PARAM_port="3306";
        // le nom de votre base de données
        $PARAM_nom_bd="Promenade";
        // nom d'utilisateur pour se connecter
        $PARAM_utilisateur="AdminPromenade";
        // mot de passe de l'utilisateur pour se connecter
        $PARAM_mot_de_passe="digital2019";
        
        try{
            $this->connexion =new PDO(
                "mysql:host=".$PARAM_hote.";dbname=".$PARAM_nom_bd,
                $PARAM_utilisateur,
                $PARAM_mot_de_passe);
        }catch(Exception $monException){
            echo "Erreur: ".$monException->getMessage()."<br/>";
            echo "Code :".$monException->getCode();
        }
    }

    //Les fonctions (le comportement)
    public function getConnexion(){
        return $this->connexion;
    }

    //Fonction pour insérer une nouvelle promenade
    public function insertPromenade($auteur,$nom,$pays,$ville,$npa,$depart,$arrivee,$image,$itineraire){
        // Je prépare la requête
        $pdoStatement = $this->connexion->prepare(
            "INSERT INTO Promenades (auteur,nom,pays,ville,npa,depart,arrivee,image,itineraire) 
             VALUES (:paramAuteur,:paramNom,:paramPays,:paramVille,:paramNpa,:paramDepart,:paramArrivee,:paramImage,:paramItineraire)");

            //J'exécute la requête
            $pdoStatement->execute(
                array(
                "paramAuteur"=> $auteur,
                "paramNom"=> $nom,
                "paramPays"=> $pays,
                "paramVille"=> $ville,
                "paramNpa"=> $npa,
                "paramDepart"=> $depart,
                "paramArrivee"=> $arrivee,
                "paramImage"=> $image,
                "paramItineraire"=> $itineraire));

            //Pour débugger et verifier que tout s'est bien passé
            //var_dump($pdoStatement->errorInfo());

            //Je récupère l'id qui a été crée par la base de données
            $id=$this->connexion->lastInsertId();
            return $id;
    }


    public function getPromenadeById($id){
        
        $pdoStatement=$this->connexion->prepare("SELECT id,auteur,nom,pays,ville,npa,depart,arrivee,image,itineraire 
        FROM Promenades WHERE id = :idPromenade");

        $pdoStatement->execute(
            array("idPromenade"=>$id)
        );

        return $pdoStatement->fetchObject("Promenade");
    }

}
?>