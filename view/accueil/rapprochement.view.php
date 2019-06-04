<?php
echo "<div>
               <div>
                <label for='nom'>Numero de pièce:</label>
                <input type='text' id='numeroPiece' name='numeroPiece'>
               </div>
           
                <div>
                      <label for='dateEnregistrement'> Date d'enregistrement:</label>
                      <input type='date' id='dateEnregistrement' name='dateEnregistrement'>
                </div>
           
               <div>
                      <label for='commentaire'> Commentaire: </label>
                      <textarea id='commentaire' name='commentaire'> </textarea>
               </div>
           
               <div> 
                      <label for='libelle'> Libellé: </label>
                       <input type='text' id='libelle' name='libelle'>
               </div>
           
               <div>
                      <label for='numeroCheque'> Numero de Cheque </label>
                      <input type='text' id='numeroCheque' name='numeroCheque'>
               </div> 
           
               <div> 
                      <label for='montant'> Montant: </label>
                      <input type='text' id='montant' name='montant'>
               </div>
                   
                <div class='button'>
                     <button type='submit'> Recherche </button>
              </div>
        </div> ";
?>

    <table class="table table-striped">   
        <tr>
            <th> Date de saisie</th>
            <th>Numero de Pièce</th>
            <th>Commentaire</th>  
            <th>Libellé</th>
            <th>Montant</th>
            <th>Type de paiement </th>
            <th> Date de rapprochement </th>
        </tr>
        <!-- Commentaire 
        Rajouter Bouton 
        Toutes les saisies de l'exercice 
        Saisie rapproché de l'exercice 
        Saisie non rappoché de l'exercice
        
        + phrases avec Total des dépenses rapprochées et non rapprochées à mettre avec son total d'euros 
        + phrases avec Total des dépenses rapprochées et non rapprochées à mettre avec son total d'euros 
        
        bouton exporter et imprimer à mettre 
        -->
        
 <?php
 
 //insérer les éléments dans le tableau 
 //exemple 
 /*        foreach ($lesVehicules as $leVehicule) {
			
            echo '<tr>'
	       . '<td>' .'<a href= "index.php?uc=accueil&action=detail&id='.$leVehicule['vh_id'].'">'.$leNumero . '</a> '.'</center></td>'
               . '<td> <center>'. $leVehicule['mq_libelle'] . '</center></td>'
               . '<td> <center>' . $leVehicule['md_libelle'] . '</center></td>'
               . '<td> <center>' . $leVehicule['vh_km'] . '</center></td>'
               . '<td> <center>' . number_format($leVehicule['vh_prix'], 2, ',', ' ') . ' â‚¬</td>'
               . '</tr>';
        }
  
  */
 
 // dans le tableau nous retrouverons la date 
 //numero de piece
 //commentaire 
 //libellé 
 //Montant
 //Type de paiement 
 //Date de rappochement
       ?>
        
        