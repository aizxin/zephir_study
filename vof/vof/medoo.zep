namespace Vof;

/**
 * Vof\Medoo
 * Medoo database framework
 * https://medoo.in
 * Version 1.4.5
 *
 * <code>
 * use Vof\Medoo;
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
		var commands,attr,port,is_port,driver,stack,key,value,dsn;
		try {
			let commands = [];
			if is_array(options)
			{
				if isset(options["database_type"])
				{
					let this->database_type = strtolower(options["database_type"]);
				}
			}else{
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

				let is_port = isset(port);

				switch (this->database_type)
				{
					case "mariadb":
					case "mysql":
						let attr = [
							"driver" => "mysql",
							"dbname" => options["database_name"]
						];

						if (isset(options["socket"]))
						{
							let attr["unix_socket"] = options["socket"];
						}
						else
						{
							let attr["host"] = options["server"];

							if (is_port)
							{
								let attr["port"] = port;
							}
						}

						// Make MySQL using standard quoted identifier
						let commands[] = "SET SQL_MODE=ANSI_QUOTES";
						break;

					case "pgsql":
						let attr = [
							"driver" => "pgsql",
							"host" => options["server"],
							"dbname" => options["database_name"]
						];

						if (is_port)
						{
							let attr["port"] = port;
						}

						break;

					case "sybase":
						let attr = [
							"driver" => "dblib",
							"host" => options["server"],
							"dbname" => options["database_name"]
						];

						if (is_port)
						{
							let attr["port"] = port;
						}

						break;

					case "oracle":
						let attr = [
							"driver" => "oci",
							"dbname" => options["server"] ?
								'//' . options["server"] . (is_port ? ":" . port : ":1521") . "/" . options["database_name"] :
								options["database_name"]
						];

						if (isset(options["charset"]))
						{
							let attr["charset"] = options["charset"];
						}

						break;

					case "mssql":
						if (strstr(PHP_OS, "WIN"))
						{
							let attr = [
								"driver" => "sqlsrv",
								"Server" => options[ 'server' ] . (is_port ? "," . port : ""),
								"Database" => options["database_name"]
							];
						}
						else
						{
							let attr = [
								"driver" => "dblib",
								"host" => options["server"] . (is_port ? ":" . port : ""),
								"dbname" => options["database_name"]
							];
						}

						// Keep MSSQL QUOTED_IDENTIFIER is ON for standard quoting
						let commands[] = "SET QUOTED_IDENTIFIER ON";

						// Make ANSI_NULLS is ON for NULL value
						let commands[] = "SET ANSI_NULLS ON";
						break;

					case "sqlite":
						let this->pdo = new \PDO("sqlite:" . options["database_file"], null, null, this->option);

						return;
				}
			}

			let driver = attr["driver"];

			unset(attr["driver"]);

			let stack = [];

			for key, value in attr {
                if (is_int(key))
				{
					let stack[] = value;
				}
				else
				{
					let stack[] = key . "=" . value;
				}
            }

			let dsn = driver . ":" . implode(stack, ";");

			if (
				in_array(this->database_type, ["mariadb", "mysql", "pgsql", "sybase", "mssql"]) &&
				isset(options["charset"])
			)
			{
				let commands[] = "SET NAMES '" . options["charset"] . "'";
			}

			let this->pdo = new \PDO(
				dsn,
				options["username"],
				options["password"],
				this->option
			);

			for key, value in commands {
				this->pdo->exec(value);
            }
		}
		catch (\PDOException, e) {
			throw new \Exception(e->getMessage());
		}
	}

}
?>