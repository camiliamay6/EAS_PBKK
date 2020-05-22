<?php

namespace App\Controllers;

class ProdukController extends BaseController
{
    public function listProdukAction()
    {
        $this->view->pick('produk/list');
    }
}