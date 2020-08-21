<?php

namespace App\Dao;

class Database
{
    private $connexion;

    public function __construct()
    {
        $host     = 'localhost';
        $dbName   = 'blogpam';
        $user     = 'root';
        $password = '';

        try {
            $this->connexion = new \PDO("mysql:host=localhost;dbname=$dbName", $user, $password);
            $this->connexion->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        } catch (\Exception $e) {
            die('Error :' . $e);
        }
    }

   

    /**
     * Get the value of connexion
     */ 
    public function getConnexion()
    {
        return $this->connexion;
    }
}
