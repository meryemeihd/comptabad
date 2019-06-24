
<?php
//formulaire de facture à designer 
//faire affcher le formulaire page facture pb


        
        
echo "<form action='/facture/save' method=post>
        
        <fieldset id='section2'>
               <legend id='depense'> Depense </legend>
                    
                <label for=libelle>Numero:</label>  
                <input id='NumeroFacture'  name='NumeroFacture'  value='".$Facture->NumeroFacture."' > <br>
             
                <label for=date> Date:</label> 
                <input type='date' id='date' name='Date' value='".$Facture->Date." ' ><br> 
             
                <label for=libelle>Libelle:</label>  
                <input id='DesignationFacture'  name='DesignationFacture'  value=' ".$Facture->DesignationFacture." ' > <br>
             
                <label for=libelle> Montant:</label>  
                <input id='PrixTTC'  name='PrixTTC' ' value='".$Facture->PrixTTC."'> 
                <label for=libelle>€</label>  <br>
                
                <label for=Commentaire> Commentaire:</label>
                <textarea id='Commentaire' name='Commentaire' ".$Facture->Commentaire."></textarea> <br>
             
                <label for=moyenpayement> Moyen de payement: </label>  <br>
                
                ";


//MODEPAYEMENT

                while  ($value = $Connexion->sql_fetch_object($ResultatModePayement)) {
                    echo "<input type=radio  name='ID_ModePayement' value='".$value->ID_ModePayement."'";
                    if ($value->ID_ModePayement == $Facture->ID_ModePayement)
                        echo " checked";
                    echo "> ".$value->Libelle."<br>";
                }
                
                
//JOURNAL     
                    echo"    <label for=journalt> Type du journal: </label>  <br>  ";

              while  ($value = $Connexion->sql_fetch_object($ResultatJournal1)) {
                    echo "<input type=radio  name='ID_Journal1' value='".$value->ID_Journal."'";
                   
                               
                    echo "> ".$value->Libelle."<br>";                           
                    
                }
           
                    while  ($value = $Connexion->sql_fetch_object($ResultatJournal2)) {
                    echo "<input type=radio  name='ID_Journal2' value='".$value->ID_Journal."'";
                   
                    
                    
                    echo "> ".$value->Libelle."<br>";
    
                }
                
                
 
//COMPTE TYPE
  
   //TIERS 
                       echo " <label for=TypeCompte>  Tiers (si vous ne trouvez pas le nom de la personne ou compagnie veuillez renseigner les informations dans la page saisir Tiers avant) </label>  <br>";
            
   echo "<select name= 'ID_Entite'>";
              while  ($value = $Connexion->sql_fetch_object($ResultatEntite)) {        
               echo "<option value='".$value->ID_Entite."' >";
            
                 if ($value->ID_Entite)
                 {
                        echo  "$value->Nom                 " ; echo"   $value->Prenom";
                
                 }
                   
              }
         
        echo '</select> <br>';
  
//COMPTE LIBELLE COMPTE RESULTAT 1
       echo " <label for=TypeCompte>  Selectionnez </label>  <br>";
            
   echo "<select name= 'ID_Compte'>";
              while  ($value = $Connexion->sql_fetch_object($ResultatCompteLibelleCptRes1)) {        
               echo "<option value='".$value->ID_Compte."' >";
            
                 if ($value->ID_Compte)
                 {
                        echo $value->LibelleGenerique;
                
                 }
                   
              }
         
        echo '</select> <br>';
                echo " <br>
             
                <label for=dateRapprochement> Rapprochement: </label> 
                <input type='date' id='dateRapprochement' name='dateRapprochement'   value='".$Facture->DateRapprochement." ' > <br> <br>
            
               <label for=numeroCheque> Numero de cheque:</label> 
                <input id='Cheque'  name='Cheque'  value='".$Facture->Parent_Cheque->Numero."'> <br>

                
                 <input type=hidden name='ID_Cheque' value='".$Cheque->ID_Cheque."'>
                 <input type=hidden name='ID_Facture' value='".$Facture->ID_Facture."'>
                <input type=hidden name='ID_Piece' value='".$Piece->ID_Piece."'>
                <input type=hidden name='ID_Ecriture' value='".$Ecriture->ID_Ecriture."'> 
             
                 <input type='submit' value='Valider'>
                      
                </fieldset>
                        
         ";

?>
