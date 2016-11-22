<?php

final class Singleton {
   
    public static function getInstance() {
        static $inst = null;
        if ($inst === null) {
            $inst = new Singleton();
        }
        return $inst;
    }
    
    private function __construct() {
        
    }
    private function __clone() {
        
    }   
}
