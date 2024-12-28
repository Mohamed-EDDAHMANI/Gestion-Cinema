<?php 
require_once '../../config/database.php';
require_once 'Member.php';


class TicketResponsable extends Member {

    public function suivreReservation(){
        
    }

    public function verifierCapaciter($filmId){
        $db = new Database();
        $conn = $db->connect();
        $queryCapacity = "SELECT capacity FROM films
        INNER JOIN projections ON projections.id = films.projection_id
        INNER JOIN salles ON salles.id = projections.salle_id
        WHERE films.id = :id ";
        $stmt = $conn->prepare($queryCapacity);
        $stmt->bindParam(":id", $filmId);
        $stmt->execute();
        $result = $stmt->fetch();
        $result['capacity'];

        $queryCount = "SELECT COUNT(*) as counter FROM ticket
        WHERE ticket.film_id = :id";
        $stmt = $conn->prepare($queryCount);
        $stmt->bindParam(":id", $filmId);
        $stmt->execute();
        $resultCount = $stmt->fetch();

        if($result['capacity'] > $resultCount['counter']){
            return true;
        }else{
            return false;
        }
    }
}

?>