[
    {
        "type": "namespace",
        "name": "Vof\\Logger\\Formatter",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Formatter",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                "line": 22,
                "char": 25
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
        "line": 28,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Logger\\Formatter\\Json\n *\n * Formats messages using JSON encoding\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
        "line": 29,
        "char": 5
    },
    {
        "type": "class",
        "name": "Json",
        "abstract": 0,
        "final": 0,
        "extends": "Formatter",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "format",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                            "line": 41,
                            "char": 39
                        },
                        {
                            "type": "parameter",
                            "name": "type",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                            "line": 41,
                            "char": 49
                        },
                        {
                            "type": "parameter",
                            "name": "timestamp",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                            "line": 41,
                            "char": 64
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                "line": 41,
                                "char": 84
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                            "line": 41,
                            "char": 84
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "context",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                        "line": 43,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                    "line": 43,
                                    "char": 23
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                    "line": 43,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                "line": 43,
                                "char": 33
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "message",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                    "line": 44,
                                                    "char": 23
                                                },
                                                "name": "interpolate",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "message",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                            "line": 44,
                                                            "char": 43
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                        "line": 44,
                                                        "char": 43
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "context",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                            "line": 44,
                                                            "char": 52
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                        "line": 44,
                                                        "char": 52
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                "line": 44,
                                                "char": 53
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                            "line": 44,
                                            "char": 53
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                    "line": 45,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                            "line": 47,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "concat",
                                "left": {
                                    "type": "fcall",
                                    "name": "json_encode",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "array",
                                                "left": [
                                                    {
                                                        "key": {
                                                            "type": "string",
                                                            "value": "type",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                            "line": 48,
                                                            "char": 10
                                                        },
                                                        "value": {
                                                            "type": "mcall",
                                                            "variable": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                                "line": 48,
                                                                "char": 17
                                                            },
                                                            "name": "getTypeString",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "type",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                                        "line": 48,
                                                                        "char": 36
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                                    "line": 48,
                                                                    "char": 36
                                                                }
                                                            ],
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                            "line": 48,
                                                            "char": 37
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                        "line": 48,
                                                        "char": 37
                                                    },
                                                    {
                                                        "key": {
                                                            "type": "string",
                                                            "value": "message",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                            "line": 49,
                                                            "char": 13
                                                        },
                                                        "value": {
                                                            "type": "variable",
                                                            "value": "message",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                            "line": 49,
                                                            "char": 22
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                        "line": 49,
                                                        "char": 22
                                                    },
                                                    {
                                                        "key": {
                                                            "type": "string",
                                                            "value": "timestamp",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                            "line": 50,
                                                            "char": 15
                                                        },
                                                        "value": {
                                                            "type": "variable",
                                                            "value": "timestamp",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                            "line": 51,
                                                            "char": 3
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                        "line": 51,
                                                        "char": 3
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                                "line": 51,
                                                "char": 4
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                            "line": 51,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                    "line": 51,
                                    "char": 5
                                },
                                "right": {
                                    "type": "constant",
                                    "value": "PHP_EOL",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                    "line": 51,
                                    "char": 13
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                "line": 51,
                                "char": 13
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                            "line": 52,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Applies a format to a message before sent it to the internal log\n\t *\n\t * @param string message\n\t * @param int type\n\t * @param int timestamp\n\t * @param array $context\n\t * @return string\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                                "line": 42,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                        "line": 42,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
                    "line": 41,
                    "last-line": 53,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
            "line": 29,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/json.zep",
        "line": 29,
        "char": 5
    }
]