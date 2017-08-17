[
    {
        "type": "namespace",
        "name": "Vof\\Logger\\Formatter",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Formatter",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                "line": 22,
                "char": 25
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
        "line": 28,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Logger\\Formatter\\Syslog\n *\n * Prepares a message to be used in a Syslog backend\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
        "line": 29,
        "char": 5
    },
    {
        "type": "class",
        "name": "Syslog",
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
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                            "line": 41,
                            "char": 32
                        },
                        {
                            "type": "parameter",
                            "name": "type",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                            "line": 41,
                            "char": 42
                        },
                        {
                            "type": "parameter",
                            "name": "timestamp",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                            "line": 41,
                            "char": 57
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                "line": 41,
                                "char": 77
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                            "line": 41,
                            "char": 77
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                        "line": 43,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                    "line": 43,
                                    "char": 23
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                    "line": 43,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
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
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                                            "line": 44,
                                                            "char": 43
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                                        "line": 44,
                                                        "char": 43
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "context",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                                            "line": 44,
                                                            "char": 52
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                                        "line": 44,
                                                        "char": 52
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                                "line": 44,
                                                "char": 53
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                            "line": 44,
                                            "char": 53
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                    "line": 45,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                            "line": 46,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "array",
                                "left": [
                                    {
                                        "value": {
                                            "type": "variable",
                                            "value": "type",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                            "line": 46,
                                            "char": 15
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                        "line": 46,
                                        "char": 15
                                    },
                                    {
                                        "value": {
                                            "type": "variable",
                                            "value": "message",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                            "line": 46,
                                            "char": 24
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                        "line": 46,
                                        "char": 24
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                "line": 46,
                                "char": 25
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                            "line": 47,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Applies a format to a message before sent it to the internal log\n\t *\n\t * @param string message\n\t * @param int type\n\t * @param int timestamp\n\t * @param array context\n\t * @return array\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                                "line": 42,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                        "line": 42,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
                    "line": 41,
                    "last-line": 48,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
            "line": 29,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/syslog.zep",
        "line": 29,
        "char": 5
    }
]