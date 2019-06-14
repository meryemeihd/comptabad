<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class piece {
    
         global $Piece;
            $Piece= new MyORM\Piece($_GET["param"][0]??null);
}
