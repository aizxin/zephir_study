[
    {
        "type": "namespace",
        "name": "Vof\\Cache",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Exception",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                "line": 22,
                "char": 24
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\BackendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                "line": 23,
                "char": 31
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
        "line": 85,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Cache\\Multiple\n *\n * Allows to read to chained backend adapters writing to multiple backends\n *\n *<code>\n * use Vof\\Cache\\Frontend\\Data as DataFrontend;\n * use Vof\\Cache\\Multiple;\n * use Vof\\Cache\\Backend\\Apc as ApcCache;\n * use Vof\\Cache\\Backend\\Memcache as MemcacheCache;\n * use Vof\\Cache\\Backend\\File as FileCache;\n *\n * $ultraFastFrontend = new DataFrontend(\n *     [\n *         \"lifetime\" => 3600,\n *     ]\n * );\n *\n * $fastFrontend = new DataFrontend(\n *     [\n *         \"lifetime\" => 86400,\n *     ]\n * );\n *\n * $slowFrontend = new DataFrontend(\n *     [\n *         \"lifetime\" => 604800,\n *     ]\n * );\n *\n * \/\/Backends are registered from the fastest to the slower\n * $cache = new Multiple(\n *     [\n *         new ApcCache(\n *             $ultraFastFrontend,\n *             [\n *                 \"prefix\" => \"cache\",\n *             ]\n *         ),\n *         new MemcacheCache(\n *             $fastFrontend,\n *             [\n *                 \"prefix\" => \"cache\",\n *                 \"host\"   => \"localhost\",\n *                 \"port\"   => \"11211\",\n *             ]\n *         ),\n *         new FileCache(\n *             $slowFrontend,\n *             [\n *                 \"prefix\"   => \"cache\",\n *                 \"cacheDir\" => \"..\/app\/cache\/\",\n *             ]\n *         ),\n *     ]\n * );\n *\n * \/\/Save, saves in every backend\n * $cache->save(\"my-key\", $data);\n *<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
        "line": 86,
        "char": 5
    },
    {
        "type": "class",
        "name": "Multiple",
        "abstract": 0,
        "final": 0,
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_backends",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                    "line": 95,
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
                            "name": "backends",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 96,
                                "char": 45
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 96,
                            "char": 45
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
                                        "value": "backends",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                        "line": 98,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 98,
                                    "char": 23
                                },
                                "right": {
                                    "type": "string",
                                    "value": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 98,
                                    "char": 32
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 98,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not-equals",
                                        "left": {
                                            "type": "typeof",
                                            "left": {
                                                "type": "variable",
                                                "value": "backends",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                "line": 99,
                                                "char": 24
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                            "line": 99,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "array",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                            "line": 99,
                                            "char": 34
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                        "line": 99,
                                        "char": 34
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
                                                            "value": "The backends must be an array",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                            "line": 100,
                                                            "char": 56
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                        "line": 100,
                                                        "char": 56
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                "line": 100,
                                                "char": 57
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                            "line": 101,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 102,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_backends",
                                            "expr": {
                                                "type": "variable",
                                                "value": "backends",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                "line": 102,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                            "line": 102,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 103,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 104,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Cache\\Multiple constructor\n\t *\n\t * @param\tVof\\Cache\\BackendInterface[] backends\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                    "line": 96,
                    "last-line": 108,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "push",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "backend",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "BackendInterface",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 109,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 109,
                            "char": 49
                        }
                    ],
                    "statements": [
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property-append",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_backends",
                                    "expr": {
                                        "type": "variable",
                                        "value": "backend",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                        "line": 111,
                                        "char": 34
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 111,
                                    "char": 34
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 112,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 112,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 113,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Adds a backend\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "Multiple",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 110,
                                    "char": 2
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 110,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                        "line": 110,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                    "line": 109,
                    "last-line": 121,
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
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 122,
                            "char": 33
                        },
                        {
                            "type": "parameter",
                            "name": "lifetime",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 122,
                                "char": 50
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 122,
                            "char": 50
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "backend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 124,
                                    "char": 14
                                },
                                {
                                    "variable": "content",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 124,
                                    "char": 23
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 126,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 126,
                                    "char": 23
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_backends",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 126,
                                    "char": 34
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 126,
                                "char": 34
                            },
                            "value": "backend",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "content",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "backend",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                    "line": 127,
                                                    "char": 26
                                                },
                                                "name": "get",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "keyName",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                            "line": 127,
                                                            "char": 38
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                        "line": 127,
                                                        "char": 38
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "lifetime",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                            "line": 127,
                                                            "char": 48
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                        "line": 127,
                                                        "char": 48
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                "line": 127,
                                                "char": 49
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                            "line": 127,
                                            "char": 49
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 128,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not-equals",
                                        "left": {
                                            "type": "variable",
                                            "value": "content",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                            "line": 128,
                                            "char": 16
                                        },
                                        "right": {
                                            "type": "null",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                            "line": 128,
                                            "char": 23
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                        "line": 128,
                                        "char": 23
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "variable",
                                                "value": "content",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                "line": 129,
                                                "char": 19
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                            "line": 130,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 131,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 133,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 133,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 134,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns a cached content reading the internal backends\n\t *\n\t * @param string|int keyName\n\t * @param int lifetime\n\t * @return mixed\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                    "line": 122,
                    "last-line": 141,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "start",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "keyName",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 142,
                            "char": 35
                        },
                        {
                            "type": "parameter",
                            "name": "lifetime",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 142,
                                "char": 52
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 142,
                            "char": 52
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "backend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 144,
                                    "char": 14
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 146,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 146,
                                    "char": 23
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_backends",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 146,
                                    "char": 34
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 146,
                                "char": 34
                            },
                            "value": "backend",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "backend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                            "line": 147,
                                            "char": 12
                                        },
                                        "name": "start",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                    "line": 147,
                                                    "char": 26
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                "line": 147,
                                                "char": 26
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "lifetime",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                    "line": 147,
                                                    "char": 36
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                "line": 147,
                                                "char": 36
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                        "line": 147,
                                        "char": 37
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 148,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 149,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Starts every backend\n\t *\n\t * @param string|int keyName\n\t * @param int lifetime\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                        "line": 143,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                    "line": 142,
                    "last-line": 158,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 159,
                                "char": 41
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 159,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 159,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 159,
                            "char": 57
                        },
                        {
                            "type": "parameter",
                            "name": "lifetime",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 159,
                                "char": 74
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 159,
                            "char": 74
                        },
                        {
                            "type": "parameter",
                            "name": "stopBuffer",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 159,
                                "char": 93
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 159,
                            "char": 93
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "backend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 161,
                                    "char": 14
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 163,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 163,
                                    "char": 23
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_backends",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 163,
                                    "char": 34
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 163,
                                "char": 34
                            },
                            "value": "backend",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "backend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                            "line": 164,
                                            "char": 12
                                        },
                                        "name": "save",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                    "line": 164,
                                                    "char": 25
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                "line": 164,
                                                "char": 25
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "content",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                    "line": 164,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                "line": 164,
                                                "char": 34
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "lifetime",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                    "line": 164,
                                                    "char": 44
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                "line": 164,
                                                "char": 44
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "stopBuffer",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                    "line": 164,
                                                    "char": 56
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                "line": 164,
                                                "char": 56
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                        "line": 164,
                                        "char": 57
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 165,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 166,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t* Stores cached content into all backends and stops the frontend\n\t*\n\t* @param string keyName\n\t* @param string content\n\t* @param int lifetime\n\t* @param boolean stopBuffer\n\t*",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                        "line": 160,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                    "line": 159,
                    "last-line": 173,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 174,
                            "char": 36
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "backend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 176,
                                    "char": 14
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 178,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 178,
                                    "char": 23
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_backends",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 178,
                                    "char": 34
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 178,
                                "char": 34
                            },
                            "value": "backend",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "backend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                            "line": 179,
                                            "char": 12
                                        },
                                        "name": "delete",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                    "line": 179,
                                                    "char": 27
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                "line": 179,
                                                "char": 27
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                        "line": 179,
                                        "char": 28
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 180,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 182,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 182,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 183,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Deletes a value from each backend\n\t *\n\t * @param string|int keyName\n\t * @return boolean\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 175,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                        "line": 175,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                    "line": 174,
                    "last-line": 190,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 191,
                                "char": 43
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 191,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 191,
                                "char": 60
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 191,
                            "char": 60
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "backend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 193,
                                    "char": 14
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 195,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 195,
                                    "char": 23
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_backends",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 195,
                                    "char": 34
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 195,
                                "char": 34
                            },
                            "value": "backend",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "equals",
                                        "left": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "backend",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                "line": 196,
                                                "char": 15
                                            },
                                            "name": "exists",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "keyName",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                        "line": 196,
                                                        "char": 30
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                    "line": 196,
                                                    "char": 30
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "lifetime",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                        "line": 196,
                                                        "char": 40
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                    "line": 196,
                                                    "char": 40
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                            "line": 196,
                                            "char": 43
                                        },
                                        "right": {
                                            "type": "bool",
                                            "value": "true",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                            "line": 196,
                                            "char": 50
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                        "line": 196,
                                        "char": 50
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "true",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                                "line": 197,
                                                "char": 16
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                            "line": 198,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 199,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 201,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 201,
                                "char": 15
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 202,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Checks if cache exists in at least one backend\n\t *\n\t * @param  string|int keyName\n\t * @param  int lifetime\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 192,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                        "line": 192,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                    "line": 191,
                    "last-line": 206,
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
                                    "variable": "backend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 209,
                                    "char": 14
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 211,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 211,
                                    "char": 23
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_backends",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 211,
                                    "char": 34
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 211,
                                "char": 34
                            },
                            "value": "backend",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "backend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                            "line": 212,
                                            "char": 12
                                        },
                                        "name": "flush",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                        "line": 212,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                    "line": 213,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 215,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 215,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                            "line": 216,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Flush all backend(s)\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                                "line": 208,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                        "line": 208,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
                    "line": 207,
                    "last-line": 217,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
            "line": 86,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/multiple.zep",
        "line": 86,
        "char": 5
    }
]