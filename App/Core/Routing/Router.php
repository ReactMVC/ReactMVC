<?php

namespace ReactMVC\App\Core\Routing;
use ReactMVC\App\Core\Request;

class Router{
    private $request;
    private $routes;
    private $current_route;

    const BASE_CONTROLLER = '\ReactMVC\App\Controllers\\';

    public function __construct(){
        $this->request = new Request();
        $this->routes = Route::routes();
        $this->current_route = $this->findRoute($this->request) ?? null;

        if (is_null($this->current_route)) {
            error_reporting(E_ALL);
            ini_set('display_errors', '0');
        }else{
            error_reporting(E_ALL);
            ini_set('display_errors', '1');
        }

        # run middleware here
        $this->run_route_middleware();
    }

    private function run_route_middleware(){
        $middleware = $this->current_route['middleware'];
        foreach ($middleware as $middleware_class) {
            $middleware_obj = new $middleware_class;
            $middleware_obj->handle($middleware);
            die();
        }
    }

    public function findRoute(Request $request){
        // echo $request->method() . " " . $request->uri();
        // && $request->uri() == $route['uri']
        foreach ($this->routes as $route) {
            if (!in_array($request->method(), $route['methods'])) {
                return false;
            }
            if ($this->regex_matched($route)) {
                return $route;
            }
        }
        return null;
    }

    public function regex_matched($route){
        global $request;
        $pattern = "/^" . str_replace(['/', '{', '}'], ['\/', '(?<', '>[-%\w]+)'], $route['uri']) . "$/";
        $result = preg_match($pattern, $this->request->uri(), $matches);
        if(!$result){
            return false;
        }
        foreach($matches as $key => $value){
            if (!is_int($key)) {
                $request->add_route_param($key, $value);
            }
        }
        return true;
    }

    public function dispatch404(){
    // 404 Header
    header("HTTP/1.1 404 Not Found");

    // show 404 page
    view('errors.404');

    die();
    }

    public function run(){

        # 404 : uri not exists
        if (is_null($this->current_route))
            $this->dispatch404();

            $this->dispatch($this->current_route);
    }

    public function dispatch($route){

        $action = $route['action'];

        # action : null
        if(is_null($action) || empty($action)){
            return;
        }

        # action : clousure
        if (is_callable($action)) {
            $action();
        }

        # action : Controller@method
        if (is_string($action))
        $action = explode('@', $action);

        # action : ['Controller', 'method']
        if (is_array($action)) {
            $class_name = self::BASE_CONTROLLER . $action[0];
            $method = $action[1];

            if(!class_exists($class_name))
                throw new \Exception("Class $class_name Not Exists!");

            $controller = new $class_name();
            if(!method_exists($class_name, $method))
            throw new \Exception("The $method Not Exists in class $class_name");
            $controller->{$method}();
        }

    }
}