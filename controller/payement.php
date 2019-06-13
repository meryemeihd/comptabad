<?php

class payement
{
 public static function paye () {
     
     global $Payement;
     $Payement = new MyORM\Payement($_GET["param"][0] ?? null);
     
     global $ModePayement;
     $ModePayement = new MyORM\ModePayement($Payement->ID_ModePayement ?? null);
     
     //$Payement->Parent_ModePayement;
     
     global $Cheque;
        $Cheque = new MyORM\Cheque($_GET["param"][0] ?? null);
              global $Piece;
            $Piece= new MyORM\Piece($_GET["param"][0]??null);
 
     global $Ecriture;
        $Ecriture= new MyORM\Ecriture($_GET["param"][0]??null);
 }
 
 
        public static function save() {
     
        $Payement = new MyORM\Payement($_POST["ID_Payement"]) ;
        $ModePayement = new MyORM\ModePayement($_POST["ID_ModePayement"]) ;
        $Cheque =new MyORM\Cheque($_POST["ID_Cheque"]);
        $Piece =new MyORM\Piece($_POST["ID_Piece"]);
        $Ecriture =new MyORM\Ecriture($_POST["ID_Ecriture"]);

        
       $Payement->Numero=$_POST['Numero'];
       $Payement->JustificatifPayement= $_POST['JustificatifPayement'];
       $Payement->Commentaire=$_POST['Commentaire'];
       $Payement->Date=$_POST['Date'];
       $Payement->Montant=$_POST['Montant'];
       $Payement->Reçu=$_POST['Reçu'];
       //$Payement->Parent_ModePayement=new MyORM\Payement($_POST["ID_ModePayement"]) ;
       
      // $Payement->Parent_Cheque=new MyORM\Cheque($_POST["ID_Cheque"]);
       
       $Payement->ID_ModePayement= $_POST["ID_ModePayement"];
       $Payement->ID_Cheque=$_POST["ID_Cheque"];
       $ModePayement->Libelle=$_POST['moyenpayement'];
      
      
       $Cheque->Numero=$_POST['Cheque'];
       
      
       $Piece->DescriptionPiece=$_POST['JustificatifPayement'];
       $Piece->NumeroPiece=$_POST['Numero'];
     //   $Piece->Parent_Payement=new MyORM\Payement($_POST["ID_Payement"]) ;
       
        $Ecriture->Date=$_POST['Date'];
        $Ecriture->Montant=$_POST['Montant'];
        
        $Payement->save(); 
        $ModePayement -> save();
        $Cheque ->save();
        $Piece->save();
        $Ecriture->save();
}
        

 
}

