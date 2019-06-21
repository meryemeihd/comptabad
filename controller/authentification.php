<?php

class authentification {
    
    //fonction verification
    public static function verification(){
        
        //
       if (isset($_POST["login"])&&isset($_POST["mdp"]))
       {
        
            global $Connexion;
            global $Utilisateur;

            //requete
            $Query="SELECT * FROM Utilisateur WHERE Login = '".$_POST["login"]."' AND Motdepasse = '".$_POST["mdp"]."'" ;
            //effectue la requete
            
            $Result = $Connexion->sql_query($Query);
   
            if ($Ligne = $Connexion->sql_fetch_object($Result,'MyORM\Utilisateur'))
            {
                //création de la session utilisateur 
                    $_SESSION["utilisateur"] = $Ligne;
                    $_SESSION["ID_Utilisateur"] = $Ligne->ID_Utilisateur;
                 

            }
       }
    }
    
    //fonction deconnexion
    public static function deconnexion() {
        
        //suppression de l'authentification
        //permet la déconnexion
       unset($_SESSION['utilisateur']);
        unset($_SESSION['ID_Utilisateur']);
      
    }
}
        

