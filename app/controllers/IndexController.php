<?php

namespace App\Controllers;

class IndexController extends BaseController
{
    public function indexAction()
    {
        $this->dispatcher->forward(array(
            'controller' => 'admin',
            'action' => 'index'
        ));
    }

}