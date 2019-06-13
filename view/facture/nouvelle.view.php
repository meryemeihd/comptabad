
<?php
//formulaire de facture à designer 
//faire affcher le formulaire page facture pb


        
        
echo "<form action='/facture/save' method=post>
        
        <fieldset id='section2'>
               <legend id='depense'> Depense </legend>
                    
                <label for=libelle>Numero:</label>  
                <input id='NumeroFacture' autofocus='' name='NumeroFacture' required='' value='".$Facture->NumeroFacture."' ".$Piece->NumeroPiece."> <br>
             
                <label for=date> Date:</label> 
                <input type='date' id='date' name='Date' value'".$Facture->Date." ".$Ecriture1->Date."' ><br> 
             
                <label for=libelle>Libelle:</label>  
                <input id='DesignationFacture' autofocus='' name='DesignationFacture' required='' value'".$Piece->DescriptionPiece." ".$Facture->DesignationFacture." ' > <br>
             
                <label for=libelle> Montant:</label>  
                <input id='PrixTTC' autofocus='' name='PrixTTC' required='' value'".$Facture->PrixTTC." ".$Ecriture1->Montant."'> 
                <label for=libelle>€</label>  <br>
                
               <label for=donneur> Nom du donneur facture: </label>
               <input id='Donneur' name='Donneur' value'".$Facture->Donneur."'>
             
                <label for=Commentaire> Commentaire:</label>
                <textarea id='Commentaire' name='Commentaire' ".$Facture->Commentaire."></textarea> <br>
             
                <label for=moyenpayement> Moyen de payement: </label>  <br>
                ";

                while  ($value = $Connexion->sql_fetch_object($ResultatModePayement)) {
                    echo "<input type=radio  name='ID_ModePayement' value='".$value->ID_ModePayement."'";
                    if ($value->ID_ModePayement == $Facture->ID_ModePayement)
                        echo " checked";
                    echo "> ".$value->Libelle."</input>";
                }
                
                echo "<br> 

                <label for=numeroCheque> Numero de cheque:</label> 
               <input   name='Cheque'  value'".$Cheque->Numero."><br>
             
                <label for=dateRapprochement> Rapprochement: </label> 
                <input type='date' id='dateRapprochement' name='dateRapprochement' required=''> <br> <br>
                
                 <input type=hidden name='ID_Cheque' value='".$Cheque->ID_Cheque."'>
                 <input type=hidden name='ID_Facture' value='".$Facture->ID_Facture."'>
                <input type=hidden name='ID_Piece' value='".$Piece->ID_Piece."'>
                <input type=hidden name='ID_Ecriture' value='".$Ecriture1->ID_Ecriture."'> 

       
                    

                 <input type='submit' value='Valider'>
                      
                </fieldset>
                        
         ";

//  <label for=primaire> Numéro de l'entite:</label> 
   //                    <input  name='ID_Entite' value'".$Entite->ID_Entite."'> <br>
?>
