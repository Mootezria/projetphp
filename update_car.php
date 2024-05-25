<?php
// update_car.php

$servername = "localhost"; // Modifier si nécessaire
$username = "root"; // Modifier si nécessaire
$password = ""; // Modifier si nécessaire
$dbname = "admin_car"; // Modifier si nécessaire

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $annee = $_POST['annee'];
    $matricule = $_POST['matricule'];

    // Mettre à jour les informations de la voiture
    $sql = "UPDATE carctere SET marque='$marque', modele='$modele', anee='$annee', matricule='$matricule' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Voiture mise à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour de la voiture : " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat de la Mise à Jour</title>
</head>
<body>
    <h1>Résultat de la Mise à Jour</h1>
    <p><a href="affichage.php">Retour à la liste des voitures</a></p>
</body>
</html>
