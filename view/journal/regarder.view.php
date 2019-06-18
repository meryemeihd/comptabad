
<?php
echo '       
        <form action="/rapprochement/observer" method=post>
               <fieldset  id="section5">
              <legend id="regarder"> Recherche </legend>
                <label for="nom">Numero de pièce:</label>
                <input  id="numeroPiece" name="numeroPiece"> <br>
           
                <label for="dateEnregistrement"> Date d enregistrement:</label>
                 <input type="date" id="dateEnregistrement" name="dateEnregistrement"> <br>

                <label for="commentaire"> Commentaire: </label>
                 <textarea id="commentaire" name="commentaire"> </textarea> <br>
               

                <label for="libelle"> Libellé: </label>
                <input id="libelle" name="libelle"> <br>
                         
              
                <label for="numeroCheque"> Numero de Cheque </label>
                 <input id="numeroCheque" name="numeroCheque"> <br>
                             
                <label for="montant"> Montant: </label>
                <input id="montant" name="montant"> <br>
                                  
                
                      <input type="submit" value="Rechercher">
	
        </fieldset>
        </form>'
        ;
              
?>

       <div class="container bouton"> 
              <div class="button">
                  <button type="submit"> Tout </button>
                  <button type="submit"> Recette </button>
                  <button type="submit"> Depense </button>
              </div>
       </div>
           
       <!-- Faire tableau -->
  
    <!--
        <table class="table table-striped">   
        <tr>
           <th> Date saisie</th>
            <th>Numero</th>
            <th>Libelle</th>  
            <th> Commentaire</th>
            <th>Prix</th>
        </tr>
        ';
    -->
        

   
  
       
       <?php
       
     
       /*
                       echo" <input type=hidden name='ID_Facture' value='".$Facture->ID_Facture."'>";
                             echo" <input type=hidden name='ID_Piece' value='".$Piece->ID_Piece."'>";
                                   echo" <input type=hidden name='ID_Ecriture' value='".$Ecriture->ID_Ecriture."'>";
     
                   echo '<tr>'
                       
            
               . '<td> <center>'. $Ecriture->Date.  '</center></td>'
               . '<td> <center>'. $Piece->NumeroPiece.  '</center></td>'
               . '<td> <center>'. $Piece->DescriptionPiece.  '</center></td>'
               . '<td> <center>'. $Factue->Commentaire. $Payement->Commentaire.  '</center></td>'
               . '<td> <center>'. $Ecriture->Montant.  '</center></td>'

             
         ;
        * 
        */
       echo "<table>";
      // echo "<tr><td>Date saisie </td><td>Numero Facture</td><td> Numero de Payement</td><td>Description</td><td>Commentaire </td><td> Montant <th> Debit</td> </th></tr>";
       
       echo "<tr>"
       . "<td rowspan=2> Date saisie </td>"
               . "<td  rowspan=2> Numero Facture </td>"
               . " <td  rowspan=2> Numero Payement </td>"
               . "<td  rowspan=2> Description </td>"
               . "<td  rowspan=2> Commentaire </td>"
               . "<td  rowspan=2> Type de compte </td>"
               . "<td colspan=2> Montant </td>"
               . "</tr>"
               . "<tr>"
               . "<td> Débit </td> "
               . "<td> Crédit </td>"
               
               . "</tr> ";
       
       


while ($Ligne = $Connexion->sql_fetch_object($Resultat))
{
	
     //DEBIT 
    // SI MONTANT EST SUP A 0 VA DANS DEBIT 
     if ($Ligne->Montant>0)
      {
          //SI C'EST LA LIGNE AVEC LE NUMERO DE FACTURE
         //COULEUR POUR FACTURE
           if ($Ligne->NumeroFacture)
           {
                         echo "<tr><td bgcolor=#E13E3e>".$Ligne->Date."</td><td bgcolor=#E13E3e>".$Ligne->NumeroFacture."</td><td bgcolor=#919191> ".$Ligne->NumeroPayement."  <td bgcolor=#E13E3e>".$Ligne->DescriptionPiece."</td><td bgcolor=#E13E3e>".$Ligne->CommentaireFacture."" .$Ligne->CommentairePayement."</td><td> </td><td bgcolor=#208EA4>" .$Ligne->Montant." <td bgcolor=#919191></td></td>";
                     
           }
              //SINON SI C EST LA LIGNE AVEC LE NUMERO DE PAYEMENT
              //COULEUR POUR PAYEMENT 
           else 
           {
                          echo "<tr><td  bgcolor=#48C59A>".$Ligne->Date."</td><td bgcolor= 919191>".$Ligne->NumeroFacture."</td><td bgcolor=#48C59A> ".$Ligne->NumeroPayement." </td> <td bgcolor=48C59A>".$Ligne->DescriptionPiece."</td><td bgcolor=#48C59A>".$Ligne->CommentaireFacture."" .$Ligne->CommentairePayement."</td><td> </td><td bgcolor=#208EA4>" .$Ligne->Montant."<td bgcolor=#919191></td>";
                  
           }
        }
        //CREDIT
            // SI MONTANT EST INF  A 0 VA DANS DEBIT 
        else
       {
            //SI C'EST LA LIGNE AVEC LE NUMERO DE FACTURE
            //COULEUR POUR FACTURE
               if ($Ligne->NumeroFacture)
               {
                    echo "<tr><td bgcolor=#E13E3e>".$Ligne->Date."</td><td bgcolor=#E13E3e>".$Ligne->NumeroFacture."</td><td bgcolor=#919191> ".$Ligne->NumeroPayement."  <td bgcolor=#E13E3e>".$Ligne->DescriptionPiece."</td><td bgcolor= #E13E3e>".$Ligne->CommentaireFacture."" .$Ligne->CommentairePayement."</td><td> </td><td bgcolor=#919191><td bgcolor=#B6002F>" .-$Ligne->Montant."</td></td>";
                
               }
               
              //SINON SI C EST LA LIGNE AVEC LE NUMERO DE PAYEMENT
               //COULEUR POUR PAYEMENT
               else
               {
                     echo "<tr><td bgcolor=#48C59A>".$Ligne->Date."</td><td bgcolor=919191>".$Ligne->NumeroFacture."</td><td bgcolor=#48C59A> ".$Ligne->NumeroPayement." </td><td bgcolor=#48C59A>".$Ligne->DescriptionPiece."</td><td bgcolor=#48C59A>".$Ligne->CommentaireFacture."" .$Ligne->CommentairePayement."</td><td> </td><td bgcolor=#919191><td bgcolor=#B6002F>" .-$Ligne->Montant."</td></td>";
                
               }
       }
     
        
     
    
      
        
}


echo "</table>";
               
   
             //       echo "<pre>";
  //print_r($Facture);
 // echo "</pre>";
       
        

             