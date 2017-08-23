<?php

use Vof\Medoo;
// use Medoo\Medoo;
$data = [
    'database_type' => 'mysql',
    'database_name' => 'kamun',
    'server' => 'rm-wz9435289632q5m4a.mysql.rds.aliyuncs.com',
    'username' => 'root',
    'password' => '0FKeMf10gle2ml670Rz8',

    // [optional]
    'charset' => 'utf8',
    'port' => 3306,

    // // [optional] Table prefix
    // // 'prefix' => 'PREFIX_',

    // // [optional] Enable logging (Logging is disabled by default for better performance)
    'logging' => true,

    // // [optional] MySQL socket (shouldn't be used with server and port)
    // // 'socket' => '/home/mysql.sock',

    // // [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
    'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ],

    // // [optional] Medoo will execute those commands after connected to the database for initialization
    'command' => [
        'SET SQL_MODE=ANSI_QUOTES'
    ]
];
$database = new Medoo($data);


// var_dump($data);
// var_dump($database);

// 测试  quote
// $data = "Medoo";
// echo "We love " . $data; // We love Medoo
// echo "We love " . $database->quote($data); // We love 'Medoo'

// 测试 query
// $sql = "SELECT email FROM member_bill";
// $sql = "SELECT `member`.`id`,`member_bill`.`email` FROM `member` LEFT JOIN `member_bill` ON `member`.`id` = `member_bill`.`memberId` LIMIT 50";
// $data = $database->query($sql)->fetchAll();
// var_dump($data);

// $data1 = $database->query(
//     "SELECT * FROM member WHERE id = :id", [
//         ":id" => 19
//     ]
// )->fetchAll();
// var_dump($data1);
//  测试 select
$datas1 = $database->select("member", "*");
var_dump($datas1);
$datas3 = $database->select("member", "name,phone");
var_dump($datas3);
$datas2 = $database->select("member",[
    "[>]member_bill" => ["id" => "memberId"]
],[
    "member.id",
    "member_bill.email"
],[
    "LIMIT" => 50,
    "ORDER" => ["member.id" => "DESC"],
]);
var_dump($datas2);
$data4 = $database->select("member", array(
    "id",
    "phone(my_phone)"
), array(
    "LIMIT" => 20
));
var_dump($data4);
// log
var_dump($database->log());
// last
var_dump($database->info());