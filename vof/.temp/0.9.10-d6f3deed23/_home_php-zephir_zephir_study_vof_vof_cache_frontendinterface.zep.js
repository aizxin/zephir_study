[
    {
        "type": "namespace",
        "name": "Vof\\Cache",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
        "line": 26,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Cache\\FrontendInterface\n *\n * Interface for Vof\\Cache\\Frontend adapters\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
        "line": 27,
        "char": 9
    },
    {
        "type": "interface",
        "name": "FrontendInterface",
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getLifetime",
                    "docblock": "**\n\t * Returns the cache lifetime\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
                                "line": 33,
                                "char": 38
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
                        "line": 33,
                        "char": 38
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
                    "line": 33,
                    "last-line": 37,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isBuffering",
                    "docblock": "**\n\t * Check whether if frontend is buffering output\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
                                "line": 38,
                                "char": 42
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
                        "line": 38,
                        "char": 42
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
                    "line": 38,
                    "last-line": 42,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "start",
                    "docblock": "**\n\t * Starts the frontend\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
                    "line": 43,
                    "last-line": 49,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getContent",
                    "docblock": "**\n\t * Returns output cached content\n\t *\n\t * @return string\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
                    "line": 50,
                    "last-line": 54,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "stop",
                    "docblock": "**\n\t * Stops the frontend\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
                    "line": 55,
                    "last-line": 61,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "beforeStore",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "data",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
                            "line": 62,
                            "char": 34
                        }
                    ],
                    "docblock": "**\n\t * Serializes data before storing it\n\t *\n\t * @param mixed data\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
                    "line": 62,
                    "last-line": 68,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "afterRetrieve",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "data",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
                            "line": 69,
                            "char": 36
                        }
                    ],
                    "docblock": "**\n\t * Unserializes data after retrieving it\n\t *\n\t * @param mixed data\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
                    "line": 69,
                    "last-line": 70,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
            "line": 70,
            "char": 1
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontendinterface.zep",
        "line": 0,
        "char": 0
    }
]