[
    {
        "type": "namespace",
        "name": "Vof\\Session",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
        "line": 26,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Session\\AdapterInterface\n *\n * Interface for Vof\\Session adapters\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
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
                    "name": "start",
                    "docblock": "**\n\t * Starts session, optionally using an adapter\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                    "line": 32,
                    "last-line": 36,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setOptions",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "options",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                            "line": 37,
                            "char": 43
                        }
                    ],
                    "docblock": "**\n\t * Sets session options\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                    "line": 37,
                    "last-line": 41,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getOptions",
                    "docblock": "**\n\t * Get internal options\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                                "line": 42,
                                "char": 39
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                        "line": 42,
                        "char": 39
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                    "line": 42,
                    "last-line": 46,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "get",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "index",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                            "line": 47,
                            "char": 34
                        },
                        {
                            "type": "parameter",
                            "name": "defaultValue",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                                "line": 47,
                                "char": 59
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                            "line": 47,
                            "char": 59
                        }
                    ],
                    "docblock": "**\n\t * Gets a session variable from an application context\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "variable",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                                "line": 47,
                                "char": 67
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                        "line": 47,
                        "char": 67
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                    "line": 47,
                    "last-line": 51,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "set",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "index",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                            "line": 52,
                            "char": 34
                        },
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                            "line": 52,
                            "char": 45
                        }
                    ],
                    "docblock": "**\n\t * Sets a session variable in an application context\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                    "line": 52,
                    "last-line": 56,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "has",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "index",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                            "line": 57,
                            "char": 34
                        }
                    ],
                    "docblock": "**\n\t * Check whether a session variable is set in an application context\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                                "line": 57,
                                "char": 46
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                        "line": 57,
                        "char": 46
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                    "line": 57,
                    "last-line": 61,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "remove",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "index",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                            "line": 62,
                            "char": 37
                        }
                    ],
                    "docblock": "**\n\t * Removes a session variable from an application context\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                    "line": 62,
                    "last-line": 66,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getId",
                    "docblock": "**\n\t * Returns active session id\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                                "line": 67,
                                "char": 35
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                        "line": 67,
                        "char": 35
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                    "line": 67,
                    "last-line": 71,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isStarted",
                    "docblock": "**\n\t * Check whether the session has been started\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                                "line": 72,
                                "char": 40
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                        "line": 72,
                        "char": 40
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                    "line": 72,
                    "last-line": 76,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "destroy",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "removeData",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                                "line": 77,
                                "char": 52
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                            "line": 77,
                            "char": 52
                        }
                    ],
                    "docblock": "**\n\t * Destroys the active session\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                                "line": 77,
                                "char": 64
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                        "line": 77,
                        "char": 64
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                    "line": 77,
                    "last-line": 81,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "regenerateId",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "deleteOldSession",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                                "line": 82,
                                "char": 59
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                            "line": 82,
                            "char": 59
                        }
                    ],
                    "docblock": "**\n\t * Regenerate session's id\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "AdapterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                                    "line": 82,
                                    "char": 82
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                                "line": 82,
                                "char": 82
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                        "line": 82,
                        "char": 82
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                    "line": 82,
                    "last-line": 86,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setName",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "name",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                            "line": 87,
                            "char": 37
                        }
                    ],
                    "docblock": "**\n\t * Set session name\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                    "line": 87,
                    "last-line": 91,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getName",
                    "docblock": "**\n\t * Get session name\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                                "line": 92,
                                "char": 37
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                        "line": 92,
                        "char": 37
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
                    "line": 92,
                    "last-line": 93,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
            "line": 93,
            "char": 1
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapterinterface.zep",
        "line": 0,
        "char": 0
    }
]