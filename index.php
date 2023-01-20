<?php

use core\DB;

include('config/database.php');
include('config/params.php');

spl_autoload_register(function ($className) {
    $path = $className . '.php';
    if (is_file($path))
        require($path);
});
$core = core\Core::getInstance();
$core->Initialize();
$core->Run();
$core->Done();


/*
use core\DB;

include('config/database.php');

spl_autoload_register(function ($className) {
    $path = $className . '.php';
    if (is_file($path))
        require($path);
});
//127.0.0.1
$db = new DB(DATABASE_HOST, DATABASE_LOGIN, DATABASE_PASSWORD, DATABASE_BASENAME);
$rows = $db->select("user", ['login', 'password'],);
var_dump($rows);
/*$core = core\Core::getInstance();
$core->Initialize();
$core->Run();
$core->Done();*/


