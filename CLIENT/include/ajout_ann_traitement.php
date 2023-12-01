<?php

require_once 'config.php';
session_start();

if (!isset($_SESSION['id'])) {
    header("location: ../pages/connexion.php");
    exit();
}



if (isset($_POST['submit'])) {
    $nom_utilisateur = $_SESSION['nom_utilisateur'];
    $numero_tel = $_POST['phoneNumber'];
    $titre_annonce = $_POST['annoceTitre'];
    $description_annonce = $_POST['annoceDescription'];
    $date_ajout = $_POST['dateAjout'];

    $sql_insert = "INSERT INTO annonce (nom_utilisateur, numero_tel, titre_annonce, description_annonce, date_ajout) 
                   VALUES ('$nom_utilisateur', '$numero_tel', '$titre_annonce', '$description_annonce', '$date_ajout')";


    if ($link->query($sql_insert) === TRUE) {
        header("location:../pages/index.php?task=added_successfully");
        exit();
    } else {
        echo "Erreur: " . $link->error;
    }
}

    $link->close();

?>