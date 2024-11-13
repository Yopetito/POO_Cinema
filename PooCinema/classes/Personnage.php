<?php

Class Personnage {
    private string $nomPersonnage;
    private array $castings;

    public function __construct(string $nomPersonnage){
        $this->nomPersonnage = $nomPersonnage;
        $this->castings = [];
    }

    public function getNomPersonnage()
    {
        return $this->nomPersonnage;
    }

    public function setNomPersonnage($nomPersonnage)
    {
        $this->nomPersonnage = $nomPersonnage;

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

    public function addCasting(Casting $casting) {
        $this->castings[] = $casting;
    }

    public function showCasting() {

        $result = "<h1>LE ROLE DE: ".$this."</h1><br>a été joué par:<br>";
        foreach($this->castings as $casting)
        {
            $result .= $casting->getActeur()."<br>";
        }
        return $result;
    }

    public function __toString() {
        return $this->nomPersonnage;
    }
}
