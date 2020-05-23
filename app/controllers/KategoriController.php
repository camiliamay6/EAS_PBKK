<?php

namespace App\Controllers;

use App\Models\Kategori;
use DateTime;
class KategoriController extends BaseController
{
    public function listKategoriAction()
    {
        $this->view->disable();
        $kategori = new Kategori();
        var_dump($kategori->find());
        $this->view->setVar('categories', $kategori);
        $this->view->pick('kategori/list');
    }

    public function tampilTambahKategoriAction()
    {
        $this->view->pick('kategori/tambah');
    }

    public function tambahKategoriAction()
    {
        $this->view->disable();
        if($this->request->isPost())
        {
           
            $kategori = new Kategori();
            $date = new Datetime('NOW');

            $nama = $this->request->getPost("nama");

            $kategori->setNamaKategori($nama);
            $kategori->setCreatedAt($date->format('Y-d-m h:i:s'));

            

            var_dump($kategori);
            // try{
            //     $user->create();
            // } catch(\Exception $e){
            //     var_dump($e);
            // }
            
            $success = $kategori->save();
            if($success != false)
            {
                $this->flash->success(
                    'Kategori '. $kategori->getNamaKategori() . ' berhasil dibuat. '
                );

                return $this->dispatcher->forward(array(
                    'controller' => 'kategori',
                    'action' => 'listKategori'
                ));
            } else {
                foreach($kategori->getMessage() as $message){
                    echo $message;
                }
                
                return $this->dispatcher->forward(array(
                    'controller' => 'kategori',
                    'action' => 'tampilTambahKategori'
                ));
            }
        }
    }
}