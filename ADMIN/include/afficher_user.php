<?php
    require_once 'config.php';

        function get_user($link, $role) {
            
            $utilisateur = [];
            $sql = "SELECT * FROM utilisateur WHERE role='$role';";

            $result = $link->query($sql);
        $result = $link->query($sql);
        if(mysqli_num_rows($result) > 0){
            while ($row = $result->fetch_assoc()) {
                $utilisateur[] = $row;
            }
        }else {
            echo "Aucun utilisateur trouvée.";
        }
        mysqli_free_result($result);
        mysqli_close($link);

    
    return $utilisateur;

}
