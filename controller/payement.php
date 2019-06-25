<?php

class payement
{
 public static function paye () {
     
     
     global $Payement;
     $Payement = new MyORM\Payement($_GET["param"][0] ?? null);
     
     
          global $Connexion;
          
     //REQUETE MODEPAYEMENT
            global $ResultatModePayement;
       $Query = "SELECT * FROM ModePayement";
       $ResultatModePayement = $Connexion->sql_query($Query);
     

//REQUETE DES TYPES DE COMPTES POUR RECUPERER LES LIBELLEGENERIQUE DANS LA VUE 
         global $ResultatCompteLibelleCptRes2;
         $Query = "SELECT * FROM Compte WHERE Type='Recette' OR Type='Autres'";
         $ResultatCompteLibelleCptRes2= $Connexion->sql_query($Query);
         
         
//REQUETE JOURNAL  
        global $ResultatJournal1;
       $Query = "SELECT * FROM Journal WHERE ID_Journal='1'";
       $ResultatJournal1= $Connexion->sql_query($Query);
       
       global $ResultatJournal2;
       $Query = "SELECT * FROM Journal WHERE ID_Journal='2'";
       $ResultatJournal2= $Connexion->sql_query($Query);
       
//REQUETE ENTITE POUR RECUPERER ID_ENTITE ET LE METTRE DANS PIECE ET AFFICHER NOM ET PRENOM DANS  LA VUE 
       global $ResultatEntite;
       $Query = "SELECT * FROM Entite";
       $ResultatEntite= $Connexion->sql_query($Query);

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
       $Payement ->DateRapprochement=$_POST['dateRapprochement'];
       
       
       //~~ Pour que Payement prend la valeur de l'ID_ModePayment de ModePayement et l'insère dans l'ID_ModePayement de Payement 
         $Payement->ID_ModePayement= $_POST["ID_ModePayement"];
         $Payement->ID_Compte= $_POST["ID_Compte"];
  
  

      
         /*if ((is_null($Payement->ID_Cheque)) || ($Payement->ID_Cheque == ''))
             $Payement->Parent_Cheque = new MyORM\Cheque();
         */
         
         if (empty($Payement->ID_Cheque))
             $Payement->Parent_Cheque = new MyORM\Cheque();
         //INSERTION DU NUMERO DE CHEQUE DANS CHEQUE 
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
       
       // INSERTION DE LA DATE DE RAPPROCHEMENT DANS PIECE
       $Payement->Piece_Payement[0]->set_DateRapprochement($_POST['dateRapprochement']);
       
       //INSERTION DE ID_ENTITE DANS PIECE
        $Payement->Piece_Payement[0]->set_ID_Entite($_POST['ID_Entite']);
       
       
        if (empty($Payement->Piece_Payement[0]->Ecriture_Piece))
       {
            //création Ecriture1
            $Ecriture1 =new MyORM\Ecriture();
            //création Ecriture2
            $Ecriture2 =new MyORM\Ecriture();
            //ajout Ecriture1
            $Payement->Piece_Payement[0]->add_Ecriture_Piece($Ecriture1);
            //ajout Ecriture1
         //   $Payement->Piece_Payement[0]->add_Ecriture_Piece($Ecriture2);
       }
       
       //insertion de Ecriture1 et Ecriture2
       //insertion de date de Ecriture1
       
       $Payement->Piece_Payement[0]->Ecriture_Piece[0]->set_Date($_POST['Date']);
           //insertion de montant de Ecriture1
       $Payement->Piece_Payement[0]->Ecriture_Piece[0]->set_Montant($_POST['Montant']);
         //insertion de lmd2 DANS ECRITURE1
       $Payement->Piece_Payement[0]->Ecriture_Piece[0]->set_lmd(date("Y-m-d H:i:s"));
         //clé etrangère INSERTION DE ID_COMPTE DE ECRITURE1
       $Payement->Piece_Payement[0]->Ecriture_Piece[0]->set_ID_Compte($_POST['ID_Compte']);
       //INSERTION DE DATE DE RAPPROCHEMENT DANS ECRITURE1
        $Payement->Piece_Payement[0]->Ecriture_Piece[0]->set_DateRapprochement($_POST['dateRapprochement']); 
       //INSERTION CLE ETRANGERE DE ID_Compte DANS ECRITURE1
           if (!empty($_POST['ID_Journal1']))
        {
        $Payement->Piece_Payement[0]->Ecriture_Piece[0]->set_ID_Journal($_POST['ID_Journal1']);
        }
         if (!empty($_POST['ID_Journal2']))
        {
         
        $Payement->Piece_Payement[0]->Ecriture_Piece[0]->set_Montant(-$_POST['Montant']);
        $Payement->Piece_Payement[0]->Ecriture_Piece[0]->set_ID_Journal($_POST['ID_Journal2']);
        }
         
     /*
           //insertion de date de Ecriture2
         $Payement->Piece_Payement[0]->Ecriture_Piece[1]->set_Date($_POST['Date']);
          //insertion de montant DANS ECRITURE de Ecriture2
         $Payement->Piece_Payement[0]->Ecriture_Piece[1]->set_Montant(-$_POST['Montant']);
       //insertion de lmd2 DANS ECRITURE DE ECRITURE2
          $Payement->Piece_Payement[0]->Ecriture_Piece[1]->set_lmd(date("Y-m-d H:i:s"));
       //clé etrangère INSERTION DE ID_COMPTE DE ECRITURE2
          $Payement->Piece_Payement[0]->Ecriture_Piece[1]->set_ID_Compte($_POST['ID_Compte']);
            //clé etrangère INSERTION DE DATERAPPROCHEMENT DE ECRITURE2
            $Payement->Piece_Payement[0]->Ecriture_Piece[1]->set_DateRapprochement($_POST['dateRapprochement']);
            
        $Payement->Piece_Payement[0]->Ecriture_Piece[1]->set_ID_Journal($_POST['ID_Journal2']);
        
      * 
      */
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

