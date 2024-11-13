<?php

Class Casting {
    private Acteur $acteur;
    private Film $film;
    private Personnage $personnage;
    
    public function __construct(Acteur $acteur, Film $film, Personnage $personnage) {
        $this->acteur = $acteur;
        $this->film = $film;
        $this->personnage = $personnage;
        $film->addCasting($this);
        $acteur->addCasting($this);
        $personnage->addCasting($this);
    }
 
    public function getActeur()
    {
        return $this->acteur;
    }

    public function setActeur($acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

    public function getFilm()
    {
        return $this->film;
    }

    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }

    public function getPersonnage()
    {
        return $this->personnage;
    }

    public function setPersonnage($personnage)
    {
        $this->personnage = $personnage;

        return $this;
    }
}