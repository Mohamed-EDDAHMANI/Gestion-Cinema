<?php
class Film {
    private $title;
    private $genre;
    private $duration;
    private $date_realiser;
    private $directeur;

    public function __construct($title, $genre, $duration, $date_realiser, $directeur) {
        $this->title = $title;
        $this->genre = $genre;
        $this->duration = $duration;
        $this->date_realiser = $date_realiser;
        $this->directeur = $directeur;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function getDuration(){
        return $this->duration;
    }
    public function getDate_realiser(){
        return $this->date_realiser;
    }
    public function getDirecteur(){
        return $this->directeur;
    }

}
?>
