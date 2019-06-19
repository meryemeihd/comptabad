
<?php
//formulaire de facture à designer 
//faire affcher le formulaire page facture pb
echo "<form action='/payement/save' method=post>
        
        <fieldset  id='section3'>
               <legend id='paye'> Recette </legend>
               <label for=numero>Numero:</label> 
                <input name='Numero' value='".$Payement->Numero." '><br>          
             
                <label for=date> Date:</label> 
                <input type='Date' id='Date' name='Date' required='' value='".$Payement->Date."'><br> 
             
                <label for=libelle>Libelle:</label>  
                <input  name='JustificatifPayement'  value='".$Payement->JustificatifPayement."'> <br>
                        
                <label for=libelle> Montant:</label>  
                <input id='Montant' autofocus='' name='Montant' required='' value='".$Payement->Montant." '> 
                 <label for=libelle>€</label>  <br>

                <label for=Commentaire> Commentaire:</label>
                <textarea id='Commentaire' name='Commentaire' value='".$Payement->Commentaire."'></textarea> <br>
             
            
                       <label for=moyenpayement> Moyen de payement: </label>  <br>
                ";

//affiche les libelle de ModePayement
                while  ($value = $Connexion->sql_fetch_object($ResultatModePayement)) {
                    echo "<input type=radio  name='ID_ModePayement' value='".$value->ID_ModePayement."'";
                    if ($value->ID_ModePayement == $Payement->ID_ModePayement)
                        echo " checked";
                    echo "> ".$value->Libelle."<br>";
                }
                

                
//TIERS 
                    echo " <label for=TypeCompte>  Tiers (si vous ne trouvez pas le nom de la personne ou compagnie veuillez reenseigner les informations dans la page saisir Tiers avant) </label>  <br>";
            
   echo "<select name= 'ID_Entite'>";
              while  ($value = $Connexion->sql_fetch_object($ResultatEntite)) {
                
               echo "<option value='".$value->ID_Entite."' >";
            
                 if ($value->ID_Entite)
                 {
                      
                        echo  "$value->Nom                 " ; echo"   $value->Prenom";
                
                 }
                   
              }
         
        echo '</select> <br>';
 
   
//COMPTE LIBELLE COMPTE RESULTAT 2     
       echo " <label for=TypeCompte>  Selectionnez </label>  <br>";
            
   echo "<select name= 'ID_Compte'>";
              while  ($value = $Connexion->sql_fetch_object($ResultatCompteLibelleCptRes2)) {
                
              
                      
               echo "<option value='".$value->ID_Compte."' >";
            
                 if ($value->ID_Compte)
                 {
                      
                        //TEST
                        // echo "<input  name='ID_Compte' value='".$value->ID_Compte."'>";
                        echo $value->LibelleGenerique;
                
                 }
                   
              }
         
        echo '</select> <br>';

//COMPTE LIBELLE COMPTE RESULTAT 3

                
                echo "<br> 

                <label for=numeroCheque> Numero de cheque:</label> 
               <input id='Cheque' autofocus='' name='Cheque' value='".$Payement->Parent_Cheque->Numero."'><br>
             
                <label for=dateRapprochement> Rapprochement: </label> 
                <input type='date' id='dateRapprochement' name='dateRapprochement' alue='".$Payement->DateRapprochement." ' > <br> <br>
             

                
            
                 <input type=hidden name='ID_Cheque' value='".$Payement->ID_Cheque."'>
                 <input type=hidden name='ID_Payement' value='".$Payement->ID_Payement."'>
                 <input type=hidden name='ID_Piece' value='".$Piece->ID_Piece."'>
                <input type=hidden name='ID_Ecriture' value='".$Ecriture->ID_Ecriture."'>
                 <input type='submit' value='Valider'>
                      
                </fieldset>
                </form>
                        
         ";


?>
