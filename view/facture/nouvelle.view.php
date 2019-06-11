
<?php
//formulaire de facture à designer 
//faire affcher le formulaire page facture pb
echo "<form action='/facture/save' method=post>
        
        <fieldset id='section2'>
               <legend id='depense'> Depense </legend>
               <label for=numero>Numero:</label>       
                <input  name='ID_Facture' value'".$Facture->ID_Facture."'> <br>
                    
                <label for=libelle>Libelle:</label>  
                <input id='NumeroFacture' autofocus='' name='NumeroFacture' required='' value'".$Facture->NumeroFacture."' > <br>
             
                <label for=date> Date:</label> 
                <input type='date' id='date' name='Date' value'".$Facture->Date."' ><br> 
             
                <label for=libelle>Libelle:</label>  
                <input id='DesignationFacture' autofocus='' name='DesignationFacture' required='' value'".$Facture->DesignationFacture."' > <br>
             
                <label for=libelle> Montant:</label>  
                <input id='PrixTTC' autofocus='' name='PrixTTC' required='' value'".$Facture->PrixTTC."'> 
                <label for=libelle>€</label>  <br>
                
               <label for=donneur> Nom du donneur facture: </label>
               <input id='Donneur' name='Donneur' value'".$Facture->Donneur."'>
             
                <label for=Commentaire> Commentaire:</label>
                <textarea id='Commentaire' name='Commentaire' value'".$Facture->Commentaire."'></textarea> <br>
             
                <label for=moyenpayement> Moyen de payement: </label>  <br>
                <input type=radio  name= moyenpayement value'' > Prélèvement
                <input type=radio  name= moyenpayement value'' > Carte 
                <input type=radio  name= moyenpayement  value''> Espèce 
                <input type=radio  name= moyenpayement value''> Chèque  <br> 

                <label for=numeroCheque> Numero de cheque:</label> 
               <input id='Cheque' autofocus='' name='Cheque' required=''  value''><br>
             
                <label for=dateRapprochement> Rapprochement: </label> 
                <input type='date' id='dateRapprochement' name='dateRapprochement' required=''> <br> <br>
             
                 <input type='submit' value='Valider'>
                      
                </fieldset>
                        
         ";

//  <label for=primaire> Numéro de l'entite:</label> 
   //                    <input  name='ID_Entite' value'".$Entite->ID_Entite."'> <br>
?>
