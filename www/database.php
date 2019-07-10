<?php
require_once ("classPromenade.php");

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

    
}
?>