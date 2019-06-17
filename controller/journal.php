<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class journal
{
 public static function regarder () {
       
     /*
        global $Journal;
        $Journal = new MyORM\Journal($_GET["param"][0] ?? null);
         global $Facture;
        $Facture = new MyORM\Facture;
       
        global $Piece;
         $Piece = new MyORM\Piece ;
   
         global $Payement;
        $Payement = new MyORM\Payement;
        
        global $Ecriture;
        $Ecriture = new MyORM\Ecriture ;
      * *
      */
     
      global $Connexion;
      
      $Query = "
          SELECT modepayement.Libelle, piece.DescriptionPiece, piece.NumeroPiece, ecriture.Montant, ecriture.Date, facture.Commentaire AS CommentaireFacture, payement.Commentaire AS CommentairePayement, facture.NumeroFacture, payement.Numero AS NumeroPayement
          FROM piece 
         INNER JOIN ecriture
         ON ecriture.ID_Piece = piece.ID_Piece 
         LEFT JOIN facture 
         ON piece.ID_Facture = facture.ID_Facture 
        LEFT JOIN payement
        ON piece.ID_Payement = payement.ID_Payement 
        LEFT JOIN modepayement 
        ON payement.ID_ModePayement= modepayement.ID_ModePayement";
      
      global $Resultat;
      
      $Resultat = $Connexion->sql_query($Query);
        
        
  

      
     
 }
// public static function afficher() {
     

      
    
 
 //}
}
