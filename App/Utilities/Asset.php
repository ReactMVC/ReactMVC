<?php

namespace ReactMVC\App\Utilities;

class Asset{
    public static function get(string $route){
        return $_ENV['APP_URL'] . "/public/" . $route;
    }
}