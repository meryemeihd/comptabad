<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class utilisateur
{
 public static function personne () {
       
  
  global $Connexion;
      
  
     

           $Query="SELECT * FROM Utilisateur WHERE ID_Utilisateur=  ".$_SESSION["ID_Utilisateur"]  ;
      
      global $ResultatUtilisateur;
      
      $ResultatUtilisateur = $Connexion->sql_query($Query);
      
      global $Utilisateur;
        $Utilisateur = new MyORM\Utilisateur($_GET["param"][0] ?? null);
      }
     
     
 
 

public static function save()
{	
     
	$Utilisateur = new MyORM\Utilisateur($_POST["ID_Utilisateur"] ?? null);;
        
   
        
//REQUETE MODIFIER LOGIN, FONCTION, MAIL 
                 global $Connexion;
                 
                 $pseudo2=$_POST['pseudo2'];
                 $fonction2=$_POST['fonction2'];
                 $mail2=$_POST['mail2'];
        
               $Query = "UPDATE Utilisateur SET Login = '$pseudo2', Fonction= '$fonction2', Mail='$mail2' ";
               
               global $Change;
               
               $Change= $Connexion->sql_query($Query);
              
               $mdpNouveau=$_POST['mdpNv'];
               $mdpNouveau2=$_POST['mdp2']; 
               
                  $Query="SELECT Motdepasse FROM Utilisateur WHERE ID_Utilisateur=  ".$_SESSION["ID_Utilisateur"];
                   global $Mdp;
                   $Mdp = $Connexion->sql_query($Query);
      
                   
        if (isset($_POST["mdpNv"])&&!empty($_POST["mdpNv"]))
        {
          
               $mdpNouveau=$_POST['mdpNv'];
               $mdpNouveau2=$_POST['mdp2']; 
               
                if($mdpNouveau != $mdpNouveau2){
                     echo $msg = "Les nouveaux mots de passe ne sont pas similaires.";
               }
               else {
                 global $Connexion;
                  $Query = "UPDATE Utilisateur SET Motdepasse ='$mdpNouveau2' WHERE ID_Utilisateur=  ".$_SESSION["ID_Utilisateur"];
                  global $Changer;
                 $Changer = $Connexion->sql_query($Query);
                   echo "Modification réussite";
               }
      }
               
               
          

}

                                          
}
 
 

