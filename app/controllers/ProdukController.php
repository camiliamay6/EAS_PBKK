<?php

namespace App\Controllers;

use App\Models\Produk;
use App\Models\Kategori;
use Phalcon\Forms\Form;
use Phalcon\Forms\Elemen\Select;
use Datetime;
class ProdukController extends BaseController
{
    public function listProdukAction()
    {
        $produk = Produk::find();
        $this->view->setVar('products', $produk);
        $this->view->pick('produk/list');
    }

    public function tampilTambahProdukAction()
    {
        $produk = Kategori::find();
        $this->view->setVar('categories', $produk);
        $this->view->pick('produk/tambah');
    }

    public function tambahProdukAction()
    {
        // $this->view->disable();
        if($this->request->isPost())
        {
           
            $produk = new Produk();
            $date = new Datetime('NOW');

            $nama = $this->request->getPost("nama");
            $id_kategori = $this->request->getPost("id_kategori");
            $produk->setNamaProduk($nama);
            $produk->setIdKategori($id_kategori);
            $produk->setCreatedAt($date->format('Y-d-m h:i:s'));

            

            var_dump($produk);
            // try{
            //     $user->create();
            // } catch(\Exception $e){
            //     var_dump($e);
            // }
            
            $success = $produk->save();
            if($success != false)
            {
                $this->flash->success(
                    'Produk '. $produk->getNamaProduk() . ' berhasil dibuat. '
                );

                return $this->dispatcher->forward(array(
                    'controller' => 'produk',
                    'action' => 'listProduk'
                ));
            } else {
                foreach($produk->getMessages() as $message){
                    echo $message;
                }
                
                return $this->dispatcher->forward(array(
                    'controller' => 'produk',
                    'action' => 'tampilTambahProduk'
                ));
            }
        }
    }
}