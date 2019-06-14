<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class modepayement {
    
    public  static function MP() {
    global $ModePayement;
      $ModePayement = new MyORM\ModePayement($_GET["param"][0] ?? null);
        global $Facture;
        $Facture = new MyORM\Facture($_GET["param"][0] ?? null);
    }
    
    public static function save() {
        
        
        $ModePayement = new MyORM\ModePayement($_POST["ID_ModePayement"]) ;
        $Facture = new MyORM\Facture($_POST["ID_Facture"]) ;

          $Facture->ID_ModePayement=$_POST["ID_ModePayement"] ;
    }
}
