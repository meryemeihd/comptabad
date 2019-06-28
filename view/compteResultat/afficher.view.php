<?php
echo $DateDebut." ".$DateFin;
?>
<table id=MaTable class=tabcenter>
<tr> 
       <td> <center> Depenses <center></td>
        <td><center> Montant </center></td>
       <td><center>  Recette </center> </td>
       <td><center>  Montant</center> </td>  
       </tr>

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "
    <center> <h1> Visualisation du compte résultat </h1> </center> ";
?>
       <?php
 echo "<form method='post' action='/compteResultat/afficher'>
                <label for=date> Date Début:</label> 
                <input type='date' id='date' name='DateDebut' value='".$DateDebut."'> <br> 
                    <label for=date> Date Fin:</label> 
                <input type='date' id='date' name='DateFin' value='" .$DateFin."'><br> 
                 <button type=submit>Valider</button>";
                 


        echo  "<tr>"
        . "<td  bgcolor=#7EE7EE><center>  60-Achats </center></td>"
        . "<td  bgcolor=#7EE7EE><center>";while ($Ligne = $Connexion->sql_fetch_object($Achats)) {echo $Ligne->MontantEcriture;  
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo" </center></td>"
      . "<td  bgcolor=#7EE7EE><center> 70-Vente de produis finis, prestations de services, marchandises </center></td>"
      . "<td  bgcolor=#7EE7EE><center>";while ($Ligne = $Connexion->sql_fetch_object($Vente)) {echo $Ligne->MontantEcriture;  
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo" </center> </td>"
        . "</tr>";




	
  echo   "<tr>"
        . "<td ><center> Achat des études et de prestations de services </center></td>"
        . "<td ><center>";while ($Ligne = $Connexion->sql_fetch_object($Achats1)) {echo $Ligne->MontantEcriture;  
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
          . "<td><center>Prestations de services</center></td>"
         . "<td><center> ";while ($Ligne = $Connexion->sql_fetch_object($Vente1)) {echo $Ligne->MontantEcriture; 
         if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center> </td>"
        . "</tr>";      

echo "</tr>"
        . "<tr>"
        . "<td > <center>Achats non stockés de matières et de fournitures </center></td>"
        . "<td ><center>";while ($Ligne = $Connexion->sql_fetch_object($Achats2)) {echo $Ligne->MontantEcriture;  
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo" </center></td>"
       . "<td><center>Vente de marchandises</center></td>"
       . "<td > <center>";while ($Ligne = $Connexion->sql_fetch_object($Vente2)) {echo $Ligne->MontantEcriture;  
       if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "</tr>";

echo 
         "<tr>"
        . "<td ><center> Fournitures non stockables ( eau, énergie)</center> </td>"
        . "<td > <center>";while ($Ligne = $Connexion->sql_fetch_object($Achats3)) {echo $Ligne->MontantEcriture;  
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
       . "<td><center>Produits des activités annexes</center></td>"
        . "<td > <center> ";while ($Ligne = $Connexion->sql_fetch_object($Vente3)) {echo $Ligne->MontantEcriture;   
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "</tr>";



echo 
         "<tr>"
        . "<td ><center> Fourniture d'entretien et de petit équipement</center>  </td>"
        . "<td ><center>  ";while ($Ligne = $Connexion->sql_fetch_object($Achats4)) {echo $Ligne->MontantEcriture;   
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center>  </td>"
       . "<td><center> <center> </td>"
       . "<td ><center> <center>  </td>"
        . "</tr>";



echo 
         "<tr>"
        . "<td ><center>ASP</center></td>"
        . "<td > <center> ";while ($Ligne = $Connexion->sql_fetch_object($Achats5)) {echo $Ligne->MontantEcriture;   
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "<td><center></center></td>"
        . "<td ><center></center> </td>"
        . "</tr>";


echo 
         "<tr>"
        . "<td ><center>Autres fournitures</center></td>"
        . "<td ><center>  ";while ($Ligne = $Connexion->sql_fetch_object($Achats6)) {echo $Ligne->MontantEcriture;   
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo" </center></td>"
        . "<td><center></center></td>"
        . "<td ><center> </center> </td>"
        . "</tr>";



//61-SERVICES EXTERIEURS ET 74- Subventions d’exploitation
       echo  "<tr>"
        . "<td bgcolor=#7EE7EE><center>61-Services extérieurs </center></td>"
        . "<td bgcolor=#7EE7EE><center>";while ($Ligne = $Connexion->sql_fetch_object($ServicesExterieurs)) {echo $Ligne->MontantEcriture;  
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
      . "<td bgcolor=#7EE7EE><center> 74-Subventions d'exploitation </center></td>"
       . "<td bgcolor=#7EE7EE><center>";while ($Ligne = $Connexion->sql_fetch_object($Subvention)) {echo $Ligne->MontantEcriture;  
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "</tr>";
       

              echo  "<tr>"
        . "<td ><center> Sous traitance générale </center></td>"
        . "<td><center> ";while ($Ligne = $Connexion->sql_fetch_object($ServicesExterieurs1)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "<td><center>Etat: CNDS </center></td>"
         . "<td><center> ";while ($Ligne = $Connexion->sql_fetch_object($Subvention1)) {echo $Ligne->MontantEcriture;   
         if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
                      
        . "</tr>";

 

    
          echo  "<tr>"
        . "<td ><center> Locations </center></td>"
        . "<td ><center> ";while ($Ligne = $Connexion->sql_fetch_object($ServicesExterieurs2)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center> </td>"
        . "<td><center></center> </td>"
        . "<td><center></center> </td>"
        . "</tr>";

              echo  "<tr>"
        . "<td ><center> Entretien et réparation</center></td>"
        . "<td ><center> ";while ($Ligne = $Connexion->sql_fetch_object($ServicesExterieurs3)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "<td><center>Régions(s) </center></td>"
         . "<td><center> ";while ($Ligne = $Connexion->sql_fetch_object($Subvention2)) {echo $Ligne->MontantEcriture; 
         if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "</tr>";

           

             echo  "<tr>"
        . "<td ><center> Assurance </center></td>"
        . "<td ><center> ";while ($Ligne = $Connexion->sql_fetch_object($ServicesExterieurs4)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
         . "<td><center></center></td>"
         . "<td><center></center> </td>"
         . "</tr>";

           

             echo  "<tr>"
        . "<td ><center> Documentation</center></td>"
        . "<td ><center>";while ($Ligne = $Connexion->sql_fetch_object($ServicesExterieurs5)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
         . "<td><center></center></td>"
         . "<td><center></center>  </td>"             
        . "</tr>";

       

               echo  "<tr>"
        . "<td ><center> Divers </center></td>"
        . "<td ><center>  ";while ($Ligne = $Connexion->sql_fetch_object($ServicesExterieurs6)) {echo $Ligne->MontantEcriture;  
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "<td><center>Département(s): </center></td>"
         . "<td> <center> ";while ($Ligne = $Connexion->sql_fetch_object($Subvention3)) {echo $Ligne->MontantEcriture;  
         if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center> </td>"
        . "</tr>";

 
 //62-AUTRES SERVICES EXTERIEURS 
       
    echo "<tr>"
        . "<td bgcolor=#7EE7EE><center>62-Autres services exterieurs </center></td>"
        . "<td bgcolor=#7EE7EE><center>";while ($Ligne = $Connexion->sql_fetch_object($AutresServicesExterieurs)) {echo $Ligne->MontantEcriture;  
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
       . "<td ><center></center></td>"
        . "<td ><center></center> </td>"
        . "</tr>";
    
         echo  "<tr>"
        . "<td><center> Rémunérations intermédiaires et honoraires </center></td>"
        . "<td> <center>";while ($Ligne = $Connexion->sql_fetch_object($AutresServicesExterieurs1)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "<td ><center>Commune(s):</center></td>"
        . "<td ><center>  ";while ($Ligne = $Connexion->sql_fetch_object($Subvention4)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo" </center></td>"
        . "</tr>";


       echo  "<tr>"
        . "<td ><center> Publicité, publication </center></td>"
        . "<td><center> ";while ($Ligne = $Connexion->sql_fetch_object($AutresServicesExterieurs2)) {echo $Ligne->MontantEcriture;  
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center> </td>"
          . "<td ><center>Subvention communauté de communes et agglomération</center></td>"
        . "<td ><center> ";while ($Ligne = $Connexion->sql_fetch_object($Subvention5)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center> </td>"
        . "</tr>";

          

         echo  "<tr>"
        . "<td ><center> Déplacements, missions</center></td>"
        . "<td> <center>";while ($Ligne = $Connexion->sql_fetch_object($AutresServicesExterieurs3)) {echo $Ligne->MontantEcriture;  
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "<td><center></center></td>"
        . "<td ><center></center> </td>"
        . "</tr>";



              echo  "<tr>"
        . "<td ><center> Frais postaux et de télécommunications </center></td>"
        . "<td> <center>";while ($Ligne = $Connexion->sql_fetch_object($AutresServicesExterieurs4)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "<td><center> Organismes sociaux ( à détailler):</center></td>"
        . "<td ><center> ";while ($Ligne = $Connexion->sql_fetch_object($Subvention6)) {echo $Ligne->MontantEcriture;  
        if (empty($Ligne->MontantEcriture)) { echo ("0"); }} echo"</center> </td>"
        . "</tr>";
                       
                echo  "<tr>"
        . "<td><center> Services bancaires, autres</center></td>"
        . "<td><center> ";while ($Ligne = $Connexion->sql_fetch_object($AutresServicesExterieurs5)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center> </td>"
        . "<td><center></center></td>"
        . "<td><center></center> </td>"
        . "</tr>";

                
//63-IMPOTS ET TAXES 
        echo "<tr>"
        . "<td bgcolor=#7EE7EE> <center>63- Impôts et taxes</center></td>"
        . "<td bgcolor=#7EE7EE><center> ";while ($Ligne = $Connexion->sql_fetch_object($ImpôtsTaxes)) {echo $Ligne->MontantEcriture; 
     if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center> </td>"
       . "<td><center>Fédération</center></td>"
     . "<td><center> ";while ($Ligne = $Connexion->sql_fetch_object($Subvention7)) {echo $Ligne->MontantEcriture; 
     if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "</tr>";
              
        echo  "<tr>"
        . "<td><center> Impôts et taxes sur rémunération </center></td>"
        . "<td><center> ";while ($Ligne = $Connexion->sql_fetch_object($ImpôtsTaxes1)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center> </td>"
        . "<td ><center>Fonds européens</center></td>"
     . "<td ><center> ";while ($Ligne = $Connexion->sql_fetch_object($Subvention8)) {echo $Ligne->MontantEcriture; 
     if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center> </td>"
        . "</tr>";

           
        echo  "<tr>"
        . "<td ><center> Autres impôts et taxes</center></td>"
        . "<td><center> ";while ($Ligne = $Connexion->sql_fetch_object($ImpôtsTaxes2)) {echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
                 . "<td><center></center>  </td>"
     . "<td><center></center> </td>"
        . "</tr>";

        
 //64-CHARGES DE PERSONNEL
  
       echo "<tr>"
        . "<td bgcolor=#7EE7EE><center> 64-Charges de personelle</center>  </td>"
        . "<td bgcolor=#7EE7EE><center> ";while ($Ligne = $Connexion->sql_fetch_object($ChargePersonnels)) {echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center> </td>"
       . "<td><center> Autres recettes (précisez)</center></td>"
        . "<td ><center> ";while ($Ligne = $Connexion->sql_fetch_object($Subvention9)) {echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "</tr>";

       echo  "<tr>"
        . "<td><center> Rémunération des personnels </center></td>"
        . "<td> <center>";while ($Ligne = $Connexion->sql_fetch_object($ChargePersonnels1)) {echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
       . "<td bgcolor=#7EE7EE><center> 75- Autres produits de gestion courante </center></td>"
        . "<td bgcolor=#7EE7EE><center> ";while ($Ligne = $Connexion->sql_fetch_object($AutresProduits)) {echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "</tr>";


  
              echo  "<tr>"
        . "<td><center> Charges sociales </center></td>"
        . "<td><center> ";while ($Ligne = $Connexion->sql_fetch_object($ChargePersonnels2)) {echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
                . "<td ><center>Autres produits de gestion courante  </center></td>"
        . "<td><center>  ";while ($Ligne = $Connexion->sql_fetch_object($AutresProduits1))  { echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "</tr>";
     
 //75-AUTRES PRODUITS DE GESTIONS COURANTE                   
	

                echo  "<tr>"
        . "<td > <center> Autres charges de personnel</center></td>"
        . "<td><center> ";while ($Ligne = $Connexion->sql_fetch_object($ChargePersonnels3)) {echo $Ligne->MontantEcriture;
         if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
                . "<td ><center>Dont cotisations </center></td>"
        . "<td><center> ";while ($Ligne = $Connexion->sql_fetch_object($AutresProduits2)) { echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "</tr>";
    
      
      
       
//65-AUTRES CHARGES DE GESTIONS COURANTE ET 76-PRODUITS FINANCIERS 
       echo "<tr>"
        . "<td bgcolor=#7EE7EE><center> 65-Autres charges de gestion courante </center> </td>"
        . "<td bgcolor=#7EE7EE> <center>";while ($Ligne = $Connexion->sql_fetch_object($AutreChargesDeGestionCourante)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo" </center></td>"
        . "<td bgcolor=#7EE7EE><center>76 - Produits financiers</center></td>"
        . "<td bgcolor=#7EE7EE><center> ";while ($Ligne = $Connexion->sql_fetch_object($ProduitsFinanciers)) {echo $Ligne->MontantEcriture;
                if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "</tr>";
       
//66-CHARGES FINANCIERES ET 77-PRODUITS EXCEPTIONNELS 
    echo "<tr>"
        . "<td bgcolor=#7EE7EE><center> 66-Charges financières </center></td>"
        . "<td bgcolor=#7EE7EE><center> ";while ($Ligne = $Connexion->sql_fetch_object($ChargesFinancières)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "<td bgcolor=#7EE7EE><center> 77 - Produits exceptionnels </center></td>"
       . "<td bgcolor=#7EE7EE><center> ";while ($Ligne = $Connexion->sql_fetch_object($ProduitsExceptionnels)) {echo $Ligne->MontantEcriture;
      if (empty($Ligne->MontantEcriture)) { echo ("0"); }   } echo"</center>  </td>"
        . "</tr>";

//67-CHARGES EXCEPTIONNELLES ET 78-REPRISES SUR AMORTISSEMENTS ET PROVISIONS 
  echo "<tr>"
        . "<td bgcolor=#7EE7EE><center>67-Charges exceptionnelles </center> </td>"
        . "<td bgcolor=#7EE7EE> <center> ";while ($Ligne = $Connexion->sql_fetch_object($ChargesExceptionnelles)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
            . "<td bgcolor=#7EE7EE><center>78-Reprises sur amortissements et provisions </center></td>"
        . "<td bgcolor=#7EE7EE><center> ";while ($Ligne = $Connexion->sql_fetch_object($Reprises)) {echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo "</center> </td>"

        . "</tr>";

//68-DOTATIONS AUX AMORTISSEMENTS ET 79-TRANSFERT DE CHARGES 
   echo "<tr>"
        . "<td bgcolor=#7EE7EE><center> 68-Dotations aux amortissements(provisions pour renouvellement) </center> </td>"
        . "<td bgcolor=#7EE7EE> <center>";while ($Ligne = $Connexion->sql_fetch_object($Dotations)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center> </td>"
        . "<td bgcolor=#7EE7EE><center>79-Transfert de charges </center></td>"
       . "<td bgcolor=#7EE7EE><center>  ";while ($Ligne = $Connexion->sql_fetch_object($Transfert)) {echo $Ligne->MontantEcriture;
       if (empty($Ligne->MontantEcriture)) { echo ("0"); }} echo" </center></td>"  

        . "</tr>";

   //OTAL DES CHARGES PREVISIONNELLES ET TOTAL DES PRODUITS PREVISIONNELLES
   echo  "<tr>"
        . "<td bgcolor=#7EE7EE><center>  TOTAL DES CHARGES PREVISIONNELLES  </center></td>"
        . "<td bgcolor=#7EE7EE><center>";while ($Ligne = $Connexion->sql_fetch_object($TCP)) {echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo" </center></td>"
       . "<td bgcolor=#7EE7EE><center> TOTAL DES PRODUITS PREVISIONNELLES</center></td>"
        . "<td bgcolor=#7EE7EE><center> ";while ($Ligne = $Connexion->sql_fetch_object($TPP)) {echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        . "</tr>";

//86-EMPLOIS DES CONTRIBUTIONS VOLONTAIRES EN NATURE ET 87-CONTRIBUTIONS VOLONTAIRES EN NATURE 
 echo  "<tr>"
        . "<td bgcolor=#7EE7EE><center> 86-emploi de contributions volontaires en nature </center> </td>"
        . "<td bgcolor=#7EE7EE><center> ";while ($Ligne = $Connexion->sql_fetch_object($Volontaire1)) {echo $Ligne->MontantEcriture;
       if (empty($Ligne->MontantEcriture)) { echo ("0"); }} echo"</center></td>"
        . "<td bgcolor=#7EE7EE> <center> 87-Contributions volontaires en nature </center></td>"
        . "<td bgcolor=#7EE7EE><center> ";while ($Ligne = $Connexion->sql_fetch_object($Volontaire2)) {echo $Ligne->MontantEcriture;
       if (empty($Ligne->MontantEcriture)) { echo ("0"); }} echo"</center></td>"
        . "</tr>";
 
 
 
         echo  "<tr>"
        . "<td ><center> Bénévolat </center> </td>"
        . "<td> <center>";while ($Ligne = $Connexion->sql_fetch_object($Benevolat1)) {echo $Ligne->MontantEcriture;  
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
        ."<td><center> Dons en nature </center></td>"
        ."<td><center> ";while ($Ligne = $Connexion->sql_fetch_object($DonsNature2)) {echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo" </center></td>"
        . "</tr>";
         
           echo  "<tr>"
        . "<td ><center>Dons en nature</center></td>"
        . "<td><center> ";while ($Ligne = $Connexion->sql_fetch_object($DonsNature1)) {echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo" </center></td>"
        ."<td><center> Mise à disposition gratuite de biens et prestation </center></td>"
        ."<td> <center>";while ($Ligne = $Connexion->sql_fetch_object($Disposition2)) {echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo" </center></td>"
        . "</tr>";
           
         echo  "<tr>"
        . "<td ><center> Mise à disposition gratuite de biens et prestations</center></td>"
        . "<td> <center>";while ($Ligne = $Connexion->sql_fetch_object($Disposition1)) {echo $Ligne->MontantEcriture; 
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center></td>"
            ."<td><center> Bénévolat </center> </td>"
        ."<td><center> ";while ($Ligne = $Connexion->sql_fetch_object($Benevolat2)) {echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo" </center></td>"
        . "</tr>";
       
        
         echo  "<tr>"
        . "<td bgcolor=#7EE7EE><center> Autres  </center></td>"
        . "<td bgcolor=#7EE7EE><center> ";while ($Ligne = $Connexion->sql_fetch_object($Autres1)) {echo $Ligne->MontantEcriture;
       if (empty($Ligne->MontantEcriture)) { echo ("0"); }} echo" </center></td>"
        . "<td bgcolor=#7EE7EE><center> Autres </center> </td>"
        . "<td bgcolor=#7EE7EE><center> ";while ($Ligne = $Connexion->sql_fetch_object($Autres2)) {echo $Ligne->MontantEcriture;
       if (empty($Ligne->MontantEcriture)) { echo ("0"); }} echo"</center></td>"
        . "</tr>";
       
 //TOTAL DES CHARGES ET TOTAL DES PRODUITS 
  echo  "<tr>"
        . "<td bgcolor=#7EE7EE><center> TOTAL DES CHARGES</center> </td>"
        . "<td bgcolor=#7EE7EE> <center>";while ($Ligne = $Connexion->sql_fetch_object($TOTALCHARGES)) {echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center> </td>"
        . "<td bgcolor=#7EE7EE><center>TOTAL DES PRODUITS </center></td>"
        ."<td bgcolor=#7EE7EE><center>";while ($Ligne = $Connexion->sql_fetch_object($TOTALPRODUITS)) {echo $Ligne->MontantEcriture;
        if (empty($Ligne->MontantEcriture)) { echo ("0"); } } echo"</center> </td>"
        . "</tr>";
        
        echo "<form>";
    
    ?>
   
      
       <?php
      /* 
         echo "
                <form method='post' action='compteResultat/save'>
                <label for=date> Date:</label> 
                <input type='date' id='date' name='Date' value='".$Ecriture->Date." ' ><br> 
                 <button type=submit>Valider</button>"
        ;
       * 
       */
         ?>

</table>


                
                
                
              
                
                