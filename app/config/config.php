<?php
return new Phalcon\Config([
    'database' => [
        'adapter'  => 'Mysql',
        'host'     => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname'   => 'currency',
        'charset'  => 'utf8mb4',
        'prefix'   => 'ilya_'
    ],

    'app' => [
        'baseUri'    => '/'.PROJECT_NAME.'/',
        'libraryDir' => APP_PATH.'Lib/'
    ],

]);