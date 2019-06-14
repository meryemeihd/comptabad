
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
                 
                <label for=libelle>Reçu de :</label>  
                <input  name='Reçu'  value='".$Payement->Reçu."'> <br>
          
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
                
                echo "<br> 

                <label for=numeroCheque> Numero de cheque:</label> 
               <input id='Cheque' autofocus='' name='Cheque' value='".$Payement->Parent_Cheque->Numero."'><br>
             
                <label for=dateRapprochement> Rapprochement: </label> 
                <input type='date' id='dateRapprochement' name='dateRapprochement' required=''> <br> <br>
             

                
            
                 <input type=hidden name='ID_Cheque' value='".$Payement->ID_Cheque."'>
                 <input type=hidden name='ID_Payement' value='".$Payement->ID_Payement."'>
                 <input type=hidden name='ID_Piece' value='".$Piece->ID_Piece."'>
                <input type=hidden name='ID_Ecriture' value='".$Ecriture->ID_Ecriture."'>
                 <input type='submit' value='Valider'>
                      
                </fieldset>
                </form>
                        
         ";


?>
