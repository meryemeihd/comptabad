<?php
//formulaire de facture à designer 
//faire affcher le formulaire page facture pb
echo "<form action='/bilan/save' method='post'> ";

         while ($Ligne = $Connexion->sql_fetch_object($Date))
         {
              echo "   <center> <h1> Bilan du $Ligne->DateDebut au $Ligne->DateFin</h1> </center>
                  
               <label for=date> Date début:</label> 
                <input type='DateDebut' id='DateDebut' name='DateDebut' value='".$Ligne->DateDebut." ' >
                 
                 <label for=date> Date fin:</label> 
                <input type='DateFin' id='DateFin' name='DateFin' value='".$Ligne->DateFin." ' >
                 
                 <button type=submit name=DateExercice>Valider</button>
                  
</form> 
";
         }





?>