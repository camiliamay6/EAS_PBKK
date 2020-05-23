<?php

namespace App\Models;

use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Uniqueness;

class Kategori extends Base
{
    protected $id;
    protected $nama_kategori;
    protected $updated_at;
    protected $created_at;


    public function initialize()
    {
        $this->hasOne(
            'id',
            'App\Models\Kategori',
            'id_kategori',
            array(
                'alias' => 'id_kategori',
                'reusable' => true
            )
        );

    }

    public function setNamaKategori($nama_kategori)
    {
        $this->nama_kategori = $nama_kategori;
        return $this;
    }

    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
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
    public function getNamaKategori()
    {
        return $this->nama_kategori;
    }
    public function getupdatedAt()
    {
        return $this->updated_at;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function find($parameter = Null){
        $result = Kategori::find($parameter);
        return $result;
    }
}