<?php

class Movie {
    public $title;
    public $director;
    public $genre;
    public $year;


// COSTRUTTORE (viene chiamata con new)
public function __construct($_title, $_genre) {
    $this->title = $_title;
    $this->genre = $_genre;
}

}


$indipendeceDay = new Movie('Indipendence Day', 'Fantascienza');
/* $indipendeceDay->title = 'Indipendece Day'; */
$indipendeceDay->director = 'Roland Emmerich';
/* $indipendeceDay->genre = 'Fantascienza'; */
$indipendeceDay->year = '1996';

var_dump($indipendeceDay);

$interstellar = new Movie('Interstellar', 'Fantascienza');
/* $interstellar->title = 'Interstellar'; */
$interstellar->director = 'Christopher Nolan';
/* $interstellar->genre = 'Fantascienza'; */
$interstellar->year = '2014';


var_dump($interstellar); 

?>