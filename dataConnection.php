<?php
// Éléments pour créer la connection entre le site web et la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestionnaire_eco_reponsable";

// Connection à la base de données
$connect = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connection
if ($connect->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
echo "Connexion réussie";
?>