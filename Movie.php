<?php
class Movie {
    public $original_title;
    public $director;
    private $year_release;
    private $genre;

    public function __construct(
        $title,
        $director,
        $year_released,
        $genre 
        )
        {
        $this->original_title = $title;
        $this->director = $director;
        $this->setYear($year_released);
        $this->setGenre($genre);
    }
    
    public function setYear($num){
        if(is_int($num)){
            $this->year_release = $num;
            return $num;
        }
    }
    public function setGenre($var){
        if(is_array($var)){
            $this->year_release = $var;
            return $var;
        }
    }
}


