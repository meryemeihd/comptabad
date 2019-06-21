
<?php 
if (isset($_SESSION["utilisateur"]))
{
   
echo '
        <div class="container utilisateur">
       <form action="/utilisateur/save" method=post>';
     while ($Ligne = $Connexion->sql_fetch_object($ResultatUtilisateur))
{ 
     echo'  <fieldset  id="section4"> 
              <legend id="personne"> Utilisateur </legend>
                  
                  <h3> <center> Information</center> </h3>
                
                  <label for="nom">Nom:</label> 
                   <tr><td >'.$Ligne->Nom.'</td><br>     <label for="prenom">&nbsp &nbsp&nbspPrénom:</label>
                    <tr><td >'.$Ligne->Prenom.'</td><br>  <label for="mail">&nbsp &nbsp&nbspEmail:</label>
                    <tr><td >'.$Ligne->Mail.'</td> <br>
                      
	<label for="fonction">&nbsp &nbsp&nbspFonction:</label>
                    <tr><td >'.$Ligne->Fonction.'</td><br>
                                        <label for="pseudo"> Login actuelle:  </label>
                  <td>'.$Ligne->Login.'</td>  <br>
			
                  <h3> <center> Changer information </center> </h3><br> <br>  
                <tr><td>Nouvelle fonction :</td><td><input id="pseudo2" name="pseudo2" value='.$Ligne->Login.'></td></tr><br>
                <tr><td>Nouvelle fonction :</td><td><input id="fonction2" name="fonction2" value='.$Ligne->Fonction.'></td></tr><br>
                <tr><td>Changement de mail :</td><td><input id="mail2" name="mail2" value='.$Ligne->Mail.'></td></tr><br>
		
  
        
                  <h3> <center> Changer le mot de passe </center> </h3>	
                  <label for="mdpNv"> Nouveau mot de passe: </label>
                  <input type="password" placeholder="******"  name="mdpNv" ><br>
                  <label for="mdp2"> &nbsp&nbsp Confirmer le nouveau mot de passe: </label> 
                  <input type="password" placeholder="******"  name="mdp2"   > <br>
            

                 
                  <input type="submit"  value="Valider">
                  
		
	
        </fieldset>
        </form>
         		
				
        ';
     echo "<input type=hidden name='ID_Utilisateur' value='".$Utilisateur->ID_Utilisateur."'>";
     }
     
}

?>
	
  <!--bottom -->
  
  <!--Fin du bottom --> 