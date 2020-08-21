<?php

namespace App\Model;

class User
{
    private $user_id;
    private $nom;
    private $prenom;
    private $Email;
    private $type_user;
    private $password;
    private $date_created;
    private $etat;

    public function __construct($user_id,$nom,$prenom,$Email,$type_user,$password,$date_created)
    {
        $this->user_id=$user_id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->Email=$Email;
        $this->type_user=$type_user;
        $this->password=$password;
        $this->etat='oui';
        $this->date_created=$date_created;
    }

    /**
     * Get the value of user_id
     */
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of Email
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     *
     * @return  self
     */
    public function setEmail($Email)
    {
        $this->Email = $Email;

        return $this;
    }

    /**
     * Get the value of type_user
     */
    public function getType_user()
    {
        return $this->type_user;
    }

    /**
     * Set the value of type_user
     *
     * @return  self
     */
    public function setType_user($type_user)
    {
        $this->type_user = $type_user;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of date_created
     */
    public function getDate_created()
    {
        return $this->date_created;
    }

    /**
     * Set the value of date_created
     *
     * @return  self
     */
    public function setDate_created($date_created)
    {
        $this->date_created = $date_created;

        return $this;
    }

    /**
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     *
     * @return  self
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }
}
