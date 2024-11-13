<?php

Class TypeDeFilm {
    private string $genre;
    private array $films;

    public function __construct(string $genre) {
        $this->genre = $genre;
        $this->films = [];
    }

    public function addFilm(Film $film) {
        $this->films[] = $film; 
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;

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

    public function afficherFilms(){
        return "Voici la liste appartenant au genre ".$this.":<br>".implode("<br>", $this->films);
    }

    public function __toString() {
        return $this->genre;
    }
}