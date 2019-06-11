
<!--Fin du header -->
 

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
?>
   <!--
        
   <form action='/authentification/verification' method=post>
             <center><input type='text' id='loginUser' size=32 class='form-control loginconnect' placeholder='Pseudo' name='login' required></center>
            <center><input type='password' id='passwordUser' size='32' class='form-control passwordconnect' placeholder='******' name='mdp' required></center>
            <center><button type='submit' class='btn btn-primary connectbt'><i class='fa fa-connectdevelop fa-lg'  aria-hidden='true'></i>Se connecter </button></center>
        </form>  
   -->
    
    <form action='/authentification/verification' method=post>
            <div id='wrapper'> 
                <div id="box">
                    <div class="header">
                    <h4> Connexion </h4>
                  </div>
                <h6> UTILISATEUR </h6>
                <input type="text"  placeholder="insérer votre identifiant" name="login">
                <h6> MOT DE PASSE </h6>
                <input type="password" placeholder="******" name="mdp">
                <input type='submit'>
            </div>
            </div>
    </form>
    </body>
</html>



            
