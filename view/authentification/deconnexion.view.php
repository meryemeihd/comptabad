<?php

//détruit la session 
    unset($_SESSION['utilisateur']);
    
//bouton déconnexion pour effectuer l'action
    echo "<center><button type=submit class=btn btn-primary connectbt><i class=fa fa-connectdevelop fa-lg  aria-hidden=true></i>Se déconnecter</button></center>";
    
//va nous rediger vers la page d'authentification 
    $location = "http://".$_SERVER["HTTP_HOST"]."/authentification/verification";
    echo '<SCRIPT LANGUAGE="JavaScript">
    document.location.href="'.$location.'"
    </SCRIPT>';
    
?>
            
