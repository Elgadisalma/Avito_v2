<?php
require_once 'config.php';

if (isset($_GET['id'])) {
    $utilisateur_id = $_GET['id'];

    $sql = "DELETE FROM utilisateur WHERE id = ?";
    $stmt = $link->prepare($sql);

    $stmt->bind_param("i", $utilisateur_id); 

    if ($stmt->execute()) {
        header("location: ../pages/utilisateur.php?STATUS=utilisateur suprime avec succes");
    } else {
        echo "Erreur lors de la suppression de l'utilisateur : " . $stmt->error;
    }

    $stmt->close();
} 

?>
