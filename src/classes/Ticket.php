<?php

class Ticket {

    private $nombre;
    private $genre;
    private $num_siege;
    private $price;

    public function __construct($nombre, $genre, $num_siege, $price){
        $this->nombre = $nombre;
        $this->genre = $genre;
        $this->num_siege = $num_siege;
        $this->price = $price;
    }


    
}


?>