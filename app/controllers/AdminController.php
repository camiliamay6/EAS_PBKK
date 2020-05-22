<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function indexAction()
    {
        $this->view->pick('dashboard');
    }

    public function tampilLoginAction()
    {
        $this->view->pick('admin/login');
    }

    public function tampilRegisterAction()
    {
        $this->view->pick('admin/register');
    }
    
    public function loginAction()
    {

    }

    public function registerAction()
    {

    }
}