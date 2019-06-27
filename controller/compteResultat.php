<?php

/* 
 * To change this license header choose License Headers in Project Properties.
 * To change this template file choose Tools | Templates
 * and open the template in the editor.
 */

class CompteResultat {
    
    public static function afficher() {
        
             global $Ecriture;
        $Ecriture= new MyORM\Ecriture;
        
        global $Connexion;
   
      //  $Query="SELECT SUM(ecriture.Montant) as MontantEcriture FROM Ecriture INNER JOIN compte on compte.ID_Compte=ecriture.ID_Compte Where ecriture.Date='$DateEcriture'";
       // global $DateEcriture1;
       // $DateEcriture1=$Connexion->sql_query($Query);  
        
        global $Connexion;
       //60-ACHATS 
       $Query= "SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte 
WHERE compte.LibelleCompteResultat='Achat études et de prestations de services' OR compte.LibelleCompteResultat='Achats non stockés de matières et de fournitures' OR compte.LibelleCompteResultat='Fournitures non stockables ( eau, énergie)'  OR compte.LibelleCompteResultat='Fourniture entretien et de petit équipement' OR compte.LibelleCompteResultat='ASP' OR compte.LibelleCompteResultat='Autres fournitures'";
       global $Achats;
       $Achats = $Connexion->sql_query($Query);
        //Achat des d'études et de prestations de services
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte"
                  . " where `LibelleCompteResultat`= 'Achat études et de prestations de services'";
          global $Achats1;
            $Achats1 = $Connexion->sql_query($Query);
        //Achats non stockés de matières et de fournitures
         $Query= "SELECT sum(ecriture.Montant)  as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Achats non stockés de matières et de fournitures'";
          global $Achats2;
          $Achats2 = $Connexion->sql_query($Query);
        //Fournitures non stockables ( eau énergie)
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Fournitures non stockables ( eau, énergie)'";
           global $Achats3; 
          $Achats3 = $Connexion->sql_query($Query);
        //Fourniture d'entretien et de petit équipement
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Fourniture entretien et de petit équipement'";
          global $Achats4; 
         $Achats4 = $Connexion->sql_query($Query);
        //ASP
        $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'ASP'";
         global $Achats5;
         $Achats5 = $Connexion->sql_query($Query);
        //Autres fournitures 
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Autres fournitures' ";
           global $Achats6;
           $Achats6= $Connexion->sql_query($Query);
        
        //61-SERVICES EXTERIEURS
        $Query="SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte 
            WHERE compte.LibelleCompteResultat='Sous traitance générale' OR compte.LibelleCompteResultat='Locations' 
            OR compte.LibelleCompteResultat='Entretien et réparation' OR compte.LibelleCompteResultat='Assurance' 
            OR compte.LibelleCompteResultat='Documentation' OR compte.LibelleCompteResultat='Divers'";
        global $ServicesExterieurs;
        $ServicesExterieurs= $Connexion->sql_query($Query);
        //Sous traitance générale
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Sous traitance générale'";
          global $ServicesExterieurs1;
           $ServicesExterieurs1= $Connexion->sql_query($Query);
        //Locations
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Locations'";
              global $ServicesExterieurs2;
            $ServicesExterieurs2= $Connexion->sql_query($Query);
        //Entretien et réparation
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Entretien et réparation'";
            global  $ServicesExterieurs3;
              $ServicesExterieurs3= $Connexion->sql_query($Query);
        //Assurance
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Assurance'";
          global    $ServicesExterieurs4;
            $ServicesExterieurs4= $Connexion->sql_query($Query);
        //Documentation
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Documentation'";
            global  $ServicesExterieurs5;
        $ServicesExterieurs5= $Connexion->sql_query($Query);
        //Divers
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Divers'";
           global   $ServicesExterieurs6;
            $ServicesExterieurs6= $Connexion->sql_query($Query);
        
        //62-AUTRES SERVICES EXTERIEURS
        $Query="SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Rémunérations intermédiaires et honoraires' OR compte.LibelleCompteResultat='Publicité, publication' OR compte.LibelleCompteResultat='Déplacements, missions' OR compte.LibelleCompteResultat='Frais postaux et de télécommunications' OR compte.LibelleCompteResultat='Services bancaires, autres'";
           global $AutresServicesExterieurs;
          $AutresServicesExterieurs= $Connexion->sql_query($Query);
        //Rémunérations intermédiaires et honoraires
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Rémunérations intermédiaires et honoraires'";
          global $AutresServicesExterieurs1;
          $AutresServicesExterieurs1= $Connexion->sql_query($Query);
        //Publicité publication
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Publicité, publication'";
              global $AutresServicesExterieurs2;
             $AutresServicesExterieurs2= $Connexion->sql_query($Query);
        //Déplacements missions
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Déplacements missions'";
              global $AutresServicesExterieurs3;
             $AutresServicesExterieurs3= $Connexion->sql_query($Query);
        //Frais postaux et de télécommunications
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Frais postaux et de télécommunications'";
              global $AutresServicesExterieurs4;
             $AutresServicesExterieurs4= $Connexion->sql_query($Query);
        //Services bancaires autres
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Services bancaires autres'";
              global $AutresServicesExterieurs5;
            $AutresServicesExterieurs5= $Connexion->sql_query($Query);
            
        //63- Impôts et taxes
           $Query="SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Impôts et taxes sur rémunération' OR compte.LibelleCompteResultat='Autres impôts et taxes'";
            global   $ImpôtsTaxes;
             $ImpôtsTaxes= $Connexion->sql_query($Query);
        //Impôts et taxes sur rémunération
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Impôts et taxes sur rémunération'";
          global   $ImpôtsTaxes1;
             $ImpôtsTaxes1= $Connexion->sql_query($Query);
        //Autres impôts et taxes
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Autres impôts et taxes'";
             global   $ImpôtsTaxes2;
          $ImpôtsTaxes2= $Connexion->sql_query($Query);
        
        //64-Charges de personelle
         $Query="SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Rémunération des personnels' OR compte.LibelleCompteResultat='Charges sociales' OR compte.LibelleCompteResultat='Autres charges de personnel'";
          global $ChargePersonnels;
          $ChargePersonnels= $Connexion->sql_query($Query);
        //Rémunération des personnels
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Rémunération des personnels'";
                 global $ChargePersonnels1;
          $ChargePersonnels1= $Connexion->sql_query($Query);
        //Charges sociales
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Charges sociales'";
              global $ChargePersonnels2;
           $ChargePersonnels2= $Connexion->sql_query($Query);
        //Autres charges de personnel
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`='Autres charges de personnel' ";
              global $ChargePersonnels3;
          $ChargePersonnels3= $Connexion->sql_query($Query);

        
        //65-Autres charges de gestion courante
        //Autres charges de gestion courante
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Autres charges de gestion courante'";
          global $AutreChargesDeGestionCourante;
          $AutreChargesDeGestionCourante= $Connexion->sql_query($Query);

        //66-Charges financières	
        //Charges financières	
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Charges financières'";
           global $ChargesFinancières;
        $ChargesFinancières= $Connexion->sql_query($Query);

        //67-Charges exceptionnelles
        //Charges exceptionnelles
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Charges exceptionnelles'";
           global $ChargesExceptionnelles;
           $ChargesExceptionnelles= $Connexion->sql_query($Query);

          //68-Dotations aux amortissements(provisions pour renouvellement)
        //Dotation aux amortissements(provisions pour renouvellement)
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Dotation aux amortissements(provisions pour renouvellement)'";
          global $Dotations;
          $Dotations= $Connexion->sql_query($Query);

        //TOTAL DES 
        $Query="SELECT SUM(ecriture.Montant)as MontantEcriture
from ecriture
inner JOIN compte
ON ecriture.ID_Compte = compte.ID_Compte
WHERE compte.LibelleCompteResultat='Achat études et de prestations de services' OR compte.LibelleCompteResultat='Achats non stockés de matières et de fournitures' OR compte.LibelleCompteResultat='Fournitures non stockables ( eau, énergie)'  OR compte.LibelleCompteResultat='Fourniture entretien et de petit équipement' OR compte.LibelleCompteResultat='ASP' OR compte.LibelleCompteResultat='Autres fournitures' OR compte.LibelleCompteResultat='Sous traitance générale' OR compte.LibelleCompteResultat='Locations'         OR compte.LibelleCompteResultat='Entretien et réparation' OR compte.LibelleCompteResultat='Assurance'     OR compte.LibelleCompteResultat='Documentation' OR compte.LibelleCompteResultat='Divers'OR compte.LibelleCompteResultat='Rémunérations intermédiaires et honoraires' OR compte.LibelleCompteResultat='Publicité, publication' OR compte.LibelleCompteResultat='Déplacements, missions' OR compte.LibelleCompteResultat='Frais postaux et de télécommunications' OR compte.LibelleCompteResultat='Services bancaires, autres' OR compte.LibelleCompteResultat='Impôts et taxes sur rémunération' OR compte.LibelleCompteResultat='Autres impôts et taxes' OR compte.LibelleCompteResultat='Rémunération des personnels' OR compte.LibelleCompteResultat='Charges sociales' OR compte.LibelleCompteResultat='Autres charges de personnel' OR compte.LibelleCompteResultat= 'Autres charges de gestion courante' OR compte.LibelleCompteResultat= 'Charges financières' OR  compte.LibelleCompteResultat= 'Charges exceptionnelles' or compte.LibelleCompteResultat= 'Dotations aux amortissements(provisions pour renouvellement)'";
        global $TCP;
         $TCP= $Connexion->sql_query($Query);
        
        
        //86- Emplois des contributions volontaires en nature
        $Query="SELECT SUM(ecriture.Montant)as MontantEcriture,piece.ID_Facture  from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Bénévolat' OR compte.LibelleCompteResultat='Dons en nature' OR compte.LibelleCompteResultat='Mise à disposition gratuite de biens et prestations'  AND piece.ID_Facture is not null";
        global $Volontaire1;
        $Volontaire1= $Connexion->sql_query($Query);
        //Bénévolat
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture, piece.ID_Facture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Bénévolat' AND piece.ID_Facture is not null";
          global $Benevolat1;
          $Benevolat1= $Connexion->sql_query($Query);
        //Dons en nature
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture, piece.ID_Facture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Dons en nature' AND piece.ID_Facture is not null";
          global $DonsNature1;
          $DonsNature1= $Connexion->sql_query($Query);

        //Mise à disposition gratuite de biens et prestations
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture, piece.ID_Facture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Mise à disposition gratuite de biens et prestations' AND piece.ID_Facture is not null";
          global $Disposition1;
         $Disposition1= $Connexion->sql_query($Query);
         
         //AUTRES
                  $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Piece left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.' and piece.ID_Facture is NOT null";
         global $Autres1;
          $Autres1= $Connexion->sql_query($Query);
         
         //TOTAL CHARGES
         $Query="SELECT SUM(ecriture.Montant)as MontantEcriture
from piece
inner JOIN ecriture
on ecriture.ID_Piece = piece.ID_Piece
LEFT JOIN compte
ON ecriture.ID_Compte = compte.ID_Compte
WHERE compte.LibelleCompteResultat='Achat études et de prestations de services' OR compte.LibelleCompteResultat='Achats non stockés de matières et de fournitures'
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
OR compte.LibelleCompteResultat='Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.'
AND piece.ID_Facture is not null
  ";
         global  $TOTALCHARGES;
        $TOTALCHARGES= $Connexion->sql_query($Query);




         //70-Vente de produis finis prestations de services marchandises
        $Query= "SELECT SUM(ecriture.Montant)as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Prestations de services' OR compte.LibelleCompteResultat='Vente de marchandises' OR compte.LibelleCompteResultat='Produits des activités annexes'";
         global $Vente;
          $Vente= $Connexion->sql_query($Query);
        //Prestations de services
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Prestations de services'";
          global $Vente1;
          $Vente1= $Connexion->sql_query($Query);

        //Vente de marchandises
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Vente de marchandises'";
           global $Vente2;
         $Vente2= $Connexion->sql_query($Query);
        //Produits des activités annexes
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Produits des activités annexes'";
           global $Vente3;
          $Vente3= $Connexion->sql_query($Query);
      
         //74-Subventions d'exploitation
         $Query="SELECT SUM(ecriture.Montant)as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Etat: CNDS' OR compte.LibelleCompteResultat='Régions(s)' OR compte.LibelleCompteResultat='Département(s):' OR compte.LibelleCompteResultat='Commune(s):' OR compte.LibelleCompteResultat='Subvention communauté de communes et agglomération' OR compte.LibelleCompteResultat='Organismes sociaux ( à détailler):' OR compte.LibelleCompteResultat='Fédération' OR compte.LibelleCompteResultat='Fonds européens' OR compte.LibelleCompteResultat='Autres recettes (précisez)' ";
           global $Subvention;
            $Subvention= $Connexion->sql_query($Query);
          //Etat: CNDS
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Etat: CNDS'";
           global $Subvention1;
            $Subvention1= $Connexion->sql_query($Query);
        //Régions(s)
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Régions(s)'";
           global $Subvention2;
           $Subvention2= $Connexion->sql_query($Query);
        //Département(s):
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Département(s):'";
          global $Subvention3;
           $Subvention3= $Connexion->sql_query($Query);
        //Commune(s):
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Commune(s):'";
          global $Subvention4;
           $Subvention4= $Connexion->sql_query($Query);
        //subvention communauté de communes et agglomération
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Subvention communauté de communes et agglomération'";
          global $Subvention5;
           $Subvention5= $Connexion->sql_query($Query);
        //Organismes sociaux ( à détailler):
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Organismes sociaux ( à détailler):'";
          global $Subvention6;
           $Subvention6= $Connexion->sql_query($Query);
        //Fédération
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Fédération'";
          global $Subvention7;
           $Subvention7= $Connexion->sql_query($Query);
        //Fonds européens
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Fonds européens'";
         global $Subvention8;
         $Subvention8= $Connexion->sql_query($Query);
        //Autres recettes (précisez)
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Autres recettes (précisez)'";
         global $Subvention9;
         $Subvention9= $Connexion->sql_query($Query);
        
        
        //75- Autres produits de gestion courante
        $Query="SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Dont cotisations' OR compte.LibelleCompteResultat='Autres produits de gestion courante'";
        global $AutresProduits;
        $AutresProduits = $Connexion->sql_query($Query);

        //Autres produits de gestion courante
         $Query= "SELECT sum(ecriture.Montant)  as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Autres produits de gestion courante'";
         global $AutresProduits1;
          $AutresProduits1= $Connexion->sql_query($Query);
        //Dont cotisations
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Dont cotisations'";
           global $AutresProduits2;
           $AutresProduits2= $Connexion->sql_query($Query);
        
        //76 - Produits financiers
        //Produits financiers
           $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Produits financiers'";
             global $ProduitsFinanciers;
           $ProduitsFinanciers= $Connexion->sql_query($Query);
           
        //77 - Produits exceptionnels
        //Produits exceptionnels
           $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Produits exceptionnels'";
             global $ProduitsExceptionnels;
             $ProduitsExceptionnels= $Connexion->sql_query($Query);
           
        //78-Reprises sur amortissements et provisions
        //Reprises sur amortissements et provisions
        
           $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Reprises sur amortissements et provisions'";
             global $Reprises;
             $Reprises= $Connexion->sql_query($Query);
        //79-Transfert de charges
        //Transfert de charges
        
           $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'transfert de charges'";
             global $Transfert;
             $Transfert= $Connexion->sql_query($Query);
        //TOTAL DES PRODUITS PREVISIONNELLES
        $Query= "SELECT SUM(ecriture.Montant)as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Etat: CNDS' OR compte.LibelleCompteResultat='Régions(s)' OR compte.LibelleCompteResultat='Département(s):' OR compte.LibelleCompteResultat='Commune(s):' OR compte.LibelleCompteResultat='Subvention communauté de communes et agglomération' OR compte.LibelleCompteResultat='Organismes sociaux ( à détailler):' OR compte.LibelleCompteResultat='Fédération' OR compte.LibelleCompteResultat='Fonds européens' OR compte.LibelleCompteResultat='Autres recettes (précisez)' OR compte.LibelleCompteResultat='Prestations de services' OR compte.LibelleCompteResultat='Vente de marchandises' OR compte.LibelleCompteResultat='Produits des activités annexes' OR compte.LibelleCompteResultat='Dont cotisations' OR compte.LibelleCompteResultat='Autres produits de gestion courante' OR compte.LibelleCompteResultat='Produits financiers' OR compte.LibelleCompteResultat='Produits exceptionnels'OR compte.LibelleCompteResultat='Reprises sur amortissements et provisions'OR compte.LibelleCompteResultat='transfert de charges'";
        global $TPP;
         $TPP= $Connexion->sql_query($Query);
         
         
        //87-Contributions volontaires en nature
        $Query="SELECT SUM(ecriture.Montant)as MontantEcriture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Bénévolat' OR compte.LibelleCompteResultat='Dons en nature' OR compte.LibelleCompteResultat='Mise à disposition gratuite de biens et prestations' AND piece.ID_Payement is not null";
        global $Volontaire2;
        $Volontaire2= $Connexion->sql_query($Query);
        //Dons en nature
        $Query= "SELECT sum(ecriture.Montant) as MontantEcriture,  piece.ID_Payement from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Dons en nature' AND piece.ID_Payement is not null";
          global $DonsNature2;
         $DonsNature2= $Connexion->sql_query($Query);
        //Mise à disposition gratuite de biens et prestation
              $Query= "SELECT sum(ecriture.Montant) as MontantEcriture,  piece.ID_Payement from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Mise à disposition gratuite de biens et prestations' AND piece.ID_Payement is not null";
              global $Disposition2;
              $Disposition2= $Connexion->sql_query($Query);        
//Bénévolat 
             $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Bénévolat' AND piece.ID_Payement is not null";
            global $Benevolat2;
             $Benevolat2= $Connexion->sql_query($Query);
             
             
         //Autres 
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Piece left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.' and piece.ID_Payement  is NOT null";
         global $Autres2;
          $Autres2= $Connexion->sql_query($Query);
        
        //TOTAL
                  $Query= "SELECT SUM(ecriture.Montant)as MontantEcriture, piece.ID_Payement
from piece
inner JOIN ecriture
on ecriture.ID_Piece = piece.ID_Piece
LEFT JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Etat: CNDS' OR compte.LibelleCompteResultat='Régions(s)' OR compte.LibelleCompteResultat='Département(s):' OR compte.LibelleCompteResultat='Commune(s):' OR compte.LibelleCompteResultat='Subvention communauté de communes et agglomération' OR compte.LibelleCompteResultat='Organismes sociaux ( à détailler):' OR compte.LibelleCompteResultat='Fédération' OR compte.LibelleCompteResultat='Fonds européens' OR compte.LibelleCompteResultat='Autres recettes (précisez)' OR compte.LibelleCompteResultat='Prestations de services' OR compte.LibelleCompteResultat='Vente de marchandises' OR compte.LibelleCompteResultat='Produits des activités annexes' OR compte.LibelleCompteResultat='Dont cotisations' OR compte.LibelleCompteResultat='Autres produits de gestion courante' OR compte.LibelleCompteResultat='Produits financiers' OR compte.LibelleCompteResultat='Produits exceptionnels'OR compte.LibelleCompteResultat='Reprises sur amortissements et provisions'OR compte.LibelleCompteResultat='transfert de charges' OR compte.LibelleCompteResultat='Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.' AND piece.ID_Payement is not null
";
        global $TOTALPRODUITS;
         $TOTALPRODUITS= $Connexion->sql_query($Query);   

         

    }
    
    public static function save() {
            
             global $Ecriture;
        $Ecriture= new MyORM\Ecriture;
        
        global $Connexion;
        $DateEcriture=$_POST['DateEcriture'];
        
        

   
        global $Connexion;
        $Query="SELECT * FROM Ecriture";
        global $ResultatEcriture;
        $ResultatEcriture = $Connexion->sql_query($Query);
       //60-ACHATS 
       $Query= "SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte 
WHERE compte.LibelleCompteResultat='Achat études et de prestations de services' OR compte.LibelleCompteResultat='Achats non stockés de matières et de fournitures' OR compte.LibelleCompteResultat='Fournitures non stockables ( eau, énergie)'  OR compte.LibelleCompteResultat='Fourniture entretien et de petit équipement' OR compte.LibelleCompteResultat='ASP' OR compte.LibelleCompteResultat='Autres fournitures' and ecriture.Date='".$DateEcriture."'";
       global $Achats;
       $Achats = $Connexion->sql_query($Query);
       /*
        echo "<pre>";
       print_r($Achats);
       echo "</pre>";
      */
       
       
        //Achat des d'études et de prestations de services
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte"
                  . " where `LibelleCompteResultat`= 'Achat études et de prestations de services' and ecriture.Date='$DateEcriture'";
          global $Achats1;
            $Achats1 = $Connexion->sql_query($Query);
        //Achats non stockés de matières et de fournitures
         $Query= "SELECT sum(ecriture.Montant)  as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Achats non stockés de matières et de fournitures' and ecriture.Date='$DateEcriture'";
          global $Achats2;
          $Achats2 = $Connexion->sql_query($Query);
        //Fournitures non stockables ( eau énergie)
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Fournitures non stockables ( eau, énergie)' and ecriture.Date='$DateEcriture'";
           global $Achats3; 
          $Achats3 = $Connexion->sql_query($Query);
        //Fourniture d'entretien et de petit équipement
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Fourniture entretien et de petit équipement' and ecriture.Date='$DateEcriture'";
          global $Achats4; 
         $Achats4 = $Connexion->sql_query($Query);
        //ASP
        $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'ASP' and ecriture.Date='$DateEcriture'";
         global $Achats5;
         $Achats5 = $Connexion->sql_query($Query);
        //Autres fournitures 
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Autres fournitures' and ecriture.Date='$DateEcriture' ";
           global $Achats6;
           $Achats6= $Connexion->sql_query($Query);
        
        //61-SERVICES EXTERIEURS
        $Query="SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte 
            WHERE compte.LibelleCompteResultat='Sous traitance générale' OR compte.LibelleCompteResultat='Locations' 
            OR compte.LibelleCompteResultat='Entretien et réparation' OR compte.LibelleCompteResultat='Assurance' 
            OR compte.LibelleCompteResultat='Documentation' OR compte.LibelleCompteResultat='Divers' and ecriture.Date='$DateEcriture'";
        global $ServicesExterieurs;
        $ServicesExterieurs= $Connexion->sql_query($Query);
        //Sous traitance générale
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Sous traitance générale' and ecriture.Date='$DateEcriture'";
          global $ServicesExterieurs1;
           $ServicesExterieurs1= $Connexion->sql_query($Query);
        //Locations
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Locations' and ecriture.Date='$DateEcriture'";
              global $ServicesExterieurs2;
            $ServicesExterieurs2= $Connexion->sql_query($Query);
        //Entretien et réparation
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Entretien et réparation' and ecriture.Date='$DateEcriture'";
            global  $ServicesExterieurs3;
              $ServicesExterieurs3= $Connexion->sql_query($Query);
        //Assurance
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Assurance' and ecriture.Date='$DateEcriture'";
          global    $ServicesExterieurs4;
            $ServicesExterieurs4= $Connexion->sql_query($Query);
        //Documentation
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Documentation' and ecriture.Date='$DateEcriture'";
            global  $ServicesExterieurs5;
        $ServicesExterieurs5= $Connexion->sql_query($Query);
        //Divers
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Divers' and ecriture.Date='$DateEcriture'";
           global   $ServicesExterieurs6;
            $ServicesExterieurs6= $Connexion->sql_query($Query);
        
        //62-AUTRES SERVICES EXTERIEURS
        $Query="SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Rémunérations intermédiaires et honoraires' OR compte.LibelleCompteResultat='Publicité, publication' OR compte.LibelleCompteResultat='Déplacements, missions' OR compte.LibelleCompteResultat='Frais postaux et de télécommunications' OR compte.LibelleCompteResultat='Services bancaires, autres' and ecriture.Date='$DateEcriture'";
           global $AutresServicesExterieurs;
          $AutresServicesExterieurs= $Connexion->sql_query($Query);
        //Rémunérations intermédiaires et honoraires
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Rémunérations intermédiaires et honoraires' and ecriture.Date='$DateEcriture'";
          global $AutresServicesExterieurs1;
          $AutresServicesExterieurs1= $Connexion->sql_query($Query);
        //Publicité publication
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Publicité, publication' and ecriture.Date='$DateEcriture'";
              global $AutresServicesExterieurs2;
             $AutresServicesExterieurs2= $Connexion->sql_query($Query);
        //Déplacements missions
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Déplacements missions' and ecriture.Date='$DateEcriture'";
              global $AutresServicesExterieurs3;
             $AutresServicesExterieurs3= $Connexion->sql_query($Query);
        //Frais postaux et de télécommunications
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Frais postaux et de télécommunications'and ecriture.Date='$DateEcriture'";
              global $AutresServicesExterieurs4;
             $AutresServicesExterieurs4= $Connexion->sql_query($Query);
        //Services bancaires autres
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Services bancaires autres' and ecriture.Date='$DateEcriture'";
              global $AutresServicesExterieurs5;
            $AutresServicesExterieurs5= $Connexion->sql_query($Query);
            
        //63- Impôts et taxes
           $Query="SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Impôts et taxes sur rémunération' OR compte.LibelleCompteResultat='Autres impôts et taxes' and ecriture.Date='$DateEcriture'";
            global   $ImpôtsTaxes;
             $ImpôtsTaxes= $Connexion->sql_query($Query);
        //Impôts et taxes sur rémunération
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Impôts et taxes sur rémunération' and ecriture.Date='$DateEcriture'";
          global   $ImpôtsTaxes1;
             $ImpôtsTaxes1= $Connexion->sql_query($Query);
        //Autres impôts et taxes
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Autres impôts et taxes' and ecriture.Date='$DateEcriture'";
             global   $ImpôtsTaxes2;
          $ImpôtsTaxes2= $Connexion->sql_query($Query);
        
        //64-Charges de personelle
         $Query="SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Rémunération des personnels' OR compte.LibelleCompteResultat='Charges sociales' OR compte.LibelleCompteResultat='Autres charges de personnel' and ecriture.Date='$DateEcriture'";
          global $ChargePersonnels;
          $ChargePersonnels= $Connexion->sql_query($Query);
        //Rémunération des personnels
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Rémunération des personnels' and ecriture.Date='$DateEcriture'";
                 global $ChargePersonnels1;
          $ChargePersonnels1= $Connexion->sql_query($Query);
        //Charges sociales
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Charges sociales' and ecriture.Date='$DateEcriture'";
              global $ChargePersonnels2;
           $ChargePersonnels2= $Connexion->sql_query($Query);
        //Autres charges de personnel
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`='Autres charges de personnel'and ecriture.Date='$DateEcriture'";
              global $ChargePersonnels3;
          $ChargePersonnels3= $Connexion->sql_query($Query);

        
        //65-Autres charges de gestion courante
        //Autres charges de gestion courante
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Autres charges de gestion courante'and ecriture.Date='$DateEcriture'";
          global $AutreChargesDeGestionCourante;
          $AutreChargesDeGestionCourante= $Connexion->sql_query($Query);

        //66-Charges financières	
        //Charges financières	
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Charges financières'and ecriture.Date='$DateEcriture'";
           global $ChargesFinancières;
        $ChargesFinancières= $Connexion->sql_query($Query);

        //67-Charges exceptionnelles
        //Charges exceptionnelles
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Charges exceptionnelles'and ecriture.Date='$DateEcriture'";
           global $ChargesExceptionnelles;
           $ChargesExceptionnelles= $Connexion->sql_query($Query);

          //68-Dotations aux amortissements(provisions pour renouvellement)
        //Dotation aux amortissements(provisions pour renouvellement)
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Dotation aux amortissements(provisions pour renouvellement)' and ecriture.Date='$DateEcriture'";
          global $Dotations;
          $Dotations= $Connexion->sql_query($Query);

        //TOTAL DES 
        $Query="SELECT SUM(ecriture.Montant)as MontantEcriture
from ecriture
inner JOIN compte
ON ecriture.ID_Compte = compte.ID_Compte
WHERE compte.LibelleCompteResultat='Achat études et de prestations de services' OR compte.LibelleCompteResultat='Achats non stockés de matières et de fournitures' OR compte.LibelleCompteResultat='Fournitures non stockables ( eau, énergie)'  OR compte.LibelleCompteResultat='Fourniture entretien et de petit équipement' OR compte.LibelleCompteResultat='ASP' OR compte.LibelleCompteResultat='Autres fournitures' OR compte.LibelleCompteResultat='Sous traitance générale' OR compte.LibelleCompteResultat='Locations'         OR compte.LibelleCompteResultat='Entretien et réparation' OR compte.LibelleCompteResultat='Assurance'     OR compte.LibelleCompteResultat='Documentation' OR compte.LibelleCompteResultat='Divers'OR compte.LibelleCompteResultat='Rémunérations intermédiaires et honoraires' OR compte.LibelleCompteResultat='Publicité, publication' OR compte.LibelleCompteResultat='Déplacements, missions' OR compte.LibelleCompteResultat='Frais postaux et de télécommunications' OR compte.LibelleCompteResultat='Services bancaires, autres' OR compte.LibelleCompteResultat='Impôts et taxes sur rémunération' OR compte.LibelleCompteResultat='Autres impôts et taxes' OR compte.LibelleCompteResultat='Rémunération des personnels' OR compte.LibelleCompteResultat='Charges sociales' OR compte.LibelleCompteResultat='Autres charges de personnel' OR compte.LibelleCompteResultat= 'Autres charges de gestion courante' OR compte.LibelleCompteResultat= 'Charges financières' OR  compte.LibelleCompteResultat= 'Charges exceptionnelles' or compte.LibelleCompteResultat= 'Dotations aux amortissements(provisions pour renouvellement)'and ecriture.Date='$DateEcriture'";
        global $TCP;
         $TCP= $Connexion->sql_query($Query);
        
        
        //86- Emplois des contributions volontaires en nature
        $Query="SELECT SUM(ecriture.Montant)as MontantEcriture,piece.ID_Facture  from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Bénévolat' OR compte.LibelleCompteResultat='Dons en nature' OR compte.LibelleCompteResultat='Mise à disposition gratuite de biens et prestations'  AND piece.ID_Facture is not null and ecriture.Date='$DateEcriture'";
        global $Volontaire1;
        $Volontaire1= $Connexion->sql_query($Query);
        //Bénévolat
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture, piece.ID_Facture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Bénévolat' AND piece.ID_Facture is not null and ecriture.Date='$DateEcriture'";
          global $Benevolat1;
          $Benevolat1= $Connexion->sql_query($Query);
        //Dons en nature
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture, piece.ID_Facture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Dons en nature' AND piece.ID_Facture is not null and ecriture.Date='$DateEcriture'";
          global $DonsNature1;
          $DonsNature1= $Connexion->sql_query($Query);

        //Mise à disposition gratuite de biens et prestations
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture, piece.ID_Facture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Mise à disposition gratuite de biens et prestations' AND piece.ID_Facture is not null and ecriture.Date='$DateEcriture'";
          global $Disposition1;
         $Disposition1= $Connexion->sql_query($Query);
         
         //AUTRES
                  $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Piece left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.' and piece.ID_Facture is NOT null and ecriture.Date='$DateEcriture'";
         global $Autres1;
          $Autres1= $Connexion->sql_query($Query);
         
         //TOTAL CHARGES
         $Query="SELECT SUM(ecriture.Montant)as MontantEcriture
from piece
inner JOIN ecriture
on ecriture.ID_Piece = piece.ID_Piece
LEFT JOIN compte
ON ecriture.ID_Compte = compte.ID_Compte
WHERE compte.LibelleCompteResultat='Achat études et de prestations de services' OR compte.LibelleCompteResultat='Achats non stockés de matières et de fournitures'
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
OR compte.LibelleCompteResultat='Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.'
AND piece.ID_Facture is not null and ecriture.Date='$DateEcriture'
  ";
         global  $TOTALCHARGES;
        $TOTALCHARGES= $Connexion->sql_query($Query);




         //70-Vente de produis finis prestations de services marchandises
        $Query= "SELECT SUM(ecriture.Montant)as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Prestations de services' OR compte.LibelleCompteResultat='Vente de marchandises' OR compte.LibelleCompteResultat='Produits des activités annexes'and ecriture.Date='$DateEcriture'";
         global $Vente;
          $Vente= $Connexion->sql_query($Query);
        //Prestations de services
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Prestations de services' and ecriture.Date='$DateEcriture'";
          global $Vente1;
          $Vente1= $Connexion->sql_query($Query);

        //Vente de marchandises
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Vente de marchandises'and ecriture.Date='$DateEcriture'";
           global $Vente2;
         $Vente2= $Connexion->sql_query($Query);
        //Produits des activités annexes
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Produits des activités annexes' and ecriture.Date='$DateEcriture'";
           global $Vente3;
          $Vente3= $Connexion->sql_query($Query);
      
         //74-Subventions d'exploitation
         $Query="SELECT SUM(ecriture.Montant)as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Etat: CNDS' OR compte.LibelleCompteResultat='Régions(s)' OR compte.LibelleCompteResultat='Département(s):' OR compte.LibelleCompteResultat='Commune(s):' OR compte.LibelleCompteResultat='Subvention communauté de communes et agglomération' OR compte.LibelleCompteResultat='Organismes sociaux ( à détailler):' OR compte.LibelleCompteResultat='Fédération' OR compte.LibelleCompteResultat='Fonds européens' OR compte.LibelleCompteResultat='Autres recettes (précisez)'and ecriture.Date='$DateEcriture' ";
           global $Subvention;
            $Subvention= $Connexion->sql_query($Query);
          //Etat: CNDS
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Etat: CNDS' and ecriture.Date='$DateEcriture'";
           global $Subvention1;
            $Subvention1= $Connexion->sql_query($Query);
        //Régions(s)
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Régions(s)' and ecriture.Date='$DateEcriture'";
           global $Subvention2;
           $Subvention2= $Connexion->sql_query($Query);
        //Département(s):
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Département(s):'and ecriture.Date='$DateEcriture'";
          global $Subvention3;
           $Subvention3= $Connexion->sql_query($Query);
        //Commune(s):
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Commune(s):'and ecriture.Date='$DateEcriture'";
          global $Subvention4;
           $Subvention4= $Connexion->sql_query($Query);
        //subvention communauté de communes et agglomération
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Subvention communauté de communes et agglomération'and ecriture.Date='$DateEcriture'";
          global $Subvention5;
           $Subvention5= $Connexion->sql_query($Query);
        //Organismes sociaux ( à détailler):
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Organismes sociaux ( à détailler):'and ecriture.Date='$DateEcriture'";
          global $Subvention6;
           $Subvention6= $Connexion->sql_query($Query);
        //Fédération
          $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Fédération'and ecriture.Date='$DateEcriture'";
          global $Subvention7;
           $Subvention7= $Connexion->sql_query($Query);
        //Fonds européens
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Fonds européens' and ecriture.Date='$DateEcriture'";
         global $Subvention8;
         $Subvention8= $Connexion->sql_query($Query);
        //Autres recettes (précisez)
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Autres recettes (précisez)' and ecriture.Date='$DateEcriture'";
         global $Subvention9;
         $Subvention9= $Connexion->sql_query($Query);
        
        
        //75- Autres produits de gestion courante
        $Query="SELECT SUM(ecriture.Montant) as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Dont cotisations' OR compte.LibelleCompteResultat='Autres produits de gestion courante' and ecriture.Date='$DateEcriture'";
        global $AutresProduits;
        $AutresProduits = $Connexion->sql_query($Query);

        //Autres produits de gestion courante
         $Query= "SELECT sum(ecriture.Montant)  as MontantEcriture  from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Autres produits de gestion courante' and ecriture.Date='$DateEcriture'";
         global $AutresProduits1;
          $AutresProduits1= $Connexion->sql_query($Query);
        //Dont cotisations
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Dont cotisations' and ecriture.Date='$DateEcriture'";
           global $AutresProduits2;
           $AutresProduits2= $Connexion->sql_query($Query);
        
        //76 - Produits financiers
        //Produits financiers
           $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Produits financiers' and ecriture.Date='$DateEcriture'";
             global $ProduitsFinanciers;
           $ProduitsFinanciers= $Connexion->sql_query($Query);
           
        //77 - Produits exceptionnels
        //Produits exceptionnels
           $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Produits exceptionnels' and ecriture.Date='$DateEcriture'";
             global $ProduitsExceptionnels;
             $ProduitsExceptionnels= $Connexion->sql_query($Query);
           
        //78-Reprises sur amortissements et provisions
        //Reprises sur amortissements et provisions
        
           $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Reprises sur amortissements et provisions' and ecriture.Date='$DateEcriture'";
             global $Reprises;
             $Reprises= $Connexion->sql_query($Query);
        //79-Transfert de charges
        //Transfert de charges
        
           $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from ecriture inner join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'transfert de charges' and ecriture.Date='$DateEcriture'";
             global $Transfert;
             $Transfert= $Connexion->sql_query($Query);
        //TOTAL DES PRODUITS PREVISIONNELLES
        $Query= "SELECT SUM(ecriture.Montant)as MontantEcriture from ecriture INNER JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Etat: CNDS' OR compte.LibelleCompteResultat='Régions(s)' OR compte.LibelleCompteResultat='Département(s):' OR compte.LibelleCompteResultat='Commune(s):' OR compte.LibelleCompteResultat='Subvention communauté de communes et agglomération' OR compte.LibelleCompteResultat='Organismes sociaux ( à détailler):' OR compte.LibelleCompteResultat='Fédération' OR compte.LibelleCompteResultat='Fonds européens' OR compte.LibelleCompteResultat='Autres recettes (précisez)' OR compte.LibelleCompteResultat='Prestations de services' OR compte.LibelleCompteResultat='Vente de marchandises' OR compte.LibelleCompteResultat='Produits des activités annexes' OR compte.LibelleCompteResultat='Dont cotisations' OR compte.LibelleCompteResultat='Autres produits de gestion courante' OR compte.LibelleCompteResultat='Produits financiers' OR compte.LibelleCompteResultat='Produits exceptionnels'OR compte.LibelleCompteResultat='Reprises sur amortissements et provisions'OR compte.LibelleCompteResultat='transfert de charges' and ecriture.Date='$DateEcriture'";
        global $TPP;
         $TPP= $Connexion->sql_query($Query);
         
         
        //87-Contributions volontaires en nature
        $Query="SELECT SUM(ecriture.Montant)as MontantEcriture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Bénévolat' OR compte.LibelleCompteResultat='Dons en nature' OR compte.LibelleCompteResultat='Mise à disposition gratuite de biens et prestations' AND piece.ID_Payement is not null and ecriture.Date='$DateEcriture'";
        global $Volontaire2;
        $Volontaire2= $Connexion->sql_query($Query);
        //Dons en nature
        $Query= "SELECT sum(ecriture.Montant) as MontantEcriture,  piece.ID_Payement from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Dons en nature' AND piece.ID_Payement is not null and ecriture.Date='$DateEcriture'";
          global $DonsNature2;
         $DonsNature2= $Connexion->sql_query($Query);
        //Mise à disposition gratuite de biens et prestation
              $Query= "SELECT sum(ecriture.Montant) as MontantEcriture,  piece.ID_Payement from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Mise à disposition gratuite de biens et prestations' AND piece.ID_Payement is not null and ecriture.Date='$DateEcriture'";
              global $Disposition2;
              $Disposition2= $Connexion->sql_query($Query);        
//Bénévolat 
             $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Ecriture left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Bénévolat' AND piece.ID_Payement is not null and ecriture.Date='$DateEcriture'";
            global $Benevolat2;
             $Benevolat2= $Connexion->sql_query($Query);
             
             
         //Autres 
         $Query= "SELECT sum(ecriture.Montant) as MontantEcriture from piece inner join ecriture on piece.ID_Piece = ecriture.ID_Piece left join compte on ecriture.ID_Compte = compte.ID_Compte where `LibelleCompteResultat`= 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.' and piece.ID_Payement  is NOT null and ecriture.Date='$DateEcriture'";
         global $Autres2;
          $Autres2= $Connexion->sql_query($Query);
        
        //TOTAL
            $Query= "SELECT SUM(ecriture.Montant)as MontantEcriture, piece.ID_Payement
from piece
inner JOIN ecriture
on ecriture.ID_Piece = piece.ID_Piece
LEFT JOIN compte ON ecriture.ID_Compte = compte.ID_Compte WHERE compte.LibelleCompteResultat='Etat: CNDS' OR compte.LibelleCompteResultat='Régions(s)' OR compte.LibelleCompteResultat='Département(s):' OR compte.LibelleCompteResultat='Commune(s):' OR compte.LibelleCompteResultat='Subvention communauté de communes et agglomération' OR compte.LibelleCompteResultat='Organismes sociaux ( à détailler):' OR compte.LibelleCompteResultat='Fédération' OR compte.LibelleCompteResultat='Fonds européens' OR compte.LibelleCompteResultat='Autres recettes (précisez)' OR compte.LibelleCompteResultat='Prestations de services' OR compte.LibelleCompteResultat='Vente de marchandises' OR compte.LibelleCompteResultat='Produits des activités annexes' OR compte.LibelleCompteResultat='Dont cotisations' OR compte.LibelleCompteResultat='Autres produits de gestion courante' OR compte.LibelleCompteResultat='Produits financiers' OR compte.LibelleCompteResultat='Produits exceptionnels'OR compte.LibelleCompteResultat='Reprises sur amortissements et provisions'OR compte.LibelleCompteResultat='transfert de charges' OR compte.LibelleCompteResultat='Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.' AND piece.ID_Payement is not null and ecriture.Date='$DateEcriture'
";
        global $TOTALPRODUITS;
         $TOTALPRODUITS= $Connexion->sql_query($Query);   
         
    }
}