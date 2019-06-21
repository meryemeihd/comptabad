<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CompteResultat {
    
    public static function afficher() {
        
        global $Connexion;
        $Query= "SELECT ecriture.Montant, compte.LibelleGenerique, piece.ID_Facture as Facture, piece.ID_Payement as Payement FROM ECRITURE INNER JOIN COMPTE ON ecriture.ID_Compte=compte.ID_Compte LEFT JOIN PIECE ON ecriture.ID_Piece= piece.ID_Piece LEFT JOIN facture On piece.ID_Facture = facture.ID_Facture LEFT JOIN payement ON piece.ID_Payement= payement.ID_Payement";
        global $CompteResultat;  
        $CompteResultat = $Connexion->sql_query($Query);
        
    }
}