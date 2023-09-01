<?php
class Movie {
    public $original_title;
    public $director;
    private $year_release;
    public $genre;

    public function __construct(
        $title,
        $director,
        $year_released
        )
        {
        $this->original_title = $title;
        $this->director = $director;
        $this->setYear($year_released);
    }
    
    public function setYear($num){
        if(is_int($num)){
            $this->year_release = $num;
            return $num;
        }
    }
}


