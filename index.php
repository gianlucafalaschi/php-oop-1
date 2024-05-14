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

// Funzione che da il nome e l'anno
public function getMovieTitleAndYear() {
    return 'Titolo del film:' . ' ' .  $this->title . '<br> ' . 'Anno del film:' . ' ' . $this->year; 
}

}


$indipendeceDay = new Movie('Indipendence Day', 'Fantascienza');
/* $indipendeceDay->title = 'Indipendece Day'; */
$indipendeceDay->director = 'Roland Emmerich';
/* $indipendeceDay->genre = 'Fantascienza'; */
$indipendeceDay->year = '1996';

/* var_dump($indipendeceDay); */
/* echo $indipendeceDay->getMovieTitleAndYear(); */

$interstellar = new Movie('Interstellar', 'Fantascienza');
/* $interstellar->title = 'Interstellar'; */
$interstellar->director = 'Christopher Nolan';
/* $interstellar->genre = 'Fantascienza'; */
$interstellar->year = '2014';


/* var_dump($interstellar);  */
/* echo $interstellar->getMovieTitleAndYear(); */


$movies = [
    $indipendeceDay,
    $interstellar
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($movies as $movie) { ?>
        <div>
            <div><?php echo $movie->getMovieTitleAndYear(); ?></div>
            <div>Director: <?php echo $movie->director ?></div>
        </div><br>
    <?php } ?>
    
</body>
</html>