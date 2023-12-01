<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>S'inscrire à Avito </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="login_container">
        <?php
         require_once 'navbar2.php';
        ?>
        <div class="container">
    <h1>Bienvenue à Avito</h1>
    <h6>Inscrivez-vous pour profiter d'offres exclusives</h6>
    <form action="../include/Add_user.php" method="post" enctype="multipart/form-data">

      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">+</span>
        <input type="text" class="form-control" placeholder="Nom d'utilisateur" aria-describedby="addon-wrapping" name='userName'>
        <span class="text-danger"><?php if(isset($_GET['STATUS']))echo $_GET['STATUS'] ?></span>
    </div>
    <br>
      

      <div class="input-group flex-nowrap">
        <span class="input-group-text" id="addon-wrapping">+</span>
        <input type="text" class="form-control" placeholder="Numéro de télephone" aria-describedby="addon-wrapping" name='numero_tel'>
    </div>
    <br>

    <div class="input-group flex-nowrap">
      <span class="input-group-text" id="addon-wrapping">+</span>
      <input type="password" class="form-control" placeholder="Mot de passe" aria-describedby="addon-wrapping" name='password'>
  </div>

  <div class="flex flex-col justify-center items-center">
    <!-- <img src="pictures/add.png" alt="add image" width="70" height="70" class="cursor-pointer" id="add">
    <img src="pictures/done.png" alt="image added" width="70" height="70" class="cursor-pointer hidden" id="done"> -->
    <input type="file" id="photo"  placeholder="Photo de profil"  class="input-group-text" name='photo'>
</div>
  <br>
  <!-- <div class="botonaaata"> -->
  <div class="d-grid gap-2">
    <button type="submit" class="btn btn-danger">S'inscrire</button>
  </div>
</div>
  
    </form>
    
  </div>
</div>
</body>

</html>