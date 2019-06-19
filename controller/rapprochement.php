<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class rapprochement
{
 public static function observer () {
       
         
      global $Connexion;
      
 
      $Query = "
          SELECT modepayement.Libelle, piece.DescriptionPiece, piece.NumeroPiece, ecriture.Montant, ecriture.Date,ecriture.DateRapprochement, facture.Donneur, payement.Reçu, facture.Commentaire AS CommentaireFacture, payement.Commentaire AS CommentairePayement, facture.NumeroFacture, payement.Numero AS NumeroPayement, compte.LibelleGenerique
          FROM piece 
         INNER JOIN ecriture
         ON ecriture.ID_Piece = piece.ID_Piece 
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
        
      
      global $Resultat;
      
      $Resultat = $Connexion->sql_query($Query);
 }
}

