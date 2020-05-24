<?php

namespace App\Models;

use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Uniqueness;

class Produk extends Base
{
    protected $id;
    protected $nama_produk;
    protected $id_kategori;
    protected $updated_at;
    protected $created_at;

    public function initialize()
    {
        $this->hasMany(
            'id',
            'App\Models\Bantuan',
            'id_produk',
            array(
                'alias' => 'id_produk',
                'reusable' => true
            )
        );

        $this->hasOne(
            'id_kategori',
            'App\Models\Kategori',
            'id',
            array(
                'alias' => 'id_kategori',
                'reusable' => true
            )
        );
    }
    

    public function setNamaProduk($nama_produk)
    {
        $this->nama_produk = $nama_produk;
        return $this;
    }

    public function setIdKategori($id_kategori)
    {
        $this->id_kategori = $id_kategori;
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
    public function getNamaProduk()
    {
        return $this->nama_produk;
    }
    public function getIdKategori()
    {
        return $this->id_kategori;
    }
    public function getupdatedAt()
    {
        return $this->updated_at;
    }
    public function getCreatedAt()
    {
        return $this->created_at;
    }
}