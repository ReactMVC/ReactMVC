<?php

namespace ReactMVC\App\Controllers;

class HomeController{

    public static function index(){
        $data = [
            'appName' => $_ENV['APP_NAME'],
        ];
        view('index', $data);
    }
}