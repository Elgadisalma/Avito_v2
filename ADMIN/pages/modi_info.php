<?php
session_start();
?>

<!DOCTYPE html>
<html>
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
                <img src="../include/uploads/<?php echo $_SESSION['photo']; ?>" alt="Photo de profil">
            </div>

            <div class="info">
            <form  action="../include/edit_me.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                <div class="col-md-10">
                    <label for="validationCustom02" class="form-label">*Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="validationCustom02" name="nom_utilisateur" value="<?php echo $_SESSION['nom_utilisateur']; ?>" required>
                </div>
<br>
                <div class="col-md-10">
                    <label for="validationCustom01" class="form-label">*Numero de telephone </label>
                    <input type="text" class="form-control" id="validationCustom01" name="numero_tel" value="<?php echo $_SESSION['numero_tel']; ?>" required>
                </div>
<br>
                <div class="col-md-10">
                    <button class="btn btn-primary " type="submit" name="submit">Enregistrer les modifications</button>
                </div>
                
            </form>
            </div>
        

        
                        
            </div>
        </div>
    </div>
    
<!--  -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>