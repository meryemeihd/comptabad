<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class cheque {
    
    public  static function cheque()
    {
     global $Cheque;
        $Cheque = new MyORM\Cheque($_GET["param"][0] ?? null);
 }
 public static function save() {
     
             $Cheque =new MyORM\Cheque($_POST["ID_Cheque"]);

 }
}
