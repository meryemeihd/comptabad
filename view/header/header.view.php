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
	
 <?php
   if (!isset($_SESSION['utilisateur']))
      echo'
        <header role="header">
            <nav class="menu" role="navigation">
                <div class="inner">
                <div class="m-left">
                    <h1 class="logo">Comptabad</h1>
                </div>
                <div class="m-right">
                    <a href="/accueil/welcome" class="m-link"> Accueil</a>
                    <a href="/authentification/verification" class="m-link"> Connexion </a>
                    <a href="#" class="m-link"> A propos </a>
                    <a href="/contact/formulaire" class="m-link"> Contact </a>
                    </div>
                </div>
            </nav>
            
        </header>';
   
     if (isset($_SESSION["utilisateur"]))
    {
            
    echo '
            <header role="header">
            <nav class="menu" role="navigation">
                <div class="inner">
                <div class="m-left">
                    <h1 class="logo">Comptabad</h1>
                </div>
                <div class="m-right">
                    <a href="/accueil/welcome" class="m-link"> Accueil</a>						
                    <a href="/authentification/deconnexion" class="m-link"> Deconnexion</a>
                    <a href="#" class="m-link"> A propos </a>
                    <a href="/contact/formulaire" class="m-link"> Contact </a>
                </div>
               </div>
              </nav>
              
                    
                           
        </header> ';
    }
                ?>

   