<?php

Class Film {
    private string $titre;
    private DateTime $dateDeSortie;
    private int $duree;
    private string $synopsis;
    private TypeDeFilm $typeDeFilm;
    private Realisateur $realisateur;
    private array $castings;

    public function __construct(string $titre, string $dateDeSortie, int $duree, string $synopsis, TypeDeFilm $typeDeFilm, Realisateur $realisateur) {
        $this->titre = $titre;
        $this->dateDeSortie = new DateTime($dateDeSortie);
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $this->typeDeFilm = $typeDeFilm;
        $typeDeFilm->addFilm($this);
        $this->realisateur = $realisateur;
        $realisateur->addFilm($this);
        $this->castings = [];
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDateDeSortie()
    {
        return $this->dateDeSortie;
    }

    public function setDateDeSortie($dateDeSortie)
    {
        $this->dateDeSortie = $dateDeSortie;

        return $this;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    public function getSynopsis()
    {
        return $this->synopsis;
    }

    public function setSynopsis($synopsis)
    {
        $this->synopsis = $synopsis;

        return $this;
    }

    public function getTypeDeFilm()
    {
        return $this->typeDeFilm;
    }

    public function setTypeDeFilm($typeDeFilm)
    {
        $this->typeDeFilm = $typeDeFilm;

        return $this;
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
    
    public function getRealisateur()
    {
        return $this->realisateur;
    }

    public function setRealisateur($realisateur)
    {
        $this->realisateur = $realisateur;

        return $this;
    }

    public function addCasting(Casting $casting) {
        $this->castings[] = $casting;
    }

    public function showCasting() {

        $result = "<h1>FILM: ".$this."</h1><br>Les acteurs ayant joué le rôle de spiderman:<br>";
        foreach($this->castings as $casting)
        {
            $result .= $casting->getActeur()." / ".$casting->getPersonnage()."<br>";
        }
        return $result;
    }

    public function getInfos() {
        return "le film s'apelle ".$this." sortie en ".$this->dateDeSortie->format('Y')." et dure : ".$this->duree." minutes et de genre ".$this->typeDeFilm."<br>";
    }

    public function __toString() {
        return $this->titre;
    }
}