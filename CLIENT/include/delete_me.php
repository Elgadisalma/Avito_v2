<?php
session_start();

if (isset($_GET['deleteUser'])) {
    require_once 'config.php';

    $userId = $_SESSION['id'];

    // Supprimer l'utilisateur de la base de données
    $sql_delete_user = "DELETE FROM utilisateur WHERE id = '$userId'";
    if ($link->query($sql_delete_user) === TRUE) {
        session_destroy();
        header("location: ../pages/connexion.php?profil=deleted_successfully");
        exit();
    } else {
        echo "Erreur lors de la suppression de l'utilisateur: " . $link->error;
    }

    // Fermer la connexion
    $link->close();
} else {
    // Rediriger vers la page de profil si la requête n'est pas valide
    header("location: ../pages/profil.php");
    exit();
}
?>

