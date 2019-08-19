<?php

if (! function_exists('view'))
{
    function view($view = null, $data = [])
    {
        if (empty($view)){
            return 'View Not Found';
        }
        extract($data);
        ob_start();
        require_once __DIR__. '/../../resources/views/'.$view.'.php';
    }
}

if (! function_exists('message')) {
    function message($key, string $message = null) {
            $_SESSION[$key] = $message;
    }
}

if (! function_exists('dd')) {
    function dd($var) {
        echo '<pre>';
            var_dump($var);
        die();
    }
}
