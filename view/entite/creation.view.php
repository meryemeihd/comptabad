<?php


/*
echo "<pre>";
print_r($Entite);
echo "</pre>";
 * */
 
echo $Entite->Parent_TypeEntite->Nom;



$Ojb = new MyORM\Exercice();

$Entite->add_Exercice_Exercice($Ojb);



echo "
    
<form action='/entite/save' method=post>
    


                      <center> <label for=primaire> Numéro de l'entite:</label> </center>
                       <input type=hidden name='ID_Entite' value'".$Entite->ID_Entite."'> 
                           
                      <center>   <label for=id_te> Type d'entité:</label> </center>
                      <center>   <input type=hidden  name='ID_TypeEntite' value='".($Entite->ID_TypeEntite ?? 1)."'>".($Entite->Parent_TypeEntite->Nom ?? '')."</center>
                   
                      <center>   <label for=nom> Nom:</label> </center>
                      <center>   <input type=text  name='Nom' value='".$Entite->Nom."'></center>
                    
                       <center>   <label for=cp> Code Postal:</label> </center>
                      <center>   <input type=text  name='CodePostal' value='".$Entite->CodePostal."'></center>
                    
                      <center>   <label for=addresse> Addresse:</label> </center>
                      <center>   <input type=text  name='Addresse' value='".$Entite->Addresse."'></center>
             
                      <center>   <label for=ville> Ville:</label> </center>
                      <center>   <input type=text  name='Ville' value='".$Entite->Ville."'></center>
                      
                       <center>   <label for=Maiil> Mail:</label> </center>
                      <center>   <input type=text  name='Mail' value='".$Entite->Mail."'></center>
                     
                      <center>   <label for=Tel> Tel:</label> </center>
                      <center>   <input type=text  name='Tel' value='".$Entite->Tel."'></center>
                     
                      <center>   <label for=raison> Raison:</label> </center>
                      <center>   <input type=text  name='Raison' value='".$Entite->Raison."'></center>
                     
                      <center>   <label for=siret> Siret:</label> </center>
                      <center>   <input type=text  name='Siret' value='".$Entite->Siret."'></center>
                      
                      <center>   <label for=prenom> Prenom:</label> </center>
                      <center>   <input type=text  name='Prenom' value='".$Entite->Prenom."'></center>
                      
                       <center>   <label for=CodeTiers> Code de Tiers:</label> </center>
                      <center>   <input type=text  name='CodeTiers' value='".$Entite->CodeTiers."'></center>
                    
                      <center>   <label for=capital> Capital:</label> </center>
                      <center>   <input type=text  name='Capital' value='".$Entite->Capital."'></center>
                     
                      <center>   <label for=numTva> Numero de Tva:</label> </center>
                      <center>   <input type=text  name='NumeroTva' value='".$Entite->NumeroTva."'></center>
             
             

                    <center>  <button type=submit> Valider </button> </center>
       
</form>
                      
                       
                        
         ";
?>
