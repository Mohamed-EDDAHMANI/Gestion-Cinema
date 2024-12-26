<?php
include '../config/database.php';


class Membre{
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

    public function validate() {
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
        $requete->execute();
    }

}

$membre1 = new Membre('test2','test@example.com','password','client');
echo 'hello';
echo $membre1->validate();
if($membre1->validate()){
    $membre1->insertMember();
    echo'sec';
}






?>