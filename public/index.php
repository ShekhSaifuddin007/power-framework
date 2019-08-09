<?php

use Power\router\Router;

require __DIR__.'/../vendor/autoload.php';

session_start();

Router::routes();