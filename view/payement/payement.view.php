<?php
//formulaire de facture à designer 
//faire affcher le formulaire page facture pb
echo "<form action='/facture/affichage' method=post>
         <center> <label for=nom>Numero:</label> </center>
         <center> <input type=text id=numero name= numero></center>
             
         <center>  <label for=date> Date:</label> </center>
                <center>       <input type=date id=date name=date></center>
             
                 <center>     <label for=libelle>Libelle:</label> </center>
                   <center>   <input type=text id=libelle name= libelle></center>
             
                   <center>   <label for=Commentaire> Commentaire:</label> </center>
                   <center>   <input type=text id=Commentaire name= Commentaire></center>
             
                  <center>    <label for=moyenpayement> Moyen de payement: </label> </center>
                   <center>   <input type=radio  name= moyenpayement value=prelevement> Prélèvement/Virement</center>
                   <center>   <input type=radio  name= moyenpayement value=cartet> Carte</center>
                      <center><input type=radio  name= moyenpayement value=espece> Espèce</center>
                      
                      <center><label for=numeroCheque> Numero de cheque:</label> </center>
                  <center>    <input type=text id= numeroCheque name= numeroCheque></center>
             
                    <center>  <label for=dateRapprochement> Date de rapprochement: </label> </center>
                    <center>  <input type=text id=dateRapprochement name= dateRapprochement></center>
             
                    <center>  <button type=submit> Valider </button> </center>
                      
                       
                        
         ";


?>