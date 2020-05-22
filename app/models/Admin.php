<?php

namespace App\Models;

use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Validation;
use Phalcon\Validation\Validator\Uniqueness;
use Phalcon\Validation\Validator\Email;

class Admin extends Base
{
    public function initialization()
    {
        $this->addBehavior(new Timestampable(array(
            'beforeValidationOnCreate' => array(
                'field' => 'created_at',
                'format' => 'd-m-Y H:i'
            )
        )));
    }

    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new Email([
                "message" => "Email salah"
            ])
        );

        $validator->add([
            'email',
            new Uniqueness([
                "message" => "Email ini sudah terdaftar"
            ])
        ]);
        
        return $this->validate($validator);
    }
}