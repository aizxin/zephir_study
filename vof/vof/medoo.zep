
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


    protected database_type;

    protected prefix;

    protected statement;

    protected option = [];

    protected logs = [];

    protected logging = false;

    protected debug_mode = false;

    protected guid = 0;

    protected columns = [];

    protected map = [];

	public pdo;

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
				let commands[] = "SET NAMES " . options["charset"];
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

    /////////////////////////////////////////////////////////////////////////////////////////////////  1


    public function get(table, join = null, columns = null, where = null)
    {
        var map = [],stack = [],column_map = [],column,is_single_column,query,data;

        let column = where === null ? join : columns;

        let is_single_column = is_string(column) && column !== "*";

        let query = this->exec(this->selectContext(table, map, join, columns, where) . " LIMIT 1", this->map);

        let columns = this->columns;

        if (query)
        {
            let data = query->fetchAll(\PDO::FETCH_ASSOC);

            if (isset(data[ 0 ]))
            {
                if (column === "*")
                {
                    return data[ 0 ];
                }

                let column_map = this->columnMap(columns, column_map);

                let stack = this->dataMap(data[ 0 ], columns, column_map, stack);

                if (is_single_column)
                {
                    return stack[ column_map[ column ][ 0 ] ];
                }

                return stack;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }

    public function delete(table, where)
    {
        var map = [];

        return this->exec("DELETE FROM " . this->tableQuote(table) . this->whereClause(where, map), this->map);
    }

    public function has(table, join, where = null)
    {
        var map = [],column = null,query;

        let query = this->exec("SELECT EXISTS(" . this->selectContext(table, map, join, column, where, 1) . ")", this->map);

        if (query)
        {
            return query->fetchColumn() === "1";
        }
        else
        {
            return false;
        }
    }

    public function count(table, join = null, column = null, where = null) -> int
    {
        var query,map = [];

        let query = this->exec(this->selectContext(table, map, join, column, where, "COUNT"), this->map);

        return query ? 0 + query->fetchColumn() : false;
    }

    public function max(table, join, column = null, where = null) -> float | boolean
    {
        var max,query,map = [];
        let query = this->exec(this->selectContext(table, map, join, column, where, "MAX"), this->map);
        if (query)
        {
            let max = query->fetchColumn();
            return is_numeric(max) ? max + 0 : max;
        }
        else
        {
            return false;
        }
    }

    public function min(table, join, column = null, where = null) -> float | boolean
    {
        var min,query,map = [];

        let query = this->exec(this->selectContext(table, map, join, column, where, "MIN"), this->map);

        if (query)
        {
            let min = query->fetchColumn();

            return is_numeric(min) ? min + 0 : min;
        }
        else
        {
            return false;
        }
    }

    public function avg(table, join, column = null, where = null) -> float | boolean
    {
        var query,map = [];

        let query = this->exec(this->selectContext(table, map, join, column, where, "AVG"), this->map);

        return query ? 0 + query->fetchColumn() : false;
    }

    public function sum(table, join, column = null, where = null) -> float | boolean
    {
        var query,map = [];

        let query = this->exec(this->selectContext(table, map, join, column, where, "SUM"), this->map);

        return query ? 0 + query->fetchColumn() : false;
    }

    public function action(actions)  -> boolean
    {
        var result;
        if (is_callable(actions))
        {
            this->pdo->beginTransaction();
            let result = {actions}(this);
            if (result === false)
            {
                this->pdo->rollBack();
            }
            else
            {
                this->pdo->commit();
            }
        }
        else
        {
            return false;
        }
    }

    public function id() -> int
    {
        var type;
        let type = this->database_type;
        if (type === "oracle")
        {
            return 0;
        }
        elseif (type === "mssql")
        {
            return this->pdo->query("SELECT SCOPE_IDENTITY()")->fetchColumn();
        }
        elseif (type === "pgsql")
        {
            return this->pdo->query("SELECT LASTVAL()")->fetchColumn();
        }
        return this->pdo->lastInsertId();
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////// 1
    public function select(table, join, columns = null, where = null)  -> array
    {
        var column,map=[],stack=[],column_map=[],index=0,is_single_column,query = null,data,current_stack;

        let column = where === null ? join : columns;
        let is_single_column = is_string(column) && column !== "*";

        let query = this->exec(this->selectContext(table, map, join, columns, where), this->map);
        let columns =  this->columns;

        if (query == false)
        {
            return false;
        }
        if (columns === "*")
        {
            return query->fetchAll(\PDO::FETCH_ASSOC);
        }

        if (is_single_column)
        {
            return query->fetchAll(\PDO::FETCH_ASSOC);
        }
        var fetchMethod;
        let fetchMethod = "fetch";
        let data = query->{fetchMethod}(\PDO::FETCH_ASSOC);
        let column_map = this->columnMap(columns, column_map);
        while (data)
        {
        	let current_stack = [];
            let current_stack = this->dataMap(data, columns, column_map, current_stack);
            let stack[ index ] = current_stack;
            let index++;
            let data = query->{fetchMethod}(\PDO::FETCH_ASSOC);
        }
        return stack;
    }


    protected function dataMap(data, columns, column_map, stack) -> array
    {
    	var key,value,map,column_key,current_stack = [];
    	for key,value in columns
		{
			if (is_int(key))
			{
				let map = column_map[ value ];
				let column_key = map[ 0 ];
				if (isset(map[ 1 ]))
				{
					switch (map[ 1 ])
					{
						case "Number":
						case "Int":
							let stack[ column_key ] = intval(data[ column_key ]);
							break;

						case "Bool":
							let stack[ column_key ] = (boolean) data[ column_key ];
							break;

						case "Object":
							let stack[ column_key ] = unserialize(data[ column_key ]);
							break;

						case "JSON":
							let stack[ column_key ] = json_decode(data[ column_key ], true);
							break;

						case "String":
							let stack[ column_key ] = data[ column_key ];
							break;
					}
				}
				else
				{
					let stack[ column_key ] = data[ column_key ];
				}
			}
			else
			{

				let current_stack = this->dataMap(data, value, column_map, current_stack);

				let stack[ key ] = current_stack;
			}
		}
		return stack;
    }

	protected function columnMap(columns, stack) -> array
	{
		if (columns === "*")
		{
			return stack;
		}
		var key,value,key_match,column_key;
		for key,value in columns
		{
			if (is_int(key))
			{
				preg_match("/(?<column>[a-zA-Z0-9_\.]*)(?:\s*\((?<alias>[a-zA-Z0-9_]+)\)|\s*\[(?<type>(String|Bool|Int|Number|Object|JSON))\])?/i", value, key_match);

				let column_key = isset(key_match[ "alias" ]) && !empty(key_match[ "alias" ]) ? key_match[ "alias" ] : preg_replace("/^[\w]*\./i", "", key_match[ "column" ]);

				if (isset(key_match[ "type" ]))
				{
					let stack[ value ] = [column_key, key_match[ "type" ]];
				}
				else
				{
					let stack[ value ] = [column_key, "String"];
				}
			}
			else
			{
				let stack = this->columnMap(value, stack);
			}
		}

		return stack;
	}

	protected function selectContext(table, map, join, columns = null, where = null, column_fn = null) -> string
    {
        var column,table_match,table_query,join_key,table_join=[],join_array=[],sub_table,relation,match1,key,value,table_name,joins=[];
        preg_match("/(?<table>[a-zA-Z0-9_]+)\s*\((?<alias>[a-zA-Z0-9_]+)\)/i", table, table_match);
        let this->columns = [];
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
        if (isset(join_key[ 0 ]) && strpos(join_key[ 0 ], "[") === 0)
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
                        let relation = "USING (`" . relation . "`)";
                    }

                    if (is_array(relation))
                    {
                        // For ['column1', 'column2']
                        if (isset(relation[ 0 ]))
                        {
                            let relation = "USING (`" . implode("`, `",relation) . "`)";
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
                                        table . ".`" . key . "`"
                                ) .
                                " = " .
                                this->tableQuote(isset(match1[ "alias" ]) ? match1[ "alias" ] : match1[ "table" ]) . ".`" . value . "`";
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
            if is_null(columns)
            {
                if is_null(where)
                {
                    if (is_array(join) && column_fn)
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

        if column_fn
        {
            if (column_fn === 1)
            {
                let column = "1";

                if is_null(where)
                {
                    let where = columns;
                }
            }
            else
            {
                if empty(columns)
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
        let this->columns = columns;
        return "SELECT " . column . " FROM " . table_query . this->whereClause(where, map);
    }

    protected function whereClause(where, map) -> string
	{
		var group,map_key,columns,where_clause="",where_keys,where_OR,where_AND,single_condition,condition,value,match1,mode,mode_array=[];
		let this->map = [];
		if (is_array(where))
		{
			let where_keys = array_keys(where);
			let where_AND = preg_grep("/^AND\s*#?$/i", where_keys);
			let where_OR = preg_grep("/^OR\s*#?$/i", where_keys);

			let single_condition = array_diff_key(where, array_flip(
				["AND", "OR", "GROUP", "ORDER", "HAVING", "LIMIT", "LIKE", "MATCH"]
			));

			if (!empty(single_condition))
			{
				let condition = this->dataImplode(single_condition, map, " AND");

				if (condition !== "")
				{
					let where_clause = " WHERE " . condition;
				}
			}

			if (!empty(where_AND))
			{
				let value = array_values(where_AND);
				let where_clause = " WHERE " . this->dataImplode(where[ value[ 0 ] ], map, " AND");
			}

			if (!empty(where_OR))
			{
				let value = array_values(where_OR);
				let where_clause = " WHERE " . this->dataImplode(where[ value[ 0 ] ], map, " OR");
			}

			if (isset(where[ "MATCH" ]))
			{
				let match1 = where[ "MATCH" ];

				if (is_array(match1) && (isset(match1[ "columns" ]) && isset(match1[ "keyword" ])))
				{
					let mode = "";

					let mode_array = [
						"natural" : "IN NATURAL LANGUAGE MODE",
						"natural+query" : "IN NATURAL LANGUAGE MODE WITH QUERY EXPANSION",
						"boolean" : "IN BOOLEAN MODE",
						"query" : "WITH QUERY EXPANSION"
					];

					if (isset(match1[ "mode" ]) && isset(mode_array[ match1[ "mode" ] ]))
					{
						let mode = " " . mode_array[ match1[ "mode" ] ];
					}

					let columns = implode(", ",array_map([this, "columnQuote"], match1[ "columns" ]));
					let map_key = this->mapKey();
					let map[ map_key ] = [match1[ "keyword" ], \PDO::PARAM_STR];

					let where_clause .= (where_clause !== "" ? " AND " : " WHERE") . " MATCH (" . columns . ") AGAINST (" . map_key . mode . ")";
				}
			}

			if (isset(where[ "GROUP" ]))
			{
				let group = where[ "GROUP" ];

				if (is_array(group))
				{
					var stack = [],value1;

					for value1 in group
					{
						let stack[] = this->columnQuote(value1);
					}

					let where_clause .= " GROUP BY " . implode(",",stack);
				}
				else
				{
					let where_clause .= " GROUP BY " . this->columnQuote(where[ "GROUP" ]);
				}

				if (isset(where[ "HAVING" ]))
				{
					let where_clause .= " HAVING " . this->dataImplode(where[ "HAVING" ], map, " AND");
				}
			}

			if (isset(where[ "ORDER" ]))
			{
				var order1;
				let order1 = where[ "ORDER" ];

				if (is_array(order1))
				{
					var stack = [],column,value2;
					for column,value2 in order1
					{
						if (is_array(value2))
						{
							let stack[] = "FIELD(" . this->columnQuote(column) . ", " . this->arrayQuote(value2) . ")";
						}else{
							if (value2 === "ASC" || value2 === "DESC")
							{
								let stack[] = this->columnQuote(column) . " " . value2;
							}else{
								if (is_int(column))
								{
									let stack[] = this->columnQuote(value2);
								}
							}
						}
					}

					let where_clause .= " ORDER BY " . implode(",",stack);
				}
				else
				{
					let where_clause .= " ORDER BY " . this->columnQuote(order1);
				}

				if (isset(where[ "LIMIT" ]) && in_array(this->database_type, ["oracle", "mssql"]))
				{
					var limit;
					let  limit = where[ "LIMIT" ];

					if (is_numeric(limit))
					{
						let where_clause .= " FETCH FIRST " . limit . " ROWS ONLY";
					}

					if (is_array(limit) && is_numeric(limit[ 0 ]) && is_numeric(limit[ 1 ]))
					{
						let where_clause .= " OFFSET " . limit[0] . " ROWS FETCH NEXT " . limit[ 1 ] . " ROWS ONLY";
					}
				}
			}

			if (isset(where[ "LIMIT" ]) && !in_array(this->database_type, ["oracle", "mssql"]))
			{
				var limit;
				let  limit = where[ "LIMIT" ];

				if (is_numeric(limit))
				{
					let where_clause .= " LIMIT " . limit;
				}

				if (is_array(limit) && is_numeric(limit[ 0 ]) && is_numeric(limit[ 1 ]))
				{
					let where_clause .= " LIMIT " . limit[ 1 ] . " OFFSET " . limit[ 0 ];
				}
			}
		}
		else
		{
			if (where !== null)
			{
				let where_clause .= " " . where;
			}
		}
		let this->map = map;
		return where_clause;
	}

	protected function mapKey()  -> string
	{
		var i;
		let i = this->guid;
		let this->guid = this->guid + 1;
		return ":MeDoO_" . i . "_mEdOo";
	}

	protected function dataImplode(data, conjunctor, outer_conjunctor = null)  -> string
    {
        var wheres = [],key,value,type,relation_match,match1,operator,connector,stack,condition;

        for key,value in data
        {
            let type = gettype(value);

            if (preg_match("/^(AND|OR)(\s+#.*)?$/i", key, relation_match) && type == "array")
            {
                let wheres[] = 0 !== count(array_diff_key(value, array_keys(array_keys(value)))) ?
                    "(" . this->dataImplode(value, " " . relation_match[ 1 ]) . ")" :
                    "(" . this->innerConjunct(value, " " . relation_match[ 1 ], conjunctor) . ")";
            }
            else
            {
                if (is_int(key) && preg_match("/([\w\.\-]+)\[(\>|\>\=|\<|\<\=|\!|\=)\]([\w\.\-]+)/i", value, match1)
                )
                {
                    let operator = match1[ 2 ];

                    let wheres[] = this->columnQuote(match1[ 1 ]) . " " . operator . " " . this->columnQuote(match1[ 3 ]);
                }
                else
                {
                    preg_match("/(#?)([\w\.\-]+)(\[(\>|\>\=|\<|\<\=|\!|\<\>|\>\<|\!?~)\])?/i", key, match1);
                    var column;
                    let column = this->columnQuote(match1[ 2 ]);

                    if (isset(match1[ 4 ]))
                    {
                        let operator = match1[ 4 ];

                        if (operator == "!")
                        {
                            switch (type)
                            {
                                case "NULL":
                                    let wheres[] = column . " IS NOT NULL";
                                    break;

                                case "array":
                                    let wheres[] = column . " NOT IN (" . this->arrayQuote(value) . ")";
                                    break;

                                case "integer":
                                case "double":
                                    let wheres[] = column . " != " . value;
                                    break;

                                case "boolean":
                                    let wheres[] = column . " != " . (value ? "1" : "0");
                                    break;

                                case "string":
                                    let wheres[] = column . " != " . this->fnQuote(key, value);
                                    break;
                            }
                        }

                        if (operator == "<>" || operator == "><")
                        {
                            if (type == "array")
                            {
                                if (operator == "><")
                                {
                                    let column .= " NOT";
                                }

                                if (is_numeric(value[ 0 ]) && is_numeric(value[ 1 ]))
                                {
                                    let wheres[] = "(" . column . " BETWEEN " . value[ 0 ] . " AND " . value[ 1 ] . ")";
                                }
                                else
                                {
                                    let wheres[] = "(" . column . " BETWEEN " . this->quote(value[ 0 ]) . " AND " . this->quote(value[ 1 ]) . ")";
                                }
                            }
                        }

                        if (operator == "~" || operator == "!~")
                        {
                            if (type != "array")
                            {
                                let value = [value];
                            }

                            let connector = " OR ";
                            let stack = array_values(value);

                            if (is_array(stack[0]))
                            {
                                if (isset(value["AND"]) || isset(value["OR"]))
                                {
                                    let connector = " " . array_keys(value)[0] . " ";
                                    let value = stack[0];
                                }
                            }

                            var like_clauses = [],item;
                            for item in value
                            {
                                let item = strval(item);

                                if (!preg_match("/(\[.+\]|_|%.+|.+%)/", item))
                                {
                                    let item = "%" . item . "%";
                                }

                                let like_clauses[] = column . (operator === "!~" ? " NOT" : "") . " LIKE " . this->fnQuote(key, item);
                            }

                            let wheres[] = "(" . implode(like_clauses,connector) . ")";
                        }

                        if (in_array(operator, [">", ">=", "<", "<="]))
                        {
                            let condition = column . " " . operator . " ";

                            if (is_numeric(value))
                            {
                                let condition .= value;
                            }
                            elseif (strpos(key, "#") === 0)
                            {
                                let condition .= this->fnQuote(key, value);
                            }
                            else
                            {
                                let condition .= this->quote(value);
                            }

                            let wheres[] = condition;
                        }
                    }
                    else
                    {
                        switch (type)
                        {
                            case "NULL":
                                let wheres[] = column . " IS NULL";
                                break;

                            case "array":
                                let wheres[] = column . " IN (" . this->arrayQuote(value) . ")";
                                break;

                            case "integer":
                            case "double":
                                let wheres[] = column . " = " . value;
                                break;

                            case "boolean":
                                let wheres[] = column . " = " . (value ? "1" : "0");
                                break;

                            case "string":
                                let wheres[] = column . " = " . this->fnQuote(key, value);
                                break;
                        }
                    }
                }
            }
        }

        return implode(wheres,conjunctor . " ");
    }


    protected function fnQuote(column, str)  -> string
    {
        return (strpos(column, "#") === 0 && preg_match("/^[A-Z0-9\_]*\([^)]*\)$/", str)) ? str : this->quote(str);
    }

    protected function arrayQuote(array1)  -> string
    {
        var stack = [],value;
        for value in array1
        {
            let stack[] = is_int(value) ? value : this->pdo->quote(value);
        }

        return implode(",",stack);
    }

    protected function innerConjunct(data, conjunctor, outer_conjunctor)  -> string
    {
        var haystack = [],value;
        for value in data
        {
            let haystack[] = "(" . this->dataImplode(value, conjunctor) . ")";
        }

        return implode(haystack,outer_conjunctor . " ");
    }

    protected function columnPush(columns) -> string
    {
        if (columns === "*")
        {
            return columns;
        }

        var stack = [],key,value,match2;

        if (is_string(columns))
        {
            let columns = explode(",",columns);
        }

        for key,value in columns
        {
            if (is_array(value))
            {
                let stack[] = this->columnPush(value);
            }
            else
            {
                preg_match("/(?<column>[a-zA-Z0-9_\.]+)(?:\s*\((?<alias>[a-zA-Z0-9_]+)\)|\s*\[(?<type>(String|Bool|Int|Number|Object|JSON))\])?/i", value, match2);
                if (isset(match2[ "alias" ]) && !empty(match2[ "alias" ]))
                {
                    let stack[] = this->columnQuote( match2[ "column" ] ) . " AS " . this->columnQuote( match2[ "alias" ] );

                    let columns[ key ] = match2[ "alias" ];
                }
                else
                {
                    let stack[] = this->columnQuote( match2[ "column" ] );
                }
            }
        }
        return implode(",",stack);
    }

    protected function columnQuote(str)  -> string
    {
        var column_match;
        preg_match("/(^#)?([a-zA-Z0-9_]*)\.([a-zA-Z0-9_]*)(\s*\[JSON\]$)?/", str, column_match);

        if (isset(column_match[ 2 ])&& isset(column_match[ 3 ]))
        {
            return "`" . this->prefix . column_match[ 2 ] . "`.`" . column_match[ 3 ] . "`";
        }

        return "`" . str . "`";
    }

	protected function tableQuote(table)  -> string
	{
		return "`" . this->prefix . table . "`";
	}

	public function debug()  -> <Medoo>
	{
		let this->debug_mode = true;
		return this;
	}

	public function error()
	{
		return this->statement ? this->statement->errorInfo() : null;
	}

	public function last()  -> array | boolean
	{
		var log;
		let log = end(this->logs);
		return this->generate(log[0], log[1]);
	}

	public function log()  -> array
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

	public function info()  -> array
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
