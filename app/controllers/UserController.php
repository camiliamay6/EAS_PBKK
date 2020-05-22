<?php

namespace App\Controllers;

class UserController Extends BaseController

{
    public function indexAction()
    {
        $this->dispatcher->forward(array(
            'controller' => 'index',
            'action' => 'index'
        ));
    }

    public function loginAction()
    {
        $this->view->pick('user/login');
    }
}