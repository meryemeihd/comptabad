<?php

class payement
{
 public static function paye () {
     
     
     global $Payement;
     $Payement = new MyORM\Payement($_GET["param"][0] ?? null);
     
     
          global $Connexion;
          
     //requete
            global $ResultatModePayement;
       $Query = "SELECT * FROM ModePayement";
       $ResultatModePayement = $Connexion->sql_query($Query);
     

     
   global $Cheque;
      $Cheque = new MyORM\Cheque($_GET["param"][0] ?? null);
              global $Piece;
            $Piece= new MyORM\Piece($_GET["param"][0]??null);
 
    global $Ecriture;
     $Ecriture= new MyORM\Ecriture($_GET["param"][0]??null);
 }
 
 
        public static function save() {
     
            //creation Payement
        $Payement = new MyORM\Payement($_POST["ID_Payement"]) ;

        


        //Entre les infos suivantes dans Payement
       $Payement->Numero=$_POST['Numero'];
       $Payement->JustificatifPayement= $_POST['JustificatifPayement'];
       $Payement->Commentaire=$_POST['Commentaire'];
       $Payement->Date=$_POST['Date'];
       $Payement->Montant=$_POST['Montant'];
       $Payement->Reçu=$_POST['Reçu'];
       
       
       //~~ Pour que Payement prend la valeur de l'ID_ModePayment de ModePayement et l'insère dans l'ID_ModePayement de Payement 
         $Payement->ID_ModePayement= $_POST["ID_ModePayement"];
  

      
         /*if ((is_null($Payement->ID_Cheque)) || ($Payement->ID_Cheque == ''))
             $Payement->Parent_Cheque = new MyORM\Cheque();
         */
         
         if (empty($Payement->ID_Cheque))
             $Payement->Parent_Cheque = new MyORM\Cheque();
         
         $Payement->Parent_Cheque->Numero = $_POST['Cheque'];
         
    
      
         

       
       if (empty($Payement->Piece_Payement))
       {
           //creation Piece
            $Piece =new MyORM\Piece();
            //ajout Piece
            $Payement->add_Piece_Payement($Piece);
       }
         
       //insertion de justificatifPayement dans Piece
       $Payement->Piece_Payement[0]->set_DescriptionPiece($_POST['JustificatifPayement']);
              //insertion de Numero dans Piece
       $Payement->Piece_Payement[0]->set_NumeroPiece($_POST['Numero']);
       
       
        if (empty($Payement->Piece_Payement[0]->Ecriture_Piece))
       {
            //création Ecriture1
            $Ecriture1 =new MyORM\Ecriture();
            //création Ecriture2
            $Ecriture2 =new MyORM\Ecriture();
            //ajout Ecriture1
            $Payement->Piece_Payement[0]->add_Ecriture_Piece($Ecriture1);
            //ajout Ecriture1
            $Payement->Piece_Payement[0]->add_Ecriture_Piece($Ecriture2);
       }
       
       //insertion de Ecriture1 et Ecriture2
       //insertion de date de Ecriture1
       $Payement->Piece_Payement[0]->Ecriture_Piece[0]->set_Date($_POST['Date']);
           //insertion de montant de Ecriture1
       $Payement->Piece_Payement[0]->Ecriture_Piece[0]->set_Montant($_POST['Montant']);
         //insertion de lmd2
       $Payement->Piece_Payement[0]->Ecriture_Piece[0]->set_lmd(date("Y-m-d H:i:s"));
           //insertion de date de Ecriture2
       $Payement->Piece_Payement[0]->Ecriture_Piece[1]->set_Date($_POST['Date']);
          //insertion de montant de Ecriture1
       $Payement->Piece_Payement[0]->Ecriture_Piece[1]->set_Montant(-$_POST['Montant']);
       //insertion de lmd2
       $Payement->Piece_Payement[0]->Ecriture_Piece[1]->set_lmd(date("Y-m-d H:i:s"));


       
        
        //sert a afficher
         /*
         echo "<pre>";
         print_r($Payement);
         echo "</pre>";
         die();
         */
        

        //~~sauvegarde du Payement -> sauvegarde aussi Cheque, Piece, Ecriture
        $Payement->save(); 


}
        

 
}

