<?php
// Inclure le fichier de configuration de la base de données
include ("modele/config.php");

// Sélectionner tous les utilisateurs
$sql = "SELECT * FROM utilisateur";
$result = $connexion->query($sql);

 if ($result->num_rows > 0) {
    // Afficher les données de chaque utilisateur
    echo "<h2>Liste des utilisateurs :</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Nom</th><th>Email</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["Id_user"] . "</td>";
        echo "<td>" . $row["nom_user"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Aucun utilisateur trouvé.";
}

// Code de test d'ajout d'un utilisateur
/* Inclure la classe Utilisateur
require_once ("modele/user_class.php");

// Créer une instance de la classe Database pour la connexion à la base de données
$database = new Database('localhost', 'root', '', 'cinematheque');

// Créer une instance de la classe Utilisateur
$utilisateur = new Utilisateur('elion', 'elion2@gmail.com', '1234', $database);

// Ajouter un nouvel utilisateur
if ($utilisateur->enregistrerUtilisateur()) {
    echo "Utilisateur enregistré avec succès.";
} else {
    echo "Erreur lors de l'enregistrement de l'utilisateur.";
}

// Vérifier l'existence d'un utilisateur
if ($utilisateur->utilisateurExiste()) {
    echo "L'utilisateur existe déjà.";
} else {
    echo "L'utilisateur n'existe pas encore.";
}*/

?>