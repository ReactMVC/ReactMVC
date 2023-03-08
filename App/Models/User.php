<?php

namespace ReactMVC\App\Models;
use ReactMVC\App\Models\Contracts\JsonBaseModel;

class User extends JsonBaseModel{
    protected $table = 'users';

}