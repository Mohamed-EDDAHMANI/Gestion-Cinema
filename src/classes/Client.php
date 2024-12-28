<?php
require_once 'Member.php';

class Client extends Member {
    
    public function seeListOfFilms($conn) {
        $stmt = $conn->prepare("SELECT * FROM films");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // public function reserveTicket($conn, $filmId) {
    //     $stmt = $conn->prepare("INSERT INTO tickets (film_id, client_id) VALUES (?, ?)");
    //     $stmt->execute([$filmId, $this->email]);
    //     return "Ticket reserved successfully.";
    // }
}
?>
