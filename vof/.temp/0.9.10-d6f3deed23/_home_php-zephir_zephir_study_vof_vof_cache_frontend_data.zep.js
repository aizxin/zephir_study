[
    {
        "type": "namespace",
        "name": "Vof\\Cache\\Frontend",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                "line": 22,
                "char": 32
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
        "line": 73,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Cache\\Frontend\\Data\n *\n * Allows to cache native PHP data in a serialized form\n *\n *<code>\n * use Vof\\Cache\\Backend\\File;\n * use Vof\\Cache\\Frontend\\Data;\n *\n * \/\/ Cache the files for 2 days using a Data frontend\n * $frontCache = new Data(\n *     [\n *         \"lifetime\" => 172800,\n *     ]\n * );\n *\n * \/\/ Create the component that will cache \"Data\" to a 'File' backend\n * \/\/ Set the cache file directory - important to keep the '\/' at the end of\n * \/\/ of the value for the folder\n * $cache = new File(\n *     $frontCache,\n *     [\n *         \"cacheDir\" => \"..\/app\/cache\/\",\n *     ]\n * );\n *\n * $cacheKey = \"robots_order_id.cache\";\n *\n * \/\/ Try to get cached records\n * $robots = $cache->get($cacheKey);\n *\n * if ($robots === null) {\n *     \/\/ $robots is null due to cache expiration or data does not exist\n *     \/\/ Make the database call and populate the variable\n *     $robots = Robots::find(\n *         [\n *             \"order\" => \"id\",\n *         ]\n *     );\n *\n *     \/\/ Store it in the cache\n *     $cache->save($cacheKey, $robots);\n * }\n *\n * \/\/ Use $robots :)\n * foreach ($robots as $robot) {\n *     echo $robot->name, \"\\n\";\n * }\n *<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
        "line": 74,
        "char": 5
    },
    {
        "type": "class",
        "name": "Data",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                "line": 75,
                "char": 1
            }
        ],
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_frontendOptions",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                    "line": 83,
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
                            "name": "frontendOptions",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                "line": 84,
                                "char": 52
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                            "line": 84,
                            "char": 52
                        }
                    ],
                    "statements": [
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                        "line": 86,
                                        "char": 47
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                    "line": 86,
                                    "char": 47
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                            "line": 87,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Cache\\Frontend\\Data constructor\n\t *\n\t * @param array frontendOptions\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                    "line": 84,
                    "last-line": 91,
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                    "line": 94,
                                    "char": 14
                                },
                                {
                                    "variable": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                    "line": 94,
                                    "char": 24
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                            "line": 95,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                            "line": 95,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_frontendOptions",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                            "line": 95,
                                            "char": 39
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                        "line": 95,
                                        "char": 39
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                    "line": 95,
                                    "char": 39
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                            "line": 96,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                        "line": 96,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                    "line": 96,
                                    "char": 22
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                    "line": 96,
                                    "char": 32
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                "line": 96,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                            "line": 97,
                                            "char": 43
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                                "line": 97,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                                "line": 97,
                                                "char": 41
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                            "line": 97,
                                            "char": 43
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                        "line": 97,
                                        "char": 43
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "variable",
                                                "value": "lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                                "line": 98,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                            "line": 99,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                    "line": 100,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                            "line": 101,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "int",
                                "value": "1",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                "line": 101,
                                "char": 11
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                            "line": 102,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                "line": 93,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                        "line": 93,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                    "line": 92,
                    "last-line": 106,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                "line": 109,
                                "char": 15
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                            "line": 110,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                "line": 108,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                        "line": 108,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                    "line": 107,
                    "last-line": 114,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "start",
                    "docblock": "**\n\t * Starts output frontend. Actually, does nothing\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                    "line": 115,
                    "last-line": 124,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                "line": 127,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                            "line": 128,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns output cached content\n\t *\n\t * @return string\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                    "line": 125,
                    "last-line": 132,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "stop",
                    "docblock": "**\n\t * Stops output frontend\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                    "line": 133,
                    "last-line": 140,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                            "line": 141,
                            "char": 38
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "serialize",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "data",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                            "line": 143,
                                            "char": 24
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                        "line": 143,
                                        "char": 24
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                "line": 143,
                                "char": 25
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                            "line": 144,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Serializes data before storing them\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                    "line": 141,
                    "last-line": 148,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                            "line": 149,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                            "line": 151,
                                            "char": 21
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                        "line": 151,
                                        "char": 21
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                "line": 151,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "data",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                        "line": 152,
                                        "char": 15
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                    "line": 153,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                            "line": 156,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "variable",
                                    "value": "data",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                    "line": 156,
                                    "char": 17
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                "line": 156,
                                "char": 17
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "data",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                        "line": 157,
                                        "char": 15
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                    "line": 158,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                            "line": 160,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "unserialize",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "data",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                            "line": 160,
                                            "char": 26
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                        "line": 160,
                                        "char": 26
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                "line": 160,
                                "char": 27
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                            "line": 161,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                                "line": 150,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                        "line": 150,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
                    "line": 149,
                    "last-line": 162,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
            "line": 74,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/data.zep",
        "line": 74,
        "char": 5
    }
]