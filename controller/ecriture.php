<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ecriture
{
         global $Ecriture;
        $Ecriture= new MyORM\Ecriture($_GET["param"][0]??null);
        
      
}
