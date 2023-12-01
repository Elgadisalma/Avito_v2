<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("location: ../pages/connexion.php");
    exit();
}

require_once 'config.php';

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nom_utilisateur = $_POST['nom_utilisateur'];
    $numero_tel = $_POST['numero_tel'];

    //verifie tswira
    if(isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $photo = $_FILES['photo']['name'];

        $targetDir = "./uploads/";

        $targetPath = $targetDir . $photo;

        $imageFileType = strtolower(pathinfo($targetPath, PATHINFO_EXTENSION));
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        if (in_array($imageFileType, $allowedExtensions)) {
            if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetPath)) {
                echo "The file has been uploaded.";
            } else {
                echo "Sorry, there was an error ";
            }
        } else {
            echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    } else {
        $photo = $_SESSION['photo'];
    }

    $sql = "UPDATE utilisateur SET nom_utilisateur = ?, numero_tel = ?, photo = ? WHERE id = ?";
    $stmt = $link->prepare($sql);

    $stmt->bind_param("sssi", $nom_utilisateur, $numero_tel, $photo, $id);

    $res = $stmt->execute();
    // var_dump($res);

    if ($res) {
        $_SESSION['nom_utilisateur'] = $nom_utilisateur;
        $_SESSION['numero_tel'] = $numero_tel;
        $_SESSION['photo'] = $photo;

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

