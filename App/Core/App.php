<?php

namespace ReactMVC\App\Core;

class App{
    public static function name(){
        return $_ENV['APP_NAME'];
    }

    public static function url(){
        return $_ENV['APP_URL'];
    }
}