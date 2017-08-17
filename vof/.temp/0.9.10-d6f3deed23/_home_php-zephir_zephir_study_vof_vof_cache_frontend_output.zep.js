[
    {
        "type": "namespace",
        "name": "Vof\\Cache\\Frontend",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                "line": 22,
                "char": 32
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
        "line": 75,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Cache\\Frontend\\Output\n *\n * Allows to cache output fragments captured with ob_* functions\n *\n*<code>\n* use Vof\\Tag;\n* use Vof\\Cache\\Backend\\File;\n* use Vof\\Cache\\Frontend\\Output;\n*\n* \/\/ Create an Output frontend. Cache the files for 2 days\n* $frontCache = new Output(\n*     [\n*         \"lifetime\" => 172800,\n*     ]\n* );\n*\n* \/\/ Create the component that will cache from the \"Output\" to a \"File\" backend\n* \/\/ Set the cache file directory - it's important to keep the \"\/\" at the end of\n* \/\/ the value for the folder\n* $cache = new File(\n*     $frontCache,\n*     [\n*         \"cacheDir\" => \"..\/app\/cache\/\",\n*     ]\n* );\n*\n* \/\/ Get\/Set the cache file to ..\/app\/cache\/my-cache.html\n* $content = $cache->start(\"my-cache.html\");\n*\n* \/\/ If $content is null then the content will be generated for the cache\n* if (null === $content) {\n*     \/\/ Print date and time\n*     echo date(\"r\");\n*\n*     \/\/ Generate a link to the sign-up action\n*     echo Tag::linkTo(\n*         [\n*             \"user\/signup\",\n*             \"Sign Up\",\n*             \"class\" => \"signup-button\",\n*         ]\n*     );\n*\n*     \/\/ Store the output into the cache file\n*     $cache->save();\n* } else {\n*     \/\/ Echo the cached output\n*     echo $content;\n* }\n*<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
        "line": 76,
        "char": 5
    },
    {
        "type": "class",
        "name": "Output",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                "line": 77,
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
                    "name": "_buffering",
                    "default": {
                        "type": "bool",
                        "value": "false",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                        "line": 79,
                        "char": 30
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                    "line": 81,
                    "char": 10
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "property",
                    "name": "_frontendOptions",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                    "line": 87,
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
                            "name": "frontendOptions",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                "line": 88,
                                "char": 52
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 88,
                            "char": 52
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
                                    "property": "_frontendOptions",
                                    "expr": {
                                        "type": "variable",
                                        "value": "frontendOptions",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                        "line": 90,
                                        "char": 47
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 90,
                                    "char": 47
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 91,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Cache\\Frontend\\Output constructor\n\t *\n\t * @param array frontendOptions\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                    "line": 88,
                    "last-line": 95,
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
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "options",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 98,
                                    "char": 14
                                },
                                {
                                    "variable": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 98,
                                    "char": 24
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 99,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "options",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                            "line": 99,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_frontendOptions",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                            "line": 99,
                                            "char": 39
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                        "line": 99,
                                        "char": 39
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 99,
                                    "char": 39
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 100,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "typeof",
                                    "left": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                        "line": 100,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 100,
                                    "char": 22
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 100,
                                    "char": 32
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                "line": 100,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fetch",
                                        "left": {
                                            "type": "variable",
                                            "value": "lifetime",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                            "line": 101,
                                            "char": 43
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                                "line": 101,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                                "line": 101,
                                                "char": 41
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                            "line": 101,
                                            "char": 43
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                        "line": 101,
                                        "char": 43
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "variable",
                                                "value": "lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                                "line": 102,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                            "line": 103,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 104,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 105,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "int",
                                "value": "1",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                "line": 105,
                                "char": 11
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 106,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns the cache lifetime\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                "line": 97,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                        "line": 97,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                    "line": 96,
                    "last-line": 110,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isBuffering",
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 113,
                                    "char": 15
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_buffering",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 113,
                                    "char": 26
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                "line": 113,
                                "char": 26
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 114,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Check whether if frontend is buffering output\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                "line": 112,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                        "line": 112,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                    "line": 111,
                    "last-line": 118,
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
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_buffering",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                        "line": 121,
                                        "char": 30
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 121,
                                    "char": 30
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 122,
                            "char": 10
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "ob_start",
                                "call-type": 1,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                "line": 122,
                                "char": 13
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 123,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Starts output frontend. Currently, does nothing\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                        "line": 120,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                    "line": 119,
                    "last-line": 129,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getContent",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 132,
                                    "char": 11
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_buffering",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 132,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                "line": 132,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "ob_get_contents",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                        "line": 133,
                                        "char": 28
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 134,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 136,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                "line": 136,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 137,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns output cached content\n\t *\n\t * @return string\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                    "line": 130,
                    "last-line": 141,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "stop",
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "property-access",
                                "left": {
                                    "type": "variable",
                                    "value": "this",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 144,
                                    "char": 11
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "_buffering",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 144,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                "line": 144,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "ob_end_clean",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                        "line": 145,
                                        "char": 18
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 146,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 148,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_buffering",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                        "line": 148,
                                        "char": 31
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                    "line": 148,
                                    "char": 31
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 149,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Stops output frontend\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                        "line": 143,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                    "line": 142,
                    "last-line": 153,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 154,
                            "char": 38
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "data",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                "line": 156,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 157,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Serializes data before storing them\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                "line": 155,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                        "line": 155,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                    "line": 154,
                    "last-line": 161,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 162,
                            "char": 40
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "data",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                "line": 164,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                            "line": 165,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Unserializes data after retrieval\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "variable",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                                "line": 163,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                        "line": 163,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
                    "line": 162,
                    "last-line": 166,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
            "line": 76,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/output.zep",
        "line": 76,
        "char": 5
    }
]