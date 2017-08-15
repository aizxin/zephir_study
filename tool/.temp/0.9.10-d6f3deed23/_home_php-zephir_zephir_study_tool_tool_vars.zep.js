[
    {
        "type": "namespace",
        "name": "Tool",
        "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "Vars",
        "abstract": 0,
        "final": 0,
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public",
                        "static"
                    ],
                    "type": "method",
                    "name": "testVarDump",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "a",
                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                    "line": 7,
                                    "char": 14
                                },
                                {
                                    "variable": "ar",
                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                    "line": 7,
                                    "char": 18
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                            "line": 9,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "a",
                                    "expr": {
                                        "type": "string",
                                        "value": "hello",
                                        "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                        "line": 9,
                                        "char": 24
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                    "line": 9,
                                    "char": 24
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                            "line": 10,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "ar",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "value": {
                                                    "type": "int",
                                                    "value": "1",
                                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                    "line": 10,
                                                    "char": 20
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                "line": 10,
                                                "char": 20
                                            },
                                            {
                                                "value": {
                                                    "type": "string",
                                                    "value": "world",
                                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                    "line": 10,
                                                    "char": 29
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                "line": 10,
                                                "char": 29
                                            },
                                            {
                                                "value": {
                                                    "type": "bool",
                                                    "value": "false",
                                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                    "line": 10,
                                                    "char": 36
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                "line": 10,
                                                "char": 36
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                        "line": 10,
                                        "char": 37
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                    "line": 10,
                                    "char": 37
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                            "line": 12,
                            "char": 16
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "var_dump",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "ar",
                                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                            "line": 12,
                                            "char": 20
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                        "line": 12,
                                        "char": 20
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                "line": 12,
                                "char": 21
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                            "line": 13,
                            "char": 16
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "var_dump",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "a",
                                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                            "line": 13,
                                            "char": 19
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                        "line": 13,
                                        "char": 19
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                "line": 13,
                                "char": 20
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                            "line": 14,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                    "line": 5,
                    "last-line": 16,
                    "char": 26
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "testVarDump2",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "ret",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                            "line": 16,
                            "char": 37
                        }
                    ],
                    "statements": [
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "var_dump",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "equals",
                                            "left": {
                                                "type": "variable",
                                                "value": "ret",
                                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                "line": 18,
                                                "char": 23
                                            },
                                            "right": {
                                                "type": "int",
                                                "value": "1",
                                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                "line": 18,
                                                "char": 26
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                            "line": 18,
                                            "char": 26
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                        "line": 18,
                                        "char": 26
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                "line": 18,
                                "char": 27
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                            "line": 19,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                    "line": 16,
                    "last-line": 21,
                    "char": 19
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "testVarExport",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "a",
                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                    "line": 23,
                                    "char": 14
                                },
                                {
                                    "variable": "ar",
                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                    "line": 23,
                                    "char": 18
                                },
                                {
                                    "variable": "ret",
                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                    "line": 23,
                                    "char": 23
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                            "line": 25,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "a",
                                    "expr": {
                                        "type": "string",
                                        "value": "hello",
                                        "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                        "line": 25,
                                        "char": 24
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                    "line": 25,
                                    "char": 24
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                            "line": 26,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "ar",
                                    "expr": {
                                        "type": "array",
                                        "left": [
                                            {
                                                "value": {
                                                    "type": "int",
                                                    "value": "1",
                                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                    "line": 26,
                                                    "char": 20
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                "line": 26,
                                                "char": 20
                                            },
                                            {
                                                "value": {
                                                    "type": "string",
                                                    "value": "world",
                                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                    "line": 26,
                                                    "char": 29
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                "line": 26,
                                                "char": 29
                                            },
                                            {
                                                "value": {
                                                    "type": "bool",
                                                    "value": "false",
                                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                    "line": 26,
                                                    "char": 36
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                "line": 26,
                                                "char": 36
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                        "line": 26,
                                        "char": 37
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                    "line": 26,
                                    "char": 37
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                            "line": 28,
                            "char": 18
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "var_export",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "ar",
                                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                            "line": 28,
                                            "char": 22
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                        "line": 28,
                                        "char": 22
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                "line": 28,
                                "char": 23
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                            "line": 29,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "ret",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "var_export",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "ar",
                                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                    "line": 29,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                "line": 29,
                                                "char": 32
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                        "line": 29,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                    "line": 29,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                            "line": 31,
                            "char": 18
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "var_export",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "a",
                                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                            "line": 31,
                                            "char": 21
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                        "line": 31,
                                        "char": 21
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                "line": 31,
                                "char": 22
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                            "line": 32,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "ret",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "var_export",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "a",
                                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                    "line": 32,
                                                    "char": 31
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                                "line": 32,
                                                "char": 31
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                        "line": 32,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                    "line": 32,
                                    "char": 32
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                            "line": 34,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "ret",
                                "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                                "line": 34,
                                "char": 19
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                            "line": 35,
                            "char": 5
                        }
                    ],
                    "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
                    "line": 21,
                    "last-line": 36,
                    "char": 19
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/tool\/tool\/vars.zep",
        "line": 3,
        "char": 5
    }
]