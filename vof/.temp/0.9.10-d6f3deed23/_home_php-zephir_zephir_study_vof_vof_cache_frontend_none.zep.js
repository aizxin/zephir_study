[
    {
        "type": "namespace",
        "name": "Vof\\Cache\\Frontend",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                "line": 22,
                "char": 32
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
        "line": 67,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Cache\\Frontend\\None\n *\n * Discards any kind of frontend data input. This frontend does not have expiration time or any other options\n *\n *<code>\n *<?php\n *\n * \/\/Create a None Cache\n * $frontCache = new \\Vof\\Cache\\Frontend\\None();\n *\n * \/\/ Create the component that will cache \"Data\" to a \"Memcached\" backend\n * \/\/ Memcached connection settings\n * $cache = new \\Vof\\Cache\\Backend\\Memcache(\n *     $frontCache,\n *     [\n *         \"host\" => \"localhost\",\n *         \"port\" => \"11211\",\n *     ]\n * );\n *\n * $cacheKey = \"robots_order_id.cache\";\n *\n * \/\/ This Frontend always return the data as it's returned by the backend\n * $robots = $cache->get($cacheKey);\n *\n * if ($robots === null) {\n *     \/\/ This cache doesn't perform any expiration checking, so the data is always expired\n *     \/\/ Make the database call and populate the variable\n *     $robots = Robots::find(\n *         [\n *             \"order\" => \"id\",\n *         ]\n *     );\n *\n *     $cache->save($cacheKey, $robots);\n * }\n *\n * \/\/ Use $robots :)\n * foreach ($robots as $robot) {\n *     echo $robot->name, \"\\n\";\n * }\n *<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
        "line": 68,
        "char": 5
    },
    {
        "type": "class",
        "name": "None",
        "abstract": 0,
        "final": 0,
        "implements": [
            {
                "type": "variable",
                "value": "FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                "line": 69,
                "char": 1
            }
        ],
        "definition": {
            "methods": [
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
                                "type": "int",
                                "value": "1",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                                "line": 76,
                                "char": 11
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                            "line": 77,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns cache lifetime, always one second expiring content\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                                "line": 75,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                        "line": 75,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                    "line": 74,
                    "last-line": 81,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                                "line": 84,
                                "char": 15
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                            "line": 85,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Check whether if frontend is buffering output, always false\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                                "line": 83,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                        "line": 83,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                    "line": 82,
                    "last-line": 89,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "start",
                    "docblock": "**\n\t * Starts output frontend\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                    "line": 90,
                    "last-line": 99,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getContent",
                    "docblock": "**\n\t * Returns output cached content\n\t *\n\t * @return string\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                    "line": 100,
                    "last-line": 107,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "stop",
                    "docblock": "**\n\t * Stops output frontend\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                    "line": 108,
                    "last-line": 115,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                            "line": 116,
                            "char": 38
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "data",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                                "line": 118,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                            "line": 119,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Prepare data to be stored\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                    "line": 116,
                    "last-line": 123,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                            "line": 124,
                            "char": 40
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "data",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                                "line": 126,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                            "line": 127,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Prepares data to be retrieved to user\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "variable",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                                "line": 125,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                        "line": 125,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
                    "line": 124,
                    "last-line": 128,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
            "line": 68,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/frontend\/none.zep",
        "line": 68,
        "char": 5
    }
]