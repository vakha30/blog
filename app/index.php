<?php

use Aura\SqlQuery\QueryFactory;
use Delight\Auth\Auth;
use DI\Container;
use DI\ContainerBuilder;
use FastRoute\RouteCollector;
use League\Plates\Engine;

$container = new Container();
$containerBuilder = new ContainerBuilder;

$containerBuilder->addDefinitions([
    Engine::class => function() {
        return new Engine('../app/views');
    },
    PDO::class => function() {
        return new PDO("mysql:host=localhost; dbname=blog_db", "root", "");
    },
    QueryFactory::class => function() {
        return new QueryFactory("mysql");
    },
    Auth::class => function() {
        return new Auth(new PDO("mysql:host=localhost; dbname=blog_db", "root", ""));
    },

]);

try {
    $container = $containerBuilder->build();
} catch (Exception $e) {
}


$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->get('/', ["App\controllers\HomeController", "index"]);
    // {id} must be a number (\d+)

    $r->addGroup('/admin', function (RouteCollector $r) {
        $r->get('', ["App\controllers\admin\HomeController", "index"]);
        $r->get('/articles', ["App\controllers\admin\ArticlesController", "index"]);
    });
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        dd("404 | ERROR");
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        dd("405 | ERROR");
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        $container->call($handler, $vars);
        break;
}