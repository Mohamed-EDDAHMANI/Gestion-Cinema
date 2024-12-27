<?php
require_once 'Member.php';

class Client extends Member {
    
    public function seeListOfFilms($pdo) {
        $stmt = $pdo->query("SELECT * FROM films");
        return $stmt->fetchAll();
    }

    public function reserveTicket($pdo, $filmId) {
        $stmt = $pdo->prepare("INSERT INTO tickets (film_id, client_id) VALUES (?, ?)");
        $stmt->execute([$filmId, $this->email]);
        return "Ticket reserved successfully.";
    }
}
?>
