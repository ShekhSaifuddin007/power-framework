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

if (! function_exists('text_format')) {
    function text_format($str, $startPos = 0, $maxLength = 50) {
        /**
         * Get format from string
         *
         * @param String $str String to get an excerpt from
         * @param Integer $startPos Position int string to start excerpt from
         * @param Integer $maxLength Maximum length the excerpt may be
         * @return String excerpt
         */
        if(strlen($str) > $maxLength) {
            $excerpt   = substr($str, $startPos, $maxLength - 6);
            $lastSpace = strrpos($excerpt, ' ');
            $excerpt   = substr($excerpt, 0, $lastSpace);
            $excerpt  .= ' [...]';
        } else {
            $excerpt = $str;
        }
        return $excerpt;
    }
}
