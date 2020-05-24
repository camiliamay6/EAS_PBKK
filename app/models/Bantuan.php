<?php

namespace App\Models;

use Phalcon\Mvc\Model\Behavior\Timestampable;
use Datetime;

class Bantuan extends Base
{
    protected $id;
    protected $nama;
    protected $id_produk;
    protected $total_bantuan;
    protected $created_at;
    protected $updated_at;

    public function initialize()
    {
        $this->hasOne(
            'id_user',
            'App\Models\User',
            'id',
            array(
                'alias' => 'id_user',
                'reusable' => true
            )
        );

        $this->hasOne(
            'id_produk',
            'App\Models\Produk',
            'id',
            array(
                'alias' => 'id_produk',
                'reusable' => true
            )
        );
    }
    public function setNama($nama)
    {
        $this->nama = $nama;
        return $this;
    }

    public function setIdProduk($id_produk)
    {
        $this->id_produk = $id_produk;
        return $this;
    }

    public function setTotalBantuan($total_bantuan)
    {
        $this->total_bantuan = $total_bantuan;
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
    public function getNama()
    {
        return $this->nama;
    }
    public function getIdProduk()
    {
        return $this->id_produk;
    }
    public function getTotalBantuan()
    {
        return $this->total_bantuan;
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