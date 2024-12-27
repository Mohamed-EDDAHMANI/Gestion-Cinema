<?php
require_once '../../config/database.php';
require_once '../classes/Administrateur.php';


// Create a new Administrateur instance
$admin = new Administrateur('admin_name', 'admin@example.com', 'admin_password', 'admin');

// Test validateFilm method
echo "Testing validateFilm method: </br>";
$validationResponse = $admin->validateFilm("New Film", "Action", 120, "Director Name");

// Test createFilm method
echo "Testing createFilm method: </br>";
if($validationResponse){
    $admin->createFilm("New Film", "Action", 120, "Director Name");
    echo 'validation and insert seccess +++++++</br>';
}

// Test readFilm method
echo "Testing readFilm method: </br>";
$films = $admin->readFilm();
print_r($films);

// Test updateFilm method
echo "Testing updateFilm method: </br>";
$newDetails = array(
    'title' => 'Updated Film',
    'genre' => 'Drama',
    'duration' => 130,
    'director' => 'Updated Director'
);
print_r($newDetails);
echo 'update : ' . $admin->updateFilm($films['id'], $newDetails) . '</br>';

// Test deleteFilm method
echo "Testing deleteFilm method: </br>";
echo $admin->deleteFilm($films['id']);
?>
