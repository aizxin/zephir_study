[
    {
        "type": "namespace",
        "name": "Vof\\Session",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Session\\AdapterInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                "line": 22,
                "char": 33
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
        "line": 27,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Session\\Adapter\n *\n * Base class for Vof\\Session adapters\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
        "line": 28,
        "char": 8
    },
    {
        "type": "class",
        "name": "Adapter",
        "abstract": 1,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "AdapterInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                "line": 29,
                "char": 1
            }
        ],
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_uniqueId",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 38,
                    "char": 10
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_started",
                    "default": {
                        "type": "bool",
                        "value": "false",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 38,
                        "char": 28
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 40,
                    "char": 10
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_options",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 46,
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
                            "name": "options",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 47,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 47,
                            "char": 48
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 49,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 49,
                                    "char": 22
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 49,
                                    "char": 32
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 49,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 50,
                                            "char": 9
                                        },
                                        "name": "setOptions",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 50,
                                                    "char": 28
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 50,
                                                "char": 28
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 50,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 51,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 52,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Session\\Adapter constructor\n\t *\n\t * @param array options\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 47,
                    "last-line": 56,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "start",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "headers_sent",
                                    "call-type": 1,
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 59,
                                    "char": 22
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 59,
                                "char": 22
                            },
                            "statements": [
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
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 60,
                                                    "char": 13
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_started",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 60,
                                                    "char": 24
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 60,
                                                "char": 24
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 60,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "not-identical",
                                            "left": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 60,
                                                    "char": 31
                                                },
                                                "name": "status",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 60,
                                                "char": 43
                                            },
                                            "right": {
                                                "type": "static-constant-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "self",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 60,
                                                    "char": 66
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "SESSION_ACTIVE",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 60,
                                                    "char": 66
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 60,
                                                "char": 66
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 60,
                                            "char": 66
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 60,
                                        "char": 66
                                    },
                                    "statements": [
                                        {
                                            "type": "fcall",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "session_start",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 61,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 62,
                                            "char": 7
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "object-property",
                                                    "operator": "assign",
                                                    "variable": "this",
                                                    "property": "_started",
                                                    "expr": {
                                                        "type": "bool",
                                                        "value": "true",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                        "line": 62,
                                                        "char": 30
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 62,
                                                    "char": 30
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 63,
                                            "char": 10
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "bool",
                                                "value": "true",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 63,
                                                "char": 16
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 64,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 65,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 66,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 66,
                                "char": 15
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 67,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Starts the session (if headers are already sent the session will not be started)\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 58,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 58,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 57,
                    "last-line": 79,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 80,
                            "char": 43
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "uniqueId",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 82,
                                    "char": 15
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 84,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "uniqueId",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 84,
                                    "char": 42
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 84,
                                        "char": 29
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "uniqueId",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 84,
                                        "char": 40
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 84,
                                    "char": 42
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 84,
                                "char": 42
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_uniqueId",
                                            "expr": {
                                                "type": "variable",
                                                "value": "uniqueId",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 85,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 85,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 86,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 88,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_options",
                                    "expr": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 88,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 88,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 89,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Sets session's options\n\t *\n\t *<code>\n\t * $session->setOptions(\n\t *     [\n\t *         \"uniqueId\" => \"my-private-app\",\n\t *     ]\n\t * );\n\t *<\/code>\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 80,
                    "last-line": 93,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getOptions",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 96,
                                    "char": 15
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_options",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 96,
                                    "char": 24
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 96,
                                "char": 24
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 97,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Get internal options\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 95,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 95,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 94,
                    "last-line": 101,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 102,
                            "char": 37
                        }
                    ],
                    "statements": [
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "session_name",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "name",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 104,
                                            "char": 23
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 104,
                                        "char": 23
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 104,
                                "char": 24
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 105,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Set session name\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 102,
                    "last-line": 109,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getName",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "session_name",
                                "call-type": 1,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 112,
                                "char": 27
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 113,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Get session name\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 111,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 111,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 110,
                    "last-line": 117,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 118,
                                "char": 59
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 118,
                            "char": 59
                        }
                    ],
                    "statements": [
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "session_regenerate_id",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "deleteOldSession",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 120,
                                            "char": 41
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 120,
                                        "char": 41
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 120,
                                "char": 42
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 121,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 121,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 122,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * {@inheritdoc}\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "Adapter",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 119,
                                    "char": 2
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 119,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 119,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 118,
                    "last-line": 130,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 131,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 131,
                                "char": 59
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 131,
                            "char": 59
                        },
                        {
                            "type": "parameter",
                            "name": "remove",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 131,
                                "char": 83
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 131,
                            "char": 83
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "value",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 133,
                                    "char": 12
                                },
                                {
                                    "variable": "key",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 133,
                                    "char": 17
                                },
                                {
                                    "variable": "uniqueId",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 133,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 135,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "uniqueId",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 135,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_uniqueId",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 135,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 135,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 135,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 136,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "variable",
                                        "value": "uniqueId",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 136,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 136,
                                    "char": 22
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 136,
                                "char": 22
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "key",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "uniqueId",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                        "line": 137,
                                                        "char": 23
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "#",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                        "line": 137,
                                                        "char": 29
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 137,
                                                    "char": 29
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "index",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 137,
                                                    "char": 36
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 137,
                                                "char": 36
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 137,
                                            "char": 36
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 138,
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
                                            "variable": "key",
                                            "expr": {
                                                "type": "variable",
                                                "value": "index",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 139,
                                                "char": 19
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 139,
                                            "char": 19
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 140,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 142,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "value",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 142,
                                    "char": 33
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "_SESSION",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 142,
                                        "char": 27
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "key",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 142,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 142,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 142,
                                "char": 33
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "variable",
                                        "value": "remove",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 143,
                                        "char": 14
                                    },
                                    "statements": [
                                        {
                                            "type": "unset",
                                            "expr": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "_SESSION",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 144,
                                                    "char": 19
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "key",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 144,
                                                    "char": 23
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 144,
                                                "char": 24
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 145,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 146,
                                    "char": 9
                                },
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "variable",
                                        "value": "value",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 146,
                                        "char": 16
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 147,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 149,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "defaultValue",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 149,
                                "char": 22
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 150,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Gets a session variable from an application context\n\t *\n\t * <code>\n\t * $session->get(\"auth\", \"yes\");\n\t * <\/code>\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "variable",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 132,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 132,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 131,
                    "last-line": 158,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 159,
                            "char": 34
                        },
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 159,
                            "char": 45
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "uniqueId",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 161,
                                    "char": 15
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 163,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "uniqueId",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 163,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_uniqueId",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 163,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 163,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 163,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 164,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "variable",
                                        "value": "uniqueId",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 164,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 164,
                                    "char": 22
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 164,
                                "char": 22
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "array-index",
                                            "operator": "assign",
                                            "variable": "_SESSION",
                                            "index-expr": [
                                                {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "uniqueId",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                            "line": 165,
                                                            "char": 26
                                                        },
                                                        "right": {
                                                            "type": "string",
                                                            "value": "#",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                            "line": 165,
                                                            "char": 32
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                        "line": 165,
                                                        "char": 32
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "index",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                        "line": 165,
                                                        "char": 39
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 165,
                                                    "char": 39
                                                }
                                            ],
                                            "expr": {
                                                "type": "variable",
                                                "value": "value",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 165,
                                                "char": 48
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 165,
                                            "char": 48
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 166,
                                    "char": 9
                                },
                                {
                                    "type": "return",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 167,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 169,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "array-index",
                                    "operator": "assign",
                                    "variable": "_SESSION",
                                    "index-expr": [
                                        {
                                            "type": "variable",
                                            "value": "index",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 169,
                                            "char": 21
                                        }
                                    ],
                                    "expr": {
                                        "type": "variable",
                                        "value": "value",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 169,
                                        "char": 30
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 169,
                                    "char": 30
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 170,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Sets a session variable in an application context\n\t *\n\t *<code>\n\t * $session->set(\"auth\", \"yes\");\n\t *<\/code>\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 159,
                    "last-line": 180,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 181,
                            "char": 34
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "uniqueId",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 183,
                                    "char": 15
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 185,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "uniqueId",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 185,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_uniqueId",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 185,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 185,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 185,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 186,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "variable",
                                        "value": "uniqueId",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 186,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 186,
                                    "char": 22
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 186,
                                "char": 22
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "isset",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "_SESSION",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 187,
                                                "char": 25
                                            },
                                            "right": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "uniqueId",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                        "line": 187,
                                                        "char": 35
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "#",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                        "line": 187,
                                                        "char": 41
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 187,
                                                    "char": 41
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "index",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 187,
                                                    "char": 48
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 187,
                                                "char": 48
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 187,
                                            "char": 49
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 187,
                                        "char": 49
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 188,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 190,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "isset",
                                "left": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "_SESSION",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 190,
                                        "char": 24
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "index",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 190,
                                        "char": 30
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 190,
                                    "char": 31
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 190,
                                "char": 31
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 191,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Check whether a session variable is set in an application context\n\t *\n\t *<code>\n\t * var_dump(\n\t *     $session->has(\"auth\")\n\t * );\n\t *<\/code>\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 182,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 182,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 181,
                    "last-line": 199,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 200,
                            "char": 37
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "uniqueId",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 202,
                                    "char": 15
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 204,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "uniqueId",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 204,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_uniqueId",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 204,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 204,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 204,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 205,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "variable",
                                        "value": "uniqueId",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 205,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 205,
                                    "char": 22
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 205,
                                "char": 22
                            },
                            "statements": [
                                {
                                    "type": "unset",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "_SESSION",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 206,
                                            "char": 18
                                        },
                                        "right": {
                                            "type": "concat",
                                            "left": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "uniqueId",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 206,
                                                    "char": 28
                                                },
                                                "right": {
                                                    "type": "string",
                                                    "value": "#",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 206,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 206,
                                                "char": 34
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "index",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 206,
                                                "char": 41
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 206,
                                            "char": 41
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 206,
                                        "char": 42
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 207,
                                    "char": 9
                                },
                                {
                                    "type": "return",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 208,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 210,
                            "char": 7
                        },
                        {
                            "type": "unset",
                            "expr": {
                                "type": "array-access",
                                "left": {
                                    "type": "variable",
                                    "value": "_SESSION",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 210,
                                    "char": 17
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "index",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 210,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 210,
                                "char": 24
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 211,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Removes a session variable from an application context\n\t *\n\t * <code>\n\t * $session->remove(\"auth\");\n\t * <\/code>\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 201,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 200,
                    "last-line": 219,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getId",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "session_id",
                                "call-type": 1,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 222,
                                "char": 22
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 223,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns active session id\n\t *\n\t *<code>\n\t * echo $session->getId();\n\t *<\/code>\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 221,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 221,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 220,
                    "last-line": 231,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setId",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "id",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 232,
                            "char": 33
                        }
                    ],
                    "statements": [
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "session_id",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "id",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 234,
                                            "char": 16
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 234,
                                        "char": 16
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 234,
                                "char": 17
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 235,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Set the current session id\n\t *\n\t *<code>\n\t * $session->setId($id);\n\t *<\/code>\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 232,
                    "last-line": 245,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isStarted",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 248,
                                    "char": 15
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_started",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 248,
                                    "char": 24
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 248,
                                "char": 24
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 249,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Check whether the session has been started\n\t *\n\t *<code>\n\t * var_dump(\n\t *     $session->isStarted()\n\t * );\n\t *<\/code>\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 247,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 247,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 246,
                    "last-line": 263,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 264,
                                "char": 52
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 264,
                            "char": 52
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "removeData",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 266,
                                "char": 17
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 267,
                                            "char": 9
                                        },
                                        "name": "removeSessionData",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 267,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 268,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 270,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_started",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 270,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 270,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 271,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "session_destroy",
                                "call-type": 1,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 271,
                                "char": 27
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 272,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Destroys the active session\n\t *\n\t *<code>\n\t * var_dump(\n\t *     $session->destroy()\n\t * );\n\t *\n\t * var_dump(\n\t *     $session->destroy(true)\n\t * );\n\t *<\/code>\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 265,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 265,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 264,
                    "last-line": 286,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "status",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "status",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 289,
                                    "char": 13
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 291,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "status",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "session_status",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 291,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 291,
                                    "char": 32
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 293,
                            "char": 8
                        },
                        {
                            "type": "switch",
                            "expr": {
                                "type": "variable",
                                "value": "status",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 293,
                                "char": 17
                            },
                            "clauses": [
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "constant",
                                        "value": "PHP_SESSION_DISABLED",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 294,
                                        "char": 29
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "static-constant-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "self",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 295,
                                                    "char": 34
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "SESSION_DISABLED",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 295,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 295,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 297,
                                            "char": 7
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 297,
                                    "char": 7
                                },
                                {
                                    "type": "case",
                                    "expr": {
                                        "type": "constant",
                                        "value": "PHP_SESSION_ACTIVE",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 297,
                                        "char": 27
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "static-constant-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "self",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 298,
                                                    "char": 32
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "SESSION_ACTIVE",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 298,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 298,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 299,
                                            "char": 3
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 299,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 301,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "static-constant-access",
                                "left": {
                                    "type": "variable",
                                    "value": "self",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 301,
                                    "char": 28
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "SESSION_NONE",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 301,
                                    "char": 28
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 301,
                                "char": 28
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 302,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns the status of the current session.\n\t *\n\t *<code>\n\t * var_dump(\n\t *     $session->status()\n\t * );\n\t *\n\t * if ($session->status() !== $session::SESSION_ACTIVE) {\n\t *     $session->start();\n\t * }\n\t *<\/code>\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 288,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 288,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 287,
                    "last-line": 306,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__get",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "index",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 307,
                            "char": 36
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 309,
                                    "char": 15
                                },
                                "name": "get",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "index",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 309,
                                            "char": 25
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 309,
                                        "char": 25
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 309,
                                "char": 26
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 310,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Alias: Gets a session variable from an application context\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "variable",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 308,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 308,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 307,
                    "last-line": 314,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__set",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "index",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 315,
                            "char": 36
                        },
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 315,
                            "char": 47
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 317,
                                    "char": 15
                                },
                                "name": "set",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "index",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 317,
                                            "char": 25
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 317,
                                        "char": 25
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "value",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 317,
                                            "char": 32
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 317,
                                        "char": 32
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 317,
                                "char": 33
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 318,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Alias: Sets a session variable in an application context\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 315,
                    "last-line": 322,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__isset",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "index",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 323,
                            "char": 38
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 325,
                                    "char": 15
                                },
                                "name": "has",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "index",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 325,
                                            "char": 25
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 325,
                                        "char": 25
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 325,
                                "char": 26
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 326,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Alias: Check whether a session variable is set in an application context\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 324,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 324,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 323,
                    "last-line": 334,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__unset",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "index",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 335,
                            "char": 38
                        }
                    ],
                    "statements": [
                        {
                            "type": "mcall",
                            "expr": {
                                "type": "mcall",
                                "variable": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 337,
                                    "char": 8
                                },
                                "name": "remove",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "index",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 337,
                                            "char": 21
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 337,
                                        "char": 21
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 337,
                                "char": 22
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 338,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Alias: Removes a session variable from an application context\n\t *\n\t * <code>\n\t * unset($session->auth);\n\t * <\/code>\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 335,
                    "last-line": 340,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "__destruct",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 342,
                                    "char": 11
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_started",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 342,
                                    "char": 21
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 342,
                                "char": 21
                            },
                            "statements": [
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "session_write_close",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 343,
                                        "char": 25
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 344,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_started",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 344,
                                                "char": 30
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 344,
                                            "char": 30
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 345,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 346,
                            "char": 2
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 340,
                    "last-line": 348,
                    "char": 16
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "removeSessionData",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "uniqueId",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 350,
                                    "char": 15
                                },
                                {
                                    "variable": "key",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 350,
                                    "char": 20
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 352,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "uniqueId",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 352,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_uniqueId",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 352,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 352,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 352,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 354,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "empty",
                                "left": {
                                    "type": "variable",
                                    "value": "_SESSION",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 354,
                                    "char": 21
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 354,
                                "char": 21
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 356,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 358,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "empty",
                                    "left": {
                                        "type": "variable",
                                        "value": "uniqueId",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 358,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 358,
                                    "char": 22
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                "line": 358,
                                "char": 22
                            },
                            "statements": [
                                {
                                    "type": "for",
                                    "expr": {
                                        "type": "variable",
                                        "value": "_SESSION",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                        "line": 359,
                                        "char": 27
                                    },
                                    "key": "key",
                                    "value": "_",
                                    "reverse": 0,
                                    "statements": [
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "starts_with",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                            "line": 360,
                                                            "char": 23
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                        "line": 360,
                                                        "char": 23
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "concat",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "uniqueId",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                                "line": 360,
                                                                "char": 34
                                                            },
                                                            "right": {
                                                                "type": "string",
                                                                "value": "#",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                                "line": 360,
                                                                "char": 39
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                            "line": 360,
                                                            "char": 39
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                        "line": 360,
                                                        "char": 39
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 360,
                                                "char": 41
                                            },
                                            "statements": [
                                                {
                                                    "type": "unset",
                                                    "expr": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "_SESSION",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                            "line": 361,
                                                            "char": 20
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "key",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                            "line": 361,
                                                            "char": 24
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                        "line": 361,
                                                        "char": 25
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                    "line": 362,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 363,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 364,
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
                                            "variable": "_SESSION",
                                            "expr": {
                                                "type": "empty-array",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                                "line": 365,
                                                "char": 21
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                            "line": 365,
                                            "char": 21
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                                    "line": 366,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                            "line": 367,
                            "char": 2
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 349,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 348,
                    "last-line": 368,
                    "char": 19
                }
            ],
            "constants": [
                {
                    "type": "const",
                    "name": "SESSION_ACTIVE",
                    "default": {
                        "type": "int",
                        "value": "2",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 30,
                        "char": 26
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 32,
                    "char": 6
                },
                {
                    "type": "const",
                    "name": "SESSION_NONE",
                    "default": {
                        "type": "int",
                        "value": "1",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 32,
                        "char": 24
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 34,
                    "char": 6
                },
                {
                    "type": "const",
                    "name": "SESSION_DISABLED",
                    "default": {
                        "type": "int",
                        "value": "0",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                        "line": 34,
                        "char": 28
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
                    "line": 36,
                    "char": 10
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
            "line": 28,
            "char": 14
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/session\/adapter.zep",
        "line": 28,
        "char": 14
    }
]