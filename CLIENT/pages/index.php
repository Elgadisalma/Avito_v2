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
</head>

<body>

    <?php 
        if(isset($_SESSION['id'])){
    
    require_once 'navbar.php';
    ?>
    <div class="container mt-5">
    <h1>Bonjour <?php echo $_SESSION['nom_utilisateur']; ?></h1>
    </div>
    <?php }else{ 
        require_once 'navbar2.php';

   } ?>
<div class="container mt-5">
    
    <h2>Liste d'annonce</h2>
    
    <br>
    
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Vendeur</th>
                <th>Numero de telephone</th>
                <th>Titre du produit</th>
                <th>État</th>
                <th>Description du produit</th>
                
            </tr>
        </thead>
        
        <tbody id="taskTableBody">
        <?php
            include_once '../../ADMIN/include/afficher_ann_A.php';
            $annonces_approuve = get_annonces_par_statut($link, 'approuve');
            foreach ($annonces_approuve as $annonce) {
        ?>
            <tr>
                <td><?php echo $annonce['nom_utilisateur'] ;?></td>
                <td><?php echo $annonce['numero_tel'] ;?> </td>
                <td><?php echo $annonce['titre_annonce'] ;?> </td>
                <td><?php echo $annonce['etat_annonce'] ;?> </td>
                <td><?php echo $annonce['description_annonce'] ;?> </td>
                
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<!--  -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>