<?php

namespace ReactMVC\App\Core\Routing;

class Route{
    private static $routes = [];

    // all route support
    public static function add($methods, $uri, $action = null, $middleware = []){
        $methods = is_array($methods) ? $methods : [$methods];
        self::$routes[] = ['methods' => $methods, 'uri' => $uri, 'action' => $action, 'middleware' => $middleware];
    }

    /*
    All Methods
    */
    public static function get($uri, $action = null, $middleware = []){
        self::add('get', $uri, $action, $middleware) || self::add('get', $uri.'/', $action, $middleware) || self::add('get', $uri.'index.php', $action, $middleware) || self::add('get', $uri.'index.php/', $action, $middleware);
    }
    public static function post($uri, $action = null, $middleware = []){
        self::add('post', $uri, $action, $middleware) || self::add('post', $uri.'/', $action, $middleware) || self::add('post', $uri.'index.php', $action, $middleware) || self::add('post', $uri.'index.php/', $action, $middleware);
    }
    public static function put($uri, $action = null, $middleware = []){
        self::add('put', $uri, $action, $middleware) || self::add('put', $uri.'/', $action, $middleware) || self::add('put', $uri.'index.php', $action, $middleware) || self::add('put', $uri.'index.php/', $action, $middleware);
    }
    public static function patch($uri, $action = null,  $middleware = []){
        self::add('patch', $uri, $action, $middleware) || self::add('patch', $uri.'/', $action, $middleware) || self::add('patch', $uri.'index.php', $action, $middleware) || self::add('patch', $uri.'index.php/', $action, $middleware);
    }
    public static function delete($uri, $action = null, $middleware = []){
        self::add('delete', $uri, $action, $middleware) || self::add('delete', $uri.'/', $action, $middleware) || self::add('delete', $uri.'index.php', $action, $middleware) || self::add('delete', $uri.'index.php/', $action, $middleware);
    }
    public static function options($uri, $action = null, $middleware = []){
        self::add('options', $uri, $action, $middleware) || self::add('options', $uri.'/', $action, $middleware) || self::add('options', $uri.'index.php', $action, $middleware) || self::add('options', $uri.'index.php/', $action, $middleware);
    }
    
    // test
    public static function routes(){
        return self::$routes;
    }
}