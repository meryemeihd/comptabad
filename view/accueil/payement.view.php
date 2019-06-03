<?php
echo "Welcome";


?>
<html>
<!--header-->
    <head>
        <title> Comptabad</title>
        
        <!-- CSS   -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        
        <link href="css/style.css" rel="stylesheet">
        <!-- CSS   -->

        <!--font -->
        <link href = "https://fonts.googleapis.com/css?family= Open + Sans & display = swap" rel = "stylesheet">
        <!-- fin du font -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<!-- fin du header -->
    <body>
	
        <div class="container payement">
               <div>
                <label for="nom">Numero:</label>
                <input type="text" id="numero" name="numero">
                </div>

                  <div>
                   <label for="date"> Date:</label>
                   <input type="date" id="date" name="date">
                   </div>

                    <div>
                    <label for="libelle">Libelle :</label>
                    <textarea id="libelle" name="libelle"></textarea>
                     </div>
                     <div>
                     <label for="Commentaire">Commentaire :</label>
                     <textarea id="commentaire" name="commentaire"></textarea>
                     </div>
    
                      <div>
                      <label for="moyenpayement"> Moyen de payement: </label>
                      <input type="radio" name="moyenpayement" value="prélèvement" > Prélevement/Virement
                       <input type="radio" name="moyenpayement" value="carte"> Carte
                       <input type="radio" name="moyenpayement" value="Espèce">Espèce
                       <input type="radio" name="moyenpayement" value="Chèque"> Chèque 
 
                        </div>

                        <div>
                            <label for="nom">Numero de cheque:</label>
                            <input type="text" id="numeroCheque" name="numeroCheque">
                          </div>

                         <div>
                            <label for="dateRapprochement"> Date de rapprochement:</label>
                            <input type="date" id="dateRapprochement" name="dateRapprochement">
                          </div>



                          <div class="button">
                           <button type="submit"> Valider </button>
                          </div>
        </div>
<!--bottom -->
  
<!--Fin du bottom --> 
    
 </body>
</html>