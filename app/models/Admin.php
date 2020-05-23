<?php

namespace App\Models;

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Uniqueness;
use Phalcon\Validation\Validator\Email;

class Admin extends Base
{
    protected $id;
    protected $nama_admin;
    protected $email_admin;
    protected $password_admin;
    protected $created_at;


    public function setNamaAdmin($nama_admin)
    {
        $this->nama_admin = $nama_admin;
        return $this;
    }

    public function setEmailAdmin($email_admin)
    {
        $this->email_admin = $email_admin;
        return $this;
    }

    public function setPasswordAdmin($password_admin)
    {
        $this->password_admin = $password_admin;
        return $this;
    }
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getNamaAdmin()
    {
        return $this->nama_admin;
    }
    public function getEmailAdmin()
    {
        return $this->email_admin;
    }
    public function getPasswordAdmin()
    {
        return $this->password_admin;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }

   
}