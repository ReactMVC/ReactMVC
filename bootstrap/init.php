<?php
define('BASEPATH', __DIR__ . "/../");

include BASEPATH . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();

include BASEPATH . '/helpers/helpers.php';
include BASEPATH . '/routes/web.php';

$request = new ReactMVC\App\Core\Request;