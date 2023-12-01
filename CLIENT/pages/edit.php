<?php
include_once "../include/config.php";
session_start();

if(!isset($_SESSION['id'])){
    header("location:connexion.php");
}
$id = $_GET['id'];
$sql = "SELECT * FROM annonce WHERE id =$id ;";
$result = $link->query($sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Avito</title>
</head>
<body>
    <?php
require_once 'navbar.php';?>
<div class="container mt-5">
    <form class="row g-3 needs-validation" action="../include/edit_traitement.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <div class="input-group mb-3">
        <input type="text" class="form-control" id="validationCustom01" name="numero_tel" value="<?php echo $row['numero_tel'] ?>" required>
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" id="validationCustom02" name="titre_annonce" value="<?php echo $row['titre_annonce'] ?>" required>
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" id="validationCustom03" name="description_annonce" value="<?php echo $row['description_annonce'] ?>" required>
    </div>

    <div class="input-group mb-3">
        <select class="form-select" id="validationCustom04" name="etat_annonce" required>
            <option <?php echo ($row['etat_annonce'] == 'à vendre') ? 'selected' : ''; ?>>à vendre</option>
            <option <?php echo ($row['etat_annonce'] == 'vendu') ? 'selected' : ''; ?>>vendu</option>
        </select>
    </div>

    <button class="btn btn-outline-secondary" type="submit" name="submit">Enregistrer les modifications</button>
</form>

</div>

</body>
</html>
