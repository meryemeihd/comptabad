<?php

/* 
 * To change this license header choose License Headers in Project Properties.
 * To change this template file choose Tools | Templates
 * and open the template in the editor.
 */

class CompteResultat {
    
    public static function afficher() {
     
        global $Connexion;
        
        global $DateFin;
        global $DateDebut;
        
        //if (isset($_POST['DateFin'])) {
     //       $DateFin=$_POST['DateFin'];
           // $DateDebut=$_POST['DateDebut'];
        //}
     //   else {
            $DateFin = date("Y-m-d");
            $DateDebut  =  date("Y-m-d", strtotime("-1 year"));
            
          
        
        
        $Where = " AND ecriture.Date BETWEEN '".$DateDebut."' AND '".$DateFin."'";
   
        global $Connexion;

       //60-ACHATS 
       $Query= "SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte 
WHERE (compte.LibelleCompteResultat='Achat études et de prestations de services' OR compte.LibelleCompteResultat='Achats non stockés de matières et de fournitures' OR compte.LibelleCompteResultat='Fournitures non stockables ( eau, énergie)'  OR compte.LibelleCompteResultat='Fourniture entretien et de petit équipement' OR compte.LibelleCompteResultat='ASP' OR compte.LibelleCompteResultat='Autres fournitures')".$Where;
       global $Achats;
       $Achats = $Connexion->sql_query($Query);
       
/*
        echo "<pre>";
       print_r($Achats);
       echo "</pre>";
      */
       
       
        //Achat des d'études et de prestations de services
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte"
                  . " where (`LibelleCompteResultat`= 'Achat études et de prestations de services')".$Where;
          global $Achats1;
            $Achats1 = $Connexion->sql_query($Query);
        //Achats non stockés de matières et de fournitures
         $Query= "SELECT sum(ecriture.Montant)  as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Achats non stockés de matières et de fournitures')".$Where;
          global $Achats2;
          $Achats2 = $Connexion->sql_query($Query);
        //Fournitures non stockables ( eau énergie)
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Fournitures non stockables ( eau, énergie)')".$Where;
           global $Achats3; 
          $Achats3 = $Connexion->sql_query($Query);
        //Fourniture d'entretien et de petit équipement
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Fourniture entretien et de petit équipement')".$Where;
          global $Achats4; 
         $Achats4 = $Connexion->sql_query($Query);
        //ASP
        $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'ASP')".$Where;
         global $Achats5;
         $Achats5 = $Connexion->sql_query($Query);
        //Autres fournitures 
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Autres fournitures')".$Where;
           global $Achats6;
           $Achats6= $Connexion->sql_query($Query);
        
        //61-SERVICES EXTERIEURS
        $Query="SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte 
            WHERE (compte.LibelleCompteResultat='Sous traitance générale' OR compte.LibelleCompteResultat='Locations' 
            OR compte.LibelleCompteResultat='Entretien et réparation' OR compte.LibelleCompteResultat='Assurance' 
            OR compte.LibelleCompteResultat='Documentation' OR compte.LibelleCompteResultat='Divers')".$Where;
        global $ServicesExterieurs;
        $ServicesExterieurs= $Connexion->sql_query($Query);
        //Sous traitance générale
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Sous traitance générale')".$Where;
          global $ServicesExterieurs1;
           $ServicesExterieurs1= $Connexion->sql_query($Query);
        //Locations
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where ( `LibelleCompteResultat`= 'Locations')".$Where;
              global $ServicesExterieurs2;
            $ServicesExterieurs2= $Connexion->sql_query($Query);
        //Entretien et réparation
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Entretien et réparation')".$Where;
            global  $ServicesExterieurs3;
              $ServicesExterieurs3= $Connexion->sql_query($Query);
        //Assurance
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Assurance')".$Where;
          global    $ServicesExterieurs4;
            $ServicesExterieurs4= $Connexion->sql_query($Query);
        //Documentation
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Documentation')".$Where;
            global  $ServicesExterieurs5;
        $ServicesExterieurs5= $Connexion->sql_query($Query);
        //Divers
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where( `LibelleCompteResultat`= 'Divers')".$Where;
           global   $ServicesExterieurs6;
            $ServicesExterieurs6= $Connexion->sql_query($Query);
        
        //62-AUTRES SERVICES EXTERIEURS
        $Query="SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE( compte.LibelleCompteResultat='Rémunérations intermédiaires et honoraires' OR compte.LibelleCompteResultat='Publicité, publication' OR compte.LibelleCompteResultat='Déplacements, missions' OR compte.LibelleCompteResultat='Frais postaux et de télécommunications' OR compte.LibelleCompteResultat='Services bancaires, autres')".$Where;
           global $AutresServicesExterieurs;
          $AutresServicesExterieurs= $Connexion->sql_query($Query);
        //Rémunérations intermédiaires et honoraires
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Rémunérations intermédiaires et honoraires')".$Where;
          global $AutresServicesExterieurs1;
          $AutresServicesExterieurs1= $Connexion->sql_query($Query);
        //Publicité publication
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Publicité, publication')".$Where;
              global $AutresServicesExterieurs2;
             $AutresServicesExterieurs2= $Connexion->sql_query($Query);
        //Déplacements missions
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Déplacements missions')".$Where;
              global $AutresServicesExterieurs3;
             $AutresServicesExterieurs3= $Connexion->sql_query($Query);
        //Frais postaux et de télécommunications
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Frais postaux et de télécommunications')".$Where;
              global $AutresServicesExterieurs4;
             $AutresServicesExterieurs4= $Connexion->sql_query($Query);
        //Services bancaires autres
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Services bancaires autres')".$Where;
              global $AutresServicesExterieurs5;
            $AutresServicesExterieurs5= $Connexion->sql_query($Query);
            
        //63- Impôts et taxes
           $Query="SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE (compte.LibelleCompteResultat='Impôts et taxes sur rémunération' OR compte.LibelleCompteResultat='Autres impôts et taxes')".$Where;
            global   $ImpôtsTaxes;
             $ImpôtsTaxes= $Connexion->sql_query($Query);
        //Impôts et taxes sur rémunération
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Impôts et taxes sur rémunération')".$Where;
          global   $ImpôtsTaxes1;
             $ImpôtsTaxes1= $Connexion->sql_query($Query);
        //Autres impôts et taxes
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Autres impôts et taxes')".$Where;
             global   $ImpôtsTaxes2;
          $ImpôtsTaxes2= $Connexion->sql_query($Query);
        
        //64-Charges de personelle
         $Query="SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE (compte.LibelleCompteResultat='Rémunération des personnels' OR compte.LibelleCompteResultat='Charges sociales' OR compte.LibelleCompteResultat='Autres charges de personnel')".$Where;
          global $ChargePersonnels;
          $ChargePersonnels= $Connexion->sql_query($Query);
        //Rémunération des personnels
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Rémunération des personnels')".$Where;
                 global $ChargePersonnels1;
          $ChargePersonnels1= $Connexion->sql_query($Query);
        //Charges sociales
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Charges sociales')".$Where;
              global $ChargePersonnels2;
           $ChargePersonnels2= $Connexion->sql_query($Query);
        //Autres charges de personnel
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`='Autres charges de personnel')".$Where;
              global $ChargePersonnels3;
          $ChargePersonnels3= $Connexion->sql_query($Query);

        
        //65-Autres charges de gestion courante
        //Autres charges de gestion courante
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Autres charges de gestion courante')".$Where;
          global $AutreChargesDeGestionCourante;
          $AutreChargesDeGestionCourante= $Connexion->sql_query($Query);

        //66-Charges financières	
        //Charges financières	
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Charges financières')".$Where;
           global $ChargesFinancières;
        $ChargesFinancières= $Connexion->sql_query($Query);

        //67-Charges exceptionnelles
        //Charges exceptionnelles
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Charges exceptionnelles')".$Where;
           global $ChargesExceptionnelles;
           $ChargesExceptionnelles= $Connexion->sql_query($Query);

          //68-Dotations aux amortissements(provisions pour renouvellement)
        //Dotation aux amortissements(provisions pour renouvellement)
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Dotation aux amortissements(provisions pour renouvellement)')".$Where;
          global $Dotations;
          $Dotations= $Connexion->sql_query($Query);

        //TOTAL DES 
        $Query="SELECT SUM(ecriture.Montant)as MontantEcriture
from ecriture
inner JOIN compte
ON ecriture.ID_Compte = compte.ID_Compte
WHERE (compte.LibelleCompteResultat='Achat études et de prestations de services' OR compte.LibelleCompteResultat='Achats non stockés de matières et de fournitures' OR compte.LibelleCompteResultat='Fournitures non stockables ( eau, énergie)'  OR compte.LibelleCompteResultat='Fourniture entretien et de petit équipement' OR compte.LibelleCompteResultat='ASP' OR compte.LibelleCompteResultat='Autres fournitures' OR compte.LibelleCompteResultat='Sous traitance générale' OR compte.LibelleCompteResultat='Locations' OR compte.LibelleCompteResultat='Entretien et réparation' OR compte.LibelleCompteResultat='Assurance'     OR compte.LibelleCompteResultat='Documentation' OR compte.LibelleCompteResultat='Divers'OR compte.LibelleCompteResultat='Rémunérations intermédiaires et honoraires' OR compte.LibelleCompteResultat='Publicité, publication' OR compte.LibelleCompteResultat='Déplacements, missions' OR compte.LibelleCompteResultat='Frais postaux et de télécommunications' OR compte.LibelleCompteResultat='Services bancaires, autres' OR compte.LibelleCompteResultat='Impôts et taxes sur rémunération' OR compte.LibelleCompteResultat='Autres impôts et taxes' OR compte.LibelleCompteResultat='Rémunération des personnels' OR compte.LibelleCompteResultat='Charges sociales' OR compte.LibelleCompteResultat='Autres charges de personnel' OR compte.LibelleCompteResultat= 'Autres charges de gestion courante' OR compte.LibelleCompteResultat= 'Charges financières' OR  compte.LibelleCompteResultat= 'Charges exceptionnelles' or compte.LibelleCompteResultat= 'Dotations aux amortissements(provisions pour renouvellement)')".$Where;
        global $TCP;
         $TCP= $Connexion->sql_query($Query);
        
        
        //86- Emplois des contributions volontaires en nature
        $Query="SELECT SUM(ecriture.Montant)as MontantEcriture,piece.ID_Facture  from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte ON ecriture.ID_Compte = compte.ID_Compte WHERE( compte.LibelleCompteResultat='Bénévolat' OR compte.LibelleCompteResultat='Dons en nature' OR compte.LibelleCompteResultat='Mise à disposition gratuite de biens et prestations' ) AND piece.ID_Facture is not null".$Where;
        global $Volontaire1;
        $Volontaire1= $Connexion->sql_query($Query);
        //Bénévolat
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture, piece.ID_Facture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Bénévolat' )AND piece.ID_Facture is not null".$Where;
          global $Benevolat1;
          $Benevolat1= $Connexion->sql_query($Query);
        //Dons en nature
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture, piece.ID_Facture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Dons en nature' )AND piece.ID_Facture is not null".$Where;
          global $DonsNature1;
          $DonsNature1= $Connexion->sql_query($Query);

        //Mise à disposition gratuite de biens et prestations
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture, piece.ID_Facture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where ( `LibelleCompteResultat`= 'Mise à disposition gratuite de biens et prestations') AND piece.ID_Facture is not null".$Where;
          global $Disposition1;
         $Disposition1= $Connexion->sql_query($Query);
         
         //AUTRES
                  $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Piece left join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.' )and piece.ID_Facture is NOT null".$Where;
         global $Autres1;
          $Autres1= $Connexion->sql_query($Query);
         
         //TOTAL CHARGES
         $Query="SELECT SUM(ecriture.Montant)as MontantEcriture
from piece
inner JOIN ecriture
on ecriture.ID_Piece = piece.ID_Piece
LEFT JOIN compte
ON ecriture.ID_Compte = compte.ID_Compte
WHERE (compte.LibelleCompteResultat='Achat études et de prestations de services' OR compte.LibelleCompteResultat='Achats non stockés de matières et de fournitures'
OR compte.LibelleCompteResultat='Fournitures non stockables ( eau, énergie)'  OR compte.LibelleCompteResultat='Fourniture entretien et de petit équipement' 
OR compte.LibelleCompteResultat='ASP' OR compte.LibelleCompteResultat='Autres fournitures' OR compte.LibelleCompteResultat='Sous traitance générale'
OR compte.LibelleCompteResultat='Locations'         OR compte.LibelleCompteResultat='Entretien et réparation' OR compte.LibelleCompteResultat='Assurance'  
OR compte.LibelleCompteResultat='Documentation' OR compte.LibelleCompteResultat='Divers'
OR compte.LibelleCompteResultat='Rémunérations intermédiaires et honoraires' OR compte.LibelleCompteResultat='Publicité, publication' 
OR compte.LibelleCompteResultat='Déplacements, missions' OR compte.LibelleCompteResultat='Frais postaux et de télécommunications' 
OR compte.LibelleCompteResultat='Services bancaires, autres' OR compte.LibelleCompteResultat='Impôts et taxes sur rémunération' 
OR compte.LibelleCompteResultat='Autres impôts et taxes' OR compte.LibelleCompteResultat='Rémunération des personnels' 
OR compte.LibelleCompteResultat='Charges sociales' OR compte.LibelleCompteResultat='Autres charges de personnel' 
OR compte.LibelleCompteResultat= 'Autres charges de gestion courante' OR compte.LibelleCompteResultat= 'Charges financières' 
OR  compte.LibelleCompteResultat= 'Charges exceptionnelles' 
or compte.LibelleCompteResultat= 'Dotations aux amortissements(provisions pour renouvellement)' 
OR compte.LibelleCompteResultat= 'Bénévolat' OR compte.LibelleCompteResultat= 'Dons en nature'  
OR compte.LibelleCompteResultat= 'Mise à disposition gratuite de biens et prestations'
OR compte.LibelleCompteResultat='Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.')
AND piece.ID_Facture is not null".$Where;
         global  $TOTALCHARGES;
        $TOTALCHARGES= $Connexion->sql_query($Query);




         //70-Vente de produis finis prestations de services marchandises
        $Query= "SELECT SUM(ecriture.Montant)as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE (compte.LibelleCompteResultat='Prestations de services' OR compte.LibelleCompteResultat='Vente de marchandises' OR compte.LibelleCompteResultat='Produits des activités annexes')".$Where;
         global $Vente;
          $Vente= $Connexion->sql_query($Query);
        //Prestations de services
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Prestations de services')".$Where;
          global $Vente1;
          $Vente1= $Connexion->sql_query($Query);

        //Vente de marchandises
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Vente de marchandises')".$Where;
           global $Vente2;
         $Vente2= $Connexion->sql_query($Query);
        //Produits des activités annexes
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Produits des activités annexes')".$Where;
           global $Vente3;
          $Vente3= $Connexion->sql_query($Query);
      
         //74-Subventions d'exploitation
         $Query="SELECT SUM(ecriture.Montant)as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE (compte.LibelleCompteResultat='Etat: CNDS' OR compte.LibelleCompteResultat='Régions(s)' OR compte.LibelleCompteResultat='Département(s):' OR compte.LibelleCompteResultat='Commune(s):' OR compte.LibelleCompteResultat='Subvention communauté de communes et agglomération' OR compte.LibelleCompteResultat='Organismes sociaux ( à détailler):' OR compte.LibelleCompteResultat='Fédération' OR compte.LibelleCompteResultat='Fonds européens' OR compte.LibelleCompteResultat='Autres recettes (précisez)')".$Where;
           global $Subvention;
            $Subvention= $Connexion->sql_query($Query);
          //Etat: CNDS
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Etat: CNDS')".$Where;
           global $Subvention1;
            $Subvention1= $Connexion->sql_query($Query);
        //Régions(s)
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Régions(s)')".$Where;
           global $Subvention2;
           $Subvention2= $Connexion->sql_query($Query);
        //Département(s):
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Département(s):')".$Where;
          global $Subvention3;
           $Subvention3= $Connexion->sql_query($Query);
        //Commune(s):
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Commune(s):')".$Where;
          global $Subvention4;
           $Subvention4= $Connexion->sql_query($Query);
        //subvention communauté de communes et agglomération
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Subvention communauté de communes et agglomération')".$Where;
          global $Subvention5;
           $Subvention5= $Connexion->sql_query($Query);
        //Organismes sociaux ( à détailler):
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Organismes sociaux ( à détailler):')".$Where;
          global $Subvention6;
           $Subvention6= $Connexion->sql_query($Query);
        //Fédération
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Fédération')".$Where;
          global $Subvention7;
           $Subvention7= $Connexion->sql_query($Query);
        //Fonds européens
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Fonds européens')".$Where;
         global $Subvention8;
         $Subvention8= $Connexion->sql_query($Query);
        //Autres recettes (précisez)
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Autres recettes (précisez)')".$Where;
         global $Subvention9;
         $Subvention9= $Connexion->sql_query($Query);
        
        
        //75- Autres produits de gestion courante
        $Query="SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte ON ecriture.ID_Compte = compte.ID_Compte WHERE (compte.LibelleCompteResultat='Dont cotisations' OR compte.LibelleCompteResultat='Autres produits de gestion courante')".$Where;
        global $AutresProduits;
        $AutresProduits = $Connexion->sql_query($Query);

        //Autres produits de gestion courante
         $Query= "SELECT sum(ecriture.Montant)  as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Autres produits de gestion courante')".$Where;
         global $AutresProduits1;
          $AutresProduits1= $Connexion->sql_query($Query);
        //Dont cotisations
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Dont cotisations')".$Where;
           global $AutresProduits2;
           $AutresProduits2= $Connexion->sql_query($Query);
        
        //76 - Produits financiers
        //Produits financiers
           $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Produits financiers')".$Where;
             global $ProduitsFinanciers;
           $ProduitsFinanciers= $Connexion->sql_query($Query);
           
        //77 - Produits exceptionnels
        //Produits exceptionnels
           $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Produits exceptionnels')".$Where;
             global $ProduitsExceptionnels;
             $ProduitsExceptionnels= $Connexion->sql_query($Query);
           
        //78-Reprises sur amortissements et provisions
        //Reprises sur amortissements et provisions
        
           $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Reprises sur amortissements et provisions')".$Where;
             global $Reprises;
             $Reprises= $Connexion->sql_query($Query);
        //79-Transfert de charges
        //Transfert de charges
        
           $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'transfert de charges')".$Where;
             global $Transfert;
             $Transfert= $Connexion->sql_query($Query);
        //TOTAL DES PRODUITS PREVISIONNELLES
        $Query= "SELECT SUM(ecriture.Montant)as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE (compte.LibelleCompteResultat='Etat: CNDS' OR compte.LibelleCompteResultat='Régions(s)' OR compte.LibelleCompteResultat='Département(s):' OR compte.LibelleCompteResultat='Commune(s):' OR compte.LibelleCompteResultat='Subvention communauté de communes et agglomération' OR compte.LibelleCompteResultat='Organismes sociaux ( à détailler):' OR compte.LibelleCompteResultat='Fédération' OR compte.LibelleCompteResultat='Fonds européens' OR compte.LibelleCompteResultat='Autres recettes (précisez)' OR compte.LibelleCompteResultat='Prestations de services' OR compte.LibelleCompteResultat='Vente de marchandises' OR compte.LibelleCompteResultat='Produits des activités annexes' OR compte.LibelleCompteResultat='Dont cotisations' OR compte.LibelleCompteResultat='Autres produits de gestion courante' OR compte.LibelleCompteResultat='Produits financiers' OR compte.LibelleCompteResultat='Produits exceptionnels'OR compte.LibelleCompteResultat='Reprises sur amortissements et provisions'OR compte.LibelleCompteResultat='transfert de charges')".$Where;
        global $TPP;
         $TPP= $Connexion->sql_query($Query);
         
         
        //87-Contributions volontaires en nature
        $Query="SELECT SUM(ecriture.Montant)as MontantEcriture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte ON ecriture.ID_Compte = compte.ID_Compte WHERE (compte.LibelleCompteResultat='Bénévolat' OR compte.LibelleCompteResultat='Dons en nature' OR compte.LibelleCompteResultat='Mise à disposition gratuite de biens et prestations' )AND piece.ID_Payement is not null".$Where;
        global $Volontaire2;
        $Volontaire2= $Connexion->sql_query($Query);
        //Dons en nature
        $Query= "SELECT sum(ecriture.Montant) as MontantEcriture,  piece.ID_Payement from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Dons en nature' )AND piece.ID_Payement is not null".$Where;
          global $DonsNature2;
         $DonsNature2= $Connexion->sql_query($Query);
        //Mise à disposition gratuite de biens et prestation
              $Query= "SELECT sum(ecriture.Montant) as MontantEcriture,  piece.ID_Payement from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Mise à disposition gratuite de biens et prestations' )AND piece.ID_Payement is not null".$Where;
              global $Disposition2;
              $Disposition2= $Connexion->sql_query($Query);        
//Bénévolat 
             $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Bénévolat' ) AND piece.ID_Payement is not null".$Where;
            global $Benevolat2;
             $Benevolat2= $Connexion->sql_query($Query);
             
             
         //Autres 
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Piece left join compte on ecriture.ID_Compte = compte.ID_Compte where (`LibelleCompteResultat`= 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.') and piece.ID_Payement  is NOT null".$Where;
         global $Autres2;
          $Autres2= $Connexion->sql_query($Query);
        
        //TOTAL
            $Query= "SELECT SUM(ecriture.Montant)as MontantEcriture, piece.ID_Payement
from piece
inner JOIN ecriture
on ecriture.ID_Piece = piece.ID_Piece
LEFT JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE (compte.LibelleCompteResultat='Etat: CNDS' OR compte.LibelleCompteResultat='Régions(s)' OR compte.LibelleCompteResultat='Département(s):' OR compte.LibelleCompteResultat='Commune(s):' OR compte.LibelleCompteResultat='Subvention communauté de communes et agglomération' OR compte.LibelleCompteResultat='Organismes sociaux ( à détailler):' OR compte.LibelleCompteResultat='Fédération' OR compte.LibelleCompteResultat='Fonds européens' OR compte.LibelleCompteResultat='Autres recettes (précisez)' OR compte.LibelleCompteResultat='Prestations de services' OR compte.LibelleCompteResultat='Vente de marchandises' OR compte.LibelleCompteResultat='Produits des activités annexes' OR compte.LibelleCompteResultat='Dont cotisations' OR compte.LibelleCompteResultat='Autres produits de gestion courante' OR compte.LibelleCompteResultat='Produits financiers' OR compte.LibelleCompteResultat='Produits exceptionnels'OR compte.LibelleCompteResultat='Reprises sur amortissements et provisions'OR compte.LibelleCompteResultat='transfert de charges' OR compte.LibelleCompteResultat='Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.' ) AND piece.ID_Payement is not null" .$Where;
        global $TOTALPRODUITS;
         $TOTALPRODUITS= $Connexion->sql_query($Query);   
         
    }
}