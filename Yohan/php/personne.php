<?php

class Personne 
{

    private $nom;
    private $prenom;


    function __construct()
    {
        
    }
    function __toString()
    {
        return $this->nom."".$this->prenom;
    }


    function getNom()
    {
        return $this->nom;
    }

    function setNom($valeur)
    {
         $this->nom=$valeur;
    }
    


}



?>