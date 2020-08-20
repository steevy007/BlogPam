<?php
namespace App\Model;
class Article{
    private $article_id;
    private $user_id;
    private $titre_id;
    private $path_photo;
    private $nb_view;
    private $sujet;
    private $date_post;

    public function __construct($article_id,$user_id,$titre_id,$path_photo,$nb_view,$sujet,$date_post)
    {
        $this->article_id=$article_id;
        $this->user_id=$user_id;
        $this->titre_id=$titre_id;
        $this->path_photo=$path_photo;
        $this->sujet=$sujet;
        $this->date_post=$date_post;
    }

    /**
     * Get the value of article_id
     */ 
    public function getArticle_id()
    {
        return $this->article_id;
    }

    /**
     * Set the value of article_id
     *
     * @return  self
     */ 
    public function setArticle_id($article_id)
    {
        $this->article_id = $article_id;

        return $this;
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
     * Get the value of titre_id
     */ 
    public function getTitre_id()
    {
        return $this->titre_id;
    }

    /**
     * Set the value of titre_id
     *
     * @return  self
     */ 
    public function setTitre_id($titre_id)
    {
        $this->titre_id = $titre_id;

        return $this;
    }

    /**
     * Get the value of path_photo
     */ 
    public function getPath_photo()
    {
        return $this->path_photo;
    }

    /**
     * Set the value of path_photo
     *
     * @return  self
     */ 
    public function setPath_photo($path_photo)
    {
        $this->path_photo = $path_photo;

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
     * Get the value of sujet
     */ 
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set the value of sujet
     *
     * @return  self
     */ 
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

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