<?php

namespace App\Model;

use Phalcon\Mvc\Model\Behavior\Timestampable;

class Bantuan extends Base
{
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

        $this->addBehavior(new Timestampable(array(
            'beforeValidationOnCreate' => array(
                'field' => 'created_at',
                'format' => 'd-m-Y H:i'
            ),
            'beforeUpdateOnCreate' => array(
                'field' => 'updated_at',
                'format' => 'd-m-Y H:i'
            )
        )));
    }
}