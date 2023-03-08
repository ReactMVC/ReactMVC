<?php
use ReactMVC\App\Core\App;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $appName ?></title>
</head>
<body>
    <h3><?= App::name() ?> run in <?= App::url() ?></h3>
</body>
</html>