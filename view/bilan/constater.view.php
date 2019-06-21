<?php
//formulaire de facture à designer 
//faire affcher le formulaire page facture pb
echo "<form action='/bilan/save' method='post'> ";

         while ($Ligne = $Connexion->sql_fetch_object($Date))
         {
              echo "   <center> <h1> Bilan du $Ligne->DateDebut au $Ligne->DateFin</h1> </center>
                  
</form> 
";
         }





?>