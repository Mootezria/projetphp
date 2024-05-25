<?php
// add_car.php

$servername = "localhost"; // Modifier si nécessaire
$username = "root"; // Modifier si nécessaire
$password = ""; // Modifier si nécessaire
$dbname = "admin_car"; // Modifier si nécessaire

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}else{
    echo "success";

}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $anee = $_POST['annee'];
    $matricule = $_POST['matricule'];

    $sql = "INSERT INTO carctere (marque, modele, anee, matricule) VALUES ('$marque', '$modele', '$anee', '$matricule')";

    if ($conn->query($sql) === TRUE) {
        echo "Nouvelle voiture ajoutée avec succès";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

