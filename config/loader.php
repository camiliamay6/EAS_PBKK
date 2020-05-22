<?php

$loader = new \Phalcon\Loader();

$loader->registerNamespaces(array(
    'App\Controllers' => __DIR__ . '/../app/controllers',
    'App\Models' => __DIR__ . '/../app/Models',
));

$loader->register();

?>