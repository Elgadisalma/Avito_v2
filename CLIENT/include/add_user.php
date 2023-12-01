<?php
require_once 'config.php';
session_start();
$nom_err = '';

$nom_utilisateur = $_POST['userName'];
$numero_tel = $_POST['numero_tel'];
$password = $_POST['password'];
$photo = $_FILES['photo']['name'];

$sql_check_user = "SELECT id FROM utilisateur WHERE nom_utilisateur = '$nom_utilisateur'";
$result_check_user = $link->query($sql_check_user);

if ($result_check_user->num_rows > 0) {
    $nom_err = 'Nom d\'utilisateur déjà existant.';
    $_SESSION['nom_err'] = $nom_err;
    header("location:../pages/inscription.php?STATUS=Nom d'utilisateur déjà existant");
    exit();
} else {
    // Hacher le mot de passe
    $motDePasseHache = password_hash($password, PASSWORD_DEFAULT);

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Define the target directory for uploads
        $targetDir = "./uploads/";

        // Create the target directory if it doesn't exist
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        // Get the uploaded file's name and temporary name
        $photo = basename($_FILES["photo"]["name"]);
        $tmpName = $_FILES["photo"]["tmp_name"];

        // Set the target path
        $targetPath = $targetDir . $photo;

        // Check if the file is an image
        $imageFileType = strtolower(pathinfo($targetPath, PATHINFO_EXTENSION));
        $allowedExtensions = array("jpg", "jpeg", "png", "gif");

        if (in_array($imageFileType, $allowedExtensions)) {
            // Move the file to the target directory
            if (move_uploaded_file($tmpName, $targetPath)) {
                echo "The file " . $photo . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        } else {
            echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    }

    $sql_insert = "INSERT INTO utilisateur (nom_utilisateur, numero_tel , password, photo) 
                    VALUES ('$nom_utilisateur', '$numero_tel','$motDePasseHache','$photo')";
    if ($link->query($sql_insert) === TRUE) {
        header("location:../pages/connexion.php?profil=added_successfully");
        exit();
    } else {
        echo "Erreur: " . $link->error;
    }
}
       
