<?php

if (! function_exists('view'))
{
    function view($view)
    {
        if (empty($view)){
            return 'View Not Found';
        }
        require_once __DIR__. '/../../resources/views/' . $view . '.php';
    }
}
