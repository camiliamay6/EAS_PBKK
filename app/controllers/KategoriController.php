<?php

namespace App\Controllers;

class KategoriController extends BaseController
{
    public function listKategoriAction()
    {
        $this->view->pick('kategori/list');
    }
}