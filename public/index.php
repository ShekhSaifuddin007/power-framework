<?php

use Power\router\Router;

require __DIR__.'/../vendor/autoload.php';

session_start();

define('BASE_URL', 'http://localhost/powerfram/public');

Router::router();