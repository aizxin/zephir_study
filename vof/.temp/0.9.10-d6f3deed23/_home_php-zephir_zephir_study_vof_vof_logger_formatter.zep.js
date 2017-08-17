[
    {
        "type": "namespace",
        "name": "Vof\\Logger",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\FormatterInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                "line": 22,
                "char": 34
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                "line": 23,
                "char": 15
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
        "line": 29,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Logger\\Formatter\n *\n * This is a base class for logger formatters\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
        "line": 30,
        "char": 8
    },
    {
        "type": "class",
        "name": "Formatter",
        "abstract": 1,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "FormatterInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                "line": 31,
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
                    "name": "getTypeString",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "type",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                            "line": 36,
                            "char": 40
                        }
                    ],
                    "statements": [
                        {
                            "type": "switch",
                            "expr": {
                                "type": "variable",
                                "value": "type",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                "line": 38,
                                "char": 15
                            },
                            "clauses": [
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Logger",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 40,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "DEBUG",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 40,
                                            "char": 22
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 40,
                                        "char": 22
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "string",
                                                "value": "DEBUG",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                "line": 41,
                                                "char": 19
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 43,
                                            "char": 7
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 43,
                                    "char": 7
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Logger",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 43,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "ERROR",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 43,
                                            "char": 22
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 43,
                                        "char": 22
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "string",
                                                "value": "ERROR",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                "line": 44,
                                                "char": 19
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 46,
                                            "char": 7
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 46,
                                    "char": 7
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Logger",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 46,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "WARNING",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 46,
                                            "char": 24
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 46,
                                        "char": 24
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "string",
                                                "value": "WARNING",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                "line": 47,
                                                "char": 21
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 49,
                                            "char": 7
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 49,
                                    "char": 7
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Logger",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 49,
                                            "char": 25
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "CRITICAL",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 49,
                                            "char": 25
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 49,
                                        "char": 25
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "string",
                                                "value": "CRITICAL",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                "line": 50,
                                                "char": 22
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 52,
                                            "char": 7
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 52,
                                    "char": 7
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Logger",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 52,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "CUSTOM",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 52,
                                            "char": 23
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 52,
                                        "char": 23
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "string",
                                                "value": "CUSTOM",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                "line": 53,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 55,
                                            "char": 7
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 55,
                                    "char": 7
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Logger",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 55,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "ALERT",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 55,
                                            "char": 22
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 55,
                                        "char": 22
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "string",
                                                "value": "ALERT",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                "line": 56,
                                                "char": 19
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 58,
                                            "char": 7
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 58,
                                    "char": 7
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Logger",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 58,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "NOTICE",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 58,
                                            "char": 23
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 58,
                                        "char": 23
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "string",
                                                "value": "NOTICE",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                "line": 59,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 61,
                                            "char": 7
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 61,
                                    "char": 7
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Logger",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 61,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "INFO",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 61,
                                            "char": 21
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 61,
                                        "char": 21
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "string",
                                                "value": "INFO",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                "line": 62,
                                                "char": 18
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 64,
                                            "char": 7
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 64,
                                    "char": 7
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Logger",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 64,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "EMERGENCY",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 64,
                                            "char": 26
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 64,
                                        "char": 26
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "string",
                                                "value": "EMERGENCY",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                "line": 65,
                                                "char": 23
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 67,
                                            "char": 7
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 67,
                                    "char": 7
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Logger",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 67,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "SPECIAL",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 67,
                                            "char": 24
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 67,
                                        "char": 24
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "string",
                                                "value": "SPECIAL",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                "line": 68,
                                                "char": 21
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 69,
                                            "char": 3
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 69,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                            "line": 71,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "string",
                                "value": "CUSTOM",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                "line": 71,
                                "char": 18
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                            "line": 72,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns the string meaning of a logger constant\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                "line": 37,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                        "line": 37,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                    "line": 36,
                    "last-line": 80,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "interpolate",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                            "line": 81,
                            "char": 44
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                "line": 81,
                                "char": 64
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                            "line": 81,
                            "char": 64
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "replace",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 83,
                                    "char": 14
                                },
                                {
                                    "variable": "key",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 83,
                                    "char": 19
                                },
                                {
                                    "variable": "value",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 83,
                                    "char": 26
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                            "line": 85,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "equals",
                                    "left": {
                                        "type": "typeof",
                                        "left": {
                                            "type": "variable",
                                            "value": "context",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 85,
                                            "char": 22
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 85,
                                        "char": 22
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "array",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 85,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 85,
                                    "char": 33
                                },
                                "right": {
                                    "type": "greater",
                                    "left": {
                                        "type": "fcall",
                                        "name": "count",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "context",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                    "line": 85,
                                                    "char": 48
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                "line": 85,
                                                "char": 48
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 85,
                                        "char": 50
                                    },
                                    "right": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 85,
                                        "char": 54
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 85,
                                    "char": 54
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                "line": 85,
                                "char": 54
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "replace",
                                            "expr": {
                                                "type": "empty-array",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                "line": 86,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 86,
                                            "char": 20
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 87,
                                    "char": 6
                                },
                                {
                                    "type": "for",
                                    "expr": {
                                        "type": "variable",
                                        "value": "context",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 87,
                                        "char": 30
                                    },
                                    "key": "key",
                                    "value": "value",
                                    "reverse": 0,
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "replace",
                                                    "index-expr": [
                                                        {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "concat",
                                                                "left": {
                                                                    "type": "string",
                                                                    "value": "{",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                                    "line": 88,
                                                                    "char": 21
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "key",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                                    "line": 88,
                                                                    "char": 27
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                                "line": 88,
                                                                "char": 27
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "}",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                                "line": 88,
                                                                "char": 32
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                            "line": 88,
                                                            "char": 32
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "value",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                        "line": 88,
                                                        "char": 41
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                    "line": 88,
                                                    "char": 41
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                            "line": 89,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 90,
                                    "char": 9
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "strtr",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                    "line": 90,
                                                    "char": 24
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                "line": 90,
                                                "char": 24
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "replace",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                    "line": 90,
                                                    "char": 33
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                                "line": 90,
                                                "char": 33
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                        "line": 90,
                                        "char": 34
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                    "line": 91,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                            "line": 92,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "message",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                                "line": 92,
                                "char": 17
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                            "line": 93,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Interpolates context values into the message placeholders\n\t *\n\t * @see http:\/\/www.php-fig.org\/psr\/psr-3\/ Section 1.2 Message\n\t * @param string $message\n\t * @param array $context\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
                    "line": 81,
                    "last-line": 94,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
            "line": 30,
            "char": 14
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter.zep",
        "line": 30,
        "char": 14
    }
]