<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url("../../pic/c2feMw.jpg");
        }
        header{
            background-color: rgb(0, 0, 0);
            height: 10vh;
            display: flex;
            justify-content: space-around;
        }
        .logo{
            /* border: 1px solid red; */
            padding: 8px;
        }
        .logo img{
            width: 4rem;
        }
        .bouttons{
            padding: 20px;
            display: flex;
            justify-content: flex-end;
            gap: 20px;
        }
    </style>
</head>
<body>
<header>
        <div class="logo">
            <img src="../../pic/22072231_6563382-removebg-preview.png" alt="">
        </div>
        
        <div class="bouttons">
    <a href="inscription.php"><button type="button" class="btn btn-primary">S'inscrire</button></a>

    <a href="index.php"><button type="button" class="btn btn-primary">Home</button></a>
    
    <a href="connexion.php"><button type="button" class="btn btn-primary">Se connecter</button></a>
    
    <a href="ajout_annonce.php"><button type="button" class="btn btn-primary">Ajouter une annonce</button></a>
    
    
        </div>
        
    </header>
</body>
</html>