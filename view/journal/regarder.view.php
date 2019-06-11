
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
            <th> Date de saisie</th>
            <th> Numéro de pièce </th>
            <th> Libelle</th>  
            <th> Commentaire</th>
            <th>  Montant</th>
            <th> Type de paiement </th>
            <th> Date de rapprochement </th>
        </tr>
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
        
             