<?php

spl_autoload_register(function ($class_name) {
    require "classes/" . $class_name . '.php';
});

//Genre de film
$typeSF = new TypeDeFilm("SF");
$typeAction = new TypeDeFilm("Action");
$typeSuspense = new TypeDeFilm("Suspense");
$typeFantasie = new TypeDeFilm("Fantasie");

//Realisateurs
$shyamalan = new Realisateur("Shyamalan", "Night M", "Masculin", "1970-08-06");
$tolkien = new Realisateur("J R R ", "Tolkien", "Masculin", "1964-08-06");
$geller = new Realisateur("Geller", "Bruce", "Masculin", "1958-08-06");
$whedon = new Realisateur("Whedon", "Joss", "Masculin", "1975-08-06");

//Acteurs
$mcAvoy = new Acteur("McAvoy", "James", "Masculin", "1978-04-05");
$maguire = new Acteur("Maguire", "Tobey", "Masculin", "1978-04-05");
$garfield = new Acteur("Garfield", "Andrew", "Masculin", "1978-04-05");
$holland = new Acteur("Holland", "tom", "Masculin", "1978-04-05");


//personnages
$kevin = new Personnage("Kevin"); //split
$spiderman = new Personnage("Spiderman");//spiderman
$maryjane = new Personnage("Mary Jane"); // spiderman
$ethan = new Personnage("Ethan Hunt"); //mission impossible
$legolas = new Personnage("Legolas"); // LOTR

//FILMS
$split = new Film("Split", "2016-01-01", 117, "blahblah", $typeSF, $shyamalan);
$lotr = new Film("Lord of the rings", "2004-01-01", 574, "blahblah", $typeFantasie, $tolkien);
$avengers = new Film("Avengers", "2009-01-01", 1250, "blahblah", $typeAction, $whedon);
$missionImpossible = new Film("Mission Impossible", "2017-01-01", 240, "blahblah", $typeAction, $geller);
$trap = new Film("Trap", "2024-01-01", 341, "blahblah", $typeAction, $shyamalan);
$spidermanFilm = new Film("Spider Man", "2019-01-01", 214, "blahblah", $typeAction, $whedon);

$casting1 = new Casting($maguire, $spidermanFilm, $spiderman);
$casting2 = new Casting($holland, $spidermanFilm, $spiderman);
$casting3 = new Casting($garfield, $spidermanFilm, $spiderman);
$casting4 = new Casting($holland, $lotr, $legolas);

//montre les acteurs qui ont joué dans Spider MAN le film
echo $spidermanFilm->showCasting();
echo "<br>-----------------<br>";

//Montre les films dans lequels Holland a joué.
echo $holland->showCasting();
echo "<br>-----------------<br>";

//montre les acteurs ayant joué spiderman.
echo $spiderman->showCasting();
echo "<br>-----------------<br>";

//Films fait par $realisateur.
echo $whedon->afficherFilms();
echo "<br>-----------------<br>";

//Genre de film.
echo $typeAction->afficherFilms();