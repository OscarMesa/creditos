<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilidades
 *
 * @author omesagar
 */
class Utilidades {
    public static $mail = "soporte@openetwork.co";
    
    /**
     * 
     * @param type $text
     * @param type $limit
     * @return type
     */
    public static function limitText($text, $limit)
    {
        if (strlen($text) > $limit)
            return substr($text, 0, $limit) . '...';
        else
            return $text;
    }
}
