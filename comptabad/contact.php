<?php
if (isset($_POST) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['message']))
{
    extract($_POST);
    if (!empty($nom) && !empty($email) && !empty($message))
    {
       $destinataire= "meryemeittohemad@gmail.com";
       $sujet ="Formulaire de contact";
       $msg="Une nouvelle question est arrivé \n 
       Nom : $nom \n
       Email: $email \n
       Message: $message";
       $entete="From: $nom \n Reply-To: $email";
       mail($destinataire,$sujet,$msg,$entete);
       echo "Le mail a bien été envoyé";
          
    }
    else 
    {
        echo "Vous n'avez pas rempli tout les champs";
    }
}

?>