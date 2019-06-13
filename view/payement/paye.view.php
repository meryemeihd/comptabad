
<?php
//formulaire de facture à designer 
//faire affcher le formulaire page facture pb
echo "<form action='/payement/save' method=post>
        
        <fieldset  id='section3'>
               <legend id='paye'> Recette </legend>
               <label for=numero>Numero:</label> 
                <input name='Numero' value'".$Payement->Numero." '><br>          
             
                <label for=date> Date:</label> 
                <input type='Date' id='Date' name='Date' required='' value'".$Payement->Date." ".$Ecriture->Date."'><br> 
             
                <label for=libelle>Libelle:</label>  
                <input  name='JustificatifPayement'  value'".$Payement->JustificatifPayement." ".$Piece->DescriptionPiece."'> <br>
                 
                <label for=libelle>Reçu de :</label>  
                <input  name='Reçu'  value'".$Payement->Reçu."'> <br>
          
                <label for=libelle> Montant:</label>  
                <input id='Montant' autofocus='' name='Montant' required='' value'".$Payement->Montant." ".$Ecriture->Montant."'> 
                 <label for=libelle>€</label>  <br>

                <label for=Commentaire> Commentaire:</label>
                <textarea id='Commentaire' name='Commentaire' value'".$Payement->Commentaire."'></textarea> <br>
             
                <label for=moyenpayement> Moyen de payement: </label>  <br>
                <input type=radio  name= 'moyenpayement'  value='prelevement' ".$ModePayement->Libelle." > Virement
                <input type=radio  name= 'moyenpayement'  value='carte' ".$ModePayement->Libelle." > Carte 
                <input type=radio  name= 'moyenpayement'  value='espece' ".$ModePayement->Libelle." > Espèce 
                <input type=radio  name= 'moyenpayement' value='cheque' ".$ModePayement->Libelle." > Chèque  <br> 

                <label for=numeroCheque> Numero de cheque:</label> 
               <input id='Cheque' autofocus='' name='Cheque' value'".$Cheque->Numero."'><br>
             
                <label for=dateRapprochement> Rapprochement: </label> 
                <input type='date' id='dateRapprochement' name='dateRapprochement' required=''> <br> <br>
             

                
                 <input type=hidden name='ID_ModePayement' value='".$ModePayement->ID_ModePayement." '>
                 <input type=hidden name='ID_Cheque' value='".$Cheque->ID_Cheque."'>
                 <input type=hidden name='ID_Payement' value='".$Payement->ID_Payement."'>
                 <input type=hidden name='ID_Piece' value='".$Piece->ID_Piece."'>
                <input type=hidden name='ID_Ecriture' value='".$Ecriture->ID_Ecriture."'>
                 <input type='submit' value='Valider'>
                      
                </fieldset>
                </form>
                        
         ";


?>
