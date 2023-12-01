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

// $requete_modification_table_annonce = "
// ALTER TABLE annonce
// ADD COLUMN statut ENUM('Approuve', 'refuse') NOT NULL DEFAULT 'refuse'
// ";


// if (mysqli_query($link, $requete_modification_table_annonce)) {
//     echo "La colonne 'statut' a été ajoutée avec succès à la table 'annonce'.";
// } else {
//     echo "Erreur lors de l'exécution de la requête : " . mysqli_error($link);
// }


// $motDePasseHache = password_hash('1234', PASSWORD_DEFAULT);
// $requete_ajout_utilisateur = "
//     INSERT INTO utilisateur (nom_utilisateur, numero_tel, password, role)
//     VALUES ('ELGADI', '123456789', '$motDePasseHache', 'admin')
// ";

// // Exécution de la requête
// if (mysqli_query($link, $requete_ajout_utilisateur)) {
//     echo "Utilisateur ajouté avec succès.";
// } else {
//     echo "Erreur lors de l'ajout de l'utilisateur : " . mysqli_error($link);
// }

?>