<?php

Class Personne {
    protected string $nom;
    protected string $prenom;
    protected string $sexe;
    protected DateTime $birthDate;

    public function __construct(string $nom, string $prenom, string $sexe, string $birthDate){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->birthDate = new DateTime($birthDate);
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSexe()
    {
        return $this->sexe;
    }

    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function __toString() {
        return $this->nom." ".$this->prenom;
    }
}