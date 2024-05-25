<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin_car";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Supprimer la voiture de la base de données
    $sql = "DELETE FROM carctere WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: affichage.php?message=Voiture supprimée avec succès.");
        exit();
    } else {
        echo "Erreur lors de la suppression de la voiture : " . $conn->error;
    }
} else {
    echo "ID de voiture manquant.";
}

$conn->close();
?>

