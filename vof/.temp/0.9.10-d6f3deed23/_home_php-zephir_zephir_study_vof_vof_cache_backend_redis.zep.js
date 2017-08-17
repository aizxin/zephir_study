[
    {
        "type": "namespace",
        "name": "Vof\\Cache\\Backend",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Backend",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                "line": 22,
                "char": 22
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Exception",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                "line": 23,
                "char": 24
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
        "line": 24,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                "line": 24,
                "char": 32
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
        "line": 62,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Cache\\Backend\\Redis\n *\n * Allows to cache output fragments, PHP data or raw data to a redis backend\n *\n * This adapter uses the special redis key \"_PHCR\" to store all the keys internally used by the adapter\n *\n *<code>\n * use Vof\\Cache\\Backend\\Redis;\n * use Vof\\Cache\\Frontend\\Data as FrontData;\n *\n * \/\/ Cache data for 2 days\n * $frontCache = new FrontData(\n *     [\n *         \"lifetime\" => 172800,\n *     ]\n * );\n *\n * \/\/ Create the Cache setting redis connection options\n * $cache = new Redis(\n *     $frontCache,\n *     [\n *         \"host\"       => \"localhost\",\n *         \"port\"       => 6379,\n *         \"auth\"       => \"foobared\",\n *         \"persistent\" => false,\n *         \"index\"      => 0,\n *     ]\n * );\n *\n * \/\/ Cache arbitrary data\n * $cache->save(\"my-data\", [1, 2, 3, 4, 5]);\n *\n * \/\/ Get data\n * $data = $cache->get(\"my-data\");\n *<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
        "line": 63,
        "char": 5
    },
    {
        "type": "class",
        "name": "Redis",
        "abstract": 0,
        "final": 0,
        "extends": "Backend",
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
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                        "line": 65,
                        "char": 25
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                    "line": 72,
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
                            "name": "frontend",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "FrontendInterface",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 73,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 73,
                            "char": 58
                        },
                        {
                            "type": "parameter",
                            "name": "options",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 73,
                                "char": 74
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 73,
                            "char": 74
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 75,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 75,
                                    "char": 22
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 75,
                                    "char": 32
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 75,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "options",
                                            "expr": {
                                                "type": "empty-array",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 76,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 76,
                                            "char": 20
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 77,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 79,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 79,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "host",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 79,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 79,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 79,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 79,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 80,
                                                    "char": 22
                                                }
                                            ],
                                            "expr": {
                                                "type": "string",
                                                "value": "127.0.0.1",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 80,
                                                "char": 37
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 80,
                                            "char": 37
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 81,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 83,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 83,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "port",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 83,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 83,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 83,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 83,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 84,
                                                    "char": 22
                                                }
                                            ],
                                            "expr": {
                                                "type": "int",
                                                "value": "6379",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 84,
                                                "char": 30
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 84,
                                            "char": 30
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 85,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 87,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 87,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "index",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 87,
                                            "char": 28
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 87,
                                        "char": 30
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 87,
                                    "char": 30
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 87,
                                "char": 30
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
                                                    "value": "index",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 88,
                                                    "char": 23
                                                }
                                            ],
                                            "expr": {
                                                "type": "int",
                                                "value": "0",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 88,
                                                "char": 28
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 88,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 89,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 91,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 91,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "persistent",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 91,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 91,
                                        "char": 35
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 91,
                                    "char": 35
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 91,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 92,
                                                    "char": 28
                                                }
                                            ],
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 92,
                                                "char": 37
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 92,
                                            "char": 37
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 93,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 95,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 95,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "statsKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 95,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 95,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 95,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 95,
                                "char": 33
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
                                                    "value": "statsKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 97,
                                                    "char": 26
                                                }
                                            ],
                                            "expr": {
                                                "type": "string",
                                                "value": "",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 97,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 97,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 98,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 100,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 100,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "auth",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 100,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 100,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 100,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 100,
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
                                                    "value": "auth",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 101,
                                                    "char": 22
                                                }
                                            ],
                                            "expr": {
                                                "type": "string",
                                                "value": "",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 101,
                                                "char": 28
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 101,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 102,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 104,
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
                                            "value": "frontend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 104,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 104,
                                        "char": 31
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 104,
                                            "char": 40
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 104,
                                        "char": 40
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 104,
                                "char": 41
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 105,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Cache\\Backend\\Redis constructor\n\t *\n\t * @param\tVof\\Cache\\FrontendInterface frontend\n\t * @param\tarray options\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                    "line": 73,
                    "last-line": 109,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "_connect",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "options",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 112,
                                    "char": 14
                                },
                                {
                                    "variable": "redis",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 112,
                                    "char": 21
                                },
                                {
                                    "variable": "persistent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 112,
                                    "char": 33
                                },
                                {
                                    "variable": "success",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 112,
                                    "char": 42
                                },
                                {
                                    "variable": "host",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 112,
                                    "char": 48
                                },
                                {
                                    "variable": "port",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 112,
                                    "char": 54
                                },
                                {
                                    "variable": "auth",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 112,
                                    "char": 60
                                },
                                {
                                    "variable": "index",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 112,
                                    "char": 67
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 114,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "options",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 114,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 114,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 114,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 114,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 115,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "redis",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\Redis",
                                        "dynamic": 0,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 115,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 115,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 117,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "or",
                                "left": {
                                    "type": "or",
                                    "left": {
                                        "type": "not",
                                        "left": {
                                            "type": "fetch",
                                            "left": {
                                                "type": "variable",
                                                "value": "host",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 117,
                                                "char": 36
                                            },
                                            "right": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 117,
                                                    "char": 26
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "host",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 117,
                                                    "char": 33
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 117,
                                                "char": 36
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 117,
                                            "char": 36
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 117,
                                        "char": 36
                                    },
                                    "right": {
                                        "type": "not",
                                        "left": {
                                            "type": "fetch",
                                            "left": {
                                                "type": "variable",
                                                "value": "port",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 117,
                                                "char": 68
                                            },
                                            "right": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 117,
                                                    "char": 58
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "port",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 117,
                                                    "char": 65
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 117,
                                                "char": 68
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 117,
                                            "char": 68
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 117,
                                        "char": 68
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 117,
                                    "char": 68
                                },
                                "right": {
                                    "type": "not",
                                    "left": {
                                        "type": "fetch",
                                        "left": {
                                            "type": "variable",
                                            "value": "persistent",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 117,
                                            "char": 111
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 117,
                                                "char": 96
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "persistent",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 117,
                                                "char": 109
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 117,
                                            "char": 111
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 117,
                                        "char": 111
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 117,
                                    "char": 111
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 117,
                                "char": 111
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
                                                    "value": "Unexpected inconsistency in options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 118,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 118,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 118,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 119,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 121,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "persistent",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 121,
                                "char": 17
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "success",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "redis",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 122,
                                                    "char": 24
                                                },
                                                "name": "pconnect",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "host",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 122,
                                                            "char": 38
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 122,
                                                        "char": 38
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "port",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 122,
                                                            "char": 44
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 122,
                                                        "char": 44
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 122,
                                                "char": 45
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 122,
                                            "char": 45
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 123,
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
                                            "variable": "success",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "redis",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 124,
                                                    "char": 24
                                                },
                                                "name": "connect",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "host",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 124,
                                                            "char": 37
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 124,
                                                        "char": 37
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "port",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 124,
                                                            "char": 43
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 124,
                                                        "char": 43
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 124,
                                                "char": 44
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 124,
                                            "char": 44
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 125,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 127,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "success",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 127,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 127,
                                "char": 15
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
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "string",
                                                                "value": "Could not connect to the Redisd server ",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                                "line": 128,
                                                                "char": 65
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "host",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                                "line": 128,
                                                                "char": 70
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 128,
                                                            "char": 70
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": ":",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 128,
                                                            "char": 74
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 128,
                                                        "char": 74
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "port",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 128,
                                                        "char": 79
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 128,
                                                    "char": 79
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 128,
                                                "char": 79
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 128,
                                        "char": 80
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 129,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 131,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "auth",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 131,
                                        "char": 35
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 131,
                                            "char": 25
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "auth",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 131,
                                            "char": 32
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 131,
                                        "char": 35
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 131,
                                    "char": 35
                                },
                                "right": {
                                    "type": "not",
                                    "left": {
                                        "type": "empty",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 131,
                                                "char": 51
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "auth",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 131,
                                                "char": 58
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 131,
                                            "char": 60
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 131,
                                        "char": 60
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 131,
                                    "char": 60
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 131,
                                "char": 60
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "success",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "redis",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 132,
                                                    "char": 24
                                                },
                                                "name": "auth",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "auth",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 132,
                                                            "char": 34
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 132,
                                                        "char": 34
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 132,
                                                "char": 35
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 132,
                                            "char": 35
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 134,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "variable",
                                            "value": "success",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 134,
                                            "char": 16
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 134,
                                        "char": 16
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
                                                            "value": "Failed to authenticate with the Redisd server",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 135,
                                                            "char": 72
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 135,
                                                        "char": 72
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 135,
                                                "char": 73
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 136,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 137,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 139,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "index",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 139,
                                        "char": 37
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 139,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "index",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 139,
                                            "char": 34
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 139,
                                        "char": 37
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 139,
                                    "char": 37
                                },
                                "right": {
                                    "type": "greater",
                                    "left": {
                                        "type": "variable",
                                        "value": "index",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 139,
                                        "char": 45
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 139,
                                        "char": 49
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 139,
                                    "char": 49
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 139,
                                "char": 49
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "success",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "redis",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 140,
                                                    "char": 24
                                                },
                                                "name": "select",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "index",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 140,
                                                            "char": 37
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 140,
                                                        "char": 37
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 140,
                                                "char": 38
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 140,
                                            "char": 38
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 142,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "variable",
                                            "value": "success",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 142,
                                            "char": 16
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 142,
                                        "char": 16
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
                                                            "value": "Redis server selected database failed",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 143,
                                                            "char": 64
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 143,
                                                        "char": 64
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 143,
                                                "char": 65
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 144,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 145,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 147,
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
                                        "type": "variable",
                                        "value": "redis",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 147,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 147,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 148,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Create internal connection to redis\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                    "line": 110,
                    "last-line": 152,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "get",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "keyName",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 153,
                            "char": 36
                        },
                        {
                            "type": "parameter",
                            "name": "lifetime",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 153,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 153,
                            "char": 57
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "redis",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 155,
                                    "char": 12
                                },
                                {
                                    "variable": "frontend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 155,
                                    "char": 22
                                },
                                {
                                    "variable": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 155,
                                    "char": 30
                                },
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 155,
                                    "char": 39
                                },
                                {
                                    "variable": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 155,
                                    "char": 54
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 157,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "redis",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 157,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 157,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 157,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 157,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 158,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "redis",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 158,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 158,
                                    "char": 20
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 158,
                                    "char": 31
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 158,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 159,
                                            "char": 9
                                        },
                                        "name": "_connect",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 159,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 160,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "redis",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 160,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_redis",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 160,
                                                    "char": 28
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 160,
                                                "char": 28
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 160,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 161,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 163,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "frontend",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 163,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_frontend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 163,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 163,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 163,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 164,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "prefix",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 164,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_prefix",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 164,
                                            "char": 29
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 164,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 164,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 165,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "lastKey",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "string",
                                                "value": "_PHCR",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 165,
                                                "char": 25
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "prefix",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 165,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 165,
                                            "char": 34
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "keyName",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 165,
                                            "char": 43
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 165,
                                        "char": 43
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 165,
                                    "char": 43
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 166,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_lastKey",
                                    "expr": {
                                        "type": "variable",
                                        "value": "lastKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 166,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 166,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 167,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "cachedContent",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 167,
                                            "char": 29
                                        },
                                        "name": "get",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 167,
                                                    "char": 41
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 167,
                                                "char": 41
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 167,
                                        "char": 42
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 167,
                                    "char": 42
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 169,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 169,
                                    "char": 22
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "false",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 169,
                                    "char": 30
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 169,
                                "char": 30
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 170,
                                        "char": 15
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 171,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 173,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "is_numeric",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "cachedContent",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 173,
                                            "char": 30
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 173,
                                        "char": 30
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 173,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "cachedContent",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 174,
                                        "char": 24
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 175,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 177,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "frontend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 177,
                                    "char": 19
                                },
                                "name": "afterRetrieve",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "cachedContent",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 177,
                                            "char": 47
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 177,
                                        "char": 47
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 177,
                                "char": 48
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 178,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns a cached content\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "variable",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 153,
                                "char": 66
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 154,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                        "line": 154,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                    "line": 153,
                    "last-line": 194,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "save",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "keyName",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 195,
                                "char": 37
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 195,
                            "char": 37
                        },
                        {
                            "type": "parameter",
                            "name": "content",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 195,
                                "char": 53
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 195,
                            "char": 53
                        },
                        {
                            "type": "parameter",
                            "name": "lifetime",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 195,
                                "char": 70
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 195,
                            "char": 70
                        },
                        {
                            "type": "parameter",
                            "name": "stopBuffer",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 195,
                                "char": 97
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 195,
                            "char": 97
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "prefixedKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 197,
                                    "char": 18
                                },
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 197,
                                    "char": 27
                                },
                                {
                                    "variable": "frontend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 197,
                                    "char": 37
                                },
                                {
                                    "variable": "redis",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 197,
                                    "char": 44
                                },
                                {
                                    "variable": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 197,
                                    "char": 59
                                },
                                {
                                    "variable": "preparedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 197,
                                    "char": 76
                                },
                                {
                                    "variable": "tmp",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 198,
                                    "char": 7
                                },
                                {
                                    "variable": "tt1",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 198,
                                    "char": 12
                                },
                                {
                                    "variable": "success",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 198,
                                    "char": 21
                                },
                                {
                                    "variable": "options",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 198,
                                    "char": 30
                                },
                                {
                                    "variable": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 198,
                                    "char": 42
                                },
                                {
                                    "variable": "isBuffering",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 198,
                                    "char": 55
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 200,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 200,
                                    "char": 16
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 200,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 200,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "lastKey",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 201,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 201,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 201,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 201,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 202,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "prefixedKey",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "substr",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "lastKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 202,
                                                            "char": 36
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 202,
                                                        "char": 36
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "5",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 202,
                                                            "char": 39
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 202,
                                                        "char": 39
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 202,
                                                "char": 40
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 202,
                                            "char": 40
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 203,
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
                                            "variable": "prefixedKey",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 204,
                                                        "char": 27
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "_prefix",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 204,
                                                        "char": 36
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 204,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 204,
                                                    "char": 45
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 204,
                                                "char": 45
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 204,
                                            "char": 45
                                        },
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "lastKey",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "string",
                                                    "value": "_PHCR",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 205,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "prefixedKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 205,
                                                    "char": 36
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 205,
                                                "char": 36
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 205,
                                            "char": 36
                                        },
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_lastKey",
                                            "expr": {
                                                "type": "variable",
                                                "value": "lastKey",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 206,
                                                "char": 29
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 206,
                                            "char": 29
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 207,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 209,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 209,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 209,
                                "char": 15
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
                                                    "value": "The cache must be started first",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 210,
                                                    "char": 57
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 210,
                                                "char": 57
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 210,
                                        "char": 58
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 211,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 213,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "frontend",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 213,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_frontend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 213,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 213,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 213,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 218,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "redis",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 218,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 218,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 218,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 218,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 219,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "redis",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 219,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 219,
                                    "char": 20
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 219,
                                    "char": 31
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 219,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 220,
                                            "char": 9
                                        },
                                        "name": "_connect",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 220,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 221,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "redis",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 221,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_redis",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 221,
                                                    "char": 28
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 221,
                                                "char": 28
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 221,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 222,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 224,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "content",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 224,
                                    "char": 16
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 224,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 224,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "cachedContent",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "frontend",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 225,
                                                    "char": 33
                                                },
                                                "name": "getContent",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 225,
                                                "char": 46
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 225,
                                            "char": 46
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 226,
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
                                            "variable": "cachedContent",
                                            "expr": {
                                                "type": "variable",
                                                "value": "content",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 227,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 227,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 228,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 233,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_numeric",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "cachedContent",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 233,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 233,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 233,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 233,
                                "char": 33
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "preparedContent",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "frontend",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 234,
                                                    "char": 35
                                                },
                                                "name": "beforeStore",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "cachedContent",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 234,
                                                            "char": 61
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 234,
                                                        "char": 61
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 234,
                                                "char": 62
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 234,
                                            "char": 62
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 235,
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
                                            "variable": "preparedContent",
                                            "expr": {
                                                "type": "variable",
                                                "value": "cachedContent",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 236,
                                                "char": 39
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 236,
                                            "char": 39
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 237,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 239,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 239,
                                    "char": 17
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 239,
                                    "char": 24
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 239,
                                "char": 24
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "tmp",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 240,
                                                    "char": 19
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastLifetime",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 240,
                                                    "char": 33
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 240,
                                                "char": 33
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 240,
                                            "char": 33
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 242,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "variable",
                                            "value": "tmp",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 242,
                                            "char": 12
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 242,
                                        "char": 12
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "tt1",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "frontend",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 243,
                                                            "char": 24
                                                        },
                                                        "name": "getLifetime",
                                                        "call-type": 1,
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 243,
                                                        "char": 38
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 243,
                                                    "char": 38
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 244,
                                            "char": 4
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "tt1",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "tmp",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 245,
                                                        "char": 18
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 245,
                                                    "char": 18
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 246,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 247,
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
                                            "variable": "tt1",
                                            "expr": {
                                                "type": "variable",
                                                "value": "lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 248,
                                                "char": 22
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 248,
                                            "char": 22
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 249,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 251,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "success",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 251,
                                            "char": 23
                                        },
                                        "name": "set",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 251,
                                                    "char": 35
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 251,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "preparedContent",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 251,
                                                    "char": 52
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 251,
                                                "char": 52
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 251,
                                        "char": 53
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 251,
                                    "char": 53
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 253,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "success",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 253,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 253,
                                "char": 15
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
                                                    "value": "Failed storing the data in redis",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 254,
                                                    "char": 58
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 254,
                                                "char": 58
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 254,
                                        "char": 59
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 255,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 258,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "greater-equal",
                                "left": {
                                    "type": "variable",
                                    "value": "tt1",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 258,
                                    "char": 10
                                },
                                "right": {
                                    "type": "int",
                                    "value": "1",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 258,
                                    "char": 14
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 258,
                                "char": 14
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 259,
                                            "char": 10
                                        },
                                        "name": "settimeout",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 259,
                                                    "char": 29
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 259,
                                                "char": 29
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "tt1",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 259,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 259,
                                                "char": 34
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 259,
                                        "char": 35
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 260,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 262,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "options",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 262,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 262,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 262,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 262,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 264,
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
                                        "value": "specialKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 264,
                                        "char": 45
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 264,
                                            "char": 32
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "statsKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 264,
                                            "char": 43
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 264,
                                        "char": 45
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 264,
                                    "char": 45
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 264,
                                "char": 45
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
                                                    "value": "Unexpected inconsistency in options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 265,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 265,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 265,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 266,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 268,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "variable",
                                    "value": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 268,
                                    "char": 18
                                },
                                "right": {
                                    "type": "string",
                                    "value": "",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 268,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 268,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 269,
                                            "char": 10
                                        },
                                        "name": "sAdd",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "specialKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 269,
                                                    "char": 26
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 269,
                                                "char": 26
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "prefixedKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 269,
                                                    "char": 39
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 269,
                                                "char": 39
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 269,
                                        "char": 40
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 270,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 272,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "isBuffering",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "frontend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 272,
                                            "char": 30
                                        },
                                        "name": "isBuffering",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 272,
                                        "char": 44
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 272,
                                    "char": 44
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 274,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "stopBuffer",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 274,
                                    "char": 19
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 274,
                                    "char": 26
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 274,
                                "char": 26
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "frontend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 275,
                                            "char": 13
                                        },
                                        "name": "stop",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 275,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 276,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 278,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "isBuffering",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 278,
                                    "char": 20
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 278,
                                    "char": 27
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 278,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "echo",
                                    "expressions": [
                                        {
                                            "type": "variable",
                                            "value": "cachedContent",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 279,
                                            "char": 22
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 280,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 282,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_started",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 282,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 282,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 284,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "success",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 284,
                                "char": 17
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 285,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Stores cached content into the file backend and stops the frontend\n\t *\n\t * <code>\n\t * $cache->save(\"my-key\", $data);\n\t *\n\t * \/\/ Save data termlessly\n\t * $cache->save(\"my-key\", $data, -1);\n\t * <\/code>\n\t *\n\t * @param int|string keyName\n\t * @param string content\n\t * @param int lifetime\n\t * @param boolean stopBuffer\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 196,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                        "line": 196,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                    "line": 195,
                    "last-line": 291,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "delete",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "keyName",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 292,
                            "char": 32
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "redis",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 294,
                                    "char": 12
                                },
                                {
                                    "variable": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 294,
                                    "char": 20
                                },
                                {
                                    "variable": "prefixedKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 294,
                                    "char": 33
                                },
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 294,
                                    "char": 42
                                },
                                {
                                    "variable": "options",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 294,
                                    "char": 51
                                },
                                {
                                    "variable": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 294,
                                    "char": 63
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 296,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "redis",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 296,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 296,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 296,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 296,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 297,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "redis",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 297,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 297,
                                    "char": 20
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 297,
                                    "char": 31
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 297,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 298,
                                            "char": 9
                                        },
                                        "name": "_connect",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 298,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 299,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "redis",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 299,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_redis",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 299,
                                                    "char": 28
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 299,
                                                "char": 28
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 299,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 300,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 302,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "prefix",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 302,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_prefix",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 302,
                                            "char": 29
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 302,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 302,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 303,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "prefixedKey",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "variable",
                                            "value": "prefix",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 303,
                                            "char": 28
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "keyName",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 303,
                                            "char": 37
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 303,
                                        "char": 37
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 303,
                                    "char": 37
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 304,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "lastKey",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "string",
                                            "value": "_PHCR",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 304,
                                            "char": 25
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "prefixedKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 304,
                                            "char": 38
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 304,
                                        "char": 38
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 304,
                                    "char": 38
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 305,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "options",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 305,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 305,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 305,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 305,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 307,
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
                                        "value": "specialKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 307,
                                        "char": 45
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 307,
                                            "char": 32
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "statsKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 307,
                                            "char": 43
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 307,
                                        "char": 45
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 307,
                                    "char": 45
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 307,
                                "char": 45
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
                                                    "value": "Unexpected inconsistency in options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 308,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 308,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 308,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 309,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 311,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "variable",
                                    "value": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 311,
                                    "char": 18
                                },
                                "right": {
                                    "type": "string",
                                    "value": "",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 311,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 311,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 312,
                                            "char": 10
                                        },
                                        "name": "sRem",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "specialKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 312,
                                                    "char": 26
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 312,
                                                "char": 26
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "prefixedKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 312,
                                                    "char": 39
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 312,
                                                "char": 39
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 312,
                                        "char": 40
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 313,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 318,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "cast",
                                "left": "bool",
                                "right": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "redis",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 318,
                                        "char": 23
                                    },
                                    "name": "delete",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "lastKey",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 318,
                                                "char": 38
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 318,
                                            "char": 38
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 318,
                                    "char": 39
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 318,
                                "char": 39
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 319,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Deletes a value from the cache by its key\n\t *\n\t * @param int|string keyName\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 293,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                        "line": 293,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                    "line": 292,
                    "last-line": 330,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "queryKeys",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "prefix",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 331,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 331,
                            "char": 48
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "redis",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 333,
                                    "char": 12
                                },
                                {
                                    "variable": "options",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 333,
                                    "char": 21
                                },
                                {
                                    "variable": "keys",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 333,
                                    "char": 27
                                },
                                {
                                    "variable": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 333,
                                    "char": 39
                                },
                                {
                                    "variable": "key",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 333,
                                    "char": 44
                                },
                                {
                                    "variable": "idx",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 333,
                                    "char": 49
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 335,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "redis",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 335,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 335,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 335,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 335,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 337,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "redis",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 337,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 337,
                                    "char": 20
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 337,
                                    "char": 31
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 337,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 338,
                                            "char": 9
                                        },
                                        "name": "_connect",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 338,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 339,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "redis",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 339,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_redis",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 339,
                                                    "char": 28
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 339,
                                                "char": 28
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 339,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 340,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 342,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "options",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 342,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 342,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 342,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 342,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 344,
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
                                        "value": "specialKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 344,
                                        "char": 45
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 344,
                                            "char": 32
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "statsKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 344,
                                            "char": 43
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 344,
                                        "char": 45
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 344,
                                    "char": 45
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 344,
                                "char": 45
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
                                                    "value": "Unexpected inconsistency in options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 345,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 345,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 345,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 346,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 348,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 348,
                                    "char": 18
                                },
                                "right": {
                                    "type": "string",
                                    "value": "",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 348,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 348,
                                "char": 23
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
                                                    "value": "Cached keys need to be enabled to use this function (options['statsKey'] == '_PHCR')!",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 349,
                                                    "char": 111
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 349,
                                                "char": 111
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 349,
                                        "char": 112
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 350,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 355,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "keys",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 355,
                                            "char": 20
                                        },
                                        "name": "sMembers",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "specialKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 355,
                                                    "char": 40
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 355,
                                                "char": 40
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 355,
                                        "char": 41
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 355,
                                    "char": 41
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 356,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "keys",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 356,
                                        "char": 19
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 356,
                                    "char": 19
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 356,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 356,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 357,
                                        "char": 13
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 358,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 360,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "keys",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 360,
                                "char": 24
                            },
                            "key": "idx",
                            "value": "key",
                            "reverse": 0,
                            "statements": [
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
                                                    "value": "prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 361,
                                                    "char": 22
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 361,
                                                "char": 22
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 361,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "not",
                                            "left": {
                                                "type": "fcall",
                                                "name": "starts_with",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 361,
                                                            "char": 40
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 361,
                                                        "char": 40
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "prefix",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 361,
                                                            "char": 48
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 361,
                                                        "char": 48
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 361,
                                                "char": 50
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 361,
                                            "char": 50
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 361,
                                        "char": 50
                                    },
                                    "statements": [
                                        {
                                            "type": "unset",
                                            "expr": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "keys",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 362,
                                                    "char": 15
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "idx",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 362,
                                                    "char": 19
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 362,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 363,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 364,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 366,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "keys",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 366,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 367,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Query the existing cached keys.\n\t *\n\t * <code>\n\t * $cache->save(\"users-ids\", [1, 2, 3]);\n\t * $cache->save(\"projects-ids\", [4, 5, 6]);\n\t *\n\t * var_dump($cache->queryKeys(\"users\")); \/\/ [\"users-ids\"]\n\t * <\/code>\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 332,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                        "line": 332,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                    "line": 331,
                    "last-line": 374,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "exists",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "keyName",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 375,
                                "char": 39
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 375,
                            "char": 39
                        },
                        {
                            "type": "parameter",
                            "name": "lifetime",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 375,
                                "char": 56
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 375,
                            "char": 56
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 377,
                                    "char": 14
                                },
                                {
                                    "variable": "redis",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 377,
                                    "char": 21
                                },
                                {
                                    "variable": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 377,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 379,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 379,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 379,
                                "char": 15
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "lastKey",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 380,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 380,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 380,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 380,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 381,
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
                                            "variable": "prefix",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 382,
                                                    "char": 22
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 382,
                                                    "char": 30
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 382,
                                                "char": 30
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 382,
                                            "char": 30
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 383,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "lastKey",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "_PHCR",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 383,
                                                        "char": 26
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "prefix",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 383,
                                                        "char": 35
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 383,
                                                    "char": 35
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 383,
                                                    "char": 44
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 383,
                                                "char": 44
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 383,
                                            "char": 44
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 384,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 386,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "lastKey",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 386,
                                "char": 14
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "redis",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 387,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_redis",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 387,
                                                    "char": 28
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 387,
                                                "char": 28
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 387,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 388,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not-equals",
                                        "left": {
                                            "type": "typeof",
                                            "left": {
                                                "type": "variable",
                                                "value": "redis",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 388,
                                                "char": 21
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 388,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "object",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 388,
                                            "char": 32
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 388,
                                        "char": 32
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 389,
                                                    "char": 10
                                                },
                                                "name": "_connect",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 389,
                                                "char": 21
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 390,
                                            "char": 7
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "redis",
                                                    "expr": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 390,
                                                            "char": 22
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "_redis",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 390,
                                                            "char": 29
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 390,
                                                        "char": 29
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 390,
                                                    "char": 29
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 391,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 393,
                                    "char": 9
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 393,
                                            "char": 17
                                        },
                                        "name": "exists",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 393,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 393,
                                                "char": 32
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 393,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 394,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 396,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 396,
                                "char": 15
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 397,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Checks if cache exists and it isn't expired\n\t *\n\t * @param string keyName\n\t * @param int lifetime\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 376,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                        "line": 376,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                    "line": 375,
                    "last-line": 403,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "increment",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "keyName",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 404,
                                "char": 42
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 404,
                            "char": 42
                        },
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "int",
                                "value": "1",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 404,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 404,
                            "char": 57
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "redis",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 406,
                                    "char": 12
                                },
                                {
                                    "variable": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 406,
                                    "char": 20
                                },
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 406,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 408,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "redis",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 408,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 408,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 408,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 408,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 410,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "redis",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 410,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 410,
                                    "char": 20
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 410,
                                    "char": 31
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 410,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 411,
                                            "char": 9
                                        },
                                        "name": "_connect",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 411,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 412,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "redis",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 412,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_redis",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 412,
                                                    "char": 28
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 412,
                                                "char": 28
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 412,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 413,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 415,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 415,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 415,
                                "char": 15
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "lastKey",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 416,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 416,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 416,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 416,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 417,
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
                                            "variable": "prefix",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 418,
                                                    "char": 22
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 418,
                                                    "char": 30
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 418,
                                                "char": 30
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 418,
                                            "char": 30
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 419,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "lastKey",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "_PHCR",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 419,
                                                        "char": 26
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "prefix",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 419,
                                                        "char": 35
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 419,
                                                    "char": 35
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 419,
                                                    "char": 44
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 419,
                                                "char": 44
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 419,
                                            "char": 44
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 420,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_lastKey",
                                            "expr": {
                                                "type": "variable",
                                                "value": "lastKey",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 420,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 420,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 421,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 423,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "redis",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 423,
                                    "char": 16
                                },
                                "name": "incrBy",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "lastKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 423,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 423,
                                        "char": 31
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 423,
                                            "char": 38
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 423,
                                        "char": 38
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 423,
                                "char": 39
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 424,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Increment of given $keyName by $value\n\t *\n\t * @param string keyName\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 405,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                        "line": 405,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                    "line": 404,
                    "last-line": 430,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "decrement",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "keyName",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 431,
                                "char": 42
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 431,
                            "char": 42
                        },
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "int",
                                "value": "1",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 431,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 431,
                            "char": 57
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "redis",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 433,
                                    "char": 12
                                },
                                {
                                    "variable": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 433,
                                    "char": 20
                                },
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 433,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 435,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "redis",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 435,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 435,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 435,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 435,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 437,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "redis",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 437,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 437,
                                    "char": 20
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 437,
                                    "char": 31
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 437,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 438,
                                            "char": 9
                                        },
                                        "name": "_connect",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 438,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 439,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "redis",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 439,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_redis",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 439,
                                                    "char": 28
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 439,
                                                "char": 28
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 439,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 440,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 442,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 442,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 442,
                                "char": 15
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "lastKey",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 443,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 443,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 443,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 443,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 444,
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
                                            "variable": "prefix",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 445,
                                                    "char": 22
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 445,
                                                    "char": 30
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 445,
                                                "char": 30
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 445,
                                            "char": 30
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 446,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "lastKey",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "_PHCR",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 446,
                                                        "char": 26
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "prefix",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 446,
                                                        "char": 35
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 446,
                                                    "char": 35
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 446,
                                                    "char": 44
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 446,
                                                "char": 44
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 446,
                                            "char": 44
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 447,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_lastKey",
                                            "expr": {
                                                "type": "variable",
                                                "value": "lastKey",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 447,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 447,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 448,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 450,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "redis",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 450,
                                    "char": 16
                                },
                                "name": "decrBy",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "lastKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 450,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 450,
                                        "char": 31
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 450,
                                            "char": 38
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 450,
                                        "char": 38
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 450,
                                "char": 39
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 451,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Decrement of $keyName by given $value\n\t *\n\t * @param string keyName\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 432,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                        "line": 432,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                    "line": 431,
                    "last-line": 455,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "flush",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "options",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 458,
                                    "char": 14
                                },
                                {
                                    "variable": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 458,
                                    "char": 26
                                },
                                {
                                    "variable": "redis",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 458,
                                    "char": 33
                                },
                                {
                                    "variable": "keys",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 458,
                                    "char": 39
                                },
                                {
                                    "variable": "key",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 458,
                                    "char": 44
                                },
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 458,
                                    "char": 53
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 460,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "options",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 460,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 460,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 460,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 460,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 462,
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
                                        "value": "specialKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 462,
                                        "char": 45
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 462,
                                            "char": 32
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "statsKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 462,
                                            "char": 43
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 462,
                                        "char": 45
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 462,
                                    "char": 45
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 462,
                                "char": 45
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
                                                    "value": "Unexpected inconsistency in options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 463,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 463,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 463,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 464,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 466,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "redis",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 466,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 466,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 466,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 466,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 468,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "redis",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 468,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 468,
                                    "char": 20
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 468,
                                    "char": 31
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 468,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 469,
                                            "char": 9
                                        },
                                        "name": "_connect",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 469,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 470,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "redis",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 470,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_redis",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 470,
                                                    "char": 28
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 470,
                                                "char": 28
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 470,
                                            "char": 28
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 471,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 473,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 473,
                                    "char": 18
                                },
                                "right": {
                                    "type": "string",
                                    "value": "",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 473,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 473,
                                "char": 23
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
                                                    "value": "Cached keys need to be enabled to use this function (options['statsKey'] == '_PHCR')!",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 474,
                                                    "char": 111
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 474,
                                                "char": 111
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 474,
                                        "char": 112
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 475,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 477,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "keys",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "redis",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 477,
                                            "char": 20
                                        },
                                        "name": "sMembers",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "specialKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 477,
                                                    "char": 40
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 477,
                                                "char": 40
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 477,
                                        "char": 41
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 477,
                                    "char": 41
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 478,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "keys",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 478,
                                        "char": 19
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 478,
                                    "char": 19
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 478,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 478,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "for",
                                    "expr": {
                                        "type": "variable",
                                        "value": "keys",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                        "line": 479,
                                        "char": 20
                                    },
                                    "value": "key",
                                    "reverse": 0,
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "lastKey",
                                                    "expr": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "string",
                                                            "value": "_PHCR",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 480,
                                                            "char": 27
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 480,
                                                            "char": 32
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 480,
                                                        "char": 32
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 480,
                                                    "char": 32
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 481,
                                            "char": 9
                                        },
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "redis",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 481,
                                                    "char": 11
                                                },
                                                "name": "sRem",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "specialKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 481,
                                                            "char": 27
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 481,
                                                        "char": 27
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 481,
                                                            "char": 32
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 481,
                                                        "char": 32
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 481,
                                                "char": 33
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 482,
                                            "char": 9
                                        },
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "redis",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                    "line": 482,
                                                    "char": 11
                                                },
                                                "name": "delete",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "lastKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                            "line": 482,
                                                            "char": 26
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                        "line": 482,
                                                        "char": 26
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                                "line": 482,
                                                "char": 27
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                            "line": 483,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                    "line": 484,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 486,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 486,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                            "line": 487,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Immediately invalidates all existing items.\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                                "line": 457,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                        "line": 457,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
                    "line": 456,
                    "last-line": 488,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
            "line": 63,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/redis.zep",
        "line": 63,
        "char": 5
    }
]