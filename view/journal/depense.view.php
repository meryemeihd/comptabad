<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



echo '       
        <form action="/journal/regarder" method=post>
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
   
   echo' <a href="/journal/regarder"><button type="submit"> Tout </button></a>';
   echo '<a href="/journal/recette"><button type="submit">Recette </button></a>';
   echo '<a href="/journal/depense"><button type="submit"> Dépense </button></a>';

     
       echo "<table>";
      
       echo "<tr>"
       . "<td rowspan=2> Date saisie </td>"
               . "<td  rowspan=2> Numero Facture </td>"
               . "<td  rowspan=2> Description </td>"
               . "<td  rowspan=2> Commentaire </td>"
               . "<td  rowspan=2> Type de compte </td>"
               . "<td  rowspan=2> Nom Prénom/Compagnie de l'attribution de la facture/payement </td>"
               . "<td  rowspan=2> Date Rapprochement </td>"
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
     if ($Ligne->Montant>=0)
      {
          //SI C'EST LA LIGNE AVEC LE NUMERO DE FACTURE
         //COULEUR POUR FACTURE
          
             if ($Ligne->NumeroFacture)
               {
                         echo "<tr><td bgcolor=#E13E3e>".$Ligne->Date."</td><td bgcolor=#E13E3e>".$Ligne->NumeroFacture."</td>  <td bgcolor=#E13E3e>".$Ligne->DescriptionPiece."</td><td bgcolor=#E13E3e>".$Ligne->CommentaireFacture."</td><td bgcolor=#E13E3e>".$Ligne->LibelleGenerique."</td><td bgcolor=#E13E3e>".$Ligne->Nom."&nbsp  &nbsp &nbsp".$Ligne->Prenom."</td><td bgcolor=#E13E3e>".$Ligne->DateRapprochement."</td><td bgcolor=#208EA4>" .$Ligne->Montant." <td bgcolor=#919191></td></td>";
               }
           
              //SINON SI C EST LA LIGNE AVEC LE NUMERO DE PAYEMENT
              //COULEUR POUR PAYEMENT 
          
        }
        //CREDIT
            // SI MONTANT EST INF  A 0 VA DANS DEBIT 
        else
       {
            //SI C'EST LA LIGNE AVEC LE NUMERO DE FACTURE
            //COULEUR POUR FACTURE
               if ($Ligne->NumeroFacture)
               {
                    echo "<tr><td bgcolor=#E13E3e>".$Ligne->Date."</td><td bgcolor=#E13E3e>".$Ligne->NumeroFacture."</td> <td bgcolor=#E13E3e>".$Ligne->DescriptionPiece."</td><td bgcolor= #E13E3e>".$Ligne->CommentaireFacture."</td><td bgcolor=#E13E3e>".$Ligne->LibelleGenerique." </td><td bgcolor=#E13E3e>".$Ligne->Nom."&nbsp  &nbsp &nbsp".$Ligne->Prenom."</td><td bgcolor=#E13E3e>".$Ligne->DateRapprochement."</td><td bgcolor=#919191><td bgcolor=#B6002F>" .-$Ligne->Montant."</td></td>";
               }
       
       }
     
        
     
    
      
        
}


echo "</table>";

               
   

             //       echo "<pre>";
  //print_r($Facture);
 // echo "</pre>";
       
        

             