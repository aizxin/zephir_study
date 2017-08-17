[
    {
        "type": "namespace",
        "name": "Vof\\Logger\\Formatter",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Formatter",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                "line": 22,
                "char": 25
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
        "line": 28,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Logger\\Formatter\\Line\n *\n * Formats messages using an one-line string\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
        "line": 29,
        "char": 5
    },
    {
        "type": "class",
        "name": "Line",
        "abstract": 0,
        "final": 0,
        "extends": "Formatter",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_dateFormat",
                    "default": {
                        "type": "string",
                        "value": "D, d M y H:i:s O",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                        "line": 37,
                        "char": 45
                    },
                    "docblock": "**\n\t * Default date format\n\t *\n\t * @var string\n\t *",
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 37,
                            "char": 50
                        },
                        {
                            "type": "shortcut",
                            "name": "set",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 37,
                            "char": 56
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                    "line": 43,
                    "char": 3
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_format",
                    "default": {
                        "type": "string",
                        "value": "[%date%][%type%] %message%",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                        "line": 44,
                        "char": 51
                    },
                    "docblock": "**\n\t * Format applied to each message\n\t *\n\t * @var string\n\t *",
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 44,
                            "char": 56
                        },
                        {
                            "type": "shortcut",
                            "name": "set",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 44,
                            "char": 62
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                    "line": 51,
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
                            "name": "format",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                "line": 52,
                                "char": 43
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 52,
                            "char": 43
                        },
                        {
                            "type": "parameter",
                            "name": "dateFormat",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                "line": 52,
                                "char": 62
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 52,
                            "char": 62
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "format",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                "line": 54,
                                "char": 13
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_format",
                                            "expr": {
                                                "type": "variable",
                                                "value": "format",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                "line": 55,
                                                "char": 30
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                            "line": 55,
                                            "char": 30
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                    "line": 56,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 57,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "dateFormat",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                "line": 57,
                                "char": 17
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_dateFormat",
                                            "expr": {
                                                "type": "variable",
                                                "value": "dateFormat",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                "line": 58,
                                                "char": 38
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                            "line": 58,
                                            "char": 38
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                    "line": 59,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 60,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Logger\\Formatter\\Line construct\n\t *\n\t * @param string format\n\t * @param string dateFormat\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                    "line": 52,
                    "last-line": 70,
                    "char": 16
                },
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 71,
                            "char": 39
                        },
                        {
                            "type": "parameter",
                            "name": "type",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 71,
                            "char": 49
                        },
                        {
                            "type": "parameter",
                            "name": "timestamp",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 71,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                "line": 71,
                                "char": 84
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 71,
                            "char": 84
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "format",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                    "line": 73,
                                    "char": 13
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 75,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "format",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                            "line": 75,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_format",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                            "line": 75,
                                            "char": 29
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                        "line": 75,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                    "line": 75,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 80,
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
                                            "value": "format",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                            "line": 80,
                                            "char": 19
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                        "line": 80,
                                        "char": 19
                                    },
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "%date%",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                            "line": 80,
                                            "char": 29
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                        "line": 80,
                                        "char": 29
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                "line": 80,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "format",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "str_replace",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "%date%",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                            "line": 81,
                                                            "char": 37
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                        "line": 81,
                                                        "char": 37
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "fcall",
                                                            "name": "date",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "property-access",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "this",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                                            "line": 81,
                                                                            "char": 49
                                                                        },
                                                                        "right": {
                                                                            "type": "variable",
                                                                            "value": "_dateFormat",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                                            "line": 81,
                                                                            "char": 61
                                                                        },
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                                        "line": 81,
                                                                        "char": 61
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                                    "line": 81,
                                                                    "char": 61
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "timestamp",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                                        "line": 81,
                                                                        "char": 72
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                                    "line": 81,
                                                                    "char": 72
                                                                }
                                                            ],
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                            "line": 81,
                                                            "char": 73
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                        "line": 81,
                                                        "char": 73
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "format",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                            "line": 81,
                                                            "char": 81
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                        "line": 81,
                                                        "char": 81
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                "line": 81,
                                                "char": 82
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                            "line": 81,
                                            "char": 82
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                    "line": 82,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 87,
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
                                            "value": "format",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                            "line": 87,
                                            "char": 19
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                        "line": 87,
                                        "char": 19
                                    },
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "%type%",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                            "line": 87,
                                            "char": 29
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                        "line": 87,
                                        "char": 29
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                "line": 87,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "format",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "str_replace",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "%type%",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                            "line": 88,
                                                            "char": 37
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                        "line": 88,
                                                        "char": 37
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "mcall",
                                                            "variable": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                                "line": 88,
                                                                "char": 44
                                                            },
                                                            "name": "getTypeString",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "type",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                                        "line": 88,
                                                                        "char": 63
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                                    "line": 88,
                                                                    "char": 63
                                                                }
                                                            ],
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                            "line": 88,
                                                            "char": 64
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                        "line": 88,
                                                        "char": 64
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "format",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                            "line": 88,
                                                            "char": 72
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                        "line": 88,
                                                        "char": 72
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                "line": 88,
                                                "char": 73
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                            "line": 88,
                                            "char": 73
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                    "line": 89,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 91,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "format",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "fcall",
                                            "name": "str_replace",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "%message%",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                        "line": 91,
                                                        "char": 39
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                    "line": 91,
                                                    "char": 39
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "message",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                        "line": 91,
                                                        "char": 48
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                    "line": 91,
                                                    "char": 48
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "format",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                        "line": 91,
                                                        "char": 56
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                    "line": 91,
                                                    "char": 56
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                            "line": 91,
                                            "char": 58
                                        },
                                        "right": {
                                            "type": "constant",
                                            "value": "PHP_EOL",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                            "line": 91,
                                            "char": 67
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                        "line": 91,
                                        "char": 67
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                    "line": 91,
                                    "char": 67
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 93,
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
                                        "value": "context",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                        "line": 93,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                    "line": 93,
                                    "char": 23
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                    "line": 93,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                "line": 93,
                                "char": 33
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                            "line": 94,
                                            "char": 16
                                        },
                                        "name": "interpolate",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "format",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                    "line": 94,
                                                    "char": 35
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                "line": 94,
                                                "char": 35
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "context",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                    "line": 94,
                                                    "char": 44
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                                "line": 94,
                                                "char": 44
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                        "line": 94,
                                        "char": 45
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                    "line": 95,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 97,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "format",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                "line": 97,
                                "char": 16
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                            "line": 98,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                                "line": 72,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                        "line": 72,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
                    "line": 71,
                    "last-line": 99,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
            "line": 29,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/line.zep",
        "line": 29,
        "char": 5
    }
]