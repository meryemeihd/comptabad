
<?php
//formulaire de facture à designer 
//faire affcher le formulaire page facture pb
echo "<form action='/payement/save' method=post>
        
        <fieldset  id='section3'>
               <legend id='paye'> Recette </legend>
               <label for=numero>Numero:</label> 
                <input name='ID_Payement' value'".$Payement->ID_Payement."'><br>          
             
                <label for=date> Date:</label> 
                <input type='Date' id='Date' name='Date' required='' value'".$Payement->Date."'><br> 
             
                <label for=libelle>Libelle:</label>  
                <input  name='JustificatifPayement'  value'".$Payement->JustificatifPayement."'> <br>
          
                <label for=libelle> Montant:</label>  
                <input id='Montant' autofocus='' name='Montant' required='' value'".$Payement->Montant."'> 
                 <label for=libelle>€</label>  <br>

                <label for=Commentaire> Commentaire:</label>
                <textarea id='Commentaire' name='Commentaire' value'".$Payement->Commentaire."'></textarea> <br>
             
                <label for=moyenpayement> Moyen de payement: </label>  <br>
                <input type=radio  name= 'moyenpayement' value'' > Virement
                <input type=radio  name= 'moyenpayement' value''> Carte 
                <input type=radio  name= 'moyenpayement' value''> Espèce 
                <input type=radio  name= 'moyenpayement'  value''> Chèque  <br> 

                <label for=numeroCheque> Numero de cheque:</label> 
               <input id='Cheque' autofocus='' name='Cheque' required='' value''><br>
             
                <label for=dateRapprochement> Rapprochement: </label> 
                <input type='date' id='dateRapprochement' name='dateRapprochement' required=''> <br> <br>
             
                 <input type='submit' value='Valider'>
                      
                </fieldset>
                </form>
                        
         ";


?>
