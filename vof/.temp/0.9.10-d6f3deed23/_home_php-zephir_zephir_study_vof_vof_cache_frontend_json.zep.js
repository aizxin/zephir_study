[
    {
        "type": "namespace",
        "name": "Vof\\Cache\\Frontend",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                "line": 22,
                "char": 32
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
        "line": 60,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Cache\\Frontend\\Json\n *\n * Allows to cache data converting\/deconverting them to JSON.\n *\n * This adapter uses the json_encode\/json_decode PHP's functions\n *\n * As the data is encoded in JSON other systems accessing the same backend could\n * process them\n *\n *<code>\n *<?php\n *\n * \/\/ Cache the data for 2 days\n * $frontCache = new \\Vof\\Cache\\Frontend\\Json(\n *     [\n *         \"lifetime\" => 172800,\n *     ]\n * );\n *\n * \/\/ Create the Cache setting memcached connection options\n * $cache = new \\Vof\\Cache\\Backend\\Memcache(\n *     $frontCache,\n *     [\n *         \"host\"       => \"localhost\",\n *         \"port\"       => 11211,\n *         \"persistent\" => false,\n *     ]\n * );\n *\n * \/\/ Cache arbitrary data\n * $cache->save(\"my-data\", [1, 2, 3, 4, 5]);\n *\n * \/\/ Get data\n * $data = $cache->get(\"my-data\");\n *<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
        "line": 61,
        "char": 5
    },
    {
        "type": "class",
        "name": "Json",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                "line": 62,
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
                    "name": "_frontendOptions",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                    "line": 70,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                "line": 71,
                                "char": 52
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                            "line": 71,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                        "line": 73,
                                        "char": 47
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                    "line": 73,
                                    "char": 47
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                            "line": 74,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Cache\\Frontend\\Base64 constructor\n\t *\n\t * @param array frontendOptions\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                    "line": 71,
                    "last-line": 78,
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                    "line": 81,
                                    "char": 14
                                },
                                {
                                    "variable": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                    "line": 81,
                                    "char": 24
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                            "line": 82,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                            "line": 82,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_frontendOptions",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                            "line": 82,
                                            "char": 39
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                        "line": 82,
                                        "char": 39
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                    "line": 82,
                                    "char": 39
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                            "line": 83,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                        "line": 83,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                    "line": 83,
                                    "char": 22
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                    "line": 83,
                                    "char": 32
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                "line": 83,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                            "line": 84,
                                            "char": 43
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                                "line": 84,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                                "line": 84,
                                                "char": 41
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                            "line": 84,
                                            "char": 43
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                        "line": 84,
                                        "char": 43
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "variable",
                                                "value": "lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                                "line": 85,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                            "line": 86,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                    "line": 87,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                            "line": 88,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "int",
                                "value": "1",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                "line": 88,
                                "char": 11
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                            "line": 89,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                "line": 80,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                        "line": 80,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                    "line": 79,
                    "last-line": 93,
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
                                "type": "bool",
                                "value": "false",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                "line": 96,
                                "char": 15
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                            "line": 97,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                "line": 95,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                        "line": 95,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                    "line": 94,
                    "last-line": 101,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "start",
                    "docblock": "**\n\t * Starts output frontend. Actually, does nothing\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                    "line": 102,
                    "last-line": 111,
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
                            "type": "return",
                            "expr": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                "line": 114,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                            "line": 115,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns output cached content\n\t *\n\t * @return string\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                    "line": 112,
                    "last-line": 119,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "stop",
                    "docblock": "**\n\t * Stops output frontend\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "void": 1,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                        "line": 121,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                    "line": 120,
                    "last-line": 127,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                            "line": 128,
                            "char": 38
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "json_encode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "data",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                            "line": 130,
                                            "char": 26
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                        "line": 130,
                                        "char": 26
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                "line": 130,
                                "char": 27
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                            "line": 131,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                "line": 129,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                        "line": 129,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                    "line": 128,
                    "last-line": 135,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                            "line": 136,
                            "char": 40
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "json_decode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "data",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                            "line": 139,
                                            "char": 26
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                        "line": 139,
                                        "char": 26
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                "line": 139,
                                "char": 27
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                            "line": 140,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                                "line": 137,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                        "line": 137,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
                    "line": 136,
                    "last-line": 141,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
            "line": 61,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/json.zep",
        "line": 61,
        "char": 5
    }
]