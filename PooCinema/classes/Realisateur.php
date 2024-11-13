<?php

Class Realisateur extends Personne {
    
    private array $films;

    public function __construct(string $nom, string $prenom, string $sexe, string $birthDate) {
        parent::__construct($nom, $prenom, $sexe, $birthDate);
        $this->films = [];
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

    public function addFilm(Film $film) {
        $this->films[] = $film;
    }

    public function afficherFilms(){
        return "Voici la liste de films appartenant a ".$this.":<br>".implode("<br>", $this->films);
    }
}