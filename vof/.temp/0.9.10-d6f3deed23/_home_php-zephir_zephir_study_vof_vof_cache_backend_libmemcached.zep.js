[
    {
        "type": "namespace",
        "name": "Vof\\Cache\\Backend",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Backend",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                "line": 22,
                "char": 22
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                "line": 23,
                "char": 32
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
        "line": 24,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Exception",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                "line": 24,
                "char": 24
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
        "line": 67,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Cache\\Backend\\Libmemcached\n *\n * Allows to cache output fragments, PHP data or raw data to a libmemcached backend.\n * Per default persistent memcached connection pools are used.\n *\n *<code>\n * use Vof\\Cache\\Backend\\Libmemcached;\n * use Vof\\Cache\\Frontend\\Data as FrontData;\n *\n * \/\/ Cache data for 2 days\n * $frontCache = new FrontData(\n *     [\n *         \"lifetime\" => 172800,\n *     ]\n * );\n *\n * \/\/ Create the Cache setting memcached connection options\n * $cache = new Libmemcached(\n *     $frontCache,\n *     [\n *         \"servers\" => [\n *             [\n *                 \"host\"   => \"127.0.0.1\",\n *                 \"port\"   => 11211,\n *                 \"weight\" => 1,\n *             ],\n *         ],\n *         \"client\" => [\n *             \\Memcached::OPT_HASH       => \\Memcached::HASH_MD5,\n *             \\Memcached::OPT_PREFIX_KEY => \"prefix.\",\n *         ],\n *     ]\n * );\n *\n * \/\/ Cache arbitrary data\n * $cache->save(\"my-data\", [1, 2, 3, 4, 5]);\n *\n * \/\/ Get data\n * $data = $cache->get(\"my-data\");\n *<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
        "line": 68,
        "char": 5
    },
    {
        "type": "class",
        "name": "Libmemcached",
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
                    "name": "_memcache",
                    "default": {
                        "type": "null",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                        "line": 71,
                        "char": 28
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                    "line": 78,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 79,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 79,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 79,
                                "char": 74
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 79,
                            "char": 74
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "servers",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 81,
                                    "char": 14
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 83,
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
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 83,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 83,
                                    "char": 22
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 83,
                                    "char": 32
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 83,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 84,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 84,
                                            "char": 20
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 85,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 87,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "servers",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 87,
                                            "char": 30
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 87,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 87,
                                    "char": 32
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 87,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "servers",
                                            "expr": {
                                                "type": "array",
                                                "left": [
                                                    {
                                                        "key": {
                                                            "type": "int",
                                                            "value": "0",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 88,
                                                            "char": 20
                                                        },
                                                        "value": {
                                                            "type": "array",
                                                            "left": [
                                                                {
                                                                    "key": {
                                                                        "type": "string",
                                                                        "value": "host",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                                        "line": 88,
                                                                        "char": 29
                                                                    },
                                                                    "value": {
                                                                        "type": "string",
                                                                        "value": "127.0.0.1",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                                        "line": 88,
                                                                        "char": 42
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                                    "line": 88,
                                                                    "char": 42
                                                                },
                                                                {
                                                                    "key": {
                                                                        "type": "string",
                                                                        "value": "port",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                                        "line": 88,
                                                                        "char": 50
                                                                    },
                                                                    "value": {
                                                                        "type": "int",
                                                                        "value": "11211",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                                        "line": 88,
                                                                        "char": 57
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                                    "line": 88,
                                                                    "char": 57
                                                                },
                                                                {
                                                                    "key": {
                                                                        "type": "string",
                                                                        "value": "weight",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                                        "line": 88,
                                                                        "char": 67
                                                                    },
                                                                    "value": {
                                                                        "type": "int",
                                                                        "value": "1",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                                        "line": 88,
                                                                        "char": 70
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                                    "line": 88,
                                                                    "char": 70
                                                                }
                                                            ],
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 88,
                                                            "char": 71
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 88,
                                                        "char": 71
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 88,
                                                "char": 72
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 88,
                                            "char": 72
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 89,
                                    "char": 6
                                },
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
                                                    "value": "servers",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 89,
                                                    "char": 25
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "servers",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 89,
                                                "char": 36
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 89,
                                            "char": 36
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 90,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 92,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 92,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "statsKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 92,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 92,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 92,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 92,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 94,
                                                    "char": 26
                                                }
                                            ],
                                            "expr": {
                                                "type": "string",
                                                "value": "",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 94,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 94,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 95,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
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
                                            "value": "frontend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 97,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 97,
                                        "char": 31
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 97,
                                            "char": 40
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 97,
                                        "char": 40
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 97,
                                "char": 41
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 98,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Cache\\Backend\\Memcache constructor\n\t *\n\t * @param\tVof\\Cache\\FrontendInterface frontend\n\t * @param\tarray options\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                    "line": 79,
                    "last-line": 102,
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 105,
                                    "char": 14
                                },
                                {
                                    "variable": "memcache",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 105,
                                    "char": 24
                                },
                                {
                                    "variable": "client",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 105,
                                    "char": 32
                                },
                                {
                                    "variable": "servers",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 105,
                                    "char": 41
                                },
                                {
                                    "variable": "persistentId",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 105,
                                    "char": 55
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 107,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 107,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 107,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 107,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 107,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 110,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 110,
                                        "char": 52
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 110,
                                            "char": 34
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "persistent_id",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 110,
                                            "char": 50
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 110,
                                        "char": 52
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 110,
                                    "char": 52
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 110,
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
                                                "value": "phalcon_cache",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 111,
                                                "char": 38
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 111,
                                            "char": 38
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 112,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 115,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "memcache",
                                    "expr": {
                                        "type": "new",
                                        "class": "\\Memcached",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "persistentId",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 115,
                                                    "char": 45
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 115,
                                                "char": 45
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 115,
                                        "char": 46
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 115,
                                    "char": 46
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 118,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "mcall",
                                    "variable": {
                                        "type": "variable",
                                        "value": "memcache",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 118,
                                        "char": 21
                                    },
                                    "name": "getServerList",
                                    "call-type": 1,
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 118,
                                    "char": 38
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 118,
                                "char": 38
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
                                                "value": "servers",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 119,
                                                "char": 42
                                            },
                                            "right": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 119,
                                                    "char": 30
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "servers",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 119,
                                                    "char": 40
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 119,
                                                "char": 42
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 119,
                                            "char": 42
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 119,
                                        "char": 42
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
                                                            "value": "Servers must be an array",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 120,
                                                            "char": 51
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 120,
                                                        "char": 51
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 120,
                                                "char": 52
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 121,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 123,
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
                                                "value": "servers",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 123,
                                                "char": 23
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 123,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "array",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 123,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 123,
                                        "char": 33
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
                                                            "value": "Servers must be an array",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 124,
                                                            "char": 51
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 124,
                                                        "char": 51
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 124,
                                                "char": 52
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 125,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 127,
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
                                                "value": "client",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 127,
                                                "char": 40
                                            },
                                            "right": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 127,
                                                    "char": 29
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "client",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 127,
                                                    "char": 38
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 127,
                                                "char": 40
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 127,
                                            "char": 40
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 127,
                                        "char": 40
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
                                                        "type": "empty-array",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 128,
                                                        "char": 20
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 128,
                                                    "char": 20
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 129,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 131,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not-identical",
                                        "left": {
                                            "type": "typeof",
                                            "left": {
                                                "type": "variable",
                                                "value": "client",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 131,
                                                "char": 23
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 131,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "array",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 131,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 131,
                                        "char": 33
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
                                                            "value": "Client options must be instance of array",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 132,
                                                            "char": 67
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 132,
                                                        "char": 67
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 132,
                                                "char": 68
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 133,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 135,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "memcache",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 135,
                                                "char": 17
                                            },
                                            "name": "setOptions",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "client",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 135,
                                                        "char": 35
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 135,
                                                    "char": 35
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 135,
                                            "char": 37
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 135,
                                        "char": 37
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
                                                            "value": "Cannot set to Memcached options",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 136,
                                                            "char": 58
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 136,
                                                        "char": 58
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 136,
                                                "char": 59
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 137,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 139,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "memcache",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 139,
                                                "char": 17
                                            },
                                            "name": "addServers",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "servers",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 139,
                                                        "char": 36
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 139,
                                                    "char": 36
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 139,
                                            "char": 38
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 139,
                                        "char": 38
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
                                                            "value": "Cannot connect to Memcached server",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 140,
                                                            "char": 61
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 140,
                                                        "char": 61
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 140,
                                                "char": 62
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 141,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 142,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 144,
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
                                        "type": "variable",
                                        "value": "memcache",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 144,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 144,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 145,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Create internal connection to memcached\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                    "line": 103,
                    "last-line": 149,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 150,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 150,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 150,
                            "char": 57
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "memcache",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 152,
                                    "char": 15
                                },
                                {
                                    "variable": "prefixedKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 152,
                                    "char": 28
                                },
                                {
                                    "variable": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 152,
                                    "char": 43
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 154,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "memcache",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 154,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_memcache",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 154,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 154,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 154,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 155,
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
                                        "value": "memcache",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 155,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 155,
                                    "char": 23
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 155,
                                    "char": 34
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 155,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 156,
                                            "char": 9
                                        },
                                        "name": "_connect",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 156,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 157,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "memcache",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 157,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_memcache",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 157,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 157,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 157,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 158,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 160,
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
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 160,
                                                "char": 26
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_prefix",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 160,
                                                "char": 35
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 160,
                                            "char": 35
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "keyName",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 160,
                                            "char": 44
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 160,
                                        "char": 44
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 160,
                                    "char": 44
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 161,
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
                                        "value": "prefixedKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 161,
                                        "char": 35
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 161,
                                    "char": 35
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 163,
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
                                            "value": "memcache",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 163,
                                            "char": 32
                                        },
                                        "name": "get",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "prefixedKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 163,
                                                    "char": 48
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 163,
                                                "char": 48
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 163,
                                        "char": 49
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 163,
                                    "char": 49
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 164,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 164,
                                    "char": 21
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 164,
                                "char": 21
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 165,
                                        "char": 15
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 166,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 168,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 168,
                                            "char": 30
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 168,
                                        "char": 30
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 168,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "cachedContent",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 169,
                                        "char": 24
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 170,
                                    "char": 3
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 171,
                                                "char": 16
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_frontend",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 171,
                                                "char": 27
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 171,
                                            "char": 27
                                        },
                                        "name": "afterRetrieve",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "cachedContent",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 171,
                                                    "char": 55
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 171,
                                                "char": 55
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 171,
                                        "char": 56
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 172,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 173,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 150,
                                "char": 66
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 151,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                        "line": 151,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                    "line": 150,
                    "last-line": 182,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 183,
                                "char": 37
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 183,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 183,
                                "char": 53
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 183,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 183,
                                "char": 70
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 183,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 183,
                                "char": 97
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 183,
                            "char": 97
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 185,
                                    "char": 14
                                },
                                {
                                    "variable": "frontend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 185,
                                    "char": 24
                                },
                                {
                                    "variable": "memcache",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 185,
                                    "char": 34
                                },
                                {
                                    "variable": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 185,
                                    "char": 49
                                },
                                {
                                    "variable": "preparedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 185,
                                    "char": 66
                                },
                                {
                                    "variable": "tmp",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 185,
                                    "char": 71
                                },
                                {
                                    "variable": "tt1",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 185,
                                    "char": 76
                                },
                                {
                                    "variable": "success",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 185,
                                    "char": 85
                                },
                                {
                                    "variable": "options",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 185,
                                    "char": 94
                                },
                                {
                                    "variable": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 186,
                                    "char": 14
                                },
                                {
                                    "variable": "keys",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 186,
                                    "char": 20
                                },
                                {
                                    "variable": "isBuffering",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 186,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 188,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 188,
                                    "char": 16
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 188,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 188,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 189,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 189,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 189,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 189,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 190,
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
                                            "variable": "lastKey",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 191,
                                                        "char": 23
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "_prefix",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 191,
                                                        "char": 32
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 191,
                                                    "char": 32
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 191,
                                                    "char": 41
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 191,
                                                "char": 41
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 191,
                                            "char": 41
                                        },
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_lastKey",
                                            "expr": {
                                                "type": "variable",
                                                "value": "lastKey",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 192,
                                                "char": 29
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 192,
                                            "char": 29
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 193,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 195,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 195,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 195,
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
                                                    "value": "Cache must be started first",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 196,
                                                    "char": 53
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 196,
                                                "char": 53
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 196,
                                        "char": 54
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 197,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 199,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 199,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_frontend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 199,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 199,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 199,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 204,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "memcache",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 204,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_memcache",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 204,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 204,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 204,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 205,
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
                                        "value": "memcache",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 205,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 205,
                                    "char": 23
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 205,
                                    "char": 34
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 205,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 206,
                                            "char": 9
                                        },
                                        "name": "_connect",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 206,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 207,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "memcache",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 207,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_memcache",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 207,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 207,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 207,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 208,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 210,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "content",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 210,
                                    "char": 16
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 210,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 210,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 211,
                                                    "char": 33
                                                },
                                                "name": "getContent",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 211,
                                                "char": 46
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 211,
                                            "char": 46
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 212,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 213,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 213,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 214,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 219,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 219,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 219,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 219,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 219,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 220,
                                                    "char": 35
                                                },
                                                "name": "beforeStore",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "cachedContent",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 220,
                                                            "char": 61
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 220,
                                                        "char": 61
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 220,
                                                "char": 62
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 220,
                                            "char": 62
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 221,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 222,
                                                "char": 39
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 222,
                                            "char": 39
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 223,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 225,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 225,
                                    "char": 17
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 225,
                                    "char": 24
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 225,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 226,
                                                    "char": 19
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastLifetime",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 226,
                                                    "char": 33
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 226,
                                                "char": 33
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 226,
                                            "char": 33
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 228,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "variable",
                                            "value": "tmp",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 228,
                                            "char": 12
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 228,
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
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 229,
                                                            "char": 24
                                                        },
                                                        "name": "getLifetime",
                                                        "call-type": 1,
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 229,
                                                        "char": 38
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 229,
                                                    "char": 38
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 230,
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 231,
                                                        "char": 18
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 231,
                                                    "char": 18
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 232,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 233,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 234,
                                                "char": 22
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 234,
                                            "char": 22
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 235,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 237,
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
                                            "value": "memcache",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 237,
                                            "char": 26
                                        },
                                        "name": "set",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 237,
                                                    "char": 38
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 237,
                                                "char": 38
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "preparedContent",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 237,
                                                    "char": 55
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 237,
                                                "char": 55
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "tt1",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 237,
                                                    "char": 60
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 237,
                                                "char": 60
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 237,
                                        "char": 61
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 237,
                                    "char": 61
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 239,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "success",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 239,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 239,
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
                                                        "type": "string",
                                                        "value": "Failed storing data in memcached, error code: ",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 240,
                                                        "char": 73
                                                    },
                                                    "right": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "memcache",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 240,
                                                            "char": 84
                                                        },
                                                        "name": "getResultCode",
                                                        "call-type": 1,
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 240,
                                                        "char": 100
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 240,
                                                    "char": 100
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 240,
                                                "char": 100
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 240,
                                        "char": 101
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 241,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 243,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 243,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 243,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 243,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 243,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 245,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 245,
                                        "char": 45
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 245,
                                            "char": 32
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "statsKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 245,
                                            "char": 43
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 245,
                                        "char": 45
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 245,
                                    "char": 45
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 245,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 246,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 246,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 246,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 247,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 249,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "variable",
                                    "value": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 249,
                                    "char": 18
                                },
                                "right": {
                                    "type": "string",
                                    "value": "",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 249,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 249,
                                "char": 23
                            },
                            "statements": [
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
                                                    "value": "memcache",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 253,
                                                    "char": 24
                                                },
                                                "name": "get",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "specialKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 253,
                                                            "char": 39
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 253,
                                                        "char": 39
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 253,
                                                "char": 40
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 253,
                                            "char": 40
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 254,
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
                                                "value": "keys",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 254,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 254,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "array",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 254,
                                            "char": 30
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 254,
                                        "char": 30
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "keys",
                                                    "expr": {
                                                        "type": "empty-array",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 255,
                                                        "char": 18
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 255,
                                                    "char": 18
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 256,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 258,
                                    "char": 5
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
                                                    "value": "keys",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 258,
                                                    "char": 18
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 258,
                                                    "char": 26
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 258,
                                                "char": 28
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 258,
                                            "char": 28
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 258,
                                        "char": 28
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "keys",
                                                    "index-expr": [
                                                        {
                                                            "type": "variable",
                                                            "value": "lastKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 259,
                                                            "char": 21
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "tt1",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 259,
                                                        "char": 28
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 259,
                                                    "char": 28
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 260,
                                            "char": 12
                                        },
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "memcache",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 260,
                                                    "char": 14
                                                },
                                                "name": "set",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "specialKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 260,
                                                            "char": 29
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 260,
                                                        "char": 29
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "keys",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 260,
                                                            "char": 35
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 260,
                                                        "char": 35
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 260,
                                                "char": 36
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 261,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 262,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 264,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 264,
                                            "char": 30
                                        },
                                        "name": "isBuffering",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 264,
                                        "char": 44
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 264,
                                    "char": 44
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 266,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "stopBuffer",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 266,
                                    "char": 19
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 266,
                                    "char": 26
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 266,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 267,
                                            "char": 13
                                        },
                                        "name": "stop",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 267,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 268,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 270,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "isBuffering",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 270,
                                    "char": 20
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 270,
                                    "char": 27
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 270,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "echo",
                                    "expressions": [
                                        {
                                            "type": "variable",
                                            "value": "cachedContent",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 271,
                                            "char": 22
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 272,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 274,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 274,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 274,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 276,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "success",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 276,
                                "char": 17
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 277,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Stores cached content into the file backend and stops the frontend\n\t *\n\t * @param int|string keyName\n\t * @param string content\n\t * @param int lifetime\n\t * @param boolean stopBuffer\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 184,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                        "line": 184,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                    "line": 183,
                    "last-line": 284,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 285,
                            "char": 32
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "memcache",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 287,
                                    "char": 15
                                },
                                {
                                    "variable": "prefixedKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 287,
                                    "char": 28
                                },
                                {
                                    "variable": "options",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 287,
                                    "char": 37
                                },
                                {
                                    "variable": "keys",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 287,
                                    "char": 43
                                },
                                {
                                    "variable": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 287,
                                    "char": 55
                                },
                                {
                                    "variable": "ret",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 287,
                                    "char": 60
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 289,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "memcache",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 289,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_memcache",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 289,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 289,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 289,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 290,
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
                                        "value": "memcache",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 290,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 290,
                                    "char": 23
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 290,
                                    "char": 34
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 290,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 291,
                                            "char": 9
                                        },
                                        "name": "_connect",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 291,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 292,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "memcache",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 292,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_memcache",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 292,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 292,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 292,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 293,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 295,
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
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 295,
                                                "char": 26
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_prefix",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 295,
                                                "char": 35
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 295,
                                            "char": 35
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "keyName",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 295,
                                            "char": 44
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 295,
                                        "char": 44
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 295,
                                    "char": 44
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 296,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 296,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 296,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 296,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 296,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 298,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 298,
                                        "char": 45
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 298,
                                            "char": 32
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "statsKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 298,
                                            "char": 43
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 298,
                                        "char": 45
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 298,
                                    "char": 45
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 298,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 299,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 299,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 299,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 300,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 302,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "variable",
                                    "value": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 302,
                                    "char": 18
                                },
                                "right": {
                                    "type": "string",
                                    "value": "",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 302,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 302,
                                "char": 23
                            },
                            "statements": [
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
                                                    "value": "memcache",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 303,
                                                    "char": 24
                                                },
                                                "name": "get",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "specialKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 303,
                                                            "char": 39
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 303,
                                                        "char": 39
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 303,
                                                "char": 40
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 303,
                                            "char": 40
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 304,
                                    "char": 5
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 304,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 304,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "array",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 304,
                                            "char": 30
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 304,
                                        "char": 30
                                    },
                                    "statements": [
                                        {
                                            "type": "unset",
                                            "expr": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "keys",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 305,
                                                    "char": 15
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "prefixedKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 305,
                                                    "char": 27
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 305,
                                                "char": 28
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 306,
                                            "char": 12
                                        },
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "memcache",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 306,
                                                    "char": 14
                                                },
                                                "name": "set",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "specialKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 306,
                                                            "char": 29
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 306,
                                                        "char": 29
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "keys",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 306,
                                                            "char": 35
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 306,
                                                        "char": 35
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 306,
                                                "char": 36
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 307,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 308,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 313,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "ret",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "memcache",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 313,
                                            "char": 22
                                        },
                                        "name": "delete",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "prefixedKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 313,
                                                    "char": 41
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 313,
                                                "char": 41
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 313,
                                        "char": 42
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 313,
                                    "char": 42
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 314,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "ret",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 314,
                                "char": 13
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 315,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Deletes a value from the cache by its key\n\t *\n\t * @param int|string keyName\n\t * @return boolean\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                    "line": 285,
                    "last-line": 326,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 327,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 327,
                            "char": 48
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "memcache",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 329,
                                    "char": 15
                                },
                                {
                                    "variable": "options",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 329,
                                    "char": 24
                                },
                                {
                                    "variable": "keys",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 329,
                                    "char": 30
                                },
                                {
                                    "variable": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 329,
                                    "char": 42
                                },
                                {
                                    "variable": "key",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 329,
                                    "char": 47
                                },
                                {
                                    "variable": "idx",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 329,
                                    "char": 52
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 331,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "memcache",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 331,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_memcache",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 331,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 331,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 331,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 333,
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
                                        "value": "memcache",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 333,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 333,
                                    "char": 23
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 333,
                                    "char": 34
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 333,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 334,
                                            "char": 9
                                        },
                                        "name": "_connect",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 334,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 335,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "memcache",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 335,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_memcache",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 335,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 335,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 335,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 336,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 338,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 338,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 338,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 338,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 338,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 340,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 340,
                                        "char": 45
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 340,
                                            "char": 32
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "statsKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 340,
                                            "char": 43
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 340,
                                        "char": 45
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 340,
                                    "char": 45
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 340,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 341,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 341,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 341,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 342,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 344,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 344,
                                    "char": 18
                                },
                                "right": {
                                    "type": "string",
                                    "value": "",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 344,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 344,
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
                                                    "value": "Cached keys need to be enabled to use this function (options['statsKey'] == '_PHCM')!",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 345,
                                                    "char": 111
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 345,
                                                "char": 111
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 345,
                                        "char": 112
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 346,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 351,
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
                                            "value": "memcache",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 351,
                                            "char": 23
                                        },
                                        "name": "get",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "specialKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 351,
                                                    "char": 38
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 351,
                                                "char": 38
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 351,
                                        "char": 39
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 351,
                                    "char": 39
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 352,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "unlikely",
                                "left": {
                                    "type": "not-equals",
                                    "left": {
                                        "type": "typeof",
                                        "left": {
                                            "type": "variable",
                                            "value": "keys",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 352,
                                            "char": 28
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 352,
                                        "char": 28
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "array",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 352,
                                        "char": 38
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 352,
                                    "char": 38
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 352,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 353,
                                        "char": 13
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 354,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 356,
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
                                        "type": "fcall",
                                        "name": "array_keys",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "keys",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 356,
                                                    "char": 29
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 356,
                                                "char": 29
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 356,
                                        "char": 30
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 356,
                                    "char": 30
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 357,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "keys",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 357,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 358,
                                                    "char": 22
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 358,
                                                "char": 22
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 358,
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
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 358,
                                                            "char": 40
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 358,
                                                        "char": 40
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "prefix",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 358,
                                                            "char": 48
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 358,
                                                        "char": 48
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 358,
                                                "char": 50
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 358,
                                            "char": 50
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 358,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 359,
                                                    "char": 15
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "idx",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 359,
                                                    "char": 19
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 359,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 360,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 361,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 363,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "keys",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 363,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 364,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 328,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                        "line": 328,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                    "line": 327,
                    "last-line": 371,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 372,
                                "char": 39
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 372,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 372,
                                "char": 56
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 372,
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 374,
                                    "char": 14
                                },
                                {
                                    "variable": "memcache",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 374,
                                    "char": 24
                                },
                                {
                                    "variable": "value",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 374,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 376,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 376,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 376,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 377,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 377,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 377,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 377,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 378,
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
                                            "variable": "lastKey",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 379,
                                                        "char": 23
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "_prefix",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 379,
                                                        "char": 32
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 379,
                                                    "char": 32
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 379,
                                                    "char": 41
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 379,
                                                "char": 41
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 379,
                                            "char": 41
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 380,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 382,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "lastKey",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 382,
                                "char": 14
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "memcache",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 383,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_memcache",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 383,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 383,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 383,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 384,
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
                                                "value": "memcache",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 384,
                                                "char": 24
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 384,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "object",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 384,
                                            "char": 35
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 384,
                                        "char": 35
                                    },
                                    "statements": [
                                        {
                                            "type": "mcall",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 385,
                                                    "char": 10
                                                },
                                                "name": "_connect",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 385,
                                                "char": 21
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 386,
                                            "char": 7
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "memcache",
                                                    "expr": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 386,
                                                            "char": 25
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "_memcache",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 386,
                                                            "char": 35
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 386,
                                                        "char": 35
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 386,
                                                    "char": 35
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 387,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 388,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "value",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "memcache",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 388,
                                                    "char": 25
                                                },
                                                "name": "get",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "lastKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                            "line": 388,
                                                            "char": 37
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                        "line": 388,
                                                        "char": 37
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 388,
                                                "char": 38
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 388,
                                            "char": 38
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 389,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 389,
                                            "char": 14
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 389,
                                        "char": 14
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 390,
                                                "char": 17
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 391,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 392,
                                    "char": 9
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 392,
                                        "char": 15
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 393,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 395,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 395,
                                "char": 15
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 396,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 373,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                        "line": 373,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                    "line": 372,
                    "last-line": 402,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 403,
                                "char": 42
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 403,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 403,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 403,
                            "char": 57
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "memcache",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 405,
                                    "char": 15
                                },
                                {
                                    "variable": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 405,
                                    "char": 23
                                },
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 405,
                                    "char": 32
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 407,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "memcache",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 407,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_memcache",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 407,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 407,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 407,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 409,
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
                                        "value": "memcache",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 409,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 409,
                                    "char": 23
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 409,
                                    "char": 34
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 409,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 410,
                                            "char": 9
                                        },
                                        "name": "_connect",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 410,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 411,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "memcache",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 411,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_memcache",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 411,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 411,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 411,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 412,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 414,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 414,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 414,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 415,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 415,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 415,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 415,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 416,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 417,
                                                    "char": 22
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 417,
                                                    "char": 30
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 417,
                                                "char": 30
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 417,
                                            "char": 30
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 418,
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
                                                    "type": "variable",
                                                    "value": "prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 418,
                                                    "char": 25
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 418,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 418,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 418,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 419,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 419,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 419,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 420,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 422,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "value",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 422,
                                    "char": 13
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 422,
                                "char": 13
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "value",
                                            "expr": {
                                                "type": "int",
                                                "value": "1",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 423,
                                                "char": 17
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 423,
                                            "char": 17
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 424,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 426,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "memcache",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 426,
                                    "char": 19
                                },
                                "name": "increment",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "lastKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 426,
                                            "char": 37
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 426,
                                        "char": 37
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 426,
                                            "char": 44
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 426,
                                        "char": 44
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 426,
                                "char": 45
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 427,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 403,
                                "char": 66
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 404,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                        "line": 404,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                    "line": 403,
                    "last-line": 433,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 434,
                                "char": 42
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 434,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 434,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 434,
                            "char": 57
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "memcache",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 436,
                                    "char": 15
                                },
                                {
                                    "variable": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 436,
                                    "char": 23
                                },
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 436,
                                    "char": 32
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 438,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "memcache",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 438,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_memcache",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 438,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 438,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 438,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 440,
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
                                        "value": "memcache",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 440,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 440,
                                    "char": 23
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 440,
                                    "char": 34
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 440,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 441,
                                            "char": 9
                                        },
                                        "name": "_connect",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 441,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 442,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "memcache",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 442,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_memcache",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 442,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 442,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 442,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 443,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 445,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 445,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 445,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 446,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 446,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 446,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 446,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 447,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 448,
                                                    "char": 22
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 448,
                                                    "char": 30
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 448,
                                                "char": 30
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 448,
                                            "char": 30
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 449,
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
                                                    "type": "variable",
                                                    "value": "prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 449,
                                                    "char": 25
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 449,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 449,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 449,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 450,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 450,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 450,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 451,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 453,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "memcache",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 453,
                                    "char": 19
                                },
                                "name": "decrement",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "lastKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 453,
                                            "char": 37
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 453,
                                        "char": 37
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 453,
                                            "char": 44
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 453,
                                        "char": 44
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 453,
                                "char": 45
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 454,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 434,
                                "char": 66
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 435,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                        "line": 435,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                    "line": 434,
                    "last-line": 475,
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
                                    "variable": "memcache",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 478,
                                    "char": 15
                                },
                                {
                                    "variable": "options",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 478,
                                    "char": 24
                                },
                                {
                                    "variable": "keys",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 478,
                                    "char": 30
                                },
                                {
                                    "variable": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 478,
                                    "char": 42
                                },
                                {
                                    "variable": "key",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 478,
                                    "char": 47
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 480,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "memcache",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 480,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_memcache",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 480,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 480,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 480,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 482,
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
                                        "value": "memcache",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 482,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 482,
                                    "char": 23
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 482,
                                    "char": 34
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 482,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 483,
                                            "char": 9
                                        },
                                        "name": "_connect",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 483,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 484,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "memcache",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 484,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_memcache",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 484,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 484,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 484,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 485,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 487,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 487,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 487,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 487,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 487,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 489,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 489,
                                        "char": 45
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 489,
                                            "char": 32
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "statsKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 489,
                                            "char": 43
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 489,
                                        "char": 45
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 489,
                                    "char": 45
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 489,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 490,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 490,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 490,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 491,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 493,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 493,
                                    "char": 18
                                },
                                "right": {
                                    "type": "string",
                                    "value": "",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 493,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 493,
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
                                                    "value": "Cached keys need to be enabled to use this function (options['statsKey'] == '_PHCM')!",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 494,
                                                    "char": 111
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 494,
                                                "char": 111
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 494,
                                        "char": 112
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 495,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 500,
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
                                            "value": "memcache",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 500,
                                            "char": 23
                                        },
                                        "name": "get",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "specialKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 500,
                                                    "char": 38
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 500,
                                                "char": 38
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 500,
                                        "char": 39
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 500,
                                    "char": 39
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 501,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "unlikely",
                                "left": {
                                    "type": "not-equals",
                                    "left": {
                                        "type": "typeof",
                                        "left": {
                                            "type": "variable",
                                            "value": "keys",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 501,
                                            "char": 28
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 501,
                                        "char": 28
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "array",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 501,
                                        "char": 38
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 501,
                                    "char": 38
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 501,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 502,
                                        "char": 15
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 503,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 505,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "keys",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 505,
                                "char": 22
                            },
                            "key": "key",
                            "value": "_",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "memcache",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 506,
                                            "char": 13
                                        },
                                        "name": "delete",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "key",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                    "line": 506,
                                                    "char": 24
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                                "line": 506,
                                                "char": 24
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 506,
                                        "char": 25
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 507,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 509,
                            "char": 10
                        },
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "memcache",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                    "line": 509,
                                    "char": 12
                                },
                                "name": "delete",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "specialKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                            "line": 509,
                                            "char": 30
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                        "line": 509,
                                        "char": 30
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 509,
                                "char": 31
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 511,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 511,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                            "line": 512,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Immediately invalidates all existing items.\n\t *\n\t * Memcached does not support flush() per default. If you require flush() support, set $config[\"statsKey\"].\n     * All modified keys are stored in \"statsKey\". Note: statsKey has a negative performance impact.\n     *\n     *<code>\n     * $cache = new \\Vof\\Cache\\Backend\\Libmemcached(\n     *     $frontCache,\n     *     [\n     *         \"statsKey\" => \"_PHCM\",\n     *     ]\n     * );\n     *\n     * $cache->save(\"my-data\", [1, 2, 3, 4, 5]);\n     *\n     * \/\/ 'my-data' and all other used keys are deleted\n     * $cache->flush();\n     *<\/code>\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                                "line": 477,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                        "line": 477,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
                    "line": 476,
                    "last-line": 513,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
            "line": 68,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/libmemcached.zep",
        "line": 68,
        "char": 5
    }
]