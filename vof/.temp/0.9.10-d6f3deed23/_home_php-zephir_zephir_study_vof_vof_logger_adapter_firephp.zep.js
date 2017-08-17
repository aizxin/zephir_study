[
    {
        "type": "namespace",
        "name": "Vof\\Logger\\Adapter",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Adapter",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                "line": 23,
                "char": 23
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
        "line": 24,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Exception",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                "line": 24,
                "char": 25
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
        "line": 25,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\FormatterInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                "line": 25,
                "char": 34
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
        "line": 26,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Logger\\Formatter\\Firephp",
                "alias": "FirePhpFormatter",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                "line": 26,
                "char": 53
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
        "line": 42,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Logger\\Adapter\\Firephp\n *\n * Sends logs to FirePHP\n *\n *<code>\n * use Vof\\Logger\\Adapter\\Firephp;\n * use Vof\\Logger;\n *\n * $logger = new Firephp();\n *\n * $logger->log(Logger::ERROR, \"This is an error\");\n * $logger->error(\"This is another error\");\n *<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
        "line": 43,
        "char": 5
    },
    {
        "type": "class",
        "name": "Firephp",
        "abstract": 0,
        "final": 0,
        "extends": "Adapter",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "_initialized",
                    "default": {
                        "type": "bool",
                        "value": "false",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                        "line": 45,
                        "char": 30
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                    "line": 47,
                    "char": 8
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "_index",
                    "default": {
                        "type": "int",
                        "value": "1",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                        "line": 47,
                        "char": 20
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
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
                    "name": "getFormatter",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "not-identical",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                            "line": 54,
                                            "char": 18
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_formatter",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                            "line": 54,
                                            "char": 32
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                        "line": 54,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 54,
                                    "char": 32
                                },
                                "right": {
                                    "type": "string",
                                    "value": "object",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 54,
                                    "char": 43
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                "line": 54,
                                "char": 43
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_formatter",
                                            "expr": {
                                                "type": "new",
                                                "class": "FirePhpFormatter",
                                                "dynamic": 0,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                "line": 55,
                                                "char": 49
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                            "line": 55,
                                            "char": 49
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 56,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                            "line": 58,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 58,
                                    "char": 15
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_formatter",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 58,
                                    "char": 26
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                "line": 58,
                                "char": 26
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                            "line": 59,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns the internal formatter\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "FormatterInterface",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 53,
                                    "char": 2
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                "line": 53,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                        "line": 53,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                    "line": 52,
                    "last-line": 63,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "logInternal",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "message",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                            "line": 64,
                            "char": 44
                        },
                        {
                            "type": "parameter",
                            "name": "type",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                            "line": 64,
                            "char": 54
                        },
                        {
                            "type": "parameter",
                            "name": "time",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                            "line": 64,
                            "char": 64
                        },
                        {
                            "type": "parameter",
                            "name": "context",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                            "line": 64,
                            "char": 79
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "chunk",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 66,
                                    "char": 12
                                },
                                {
                                    "variable": "format",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 66,
                                    "char": 20
                                },
                                {
                                    "variable": "chString",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 66,
                                    "char": 30
                                },
                                {
                                    "variable": "content",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 66,
                                    "char": 39
                                },
                                {
                                    "variable": "key",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 66,
                                    "char": 44
                                },
                                {
                                    "variable": "index",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 66,
                                    "char": 51
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                            "line": 68,
                            "char": 4
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                        "line": 68,
                                        "char": 12
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "_initialized",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                        "line": 68,
                                        "char": 26
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 68,
                                    "char": 26
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                "line": 68,
                                "char": 26
                            },
                            "statements": [
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "header",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "X-Wf-Protocol-1: http:\/\/meta.wildfirehq.org\/Protocol\/JsonStream\/0.2",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                    "line": 69,
                                                    "char": 80
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                "line": 69,
                                                "char": 80
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                        "line": 69,
                                        "char": 81
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 70,
                                    "char": 9
                                },
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "header",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "X-Wf-1-Plugin-1: http:\/\/meta.firephp.org\/Wildfire\/Plugin\/FirePHP\/Library-FirePHPCore\/0.3",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                    "line": 70,
                                                    "char": 101
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                "line": 70,
                                                "char": 101
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                        "line": 70,
                                        "char": 102
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 71,
                                    "char": 9
                                },
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "header",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "X-Wf-Structure-1: http:\/\/meta.firephp.org\/Wildfire\/Structure\/FirePHP\/FirebugConsole\/0.1",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                    "line": 71,
                                                    "char": 100
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                "line": 71,
                                                "char": 100
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                        "line": 71,
                                        "char": 101
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 73,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_initialized",
                                            "expr": {
                                                "type": "bool",
                                                "value": "true",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                "line": 73,
                                                "char": 33
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                            "line": 73,
                                            "char": 33
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 74,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                            "line": 76,
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
                                        "type": "mcall",
                                        "variable": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                "line": 76,
                                                "char": 21
                                            },
                                            "name": "getFormatter",
                                            "call-type": 1,
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                            "line": 76,
                                            "char": 37
                                        },
                                        "name": "format",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "message",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                    "line": 76,
                                                    "char": 52
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                "line": 76,
                                                "char": 52
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "type",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                    "line": 76,
                                                    "char": 58
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                "line": 76,
                                                "char": 58
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "time",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                    "line": 76,
                                                    "char": 64
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                "line": 76,
                                                "char": 64
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "context",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                    "line": 76,
                                                    "char": 73
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                "line": 76,
                                                "char": 73
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                        "line": 76,
                                        "char": 74
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 76,
                                    "char": 74
                                },
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "chunk",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "str_split",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "format",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                    "line": 77,
                                                    "char": 28
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                "line": 77,
                                                "char": 28
                                            },
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "4500",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                    "line": 77,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                "line": 77,
                                                "char": 34
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                        "line": 77,
                                        "char": 35
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 77,
                                    "char": 35
                                },
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "index",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                            "line": 78,
                                            "char": 17
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_index",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                            "line": 78,
                                            "char": 24
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                        "line": 78,
                                        "char": 24
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 78,
                                    "char": 24
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                            "line": 80,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "chunk",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                "line": 80,
                                "char": 30
                            },
                            "key": "key",
                            "value": "chString",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "content",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "string",
                                                            "value": "X-Wf-1-1-1-",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                            "line": 81,
                                                            "char": 32
                                                        },
                                                        "right": {
                                                            "type": "cast",
                                                            "left": "string",
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "index",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                                "line": 81,
                                                                "char": 49
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                            "line": 81,
                                                            "char": 49
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                        "line": 81,
                                                        "char": 49
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": ": ",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                        "line": 81,
                                                        "char": 56
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                    "line": 81,
                                                    "char": 56
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "chString",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                    "line": 81,
                                                    "char": 66
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                "line": 81,
                                                "char": 66
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                            "line": 81,
                                            "char": 66
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 83,
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
                                                    "value": "chunk",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                    "line": 83,
                                                    "char": 18
                                                },
                                                "right": {
                                                    "type": "add",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "key",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                        "line": 83,
                                                        "char": 23
                                                    },
                                                    "right": {
                                                        "type": "int",
                                                        "value": "1",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                        "line": 83,
                                                        "char": 26
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                    "line": 83,
                                                    "char": 26
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                "line": 83,
                                                "char": 27
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                            "line": 83,
                                            "char": 29
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                        "line": 83,
                                        "char": 29
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "concat-assign",
                                                    "variable": "content",
                                                    "expr": {
                                                        "type": "string",
                                                        "value": "|\\\\",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                        "line": 84,
                                                        "char": 24
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                    "line": 84,
                                                    "char": 24
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                            "line": 85,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 87,
                                    "char": 9
                                },
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "header",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "content",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                    "line": 87,
                                                    "char": 18
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                                "line": 87,
                                                "char": 18
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                        "line": 87,
                                        "char": 19
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 89,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "incr",
                                            "variable": "index",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                            "line": 89,
                                            "char": 15
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 90,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                            "line": 92,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_index",
                                    "expr": {
                                        "type": "variable",
                                        "value": "index",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                        "line": 92,
                                        "char": 27
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                    "line": 92,
                                    "char": 27
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                            "line": 93,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Writes the log to the stream itself\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                        "line": 65,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                    "line": 64,
                    "last-line": 97,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "close",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                "line": 100,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                            "line": 101,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Closes the logger\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                                "line": 99,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                        "line": 99,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
                    "line": 98,
                    "last-line": 102,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
            "line": 43,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger\/adapter\/firephp.zep",
        "line": 43,
        "char": 5
    }
]