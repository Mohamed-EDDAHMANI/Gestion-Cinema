<?php 

require_once '../../config/database.php';
require_once '../classes/Client.php';

// Create a new Administrateur instance
$client = new Client('admin_name', 'admin@example.com', 'admin_password', 'client');

//testing get the list of films
echo 'list of films </br>';
$db = new Database();
$conn = $db->connect();
$films = $client->seeListOfFilms($conn);
print_r($films );
echo '</br> </br>';


//testing reservation 

// $client->reserveTicket($conn, 3);






?>