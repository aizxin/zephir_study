[
    {
        "type": "namespace",
        "name": "Vof\\Session\\Adapter",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Session\\Adapter",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                "line": 22,
                "char": 24
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Session\\Exception",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                "line": 23,
                "char": 26
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
        "line": 24,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Backend\\Libmemcached",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                "line": 24,
                "char": 35
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
        "line": 25,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Frontend\\Data",
                "alias": "FrontendData",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                "line": 25,
                "char": 44
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
        "line": 59,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Session\\Adapter\\Libmemcached\n *\n * This adapter store sessions in libmemcached\n *\n * <code>\n * use Vof\\Session\\Adapter\\Libmemcached;\n *\n * $session = new Libmemcached(\n *     [\n *         \"servers\" => [\n *             [\n *                 \"host\"   => \"localhost\",\n *                 \"port\"   => 11211,\n *                 \"weight\" => 1,\n *             ],\n *         ],\n *         \"client\" => [\n *             \\Memcached::OPT_HASH       => \\Memcached::HASH_MD5,\n *             \\Memcached::OPT_PREFIX_KEY => \"prefix.\",\n *         ],\n *         \"lifetime\" => 3600,\n *         \"prefix\"   => \"my_\",\n *     ]\n * );\n *\n * $session->start();\n *\n * $session->set(\"var\", \"some-value\");\n *\n * echo $session->get(\"var\");\n * <\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
        "line": 60,
        "char": 5
    },
    {
        "type": "class",
        "name": "Libmemcached",
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
                    "name": "_libmemcached",
                    "default": {
                        "type": "null",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                        "line": 62,
                        "char": 33
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 62,
                            "char": 39
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                    "line": 64,
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
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                        "line": 64,
                        "char": 29
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 64,
                            "char": 35
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                    "line": 70,
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
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 71,
                            "char": 43
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "servers",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 73,
                                    "char": 14
                                },
                                {
                                    "variable": "client",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 73,
                                    "char": 22
                                },
                                {
                                    "variable": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 73,
                                    "char": 32
                                },
                                {
                                    "variable": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 73,
                                    "char": 40
                                },
                                {
                                    "variable": "statsKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 73,
                                    "char": 50
                                },
                                {
                                    "variable": "persistentId",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 73,
                                    "char": 64
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 75,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "servers",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 75,
                                        "char": 41
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 75,
                                            "char": 29
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "servers",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 75,
                                            "char": 39
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 75,
                                        "char": 41
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 75,
                                    "char": 41
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 75,
                                "char": 41
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
                                                    "value": "No servers given in options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 76,
                                                    "char": 53
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 76,
                                                "char": 53
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 76,
                                        "char": 54
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 77,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 79,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "client",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 79,
                                        "char": 39
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 79,
                                            "char": 28
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "client",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 79,
                                            "char": 37
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 79,
                                        "char": 39
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 79,
                                    "char": 39
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 79,
                                "char": 39
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "client",
                                            "expr": {
                                                "type": "null",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 80,
                                                "char": 21
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 80,
                                            "char": 21
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 81,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 83,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "lifetime",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 83,
                                        "char": 43
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 83,
                                            "char": 30
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "lifetime",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 83,
                                            "char": 41
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 83,
                                        "char": 43
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 83,
                                    "char": 43
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 83,
                                "char": 43
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "lifetime",
                                            "expr": {
                                                "type": "int",
                                                "value": "8600",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 84,
                                                "char": 23
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 84,
                                            "char": 23
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 85,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 88,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_lifetime",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "min",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "lifetime",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 88,
                                                    "char": 37
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 88,
                                                "char": 37
                                            },
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "2592000",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 88,
                                                    "char": 46
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 88,
                                                "char": 46
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 88,
                                        "char": 47
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 88,
                                    "char": 47
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 90,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "prefix",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 90,
                                        "char": 39
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 90,
                                            "char": 28
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "prefix",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 90,
                                            "char": 37
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 90,
                                        "char": 39
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 90,
                                    "char": 39
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 90,
                                "char": 39
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "prefix",
                                            "expr": {
                                                "type": "null",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 91,
                                                "char": 21
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 91,
                                            "char": 21
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 92,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 94,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "statsKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 94,
                                        "char": 43
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 94,
                                            "char": 30
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "statsKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 94,
                                            "char": 41
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 94,
                                        "char": 43
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 94,
                                    "char": 43
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 94,
                                "char": 43
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "statsKey",
                                            "expr": {
                                                "type": "string",
                                                "value": "",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 95,
                                                "char": 21
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 95,
                                            "char": 21
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 96,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 98,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "persistentId",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 98,
                                        "char": 52
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 98,
                                            "char": 34
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "persistent_id",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 98,
                                            "char": 50
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 98,
                                        "char": 52
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 98,
                                    "char": 52
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 98,
                                "char": 52
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "persistentId",
                                            "expr": {
                                                "type": "string",
                                                "value": "phalcon-session",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 99,
                                                "char": 40
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 99,
                                            "char": 40
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 100,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 102,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_libmemcached",
                                    "expr": {
                                        "type": "new",
                                        "class": "Libmemcached",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "new",
                                                    "class": "FrontendData",
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
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                            "line": 103,
                                                                            "char": 32
                                                                        },
                                                                        "value": {
                                                                            "type": "property-access",
                                                                            "left": {
                                                                                "type": "variable",
                                                                                "value": "this",
                                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                                "line": 103,
                                                                                "char": 39
                                                                            },
                                                                            "right": {
                                                                                "type": "variable",
                                                                                "value": "_lifetime",
                                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                                "line": 103,
                                                                                "char": 49
                                                                            },
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                            "line": 103,
                                                                            "char": 49
                                                                        },
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                        "line": 103,
                                                                        "char": 49
                                                                    }
                                                                ],
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                "line": 103,
                                                                "char": 50
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                            "line": 103,
                                                            "char": 50
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 103,
                                                    "char": 51
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 103,
                                                "char": 51
                                            },
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "servers",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                "line": 105,
                                                                "char": 14
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "servers",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                "line": 105,
                                                                "char": 24
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                            "line": 105,
                                                            "char": 24
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "client",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                "line": 106,
                                                                "char": 13
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "client",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                "line": 106,
                                                                "char": 23
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                            "line": 106,
                                                            "char": 23
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "prefix",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                "line": 107,
                                                                "char": 13
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "prefix",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                "line": 107,
                                                                "char": 23
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                            "line": 107,
                                                            "char": 23
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "statsKey",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                "line": 108,
                                                                "char": 15
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "statsKey",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                "line": 108,
                                                                "char": 25
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                            "line": 108,
                                                            "char": 25
                                                        },
                                                        {
                                                            "key": {
                                                                "type": "string",
                                                                "value": "persistent_id",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                "line": 109,
                                                                "char": 20
                                                            },
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "persistentId",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                                "line": 110,
                                                                "char": 4
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                            "line": 110,
                                                            "char": 4
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 111,
                                                    "char": 3
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 111,
                                                "char": 3
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 111,
                                        "char": 4
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 111,
                                    "char": 4
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 113,
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                        "line": 114,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 114,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "open",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                        "line": 114,
                                                        "char": 17
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 114,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 114,
                                            "char": 18
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 114,
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                        "line": 115,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 115,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "close",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                        "line": 115,
                                                        "char": 18
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 115,
                                                    "char": 18
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 115,
                                            "char": 19
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 115,
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                        "line": 116,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 116,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "read",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                        "line": 116,
                                                        "char": 17
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 116,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 116,
                                            "char": 18
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 116,
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                        "line": 117,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 117,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "write",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                        "line": 117,
                                                        "char": 18
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 117,
                                                    "char": 18
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 117,
                                            "char": 19
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 117,
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                        "line": 118,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 118,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "destroy",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                        "line": 118,
                                                        "char": 20
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 118,
                                                    "char": 20
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 118,
                                            "char": 21
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 118,
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                        "line": 119,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 119,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "gc",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                        "line": 119,
                                                        "char": 15
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 119,
                                                    "char": 15
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 120,
                                            "char": 3
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 120,
                                        "char": 3
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 120,
                                "char": 4
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 122,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 122,
                                            "char": 30
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 122,
                                        "char": 30
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 122,
                                "char": 31
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 123,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Session\\Adapter\\Libmemcached constructor\n\t *\n\t * @throws \\Vof\\Session\\Exception\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                    "line": 71,
                    "last-line": 125,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 127,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 128,
                            "char": 2
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 126,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                        "line": 126,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                    "line": 125,
                    "last-line": 130,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 132,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 133,
                            "char": 2
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 131,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                        "line": 131,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                    "line": 130,
                    "last-line": 137,
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
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 138,
                            "char": 39
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 140,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_libmemcached",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 140,
                                            "char": 39
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 140,
                                        "char": 39
                                    },
                                    "name": "get",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "sessionId",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 140,
                                                "char": 53
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 140,
                                            "char": 53
                                        },
                                        {
                                            "parameter": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 140,
                                                    "char": 60
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lifetime",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 140,
                                                    "char": 70
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 140,
                                                "char": 70
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 140,
                                            "char": 70
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 140,
                                    "char": 71
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 140,
                                "char": 71
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 141,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 139,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                        "line": 139,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                    "line": 138,
                    "last-line": 145,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 146,
                            "char": 40
                        },
                        {
                            "type": "parameter",
                            "name": "data",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 146,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 148,
                                        "char": 15
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "_libmemcached",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 148,
                                        "char": 30
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 148,
                                    "char": 30
                                },
                                "name": "save",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "sessionId",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 148,
                                            "char": 45
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 148,
                                        "char": 45
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "data",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 148,
                                            "char": 51
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 148,
                                        "char": 51
                                    },
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 148,
                                                "char": 58
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 148,
                                                "char": 68
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 148,
                                            "char": 68
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 148,
                                        "char": 68
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 148,
                                "char": 69
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 149,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 147,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                        "line": 147,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                    "line": 146,
                    "last-line": 153,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 154,
                                "char": 49
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 154,
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 156,
                                    "char": 9
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 158,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "sessionId",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 158,
                                    "char": 18
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 158,
                                    "char": 25
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 158,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 159,
                                                    "char": 18
                                                },
                                                "name": "getId",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 159,
                                                "char": 26
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 159,
                                            "char": 26
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 160,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 161,
                                                "char": 22
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 161,
                                            "char": 22
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 162,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 164,
                            "char": 6
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 164,
                                    "char": 8
                                },
                                "name": "removeSessionData",
                                "call-type": 1,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 164,
                                "char": 28
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 166,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "empty",
                                        "left": {
                                            "type": "variable",
                                            "value": "id",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 166,
                                            "char": 17
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 166,
                                        "char": 17
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 166,
                                    "char": 17
                                },
                                "right": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 166,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_libmemcached",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 166,
                                            "char": 39
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 166,
                                        "char": 39
                                    },
                                    "name": "exists",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "id",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 166,
                                                "char": 49
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 166,
                                            "char": 49
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 166,
                                    "char": 51
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 166,
                                "char": 51
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "cast",
                                        "left": "bool",
                                        "right": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 167,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_libmemcached",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 167,
                                                    "char": 38
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                "line": 167,
                                                "char": 38
                                            },
                                            "name": "delete",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "id",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                        "line": 167,
                                                        "char": 48
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                                    "line": 167,
                                                    "char": 48
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                            "line": 167,
                                            "char": 49
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                        "line": 167,
                                        "char": 49
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                    "line": 168,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 170,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 170,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 171,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 155,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                        "line": 155,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                    "line": 154,
                    "last-line": 175,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 178,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                            "line": 179,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                                "line": 177,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                        "line": 177,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
                    "line": 176,
                    "last-line": 180,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
            "line": 60,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/libmemcached.zep",
        "line": 60,
        "char": 5
    }
]