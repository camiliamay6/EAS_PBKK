<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Loader;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\View;
use Phalcon\Session\Adapter\Files as Session;


$container = new FactoryDefault();

$config = require __DIR__ . '/../config/config.php';
include_once __DIR__ . '/../config/loader.php';
include_once __DIR__ . '/../config/services.php';




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
        $view->setViewsDir(__DIR__ . '/../app/views/');
        $view->registerEngines(array(
            ".volt" => 'voltService'
        ));
        return $view;
    }
);

$container->set(
    'router',
    function(){
        require __DIR__ . '/../config/routing.php';
        return $router;
    }
);

$container->set(
    'session',
    function(){
        $session = new Session();

        $session->start();

        return $session;
    }
);
$container->setDI($container);

$application = new Application($container);

try{
    $response = $application->handle(
        $_SERVER["REQUEST_URI"]
    );

    $response->send();
} catch(\Exception $e) {
    echo $e->getMessage();
}
