<?php

return new \Phalcon\Config(array(
    'application' => array(
        'name' => 'Ayo Bantu'
    ),
    'root_dir' => __DIR__.'/../',
    'view' => array(
        'cache' => array(
            'dir' => __DIR__.'/../cache/volt'
        )
    ),

    'database' => array(
        'host' => 'localhost',
        'username' => 'meila',
        'password' => '06051999',
        'dbname' => 'ayobantu'
    ),
));