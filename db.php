<?php
$jsonFile = file_get_contents('./data.json');
$movies = json_decode($jsonFile,true);
// var_dump($movies);
// echo $movies[1]['title'];