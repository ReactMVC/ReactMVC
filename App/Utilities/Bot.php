<?php

namespace ReactMVC\App\Utilities;

class Bot{

    // Nano - Telegram Bot
    public static function telegram(){
        require BASEPATH . "App/Models/Nano.php";
    }
}