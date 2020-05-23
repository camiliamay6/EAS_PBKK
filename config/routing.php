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

    // $router->add('/tambah/admin', array(
    //     'controller' => 'admin',
    //     'action' => 'register'
    // ));
    $router->add('/bantuan', array(
        'controller' => 'bantuan',
        'action' => 'listBantuan'
    ));

    $router->add('/kategori', array(
        'controller' => 'kategori',
        'action' => 'listKategori'
    ));

    $router->add('/kategori/tambah', array(
        'controller' => 'kategori',
        'action' => 'tampilTambahKategori'
    ));

    $router->add('/kategori/tambah/submit', array(
        'controller' => 'kategori',
        'action' => 'tambahKategori'
    ));

    $router->add('/produk', array(
        'controller' => 'produk',
        'action' => 'listProduk'
    ));

    $router->add('/produk/tambah', array(
        'controller' => 'produk',
        'action' => 'tampilTambahProduk'
    ));
    
    $router->add('/produk/tambah/submit', array(
        'controller' => 'produk',
        'action' => 'tambahProduk'
    ));
    $router->add('/bantuan/tambah', array(
        'controller' => 'bantuan',
        'action' => 'tampilTambahBantuan'
    ));

    return $router;
