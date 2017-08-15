
/*
 +------------------------------------------------------------------------+
 | Phalcon Framework                                                      |
 +------------------------------------------------------------------------+
 | Copyright (c) 2011-2017 Phalcon Team (https://phalconphp.com)          |
 +------------------------------------------------------------------------+
 | This source file is subject to the New BSD License that is bundled     |
 | with this package in the file LICENSE.txt.                             |
 |                                                                        |
 | If you did not receive a copy of the license and are unable to         |
 | obtain it through the world-wide-web, please send an email             |
 | to license@phalconphp.com so we can send you a copy immediately.       |
 +------------------------------------------------------------------------+
 | Authors: Andres Gutierrez <andres@phalconphp.com>                      |
 |          Eduar Carvajal <eduar@phalconphp.com>                         |
 +------------------------------------------------------------------------+
 */

namespace Vof;

/**
 * Vof\Medoo
 * Medoo database framework
 * https://medoo.in
 * Version 1.4.5
 *
 * <code>
 *
 * 	use Vof\Medoo;
 *
 *	$database = new Medoo([
 *		// required
 *		'database_type' => 'mysql',
 *		'database_name' => 'name',
 *		'server' => 'localhost',
 *		'username' => 'your_username',
 *		'password' => 'your_password',
 *
 *		// [optional]
 *		'charset' => 'utf8',
 *		'port' => 3306,
 *
 *		// [optional] Table prefix
 *		'prefix' => 'PREFIX_',
 *
 *		// [optional] Enable logging (Logging is disabled by default for better performance)
 *		'logging' => true,
 *
 *		// [optional] MySQL socket (shouldn't be used with server and port)
 *		'socket' => '/tmp/mysql.sock',
 *
 *		// [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
 *		'option' => [
 *			PDO::ATTR_CASE => PDO::CASE_NATURAL
 *		],
 *
 *		// [optional] Medoo will execute those commands after connected to the database for initialization
 *		'command' => [
 *			'SET SQL_MODE=ANSI_QUOTES'
 *		]
 *	]);
 *</code>
 */

class Medoo
{

	protected pdo;

	protected database_type;

	protected prefix;

	protected statement;

	protected option = [];

	protected logs = [];

	protected logging = false;

	protected debug_mode = false;

	protected guid = 0;

	public function __construct(array! options)
	{
		var commands,attr,port,is_port,driver,stack,key,value,dsn,e;
		try {
			let commands = [];
			if is_array(options)
			{
				if isset options["database_type"]
				{
					let this->database_type = strtolower(options["database_type"]);
				}
			}
			else{
				throw new \Exception("option is not array");
			}

			if isset(options["prefix"])
			{
				let this->prefix = options["prefix"];
			}

			if isset(options["option"])
			{
				let this->option = options["option"];
			}

			if isset(options["logging"]) && is_bool(options["logging"])
			{
				let this->logging = options["logging"];
			}

			if isset(options["command"]) && is_array(options["command"])
			{
				let commands = options["command"];
			}
			else
			{
				let commands = [];
			}

			if isset(options["dsn"])
			{
				if isset(options["dsn"]["driver"])
				{
					let attr = options["dsn"];
				}
				else
				{
					// return false;
					throw new \Exception("option is not array");
				}
			}
			else
			{
				if isset(options["port"]) && is_int(options["port"] * 1)

				{
					let port = options["port"];
				}

				let is_port = isset(options["port"]);
			}
		}
		catch \PDOException, e {
            throw new \Exception(e->getMessage());
        }
	}

}
