[
    {
        "type": "namespace",
        "name": "Vof\\Logger\\Adapter",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Exception",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                "line": 22,
                "char": 25
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Adapter",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                "line": 23,
                "char": 23
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
        "line": 24,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Formatter\\Syslog",
                "alias": "SyslogFormatter",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                "line": 24,
                "char": 51
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
        "line": 48,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Logger\\Adapter\\Syslog\n *\n * Sends logs to the system logger\n *\n * <code>\n * use Vof\\Logger;\n * use Vof\\Logger\\Adapter\\Syslog;\n *\n * \/\/ LOG_USER is the only valid log type under Windows operating systems\n * $logger = new Syslog(\n *     \"ident\",\n *     [\n *         \"option\"   => LOG_CONS | LOG_NDELAY | LOG_PID,\n *         \"facility\" => LOG_USER,\n *     ]\n * );\n *\n * $logger->log(\"This is a message\");\n * $logger->log(Logger::ERROR, \"This is an error\");\n * $logger->error(\"This is another error\");\n *<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
        "line": 49,
        "char": 5
    },
    {
        "type": "class",
        "name": "Syslog",
        "abstract": 0,
        "final": 0,
        "extends": "Adapter",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_opened",
                    "default": {
                        "type": "bool",
                        "value": "false",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                        "line": 52,
                        "char": 27
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                    "line": 59,
                    "char": 3
                }
            ],
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__construct",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 60,
                            "char": 34
                        },
                        {
                            "type": "parameter",
                            "name": "options",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                "line": 60,
                                "char": 50
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 60,
                            "char": 50
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "option",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 62,
                                    "char": 13
                                },
                                {
                                    "variable": "facility",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 62,
                                    "char": 23
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 64,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "name",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                "line": 64,
                                "char": 11
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "fetch",
                                            "left": {
                                                "type": "variable",
                                                "value": "option",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 66,
                                                "char": 40
                                            },
                                            "right": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                    "line": 66,
                                                    "char": 29
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "option",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                    "line": 66,
                                                    "char": 38
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 66,
                                                "char": 40
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                            "line": 66,
                                            "char": 40
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                        "line": 66,
                                        "char": 40
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "option",
                                                    "expr": {
                                                        "type": "constant",
                                                        "value": "LOG_ODELAY",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                        "line": 67,
                                                        "char": 28
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                    "line": 67,
                                                    "char": 28
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                            "line": 68,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 70,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "fetch",
                                            "left": {
                                                "type": "variable",
                                                "value": "facility",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 70,
                                                "char": 44
                                            },
                                            "right": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                    "line": 70,
                                                    "char": 31
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "facility",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                    "line": 70,
                                                    "char": 42
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 70,
                                                "char": 44
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                            "line": 70,
                                            "char": 44
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                        "line": 70,
                                        "char": 44
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "facility",
                                                    "expr": {
                                                        "type": "constant",
                                                        "value": "LOG_USER",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                        "line": 71,
                                                        "char": 28
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                    "line": 71,
                                                    "char": 28
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                            "line": 72,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 74,
                                    "char": 10
                                },
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "openlog",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "name",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                    "line": 74,
                                                    "char": 16
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 74,
                                                "char": 16
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "option",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                    "line": 74,
                                                    "char": 24
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 74,
                                                "char": 24
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "facility",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                    "line": 74,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 74,
                                                "char": 34
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                        "line": 74,
                                        "char": 35
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 75,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_opened",
                                            "expr": {
                                                "type": "bool",
                                                "value": "true",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 75,
                                                "char": 28
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                            "line": 75,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 76,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 78,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Logger\\Adapter\\Syslog constructor\n\t *\n\t * @param string name\n\t * @param array options\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                    "line": 60,
                    "last-line": 82,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getFormatter",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-identical",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                            "line": 85,
                                            "char": 18
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_formatter",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                            "line": 85,
                                            "char": 32
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                        "line": 85,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 85,
                                    "char": 32
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 85,
                                    "char": 43
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                "line": 85,
                                "char": 43
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_formatter",
                                            "expr": {
                                                "type": "new",
                                                "class": "SyslogFormatter",
                                                "dynamic": 0,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 86,
                                                "char": 48
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                            "line": 86,
                                            "char": 48
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 87,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 89,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 89,
                                    "char": 15
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_formatter",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 89,
                                    "char": 26
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                "line": 89,
                                "char": 26
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 90,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns the internal formatter\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "SyslogFormatter",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 84,
                                    "char": 2
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                "line": 84,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                        "line": 84,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                    "line": 83,
                    "last-line": 94,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "logInternal",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 95,
                            "char": 44
                        },
                        {
                            "type": "parameter",
                            "name": "type",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 95,
                            "char": 54
                        },
                        {
                            "type": "parameter",
                            "name": "time",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 95,
                            "char": 64
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 95,
                            "char": 79
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "appliedFormat",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 97,
                                    "char": 20
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 99,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "appliedFormat",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 99,
                                                "char": 28
                                            },
                                            "name": "getFormatter",
                                            "call-type": 1,
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                            "line": 99,
                                            "char": 44
                                        },
                                        "name": "format",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                    "line": 99,
                                                    "char": 59
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 99,
                                                "char": 59
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "type",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                    "line": 99,
                                                    "char": 65
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 99,
                                                "char": 65
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "time",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                    "line": 99,
                                                    "char": 71
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 99,
                                                "char": 71
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "context",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                    "line": 99,
                                                    "char": 80
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 99,
                                                "char": 80
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                        "line": 99,
                                        "char": 81
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 99,
                                    "char": 81
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 100,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-identical",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "appliedFormat",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                        "line": 100,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 100,
                                    "char": 29
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 100,
                                    "char": 39
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                "line": 100,
                                "char": 39
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "The formatted message is not valid",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                    "line": 101,
                                                    "char": 60
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 101,
                                                "char": 60
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                        "line": 101,
                                        "char": 61
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 102,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 104,
                            "char": 8
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "syslog",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "appliedFormat",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 104,
                                                "char": 23
                                            },
                                            "right": {
                                                "type": "int",
                                                "value": "0",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 104,
                                                "char": 25
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                            "line": 104,
                                            "char": 26
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                        "line": 104,
                                        "char": 26
                                    },
                                    {
                                        "parameter": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "appliedFormat",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 104,
                                                "char": 41
                                            },
                                            "right": {
                                                "type": "int",
                                                "value": "1",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                                "line": 104,
                                                "char": 43
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                            "line": 104,
                                            "char": 44
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                        "line": 104,
                                        "char": 44
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                "line": 104,
                                "char": 45
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 105,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Writes the log to the stream itself\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                    "line": 95,
                    "last-line": 109,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "close",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                        "line": 112,
                                        "char": 12
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "_opened",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                        "line": 112,
                                        "char": 21
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 112,
                                    "char": 21
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                "line": 112,
                                "char": 21
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                        "line": 113,
                                        "char": 15
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                    "line": 114,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 116,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "closelog",
                                "call-type": 1,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                "line": 116,
                                "char": 20
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                            "line": 117,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n \t * Closes the logger\n \t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                                "line": 111,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                        "line": 111,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
                    "line": 110,
                    "last-line": 119,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
            "line": 49,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/syslog.zep",
        "line": 49,
        "char": 5
    }
]