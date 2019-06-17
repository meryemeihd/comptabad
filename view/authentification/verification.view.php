
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
?>


    
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



            
