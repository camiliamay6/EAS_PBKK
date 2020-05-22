<?php

namespace App\Controllers;

class BantuanController extends BaseController
{
    public function listBantuanAction()
    {
        $this->view->pick('bantuan/list');
    }

    public function tampilTambahBantuanAction()
    {
        $this->view->pick('bantuan/tambah');
    }


}