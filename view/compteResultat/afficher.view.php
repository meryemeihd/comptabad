<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<form method='post' action='compteResultat/afficher'>
    <center> <h1> Visualisation du compte résultat </h1> </center> ";
   

echo "<table border>"
. "<tr> "
        . "<th> Depenses </th>"
        . "<th> Montant </th>"
       . "<th> Recette </th>"
       . "<th> Montant </th>"
        . "</tr>"
        

        
        //60-ACHATS ET 70-Vente de produits finis, prestations de services, marchandises
        . "<tr>"
        . "<td  bgcolor=#7EE7EE>  60-Achats </td>"
        . "<td  bgcolor=#7EE7EE> ";/* if($Achats){echo 'f';} else {echo '0';}*/ echo "  </td>"
      . "<td  bgcolor=#7EE7EE> 70-Vente de produis finis, prestations de services, marchandises </td>"
      . "<td  bgcolor=#7EE7EE> ";/*if($Vente){echo 'f';} else {echo '0';} */ echo "  </td>"
        . "</tr>";
  /*
echo "</tr>"
        . "<tr>"
        . "<td > Achat des d'études et de prestations de services </td>"
        . "<td ></td>"
       . "<td>Prestations de services </td>"
       . "<td > </td>"
        . "</tr>";
   * 
   */



	
  echo   "<tr>"
        . "<td > Achat des études et de prestations de services </td>"
        . "<td > "; if($Achats1){echo 'f';} else {echo '0';} echo " </td>"
          . "<td>Prestations de services</td>"
         . "<td> ";if($Vente1){echo 'f';} else {echo '0';} echo " </td>"
        . "</tr>";      

echo "</tr>"
        . "<tr>"
        . "<td > Achats non stockés de matières et de fournitures </td>"
        . "<td >  "; if($Achats2){echo 'f';} else {echo '0';} echo " </td>"
       . "<td>Vente de marchandises</td>"
       . "<td >  "; if($Vente2){echo 'f';} else {echo '0';} echo " </td>"
        . "</tr>";

echo "</tr>"
        . "<tr>"
        . "<td > Fournitures non stockables ( eau, énergie) </td>"
        . "<td >  "; if($Achats3){echo 'f';} else {echo '0';} echo "</td>"
       . "<td>Produits des activités annexes</td>"
        . "<td >  "; if($Vente3){echo 'f';} else {echo '0';} echo "</td>"
        . "</tr>";



echo "</tr>"
        . "<tr>"
        . "<td >Fourniture d'entretien et de petit équipement </td>"
        . "<td >  "; if($Achats4){echo 'f';} else {echo '0';} echo " </td>"
       . "<td></td>"
       . "<td > </td>"
        . "</tr>";



echo "</tr>"
        . "<tr>"
        . "<td >ASP</td>"
        . "<td >  "; if($Achats5){echo 'f';} else {echo '0';} echo "</td>"
        . "<td></td>"
        . "<td > </td>"
        . "</tr>";


echo "</tr>"
        . "<tr>"
        . "<td >Autres fournitures</td>"
        . "<td >  "; if($Achats6){echo 'f';} else {echo '0';} echo "</td>"
        . "<td></td>"
        . "<td > </td>"
        . "</tr>";



//61-SERVICES EXTERIEURS ET 74- Subventions d’exploitation
       echo  "<tr>"
        . "<td bgcolor=#7EE7EE>61-Services extérieurs </td>"
        . "<td bgcolor=#7EE7EE>//Somme 61 </td>"
      . "<td bgcolor=#7EE7EE> 74-Subventions d'exploitation </td>"
       . "<td bgcolor=#7EE7EE>//SOMME 74</td>"
        . "</tr>";
       

              echo  "<tr>"
        . "<td > Sous traitance générale </td>"
        . "<td> "; if($ServicesExterieurs1){echo 'f';} else {echo '0';} echo "</td>"
        . "<td>Etat: CNDS </td>"
         . "<td> "; if($Subvention1){echo 'f';} else {echo '0';} echo " </td>"
                      
        . "</tr>";

 

    
          echo  "<tr>"
        . "<td > Locations </td>"
        . "<td > "; if($ServicesExterieurs2){echo 'f';} else {echo '0';} echo " </td>"
        . "<td> </td>"
        . "<td> </td>"
        . "</tr>";

              echo  "<tr>"
        . "<td > Entretien et réparation</td>"
        . "<td >  "; if($ServicesExterieurs3){echo 'f';} else {echo '0';} echo "</td>"
        . "<td>Régions(s) </td>"
         . "<td>  "; if($Subvention2){echo 'f';} else {echo '0';} echo "</td>"
        . "</tr>";

           

             echo  "<tr>"
        . "<td > Assurance </td>"
        . "<td >  "; if($ServicesExterieurs4){echo 'f';} else {echo '0';} echo "</td>"
         . "<td></td>"
         . "<td> </td>"
         . "</tr>";

           

             echo  "<tr>"
        . "<td > Documentation</td>"
        . "<td >  "; if($ServicesExterieurs5){echo 'f';} else {echo '0';} echo "</td>"
         . "<td></td>"
         . "<td> "; if($Subvention3){echo 'f';} else {echo '0';} echo " </td>"             
        . "</tr>";

       

               echo  "<tr>"
        . "<td > Divers</td>"
        . "<td >  "; if($ServicesExterieurs6){echo 'f';} else {echo '0';} echo "</td>"
        . "<td>Département(s): </td>"
         . "<td> "; if($Subvention4){echo 'f';} else {echo '0';} echo " </td>"
        . "</tr>";

 
 //62-AUTRES SERVICES EXTERIEURS 
       
    echo "<tr>"
        . "<td bgcolor=#7EE7EE>62-Autres services exterieurs </td>"
        . "<td bgcolor=#7EE7EE> //62 SOMME  </td>"
       . "<td ></td>"
        . "<td > </td>"
        . "</tr>";
    
         echo  "<tr>"
        . "<td > Rémunérations intermédiaires et honoraires </td>"
        . "<td>  "; if($AutresServicesExterieurs1){echo 'f';} else {echo '0';} echo "</td>"
        . "<td >Commune(s):</td>"
        . "<td >  "; if($Subvention5){echo 'f';} else {echo '0';} echo " </td>"
        . "</tr>";


       echo  "<tr>"
        . "<td > Publicité, publication </td>"
        . "<td>  "; if($AutresServicesExterieurs2){echo 'f';} else {echo '0';} echo " </td>"
          . "<td >subvention communauté de communes et agglomération</td>"
        . "<td >  "; if($Subvention6){echo 'f';} else {echo '0';} echo " </td>"
        . "</tr>";

          

         echo  "<tr>"
        . "<td > Déplacements, missions</td>"
        . "<td>  "; if($AutresServicesExterieurs3){echo 'f';} else {echo '0';} echo "</td>"
        . "<td ></td>"
        . "<td > </td>"
        . "</tr>";



              echo  "<tr>"
        . "<td > Frais postaux et de télécommunications </td>"
        . "<td>  "; if($AutresServicesExterieurs4){echo 'f';} else {echo '0';} echo "</td>"
        . "<td > Organismes sociaux ( à détailler):</td>"
        . "<td > "; if($Subvention7){echo 'f';} else {echo '0';} echo " </td>"
        . "</tr>";
                       
                echo  "<tr>"
        . "<td > Services bancaires, autres</td>"
        . "<td>  "; if($AutresServicesExterieurs5){echo 'f';} else {echo '0';} echo " </td>"
        . "<td ></td>"
        . "<td > </td>"
        . "</tr>";

                
//63-IMPOTS ET TAXES 
        echo "<tr>"
        . "<td bgcolor=#7EE7EE> 63- Impôts et taxes  </td>"
        . "<td bgcolor=#7EE7EE> //63-SOMME </td>"
       . "<td >Fédération</td>"
     . "<td > "; if($Achats1){echo 'f';} else {echo '0';} echo " </td>"
        . "</tr>";
              
        echo  "<tr>"
        . "<td > Impôts et taxes sur rémunération </td>"
        . "<td> "; if($ImpôtsTaxes1){echo 'f';} else {echo '0';} echo " </td>"
        . "<td >Fonds européens</td>"
     . "<td > "; if($Subvention8){echo 'f';} else {echo '0';} echo " </td>"
        . "</tr>";

           
        echo  "<tr>"
        . "<td > Autres impôts et taxes</td>"
        . "<td> "; if($ImpôtsTaxes2){echo 'f';} else {echo '0';} echo " </td>"
                 . "<td >  </td>"
     . "<td > </td>"
        . "</tr>";

        
 //64-CHARGES DE PERSONNEL
  
       echo "<tr>"
        . "<td bgcolor=#7EE7EE> 64-Charges de personelle  </td>"
        . "<td bgcolor=#7EE7EE> //64-SOMME </td>"
       . "<td > Autres recettes (précisez)</td>"
        . "<td > "; if($Subvention9){echo 'f';} else {echo '0';} echo " </td>"
        . "</tr>";

       echo  "<tr>"
        . "<td > Rémunération des personnels</td>"
        . "<td> "; if($ChargePersonnels1){echo 'f';} else {echo '0';} echo " </td>"
       . "<td bgcolor=#7EE7EE> 75- Autres produits de gestion courante </td>"
        . "<td bgcolor=#7EE7EE>  //75-SOMMES </td>"
        . "</tr>";


  
              echo  "<tr>"
        . "<td > Charges sociales</td>"
        . "<td>  "; if($ChargePersonnels2){echo 'f';} else {echo '0';} echo "</td>"
                . "<td >Autres produits de gestion courante  </td>"
        . "<td>  "; if($AutresProduits1){echo 'f';} else {echo '0';} echo "</td>"
        . "</tr>";
     
 //75-AUTRES PRODUITS DE GESTIONS COURANTE                   
	

                echo  "<tr>"
        . "<td >  Autres charges de personnel</td>"
        . "<td>  "; if($ChargePersonnels3){echo 'f';} else {echo '0';} echo "</td>"
                . "<td >Dont cotisations </td>"
        . "<td>  "; if($AutresProduits2){echo 'f';} else {echo '0';} echo " </td>"
        . "</tr>";
    
      
      
       
//65-AUTRES CHARGES DE GESTIONS COURANTE ET 76-PRODUITS FINANCIERS 
       echo "<tr>"
        . "<td bgcolor=#7EE7EE> 65-Autres charges de gestion courante  </td>"
        . "<td bgcolor=#7EE7EE> "; if($AutreChargesDeGestionCourante){echo 'f';} else {echo '0';} echo " </td>"
        . "<td bgcolor=#7EE7EE>76 - Produits financiers</td>"
        . "<td bgcolor=#7EE7EE>  "; if($ProduitsFinanciers){echo 'f';} else {echo '0';} echo " </td>"
        . "</tr>";
       
//66-CHARGES FINANCIERES ET 77-PRODUITS EXCEPTIONNELS 
    echo "<tr>"
        . "<td bgcolor=#7EE7EE> 66-Charges financières </td>"
        . "<td bgcolor=#7EE7EE>  "; if($ChargesFinancières){echo 'f';} else {echo '0';} echo "</td>"
        . "<td bgcolor=#7EE7EE> 77 - Produits exceptionnels </td>"
       . "<td bgcolor=#7EE7EE> "; if($ProduitsExceptionnels){echo 'f';} else {echo '0';} echo "  </td>"
        . "</tr>";

//67-CHARGES EXCEPTIONNELLES ET 78-REPRISES SUR AMORTISSEMENTS ET PROVISIONS 
  echo "<tr>"
        . "<td bgcolor=#7EE7EE>67-Charges exceptionnelles  </td>"
        . "<td bgcolor=#7EE7EE>  "; if($ChargesExceptionnelles){echo 'f';} else {echo '0';} echo "</td>"
            . "<td bgcolor=#7EE7EE>78-Reprises sur amortissements et provisions </td>"
        . "<td bgcolor=#7EE7EE> "; if($Reprises){echo 'f';} else {echo '0';} echo " </td>"

        . "</tr>";

//68-DOTATIONS AUX AMORTISSEMENTS ET 79-TRANSFERT DE CHARGES 
   echo "<tr>"
        . "<td bgcolor=#7EE7EE> 68-Dotations aux amortissements(provisions pour renouvellement)  </td>"
        . "<td bgcolor=#7EE7EE> "; if($Dotations){echo 'f';} else {echo '0';} echo " </td>"
        . "<td bgcolor=#7EE7EE>79-Transfert de charges </td>"
       . "<td bgcolor=#7EE7EE>  "; if($Transfert){echo 'f';} else {echo '0';} echo " </td>"  

        . "</tr>";

   //OTAL DES CHARGES PREVISIONNELLES ET TOTAL DES PRODUITS PREVISIONNELLES
   echo  "<tr>"
        . "<td bgcolor=#7EE7EE>  TOTAL DES CHARGES PREVISIONNELLES  </td>"
        . "<td bgcolor=#7EE7EE>//SOMME  </td>"
       . "<td bgcolor=#7EE7EE> TOTAL DES PRODUITS PREVISIONNELLES</td>"
        . "<td bgcolor=#7EE7EE> //SOMME</td>"
        . "</tr>";

//86-EMPLOIS DES CONTRIBUTIONS VOLONTAIRES EN NATURE ET 87-CONTRIBUTIONS VOLONTAIRES EN NATURE 
 echo  "<tr>"
        . "<td bgcolor=#7EE7EE> 86-emploi de contributions volontaires en nature  </td>"
        . "<td bgcolor=#7EE7EE> //SOMME 86 </td>"
        . "<td bgcolor=#7EE7EE>87-Contributions volontaires en nature </td>"
        . "<td bgcolor=#7EE7EE> //SOMME 87</td>"
        . "</tr>";
 
 
 
         echo  "<tr>"
        . "<td >Bénévolat </td>"
        . "<td> "; if($Benevolat1){echo 'f';} else {echo '0';} echo " </td>"
        ."<td> Dons en nature </td>"
        ."<td>  "; if($DonsNature2){echo 'f';} else {echo '0';} echo " </td>"
        . "</tr>";
         
           echo  "<tr>"
        . "<td >Dons en nature</td>"
        . "<td> "; if($DonsNature1){echo 'f';} else {echo '0';} echo " </td>"
        ."<td> Mise à disposition gratuite de biens et prestation </td>"
        ."<td>  "; if($Disposition2){echo 'f';} else {echo '0';} echo " </td>"
        . "</tr>";
           
         echo  "<tr>"
        . "<td > Mise à disposition gratuite de biens et prestations</td>"
        . "<td>  "; if($Disposition1){echo 'f';} else {echo '0';} echo "</td>"
            ."<td> Bénévolat </td>"
        ."<td>  "; if($Benevolat2){echo 'f';} else {echo '0';} echo " </td>"
        . "</tr>";
       
 //TOTAL DES CHARGES ET TOTAL DES PRODUITS 
  echo  "<tr>"
        . "<td bgcolor=#7EE7EE> TOTAL DES CHARGES</td>"
        . "<td bgcolor=#7EE7EE> //TOTAL DES SOMMES DEPENSE </td>"
        . "<td bgcolor=#7EE7EE>TOTAL DES PRODUITS </td>"
        ."<td bgcolor=#7EE7EE>// TOTAL DES SOMMES RECETTES </td>"
        . "</tr>";
    
    
echo "</table>";



                
                
                
              
                
                