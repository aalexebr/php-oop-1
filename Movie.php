<?php
class Movie {
    public $original_title;
    public $director;
    public $year_release;
    public $genre;

    function __contruct($original_title,$director,$year_release){
        $this->original_title = $original_title;
        $this->director = $director;
        $this->year_release = $year_release;
    }
}