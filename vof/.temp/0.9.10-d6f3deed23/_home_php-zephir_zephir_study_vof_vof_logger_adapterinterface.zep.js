[
    {
        "type": "namespace",
        "name": "Vof\\Logger",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
        "line": 26,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Logger\\AdapterInterface\n *\n * Interface for Vof\\Logger adapters\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
        "line": 27,
        "char": 9
    },
    {
        "type": "interface",
        "name": "AdapterInterface",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setFormatter",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "formatter",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "FormatterInterface",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 33,
                                "char": 60
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 33,
                            "char": 61
                        }
                    ],
                    "docblock": "**\n\t * Sets the message formatter\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "AdapterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                    "line": 33,
                                    "char": 84
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 33,
                                "char": 84
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 33,
                        "char": 84
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 33,
                    "last-line": 37,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getFormatter",
                    "docblock": "**\n\t * Returns the internal formatter\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "FormatterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                    "line": 38,
                                    "char": 56
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 38,
                                "char": 56
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 38,
                        "char": 56
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 38,
                    "last-line": 42,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setLogLevel",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "level",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 43,
                            "char": 39
                        }
                    ],
                    "docblock": "**\n\t * Filters the logs sent to the handlers to be greater or equals than a specific level\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "AdapterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                    "line": 43,
                                    "char": 62
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 43,
                                "char": 62
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 43,
                        "char": 62
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 43,
                    "last-line": 47,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getLogLevel",
                    "docblock": "**\n\t * Returns the current log level\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 48,
                                "char": 38
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 48,
                        "char": 38
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 48,
                    "last-line": 52,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "log",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "type",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 53,
                            "char": 30
                        },
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 53,
                                "char": 50
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 53,
                            "char": 50
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 53,
                                "char": 73
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 53,
                            "char": 73
                        }
                    ],
                    "docblock": "**\n\t * Sends\/Writes messages to the file log\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "AdapterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                    "line": 53,
                                    "char": 96
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 53,
                                "char": 96
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 53,
                        "char": 96
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 53,
                    "last-line": 57,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "begin",
                    "docblock": "**\n \t * Starts a transaction\n \t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "AdapterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                    "line": 58,
                                    "char": 47
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 58,
                                "char": 47
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 58,
                        "char": 47
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 58,
                    "last-line": 62,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "commit",
                    "docblock": "**\n \t * Commits the internal transaction\n \t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "AdapterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                    "line": 63,
                                    "char": 48
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 63,
                                "char": 48
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 63,
                        "char": 48
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 63,
                    "last-line": 67,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "rollback",
                    "docblock": "**\n \t * Rollbacks the internal transaction\n \t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "AdapterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                    "line": 68,
                                    "char": 50
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 68,
                                "char": 50
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 68,
                        "char": 50
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 68,
                    "last-line": 72,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "close",
                    "docblock": "**\n \t * Closes the logger\n \t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 73,
                                "char": 36
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 73,
                        "char": 36
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 73,
                    "last-line": 77,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "debug",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 78,
                            "char": 39
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 78,
                                "char": 62
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 78,
                            "char": 62
                        }
                    ],
                    "docblock": "**\n \t * Sends\/Writes a debug message to the log\n \t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "AdapterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                    "line": 78,
                                    "char": 85
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 78,
                                "char": 85
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 78,
                        "char": 85
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 78,
                    "last-line": 82,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "error",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 83,
                            "char": 39
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 83,
                                "char": 62
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 83,
                            "char": 62
                        }
                    ],
                    "docblock": "**\n \t * Sends\/Writes an error message to the log\n \t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "AdapterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                    "line": 83,
                                    "char": 85
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 83,
                                "char": 85
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 83,
                        "char": 85
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 83,
                    "last-line": 87,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "info",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 88,
                            "char": 38
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 88,
                                "char": 61
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 88,
                            "char": 61
                        }
                    ],
                    "docblock": "**\n \t * Sends\/Writes an info message to the log\n \t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "AdapterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                    "line": 88,
                                    "char": 84
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 88,
                                "char": 84
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 88,
                        "char": 84
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 88,
                    "last-line": 92,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "notice",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 93,
                            "char": 40
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 93,
                                "char": 63
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 93,
                            "char": 63
                        }
                    ],
                    "docblock": "**\n \t * Sends\/Writes a notice message to the log\n \t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "AdapterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                    "line": 93,
                                    "char": 86
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 93,
                                "char": 86
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 93,
                        "char": 86
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 93,
                    "last-line": 97,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "warning",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 98,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 98,
                                "char": 64
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 98,
                            "char": 64
                        }
                    ],
                    "docblock": "**\n \t * Sends\/Writes a warning message to the log\n \t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "AdapterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                    "line": 98,
                                    "char": 87
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 98,
                                "char": 87
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 98,
                        "char": 87
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 98,
                    "last-line": 102,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "alert",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 103,
                            "char": 39
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 103,
                                "char": 62
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 103,
                            "char": 62
                        }
                    ],
                    "docblock": "**\n \t * Sends\/Writes an alert message to the log\n \t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "AdapterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                    "line": 103,
                                    "char": 85
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 103,
                                "char": 85
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 103,
                        "char": 85
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 103,
                    "last-line": 107,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "emergency",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 108,
                            "char": 43
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 108,
                                "char": 66
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                            "line": 108,
                            "char": 66
                        }
                    ],
                    "docblock": "**\n \t * Sends\/Writes an emergency message to the log\n \t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "AdapterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                    "line": 108,
                                    "char": 89
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                                "line": 108,
                                "char": 89
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                        "line": 108,
                        "char": 89
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
                    "line": 108,
                    "last-line": 109,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
            "line": 109,
            "char": 1
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapterinterface.zep",
        "line": 0,
        "char": 0
    }
]