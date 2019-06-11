
<?php


/*
echo "<pre>";
print_r($Entite);
echo "</pre>";
 * */
 
//echo $Entite->Parent_TypeEntite->Nom;



$Ojb = new MyORM\Exercice();

$Entite->add_Exercice_Exercice($Ojb);


//                    <center>   <input type=hidden  name='ID_TypeEntite' value='".($Entite->ID_TypeEntite ?? 1)."'>".($Entite->Parent_TypeEntite->Nom ?? '')."</center>

echo "
    <form action='/entite/save' method=post>
    
               <fieldset id='section5'>
               <legend id='creation'> Entite </legend>

                      <label for=primaire> Numéro de l'entite:</label> 
                       <input  name='ID_Entite' value'".$Entite->ID_Entite."'> <br>
                           
                       <label for=id_te> Type d'entité:</label> <br>
                   
                       <label for=nom> Nom:</label> 
                        <input id='nom'  name='Nom' value='".$Entite->Nom."'><br>
                    
                        <label for=prenom> Prenom:</label> 
                       <input name='Prenom' value='".$Entite->Prenom."'> <br>
                    
                        <label for=cp> Code Postal:</label> 
                        <input   name='CodePostal' value='".$Entite->CodePostal."'> <br>
                    
                        <label for=addresse> Addresse:</label>
                        <input  name='Addresse' value='".$Entite->Addresse."'> <br>
             
                       <label for=ville> Ville:</label>
                        <input  name='Ville' value='".$Entite->Ville."'><br>
                      
                       <label for=Maiil> Mail:</label> 
                        <input  name='Mail' value='".$Entite->Mail."'> <br>
                     
                        <label for=Tel> Tel:</label> 
                        <input  name='Tel' value='".$Entite->Tel."'> <br>
                     
                       <label for=raison> Raison:</label> 
                       <input  name='Raison' value='".$Entite->Raison."'> <br>
                     
                       <label for=siret> Siret:</label> 
                        <input name='Siret' value='".$Entite->Siret."'> <br>
                      
                       <label for=CodeTiers> Code de Tiers:</label> 
                       <input name='CodeTiers' value='".$Entite->CodeTiers."'> <br>
                    
                      <label for=capital> Capital:</label> 
                        <input name='Capital' value='".$Entite->Capital."'> <br>
                     
                        <label for=numTva> Numero de Tva:</label> 
                        <input  name='NumeroTva' value='".$Entite->NumeroTva."'> <br>
             

                        <input type='submit' value='Valider'>
             

                    
       </fiedset>
</form>
                      
                       
                        
         ";
?>
