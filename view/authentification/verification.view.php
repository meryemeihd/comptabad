<?php

//si on est authentifié 
if (isset($_SESSION["utilisateur"]))
{
       //redirection vers accueil/wellcome, bien entendu ca doit exister dans les controlleurs et les vues.
       $location = "http://".$_SERVER["HTTP_HOST"]."/accueil/welcome";
       echo '<SCRIPT LANGUAGE="JavaScript">
       document.location.href="'.$location.'"
       </SCRIPT>';

}

//si on est pas authentifé formulaire de connexion
else 
{
    //formulaire de connexion 
    echo "<form action='/authentification/verification' method=post>
             <center><input type=text id=loginUser size=32 class=form-control loginconnect placeholder=Pseudo name=login required></center>
            <center><input type=password id=passwordUser size=32 class=form-control passwordconnect placeholder=****** name=mdp required></center>
            <center><button type=submit class=btn btn-primary connectbt><i class=fa fa-connectdevelop fa-lg  aria-hidden=true></i>Se connecter </button></center>
        </form>  ";
    
    
            
}



?>
            
