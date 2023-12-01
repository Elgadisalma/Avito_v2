<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- <style>
        /* body {
            color: #000; 
            background-image: url("../../pic/network-concept-with-thread.jpg");
        }
        .container {
            margin-top: 100px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .input-group-text {
            background-color: #FF80AB; 
            color: #000; 
        }
        button {
            background-color: #FF80AB; 
            color: #000000;
        }
        
        .form-control {
            width: 200px;
        }
        
        .btn {
            width: 69em; 
        } */
    </style> -->
</head>
<body>
    <div class="login_container">
        <?php
         require_once 'navbar2.php';
        ?>

    <div class="container">
        <h1>Bienvenue à Avito</h1>
        <h5>Connectez-vous pour bénéficier d'offres exclusives</h5>
        <form action="../include/connect_user.php" method="post">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">+</span>
                <input type="text" class="form-control" placeholder="Nom d'utilisateur" aria-describedby="addon-wrapping" name='userName'>
            </div>
            <br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">+</span>
                <input type="password" class="form-control" placeholder="Mot de passe" aria-describedby="addon-wrapping" name='password'>
            </div>
            <br>
            
            <div class="botonaaata">
                <button type="submit" class="btn btn-danger">Connexion</button>
            </div>
        </form>
        <br>
        <div class="botonaaata"></div>
        <a href="inscription.php" ><button class="btn btn-secondary">S'inscrire</button></a></div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
