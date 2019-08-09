<?php

if (! function_exists('view'))
{
    function view($view = null, $data = [])
    {
        if (empty($view)){
            return 'View Not Found';
        }
        extract($data, EXTR_SKIP);
        ob_start();
        require_once __DIR__. '/../../resources/views/'.$view.'.php';
    }
}

if (! function_exists('message')) {
    function message($key, $message = null) {
            $_SESSION[$key] = $message;
    }
}
