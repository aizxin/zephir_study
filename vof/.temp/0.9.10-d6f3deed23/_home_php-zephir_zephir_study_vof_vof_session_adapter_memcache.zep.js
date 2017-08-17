[
    {
        "type": "namespace",
        "name": "Vof\\Session\\Adapter",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Session\\Adapter",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                "line": 22,
                "char": 24
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Backend\\Memcache",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                "line": 23,
                "char": 31
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
        "line": 24,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Frontend\\Data",
                "alias": "FrontendData",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                "line": 24,
                "char": 44
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
        "line": 51,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Session\\Adapter\\Memcache\n *\n * This adapter store sessions in memcache\n *\n * <code>\n * use Vof\\Session\\Adapter\\Memcache;\n *\n * $session = new Memcache(\n *     [\n *         \"uniqueId\"   => \"my-private-app\",\n *         \"host\"       => \"127.0.0.1\",\n *         \"port\"       => 11211,\n *         \"persistent\" => true,\n *         \"lifetime\"   => 3600,\n *         \"prefix\"     => \"my_\",\n *     ]\n * );\n *\n * $session->start();\n *\n * $session->set(\"var\", \"some-value\");\n *\n * echo $session->get(\"var\");\n * <\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
        "line": 52,
        "char": 5
    },
    {
        "type": "class",
        "name": "Memcache",
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
                    "name": "_memcache",
                    "default": {
                        "type": "null",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                        "line": 54,
                        "char": 29
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 54,
                            "char": 35
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                    "line": 56,
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
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                        "line": 56,
                        "char": 29
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 56,
                            "char": 35
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                    "line": 60,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 61,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 61,
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 63,
                                    "char": 15
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 65,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 65,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "host",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 65,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 65,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 65,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 65,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 66,
                                                    "char": 22
                                                }
                                            ],
                                            "expr": {
                                                "type": "string",
                                                "value": "127.0.0.1",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                "line": 66,
                                                "char": 37
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 66,
                                            "char": 37
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 67,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 69,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 69,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "port",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 69,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 69,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 69,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 69,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 70,
                                                    "char": 22
                                                }
                                            ],
                                            "expr": {
                                                "type": "int",
                                                "value": "11211",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                "line": 70,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 70,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 71,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 73,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 73,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "persistent",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 73,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 73,
                                        "char": 35
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 73,
                                    "char": 35
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 73,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 74,
                                                    "char": 28
                                                }
                                            ],
                                            "expr": {
                                                "type": "int",
                                                "value": "0",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                "line": 74,
                                                "char": 33
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 74,
                                            "char": 33
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 75,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 77,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 77,
                                    "char": 42
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 77,
                                        "char": 29
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "lifetime",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 77,
                                        "char": 40
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 77,
                                    "char": 42
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 77,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                "line": 78,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 78,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 79,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 81,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_memcache",
                                    "expr": {
                                        "type": "new",
                                        "class": "Memcache",
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
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                                            "line": 82,
                                                                            "char": 32
                                                                        },
                                                                        "value": {
                                                                            "type": "property-access",
                                                                            "left": {
                                                                                "type": "variable",
                                                                                "value": "this",
                                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                                                "line": 82,
                                                                                "char": 39
                                                                            },
                                                                            "right": {
                                                                                "type": "variable",
                                                                                "value": "_lifetime",
                                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                                                "line": 82,
                                                                                "char": 49
                                                                            },
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                                            "line": 82,
                                                                            "char": 49
                                                                        },
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                                        "line": 82,
                                                                        "char": 49
                                                                    }
                                                                ],
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                                "line": 82,
                                                                "char": 50
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                            "line": 82,
                                                            "char": 50
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 82,
                                                    "char": 51
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                "line": 82,
                                                "char": 51
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 84,
                                                    "char": 3
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                "line": 84,
                                                "char": 3
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 84,
                                        "char": 4
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 84,
                                    "char": 4
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 86,
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                        "line": 87,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 87,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "open",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                        "line": 87,
                                                        "char": 17
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 87,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 87,
                                            "char": 18
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 87,
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                        "line": 88,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 88,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "close",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                        "line": 88,
                                                        "char": 18
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 88,
                                                    "char": 18
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 88,
                                            "char": 19
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 88,
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                        "line": 89,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 89,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "read",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                        "line": 89,
                                                        "char": 17
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 89,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 89,
                                            "char": 18
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                        "line": 90,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 90,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "write",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                        "line": 90,
                                                        "char": 18
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 90,
                                                    "char": 18
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 90,
                                            "char": 19
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                        "line": 91,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 91,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "destroy",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                        "line": 91,
                                                        "char": 20
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 91,
                                                    "char": 20
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 91,
                                            "char": 21
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 91,
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                        "line": 92,
                                                        "char": 9
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 92,
                                                    "char": 9
                                                },
                                                {
                                                    "value": {
                                                        "type": "string",
                                                        "value": "gc",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                        "line": 92,
                                                        "char": 15
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 92,
                                                    "char": 15
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 93,
                                            "char": 3
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 93,
                                        "char": 3
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 93,
                                "char": 4
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 95,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 95,
                                            "char": 30
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 95,
                                        "char": 30
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 95,
                                "char": 31
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 96,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Session\\Adapter\\Memcache constructor\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                    "line": 61,
                    "last-line": 98,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 100,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 101,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 99,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                        "line": 99,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                    "line": 98,
                    "last-line": 103,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 105,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 106,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 104,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                        "line": 104,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                    "line": 103,
                    "last-line": 110,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 111,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 113,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_memcache",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 113,
                                            "char": 35
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 113,
                                        "char": 35
                                    },
                                    "name": "get",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "sessionId",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                "line": 113,
                                                "char": 49
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 113,
                                            "char": 49
                                        },
                                        {
                                            "parameter": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 113,
                                                    "char": 56
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lifetime",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 113,
                                                    "char": 66
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                "line": 113,
                                                "char": 66
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 113,
                                            "char": 66
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 113,
                                    "char": 67
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 113,
                                "char": 67
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
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
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 112,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                        "line": 112,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                    "line": 111,
                    "last-line": 118,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 119,
                            "char": 40
                        },
                        {
                            "type": "parameter",
                            "name": "data",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 119,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 121,
                                        "char": 15
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "_memcache",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 121,
                                        "char": 26
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 121,
                                    "char": 26
                                },
                                "name": "save",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "sessionId",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 121,
                                            "char": 41
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 121,
                                        "char": 41
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "data",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 121,
                                            "char": 47
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 121,
                                        "char": 47
                                    },
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                "line": 121,
                                                "char": 54
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                "line": 121,
                                                "char": 64
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 121,
                                            "char": 64
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 121,
                                        "char": 64
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 121,
                                "char": 65
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
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
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 120,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                        "line": 120,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                    "line": 119,
                    "last-line": 126,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 127,
                                "char": 49
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 127,
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 129,
                                    "char": 9
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 131,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "sessionId",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 131,
                                    "char": 18
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 131,
                                    "char": 25
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 131,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 132,
                                                    "char": 18
                                                },
                                                "name": "getId",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                "line": 132,
                                                "char": 26
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 132,
                                            "char": 26
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 133,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                "line": 134,
                                                "char": 22
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 134,
                                            "char": 22
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 135,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 137,
                            "char": 6
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 137,
                                    "char": 8
                                },
                                "name": "removeSessionData",
                                "call-type": 1,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 137,
                                "char": 28
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 139,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 139,
                                            "char": 17
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 139,
                                        "char": 17
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 139,
                                    "char": 17
                                },
                                "right": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 139,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_memcache",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 139,
                                            "char": 35
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 139,
                                        "char": 35
                                    },
                                    "name": "exists",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "id",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                "line": 139,
                                                "char": 45
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 139,
                                            "char": 45
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 139,
                                    "char": 47
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 139,
                                "char": 47
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 140,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_memcache",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 140,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                "line": 140,
                                                "char": 34
                                            },
                                            "name": "delete",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "id",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                        "line": 140,
                                                        "char": 44
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                                    "line": 140,
                                                    "char": 44
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                            "line": 140,
                                            "char": 45
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                        "line": 140,
                                        "char": 45
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                    "line": 141,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 143,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 143,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 144,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 128,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                        "line": 128,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                    "line": 127,
                    "last-line": 148,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 151,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                            "line": 152,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                                "line": 150,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                        "line": 150,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
                    "line": 149,
                    "last-line": 153,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
            "line": 52,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter\/memcache.zep",
        "line": 52,
        "char": 5
    }
]