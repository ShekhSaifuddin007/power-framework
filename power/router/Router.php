<?php

namespace Power\router;

class Router extends RouteUrlGenerator
{
    static public function router()
    {
       return RouteUrlGenerator::router();
    }
}