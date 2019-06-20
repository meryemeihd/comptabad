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
      
      $Query = "
         SELECT * FROM Utilisateur";
      
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
               
               global $Login;
               
               $Login = $Connexion->sql_query($Query);

               
// REQUETE MODIFIER MOT DE PASSE 
               
               

}
 
 
}
