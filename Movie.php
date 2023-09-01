<?php
class Movie {
    public $original_title;
    public $director;
    // private $year_release;
    // private $genre;
    public $year_release;
    public $genre;

    public function __construct(
        $title,
        $director,
        $year_released,
        $genre 
        )
        {
        $this->original_title = $title;
        $this->director = $director;
        // $this->setYear($year_released);
        // $this->setGenre($genre);
        $this->year_release = $year_released;
        $this->genre = $genre;
    }
    
    public function setYear($num){
        if(is_int($num)){
            $this->year_release = $num;
            return $num;
        }
    }
    public function setGenre($var){
        if(is_array($var)){
            $this->genre = $var;
            return $var;
        }
    }
}


