<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class journal
{
 public static function regarder () {
            
      global $Connexion;
      
      $Query = "
         SELECT modepayement.Libelle, piece.DescriptionPiece, piece.NumeroPiece, ecriture.Montant, ecriture.Date,ecriture.DateRapprochement, facture.Commentaire AS CommentaireFacture, payement.Commentaire AS CommentairePayement, facture.NumeroFacture, payement.Numero AS NumeroPayement, compte.LibelleGenerique, entite.Nom, entite.Prenom
          FROM piece 
         INNER JOIN ecriture
         ON ecriture.ID_Piece = piece.ID_Piece 
         LEFT JOIN entite
         on entite.ID_Entite = piece.ID_Entite
         Left JOIN compte
         ON compte.ID_Compte = ecriture.ID_Compte
         LEFT JOIN facture 
         ON piece.ID_Facture = facture.ID_Facture 
        LEFT JOIN payement
        ON piece.ID_Payement = payement.ID_Payement 
        LEFT JOIN modepayement 
        ON payement.ID_ModePayement= modepayement.ID_ModePayement";
      
      global $Resultat;
      
      $Resultat = $Connexion->sql_query($Query);
        
        
  

      
     
 }
public static function recette () {
    
      global $Connexion;
          $Query = "
         SELECT modepayement.Libelle, piece.DescriptionPiece, piece.NumeroPiece, ecriture.Montant, ecriture.Date,ecriture.DateRapprochement, payement.Commentaire AS CommentairePayement, payement.Numero AS NumeroPayement, compte.LibelleGenerique, entite.Nom, entite.Prenom
          FROM piece 
         INNER JOIN ecriture
         ON ecriture.ID_Piece = piece.ID_Piece 
         LEFT JOIN entite
         on entite.ID_Entite = piece.ID_Entite
         Left JOIN compte
         ON compte.ID_Compte = ecriture.ID_Compte
        LEFT JOIN payement
        ON piece.ID_Payement = payement.ID_Payement 
        LEFT JOIN modepayement 
        ON payement.ID_ModePayement= modepayement.ID_ModePayement";
      
      global $Resultat;
      
      $Resultat = $Connexion->sql_query($Query);
}

public static function depense () {
    
        global $Connexion;
      
      $Query = "
         SELECT modepayement.Libelle, piece.DescriptionPiece, piece.NumeroPiece, ecriture.Montant, ecriture.Date,ecriture.DateRapprochement, facture.Commentaire AS CommentaireFacture, facture.NumeroFacture, compte.LibelleGenerique, entite.Nom, entite.Prenom
          FROM piece 
         INNER JOIN ecriture
         ON ecriture.ID_Piece = piece.ID_Piece 
         LEFT JOIN entite
         on entite.ID_Entite = piece.ID_Entite
         Left JOIN compte
         ON compte.ID_Compte = ecriture.ID_Compte
         LEFT JOIN facture 
         ON piece.ID_Facture = facture.ID_Facture 
        LEFT JOIN payement
        ON piece.ID_Payement = payement.ID_Payement 
        LEFT JOIN modepayement 
        ON payement.ID_ModePayement= modepayement.ID_ModePayement";
      
      global $Resultat;
      
      $Resultat = $Connexion->sql_query($Query);
    
}







//}
}
