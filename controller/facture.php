<?php
class facture {
    

 public static function nouvelle () {
       global $Connexion;
       
       global $Facture;
       
        $Facture = new MyORM\Facture($_GET["param"][0] ?? null);
        
        
       //global $ModePayement;
       //$ModePayement= new MyORM\ModePayement($_GET["param"][0]??null);
       
       
       global $ResultatModePayement;
       $Query = "SELECT * FROM ModePayement";
       $ResultatModePayement = $Connexion->sql_query($Query);
       
        global $Cheque;
        $Cheque= new MyORM\Cheque($_GET["param"][0]??null);
        
         global $Piece;
        $Piece= new MyORM\Piece($_GET["param"][0]??null);
 
     global $Ecriture1;
        $Ecriture1= new MyORM\Ecriture($_GET["param"][0]??null);

 }
 
 public static function save() {
     
             $Facture = new MyORM\Facture($_POST["ID_Facture"]) ;
             $ModePayement = new MyORM\ModePayement($_POST["ID_ModePayement"]) ;
             $Cheque =new MyORM\Cheque($_POST["ID_Cheque"]);
             $Piece =new MyORM\Piece($_POST["ID_Piece"]);
             $Ecriture1 =new MyORM\Ecriture($_POST["ID_Ecriture"]);
             
             $Facture->NumeroFacture=$_POST['NumeroFacture'];
             $Facture ->Date=$_POST['Date'];
             $Facture->DesignationFacture=$_POST['DesignationFacture'];
             $Facture->PrixTTC=$_POST['PrixTTC'];
             $Facture->Donneur=$_POST['Donneur'];
             $Facture->Commentaire=$_POST['Commentaire'];
             //$Facture->Parent_ModePayement=new MyORM\ModePayement($_POST["ID_ModePayement"]) ;
              $Facture->ID_ModePayement=$_POST["ID_ModePayement"] ;
             
             $ModePayement->Libelle=$_POST['moyenpayement'];
            $Cheque->Numero=$_POST['Cheque'];
            
             $Piece->DescriptionPiece=$_POST['DesignationFacture'];
             $Piece->NumeroPiece=$_POST['NumeroFacture'];
              $Piece->ID_Facture=$_POST["ID_Facture"]; 
             //$Piece->Parent_Facture=new MyORM\Facture($_POST["ID_Facture"]) ;
             
              $Ecriture1->Date=$_POST['Date'];
              $Ecriture1->Montant=$_POST['PrixTTC'];
         //    $Ecriture->Parent_Piece=new MyORM\Piece($_POST['ID_Piece']);
              $Ecriture1->ID_Piece=$_POST['ID_Piece'];
              
              
             
             
               $Facture->save(); 
               $ModePayement->save();
               $Cheque->save();
               $Piece->save();
               $Ecriture1->save();
               
               //Api
            
 }
}