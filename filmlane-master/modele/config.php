<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cinematheque";

// Connexion à la base de données
$connexion = new mysqli($servername, $username, $password, $database);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
} else {
    echo "La connexion à la base de données a réussi !";
}

// Fermeture de la connexion
//$connexion->close();

?>