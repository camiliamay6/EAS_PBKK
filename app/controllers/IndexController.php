<?php

namespace App\Controllers;

class IndexController extends BaseController
{
    public function indexAction()
    {
        return $this->dispatcher->forward(array(
            'controller' => 'admin',
            'action' => 'index'
        ));
    }

}