<?php

class Movie {
    public $title;
    public $director;
    public $genre;
    public $year;


}


$indipendeceDay = new Movie();
$indipendeceDay->title = 'Indipendece Day';
$indipendeceDay->director = 'Roland Emmerich';
$indipendeceDay->genre = 'Fantascienza';
$indipendeceDay->year = '1996';

var_dump($indipendeceDay);
?>