<?php

/* 
 * To change this license header choose License Headers in Project Properties.
 * To change this template file choose Tools | Templates
 * and open the template in the editor.
 */

class CompteResultat {
    
    public static function afficher() {
        
        global $Connexion;
       //60-ACHATS 
        //Achat des d'études et de prestations de services
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Achat études et de prestations de services'";
          global $Achats1;
            $Achats1 = $Connexion->sql_query($Query);
        //Achats non stockés de matières et de fournitures
         $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Achats non stockés de matières et de fournitures'";
          global $Achats2;
          $Achats2 = $Connexion->sql_query($Query);
        //Fournitures non stockables ( eau énergie)
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Fournitures non stockables ( eau, énergie)'";
           global $Achats3; 
          $Achats3 = $Connexion->sql_query($Query);
        //Fourniture d'entretien et de petit équipement
         $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Fourniture entretien et de petit équipement'";
          global $Achats4; 
         $Achats4 = $Connexion->sql_query($Query);
        //ASP
        $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'ASP'";
         global $Achats5;
         $Achats5 = $Connexion->sql_query($Query);
        //Autres fournitures 
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Autres fournitures' ";
           global $Achats6;
           $Achats6= $Connexion->sql_query($Query);
        
        //61-SERVICES EXTERIEURS
        //Sous traitance générale
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Sous traitance générale'";
          global $ServicesExterieurs1;
           $ServicesExterieurs1= $Connexion->sql_query($Query);
        //Locations
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Locations'";
              global $ServicesExterieurs2;
            $ServicesExterieurs2= $Connexion->sql_query($Query);
        //Entretien et réparation
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Entretien et réparation'";
            global  $ServicesExterieurs3;
              $ServicesExterieurs3= $Connexion->sql_query($Query);
        //Assurance
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Assurance'";
          global    $ServicesExterieurs4;
            $ServicesExterieurs4= $Connexion->sql_query($Query);
        //Documentation
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Documentation'";
            global  $ServicesExterieurs5;
        $ServicesExterieurs5= $Connexion->sql_query($Query);
        //Divers
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Divers'";
           global   $ServicesExterieurs6;
            $ServicesExterieurs6= $Connexion->sql_query($Query);
        
        //62-AUTRES SERVICES EXTERIEURS
        //Rémunérations intermédiaires et honoraires
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Rémunérations intermédiaires et honoraires'";
          global $AutresServicesExterieurs1;
          $AutresServicesExterieurs1= $Connexion->sql_query($Query);
        //Publicité publication
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Publicité, publication'";
              global $AutresServicesExterieurs2;
             $AutresServicesExterieurs2= $Connexion->sql_query($Query);
        //Déplacements missions
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Déplacements missions'";
              global $AutresServicesExterieurs3;
             $AutresServicesExterieurs3= $Connexion->sql_query($Query);
        //Frais postaux et de télécommunications
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Frais postaux et de télécommunications'";
              global $AutresServicesExterieurs4;
             $AutresServicesExterieurs4= $Connexion->sql_query($Query);
        //Services bancaires autres
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Services bancaires autres'";
              global $AutresServicesExterieurs5;
            $AutresServicesExterieurs5= $Connexion->sql_query($Query);
            
        //63- Impôts et taxes
        //Impôts et taxes sur rémunération
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Impôts et taxes sur rémunération'";
          global   $ImpôtsTaxes1;
             $ImpôtsTaxes1= $Connexion->sql_query($Query);
        //Autres impôts et taxes
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Autres impôts et taxes'";
             global   $ImpôtsTaxes2;
          $ImpôtsTaxes2= $Connexion->sql_query($Query);
        
        //64-Charges de personelle
        //Rémunération des personnels
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Rémunération des personnels'";
                 global $ChargePersonnels1;
          $ChargePersonnels1= $Connexion->sql_query($Query);
        //Charges sociales
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Charges sociales'";
              global $ChargePersonnels2;
           $ChargePersonnels2= $Connexion->sql_query($Query);
        //Autres charges de personnel
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`='Autres charges de personnel' ";
              global $ChargePersonnels3;
          $ChargePersonnels3= $Connexion->sql_query($Query);

        
        //65-Autres charges de gestion courante
        //Autres charges de gestion courante
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Autres charges de gestion courante'";
          global $AutreChargesDeGestionCourante;
          $AutreChargesDeGestionCourante= $Connexion->sql_query($Query);

        //66-Charges financières	
        //Charges financières	
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Charges financières'";
           global $ChargesFinancières;
        $ChargesFinancières= $Connexion->sql_query($Query);

        //67-Charges exceptionnelles
        //Charges exceptionnelles
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Charges exceptionnelles'";
           global $ChargesExceptionnelles;
           $ChargesExceptionnelles= $Connexion->sql_query($Query);

          //68-Dotations aux amortissements(provisions pour renouvellement)
        //Dotation aux amortissements(provisions pour renouvellement)
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Dotation aux amortissements(provisions pour renouvellement)'";
          global $Dotations;
          $Dotations= $Connexion->sql_query($Query);

        //TOTAL DES CHARGES
        
        //86- Emplois des contributions volontaires en nature
        //Bénévolat
          $Query= "SELECT sum(ecriture.Montant), piece.ID_Facture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Bénévolat'";
          global $Benevolat1;
          $Benevolat1= $Connexion->sql_query($Query);
        //Dons en nature
          $Query= "SELECT sum(ecriture.Montant), piece.ID_Facture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Dons en nature'";
          global $DonsNature1;
          $DonsNature1= $Connexion->sql_query($Query);

        //Mise à disposition gratuite de biens et prestations
         $Query= "SELECT sum(ecriture.Montant), piece.ID_Facture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Mise à disposition gratuite de biens et prestations'";
          global $Disposition1;
         $Disposition1= $Connexion->sql_query($Query);

        
        
        //70-Vente de produis finis prestations de services marchandises
        //Prestations de services
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Prestations de services'";
          global $Vente1;
          $Vente1= $Connexion->sql_query($Query);

        //Vente de marchandises
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Vente de marchandises'";
           global $Vente2;
         $Vente2= $Connexion->sql_query($Query);
        //Produits des activités annexes
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Produits des activités annexes'";
           global $Vente3;
          $Vente3= $Connexion->sql_query($Query);
      
         //74-Subventions d'exploitation
        //Etat: CNDS
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Etat: CNDS'";
           global $Subvention1;
            $Subvention1= $Connexion->sql_query($Query);
        //Régions(s)
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Régions(s)'";
           global $Subvention2;
           $Subvention2= $Connexion->sql_query($Query);
        //Département(s):
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Département(s):'";
          global $Subvention3;
           $Subvention3= $Connexion->sql_query($Query);
        //Commune(s):
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Commune(s):'";
          global $Subvention4;
           $Subvention4= $Connexion->sql_query($Query);
        //subvention communauté de communes et agglomération
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Subvention communauté de communes et agglomération'";
          global $Subvention5;
           $Subvention5= $Connexion->sql_query($Query);
        //Organismes sociaux ( à détailler):
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Organismes sociaux ( à détailler):'";
          global $Subvention6;
           $Subvention6= $Connexion->sql_query($Query);
        //Fédération
          $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Fédération'";
          global $Subvention7;
           $Subvention7= $Connexion->sql_query($Query);
        //Fonds européens
         $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Fonds européens'";
         global $Subvention8;
         $Subvention8= $Connexion->sql_query($Query);
        //Autres recettes (précisez)
         $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Autres recettes (précisez)'";
         global $Subvention9;
         $Subvention9= $Connexion->sql_query($Query);
        
        
        //75- Autres produits de gestion courante
        //Autres produits de gestion courante
         $Query= "SELECT sum(ecriture.Montant)  as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Autres produits de gestion courante'";
         global $AutresProduits1;
          $AutresProduits1= $Connexion->sql_query($Query);
        //Dont cotisations
         $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Dons cotisations'";
           global $AutresProduits2;
           $AutresProduits2= $Connexion->sql_query($Query);
        
        //76 - Produits financiers
        //Produits financiers
           $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Produits financiers'";
             global $ProduitsFinanciers;
           $ProduitsFinanciers= $Connexion->sql_query($Query);
           
        //77 - Produits exceptionnels
        //Produits exceptionnels
           $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Produits exceptionnels'";
             global $ProduitsExceptionnels;
             $ProduitsExceptionnels= $Connexion->sql_query($Query);
           
        //78-Reprises sur amortissements et provisions
        //Reprises sur amortissements et provisions
        
           $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Reprises sur amortissements et provisions'";
             global $Reprises;
             $Reprises= $Connexion->sql_query($Query);
        //79-Transfert de charges
        //Transfert de charges
        
           $Query= "SELECT sum(ecriture.Montant)  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Transfert de charges'";
             global $Transfert;
             $Transfert= $Connexion->sql_query($Query);
        //TOTAL DES PRODUITS PREVISIONNELLES
        
        //87-Contributions volontaires en nature
        //Dons en nature
        $Query= "SELECT sum(ecriture.Montant),  piece.ID_Payement from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Dons en nature'";
          global $DonsNature2;
         $DonsNature2= $Connexion->sql_query($Query);
        //Mise à disposition gratuite de biens et prestation
              $Query= "SELECT sum(ecriture.Montant),  piece.ID_Payement from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Mise à disposition gratuite de biens et prestations'";
              global $Disposition2;
              $Disposition2= $Connexion->sql_query($Query);        
//Bénévolat 
             $Query= "SELECT sum(ecriture.Montant), piece.ID_Payement from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Bénévolat'";
            global $Benevolat2;
             $Benevolat2= $Connexion->sql_query($Query);
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    
       
       


    }
}