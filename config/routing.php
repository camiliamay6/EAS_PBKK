<?php

    $router = new \Phalcon\Mvc\Router();


    $router->add('/', array(
        'controller' => 'index',
        'action' => 'index'
    ));

    $router->add('/login', array(
        'controller' => 'admin',
        'action' => 'tampilLogin'
    ));

    $router->add('/register', array(
        'controller' => 'admin',
        'action' => 'tampilRegister'
    ));

    $router->add('/bantuan', array(
        'controller' => 'bantuan',
        'action' => 'listBantuan'
    ));

    $router->add('/kategori', array(
        'controller' => 'kategori',
        'action' => 'listKategori'
    ));

    $router->add('/produk', array(
        'controller' => 'produk',
        'action' => 'listProduk'
    ));
    
    $router->add('/bantuan/tambah', array(
        'controller' => 'bantuan',
        'action' => 'tampilTambahBantuan'
    ));

    return $router;
