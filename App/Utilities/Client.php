<?php

namespace ReactMVC\App\Utilities;

class Client{

    public static function ip(){
        return $_SERVER['REMOTE_ADDR'];
    }

    public static function uri(){
        return $_SERVER['REQUEST_URI'];
    }

    public static function host(){
        return $_SERVER['REMOTE_HOST'];
    }

    public static function agent(){
        return $_SERVER['HTTP_USER_AGENT'];
    }

    public static function port(){
        return $_SERVER['REMOTE_PORT'];
    }
}