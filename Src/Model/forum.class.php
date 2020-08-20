<?php

namespace App\Model;

class Forum
{
    private $forum_id;
    private $titre;
    private $nom_redacteur;
    private $email_redacteur;
    private $nb_view;
    private $date_post;

    public function __construct($forum_id,$titre,$nom_redacteur,$email_redacteur,$nb_view,$date_post)
    {
        $this->forum_id=$forum_id;
        $this->titre=$titre;
        $this->nom_redacteur=$nom_redacteur;
        $this->email_redacteur=$email_redacteur;
        $this->nb_view=$nb_view;
        $this->date_post=$date_post;
    }

    /**
     * Get the value of forum_id
     */ 
    public function getForum_id()
    {
        return $this->forum_id;
    }

    /**
     * Set the value of forum_id
     *
     * @return  self
     */ 
    public function setForum_id($forum_id)
    {
        $this->forum_id = $forum_id;

        return $this;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of nom_redacteur
     */ 
    public function getNom_redacteur()
    {
        return $this->nom_redacteur;
    }

    /**
     * Set the value of nom_redacteur
     *
     * @return  self
     */ 
    public function setNom_redacteur($nom_redacteur)
    {
        $this->nom_redacteur = $nom_redacteur;

        return $this;
    }

    /**
     * Get the value of email_redacteur
     */ 
    public function getEmail_redacteur()
    {
        return $this->email_redacteur;
    }

    /**
     * Set the value of email_redacteur
     *
     * @return  self
     */ 
    public function setEmail_redacteur($email_redacteur)
    {
        $this->email_redacteur = $email_redacteur;

        return $this;
    }

    /**
     * Get the value of nb_view
     */ 
    public function getNb_view()
    {
        return $this->nb_view;
    }

    /**
     * Set the value of nb_view
     *
     * @return  self
     */ 
    public function setNb_view($nb_view)
    {
        $this->nb_view = $nb_view;

        return $this;
    }

    /**
     * Get the value of date_post
     */ 
    public function getDate_post()
    {
        return $this->date_post;
    }

    /**
     * Set the value of date_post
     *
     * @return  self
     */ 
    public function setDate_post($date_post)
    {
        $this->date_post = $date_post;

        return $this;
    }
}
