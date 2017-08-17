[
    {
        "type": "namespace",
        "name": "Vof\\Session\\Adapter",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Session\\Adapter",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                "line": 22,
                "char": 24
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Backend\\Redis",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                "line": 23,
                "char": 28
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
        "line": 24,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Frontend\\None",
                "alias": "FrontendNone",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                "line": 24,
                "char": 44
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
        "line": 53,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Session\\Adapter\\Redis\n *\n * This adapter store sessions in Redis\n *\n * <code>\n * use Vof\\Session\\Adapter\\Redis;\n *\n * $session = new Redis(\n *     [\n *         \"uniqueId\"   => \"my-private-app\",\n *         \"host\"       => \"localhost\",\n *         \"port\"       => 6379,\n *         \"auth\"       => \"foobared\",\n *         \"persistent\" => false,\n *         \"lifetime\"   => 3600,\n *         \"prefix\"     => \"my\",\n *         \"index\"      => 1,\n *     ]\n * );\n *\n * $session->start();\n *\n * $session->set(\"var\", \"some-value\");\n *\n * echo $session->get(\"var\");\n * <\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
        "line": 54,
        "char": 5
    },
    {
        "type": "class",
        "name": "Redis",
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
                    "name": "_redis",
                    "default": {
                        "type": "null",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                        "line": 56,
                        "char": 26
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 56,
                            "char": 32
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                    "line": 58,
                    "char": 10
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_lifetime",
                    "default": {
                        "type": "int",
                        "value": "8600",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                        "line": 58,
                        "char": 29
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 58,
                            "char": 35
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                    "line": 62,
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
                            "name": "options",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "default": {
                                "type": "empty-array",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 63,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 63,
                            "char": 48
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 65,
                                    "char": 15
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 67,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 67,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "host",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 67,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 67,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 67,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 67,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "options",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "host",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 68,
                                                    "char": 22
                                                }
                                            ],
                                            "expr": {
                                                "type": "string",
                                                "value": "127.0.0.1",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                "line": 68,
                                                "char": 37
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 68,
                                            "char": 37
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 69,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 71,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 71,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "port",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 71,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 71,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 71,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 71,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "options",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "port",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 72,
                                                    "char": 22
                                                }
                                            ],
                                            "expr": {
                                                "type": "int",
                                                "value": "6379",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                "line": 72,
                                                "char": 30
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 72,
                                            "char": 30
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 73,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 75,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 75,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "persistent",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 75,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 75,
                                        "char": 35
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 75,
                                    "char": 35
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 75,
                                "char": 35
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "options",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "persistent",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 76,
                                                    "char": 28
                                                }
                                            ],
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                "line": 76,
                                                "char": 37
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 76,
                                            "char": 37
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 77,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 79,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 79,
                                    "char": 42
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 79,
                                        "char": 29
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "lifetime",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 79,
                                        "char": 40
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 79,
                                    "char": 42
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 79,
                                "char": 42
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_lifetime",
                                            "expr": {
                                                "type": "variable",
                                                "value": "lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                "line": 80,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 80,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 81,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 83,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_redis",
                                    "expr": {
                                        "type": "new",
                                        "class": "Redis",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "new",
                                                    "class": "FrontendNone",
                                                    "dynamic": 0,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "array",
                                                                "left": [
                                                                    {
                                                                        "key": {
                                                                            "type": "string",
                                                                            "value": "lifetime",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                                            "line": 84,
                                                                            "char": 32
                                                                        },
                                                                        "value": {
                                                                            "type": "property-access",
                                                                            "left": {
                                                                                "type": "variable",
                                                                                "value": "this",
                                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                                                "line": 84,
                                                                                "char": 39
                                                                            },
                                                                            "right": {
                                                                                "type": "variable",
                                                                                "value": "_lifetime",
                                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                                                "line": 84,
                                                                                "char": 49
                                                                            },
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                                            "line": 84,
                                                                            "char": 49
                                                                        },
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                                        "line": 84,
                                                                        "char": 49
                                                                    }
                                                                ],
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                                "line": 84,
                                                                "char": 50
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                            "line": 84,
                                                            "char": 50
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 84,
                                                    "char": 51
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                "line": 84,
                                                "char": 51
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 86,
                                                    "char": 3
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                "line": 86,
                                                "char": 3
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 86,
                                        "char": 4
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 86,
                                    "char": 4
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 88,
                            "char": 26
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "session_set_save_handler",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                        "line": 89,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 89,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "open",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                        "line": 89,
                                                        "char": 17
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 89,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 89,
                                            "char": 18
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 89,
                                        "char": 18
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                        "line": 90,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 90,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "close",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                        "line": 90,
                                                        "char": 18
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 90,
                                                    "char": 18
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 90,
                                            "char": 19
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 90,
                                        "char": 19
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                        "line": 91,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 91,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "read",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                        "line": 91,
                                                        "char": 17
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 91,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 91,
                                            "char": 18
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 91,
                                        "char": 18
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                        "line": 92,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 92,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "write",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                        "line": 92,
                                                        "char": 18
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 92,
                                                    "char": 18
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 92,
                                            "char": 19
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 92,
                                        "char": 19
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                        "line": 93,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 93,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "destroy",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                        "line": 93,
                                                        "char": 20
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 93,
                                                    "char": 20
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 93,
                                            "char": 21
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 93,
                                        "char": 21
                                    },
                                    {
                                        "parameter": {
                                            "type": "array",
                                            "left": [
                                                {
                                                    "value": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                        "line": 94,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 94,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "gc",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                        "line": 94,
                                                        "char": 15
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 94,
                                                    "char": 15
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 95,
                                            "char": 3
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 95,
                                        "char": 3
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 95,
                                "char": 4
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 97,
                            "char": 8
                        },
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "parent",
                                "dynamic": 0,
                                "name": "__construct",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 97,
                                            "char": 30
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 97,
                                        "char": 30
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 97,
                                "char": 31
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 98,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Session\\Adapter\\Redis constructor\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                    "line": 63,
                    "last-line": 102,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "open",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 105,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 106,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * {@inheritdoc}\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 104,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                        "line": 104,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                    "line": 103,
                    "last-line": 110,
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
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 113,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 114,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * {@inheritdoc}\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 112,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                        "line": 112,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                    "line": 111,
                    "last-line": 118,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "read",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "sessionId",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 119,
                            "char": 32
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "cast",
                                "left": "string",
                                "right": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 121,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 121,
                                            "char": 32
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 121,
                                        "char": 32
                                    },
                                    "name": "get",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "sessionId",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                "line": 121,
                                                "char": 46
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 121,
                                            "char": 46
                                        },
                                        {
                                            "parameter": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 121,
                                                    "char": 53
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lifetime",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 121,
                                                    "char": 63
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                "line": 121,
                                                "char": 63
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 121,
                                            "char": 63
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 121,
                                    "char": 64
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 121,
                                "char": 64
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 122,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * {@inheritdoc}\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 120,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                        "line": 120,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                    "line": 119,
                    "last-line": 126,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "write",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "sessionId",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 127,
                            "char": 40
                        },
                        {
                            "type": "parameter",
                            "name": "data",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 127,
                            "char": 53
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 129,
                                        "char": 15
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "_redis",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 129,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 129,
                                    "char": 23
                                },
                                "name": "save",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "sessionId",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 129,
                                            "char": 38
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 129,
                                        "char": 38
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "data",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 129,
                                            "char": 44
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 129,
                                        "char": 44
                                    },
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                "line": 129,
                                                "char": 51
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                "line": 129,
                                                "char": 61
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 129,
                                            "char": 61
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 129,
                                        "char": 61
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 129,
                                "char": 62
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 130,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * {@inheritdoc}\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 128,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                        "line": 128,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                    "line": 127,
                    "last-line": 134,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "destroy",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "sessionId",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 135,
                                "char": 49
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 135,
                            "char": 49
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "id",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 137,
                                    "char": 9
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 139,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "sessionId",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 139,
                                    "char": 18
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 139,
                                    "char": 25
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 139,
                                "char": 25
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "id",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                    "line": 140,
                                                    "char": 18
                                                },
                                                "name": "getId",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                "line": 140,
                                                "char": 26
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 140,
                                            "char": 26
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 141,
                                    "char": 3
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "id",
                                            "expr": {
                                                "type": "variable",
                                                "value": "sessionId",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                "line": 142,
                                                "char": 22
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 142,
                                            "char": 22
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 143,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 145,
                            "char": 6
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 145,
                                    "char": 8
                                },
                                "name": "removeSessionData",
                                "call-type": 1,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 145,
                                "char": 28
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 147,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "ternary",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 147,
                                            "char": 15
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 147,
                                            "char": 23
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 147,
                                        "char": 23
                                    },
                                    "name": "exists",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "id",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                "line": 147,
                                                "char": 33
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 147,
                                            "char": 33
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 147,
                                    "char": 35
                                },
                                "right": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 147,
                                            "char": 42
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 147,
                                            "char": 50
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                        "line": 147,
                                        "char": 50
                                    },
                                    "name": "delete",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "id",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                                "line": 147,
                                                "char": 60
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                            "line": 147,
                                            "char": 60
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 147,
                                    "char": 62
                                },
                                "extra": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                    "line": 147,
                                    "char": 68
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 147,
                                "char": 68
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 148,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * {@inheritdoc}\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 136,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                        "line": 136,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                    "line": 135,
                    "last-line": 152,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "gc",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 155,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                            "line": 156,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * {@inheritdoc}\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                                "line": 154,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                        "line": 154,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
                    "line": 153,
                    "last-line": 157,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
            "line": 54,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/redis.zep",
        "line": 54,
        "char": 5
    }
]