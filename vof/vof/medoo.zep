
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
		var commands=[],attr=[],port,is_port,driver,stack=[],key,value,dsn,e;
		try {
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
				switch (this->database_type)
				{
					case "mariadb":
						let this->database_type = "mysql";
						break;

					case "mysql":
						let attr = ["driver":"mysql","dbname":options["database_name"]];
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
						let commands[] = "SET SQL_MODE=ANSI_QUOTES";
						break;

					case "pgsql":
						let attr = ["driver":"pgsql","host":options["server"],"dbname":options["database_name"]];

						if (is_port)
						{
							let attr["port"] = port;
						}
						break;

					case "sybase":
						let attr = [
							"driver":"dblib",
							"host":options["server"],
							"dbname":options["database_name"]
						];

						if (is_port)
						{
							let attr["port"] = port;
						}

						break;

					case "oracle":
						let attr = [
							"driver":"oci",
							"dbname":options["server"] ? "//" . options["server"] . (is_port ? ":" . port : ":1521") . "/" . options["database_name"] : options["database_name"]
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
								"driver":"sqlsrv",
								"Server":options["server"] . (is_port ? "," . port : ""),
								"Database":options["database_name"]
							];
						}
						else
						{
							let attr = [
								"driver":"dblib",
								"host":options["server"] . (is_port ? ":" . port : ""),
								"dbname":options["database_name"]
							];
						}

						// Keep MSSQL QUOTED_IDENTIFIER is ON for standard quoting
						let commands[] = "SET QUOTED_IDENTIFIER ON";

						// Make ANSI_NULLS is ON for NULL value
						let commands[] = "SET ANSI_NULLS ON";
						break;

					case "sqlite":
						let this->pdo = new \PDO("sqlite:" . options["database_file"], null, null, this->option);
						break;

				}
			}
			let driver = attr["driver"];

			unset(attr["driver"]);

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

			let dsn = driver . ":" . implode(";",stack);

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

			for value in commands {
				this->pdo->exec(value);
            }
		}
		catch \PDOException, e {
            throw new \Exception(e->getMessage());
        }
	}

	public function query(query, map = [])
	{
		var key,value;
		if (!empty(map))
		{
			for key,value in map
			{
				switch (gettype(value))
				{
					case "NULL":
						let map[ key ] = [null, \PDO::PARAM_NULL];
						break;
					case "resource":
						let map[key] = [value, \PDO::PARAM_LOB];
						break;
					case "boolean":
						let map[key] = [(value ? "1" : "0"), \PDO::PARAM_BOOL];
						break;
					case "integer":
					case "double":
						let map[ key ] = [value, \PDO::PARAM_INT];
						break;
					case "string":
						let map[ key ] = [value, \PDO::PARAM_STR];
						break;
				}
			}
		}
		return this->exec(query, map);
	}


	public function exec(query,map)
	{
		var statement,key,value;
		if (this->debug_mode)
		{
			echo this->generate(query, map);
			let this->debug_mode = false;
			return false;
		}
		if (this->logging)
		{
			let this->logs[] = [query, map];
		}
		else
		{
			let this->logs = [[query, map]];
		}
		let statement = this->pdo->prepare(query);
		if (statement)
		{
			if(!empty(map)){
				for key,value in map
				{
					statement->bindValue(key, value[ 0 ], value[ 1 ]);
				}
			}
			statement->execute();
			let this->statement = statement;
			return statement;
		}
		else
		{
			return false;
		}
	}

	protected function generate(query, map)
	{
		var key,value;
		for key,value in map
		{
			if (value[1] === \PDO::PARAM_STR)
			{
				let query = str_replace(key, this->quote(value[0]), query);
			}
			elseif (value[ 1 ] === \PDO::PARAM_NULL)
			{
				let query = str_replace(key, "NULL", query);
			}
			else
			{
				let query = str_replace(key, value[0], query);
			}
		}
		return query;
	}

	public function quote(query)
	{
		return this->pdo->quote(query);
	}

	protected function dataMap(index, key, value, data, stack)
    {
        var sub_stack = [],sub_key,sub_value,current_stack,key_match;
        if (is_array(value))
        {
            for sub_key,sub_value in value
            {
                if (is_array(sub_value))
                {
                    let current_stack = stack[ index ][ key ];

                    this->dataMap(false, sub_key, sub_value, data, current_stack);

                    let stack[ index ][ key ][ sub_key ] = current_stack[ 0 ][ sub_key ];
                }
                else
                {
                    this->dataMap(false, preg_replace("/^[\w]*\./i", "", sub_value), sub_key, data, sub_stack);

                    let stack[ index ][ key ] = sub_stack;
                }
            }
        }
        else
        {
            if (index !== false)
            {
                let stack[ index ][ value ] = data[ value ];
            }
            else
            {
                if (preg_match("/[a-zA-Z0-9_\-\.]*\s*\(([a-zA-Z0-9_\-]*)\)/i", key, key_match))
                {
                    let key = key_match[ 1 ];
                }

                let stack[ key ] = data[ key ];
            }
        }
    }

    protected function selectContext(table, map, join, columns = null, where = null, column_fn = null)
    {
        var table_match,table_query,join_key,table_join=[],join_array=[],sub_table,relation,match1,key,value,table_name,joins=[];
        preg_match("/(?<table>[a-zA-Z0-9_]+)\s*\((?<alias>[a-zA-Z0-9_]+)\)/i", table, table_match);

        if (isset(table_match[ "table" ]) && isset(table_match[ "alias" ]))
        {
            let table = this->tableQuote(table_match[ "table" ]);

            let table_query = table . " AS " . this->tableQuote(table_match[ "alias" ]);
        }
        else
        {
            let table = this->tableQuote(table);

            let table_query = table;
        }

        let join_key = is_array(join) ? array_keys(join) : null;

        if (
            isset(join_key[ 0 ]) &&
            strpos(join_key[ 0 ], '[') === 0
        )
        {
            let join_array = [
                ">" : "LEFT",
                "<" : "RIGHT",
                "<>" : "FULL",
                "><" : "INNER"
            ];

            for sub_table,relation in join
            {
                preg_match("/(\[(?<join>\<|\>|\>\<|\<\>)\])?(?<table>[a-zA-Z0-9_]+)\s?(\((?<alias>[a-zA-Z0-9_]+)\))?/", sub_table, match1);

                if (match1[ "join" ] !== "" && match1[ "table" ] !== "")
                {
                    if (is_string(relation))
                    {
                        let relation = "USING ('" . relation . "')";
                    }

                    if (is_array(relation))
                    {
                        // For ['column1', 'column2']
                        if (isset(relation[ 0 ]))
                        {
                            let relation = "USING ('" . implode("', '",relation) . "')";
                        }
                        else
                        {
                            for key,value in relation
                            {
                                let joins[] = (
                                    strpos(key, ".") > 0 ?
                                        // For ['tableB.column' => 'column']
                                        this->columnQuote(key) :

                                        // For ['column1' => 'column2']
                                        table . ".'" . key . "'"
                                ) .
                                " = " .
                                this->tableQuote(isset(match1[ "alias" ]) ? match1[ "alias" ] : match1[ "table" ]) . ".'" . value . "'";
                            }

                            let relation = "ON " . implode(" AND ",joins);
                        }
                    }

                    let table_name = this->tableQuote(match1[ "table" ]) . " ";

                    if (isset(match1[ "alias" ]))
                    {
                        let table_name .= "AS " . this->tableQuote(match1[ "alias" ]) . " ";
                    }

                    let table_join[] = join_array[ match1[ "join" ] ] . " JOIN " . table_name . relation;
                }
            }

            let table_query .= " " . implode(" ",table_join);
        }
        else
        {
            if (is_null(columns))
            {
                if (is_null(where))
                {
                    if (
                        is_array(join) &&
                        isset(column_fn)
                    )
                    {
                        let where = join;
                        let columns = null;
                    }
                    else
                    {
                        let where = null;
                        let columns = join;
                    }
                }
                else
                {
                    let where = join;
                    let columns = null;
                }
            }
            else
            {
                let where = columns;
                let columns = join;
            }
        }

        if (isset(column_fn))
        {
            if (column_fn === 1)
            {
                let column = "1";

                if (is_null(where))
                {
                    let where = columns;
                }
            }
            else
            {
                if (empty(columns))
                {
                    let columns = "*";
                    let where = join;
                }

                let column = column_fn . "(" . this->columnPush(columns) . ")";
            }
        }
        else
        {
            let column = this->columnPush(columns);
        }

        return "SELECT " . column . " FROM " . table_query . this->whereClause(where, map);
    }

    protected function columnQuote(str)
    {
        var column_match;
        preg_match("/(^#)?([a-zA-Z0-9_]*)\.([a-zA-Z0-9_]*)(\s*\[JSON\]$)?/", str, column_match);

        if (isset(column_match[ 2 ])&& isset(column_match[ 3 ]))
        {
            return "'" . this->prefix . column_match[ 2 ] . "'.'" . column_match[ 3 ] . "'";
        }

        return "'" . str . "'";
    }

	protected function tableQuote(table)
	{
		return "'" . this->prefix . table . "'";
	}

	public function debug()
	{
		let this->debug_mode = true;
		return this;
	}

	public function error()
	{
		return this->statement ? this->statement->errorInfo() : null;
	}

	public function last()
	{
		var log;
		let log = end(this->logs);
		return this->generate(log[0], log[1]);
	}

	public function log()
	{
		var log,logs = [];
		for log in this->logs
		{
			let logs[] = this->generate(log[0], log[1]);
		}
		return logs;
		// return array_map(function (log)
		// 	{
		// 		let log = log;
		// 		return this->generate(log[0], log[1]);
		// 	},this->logs
		// );
	}

	public function info()
	{
		var output,key,value;
		let output = [
			"server" : "SERVER_INFO",
			"driver" : "DRIVER_NAME",
			"client" : "CLIENT_VERSION",
			"version" : "SERVER_VERSION",
			"connection" : "CONNECTION_STATUS"
		];
		for key,value in output
		{
			let output[ key ] = this->pdo->getAttribute(constant("\PDO::ATTR_" . value));
		}
		return output;
	}
}
