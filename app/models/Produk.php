<?php

namespace App\Models;

use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Uniqueness;

class Produk extends Base
{
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

        $this->addBehavior(new Timestampable(array(
            'beforeValidationOnCreate' => array(
                'field' => 'created_at',
                'format' => 'd-m-Y H:i'
            ),
            'beforeValidationOnUpdate' => array(
                'field' => 'updated_at',
                'format' => 'd-m-Y H:i'
            )
        )));
    }

    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'nama_produk',
            new Uniqueness([
                "message" => "Nama produk sudah ada"
            ])
        );

        return $this->validate($validator);
    }
}