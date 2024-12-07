<?php

Class Acteur extends Personne {

    private array $castings;
    private array $films;

    public function __construct(string $nom, string $prenom, string $sexe, string $birthDate) {
        parent::__construct($nom, $prenom, $sexe, $birthDate);
        $this->castings = [];
    } 

    public function getCastings()
    {
        return $this->castings;
    }

    public function setCastings($castings)
    {
        $this->castings = $castings;

        return $this;
    }

    public function getFilms()
    {
        return $this->films;
    }

    public function setFilms($films)
    {
        $this->films = $films;

        return $this;
    }
    
    public function addCasting(Casting $casting) {
        $this->castings[] = $casting;
    }

    public function showCasting() {

        $result = "<h1>ACTEUR: ".$this."</h1><br>a joué les rôles suivants:<br>";
        foreach($this->castings as $casting)
        {
            $result .= "film: ".$casting->getFilm()." / Role:".$casting->getPersonnage()."<br>";
        }
        return $result;
    }

    public function __toString() {
        return $this->nom." ".$this->prenom;
    }
}