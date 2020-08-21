<?php

namespace App\Dao;

use App\Model\User;
use App\Dao\Connexion;
use App\Dao\IDao\DAOUser;
use Exception;

class UserDao implements DAOUser
{
    private $connexion = null;

    public function __construct()
    {
        $this->connexion = Connexion::getConnect();
    }

    /***
     * Retrouver tout les utilisateur du systeme
     */
    public function getAll()
    {

        try {
            $statement = $this->connexion->prepare("SELECT * FROM utilisateur");
            $statement->execute();
            if ($statement) {
                return $statement->fetchAll(\PDO::FETCH_OBJ);
            }
        } catch (Exception $e) {
            die('Exception :' . $e);
        }
    }

    /**
     * Retrouver utilisateur par ID
     */
    public function getById($id)
    {

        try {
            $statement = $this->connexion->prepare("SELECT * FROM utilisateur WHERE user_id=:user_id");
            $statement->execute([
                ':user_id' => $id
            ]);
            if ($statement) {
                return $statement->fetch(\PDO::FETCH_OBJ);
            }
        } catch (Exception $e) {
            die('Exception :' . $e);
        }
    }

    /**
     * Modifier un Utilisateur
     */
    public function editById(User $user)
    {

        try {
            $statement = $this->connexion->prepare("UPDATE utilisateur SET nom=:nom , prenom=:prenom , Type_user=:type_user WHERE user_id=:id_user");
            $statement->execute([
                ':nom' => $user->getNom(),
                ':prenom' => $user->getPrenom(),
                ':type_user' => $user->getType_user(),
                ':id_user' => $user->getUser_id()
            ]);
            if ($statement) {
                return true;
            }
        } catch (Exception $e) {
            die('Exception :' . $e);
        }
    }

    /**
     * Delete un utilisateur
     */
    public function deleteById($id)
    {

        try {
            $statement = $this->connexion->prepare("DELETE FROM utilisateur WHERE user_id=:user_id");
            $statement->execute([
                ':user_id' => $id
            ]);
            if ($statement) {
                return true;
            }
        } catch (Exception $e) {
            die('Exception :' . $e);
        }
    }

    public function create(User $user)
    {

        try {
            $statement = $this->connexion->prepare("INSERT INTO utilisateur (Nom,Prenom,Email,Type_User,Password,etat) VALUES(
                :nom,:prenom,:email,:type_user,:password,:etat
            )");
            $statement->execute([
                ':nom' => $user->getNom(),
                ':prenom' => $user->getPrenom(),
                ':email' => $user->getEmail(),
                ':type_user' => $user->getType_user(),
                ':password' => $user->getPassword(),
                ':etat' => $user->getEtat()
            ]);
            if ($statement) {
                return true;
            }
        } catch (Exception $e) {
            die('Exception :' . $e);
        }
    }
}
