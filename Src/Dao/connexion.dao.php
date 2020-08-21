<?php

namespace App\Dao;

class Connexion
{

    private static $connexion = null;
    //private Database ;
    private function __construct()
    {
    }
    public static function getConnect()
    {
        if (self::$connexion == null) {
            self::$connexion = new Database();
        }
        return self::$connexion->getConnexion();
    }
}
