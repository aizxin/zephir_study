[
    {
        "type": "namespace",
        "name": "Vof\\Logger",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatterinterface.zep",
        "line": 26,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Logger\\FormatterInterface\n *\n * This interface must be implemented by formatters in Vof\\Logger\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatterinterface.zep",
        "line": 27,
        "char": 9
    },
    {
        "type": "interface",
        "name": "FormatterInterface",
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatterinterface.zep",
                            "line": 38,
                            "char": 39
                        },
                        {
                            "type": "parameter",
                            "name": "type",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatterinterface.zep",
                            "line": 38,
                            "char": 49
                        },
                        {
                            "type": "parameter",
                            "name": "timestamp",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatterinterface.zep",
                            "line": 38,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatterinterface.zep",
                                "line": 38,
                                "char": 84
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatterinterface.zep",
                            "line": 38,
                            "char": 84
                        }
                    ],
                    "docblock": "**\n\t * Applies a format to a message before sent it to the internal log\n\t *\n\t * @param string message\n\t * @param int type\n\t * @param int timestamp\n\t * @param array $context\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatterinterface.zep",
                                "line": 38,
                                "char": 95
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatterinterface.zep",
                                "line": 38,
                                "char": 101
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatterinterface.zep",
                        "line": 38,
                        "char": 101
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatterinterface.zep",
                    "line": 38,
                    "last-line": 39,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatterinterface.zep",
            "line": 39,
            "char": 1
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/formatterinterface.zep",
        "line": 0,
        "char": 0
    }
]