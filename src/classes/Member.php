<?php
// include '../config/database.php';


class Member {
    protected $nom;
    protected $email;
    protected $mot_pass;
    protected $role;

    public function __construct($nom, $email, $mot_pass, $role)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->mot_pass = $mot_pass;
        $this->role = $role;
    }

    public function validateMember() {
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL) && !empty($this->nom) && !empty($this->mot_pass && !empty($this->role))) {
            return true; 
        } 
        return false;
    }

    public function insertMember(){
        $nom_table = "members";
        $req = "INSERT INTO $nom_table (nom , email , mot_pass, role) VALUES (:name, :email, :mot_pass, :role)";

        $db = new Database();
        $conn = $db->connect();

        $requete = $conn->prepare($req);
        $requete->bindParam(':name', $this->nom);
        $requete->bindParam(':email', $this->email);
        $requete->bindParam(':mot_pass', $this->mot_pass);
        $requete->bindParam(':role', $this->role);
         return $requete->execute();
    }

}


?>