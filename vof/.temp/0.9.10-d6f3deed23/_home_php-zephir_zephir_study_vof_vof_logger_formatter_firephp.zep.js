[
    {
        "type": "namespace",
        "name": "Vof\\Logger\\Formatter",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                "line": 23,
                "char": 15
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
        "line": 24,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Formatter",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                "line": 24,
                "char": 25
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
        "line": 30,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Logger\\Formatter\\Firephp\n *\n * Formats messages so that they can be sent to FirePHP\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
        "line": 31,
        "char": 5
    },
    {
        "type": "class",
        "name": "Firephp",
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
                    "name": "_showBacktrace",
                    "default": {
                        "type": "bool",
                        "value": "true",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                        "line": 33,
                        "char": 33
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                    "line": 35,
                    "char": 10
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_enableLabels",
                    "default": {
                        "type": "bool",
                        "value": "true",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                        "line": 35,
                        "char": 32
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                    "line": 39,
                    "char": 3
                }
            ],
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 40,
                            "char": 40
                        }
                    ],
                    "statements": [
                        {
                            "type": "switch",
                            "expr": {
                                "type": "variable",
                                "value": "type",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 42,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 44,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "EMERGENCY",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 44,
                                            "char": 26
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 44,
                                        "char": 26
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 45,
                                    "char": 7
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Logger",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 45,
                                            "char": 25
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "CRITICAL",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 45,
                                            "char": 25
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 45,
                                        "char": 25
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 46,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "ERROR",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 46,
                                            "char": 22
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 46,
                                        "char": 22
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "string",
                                                "value": "ERROR",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 47,
                                                "char": 19
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 49,
                                            "char": 7
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 49,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "ALERT",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 49,
                                            "char": 22
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 49,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 50,
                                    "char": 7
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Logger",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 50,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "WARNING",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 50,
                                            "char": 24
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 50,
                                        "char": 24
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "string",
                                                "value": "WARN",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 51,
                                                "char": 18
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 53,
                                            "char": 7
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 53,
                                    "char": 7
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Logger",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 53,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "INFO",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 53,
                                            "char": 21
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 53,
                                        "char": 21
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 54,
                                    "char": 7
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Logger",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 54,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "NOTICE",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 54,
                                            "char": 23
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 54,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 55,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "CUSTOM",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 55,
                                            "char": 23
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 55,
                                        "char": 23
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "string",
                                                "value": "INFO",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 56,
                                                "char": 18
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 58,
                                            "char": 7
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 58,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "DEBUG",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 58,
                                            "char": 22
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 58,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 59,
                                    "char": 7
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "static-constant-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "Logger",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 59,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "SPECIAL",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 59,
                                            "char": 24
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 59,
                                        "char": 24
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "string",
                                                "value": "LOG",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 60,
                                                "char": 17
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 61,
                                            "char": 3
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 61,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 63,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "string",
                                "value": "CUSTOM",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 63,
                                "char": 18
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 64,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 41,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                        "line": 41,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                    "line": 40,
                    "last-line": 68,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setShowBacktrace",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "isShow",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 69,
                                "char": 56
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 69,
                            "char": 56
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
                                    "property": "_showBacktrace",
                                    "expr": {
                                        "type": "variable",
                                        "value": "isShow",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 71,
                                        "char": 36
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 71,
                                    "char": 36
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 72,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 72,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 73,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns the string meaning of a logger constant\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "Firephp",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 70,
                                    "char": 2
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 70,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                        "line": 70,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                    "line": 69,
                    "last-line": 77,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getShowBacktrace",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 80,
                                    "char": 15
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_showBacktrace",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 80,
                                    "char": 30
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 80,
                                "char": 30
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 81,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns the string meaning of a logger constant\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 79,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                        "line": 79,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                    "line": 78,
                    "last-line": 85,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "enableLabels",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "isEnable",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 86,
                                "char": 54
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 86,
                            "char": 54
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
                                    "property": "_enableLabels",
                                    "expr": {
                                        "type": "variable",
                                        "value": "isEnable",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 88,
                                        "char": 37
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 88,
                                    "char": 37
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 89,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 89,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 90,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns the string meaning of a logger constant\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "Firephp",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 87,
                                    "char": 2
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 87,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                        "line": 87,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                    "line": 86,
                    "last-line": 94,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "labelsEnabled",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 97,
                                    "char": 15
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_enableLabels",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 97,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 97,
                                "char": 29
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 98,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns the labels enabled\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 96,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                        "line": 96,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                    "line": 95,
                    "last-line": 109,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 110,
                            "char": 39
                        },
                        {
                            "type": "parameter",
                            "name": "type",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 110,
                            "char": 49
                        },
                        {
                            "type": "parameter",
                            "name": "timestamp",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 110,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 110,
                                "char": 84
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 110,
                            "char": 84
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "meta",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 112,
                                    "char": 11
                                },
                                {
                                    "variable": "body",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 112,
                                    "char": 17
                                },
                                {
                                    "variable": "backtrace",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 112,
                                    "char": 28
                                },
                                {
                                    "variable": "encoded",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 112,
                                    "char": 37
                                },
                                {
                                    "variable": "len",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 112,
                                    "char": 42
                                },
                                {
                                    "variable": "lastTrace",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 112,
                                    "char": 53
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 114,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 114,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 114,
                                    "char": 23
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 114,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 114,
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 115,
                                                    "char": 23
                                                },
                                                "name": "interpolate",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "message",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 115,
                                                            "char": 43
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                        "line": 115,
                                                        "char": 43
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "context",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 115,
                                                            "char": 52
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                        "line": 115,
                                                        "char": 52
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 115,
                                                "char": 53
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 115,
                                            "char": 53
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 116,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 118,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "meta",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "key": {
                                                    "type": "string",
                                                    "value": "Type",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 118,
                                                    "char": 21
                                                },
                                                "value": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                        "line": 118,
                                                        "char": 28
                                                    },
                                                    "name": "getTypeString",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "type",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                                "line": 118,
                                                                "char": 47
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 118,
                                                            "char": 47
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 118,
                                                    "char": 48
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 118,
                                                "char": 48
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 118,
                                        "char": 49
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 118,
                                    "char": 49
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 120,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 120,
                                    "char": 11
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_showBacktrace",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 120,
                                    "char": 27
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 120,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "declare",
                                    "data-type": "variable",
                                    "variables": [
                                        {
                                            "variable": "param",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 121,
                                            "char": 13
                                        },
                                        {
                                            "variable": "backtraceItem",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 121,
                                            "char": 28
                                        },
                                        {
                                            "variable": "key",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 121,
                                            "char": 33
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 122,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "param",
                                            "expr": {
                                                "type": "constant",
                                                "value": "DEBUG_BACKTRACE_IGNORE_ARGS",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 122,
                                                "char": 43
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 122,
                                            "char": 43
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 124,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "backtrace",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "debug_backtrace",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "param",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 124,
                                                            "char": 41
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                        "line": 124,
                                                        "char": 41
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 124,
                                                "char": 42
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 124,
                                            "char": 42
                                        },
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "lastTrace",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "end",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "backtrace",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 125,
                                                            "char": 30
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                        "line": 125,
                                                        "char": 30
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 125,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 125,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 127,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "isset",
                                        "left": {
                                            "type": "list",
                                            "left": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "lastTrace",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 127,
                                                    "char": 22
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "file",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 127,
                                                    "char": 29
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 127,
                                                "char": 30
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 127,
                                            "char": 32
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 127,
                                        "char": 32
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "meta",
                                                    "index-expr": [
                                                        {
                                                            "type": "string",
                                                            "value": "File",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 128,
                                                            "char": 20
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "lastTrace",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 128,
                                                            "char": 33
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "file",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 128,
                                                            "char": 40
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                        "line": 128,
                                                        "char": 41
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 128,
                                                    "char": 41
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 129,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 131,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "isset",
                                        "left": {
                                            "type": "list",
                                            "left": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "lastTrace",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 131,
                                                    "char": 22
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "line",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 131,
                                                    "char": 29
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 131,
                                                "char": 30
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 131,
                                            "char": 32
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 131,
                                        "char": 32
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "meta",
                                                    "index-expr": [
                                                        {
                                                            "type": "string",
                                                            "value": "Line",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 132,
                                                            "char": 20
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "lastTrace",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 132,
                                                            "char": 33
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "line",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 132,
                                                            "char": 40
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                        "line": 132,
                                                        "char": 41
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 132,
                                                    "char": 41
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 133,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 135,
                                    "char": 6
                                },
                                {
                                    "type": "for",
                                    "expr": {
                                        "type": "variable",
                                        "value": "backtrace",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 135,
                                        "char": 40
                                    },
                                    "key": "key",
                                    "value": "backtraceItem",
                                    "reverse": 0,
                                    "statements": [
                                        {
                                            "type": "unset",
                                            "expr": {
                                                "type": "list",
                                                "left": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "backtraceItem",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                        "line": 136,
                                                        "char": 24
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "object",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                        "line": 136,
                                                        "char": 33
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 136,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 136,
                                                "char": 35
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 137,
                                            "char": 9
                                        },
                                        {
                                            "type": "unset",
                                            "expr": {
                                                "type": "list",
                                                "left": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "backtraceItem",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                        "line": 137,
                                                        "char": 24
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "args",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                        "line": 137,
                                                        "char": 31
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 137,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 137,
                                                "char": 33
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 139,
                                            "char": 7
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "backtrace",
                                                    "index-expr": [
                                                        {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 139,
                                                            "char": 22
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "backtraceItem",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                        "line": 139,
                                                        "char": 39
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 139,
                                                    "char": 39
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 140,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 141,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 143,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 143,
                                    "char": 11
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_enableLabels",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 143,
                                    "char": 26
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 143,
                                "char": 26
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "meta",
                                            "index-expr": [
                                                {
                                                    "type": "string",
                                                    "value": "Label",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 144,
                                                    "char": 20
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "message",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 144,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 144,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 145,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 147,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "not",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 147,
                                            "char": 12
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_enableLabels",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 147,
                                            "char": 28
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 147,
                                        "char": 28
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 147,
                                    "char": 28
                                },
                                "right": {
                                    "type": "not",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 147,
                                            "char": 36
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_showBacktrace",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 147,
                                            "char": 52
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 147,
                                        "char": 52
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 147,
                                    "char": 52
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 147,
                                "char": 52
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "body",
                                            "expr": {
                                                "type": "variable",
                                                "value": "message",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 148,
                                                "char": 22
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 148,
                                            "char": 22
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 149,
                                    "char": 3
                                }
                            ],
                            "elseif_statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "and",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 149,
                                                "char": 17
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_enableLabels",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 149,
                                                "char": 33
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 149,
                                            "char": 33
                                        },
                                        "right": {
                                            "type": "not",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 149,
                                                    "char": 41
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_showBacktrace",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 149,
                                                    "char": 57
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 149,
                                                "char": 57
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 149,
                                            "char": 57
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 149,
                                        "char": 57
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "body",
                                                    "expr": {
                                                        "type": "string",
                                                        "value": "",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                        "line": 150,
                                                        "char": 17
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 150,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 151,
                                            "char": 3
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 151,
                                    "char": 8
                                }
                            ],
                            "else_statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "body",
                                            "expr": {
                                                "type": "empty-array",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 152,
                                                "char": 17
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 152,
                                            "char": 17
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 154,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 154,
                                            "char": 12
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_showBacktrace",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 154,
                                            "char": 28
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 154,
                                        "char": 28
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "body",
                                                    "index-expr": [
                                                        {
                                                            "type": "string",
                                                            "value": "backtrace",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 155,
                                                            "char": 25
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "backtrace",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                        "line": 155,
                                                        "char": 38
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 155,
                                                    "char": 38
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 156,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 158,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 158,
                                                "char": 13
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_enableLabels",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 158,
                                                "char": 28
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 158,
                                            "char": 28
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 158,
                                        "char": 28
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "array-index",
                                                    "operator": "assign",
                                                    "variable": "body",
                                                    "index-expr": [
                                                        {
                                                            "type": "string",
                                                            "value": "message",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 159,
                                                            "char": 23
                                                        }
                                                    ],
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "message",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                        "line": 159,
                                                        "char": 34
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 159,
                                                    "char": 34
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 160,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 161,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 163,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "encoded",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "json_encode",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "array",
                                                    "left": [
                                                        {
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "meta",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                                "line": 163,
                                                                "char": 34
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 163,
                                                            "char": 34
                                                        },
                                                        {
                                                            "value": {
                                                                "type": "variable",
                                                                "value": "body",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                                "line": 163,
                                                                "char": 40
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                            "line": 163,
                                                            "char": 40
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 163,
                                                    "char": 41
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 163,
                                                "char": 41
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 163,
                                        "char": 42
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 163,
                                    "char": 42
                                },
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "len",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "strlen",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "encoded",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                    "line": 164,
                                                    "char": 24
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                                "line": 164,
                                                "char": 24
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 164,
                                        "char": 25
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 164,
                                    "char": 25
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 166,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "concat",
                                "left": {
                                    "type": "concat",
                                    "left": {
                                        "type": "concat",
                                        "left": {
                                            "type": "variable",
                                            "value": "len",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 166,
                                            "char": 14
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "|",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                            "line": 166,
                                            "char": 20
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 166,
                                        "char": 20
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "encoded",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                        "line": 166,
                                        "char": 30
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 166,
                                    "char": 30
                                },
                                "right": {
                                    "type": "string",
                                    "value": "|",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                    "line": 166,
                                    "char": 35
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 166,
                                "char": 35
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                            "line": 167,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Applies a format to a message before sending it to the log\n\t *\n\t * @param string $message\n\t * @param int $type\n\t * @param int $timestamp\n\t * @param array $context\n\t *\n\t * @return string\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                                "line": 111,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                        "line": 111,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
                    "line": 110,
                    "last-line": 168,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
            "line": 31,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatter\/firephp.zep",
        "line": 31,
        "char": 5
    }
]