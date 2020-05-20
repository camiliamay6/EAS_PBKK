<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Loader;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\View;

$loader = new Loader();
$loader->registerNamespaces(
    [
        'App\Controllers' => __DIR__.'/../app/controllers',
        'App\Models' => __DIR__.'../app/models',
    ]
);

$loader->register();

$container = new FactoryDefault();

$container->set(
    'dispatcher',
    function(){
        $dispatcher = new Dispatcher();
        $dispatcher->setDefaultNamespace(
            'App\Controllers'
        );
        return $dispatcher;
    }
);

$container->set(
    'view',
    function(){
        $view = new View();
        $view->setViewsDir(
            __DIR__.'/../app/views/'
        );

        return $view;
    }
);

$application = new Application($container);

try{
    $response = $application->handle(
        $_SERVER["REQUEST_URI"]
    );

    $response->send();
} catch(\Exception $e) {
    echo $e->getMessage();
}
