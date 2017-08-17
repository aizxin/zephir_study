[
    {
        "type": "namespace",
        "name": "Vof\\Cache",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                "line": 22,
                "char": 32
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
        "line": 28,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Cache\\Backend\n *\n * This class implements common functionality for backend adapters. A backend cache adapter may extend this class\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
        "line": 29,
        "char": 8
    },
    {
        "type": "class",
        "name": "Backend",
        "abstract": 1,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "BackendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                "line": 30,
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
                    "name": "_frontend",
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 32,
                            "char": 27
                        },
                        {
                            "type": "shortcut",
                            "name": "set",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 32,
                            "char": 33
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                    "line": 34,
                    "char": 10
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_options",
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 34,
                            "char": 26
                        },
                        {
                            "type": "shortcut",
                            "name": "set",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 34,
                            "char": 32
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                    "line": 36,
                    "char": 10
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_prefix",
                    "default": {
                        "type": "string",
                        "value": "",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                        "line": 36,
                        "char": 24
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                    "line": 38,
                    "char": 10
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_lastKey",
                    "default": {
                        "type": "string",
                        "value": "",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                        "line": 38,
                        "char": 26
                    },
                    "shortcuts": [
                        {
                            "type": "shortcut",
                            "name": "get",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 38,
                            "char": 31
                        },
                        {
                            "type": "shortcut",
                            "name": "set",
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 38,
                            "char": 37
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                    "line": 40,
                    "char": 10
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_lastLifetime",
                    "default": {
                        "type": "null",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                        "line": 40,
                        "char": 32
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                    "line": 42,
                    "char": 10
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_fresh",
                    "default": {
                        "type": "bool",
                        "value": "false",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                        "line": 42,
                        "char": 26
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                    "line": 44,
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
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                        "line": 44,
                        "char": 28
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
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
                            "name": "frontend",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "cast": {
                                "type": "variable",
                                "value": "FrontendInterface",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                "line": 52,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 52,
                            "char": 58
                        },
                        {
                            "type": "parameter",
                            "name": "options",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                "line": 52,
                                "char": 74
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 52,
                            "char": 74
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 54,
                                    "char": 13
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 59,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 59,
                                    "char": 38
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                        "line": 59,
                                        "char": 27
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "prefix",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                        "line": 59,
                                        "char": 36
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 59,
                                    "char": 38
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                "line": 59,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_prefix",
                                            "expr": {
                                                "type": "variable",
                                                "value": "prefix",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                                "line": 60,
                                                "char": 30
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                            "line": 60,
                                            "char": 30
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 61,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 63,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_frontend",
                                    "expr": {
                                        "type": "variable",
                                        "value": "frontend",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                        "line": 63,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 63,
                                    "char": 33
                                },
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_options",
                                    "expr": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                        "line": 64,
                                        "char": 28
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 64,
                                    "char": 28
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 65,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Cache\\Backend constructor\n\t *\n\t * @param \\Vof\\Cache\\FrontendInterface frontend\n\t * @param array options\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                    "line": 52,
                    "last-line": 73,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "start",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "keyName",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 74,
                            "char": 35
                        },
                        {
                            "type": "parameter",
                            "name": "lifetime",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                "line": 74,
                                "char": 52
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 74,
                            "char": 52
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "existingCache",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 76,
                                    "char": 20
                                },
                                {
                                    "variable": "fresh",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 76,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 81,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "existingCache",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                            "line": 81,
                                            "char": 28
                                        },
                                        "name": "get",
                                        "call-type": 3,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "keyName",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                                    "line": 81,
                                                    "char": 44
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                                "line": 81,
                                                "char": 44
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "lifetime",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                                    "line": 81,
                                                    "char": 54
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                                "line": 81,
                                                "char": 54
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                        "line": 81,
                                        "char": 55
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 81,
                                    "char": 55
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 83,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "existingCache",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 83,
                                    "char": 22
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 83,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                "line": 83,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "fresh",
                                            "expr": {
                                                "type": "bool",
                                                "value": "true",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                                "line": 84,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                            "line": 84,
                                            "char": 20
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 85,
                                    "char": 7
                                },
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                                "line": 85,
                                                "char": 9
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_frontend",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                                "line": 85,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                            "line": 85,
                                            "char": 20
                                        },
                                        "name": "start",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                        "line": 85,
                                        "char": 28
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 86,
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
                                            "variable": "fresh",
                                            "expr": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                                "line": 87,
                                                "char": 21
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                            "line": 87,
                                            "char": 21
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 88,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 90,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_fresh",
                                    "expr": {
                                        "type": "variable",
                                        "value": "fresh",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                        "line": 90,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 90,
                                    "char": 27
                                },
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_started",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                        "line": 91,
                                        "char": 25
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 91,
                                    "char": 25
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 96,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "lifetime",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                        "line": 96,
                                        "char": 23
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 96,
                                    "char": 23
                                },
                                "right": {
                                    "type": "string",
                                    "value": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 96,
                                    "char": 32
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                "line": 96,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_lastLifetime",
                                            "expr": {
                                                "type": "variable",
                                                "value": "lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                                "line": 97,
                                                "char": 38
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                            "line": 97,
                                            "char": 38
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 98,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 100,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "existingCache",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                "line": 100,
                                "char": 23
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 101,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Starts a cache. The keyname allows to identify the created fragment\n\t *\n\t * @param   int|string keyName\n\t * @param   int lifetime\n\t * @return  mixed\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                    "line": 74,
                    "last-line": 105,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "stop",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "stopBuffer",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                "line": 106,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 106,
                            "char": 48
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "stopBuffer",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 108,
                                    "char": 19
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 108,
                                    "char": 26
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                "line": 108,
                                "char": 26
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                                "line": 109,
                                                "char": 9
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_frontend",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                                "line": 109,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                            "line": 109,
                                            "char": 20
                                        },
                                        "name": "stop",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                        "line": 109,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 110,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 111,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                        "line": 111,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 111,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 112,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Stops the frontend without store any cached content\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                        "line": 107,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                    "line": 106,
                    "last-line": 116,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isFresh",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 119,
                                    "char": 15
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_fresh",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 119,
                                    "char": 22
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                "line": 119,
                                "char": 22
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 120,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Checks whether the last cache is fresh or cached\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                "line": 118,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                        "line": 118,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                    "line": 117,
                    "last-line": 124,
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 127,
                                    "char": 15
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_started",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 127,
                                    "char": 24
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                "line": 127,
                                "char": 24
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 128,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Checks whether the cache has starting buffering or not\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                "line": 126,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                        "line": 126,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                    "line": 125,
                    "last-line": 134,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getLifetime",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 137,
                                    "char": 15
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_lastLifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                    "line": 137,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                "line": 137,
                                "char": 29
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                            "line": 138,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Gets the last lifetime set\n\t *\n\t * @return int\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                                "line": 136,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                        "line": 136,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
                    "line": 135,
                    "last-line": 139,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
            "line": 29,
            "char": 14
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend.zep",
        "line": 29,
        "char": 14
    }
]