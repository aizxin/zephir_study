<?php
	require 'vendor/autoload.php';

	// Using Medoo namespace
	use Medoo\Medoo;

	$database = new Medoo([
		//必需
		'database_type'=>'mysql',
		'database_name'=>'kamun',      //数据库名称
		'server'=>'rm-wz9435289632q5m4a.mysql.rds.aliyuncs.com',        //数据库连接地址
		'username'=>'root',  //用户名
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

	// $data = $database->query("SELECT email FROM member_bill")->fetchAll();
	var_dump($database);
	// // $data1 = $database->query(
	// //     "SELECT * FROM member WHERE id = :id", [
	// //         ":id" => 19
	// //     ]
	// // )->fetchAll();
	// // var_dump($data);
	// $datas = $database->select("member", "*");
	// var_dump($datas);
	// log
	$datas = $database->select("member",[
    	"[>]member_bill" => ["id" => "memberId"]
	],[
	    "member.id",
	    "member_bill.email"
	],[
	    "LIMIT" => 50
	]);
	var_dump($datas);
// log
	var_dump($database->log());
?>