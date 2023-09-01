<?php
require_once __DIR__ . './Movie.php';
require_once __DIR__ . './db.php';
$newMovie = new Movie("Drive","Refn",2007, ['action']);
// var_dump($newMovie);
$newMovies =[];
foreach ($movies as $index => $movie){
    // var_dump($movie);
    $createMovie = new Movie($movie['title'],$movie['director'],intval($movie['year']),$movie['genre']);
    $newMovies[] = $createMovie;
}
var_dump($newMovies);