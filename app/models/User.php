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

        $this->addBehavior(new Timestampable(array(
            'beforeValidationOnCreate' => array(
                'field' => 'created_at',
                'format' => 'd-m-y H:i'
            )
        )));
    }

    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email_admin',
            new Email([
                "message" => "Email salah"
            ])
        );

        $validator->add(
            'email_admin',
            new Uniqueness([
                "message" => "Email sudah terdaftar"
            ])
        );

        return $this->validate($validator);
    }
}