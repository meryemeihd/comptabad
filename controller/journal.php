<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class journal
{
 public static function regarder () {
       
        global $Journal;
        $Journal = new MyORM\Journal($_GET["param"][0] ?? null);
         global $Facture;
        $Facture = new MyORM\Facture($_GET["param"][0] ?? null);
        
        
        
  
  /*    
     //   global $Payement;
     //$Payement = new MyORM\Payement($_GET["param"][0] ?? null);
        
                
         global $Piece;
        $Piece= new MyORM\Piece($_GET["param"][0]??null);
 
         global $Ecriture;
        $Ecriture= new MyORM\Ecriture($_GET["param"][0]??null);
   */
      
     
 }
 public static function afficher() {
     
      $Piece = new MyORM\Piece($_POST["ID_Piece"]) ;
        $Facture = new MyORM\Facture($_POST["ID_Facture"]) ;
        $Piece = new MyORM\Piece($_POST["ID_Piece"]) ;
        $Ecriture = new MyORM\Ecriture($_POST["ID_Ecriture"]) ;
     
      global $Connexion;
      $Query = "SELECT Payement.Date, Facture.Date, Payement.Numero, Facture.NumeroFacture, Payement.JustificatifPayement,"
              . "Facture.DesignationFacture, "
              . "Facture.Commentaire, Payement.Commentaire, Payement.Montant, Facture.PrixTTC, ModePayement.Libelle,Piece.NumeroPiece,Piece.DescriptionPiece,Ecriture.Montant, Ecriture.Date"
              . "FROM Facture"
              . "INNER JOIN ModePayement"
              . "ON Facture.ID_ModePayement = ModePayement.ID_ModePayement"
              . "INNER JOIN Payement"
              . "ON Payement.ID_ModePayement = ModePayement.ID_ModePayement"
              . "INNER JOIN Piece "
              . "ON Piece.ID_Facture = Facture.ID_Facture"
              . "INNER JOIN Ecriture"
              . "ON Piece.ID_Piece=Ecriture.ID_Piece ";
      
      $Affichage = $Connexion->sql_query($Query);
      
      //#Test
      //SELECT `Ecriture`.`Date`, `Ecriture`.`Montant`, `Piece`.`NumeroPiece`,`Piece`.`DescriptionPiece` ,`Facture`.`Commentaire`, `Payement`.`Commentaire`, `ModePayement`.`Libelle` FROM `Ecriture` LEFT JOIN `Piece` ON `Ecriture`.`ID_Piece` = `Piece`.`ID_Piece` LEFT JOIN `Facture` ON `Piece`.`ID_Facture` = `Facture`.`ID_Facture` LEFT JOIN `Payement` ON `Piece`.`ID_Payement` = `Payement`.`ID_Payement` LEFT JOIN `ModePayement` ON `Facture`.`ID_ModePayement` = `ModePayement`.`ID_ModePayement`
      
 
 }
}
