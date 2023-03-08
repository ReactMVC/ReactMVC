<?php

namespace ReactMVC\App\Models\Contracts;

abstract class BaseModel implements CrudInterface{
    protected $connection;
    protected $table;
    protected $primaryKey = 'id';
    protected $pageSize = 10;
    protected $attributes = [];

    // protected function __construct(){

    // }

    protected function getAttribute($key){
        if(!$key || !array_key_exists($key, $this->attributes)){
            return null;
        }
        return $this->attributes[$key];
    }


}