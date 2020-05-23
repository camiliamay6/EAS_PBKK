<?php

namespace App\Models;

use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\Uniqueness;

class User extends Base
{
    public function initialize()
    {
        $this->hasMany(
            'id',
            'App\Models\Bantuan',
            'id_user',
            array(
                'alias' => 'user',
                'reusable' => true
            )
        );

    }

   
}