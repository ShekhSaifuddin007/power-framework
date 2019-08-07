<?php

use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Exception\HttpMethodNotAllowedException;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\RouteParser;

require __DIR__.'/../vendor/autoload.php';

$router = new RouteCollector(new RouteParser());

$router->get('/powerfram/public', function () {
    return view('welcome');
});

$dispatcher = new Dispatcher($router->getData());
try{
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
} catch (HttpRouteNotFoundException $e) {
    echo $e->getMessage();
    die();
} catch (HttpMethodNotAllowedException $e) {
    echo $e->getMessage();
    die();
}
// Print out the value returned from the dispatched function
echo $response;