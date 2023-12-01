<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>Avito</title>
</head>
<body>
    <?php
    require_once 'navbarA.php';
    ?>
    <div class="container mt-5">
    
    <h2>Utilisateurs Avito</h2>
    
    <br>
    
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Photo de profil</th>
                <th>Nom d'utilisateur</th>
                <th>Numero de telephone</th>
                <th>Actions</th>
            </tr>
        </thead>
        
        <tbody id="taskTableBody">
        <?php
            include_once '../include/afficher_user.php';
            $utilisateurs = get_user($link, 'client');
            foreach ($utilisateurs as $utilisateur) {
        ?>
            <tr>
                <td><img src="../../CLIENT/include/uploads/<?php echo $utilisateur['photo']; ?>" alt="Photo de profil" width="100px"></td>
                <td><?php echo $utilisateur['nom_utilisateur']; ?></td>
                <td><?php echo $utilisateur['numero_tel']; ?> </td>
                <td><form action="../include/delete_user.php" method="get" style="display: inline;">
                    <input type="hidden" name="id" value="<?php echo $utilisateur['id']; ?>">
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i> Supprimer
                    </button>
                </form>
            </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<!--  -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
