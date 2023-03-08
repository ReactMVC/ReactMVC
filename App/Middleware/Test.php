<?php

namespace ReactMVC\App\Middleware;

class Test{
    
    public function handle(){
        global $request;
        view('blog.app');
    } 

}