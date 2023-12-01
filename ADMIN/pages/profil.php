<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Avito</title>
    <link rel="stylesheet" href="../../CLIENT/pages/style.css">
</head>

<body>

    <?php 
    require_once 'navbarA.php';
    ?>
    <div class="profil">
        <h1>Bonjour <?php echo $_SESSION['nom_utilisateur']; ?></h1>
        <div class="container-profil">
            
            <div class="ph_profil">
                <img src="../../CLIENT/include/uploads/utilisateur-anonyme.png" alt="Photo de profil">
            </div>
            <div class="info">
                <div class="e">
                    <h5>Nom d'utilisateur :  <?php echo $_SESSION['nom_utilisateur']; ?></h5>
                    <h5>Numéro de téléphone :  <?php echo $_SESSION['numero_tel']; ?></h5>
                </div>
                
                <div class="ee">
                   <a href="modi_info.php">
                    <button class="btn btn-warning btn-sm">
                        <i class="fas fa-edit"></i> Modifier mon compte   
                    </button>
                </a>
                <form action="../include/delete_me.php" method="get" style="display: inline;">
                    <input type="hidden" name="deleteUser" value="<?php echo $_SESSION['id']; ?>">
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i> Supprimer mon compte
                    </button>
                </form> 
                </div>
                
                        
            </div>
        </div>
    </div>
    
<!--  -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>