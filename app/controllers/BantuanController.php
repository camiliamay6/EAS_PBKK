<?php

namespace App\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Bantuan;
use Datetime;

class BantuanController extends BaseController
{
    public function listBantuanAction()
    {
        $id_kategori='';
        // $this->view->disable();
        if($this->request->isPost()){
            $id_kategori = $this->request->getPost("id_kategori");
        }    
        $bantuan = Bantuan::find();
        $kategori = Kategori::find();
        
        
        $this->view->setVar('id_kategori', $id_kategori);
        $this->view->setVar('kategori', $kategori);
        $this->view->setVar('bantuan', $bantuan);
        $this->view->pick('bantuan/list');
               
        
    }

    public function tampilTambahBantuanAction()
    {
        $produk = Produk::find();
        $this->view->setVar('products', $produk);
        $this->view->pick('bantuan/tambah');
    }

    public function tambahBantuanAction()
    {
        // $this->view->disable();
        if($this->request->isPost())
        {

            $bantuan = new Bantuan();
            $date = new Datetime('NOW');

            $nama = $this->request->getPost("nama");
            $id_produk = $this->request->getPost("id_produk");
            $jumlah = $this->request->getPost("jumlah");
            $bantuan->setNama($nama);
            $bantuan->setIdProduk($id_produk);
            $bantuan->setTotalBantuan($jumlah);
            $bantuan->setCreatedAt(date('d-m-Y H:i'));

            

            var_dump($produk);
            // try{
            //     $user->create();
            // } catch(\Exception $e){
            //     var_dump($e);
            // }
            
            $success = $bantuan->save();
            if($success != false)
            {
                $this->flash->success(
                    'Bantuan atas nama '. $bantuan->getNama() . ' berhasil dibuat. '
                );

                return $this->dispatcher->forward(array(
                    'controller' => 'bantuan',
                    'action' => 'listBantuan'
                ));
            } else {
                foreach($bantuan->getMessages() as $message){
                    echo $message;
                }
                
                return $this->dispatcher->forward(array(
                    'controller' => 'bantuan',
                    'action' => 'tampilTambahBantuan'
                ));
            }
        }
    }

}