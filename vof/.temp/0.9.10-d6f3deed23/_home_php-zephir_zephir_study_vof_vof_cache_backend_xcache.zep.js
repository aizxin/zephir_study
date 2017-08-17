[
    {
        "type": "namespace",
        "name": "Vof\\Cache\\Backend",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Backend",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                "line": 22,
                "char": 22
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Exception",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                "line": 23,
                "char": 24
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
        "line": 24,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                "line": 24,
                "char": 32
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
        "line": 55,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Cache\\Backend\\Xcache\n *\n * Allows to cache output fragments, PHP data and raw data using an XCache backend\n *\n *<code>\n * use Vof\\Cache\\Backend\\Xcache;\n * use Vof\\Cache\\Frontend\\Data as FrontData;\n *\n * \/\/ Cache data for 2 days\n * $frontCache = new FrontData(\n *     [\n *        \"lifetime\" => 172800,\n *     ]\n * );\n *\n * $cache = new Xcache(\n *     $frontCache,\n *     [\n *         \"prefix\" => \"app-data\",\n *     ]\n * );\n *\n * \/\/ Cache arbitrary data\n * $cache->save(\"my-data\", [1, 2, 3, 4, 5]);\n *\n * \/\/ Get data\n * $data = $cache->get(\"my-data\");\n *<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
        "line": 56,
        "char": 5
    },
    {
        "type": "class",
        "name": "Xcache",
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 65,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 65,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 65,
                                "char": 74
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 65,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 67,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 67,
                                    "char": 22
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 67,
                                    "char": 32
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 67,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 68,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 68,
                                            "char": 20
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 69,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 71,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "statsKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 71,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 71,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 71,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 71,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 73,
                                                    "char": 26
                                                }
                                            ],
                                            "expr": {
                                                "type": "string",
                                                "value": "",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 73,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 73,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 74,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 76,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 76,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 76,
                                        "char": 31
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 76,
                                            "char": 40
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 76,
                                        "char": 40
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 76,
                                "char": 41
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 77,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Cache\\Backend\\Xcache constructor\n\t *\n\t * @param \\Vof\\Cache\\FrontendInterface frontend\n\t * @param array options\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                    "line": 65,
                    "last-line": 81,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 82,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 82,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 82,
                            "char": 57
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "frontend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 84,
                                    "char": 15
                                },
                                {
                                    "variable": "prefixedKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 84,
                                    "char": 28
                                },
                                {
                                    "variable": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 84,
                                    "char": 43
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 86,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 86,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_frontend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 86,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 86,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 86,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 87,
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
                                                "value": "_PHCX",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 87,
                                                "char": 29
                                            },
                                            "right": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 87,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 87,
                                                    "char": 45
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 87,
                                                "char": 45
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 87,
                                            "char": 45
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "keyName",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 87,
                                            "char": 54
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 87,
                                        "char": 54
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 87,
                                    "char": 54
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
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
                                    "property": "_lastKey",
                                    "expr": {
                                        "type": "variable",
                                        "value": "prefixedKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 88,
                                        "char": 35
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 88,
                                    "char": 35
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 89,
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
                                        "name": "xcache_get",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "prefixedKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 89,
                                                    "char": 45
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 89,
                                                "char": 45
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 89,
                                        "char": 46
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 89,
                                    "char": 46
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 91,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 91,
                                    "char": 21
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 91,
                                "char": 21
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 92,
                                        "char": 15
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 93,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 95,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 95,
                                            "char": 30
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 95,
                                        "char": 30
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 95,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "cachedContent",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 96,
                                        "char": 24
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 97,
                                    "char": 3
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "frontend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 98,
                                            "char": 20
                                        },
                                        "name": "afterRetrieve",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "cachedContent",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 98,
                                                    "char": 48
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 98,
                                                "char": 48
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 98,
                                        "char": 49
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 99,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 100,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 82,
                                "char": 66
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 83,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                        "line": 83,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                    "line": 82,
                    "last-line": 109,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 110,
                                "char": 37
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 110,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 110,
                                "char": 53
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 110,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 110,
                                "char": 70
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 110,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 110,
                                "char": 97
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 110,
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 112,
                                    "char": 14
                                },
                                {
                                    "variable": "frontend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 112,
                                    "char": 24
                                },
                                {
                                    "variable": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 112,
                                    "char": 39
                                },
                                {
                                    "variable": "preparedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 112,
                                    "char": 56
                                },
                                {
                                    "variable": "tmp",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 112,
                                    "char": 61
                                },
                                {
                                    "variable": "tt1",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 112,
                                    "char": 66
                                },
                                {
                                    "variable": "success",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 112,
                                    "char": 75
                                },
                                {
                                    "variable": "isBuffering",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 112,
                                    "char": 88
                                },
                                {
                                    "variable": "options",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 113,
                                    "char": 11
                                },
                                {
                                    "variable": "keys",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 113,
                                    "char": 17
                                },
                                {
                                    "variable": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 113,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 115,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 115,
                                    "char": 16
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 115,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 115,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 116,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 116,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 116,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 116,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 117,
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
                                                        "value": "_PHCX",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 118,
                                                        "char": 26
                                                    },
                                                    "right": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 118,
                                                            "char": 33
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "_prefix",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 118,
                                                            "char": 42
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 118,
                                                        "char": 42
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 118,
                                                    "char": 42
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 118,
                                                    "char": 51
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 118,
                                                "char": 51
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 118,
                                            "char": 51
                                        },
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_lastKey",
                                            "expr": {
                                                "type": "variable",
                                                "value": "lastKey",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 119,
                                                "char": 29
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 119,
                                            "char": 29
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 120,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 122,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 122,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 122,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 123,
                                                    "char": 53
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 123,
                                                "char": 53
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 123,
                                        "char": 54
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 124,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 126,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 126,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_frontend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 126,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 126,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 126,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 127,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "content",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 127,
                                    "char": 16
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 127,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 127,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 128,
                                                    "char": 33
                                                },
                                                "name": "getContent",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 128,
                                                "char": 46
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 128,
                                            "char": 46
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 129,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 130,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 130,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 131,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 133,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 133,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 133,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 133,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 133,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 134,
                                                    "char": 35
                                                },
                                                "name": "beforeStore",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "cachedContent",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 134,
                                                            "char": 61
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 134,
                                                        "char": 61
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 134,
                                                "char": 62
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 134,
                                            "char": 62
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 135,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 136,
                                                "char": 39
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 136,
                                            "char": 39
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 137,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 142,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 142,
                                    "char": 17
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 142,
                                    "char": 24
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 142,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 143,
                                                    "char": 19
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastLifetime",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 143,
                                                    "char": 33
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 143,
                                                "char": 33
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 143,
                                            "char": 33
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 144,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "variable",
                                            "value": "tmp",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 144,
                                            "char": 12
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 144,
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
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 145,
                                                            "char": 24
                                                        },
                                                        "name": "getLifetime",
                                                        "call-type": 1,
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 145,
                                                        "char": 38
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 145,
                                                    "char": 38
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 146,
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 147,
                                                        "char": 18
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 147,
                                                    "char": 18
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 148,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 149,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 150,
                                                "char": 22
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 150,
                                            "char": 22
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 151,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 153,
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
                                        "name": "xcache_set",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 153,
                                                    "char": 35
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 153,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "preparedContent",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 153,
                                                    "char": 52
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 153,
                                                "char": 52
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "tt1",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 153,
                                                    "char": 57
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 153,
                                                "char": 57
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 153,
                                        "char": 58
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 153,
                                    "char": 58
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 155,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "success",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 155,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 155,
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
                                                    "value": "Failed storing the data in xcache",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 156,
                                                    "char": 59
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 156,
                                                "char": 59
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 156,
                                        "char": 60
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 157,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 159,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 159,
                                            "char": 30
                                        },
                                        "name": "isBuffering",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 159,
                                        "char": 44
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 159,
                                    "char": 44
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 161,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "stopBuffer",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 161,
                                    "char": 19
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 161,
                                    "char": 26
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 161,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 162,
                                            "char": 13
                                        },
                                        "name": "stop",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 162,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 163,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 165,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "isBuffering",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 165,
                                    "char": 20
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 165,
                                    "char": 27
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 165,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "echo",
                                    "expressions": [
                                        {
                                            "type": "variable",
                                            "value": "cachedContent",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 166,
                                            "char": 22
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 167,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 169,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 169,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 169,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 171,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "success",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 171,
                                "char": 14
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
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 172,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 172,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 172,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 172,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 174,
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
                                                "value": "specialKey",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 174,
                                                "char": 53
                                            },
                                            "right": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 174,
                                                        "char": 31
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "_options",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 174,
                                                        "char": 40
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 174,
                                                    "char": 40
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "statsKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 174,
                                                    "char": 51
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 174,
                                                "char": 53
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 174,
                                            "char": 53
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 174,
                                        "char": 53
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
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 175,
                                                            "char": 62
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 175,
                                                        "char": 62
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 175,
                                                "char": 63
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 176,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 178,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not-equals",
                                        "left": {
                                            "type": "variable",
                                            "value": "specialKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 178,
                                            "char": 19
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 178,
                                            "char": 24
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 178,
                                        "char": 24
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
                                                        "type": "fcall",
                                                        "name": "xcache_get",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "specialKey",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                                    "line": 183,
                                                                    "char": 37
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                                "line": 183,
                                                                "char": 37
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 183,
                                                        "char": 38
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 183,
                                                    "char": 38
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 184,
                                            "char": 6
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 184,
                                                        "char": 21
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 184,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "array",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 184,
                                                    "char": 31
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 184,
                                                "char": 31
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
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                                "line": 185,
                                                                "char": 19
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 185,
                                                            "char": 19
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 186,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 188,
                                            "char": 7
                                        },
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
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 188,
                                                            "char": 21
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "tt1",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 188,
                                                        "char": 28
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 188,
                                                    "char": 28
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 189,
                                            "char": 14
                                        },
                                        {
                                            "type": "fcall",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "xcache_set",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "specialKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 189,
                                                            "char": 26
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 189,
                                                        "char": 26
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "keys",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 189,
                                                            "char": 32
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 189,
                                                        "char": 32
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 189,
                                                "char": 33
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 190,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 191,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 193,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "success",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 193,
                                "char": 17
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 194,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 111,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                        "line": 111,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                    "line": 110,
                    "last-line": 201,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 202,
                            "char": 36
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "prefixedKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 204,
                                    "char": 18
                                },
                                {
                                    "variable": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 204,
                                    "char": 30
                                },
                                {
                                    "variable": "keys",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 204,
                                    "char": 36
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 206,
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
                                                "value": "_PHCX",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 206,
                                                "char": 29
                                            },
                                            "right": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 206,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 206,
                                                    "char": 45
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 206,
                                                "char": 45
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 206,
                                            "char": 45
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "keyName",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 206,
                                            "char": 54
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 206,
                                        "char": 54
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 206,
                                    "char": 54
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 208,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 208,
                                        "char": 52
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 208,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 208,
                                                "char": 39
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 208,
                                            "char": 39
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "statsKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 208,
                                            "char": 50
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 208,
                                        "char": 52
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 208,
                                    "char": 52
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 208,
                                "char": 52
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 209,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 209,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 209,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 210,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 212,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "variable",
                                    "value": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 212,
                                    "char": 18
                                },
                                "right": {
                                    "type": "string",
                                    "value": "",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 212,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 212,
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
                                                "type": "fcall",
                                                "name": "xcache_get",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "specialKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 213,
                                                            "char": 36
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 213,
                                                        "char": 36
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 213,
                                                "char": 37
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 213,
                                            "char": 37
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 214,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 214,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 214,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "array",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 214,
                                            "char": 30
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 214,
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
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 215,
                                                        "char": 18
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 215,
                                                    "char": 18
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 216,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 218,
                                    "char": 8
                                },
                                {
                                    "type": "unset",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "keys",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 218,
                                            "char": 14
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "prefixedKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 218,
                                            "char": 26
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 218,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 220,
                                    "char": 13
                                },
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "xcache_set",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "specialKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 220,
                                                    "char": 25
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 220,
                                                "char": 25
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "keys",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 220,
                                                    "char": 31
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 220,
                                                "char": 31
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 220,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 221,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 222,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Deletes a value from the cache by its key\n\t *\n\t * @param int|string keyName\n\t * @return boolean\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                    "line": 202,
                    "last-line": 233,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 234,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 234,
                            "char": 48
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "options",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 236,
                                    "char": 14
                                },
                                {
                                    "variable": "prefixed",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 236,
                                    "char": 24
                                },
                                {
                                    "variable": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 236,
                                    "char": 36
                                },
                                {
                                    "variable": "keys",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 236,
                                    "char": 42
                                },
                                {
                                    "variable": "retval",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 236,
                                    "char": 50
                                },
                                {
                                    "variable": "key",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 236,
                                    "char": 55
                                },
                                {
                                    "variable": "realKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 236,
                                    "char": 64
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 238,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 238,
                                    "char": 14
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 238,
                                "char": 14
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "prefixed",
                                            "expr": {
                                                "type": "string",
                                                "value": "_PHCX",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 239,
                                                "char": 26
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 239,
                                            "char": 26
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
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
                                            "variable": "prefixed",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "string",
                                                    "value": "_PHCX",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 241,
                                                    "char": 27
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 241,
                                                    "char": 35
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 241,
                                                "char": 35
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 241,
                                            "char": 35
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 242,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 244,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 244,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 244,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 244,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 244,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 246,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 246,
                                        "char": 52
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 246,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 246,
                                                "char": 39
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 246,
                                            "char": 39
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "statsKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 246,
                                            "char": 50
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 246,
                                        "char": 52
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 246,
                                    "char": 52
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 246,
                                "char": 52
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 247,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 247,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 247,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 248,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 250,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 250,
                                    "char": 18
                                },
                                "right": {
                                    "type": "string",
                                    "value": "",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 250,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 250,
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
                                                    "value": "Cached keys need to be enabled to use this function (options['statsKey'] == '_PHCX')!",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 251,
                                                    "char": 111
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 251,
                                                "char": 111
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 251,
                                        "char": 112
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 252,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 258,
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
                                        "name": "xcache_get",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "specialKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 258,
                                                    "char": 35
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 258,
                                                "char": 35
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 258,
                                        "char": 36
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 258,
                                    "char": 36
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 259,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 259,
                                        "char": 19
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 259,
                                    "char": 19
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 259,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 259,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 260,
                                        "char": 13
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 261,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 263,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "retval",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 263,
                                        "char": 18
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 263,
                                    "char": 18
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 265,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "keys",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 265,
                                "char": 22
                            },
                            "key": "key",
                            "value": "_",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "starts_with",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "key",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 266,
                                                    "char": 22
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 266,
                                                "char": 22
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "prefixed",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 266,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 266,
                                                "char": 32
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 266,
                                        "char": 34
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "realKey",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "substr",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "key",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                                    "line": 267,
                                                                    "char": 29
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                                "line": 267,
                                                                "char": 29
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "int",
                                                                    "value": "5",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                                    "line": 267,
                                                                    "char": 32
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                                "line": 267,
                                                                "char": 32
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 267,
                                                        "char": 33
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 267,
                                                    "char": 33
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 268,
                                            "char": 7
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable-append",
                                                    "operator": "assign",
                                                    "variable": "retval",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "realKey",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 268,
                                                        "char": 27
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 268,
                                                    "char": 27
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 269,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 270,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 272,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "retval",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 272,
                                "char": 16
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 273,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 235,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                        "line": 235,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                    "line": 234,
                    "last-line": 280,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 281,
                                "char": 43
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 281,
                            "char": 43
                        },
                        {
                            "type": "parameter",
                            "name": "lifetime",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 281,
                                "char": 60
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 281,
                            "char": 60
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 283,
                                    "char": 14
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 285,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 285,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 285,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 286,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 286,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 286,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 286,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 287,
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
                                                        "value": "_PHCX",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 288,
                                                        "char": 26
                                                    },
                                                    "right": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 288,
                                                            "char": 33
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "_prefix",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 288,
                                                            "char": 42
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 288,
                                                        "char": 42
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 288,
                                                    "char": 42
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 288,
                                                    "char": 51
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 288,
                                                "char": 51
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 288,
                                            "char": 51
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 289,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 291,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "lastKey",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 291,
                                "char": 14
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "xcache_isset",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 292,
                                                    "char": 31
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 292,
                                                "char": 31
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 292,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 293,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 294,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 294,
                                "char": 15
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 295,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 282,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                        "line": 282,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                    "line": 281,
                    "last-line": 301,
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
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 302,
                            "char": 39
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 302,
                                "char": 54
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 302,
                            "char": 54
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 304,
                                    "char": 14
                                },
                                {
                                    "variable": "newVal",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 304,
                                    "char": 22
                                },
                                {
                                    "variable": "origVal",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 304,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 306,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 306,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 306,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 307,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 307,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 307,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 307,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 308,
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
                                                        "value": "_PHCX",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 309,
                                                        "char": 26
                                                    },
                                                    "right": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 309,
                                                            "char": 33
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "_prefix",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 309,
                                                            "char": 42
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 309,
                                                        "char": 42
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 309,
                                                    "char": 42
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 309,
                                                    "char": 51
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 309,
                                                "char": 51
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 309,
                                            "char": 51
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 310,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 312,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 312,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 312,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 313,
                                                    "char": 53
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 313,
                                                "char": 53
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 313,
                                        "char": 54
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 314,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 316,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "function_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "xcache_inc",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 316,
                                            "char": 34
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 316,
                                        "char": 34
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 316,
                                "char": 36
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "newVal",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "xcache_inc",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "lastKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 317,
                                                            "char": 35
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 317,
                                                        "char": 35
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "value",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 317,
                                                            "char": 42
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 317,
                                                        "char": 42
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 317,
                                                "char": 43
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 317,
                                            "char": 43
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 318,
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
                                            "variable": "origVal",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "xcache_get",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "lastKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 319,
                                                            "char": 36
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 319,
                                                        "char": 36
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 319,
                                                "char": 37
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 319,
                                            "char": 37
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 320,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "newVal",
                                            "expr": {
                                                "type": "sub",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "origVal",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 320,
                                                    "char": 25
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 320,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 320,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 320,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 321,
                                    "char": 13
                                },
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "xcache_set",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 321,
                                                    "char": 22
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 321,
                                                "char": 22
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "newVal",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 321,
                                                    "char": 30
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 321,
                                                "char": 30
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 321,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 322,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 324,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "newVal",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 324,
                                "char": 16
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 325,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t* Atomic increment of a given key, by number $value\n\t*\n\t* @param string keyName\n\t*",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 303,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                        "line": 303,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                    "line": 302,
                    "last-line": 331,
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
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 332,
                            "char": 35
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 332,
                                "char": 50
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 332,
                            "char": 50
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 334,
                                    "char": 14
                                },
                                {
                                    "variable": "newVal",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 334,
                                    "char": 22
                                },
                                {
                                    "variable": "origVal",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 334,
                                    "char": 31
                                },
                                {
                                    "variable": "success",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 334,
                                    "char": 40
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 336,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 336,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 336,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 337,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 337,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 337,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 337,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 338,
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
                                                        "value": "_PHCX",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 339,
                                                        "char": 26
                                                    },
                                                    "right": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 339,
                                                            "char": 33
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "_prefix",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 339,
                                                            "char": 42
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 339,
                                                        "char": 42
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 339,
                                                    "char": 42
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 339,
                                                    "char": 51
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 339,
                                                "char": 51
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 339,
                                            "char": 51
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 340,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 342,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 342,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 342,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 343,
                                                    "char": 53
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 343,
                                                "char": 53
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 343,
                                        "char": 54
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 344,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 346,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "function_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "xcache_dec",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 346,
                                            "char": 34
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 346,
                                        "char": 34
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 346,
                                "char": 36
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "newVal",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "xcache_dec",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "lastKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 347,
                                                            "char": 35
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 347,
                                                        "char": 35
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "value",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 347,
                                                            "char": 42
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 347,
                                                        "char": 42
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 347,
                                                "char": 43
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 347,
                                            "char": 43
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 348,
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
                                            "variable": "origVal",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "xcache_get",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "lastKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 349,
                                                            "char": 36
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 349,
                                                        "char": 36
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 349,
                                                "char": 37
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 349,
                                            "char": 37
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 350,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "newVal",
                                            "expr": {
                                                "type": "sub",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "origVal",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 350,
                                                    "char": 25
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "value",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 350,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 350,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 350,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 351,
                                    "char": 6
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
                                                "name": "xcache_set",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "lastKey",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 351,
                                                            "char": 36
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 351,
                                                        "char": 36
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "newVal",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 351,
                                                            "char": 44
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 351,
                                                        "char": 44
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 351,
                                                "char": 45
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 351,
                                            "char": 45
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 352,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 354,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "newVal",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 354,
                                "char": 16
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 355,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Atomic decrement of a given key, by number $value\n\t *\n\t * @param string keyName\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 333,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                        "line": 333,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                    "line": 332,
                    "last-line": 359,
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 362,
                                    "char": 14
                                },
                                {
                                    "variable": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 362,
                                    "char": 26
                                },
                                {
                                    "variable": "keys",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 362,
                                    "char": 32
                                },
                                {
                                    "variable": "key",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 362,
                                    "char": 37
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 364,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 364,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 364,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 364,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 364,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 366,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 366,
                                        "char": 52
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 366,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 366,
                                                "char": 39
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 366,
                                            "char": 39
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "statsKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 366,
                                            "char": 50
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 366,
                                        "char": 52
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 366,
                                    "char": 52
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 366,
                                "char": 52
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 367,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 367,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 367,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 368,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 370,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "variable",
                                    "value": "specialKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 370,
                                    "char": 18
                                },
                                "right": {
                                    "type": "string",
                                    "value": "",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 370,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 370,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 371,
                                                    "char": 111
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 371,
                                                "char": 111
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 371,
                                        "char": 112
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 372,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 374,
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
                                        "name": "xcache_get",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "specialKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 374,
                                                    "char": 35
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 374,
                                                "char": 35
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 374,
                                        "char": 36
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 374,
                                    "char": 36
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 376,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 376,
                                        "char": 19
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 376,
                                    "char": 19
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 376,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 376,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "for",
                                    "expr": {
                                        "type": "variable",
                                        "value": "keys",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 377,
                                        "char": 23
                                    },
                                    "key": "key",
                                    "value": "_",
                                    "reverse": 0,
                                    "statements": [
                                        {
                                            "type": "unset",
                                            "expr": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "keys",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 378,
                                                    "char": 15
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "key",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 378,
                                                    "char": 19
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 378,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 379,
                                            "char": 16
                                        },
                                        {
                                            "type": "fcall",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "xcache_unset",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                            "line": 379,
                                                            "char": 21
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                        "line": 379,
                                                        "char": 21
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 379,
                                                "char": 22
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                            "line": 380,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 381,
                                    "char": 13
                                },
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "xcache_set",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "specialKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 381,
                                                    "char": 25
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 381,
                                                "char": 25
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "keys",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                    "line": 381,
                                                    "char": 31
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                                "line": 381,
                                                "char": 31
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                        "line": 381,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                    "line": 382,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 384,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 384,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                            "line": 385,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                                "line": 361,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                        "line": 361,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
                    "line": 360,
                    "last-line": 386,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
            "line": 56,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/xcache.zep",
        "line": 56,
        "char": 5
    }
]