<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','avito');



$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link == false){
    die("Error: " . mysqli_connect_error());
}

$requete_creation_table_annonce = "
    CREATE TABLE IF NOT EXISTS annonce (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom_utilisateur VARCHAR(255) NOT NULL,
        numero_tel VARCHAR(255),
        titre_annonce VARCHAR(255),
        etat_annonce VARCHAR(20) DEFAULT 'à vendre' NOT NULL,
        description_annonce VARCHAR(255),
        date_ajout DATE
    )
    
";

$requete_creation_table_utilisateur = "
    CREATE TABLE IF NOT EXISTS utilisateur (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nom_utilisateur VARCHAR(255) UNIQUE NOT NULL,
        numero_tel VARCHAR(255),
        password VARCHAR(255)
    )
";


// $requete_modification_table_utilisateur = "
// ALTER TABLE utilisateur
// ADD COLUMN role ENUM('admin', 'client') NOT NULL DEFAULT 'client'
// ";


// if (mysqli_query($link, $requete_modification_table_utilisateur)) {
//     echo "La colonne 'role' a été ajoutée avec succès à la table 'utilisateur'.";
// } else {
//     echo "Erreur lors de l'exécution de la requête : " . mysqli_error($link);
// }

// $requete_modification_table_utilisateur = "
// ALTER TABLE utilisateur
// ADD COLUMN photo VARCHAR(255) DEFAULT 'utilsateur-anonyme.png';


// ";

// if (mysqli_query($link, $requete_modification_table_utilisateur)) {
//     echo "La colonne 'photo' a été ajoutée avec succès à la table 'utilisateur'.";
// } else {
//     echo "Erreur lors de l'exécution de la requête : " . mysqli_error($link);
// }
?>