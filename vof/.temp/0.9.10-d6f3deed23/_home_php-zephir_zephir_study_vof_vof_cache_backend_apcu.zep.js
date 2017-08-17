[
    {
        "type": "namespace",
        "name": "Vof\\Cache\\Backend",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Exception",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                "line": 22,
                "char": 24
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Backend",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                "line": 23,
                "char": 22
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
        "line": 54,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Cache\\Backend\\Apcu\n *\n * Allows to cache output fragments, PHP data and raw data using an APCu backend\n *\n *<code>\n * use Vof\\Cache\\Backend\\Apcu;\n * use Vof\\Cache\\Frontend\\Data as FrontData;\n *\n * \/\/ Cache data for 2 days\n * $frontCache = new FrontData(\n *     [\n *         \"lifetime\" => 172800,\n *     ]\n * );\n *\n * $cache = new Apcu(\n *     $frontCache,\n *     [\n *         \"prefix\" => \"app-data\",\n *     ]\n * );\n *\n * \/\/ Cache arbitrary data\n * $cache->save(\"my-data\", [1, 2, 3, 4, 5]);\n *\n * \/\/ Get data\n * $data = $cache->get(\"my-data\");\n *<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
        "line": 55,
        "char": 5
    },
    {
        "type": "class",
        "name": "Apcu",
        "abstract": 0,
        "final": 0,
        "extends": "Backend",
        "definition": {
            "methods": [
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 61,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 61,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 61,
                            "char": 57
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "prefixedKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 63,
                                    "char": 18
                                },
                                {
                                    "variable": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 63,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 65,
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
                                            "type": "concat",
                                            "left": {
                                                "type": "string",
                                                "value": "_PHCA",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 65,
                                                "char": 29
                                            },
                                            "right": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 65,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 65,
                                                    "char": 45
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 65,
                                                "char": 45
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 65,
                                            "char": 45
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "keyName",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 65,
                                            "char": 54
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 65,
                                        "char": 54
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 65,
                                    "char": 54
                                },
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_lastKey",
                                    "expr": {
                                        "type": "variable",
                                        "value": "prefixedKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 66,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 66,
                                    "char": 32
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 68,
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
                                        "type": "fcall",
                                        "name": "apcu_fetch",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "prefixedKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 68,
                                                    "char": 45
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 68,
                                                "char": 45
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 68,
                                        "char": 46
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 68,
                                    "char": 46
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 69,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 69,
                                    "char": 22
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "false",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 69,
                                    "char": 30
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 69,
                                "char": 30
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 70,
                                        "char": 15
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 71,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 73,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 73,
                                        "char": 15
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "_frontend",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 73,
                                        "char": 26
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 73,
                                    "char": 26
                                },
                                "name": "afterRetrieve",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "cachedContent",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 73,
                                            "char": 54
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 73,
                                        "char": 54
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 73,
                                "char": 55
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 74,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 61,
                                "char": 66
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 62,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                        "line": 62,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                    "line": 61,
                    "last-line": 83,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 84,
                                "char": 41
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 84,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "content",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 84,
                                "char": 61
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 84,
                            "char": 61
                        },
                        {
                            "type": "parameter",
                            "name": "lifetime",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 84,
                                "char": 82
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 84,
                            "char": 82
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 84,
                                "char": 109
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 84,
                            "char": 109
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 86,
                                    "char": 14
                                },
                                {
                                    "variable": "frontend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 86,
                                    "char": 24
                                },
                                {
                                    "variable": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 86,
                                    "char": 39
                                },
                                {
                                    "variable": "preparedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 86,
                                    "char": 56
                                },
                                {
                                    "variable": "ttl",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 86,
                                    "char": 61
                                },
                                {
                                    "variable": "isBuffering",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 86,
                                    "char": 74
                                },
                                {
                                    "variable": "success",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 86,
                                    "char": 83
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 88,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 88,
                                    "char": 16
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 88,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 88,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 89,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 89,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 89,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 89,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 90,
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
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "_PHCA",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 91,
                                                        "char": 26
                                                    },
                                                    "right": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                            "line": 91,
                                                            "char": 33
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "_prefix",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                            "line": 91,
                                                            "char": 42
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 91,
                                                        "char": 42
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 91,
                                                    "char": 42
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 91,
                                                    "char": 51
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 91,
                                                "char": 51
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 91,
                                            "char": 51
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 92,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 94,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 94,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 94,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 95,
                                                    "char": 53
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 95,
                                                "char": 53
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 95,
                                        "char": 54
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 96,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 98,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 98,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_frontend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 98,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 98,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 98,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 99,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "content",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 99,
                                    "char": 16
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 99,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 99,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 100,
                                                    "char": 33
                                                },
                                                "name": "getContent",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 100,
                                                "char": 46
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 100,
                                            "char": 46
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 101,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 102,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 102,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 103,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 105,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 105,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 105,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 105,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 105,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 106,
                                                    "char": 35
                                                },
                                                "name": "beforeStore",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "cachedContent",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                            "line": 106,
                                                            "char": 61
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 106,
                                                        "char": 61
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 106,
                                                "char": 62
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 106,
                                            "char": 62
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 107,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 108,
                                                "char": 39
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 108,
                                            "char": 39
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 109,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 114,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 114,
                                    "char": 17
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 114,
                                    "char": 24
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 114,
                                "char": 24
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
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 115,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastLifetime",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 115,
                                                    "char": 38
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 115,
                                                "char": 38
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 115,
                                            "char": 38
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 116,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "identical",
                                        "left": {
                                            "type": "variable",
                                            "value": "lifetime",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 116,
                                            "char": 18
                                        },
                                        "right": {
                                            "type": "null",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 116,
                                            "char": 25
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 116,
                                        "char": 25
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "ttl",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "frontend",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                            "line": 117,
                                                            "char": 24
                                                        },
                                                        "name": "getLifetime",
                                                        "call-type": 1,
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 117,
                                                        "char": 38
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 117,
                                                    "char": 38
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 118,
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
                                                    "variable": "ttl",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "lifetime",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 119,
                                                        "char": 23
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 119,
                                                    "char": 23
                                                },
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "_lastKey",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "lastKey",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 120,
                                                        "char": 30
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 120,
                                                    "char": 30
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 121,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 122,
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
                                            "variable": "ttl",
                                            "expr": {
                                                "type": "variable",
                                                "value": "lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 123,
                                                "char": 22
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 123,
                                            "char": 22
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 124,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 129,
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
                                        "type": "fcall",
                                        "name": "apcu_store",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 129,
                                                    "char": 35
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 129,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "preparedContent",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 129,
                                                    "char": 52
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 129,
                                                "char": 52
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "ttl",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 129,
                                                    "char": 57
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 129,
                                                "char": 57
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 129,
                                        "char": 58
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 129,
                                    "char": 58
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 131,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "success",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 131,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 131,
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
                                                    "value": "Failed storing data in APCu",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 132,
                                                    "char": 53
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 132,
                                                "char": 53
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 132,
                                        "char": 54
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 133,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 135,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 135,
                                            "char": 30
                                        },
                                        "name": "isBuffering",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 135,
                                        "char": 44
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 135,
                                    "char": 44
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 137,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "stopBuffer",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 137,
                                    "char": 19
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 137,
                                    "char": 26
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 137,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 138,
                                            "char": 13
                                        },
                                        "name": "stop",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 138,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 139,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 141,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "isBuffering",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 141,
                                    "char": 20
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 141,
                                    "char": 27
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 141,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "echo",
                                    "expressions": [
                                        {
                                            "type": "variable",
                                            "value": "cachedContent",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 142,
                                            "char": 22
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 143,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 145,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 145,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 145,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 147,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "success",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 147,
                                "char": 17
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 148,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Stores cached content into the APCu backend and stops the frontend\n\t *\n\t * @param string|int keyName\n\t * @param string content\n\t * @param int lifetime\n\t * @param boolean stopBuffer\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 85,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                        "line": 85,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                    "line": 84,
                    "last-line": 154,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 155,
                                "char": 42
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 155,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 155,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 155,
                            "char": 57
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "prefixedKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 157,
                                    "char": 18
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 159,
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
                                            "type": "concat",
                                            "left": {
                                                "type": "string",
                                                "value": "_PHCA",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 159,
                                                "char": 29
                                            },
                                            "right": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 159,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 159,
                                                    "char": 45
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 159,
                                                "char": 45
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 159,
                                            "char": 45
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "keyName",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 159,
                                            "char": 54
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 159,
                                        "char": 54
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 159,
                                    "char": 54
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 160,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 160,
                                        "char": 35
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 160,
                                    "char": 35
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 162,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "apcu_inc",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "prefixedKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 162,
                                            "char": 30
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 162,
                                        "char": 30
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 162,
                                            "char": 37
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 162,
                                        "char": 37
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 162,
                                "char": 38
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 163,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Increment of a given key, by number $value\n\t *\n\t * @param string keyName\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 155,
                                "char": 66
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 156,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                        "line": 156,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                    "line": 155,
                    "last-line": 169,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 170,
                                "char": 42
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 170,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 170,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 170,
                            "char": 57
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 172,
                                    "char": 14
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 174,
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
                                                "value": "_PHCA",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 174,
                                                "char": 25
                                            },
                                            "right": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 174,
                                                    "char": 32
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 174,
                                                    "char": 41
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 174,
                                                "char": 41
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 174,
                                            "char": 41
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "keyName",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 174,
                                            "char": 50
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 174,
                                        "char": 50
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 174,
                                    "char": 50
                                },
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_lastKey",
                                    "expr": {
                                        "type": "variable",
                                        "value": "lastKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 175,
                                        "char": 28
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 175,
                                    "char": 28
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 177,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "apcu_dec",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "lastKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 177,
                                            "char": 26
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 177,
                                        "char": 26
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 177,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 177,
                                        "char": 33
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 177,
                                "char": 34
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 178,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Decrement of a given key, by number $value\n\t *\n\t * @param string keyName\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 170,
                                "char": 66
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 171,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                        "line": 171,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                    "line": 170,
                    "last-line": 182,
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
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 183,
                            "char": 40
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "apcu_delete",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "concat",
                                            "left": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "string",
                                                    "value": "_PHCA",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 185,
                                                    "char": 30
                                                },
                                                "right": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 185,
                                                        "char": 37
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "_prefix",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 185,
                                                        "char": 46
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 185,
                                                    "char": 46
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 185,
                                                "char": 46
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "keyName",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 185,
                                                "char": 55
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 185,
                                            "char": 55
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 185,
                                        "char": 55
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 185,
                                "char": 56
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 186,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Deletes a value from the cache by its key\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 184,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                        "line": 184,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                    "line": 183,
                    "last-line": 197,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 198,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 198,
                            "char": 48
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "prefixPattern",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 200,
                                    "char": 20
                                },
                                {
                                    "variable": "apc",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 200,
                                    "char": 25
                                },
                                {
                                    "variable": "keys",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 200,
                                    "char": 31
                                },
                                {
                                    "variable": "key",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 200,
                                    "char": 36
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 202,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "variable",
                                    "value": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 202,
                                    "char": 19
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 202,
                                "char": 19
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "prefixPattern",
                                            "expr": {
                                                "type": "string",
                                                "value": "\/^_PHCA\/",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 203,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 203,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 204,
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
                                            "variable": "prefixPattern",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "\/^_PHCA",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 205,
                                                        "char": 34
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "prefix",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 205,
                                                        "char": 43
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 205,
                                                    "char": 43
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "\/",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 205,
                                                    "char": 48
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 205,
                                                "char": 48
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 205,
                                            "char": 48
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 206,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 208,
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
                                        "type": "empty-array",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 208,
                                        "char": 16
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 208,
                                    "char": 16
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 211,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "class_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "APCUIterator",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 211,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 211,
                                        "char": 33
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 211,
                                "char": 35
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "apc",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\APCUIterator",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "prefixPattern",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                            "line": 212,
                                                            "char": 45
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 212,
                                                        "char": 45
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 212,
                                                "char": 46
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 212,
                                            "char": 46
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 213,
                                    "char": 3
                                }
                            ],
                            "elseif_statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "class_exists",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "APCIterator",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 213,
                                                    "char": 38
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 213,
                                                "char": 38
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 213,
                                        "char": 40
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "apc",
                                                    "expr": {
                                                        "type": "new",
                                                        "class": "\\APCIterator",
                                                        "dynamic": 0,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "string",
                                                                    "value": "user",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                                    "line": 214,
                                                                    "char": 37
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                                "line": 214,
                                                                "char": 37
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "prefixPattern",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                                    "line": 214,
                                                                    "char": 52
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                                "line": 214,
                                                                "char": 52
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 214,
                                                        "char": 53
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 214,
                                                    "char": 53
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 215,
                                            "char": 3
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 217,
                                    "char": 4
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 217,
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
                                        "value": "apc",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 217,
                                        "char": 18
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 217,
                                    "char": 18
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 217,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 217,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 218,
                                        "char": 13
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 219,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 221,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "fcall",
                                "name": "iterator",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "apc",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 221,
                                            "char": 29
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 221,
                                        "char": 29
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 221,
                                "char": 31
                            },
                            "key": "key",
                            "value": "_",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable-append",
                                            "operator": "assign",
                                            "variable": "keys",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "substr",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                            "line": 222,
                                                            "char": 27
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 222,
                                                        "char": 27
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "5",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                            "line": 222,
                                                            "char": 30
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 222,
                                                        "char": 30
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 222,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 222,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 223,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 225,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "keys",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 225,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 226,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 199,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                        "line": 199,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                    "line": 198,
                    "last-line": 233,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 234,
                                "char": 39
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 234,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 234,
                                "char": 56
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 234,
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 236,
                                    "char": 14
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 238,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 238,
                                    "char": 16
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 238,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 238,
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
                                                "type": "cast",
                                                "left": "string",
                                                "right": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 239,
                                                        "char": 32
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "_lastKey",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 239,
                                                        "char": 41
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 239,
                                                    "char": 41
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 239,
                                                "char": 41
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 239,
                                            "char": 41
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 240,
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
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "string",
                                                        "value": "_PHCA",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 241,
                                                        "char": 26
                                                    },
                                                    "right": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                            "line": 241,
                                                            "char": 33
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "_prefix",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                            "line": 241,
                                                            "char": 42
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 241,
                                                        "char": 42
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 241,
                                                    "char": 42
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 241,
                                                    "char": 51
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 241,
                                                "char": 51
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 241,
                                            "char": 51
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 242,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 244,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "list",
                                    "left": {
                                        "type": "variable",
                                        "value": "lastKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 244,
                                        "char": 19
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 244,
                                    "char": 21
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 244,
                                "char": 21
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 245,
                                        "char": 16
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 246,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 248,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "apcu_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "lastKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 248,
                                            "char": 29
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 248,
                                        "char": 29
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 248,
                                "char": 30
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 249,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Checks if cache exists and it hasn't expired\n\t *\n\t * @param  string|int keyName\n\t * @param  int lifetime\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 235,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                        "line": 235,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                    "line": 234,
                    "last-line": 264,
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
                                    "variable": "item",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 267,
                                    "char": 11
                                },
                                {
                                    "variable": "prefixPattern",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 267,
                                    "char": 26
                                },
                                {
                                    "variable": "apc",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 267,
                                        "char": 38
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 267,
                                    "char": 38
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 269,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "prefixPattern",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "string",
                                                "value": "\/^_PHCA",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 269,
                                                "char": 33
                                            },
                                            "right": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 269,
                                                    "char": 40
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 269,
                                                    "char": 49
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 269,
                                                "char": 49
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 269,
                                            "char": 49
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "\/",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 269,
                                            "char": 54
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 269,
                                        "char": 54
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 269,
                                    "char": 54
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 272,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "class_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "APCUIterator",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 272,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 272,
                                        "char": 33
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 272,
                                "char": 35
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "apc",
                                            "expr": {
                                                "type": "new",
                                                "class": "\\APCUIterator",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "prefixPattern",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                            "line": 273,
                                                            "char": 45
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 273,
                                                        "char": 45
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 273,
                                                "char": 46
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 273,
                                            "char": 46
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 274,
                                    "char": 3
                                }
                            ],
                            "elseif_statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "class_exists",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "APCIterator",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 274,
                                                    "char": 38
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 274,
                                                "char": 38
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 274,
                                        "char": 40
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "apc",
                                                    "expr": {
                                                        "type": "new",
                                                        "class": "\\APCIterator",
                                                        "dynamic": 0,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "string",
                                                                    "value": "user",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                                    "line": 275,
                                                                    "char": 37
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                                "line": 275,
                                                                "char": 37
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "prefixPattern",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                                    "line": 275,
                                                                    "char": 52
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                                "line": 275,
                                                                "char": 52
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 275,
                                                        "char": 53
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 275,
                                                    "char": 53
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 276,
                                            "char": 3
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 278,
                                    "char": 4
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 278,
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
                                        "value": "apc",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 278,
                                        "char": 18
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 278,
                                    "char": 18
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 278,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 278,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 279,
                                        "char": 16
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 280,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 282,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "fcall",
                                "name": "iterator",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "apc",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                            "line": 282,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 282,
                                        "char": 27
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 282,
                                "char": 29
                            },
                            "value": "item",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "apcu_delete",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "item",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 283,
                                                        "char": 20
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "key",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                        "line": 283,
                                                        "char": 26
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                    "line": 283,
                                                    "char": 27
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                                "line": 283,
                                                "char": 27
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                        "line": 283,
                                        "char": 28
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                    "line": 284,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 286,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 286,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                            "line": 287,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Immediately invalidates all existing items.\n\t *\n\t * <code>\n\t * use Vof\\Cache\\Backend\\Apcu;\n\t *\n\t * $cache = new Apcu($frontCache, [\"prefix\" => \"app-data\"]);\n\t *\n\t * $cache->save(\"my-data\", [1, 2, 3, 4, 5]);\n\t *\n\t * \/\/ 'my-data' and all other used keys are deleted\n\t * $cache->flush();\n\t * <\/code>\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                                "line": 266,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                        "line": 266,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
                    "line": 265,
                    "last-line": 288,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
            "line": 55,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/apcu.zep",
        "line": 55,
        "char": 5
    }
]