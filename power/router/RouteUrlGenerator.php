<?php

namespace Power\router;

use Phroute\Phroute\Dispatcher;
use Phroute\Phroute\Exception\HttpMethodNotAllowedException;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\RouteParser;

class RouteUrlGenerator
{
    protected function router()
    {
        $router = new RouteCollector(new RouteParser());

        require __DIR__.'/../../routes/router.php';

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
        return $response;
    }
}