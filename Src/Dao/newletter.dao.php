<?php

namespace App\Dao;

use App\Dao\IDao\NEWSLETTERDao as IDaoNEWSLETTERDao;
use App\Model\Newsletter;
use App\Dao\Connexion;
use Exception;

class NewletterDao implements IDaoNEWSLETTERDao
{

    private $connexion = null;

    public function __construct()
    {
        $this->connexion = Connexion::getConnect();
    }

    /**
     * fonction pour afficher liste newsletter
     */
    public function getAll()
    {
        try {
            $statement = $this->connexion->prepare("SELECT * FROM newsletter");
            $statement->execute();
            if ($statement) {
                return $statement->fetchAll(\PDO::FETCH_OBJ);
            }
        } catch (Exception $e) {
            die('Error :' . $e);
        }
    }

    /**
     * fonction pour creer newletter
     */
    public function create(Newsletter $newsletter)
    {
        try {
            $statement = $this->connexion->prepare("INSERT INTO newsletter(email) VALUES(:email)");
            $statement->execute([
                ':email' => $newsletter->getEmail()
            ]);
            
        } catch (Exception $e) {
            die('Error :' . $e);
        }
    }
}
