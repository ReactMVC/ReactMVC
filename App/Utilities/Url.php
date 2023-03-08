<?php

namespace ReactMVC\App\Utilities;

class Url{
    public static function get(){
        return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    }

    public static function path(){
        return $_SERVER['REQUEST_URI'];
    }

    public static function route(){
        return strtok($_SERVER['REQUEST_URI'], '?');
    }
}