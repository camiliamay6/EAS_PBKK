<?php

namespace App\Models;

use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Uniqueness;

class Kategori extends Base
{
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

        $this->addBehavior(new Timestampable(array(
            'beforeValidationOnCreate' => array(
                'field' => 'created_at',
                'format' => 'd-m-Y H:i'
            ),
            'beforValidationOnUpdate' => array(
                'field' => 'updated_at',
                'format' => 'd-m-Y H:i'
            )
        )));
    }

    public function validate()
    {
        $validator = new Validation();

        $validator->add(
            'nama_kategori',
            new Uniqueness([
                "message" => "Nama kategori sudah ada"
            ])
        );
        return $this->validate($validator);
    }
}