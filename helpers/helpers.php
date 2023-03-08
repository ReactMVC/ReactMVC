<?php

function Name(){
    return $_ENV['APP_NAME'];
}

function url(){
    return $_ENV['APP_URL'];
}

function path($path){
    return $_ENV['APP_URL'] . $path;
}

function pathURL(){
    return $_ENV['APP_URL'] . $_SERVER['REQUEST_URI'];
}

function assets($assets){
    return $_ENV['APP_URL'] . "/public/" . $assets;
}

function random($rand){
    shuffle($rand);
    return array_pop($rand);
}

function view($path, $data = []){

    // Replace all . to /
    $path = str_replace('.', '/',$path);

    extract($data);
    // include views folder path
    $viewPath = BASEPATH . '/views/' . $path . '.php';

    include_once $viewPath;
}

function redirect($url){
    header("location: $url");
    exit();
}

function refresh($time, $url){
    header("refresh: $time; url=$url");      
}

function strContains($str, $needle, $case_sensitive = 0){
    if($case_sensitive)
    $pos = strpos($str, $needle);
    else
    $pos = stripos($str, $needle);

    return ($pos != false) ? true : false;
}