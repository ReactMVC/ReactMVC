<?php

namespace ReactMVC\App\Controllers;

class PostController{
    public static function single(){
        global $request;
        $id = $request->get_route_param('id');
        $data = [
            'id' => $id,
        ];
        view('blog.post', $data);
    }
}