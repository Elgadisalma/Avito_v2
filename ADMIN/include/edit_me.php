<?php
session_start();

if (!isset($_SESSION['id'])) {
    // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    header("location: ../pages/connexion.php");
    exit();
}

require_once 'config.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nom_utilisateur = $_POST['nom_utilisateur'];
    $numero_tel = $_POST['numero_tel'];

    $sql = "UPDATE utilisateur SET nom_utilisateur = ?, numero_tel = ? WHERE id = ?";
    $stmt = $link->prepare($sql);

    $stmt->bind_param("ssi", $nom_utilisateur, $numero_tel, $id);

    $res = $stmt->execute();
    var_dump($res);

    if ($res) {
        $_SESSION['nom_utilisateur'] = $nom_utilisateur;
        $_SESSION['numero_tel'] = $numero_tel;

        header("location: ../pages/profil.php?STATUS=informations éditées avec succès");
        exit();
    } else {
        echo "Erreur lors de la mise à jour des informations : " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Formulaire non soumis";
}
?>
