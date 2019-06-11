<?php
class facture {
    

 public static function nouvelle () {
       
       global $Facture;
        $Facture = new MyORM\Facture($_GET["param"][0] ?? null);
       // global $ModePayement;
       // $ModePayement= new MyORM\ModePayement($_GET["param"][0]??null);
        //global $Cheque;
        //$Cheque= new MyORM\Cheque($_GET["param"][0]??null);
 }
 
 public static function save() {
     
             $Facture = new MyORM\Facture($_POST["ID_Facture"]) ;
             $Facture->NumeroFacture=$_POST['NumeroFacture'];
             $Facture ->Date=$_POST['Date'];
             $Facture->DesignationFacture=$_POST['DesignationFacture'];
             $Facture->PrixTTC=$_POST['PrixTTC'];
             $Facture->Donneur=$_POST['Donneur'];
             $Facture->Commentaire=$_POST['Commentaire'];
           //  $ModePayement->Libelle=$_POST['moyenpayement'];
        //    $Cheque->Numero=$_POST['Cheque'];
             
             
               $Facture->save(); 
            
 }
}