[
    {
        "type": "namespace",
        "name": "Vof\\Logger\\Adapter",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Exception",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                "line": 22,
                "char": 25
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Adapter",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                "line": 23,
                "char": 23
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
        "line": 24,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\FormatterInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                "line": 24,
                "char": 34
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
        "line": 25,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Formatter\\Line",
                "alias": "LineFormatter",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                "line": 25,
                "char": 47
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
        "line": 42,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Logger\\Adapter\\Stream\n *\n * Sends logs to a valid PHP stream\n *\n * <code>\n * use Vof\\Logger;\n * use Vof\\Logger\\Adapter\\Stream;\n *\n * $logger = new Stream(\"php:\/\/stderr\");\n *\n * $logger->log(\"This is a message\");\n * $logger->log(Logger::ERROR, \"This is an error\");\n * $logger->error(\"This is another error\");\n * <\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
        "line": 43,
        "char": 5
    },
    {
        "type": "class",
        "name": "Stream",
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
                    "name": "_stream",
                    "docblock": "**\n\t * File handler resource\n\t *\n\t * @var resource\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                    "line": 58,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 59,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                "line": 59,
                                "char": 58
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 59,
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 61,
                                    "char": 11
                                },
                                {
                                    "variable": "stream",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 61,
                                    "char": 19
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 63,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "mode",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 63,
                                    "char": 34
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                        "line": 63,
                                        "char": 25
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "mode",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                        "line": 63,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 63,
                                    "char": 34
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                "line": 63,
                                "char": 34
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                    "line": 64,
                                                    "char": 18
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                "line": 64,
                                                "char": 18
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "r",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                    "line": 64,
                                                    "char": 23
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                "line": 64,
                                                "char": 23
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                        "line": 64,
                                        "char": 25
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
                                                            "value": "Stream must be opened in append or write mode",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                            "line": 65,
                                                            "char": 72
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                        "line": 65,
                                                        "char": 72
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                "line": 65,
                                                "char": 73
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                            "line": 66,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 67,
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
                                            "variable": "mode",
                                            "expr": {
                                                "type": "string",
                                                "value": "ab",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                "line": 68,
                                                "char": 19
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                            "line": 68,
                                            "char": 19
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 69,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 74,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "stream",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "fopen",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "name",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                    "line": 74,
                                                    "char": 26
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                "line": 74,
                                                "char": 26
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "mode",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                    "line": 74,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                "line": 74,
                                                "char": 32
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                        "line": 74,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 74,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 75,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "stream",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 75,
                                    "char": 14
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                "line": 75,
                                "char": 14
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
                                                            "value": "Can't open stream '",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                            "line": 76,
                                                            "char": 46
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "name",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                            "line": 76,
                                                            "char": 53
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                        "line": 76,
                                                        "char": 53
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "'",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                        "line": 76,
                                                        "char": 58
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                    "line": 76,
                                                    "char": 58
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                "line": 76,
                                                "char": 58
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                        "line": 76,
                                        "char": 59
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 77,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 79,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_stream",
                                    "expr": {
                                        "type": "variable",
                                        "value": "stream",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                        "line": 79,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 79,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 80,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Logger\\Adapter\\Stream constructor\n\t *\n\t * @param string name\n\t * @param array options\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                    "line": 59,
                    "last-line": 84,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                            "line": 87,
                                            "char": 18
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_formatter",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                            "line": 87,
                                            "char": 32
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                        "line": 87,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 87,
                                    "char": 32
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 87,
                                    "char": 43
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                "line": 87,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                "line": 88,
                                                "char": 46
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                            "line": 88,
                                            "char": 46
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 89,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 91,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 91,
                                    "char": 15
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_formatter",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 91,
                                    "char": 26
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                "line": 91,
                                "char": 26
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 92,
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 86,
                                    "char": 2
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                "line": 86,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                        "line": 86,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                    "line": 85,
                    "last-line": 96,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 97,
                            "char": 44
                        },
                        {
                            "type": "parameter",
                            "name": "type",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 97,
                            "char": 54
                        },
                        {
                            "type": "parameter",
                            "name": "time",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 97,
                            "char": 64
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 97,
                            "char": 79
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "stream",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 99,
                                    "char": 13
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 101,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "stream",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                            "line": 101,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_stream",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                            "line": 101,
                                            "char": 29
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                        "line": 101,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 101,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 102,
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
                                        "value": "stream",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                        "line": 102,
                                        "char": 21
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 102,
                                    "char": 21
                                },
                                "right": {
                                    "type": "string",
                                    "value": "resource",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 102,
                                    "char": 34
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                "line": 102,
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
                                                    "value": "Cannot send message to the log because it is invalid",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                    "line": 103,
                                                    "char": 78
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                "line": 103,
                                                "char": 78
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                        "line": 103,
                                        "char": 79
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                    "line": 104,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 106,
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
                                            "value": "stream",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                            "line": 106,
                                            "char": 16
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                        "line": 106,
                                        "char": 16
                                    },
                                    {
                                        "parameter": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                    "line": 106,
                                                    "char": 23
                                                },
                                                "name": "getFormatter",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                "line": 106,
                                                "char": 39
                                            },
                                            "name": "format",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "message",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                        "line": 106,
                                                        "char": 54
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                    "line": 106,
                                                    "char": 54
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "type",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                        "line": 106,
                                                        "char": 60
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                    "line": 106,
                                                    "char": 60
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "time",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                        "line": 106,
                                                        "char": 66
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                    "line": 106,
                                                    "char": 66
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "context",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                        "line": 106,
                                                        "char": 75
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                    "line": 106,
                                                    "char": 75
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                            "line": 106,
                                            "char": 76
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                        "line": 106,
                                        "char": 76
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                "line": 106,
                                "char": 77
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 107,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Writes the log to the stream itself\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                    "line": 97,
                    "last-line": 111,
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
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                "line": 114,
                                                "char": 22
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_stream",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                                "line": 114,
                                                "char": 30
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                            "line": 114,
                                            "char": 30
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                        "line": 114,
                                        "char": 30
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                "line": 114,
                                "char": 31
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                            "line": 115,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                                "line": 113,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                        "line": 113,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
                    "line": 112,
                    "last-line": 116,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
            "line": 43,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/stream.zep",
        "line": 43,
        "char": 5
    }
]