<?php
require_once 'config.php';

function get_annonces_par_statut($link, $statut) {
    $annonce = [];
    $sql = "SELECT * FROM annonce WHERE statut='$statut';";
    $result = $link->query($sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
                $annonce[] = $row;
            }
        } else {
            echo "Aucune annonce trouvée.";
        }
        mysqli_free_result($result);
    } else {
        echo "Erreur dans la requête : " . mysqli_error($link);
    }

   

    return $annonce;
}

//  mysqli_close($link);  
