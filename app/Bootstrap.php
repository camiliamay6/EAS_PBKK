<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Loader;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\View;

$loader = new Loader();
$loader->registerNamespaces(
    [
        'Single\Controllers' => '../apps/controllers',
        'Single\Models' => '../apps/models',
    ]
);

$container->set(
    'dispatcher',
    function(){
        $dispatcher = new Dispatcher();
        $dispatcher->setDefaultNamespace(
            'Single\Controllers'
        );
        return $dispatcher;
    }
);

$container->set(
    'view',
    function(){
        $view = new View();
        $view->setViewsDir(
            '../apps/views/'
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
