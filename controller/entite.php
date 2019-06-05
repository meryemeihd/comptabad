<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class entite {

    public static function creation () {
        global $Entite;

        $Entite = new MyORM\Entite($_GET["param"][0] ?? null);
    }
    
    public static function save()
    {
        
        $Entite = new MyORM\Entite($_POST["ID_Entite"]) ;
        
       //recuperation donné
        $Entite ->Nom=$_POST['Nom'];
        $Entite ->CodePostal =$_POST['CodePostal'];
        $Entite ->Addresse =$_POST['Addresse'];
        $Entite->Ville=$_POST['Ville'];
        $Entite->Mail =$_POST['Mail'];
        $Entite->Tel=$_POST['Tel'];
        $Entite->Raison=$_POST['Raison'];
        $Entite->Siret=$_POST['Siret'];
        $Entite->Prenom=$_POST['Prenom'];
        $Entite->CodeTiers=$_POST['CodeTiers'];
        $Entite->Capital=$_POST['Capital'];
        $Entite->NumeroTva=$_POST['NumeroTva'];

        $Entite->save(); 
    }
    
    
}
