[
    {
        "type": "namespace",
        "name": "Vof\\Cache\\Frontend",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                "line": 22,
                "char": 32
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
        "line": 68,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Cache\\Frontend\\Base64\n *\n * Allows to cache data converting\/deconverting them to base64.\n *\n * This adapter uses the base64_encode\/base64_decode PHP's functions\n *\n *<code>\n *<?php\n *\n * \/\/ Cache the files for 2 days using a Base64 frontend\n * $frontCache = new \\Vof\\Cache\\Frontend\\Base64(\n *     [\n *         \"lifetime\" => 172800,\n *     ]\n * );\n *\n * \/\/Create a MongoDB cache\n * $cache = new \\Vof\\Cache\\Backend\\Mongo(\n *     $frontCache,\n *     [\n *         \"server\"     => \"mongodb:\/\/localhost\",\n *         \"db\"         => \"caches\",\n *         \"collection\" => \"images\",\n *     ]\n * );\n *\n * $cacheKey = \"some-image.jpg.cache\";\n *\n * \/\/ Try to get cached image\n * $image = $cache->get($cacheKey);\n *\n * if ($image === null) {\n *     \/\/ Store the image in the cache\n *     $cache->save(\n *         $cacheKey,\n *         file_get_contents(\"tmp-dir\/some-image.jpg\")\n *     );\n * }\n *\n * header(\"Content-Type: image\/jpeg\");\n *\n * echo $image;\n *<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
        "line": 69,
        "char": 5
    },
    {
        "type": "class",
        "name": "Base64",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                "line": 70,
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
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                    "line": 78,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                "line": 79,
                                "char": 52
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                            "line": 79,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                        "line": 81,
                                        "char": 47
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                    "line": 81,
                                    "char": 47
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                            "line": 82,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Cache\\Frontend\\Base64 constructor\n\t *\n\t * @param array frontendOptions\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                    "line": 79,
                    "last-line": 86,
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                    "line": 89,
                                    "char": 14
                                },
                                {
                                    "variable": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                    "line": 89,
                                    "char": 24
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                            "line": 90,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                            "line": 90,
                                            "char": 22
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_frontendOptions",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                            "line": 90,
                                            "char": 39
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                        "line": 90,
                                        "char": 39
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                    "line": 90,
                                    "char": 39
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                            "line": 91,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                        "line": 91,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                    "line": 91,
                                    "char": 22
                                },
                                "right": {
                                    "type": "string",
                                    "value": "array",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                    "line": 91,
                                    "char": 32
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                "line": 91,
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
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                            "line": 92,
                                            "char": 43
                                        },
                                        "right": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                                "line": 92,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                                "line": 92,
                                                "char": 41
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                            "line": 92,
                                            "char": 43
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                        "line": 92,
                                        "char": 43
                                    },
                                    "statements": [
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "variable",
                                                "value": "lifetime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                                "line": 93,
                                                "char": 20
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                            "line": 94,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                    "line": 95,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                            "line": 96,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "int",
                                "value": "1",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                "line": 96,
                                "char": 11
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                            "line": 97,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                "line": 88,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                        "line": 88,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                    "line": 87,
                    "last-line": 101,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                "line": 104,
                                "char": 15
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                            "line": 105,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                "line": 103,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                        "line": 103,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                    "line": 102,
                    "last-line": 109,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "start",
                    "docblock": "**\n\t * Starts output frontend. Actually, does nothing in this adapter\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                    "line": 110,
                    "last-line": 119,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                "line": 122,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                            "line": 123,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns output cached content\n\t *\n\t * @return string\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                    "line": 120,
                    "last-line": 127,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "stop",
                    "docblock": "**\n\t * Stops output frontend\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                    "line": 128,
                    "last-line": 135,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                            "line": 136,
                            "char": 38
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "base64_encode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "data",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                            "line": 138,
                                            "char": 28
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                        "line": 138,
                                        "char": 28
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                "line": 138,
                                "char": 29
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                            "line": 139,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                "line": 137,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                        "line": 137,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                    "line": 136,
                    "last-line": 143,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                            "line": 144,
                            "char": 40
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "base64_decode",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "data",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                            "line": 146,
                                            "char": 28
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                        "line": 146,
                                        "char": 28
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                "line": 146,
                                "char": 29
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                            "line": 147,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                                "line": 145,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                        "line": 145,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
                    "line": 144,
                    "last-line": 148,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
            "line": 69,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/base64.zep",
        "line": 69,
        "char": 5
    }
]