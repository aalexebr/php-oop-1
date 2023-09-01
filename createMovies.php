<?php
require_once __DIR__ . './Movie.php';

$newMovie = new Movie("Drive","Refn",2007);
// $newMovie->original_title = 'drive';
var_dump($newMovie);