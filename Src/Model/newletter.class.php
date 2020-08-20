<?php

namespace App\Model;

class Newsletter
{
    private $newsletter_id;
    private $email;

    public function __construct($newsletter_id,$email)
    {
        $this->newsletter_id=$newsletter_id;
        $this->email=$email;
    }

    /**
     * Get the value of newsletter_id
     */ 
    public function getNewsletter_id()
    {
        return $this->newsletter_id;
    }

    /**
     * Set the value of newsletter_id
     *
     * @return  self
     */ 
    public function setNewsletter_id($newsletter_id)
    {
        $this->newsletter_id = $newsletter_id;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
}
