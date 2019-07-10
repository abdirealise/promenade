<?php
class Promenades{
    //Attributs
    private $id;
    private $auteur;
    private $nom;
    private $pays;
    private $ville;
    private $npa;
    private $depart;
    private $arrivee;
    private $itineraire;

    //constructeur par default

    //fonctions
    public function __set($name, $value){}
    
    public function getId(){
        return $this->id;
    }
    public function getAuteur(){
        return $this->auteur;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPays(){
        return $this->pays;
    }
    public function getVille(){
        return $this->ville;
    }
    public function getNpa(){
        return $this->npa;
    }
    public function getDepart(){
        return $this->depart;
    }
    public function getArrivee(){
        return $this->arrivee;
    }
    public function getItineraire(){
        return $this->itineraire;
    }

}

?>