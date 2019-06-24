<?php
class facture {
    

 public static function nouvelle () {
       global $Connexion;
             
//REQUETE MODEPAYEMENT POUR QU ON VOIT LE LIBELLE DANS LA VUE ET PERMETTRE DE METTRE LA RELATION ENTRE FACTURE ET MP
       global $ResultatModePayement;
       $Query = "SELECT * FROM ModePayement";
       $ResultatModePayement= $Connexion->sql_query($Query);
       
//
        global $ResultatJournal1;
       $Query = "SELECT * FROM Journal WHERE ID_Journal='1'";
       $ResultatJournal1= $Connexion->sql_query($Query);
       
       global $ResultatJournal2;
       $Query = "SELECT * FROM Journal WHERE ID_Journal='2'";
       $ResultatJournal2= $Connexion->sql_query($Query);
       
       
//REQUETE DE ENTITE PR PERMETTRE D AFFICHER NOM ET PRENOM LIE ENTITE ET PIECE 
        global $ResultatEntite;
       $Query = "SELECT * FROM Entite";
       $ResultatEntite= $Connexion->sql_query($Query);
 
 //REQUETE POUR PERMETTRE D AFFICHER LIBELLE ET RELIER COMPTE ET ECRITURE 
        global $ResultatCompteLibelleCptRes1;
         $Query = "SELECT * FROM Compte WHERE Type='Depense' OR Type='Autres'";
         $ResultatCompteLibelleCptRes1= $Connexion->sql_query($Query);
         
    
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
             $Facture->Commentaire=$_POST['Commentaire'];
             $Facture ->DateRapprochement=$_POST['dateRapprochement'];
       
          
             //permet d'avoir la clé étrangère
                $Facture->ID_ModePayement=$_POST["ID_ModePayement"] ;
               // $Facture->ID_Compte=$_POST["ID_Compte"] ;                                                   

         //attribut Numero à Cheque
       
         if (empty($Facture->ID_Cheque))
             $Facture->Parent_Cheque = new MyORM\Cheque();
         //INSERTION DU NUMERO DE CHEQUE DANS CHEQUE 
         $Facture->Parent_Cheque->Numero = $_POST['Cheque'];
     
           
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
       //INSERTION DATE RAPPROCHEMENT DANS PIECE
        $Facture->Piece_Facture[0]->set_DateRapprochement($_POST['dateRapprochement']);
       //INSERTION ID ENTITE DANS PIECE
       $Facture->Piece_Facture[0]->set_ID_Entite($_POST['ID_Entite']);
       
       
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
       
          //INSERTION DE DATE DANS ECRITURE AVEC ECRITURE1
       $Facture->Piece_Facture[0]->Ecriture_Piece[0]->set_Date($_POST['Date']);
          //INSERTION DE MONTANT DANS ECRITURE AVEC ECRITURE1
       $Facture->Piece_Facture[0]->Ecriture_Piece[0]->set_Montant($_POST['PrixTTC']);
       //INSERTION DATE RAPPROCHEMENT DS ECRITURE AVEC ECRITURE1
        $Facture->Piece_Facture[0]->Ecriture_Piece[0]->set_DateRapprochement($_POST['dateRapprochement']);
      
         //INSERTION DE DATE ACTUELLE DANS ECRITURE AVEC ECRITURE1
       $Facture->Piece_Facture[0]->Ecriture_Piece[0]->set_lmd(date("Y-m-d H:i:s"));
       //INSERTION DE ID COMPTE DANS ECRITURE AVEC ECRITURE1
       $Facture->Piece_Facture[0]->Ecriture_Piece[0]->set_ID_Compte($_POST['ID_Compte']);
       
       
       $Facture->Piece_Facture[0]->Ecriture_Piece[0]->set_ID_Journal($_POST['ID_Journal1']);
       
       
        //INSERTION DE DATE DANS ECRITURE AVEC ECRITURE2
       $Facture->Piece_Facture[0]->Ecriture_Piece[1]->set_Date($_POST['Date']);
         //INSERTION DE MONTANT DANS ECRITURE AVEC ECRITURE2
       $Facture->Piece_Facture[0]->Ecriture_Piece[1]->set_Montant(-$_POST['PrixTTC']);
       //INSERTION DE DATE RAPPROCHEMENT DANS ECRITURE AVEC ECRITURE2
        $Facture->Piece_Facture[0]->Ecriture_Piece[1]->set_DateRapprochement($_POST['dateRapprochement']);
       //INSERTION DE LA DATE ACTUELLE DANS ECRITURE AVEC ECRITURE2
       $Facture->Piece_Facture[0]->Ecriture_Piece[1]->set_lmd(date("Y-m-d H:i:s"));
       //INSERTION DE ID COMPTE DANS ECRITURE AVEC ECRITURE2
        $Facture->Piece_Facture[0]->Ecriture_Piece[1]->set_ID_Compte($_POST['ID_Compte']);
       
        
        $Facture->Piece_Facture[0]->Ecriture_Piece[1]->set_ID_Journal($_POST['ID_Journal2']);
       
       
       
        
       
    
        
             //sauvegarde facture
                $Facture->save(); 
                
                //sauvegarde cheque 
      
               //Api
            
 }
}