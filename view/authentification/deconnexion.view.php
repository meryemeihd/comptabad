<?php

//détruit la session 
    unset($_SESSION['utilisateur']);
    
//bouton déconnexion pour effectuer l'action
 
//va nous rediger vers la page d'authentification 
    $location = "http://".$_SERVER["HTTP_HOST"]."/authentification/verification";
    echo '<SCRIPT LANGUAGE="JavaScript">
    document.location.href="'.$location.'"
    </SCRIPT>';
    

    
?>
            
