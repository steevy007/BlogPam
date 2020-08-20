<?php

namespace App\Model;

class CommentF
{
    private $commentaire_id;
    private $article_id;
    private $nomC_user;
    private $email_user;
    private $text_comment;
    private $comment_at;

    public function __construct($commentaire_id,$article_id,$nomC_user,$email_user,$text_comment,$comment_at)
    {
        $this->commentaire_id=$commentaire_id;
        $this->article_id=$article_id;
        $this->nomC_user=$nomC_user;
        $this->text_comment=$text_comment;
        $this->comment_at=$comment_at;
    }

    /**
     * Get the value of commentaire_id
     */ 
    public function getCommentaire_id()
    {
        return $this->commentaire_id;
    }

    /**
     * Set the value of commentaire_id
     *
     * @return  self
     */ 
    public function setCommentaire_id($commentaire_id)
    {
        $this->commentaire_id = $commentaire_id;

        return $this;
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
     * Get the value of nomC_user
     */ 
    public function getNomC_user()
    {
        return $this->nomC_user;
    }

    /**
     * Set the value of nomC_user
     *
     * @return  self
     */ 
    public function setNomC_user($nomC_user)
    {
        $this->nomC_user = $nomC_user;

        return $this;
    }

    /**
     * Get the value of email_user
     */ 
    public function getEmail_user()
    {
        return $this->email_user;
    }

    /**
     * Set the value of email_user
     *
     * @return  self
     */ 
    public function setEmail_user($email_user)
    {
        $this->email_user = $email_user;

        return $this;
    }

    /**
     * Get the value of text_comment
     */ 
    public function getText_comment()
    {
        return $this->text_comment;
    }

    /**
     * Set the value of text_comment
     *
     * @return  self
     */ 
    public function setText_comment($text_comment)
    {
        $this->text_comment = $text_comment;

        return $this;
    }

    /**
     * Get the value of comment_at
     */ 
    public function getComment_at()
    {
        return $this->comment_at;
    }

    /**
     * Set the value of comment_at
     *
     * @return  self
     */ 
    public function setComment_at($comment_at)
    {
        $this->comment_at = $comment_at;

        return $this;
    }
}
