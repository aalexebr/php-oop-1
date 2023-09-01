<?php
require_once __DIR__ . './Movie.php';

$newMovie = new Movie("Drive","Refn",2007, ['action']);
var_dump($newMovie);