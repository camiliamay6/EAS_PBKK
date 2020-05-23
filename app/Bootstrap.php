<?php

use Phalcon\Di\FactoryDefault;
use Phalcon\Loader;
use Phalcon\Mvc\Application;
use Phalcon\Mvc\Dispatcher;
use Phalcon\Mvc\View;
use Phalcon\Session\Manager;
use Phalcon\Session\Adapter\Stream;
use Phalcon\Db\Adapter\Pdo\Mysql;

$container = new FactoryDefault();

$application = new Application($container);

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
        $session = new Manager();
        $files = new Stream(array(
            'savePath' => '/tmp',
        ));

        $session->setAdapter($files);
        $session->start();

        return $session;
    }
);

$container->set(
    'db',
    function(){
        return new Mysql(array(
            'host' => 'localhost',
            'username' => 'root',
            'password' => '12345678',
            'dbname' => 'ayobantu'
        ));
    }
);

$debug = new \Phalcon\Debug();
$debug->listen();




$application->setDI($container);
try{
    $response = $application->handle(
        $_SERVER["REQUEST_URI"]
    );

    $response->send();
} catch(\Exception $e) {
    echo $e->getMessage();
}
