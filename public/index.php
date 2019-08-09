<?php

use Power\router\Router;

require __DIR__.'/../vendor/autoload.php';

session_start();

Router::routes();
//$router = new RouteCollector(new RouteParser());
//
//require __DIR__.'/../routes/router.php';
//
//$dispatcher = new Dispatcher($router->getData());
//try{
//    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
//} catch (HttpRouteNotFoundException $e) {
//    echo $e->getMessage();
//    die();
//} catch (HttpMethodNotAllowedException $e) {
//    echo $e->getMessage();
//    die();
//}
//
//// Print out the value returned from the dispatched function
//echo $response;