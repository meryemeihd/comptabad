
<?php 

echo '
        <div class="container utilisateur">
        <form action="/utilisateur/personne" method=post>
      
       <fieldset  id="section4">
              <legend id="personne"> Utilisateur </legend>
                  
                  <h3> <center> Information</center> </h3>
                  <label for="nom">Nom:</label>
                  <input id="nomUtilisateur" autofocus="" name="nomUtilisateur" required=""> <br>
				
                  <label for="prenom">Prénom:</label>
                  <input id="prenomUtilisateur" autofocus="" name="prenomUtilisateur" required=""> <br>
				
                  <label for="fonction">Fonction:</label>
                  <input id="fonction" autofocus="" name="fonction" required=""> <br>
				
                  <label for="fonction">Fonction:</label>
                  <input id="fonction" autofocus="" name="fonction" required=""> <br>
				
                  <label for="mail">Email:</label>
                  <input  id="Email" autofocus="" name="Email" required=""> <br>
				
			
                  <h3> <center> Changer le nom </center> </h3>
                  <label for="pseudo"> Nom actuelle  </label>
                  <input id="pseudo" autofocus="" name="pseudo" required="">  <br>
                   <label for="pseudo2"> &nbsp &nbsp Nouveau nom: </label> 
                   <input id="pseudo2" autofocus="" name="pseudo2" required=""><br> 
				
                  <h3> <center> Changer le mot de passe </center> </h3>		  
                  <label for="mdp">Mot de passe actuelle: </label>
                  <input type="password" autofocus="" id="mdp" name="mdp" required="><br>
                  <label for="mdp2"> &nbsp Nouveau mot de passe: </label> 
                  <input type="password" placeholder="******"  name="mdp2"   > <br>
                   

                 
                  <input type="submit" value="Valider">
	
        </fieldset>
        </form>
				
				
        ';

?>
	
  <!--bottom -->
  
  <!--Fin du bottom --> 
 </body>
</html>