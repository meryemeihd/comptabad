
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
    
        <table class="table table-striped">   
        <tr>
           <th> Date saisie</th>
            <th>Numero</th>
            <th>Libelle</th>  
            <th> Commentaire</th>
            <th>Prix</th>
        </tr>
  
       
       <?php
       
        echo" <form action='/rapprochement/afficher' method=post>";
       
                       echo" <input type=hidden name='ID_Facture' value='".$Facture->ID_Facture."'>";
                             echo" <input type=hidden name='ID_Piece' value='".$Piece->ID_Piece."'>";
                                   echo" <input type=hidden name='ID_Ecriture' value='".$Ecriture->ID_Ecriture."'>";
     
                   echo '<tr>'
                       
               . '<td> <center>'. $Ecriture->Date.  '</center></td>'
               . '<td> <center>'. $Piece->NumeroPiece.  '</center></td>'
               . '<td> <center>'. $Piece->DescriptionPiece.  '</center></td>'
               . '<td> <center>'. $Facture->Commentaire.  '</center></td>'
               . '<td> <center>'. $Ecriture->Montant.  '</center></td>'
             
         ;
                    echo "</form>"; 
   
                    echo "<pre>";
  print_r($Facture);
  echo "</pre>";
        ?>
        
        
        </table>
        <!--Note -->
        <!-- priviligier les combobox plutôt que les textbox
        revoir la structure pour qu'elle soit plus conforme 
        insérer des couleurs sur page et boutons
        rajouté le truc actions en plus si tps 
        ainsi que page précédente et suivante 
        bouton exporter et imprimer à faire 
        phrases comme somme des recettes et sommes des dépenses aussi avec le total à la fin à faire 
        faire comme la structure 
        <!-- Fin note -->
        
             