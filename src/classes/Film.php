<?php
class Film {
    private $title;
    private $genre;
    private $duration;
    private $date_realiser;
    private $directeur;
    private $projection_id;

    public function __construct($title, $genre, $duration, $date_realiser, $directeur, $projection_id ) {
        $this->title = $title;
        $this->genre = $genre;
        $this->duration = $duration;
        $this->date_realiser = $date_realiser;
        $this->directeur = $directeur;
        $this->projection_id = $projection_id;
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
    public function getProjection_id(){
        return $this->projection_id;
    }

}
?>
