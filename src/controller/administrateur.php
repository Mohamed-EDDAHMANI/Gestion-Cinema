<?php
require_once '../../config/database.php';
require_once '../classes/Film.php';
require_once '../classes/Administrateur.php';


// Create a new Administrateur instance
$admin = new Administrateur('admin_name', 'admin@example.com', 'admin_password', 'admin');


// Create a new film instance
$film = new Film('hinokio', 'drama',1.5 , 2025/01/01, 'yamamoto oda', 1);


// Test validateFilm method
echo "Testing validateFilm method: </br>";
$validationResponse = $admin->validateFilm($film->getTitle(), $film->getGenre(), $film->getDuration(), $film->getDate_realiser(), $film->getDirecteur());
echo 'film validation '. $validationResponse . '</br> </br>' ;

// Test createFilm method
echo "Testing createFilm method: </br>";
if($validationResponse){
    $admin->createFilm($film->getTitle(), $film->getGenre(), $film->getDuration(), $film->getDate_realiser(), $film->getDirecteur(), $film->getProjection_id());
    echo 'validation and insert seccess +++++++</br> </br>';
}

// Test readFilm method
echo "Testing readFilm method: </br>";
$films = $admin->readFilm();
print_r($films);
echo '</br> </br>';

// Test updateFilm method
echo "Testing updateFilm method: </br>";
$newDetails = array(
    'title' => 'Updated Film',
    'genre' => 'Drama',
    'duration' => 130,
    'date_realiser' => '2026/01/08',
    'director' => 'Updated Director',
    'projection_id' => 3
);
print_r($newDetails);
echo 'update : ' . $admin->updateFilm($films['id'], $newDetails) . '</br> </br>';

// Test deleteFilm method
echo "Testing deleteFilm method: </br>";
echo $admin->deleteFilm($films['id']);
?>
