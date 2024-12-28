<?php

class Ticket {

    private $nombre;
    private $genre;
    private $num_siege;
    private $price;
    private $salle_id;

    public function __construct($nombre, $genre, $num_siege, $price, $salle_id){
        $this->nombre = $nombre;
        $this->genre = $genre;
        $this->num_siege = $num_siege;
        $this->price = $price;
        $this->salle_id = $salle_id;
    }

    public function validationTicket(){
        if (!empty($this->nombre) && !empty($this->genre) && !empty($this->num_siege && !empty($this->price) && !empty($this->salle_id))) {
            return true; 
        } 
        return false;
    }

    public function insertTicket($conn){
        $req = "INSERT INTO tickets (nombre ,genre, num_siege, price, salle_id) VALUES (nomre = :nombre , genre = :genre)"

    }





}


?>