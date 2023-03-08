<?php

namespace ReactMVC\App\Utilities;

class Server{

    public static function ip(){
        return $_SERVER['SERVER_ADDR'];
    }
    
    public static function interface(){
        return $_SERVER['GATEWAY_INTERFACE'];
    }

    public static function name(){
        return $_SERVER['SERVER_NAME'];
    }

    public static function protocol(){
        return $_SERVER['SERVER_PROTOCOL'];
    }

    public static function port(){
        return $_SERVER['SERVER_PORT'];
    }

    public static function method(){
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function software(){
        return $_SERVER['SERVER_SOFTWARE'];
    }

    public static function file(){
        return $_SERVER['SCRIPT_FILENAME'];
    }

    public static function root(){
        return $_SERVER['DOCUMENT_ROOT'];
    }

    public static function path(){
        return $_SERVER['PATH_INFO'];
    }

    public static function https(){
        return $_SERVER['HTTPS'];
    }
}