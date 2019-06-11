<?php

class payement
{
 public static function paye () {
     
     global $Payement;
     $Payement = new MyORM\Payement($_GET["param"][0] ?? null);
       $ModePayement = new MyORM\ModePayement($_GET["param"][0] ?? null);
        $Cheque = new MyORM\Cheque($_GET["param"][0] ?? null);
 }
        public static function save() {
     
       $Payement = new MyORM\Payement($_POST["ID_Payement"]) ;
          $ModePayement = new MyORM\ModePayement($_POST["ID_ModePayement"]) ;
       $Payement->JustificatifPayement= $_POST['JustificatifPayement'];
       $Payement->Commentaire=$_POST['Commentaire'];
       $Payement->Date=$_POST['Date'];
       $Payement->Montant=$_POST['Montant'];
     //  $ModePayement->Libelle=$_POST['moyenpayement'];
       //$Cheque->Numero=$_POST['Cheque'];
        
        $Payement->save(); 
        $ModePayement -> save();
        $Cheque ->save();
     
 }
 
}

