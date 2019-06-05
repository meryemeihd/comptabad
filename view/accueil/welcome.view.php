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
	
<!--Fin du header -->
    <body>
	
        <!-- Lien qui enmène vers le test liste -->
	<a href='/test/liste'>Test</a>
        <!-- Lien qui enmène vers la page d'authentification --> 
               <a href='/authentification/verification'> Authentification </a> 
               <?php

               
//si on est authentifié alors 
        if (isset($_SESSION["utilisateur"]))
    {
        //lien qui enmène vers la déconnexion 
        echo  "<a href='/authentification/deconnexion'> Déconnexion </a>";
         echo  "<a href='/entite/creation'> Entite </a>" ;
    }
?>

    
 </body>
</html>