<?php


namespace App\Controllers;

use App\Models\Admin;
use Phalcon\Session\Adapter\Files as Session;
use DateTime;

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
            $user = Admin::findFirst(array(
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
                $this->flash->error('Email atau Password salah');

                return $this->dispatcher->forward(array(
                    'controller' => 'admin',
                    'action' => 'tampilLogin'
                ));
            }

        };

        
    }

    public function registerAction()
    {
        // $this->view->disable();
        var_dump($this->request->getPost());
        if($this->request->isPost())
        {
           
            $user = new Admin();
            $date = new Datetime('NOW');
            
            $nama = $this->request->getPost("nama");
            $email = $this->request->getPost("email");
            $password = $this->request->getPost("password");

            $user->setNamaAdmin($nama);
            $user->setEmailAdmin($email);
            $user->setPasswordAdmin(sha1($password));
            $user->setCreatedAt(date('d-m-Y H:i'));

            

            var_dump($user);
            // try{
            //     $user->create();
            // } catch(\Exception $e){
            //     var_dump($e);
            // }
            
            $success = $user->save();
            if($success != false)
            {
                $this->flash->success(
                    'User '. $user->nama_admin . ' berhasil dibuat. '
                );

                return $this->dispatcher->forward(array(
                    'controller' => 'admin',
                    'action' => 'tampilLogin'
                ));
            } else {
                print_r($user->getMessage());
                return $this->dispatcher->forward(array(
                    'controller' => 'admin',
                    'action' => 'tampilRegister'
                ));
            }
        }
        
    }
}