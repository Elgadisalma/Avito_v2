<?php
require_once 'config.php';
session_start();

$nom_utilisateur = $_POST['userName'];
$password = $_POST['password'];

$sql_check_user = "SELECT id, nom_utilisateur, role, password , photo, numero_tel FROM utilisateur WHERE nom_utilisateur = '$nom_utilisateur' ";
$result_check_user = $link->query($sql_check_user);

if (!$result_check_user) { 
    die("Erreur dans la requête : " . $link->error);
}

if ($result_check_user->num_rows > 0) {
    $user = $result_check_user->fetch_assoc();

    // Vérifier le mot de passe haché
    if (password_verify($password, $user['password'])) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['nom_utilisateur'] = $user['nom_utilisateur'];
        $_SESSION['numero_tel'] = $user['numero_tel'];
        $_SESSION['role'] = $user['role'];
        $_SESSION['photo'] = $user['photo'];

        // var_dump($user);

        if ($user['role'] == 'admin') {
            header("Location: ../../ADMIN/pages/indexA.php");
        } else {
            header("Location: ../pages/index.php");

            exit();
        }
        
    } else {
        header("Location: ../pages/connexion.php?STATUS=probleme de connexion");
        exit();
    }
} else {
    header("Location: ../pages/connexion.php?STATUS=probleme de connexion");
    exit();
}

// Fermer la connexion
$link->close();
?>
