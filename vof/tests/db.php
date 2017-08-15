<?php

use Vof\Medoo;

$database = new Medoo([
    // required
    'database_type' => 'mysql',
    'database_name' => 'kamun',
    'server' => 'rm-wz9435289632q5m4a.mysql.rds.aliyuncs.com',
    'username' => 'root',
    'password' => '0FKeMf10gle2ml670Rz8',

    // [optional]
    'charset' => 'utf8',
    'port' => 3306,

    // [optional] Table prefix
    // 'prefix' => 'PREFIX_',

    // [optional] Enable logging (Logging is disabled by default for better performance)
    'logging' => true,

    // [optional] MySQL socket (shouldn't be used with server and port)
    // 'socket' => '/home/mysql.sock',

    // [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
    'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ],

    // [optional] Medoo will execute those commands after connected to the database for initialization
    'command' => [
        'SET SQL_MODE=ANSI_QUOTES'
    ]
]);



var_dump($database);