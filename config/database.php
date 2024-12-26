<?php


class Database{

    private $host = 'localhost';
    private $db = 'cinema';
    private $user = 'root';
    private $password = '';
    private $port = 3306;
    

    public function connect() {
		// Set DSN
		$dsn = "mysql:host=$this->host;dbname=$this->db";
		try {
            // PHP Data Objects (PDO)
			$pdo = new PDO ($dsn, $this->user, $this->password);
            // echo 'succecce';
            return $pdo;
            
		}		// Catch any errors
		catch ( PDOException $e ) {
			$this->error = $e->getMessage();
		}
	}

}
