<?php

// include '../config/database.php';
require_once 'Member.php';

class Administrateur extends Member {

    public function validateFilm($titre, $genre, $duration, $date_realiser, $director) {
        if (!empty($titre) && !empty($genre) && !empty($duration && !empty($date_realiser) && !empty($director))) {
            return true; 
        } 
        return false;
    }

    public function createFilm($titre, $genre, $duration, $date_realiser, $director){
        $nom_table = "films";
        $req = "INSERT INTO $nom_table (title , genre , duration, date_realiser, director) VALUES (:title, :genre, :duration, :date_realiser, :director)";

        $db = new Database();
        $conn = $db->connect();

        $requete = $conn->prepare($req);
        $requete->bindParam(':title', $titre);
        $requete->bindParam(':genre', $genre);
        $requete->bindParam(':duration', $duration);
        $requete->bindParam(':date_realiser', $date_realiser);
        $requete->bindParam(':director', $director);
        return $requete->execute();
    }

    public function readFilm() {
        $db = new Database();
        $conn = $db->connect();
        $stmt = $conn->prepare("SELECT * FROM films");
        $stmt->execute();
        return $stmt->fetch();
    }

    public function updateFilm($filmId, $newDetails) {
        $db = new Database();
        $conn = $db->connect();
        $requete = $conn->prepare("UPDATE films SET title = :title, genre = :genre, duration = :duration, date_realiser = :date_realiser , director = :director WHERE id = :id");
        $requete->bindParam(':title', $newDetails['title']);
        $requete->bindParam(':genre', $newDetails['genre']);
        $requete->bindParam(':duration', $newDetails['duration']);
        $requete->bindParam(':date_realiser', $newDetails['date_realiser']);
        $requete->bindParam(':director', $newDetails['director']);
        $requete->bindParam(':id', $filmId);
        $requete->execute();
        return "Film updated successfully.";
    }

    public function deleteFilm($filmId) {
        $db = new Database();
        $conn = $db->connect();
        $stmt = $conn->prepare("DELETE FROM films WHERE id = ?"); 
        $stmt->execute([$filmId]); 
        return "Film deleted successfully.";
    }
}
