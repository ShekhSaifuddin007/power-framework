<?php

namespace Power\router;

class Router extends RouteUrlGenerator
{
    public function routes()
    {
       return RouteUrlGenerator::router();
    }
}