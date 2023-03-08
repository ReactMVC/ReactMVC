<?php

namespace ReactMVC\App\Models;
// use ReactMVC\App\Models\Contracts\JsonBaseModel;
use ReactMVC\App\Models\Contracts\MysqlBaseModel;

class User extends MysqlBaseModel{
    protected $table = 'users';

}