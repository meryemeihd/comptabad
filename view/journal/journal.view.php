<?php
echo "Welcome";
?>
<html>
   <!--Header-->
   
   <!--Fin header--> 
   <body>
       <div class="container rapprochement">
               <div>
                <label for="nom">Numero de pièce:</label>
                <input type="text" id="numeroPiece" name="numeroPiece">
               </div>
           
                <div>
                      <label for="dateEnregistrement"> Date d'enregistrement:</label>
                      <input type="date" id="dateEnregistrement" name="dateEnregistrement">
                </div>
           
               <div>
                      <label for="commentaire"> Commentaire: </label>
                      <textarea id="commentaire" name="commentaire"> </textarea>
               </div>
           
               <div> 
                      <label for="libelle"> Libellé: </label>
                       <input type="text" id="libelle" name="libelle">
               </div>
           
               <div>
                      <label for="numeroCheque"> Numero de Cheque </label>
                      <input type="text" id="numeroCheque" name="numeroCheque">
               </div> 
           
               <div> 
                      <label for='montant'> Montant: </label>
                      <input type="text" id='montant' name="montant">
               </div>
                   
                <div class="button">
                     <button type="submit"> Recherche </button>
              </div>
        </div>
              
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
            <th> Date de saisie</th>
            <th> Numéro de pièce </th>
            <th> Libelle</th>  
            <th> Commentaire</th>
            <th>  Montant</th>
            <th> Type de paiement </th>
            <th> Date de rapprochement </th>
        </tr>
        
        
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
        
              <?php
         
        foreach ($lesJournaux as $leJournaux) {
			
            echo '<tr>'
               . '<td>' .'<a href= "jounral/liste='.$leJournaux['Date'].'">'. '</a> '.'</center></td>' //pour la date de saisie
               . '<td> <center>'. $leJournaux['ID_Piece"'] . '</center></td>' //numéro pièce 
               . '<td> <center>' . $leJournaux[''] . '</center></td>' //pour le libelle 
               . '<td> <center>' . $leJournaux[''] . '</center></td>' //pour le commentaire
               . '<td> <center>' . $leJournaux[''] . '</center></td>' //pour le montant 
               . '<td> <center>' . $leJournaux[''] . '</center></td>' //type de payement
               . '<td> <center>' . $leJournaux[''] . '</center></td>' // A voir si je fais pas une case en mode c'est des recttes ou non 
               . '</tr>';
        }
       ?>
    </table>
   </body>
</html>