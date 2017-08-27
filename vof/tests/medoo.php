<?php
	require 'vendor/autoload.php';

	// Using Medoo namespace
	use Medoo\Medoo;

	$database = new Medoo([
		//必需
		'database_type'=>'mysql',
		// 'database_name'=>'medoo',      //数据库名称
		'database_name'=>'kamun',      //数据库名称
		'server'=>'127.0.0.1',        //数据库连接地址
		// 'server'=>'rm-wz9435289632q5m4a.mysql.rds.aliyuncs.com',        //数据库连接地址
		'server'=>'rm-wz9435289632q5m4ao.mysql.rds.aliyuncs.com',        //数据库连接地址
		'username'=>'root',  //用户名
		// 'password'=>'root',  //密码
		'password'=>'0FKeMf10gle2ml670Rz8',  //密码
		'charset'=>'utf8',            //数据库编码

		// [可选的] 数据库连接端口
		'port'=> 3306,

		// [可选]表前缀
		// 'prefix'=>'PREFIX_',

		// [可选]用于连接的driver_option，阅读更多从http://www.php.net/manual/zh/pdo.setattribute.php
		'option'=> [
		 	PDO :: ATTR_CASE => PDO :: CASE_NATURAL
		]
	]);
	// $sql = "SELECT `member`.`id`,`member_bill`.`email` FROM `member` LEFT JOIN `member_bill` ON `member`.`id` = `member_bill`.`memberId` LIMIT 50";

	// $data = $database->query("SELECT email FROM member_bill")->fetchAll();
	// $data1 = $database->query($sql)->fetchAll();
	// var_dump($database);
	// // $data1 = $database->query(
	// //     "SELECT * FROM member WHERE id = :id", [
	// //         ":id" => 19
	// //     ]
	// // )->fetchAll();
	// // var_dump($data);
	// $datas = $database->select("member", "*");
	// var_dump($datas);
	// log
	// $data2 = $database->select("member",[
 //    	"[>]member_bill" => ["id" => "memberId"]
	// ],[
	//     "member.id",
	//     "member_bill.email"
	// ],[
	//     "LIMIT" => 50
	// ]);
	// var_dump($data2);
// $data4 = $database->select("member", array(
//     "id",
//     "phone(my_phone)"
// ), array(
//     "id" => 39
// ));
// var_dump($data4);
// $datas5 = $database->select("member",[
//     "[>]member_bill" => ["id" => "memberId"]
// ],[
//     "member.id",
//     "bill"=>[
//         "member_bill.email"
//     ]
// ],[
//     "LIMIT" => [1,2],
//     "ORDER" => ["member.id" => "DESC"],
// ]);
// var_dump(json_encode($datas5));
// var_dump($datas5);
// $datas6 = $database->select("member",[
//     "[>]member_bill" => ["id" => "memberId"]
// ],[
//     "member.id",
//     "bill"=>[
//         "member_bill.email [Bool]",
//         "meta" => [
//             "member_bill.email"
//         ]
//     ]
// ],[
//     "LIMIT" => [1,2],
//     "ORDER" => ["member.id" => "DESC"],
// ]);
// var_dump(json_encode($datas6));
// var_dump($datas6);
// $data7 = $database->get("member_bill", "email", [
//     "id" => 111
// ]);
// var_dump($data7);
$data8 = $database->get("member_idcard", [
    "[>]member_bill" => "memberId"
], [
    "member_bill.email",
    "member_idcard.name",
], [
    "LIMIT" => [1,2],
    "ORDER" => ["member_idcard.id" => "DESC"],
]);
var_dump($data8);
// log
	// var_dump($sql);
var_dump($database->log());
?>