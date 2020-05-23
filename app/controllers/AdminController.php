<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    private function __registerSession($user)
    {
        $this->session->set(
            'auth', array(
                'id' => $user->id,
                'nama' => $user->nama_admin
            )
        );
    }
    public function indexAction()
    {
        $this->view->pick('admin/dashboard');
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
        if($this->request->isPost())
        {
            $user = User::findFirst(array(
                'email_admin = :email: and password_admin = :password:', 'bind' => array(
                    'email' => $this->request->getPost("email"),
                    'password' => sha1($this->request->getPost("password"))

                )
            ));
            if($user != false)
            {
                $this->__registerSession($user);
                $this->flash->success(
                    'Selamat Datang ' . $user->nama_admin
                );

                return $this->dispatcher->forward(array(
                    'controller' => 'index',
                    'action' => 'index',
                ));
            } else {
                $this->flash->error('Email atau Pasword salah');

                return $this->dispatcher->forward(array(
                    'controller' => 'admin',
                    'action' => 'tampilLogin'
                ));
            }

        };

        
    }

    public function registerAction()
    {
        
    }
}