<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class bilan {
    
 public static function constater() {
     
       global $Connexion;
      
        $Query="SELECT * FROM Exercice ";
      
      global $Date;
      
      $Date = $Connexion->sql_query($Query);
 }
 
 public static function  save () {
     
     
     $Day;
     if (isset($_POST["DateExercice"]))
     {
         
     }    
 }
    
}
