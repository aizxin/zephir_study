[
    {
        "type": "namespace",
        "name": "Vof\\Cache\\Frontend",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                "line": 22,
                "char": 32
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Exception",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                "line": 23,
                "char": 24
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
        "line": 77,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Cache\\Frontend\\Msgpack\n *\n * Allows to cache native PHP data in a serialized form using msgpack extension\n * This adapter uses a Msgpack frontend to store the cached content and requires msgpack extension.\n *\n * @link https:\/\/github.com\/msgpack\/msgpack-php\n *\n *<code>\n * use Vof\\Cache\\Backend\\File;\n * use Vof\\Cache\\Frontend\\Msgpack;\n *\n * \/\/ Cache the files for 2 days using Msgpack frontend\n * $frontCache = new Msgpack(\n *     [\n *         \"lifetime\" => 172800,\n *     ]\n * );\n *\n * \/\/ Create the component that will cache \"Msgpack\" to a \"File\" backend\n * \/\/ Set the cache file directory - important to keep the \"\/\" at the end of\n * \/\/ of the value for the folder\n * $cache = new File(\n *     $frontCache,\n *     [\n *         \"cacheDir\" => \"..\/app\/cache\/\",\n *     ]\n * );\n *\n * $cacheKey = \"robots_order_id.cache\";\n *\n * \/\/ Try to get cached records\n * $robots = $cache->get($cacheKey);\n *\n * if ($robots === null) {\n *     \/\/ $robots is null due to cache expiration or data do not exist\n *     \/\/ Make the database call and populate the variable\n *     $robots = Robots::find(\n *         [\n *             \"order\" => \"id\",\n *         ]\n *     );\n *\n *     \/\/ Store it in the cache\n *     $cache->save($cacheKey, $robots);\n * }\n *\n * \/\/ Use $robots\n * foreach ($robots as $robot) {\n *     echo $robot->name, \"\\n\";\n * }\n *<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
        "line": 78,
        "char": 5
    },
    {
        "type": "class",
        "name": "Msgpack",
        "abstract": 0,
        "final": 0,
        "extends": "Data",
        "implements": [
            {
                "type": "variable",
                "value": "FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                "line": 79,
                "char": 1
            }
        ],
        "definition": {
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
                            "name": "frontendOptions",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                "line": 85,
                                "char": 52
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                            "line": 85,
                            "char": 52
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                    "line": 87,
                                    "char": 15
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                            "line": 89,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                    "line": 89,
                                    "char": 50
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "frontendOptions",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                        "line": 89,
                                        "char": 37
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "lifetime",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                        "line": 89,
                                        "char": 48
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                    "line": 89,
                                    "char": 50
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                "line": 89,
                                "char": 50
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not-identical",
                                        "left": {
                                            "type": "typeof",
                                            "left": {
                                                "type": "variable",
                                                "value": "lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                                "line": 90,
                                                "char": 25
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                            "line": 90,
                                            "char": 25
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "integer",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                            "line": 90,
                                            "char": 37
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                        "line": 90,
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
                                                            "value": "Option 'lifetime' must be an integer",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                                            "line": 91,
                                                            "char": 63
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                                        "line": 91,
                                                        "char": 63
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                                "line": 91,
                                                "char": 64
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                            "line": 92,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                    "line": 93,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                            "line": 94,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_frontendOptions",
                                    "expr": {
                                        "type": "variable",
                                        "value": "frontendOptions",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                        "line": 94,
                                        "char": 47
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                    "line": 94,
                                    "char": 47
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                            "line": 95,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Cache\\Frontend\\Msgpack constructor\n\t *\n\t * @param array frontendOptions\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                    "line": 85,
                    "last-line": 99,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getLifetime",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "options",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                    "line": 102,
                                    "char": 14
                                },
                                {
                                    "variable": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                    "line": 102,
                                    "char": 24
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                            "line": 103,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                            "line": 103,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_frontendOptions",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                            "line": 103,
                                            "char": 39
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                        "line": 103,
                                        "char": 39
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                    "line": 103,
                                    "char": 39
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                            "line": 104,
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
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                        "line": 104,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                    "line": 104,
                                    "char": 22
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                    "line": 104,
                                    "char": 32
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                "line": 104,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fetch",
                                        "left": {
                                            "type": "variable",
                                            "value": "lifetime",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                            "line": 105,
                                            "char": 43
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                                "line": 105,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                                "line": 105,
                                                "char": 41
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                            "line": 105,
                                            "char": 43
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                        "line": 105,
                                        "char": 43
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "variable",
                                                "value": "lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                                "line": 106,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                            "line": 107,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                    "line": 108,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                            "line": 109,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "int",
                                "value": "1",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                "line": 109,
                                "char": 11
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                            "line": 110,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns the cache lifetime\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                "line": 101,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                        "line": 101,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                    "line": 100,
                    "last-line": 114,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isBuffering",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                "line": 117,
                                "char": 15
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                            "line": 118,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Check whether if frontend is buffering output\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                "line": 116,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                        "line": 116,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                    "line": 115,
                    "last-line": 122,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "start",
                    "docblock": "**\n\t * Starts output frontend. Actually, does nothing\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                    "line": 123,
                    "last-line": 129,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getContent",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                "line": 132,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                            "line": 133,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns output cached content\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                "line": 131,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                        "line": 131,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                    "line": 130,
                    "last-line": 137,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "stop",
                    "docblock": "**\n\t * Stops output frontend\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                    "line": 138,
                    "last-line": 144,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "beforeStore",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "data",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                            "line": 145,
                            "char": 38
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "msgpack_pack",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "data",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                            "line": 147,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                        "line": 147,
                                        "char": 27
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                "line": 147,
                                "char": 28
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                            "line": 148,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Serializes data before storing them\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                "line": 146,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                        "line": 146,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                    "line": 145,
                    "last-line": 152,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "afterRetrieve",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "data",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                            "line": 153,
                            "char": 40
                        }
                    ],
                    "statements": [
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
                                            "value": "data",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                            "line": 155,
                                            "char": 21
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                        "line": 155,
                                        "char": 21
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                "line": 155,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "data",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                        "line": 156,
                                        "char": 15
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                    "line": 157,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                            "line": 159,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "msgpack_unpack",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "data",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                            "line": 159,
                                            "char": 29
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                        "line": 159,
                                        "char": 29
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                "line": 159,
                                "char": 30
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                            "line": 160,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Unserializes data after retrieval\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "variable",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                                "line": 154,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                        "line": 154,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
                    "line": 153,
                    "last-line": 161,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
            "line": 78,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/msgpack.zep",
        "line": 78,
        "char": 5
    }
]