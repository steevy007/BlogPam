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
            echo 'Connexion reussi';
        } catch (\Exception $e) {
            die('Error :' . $e);
        }
    }
}
