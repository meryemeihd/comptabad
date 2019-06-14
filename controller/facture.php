<?php
class facture {
    

 public static function nouvelle () {
       global $Connexion;
             
       global $ResultatModePayement;
       $Query = "SELECT * FROM ModePayement";
       $ResultatModePayement= $Connexion->sql_query($Query);
       
              global $Facture;
       
        $Facture = new MyORM\Facture($_GET["param"][0] ?? null);
       
        global $Cheque;
        $Cheque= new MyORM\Cheque($_GET["param"][0]??null);
        
         global $Piece;
        $Piece= new MyORM\Piece($_GET["param"][0]??null);
 
     global $Ecriture;
        $Ecriture= new MyORM\Ecriture($_GET["param"][0]??null);

 }
 
 public static function save() {
     
     //creation Facture
             $Facture = new MyORM\Facture($_POST["ID_Facture"]) ;
        
             
         //creation Cheque
           $Cheque =new MyORM\Cheque($_POST["ID_Cheque"]);

             
             //element facture
             $Facture->NumeroFacture=$_POST['NumeroFacture'];
             $Facture ->Date=$_POST['Date'];
             $Facture->DesignationFacture=$_POST['DesignationFacture'];
             $Facture->PrixTTC=$_POST['PrixTTC'];
             $Facture->Donneur=$_POST['Donneur'];
             $Facture->Commentaire=$_POST['Commentaire'];
          
             //permet d'avoir la clé étrangère
              $Facture->ID_ModePayement=$_POST["ID_ModePayement"] ;
             
      
       
         //attribut Numero à Cheque
        $Cheque->Numero=$_POST['Cheque'];
     
           
       if (empty($Facture->Piece_Facture))
       {
           //création de Piece
            $Piece =new MyORM\Piece();
            //ajout Piece 
            $Facture->add_Piece_Facture($Piece);
       }
         
       
       //insertion designationFacture et numeroFacture dans Piece
       //designationFacture
       $Facture->Piece_Facture[0]->set_DescriptionPiece($_POST['DesignationFacture']);
       //NumeroFacture
       $Facture->Piece_Facture[0]->set_NumeroPiece($_POST['NumeroFacture']);
       
       
       
        if (empty($Facture->Piece_Facture[0]->Ecriture_Piece))
       {
            //creation de Ecriture1
            $Ecriture1 =new MyORM\Ecriture();
            //création de Ecriture2
            $Ecriture2 =new MyORM\Ecriture();
            //ajout ecriture1
            $Facture->Piece_Facture[0]->add_Ecriture_Piece($Ecriture1);
            //ajout ecriture2 
            $Facture->Piece_Facture[0]->add_Ecriture_Piece($Ecriture2);
       }
       
       
       //insertion ecriture 1 et ecriture 2
       
       //insertion date de ecriture1 dans ecriture 
       $Facture->Piece_Facture[0]->Ecriture_Piece[0]->set_Date($_POST['Date']);
       //insertion montant de ecriture1 dans ecriture
       $Facture->Piece_Facture[0]->Ecriture_Piece[0]->set_Montant($_POST['PrixTTC']);
       //insertion de la date dans lmd de ecriture1 dans ecriture
       $Facture->Piece_Facture[0]->Ecriture_Piece[0]->set_lmd(date("Y-m-d H:i:s"));
       //insertion de la date de ecriture2 dans ecriture
       $Facture->Piece_Facture[0]->Ecriture_Piece[1]->set_Date($_POST['Date']);
       //insertion montant de ecriture2 dans ecriture
       $Facture->Piece_Facture[0]->Ecriture_Piece[1]->set_Montant(-$_POST['PrixTTC']);
       //insertion de la date actuelle dans ldm de ecriture2 dans ecriture
       $Facture->Piece_Facture[0]->Ecriture_Piece[1]->set_lmd(date("Y-m-d H:i:s"));
       
           
             //sauvegarde facture
                $Facture->save(); 
                
                //sauvegarde cheque 
                $Cheque->save();
      
               //Api
            
 }
}