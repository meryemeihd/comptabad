<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo "<form method='post' action='compteResultat/afficher'>
    <center> <h1> Visualisation du compte résultat </h1> </center> ";
         
     echo "<table>";
      
  echo "     <tr>"
       . "<td> Charges</td>"
               . "<td > Montant </td>"
               . " <td >  </td>"
               . "<td > Produits </td>"
               . "<td> Montant €	</td>"
               . "<td>  </td>"
               . "</tr>" ;
  while ($Ligne = $Connexion->sql_fetch_object($CompteResultat))
{
      if ($Ligne->Facture)
      {
              echo "<tr><td>".$Ligne->LibelleGenerique."</td><td>" .$Ligne->Montant." </td><td></td> <td></td><td></td><td></td>";
      }
      else 
      {
           echo "<tr><td> </td><td></td> <td> </td><td>".$Ligne->LibelleGenerique."</td><td>" .$Ligne->Montant." </td> <td> </td>";
      }
  }
  
    echo "<table>";


