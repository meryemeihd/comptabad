<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class journal
{
 public static function regarder () {
       
       global $Journal;
     $Journal = new MyORM\Journal($_GET["param"][0] ?? null);
 }
}
