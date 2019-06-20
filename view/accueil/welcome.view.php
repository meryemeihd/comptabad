
<!DOCTYPE html!>
<html>
<!--header-->
    <head>
        <title> Comptabad</title>
        
        <!-- CSS   -->
        <link rel="stylesheet" href="/src/normalize.css">
        <link rel="stylesheet" href="/src/header.css">
        <link href="css/style.css" rel="stylesheet">
        <!-- CSS   -->

        <!--font -->
        <link href = "https://fonts.googleapis.com/css?family= Open + Sans & display = swap" rel = "stylesheet">
        <!-- fin du font -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
	
<!--Fin du header -->
    <body>

	 
       
        <!-- Lien qui enmène vers le test liste -->
	
               
                   
              
               
<?php        
   
             if (!isset($_SESSION['utilisateur']))
             {
                 echo "<fieldset id='section1'>
               <legend id='accueil'> Accueil </legend>
                <p> <h1><center> Bienvenue!</center> </h1></p><br>
                <p> <h3> <center> Comptabad est une application web concernant la comptabilité du comptabilité de badminton </center </h3> </p> <br>
                <p> <h3> <center> Pour plus d'information contacter nous </center> </h3> </p>";
             }
             
 
           
            
           if (isset($_SESSION['utilisateur']))
           
           
                   echo "  <div id='accueil'>

	<div class='tab' id='d_men_action'>
            <center>
			<table>
			
				<tr>
                            
                                
                                                                                 <th><a href='/facture/nouvelle'>  <img src='https://image.flaticon.com/icons/svg/181/181095.svg' heigth=100 width=100 alt=''/></center><br/>Saisie Dépense  </th>
					 <th> <a href='/payement/paye'> <img src='https://image.flaticon.com/icons/svg/1573/1573381.svg' height=100 width=100 text-align:center  alt=''/><br/>Saisie Recette</a>  </th>
                                                                         

					
				</tr>
				<tr>
					 <th> <a href='/journal/regarder'><img src='https://image.flaticon.com/icons/svg/1809/1809639.svg' heigth=100  width=100  alt='' align=middle/><br/>Visualisation du journal</a>  </th>
					 <th> <a href='index.php?p=u_compte_resultat'><img src='https://image.flaticon.com/icons/svg/1802/1802587.svg' heigth=100 width=100 alt=''/><br/>Visualisation du <br/> Compte de résultat</a>  </th>
					
				</tr>
				<tr>
					 <th> <a href='/rapprochement/observer'><img src='https://image.flaticon.com/icons/svg/138/138368.svg' heigth=100 width=100  alt=''/><br/>Rapprochement bancaire</a>  </th>
                                                                                 <th> <a href='index.php?p=perso_action'><img src='https://image.flaticon.com/icons/svg/1802/1802607.svg' heigth=100 width=100  alt=''/> <br/> Bilan</a> </th>

				</tr>
				<tr>
				 <th><a href='/utilisateur/personne'><img src='https://image.flaticon.com/icons/svg/1616/1616039.svg' heigth=100 width=100  alt=''/> <br/> Utilisateur</a> </th>
                                                                 <th><a href='/entite/creation'> <img src='https://image.flaticon.com/icons/svg/1731/1731865.svg' height=100 width=100 text-align:center  alt=''/><br/> Saisir tiers</a>  </th>

				</tr>
			</table> 
            </center>
	</div>
	
	
           </div>" 
           
           ;
                   
    
?>

    
 </body>
</html>