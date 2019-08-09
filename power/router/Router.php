<?php

namespace Power\router;

class Router extends RouteUrlGenerator
{
    public static function routes()
    {
       return RouteUrlGenerator::router();
    }
}