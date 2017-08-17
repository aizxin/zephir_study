[
    {
        "type": "namespace",
        "name": "Vof\\Logger\\Adapter",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Adapter",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                "line": 22,
                "char": 23
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Exception",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                "line": 23,
                "char": 25
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
        "line": 24,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\FormatterInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                "line": 24,
                "char": 34
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
        "line": 25,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Formatter\\Line",
                "alias": "LineFormatter",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                "line": 25,
                "char": 47
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
        "line": 41,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Logger\\Adapter\\File\n *\n * Adapter to store logs in plain text files\n *\n *<code>\n * $logger = new \\Vof\\Logger\\Adapter\\File(\"app\/logs\/test.log\");\n *\n * $logger->log(\"This is a message\");\n * $logger->log(\\Vof\\Logger::ERROR, \"This is an error\");\n * $logger->error(\"This is another error\");\n *\n * $logger->close();\n *<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
        "line": 42,
        "char": 5
    },
    {
        "type": "class",
        "name": "File",
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
                    "name": "_fileHandler",
                    "docblock": "**\n\t * File handler resource\n\t *\n\t * @var resource\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                    "line": 54,
                    "char": 3
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_path",
                    "docblock": "**\n\t * File Path\n\t *",
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 55,
                            "char": 24
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                    "line": 59,
                    "char": 3
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_options",
                    "docblock": "**\n\t * Path options\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                    "line": 67,
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
                            "name": "name",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 68,
                            "char": 42
                        },
                        {
                            "type": "parameter",
                            "name": "options",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                "line": 68,
                                "char": 58
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 68,
                            "char": 58
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "mode",
                                    "expr": {
                                        "type": "null",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 70,
                                        "char": 18
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 70,
                                    "char": 18
                                },
                                {
                                    "variable": "handler",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 70,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 72,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 72,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 72,
                                    "char": 23
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 72,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                "line": 72,
                                "char": 33
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fetch",
                                        "left": {
                                            "type": "variable",
                                            "value": "mode",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 73,
                                            "char": 35
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 73,
                                                "char": 26
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "mode",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 73,
                                                "char": 33
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 73,
                                            "char": 35
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 73,
                                        "char": 35
                                    },
                                    "statements": [
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "memstr",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "mode",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                            "line": 74,
                                                            "char": 19
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                        "line": 74,
                                                        "char": 19
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "r",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                            "line": 74,
                                                            "char": 24
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                        "line": 74,
                                                        "char": 24
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 74,
                                                "char": 26
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
                                                                    "value": "Logger must be opened in append or write mode",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                                    "line": 75,
                                                                    "char": 73
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                                "line": 75,
                                                                "char": 73
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                        "line": 75,
                                                        "char": 74
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                    "line": 76,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 77,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 78,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 80,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "mode",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 80,
                                    "char": 13
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 80,
                                    "char": 20
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                "line": 80,
                                "char": 20
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "mode",
                                            "expr": {
                                                "type": "string",
                                                "value": "ab",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 81,
                                                "char": 19
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 81,
                                            "char": 19
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 82,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 87,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "handler",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "fopen",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "name",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                    "line": 87,
                                                    "char": 27
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 87,
                                                "char": 27
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "mode",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                    "line": 87,
                                                    "char": 33
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 87,
                                                "char": 33
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 87,
                                        "char": 34
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 87,
                                    "char": 34
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 88,
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
                                        "value": "handler",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 88,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 88,
                                    "char": 22
                                },
                                "right": {
                                    "type": "string",
                                    "value": "resource",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 88,
                                    "char": 35
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                "line": 88,
                                "char": 35
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
                                                            "type": "string",
                                                            "value": "Can't open log file at '",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                            "line": 89,
                                                            "char": 51
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "name",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                            "line": 89,
                                                            "char": 58
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                        "line": 89,
                                                        "char": 58
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "'",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                        "line": 89,
                                                        "char": 63
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                    "line": 89,
                                                    "char": 63
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 89,
                                                "char": 63
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 89,
                                        "char": 64
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 90,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 92,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_path",
                                    "expr": {
                                        "type": "variable",
                                        "value": "name",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 92,
                                        "char": 25
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 92,
                                    "char": 25
                                },
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_options",
                                    "expr": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 93,
                                        "char": 28
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 93,
                                    "char": 28
                                },
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_fileHandler",
                                    "expr": {
                                        "type": "variable",
                                        "value": "handler",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 94,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 94,
                                    "char": 32
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 95,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Logger\\Adapter\\File constructor\n\t *\n\t * @param string name\n\t * @param array options\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                    "line": 68,
                    "last-line": 99,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getFormatter",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-identical",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 102,
                                            "char": 18
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_formatter",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 102,
                                            "char": 32
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 102,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 102,
                                    "char": 32
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 102,
                                    "char": 43
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                "line": 102,
                                "char": 43
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_formatter",
                                            "expr": {
                                                "type": "new",
                                                "class": "LineFormatter",
                                                "dynamic": 0,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 103,
                                                "char": 46
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 103,
                                            "char": 46
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 104,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 106,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 106,
                                    "char": 15
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_formatter",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 106,
                                    "char": 26
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                "line": 106,
                                "char": 26
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 107,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns the internal formatter\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "FormatterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 101,
                                    "char": 2
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                "line": 101,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                        "line": 101,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                    "line": 100,
                    "last-line": 111,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "logInternal",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 112,
                            "char": 44
                        },
                        {
                            "type": "parameter",
                            "name": "type",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 112,
                            "char": 54
                        },
                        {
                            "type": "parameter",
                            "name": "time",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 112,
                            "char": 64
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 112,
                            "char": 79
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "fileHandler",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 114,
                                    "char": 18
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 116,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "fileHandler",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 116,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_fileHandler",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 116,
                                            "char": 39
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 116,
                                        "char": 39
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 116,
                                    "char": 39
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 117,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-identical",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "fileHandler",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 117,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 117,
                                    "char": 27
                                },
                                "right": {
                                    "type": "string",
                                    "value": "resource",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 117,
                                    "char": 40
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                "line": 117,
                                "char": 40
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
                                                    "value": "Cannot send message to the log because it is invalid",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                    "line": 118,
                                                    "char": 78
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 118,
                                                "char": 78
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 118,
                                        "char": 79
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 119,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 121,
                            "char": 8
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "fwrite",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "fileHandler",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 121,
                                            "char": 21
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 121,
                                        "char": 21
                                    },
                                    {
                                        "parameter": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                    "line": 121,
                                                    "char": 28
                                                },
                                                "name": "getFormatter",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 121,
                                                "char": 44
                                            },
                                            "name": "format",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "message",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                        "line": 121,
                                                        "char": 59
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                    "line": 121,
                                                    "char": 59
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "type",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                        "line": 121,
                                                        "char": 65
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                    "line": 121,
                                                    "char": 65
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "time",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                        "line": 121,
                                                        "char": 71
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                    "line": 121,
                                                    "char": 71
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "context",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                        "line": 121,
                                                        "char": 80
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                    "line": 121,
                                                    "char": 80
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 121,
                                            "char": 81
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 121,
                                        "char": 81
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                "line": 121,
                                "char": 82
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 122,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Writes the log to the file itself\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                        "line": 113,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                    "line": 112,
                    "last-line": 126,
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
                                "type": "fcall",
                                "name": "fclose",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 129,
                                                "char": 22
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_fileHandler",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 129,
                                                "char": 35
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 129,
                                            "char": 35
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 129,
                                        "char": 35
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                "line": 129,
                                "char": 36
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 130,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n \t * Closes the logger\n \t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                "line": 128,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                        "line": 128,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                    "line": 127,
                    "last-line": 134,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__wakeup",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "path",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 137,
                                    "char": 11
                                },
                                {
                                    "variable": "mode",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 137,
                                    "char": 17
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 139,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "path",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 139,
                                            "char": 19
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_path",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 139,
                                            "char": 25
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 139,
                                        "char": 25
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 139,
                                    "char": 25
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 140,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-identical",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "path",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 140,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 140,
                                    "char": 20
                                },
                                "right": {
                                    "type": "string",
                                    "value": "string",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 140,
                                    "char": 31
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                "line": 140,
                                "char": 31
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
                                                    "value": "Invalid data passed to Vof\\\\Logger\\\\Adapter\\\\File::__wakeup()",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                    "line": 141,
                                                    "char": 87
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 141,
                                                "char": 87
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 141,
                                        "char": 88
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 142,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 144,
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
                                        "value": "mode",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 144,
                                        "char": 42
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 144,
                                                "char": 24
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 144,
                                                "char": 33
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 144,
                                            "char": 33
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "mode",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 144,
                                            "char": 40
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 144,
                                        "char": 42
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 144,
                                    "char": 42
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                "line": 144,
                                "char": 42
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "mode",
                                            "expr": {
                                                "type": "string",
                                                "value": "ab",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 145,
                                                "char": 19
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 145,
                                            "char": 19
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 146,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 148,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-identical",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "mode",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 148,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 148,
                                    "char": 20
                                },
                                "right": {
                                    "type": "string",
                                    "value": "string",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 148,
                                    "char": 31
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                "line": 148,
                                "char": 31
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
                                                    "value": "Invalid data passed to Vof\\\\Logger\\\\Adapter\\\\File::__wakeup()",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                    "line": 149,
                                                    "char": 87
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 149,
                                                "char": 87
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 149,
                                        "char": 88
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 150,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 152,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "memstr",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "mode",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 152,
                                            "char": 17
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 152,
                                        "char": 17
                                    },
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "r",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                            "line": 152,
                                            "char": 22
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 152,
                                        "char": 22
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                "line": 152,
                                "char": 24
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
                                                    "value": "Logger must be opened in append or write mode",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                    "line": 153,
                                                    "char": 71
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 153,
                                                "char": 71
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 153,
                                        "char": 72
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 154,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 159,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_fileHandler",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "fopen",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "path",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                    "line": 159,
                                                    "char": 38
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 159,
                                                "char": 38
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "mode",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                    "line": 159,
                                                    "char": 44
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                                "line": 159,
                                                "char": 44
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                        "line": 159,
                                        "char": 45
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                                    "line": 159,
                                    "char": 45
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                            "line": 160,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Opens the internal file handler after unserialization\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
                    "line": 135,
                    "last-line": 161,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
            "line": 42,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/file.zep",
        "line": 42,
        "char": 5
    }
]