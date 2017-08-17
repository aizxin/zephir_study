[
    {
        "type": "namespace",
        "name": "Vof\\Cache\\Backend",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
        "line": 22,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Exception",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                "line": 22,
                "char": 24
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
        "line": 23,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\Backend",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                "line": 23,
                "char": 22
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
        "line": 24,
        "char": 3
    },
    {
        "type": "use",
        "aliases": [
            {
                "name": "Vof\\Cache\\FrontendInterface",
                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                "line": 24,
                "char": 32
            }
        ],
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
        "line": 61,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Cache\\Backend\\File\n *\n * Allows to cache output fragments using a file backend\n *\n *<code>\n * use Vof\\Cache\\Backend\\File;\n * use Vof\\Cache\\Frontend\\Output as FrontOutput;\n *\n * \/\/ Cache the file for 2 days\n * $frontendOptions = [\n *     \"lifetime\" => 172800,\n * ];\n *\n * \/\/ Create an output cache\n * $frontCache = FrontOutput($frontOptions);\n *\n * \/\/ Set the cache directory\n * $backendOptions = [\n *     \"cacheDir\" => \"..\/app\/cache\/\",\n * ];\n *\n * \/\/ Create the File backend\n * $cache = new File($frontCache, $backendOptions);\n *\n * $content = $cache->start(\"my-cache\");\n *\n * if ($content === null) {\n *     echo \"<h1>\", time(), \"<\/h1>\";\n *\n *     $cache->save();\n * } else {\n *     echo $content;\n * }\n *<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
        "line": 62,
        "char": 5
    },
    {
        "type": "class",
        "name": "File",
        "abstract": 0,
        "final": 0,
        "extends": "Backend",
        "definition": {
            "properties": [
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "property",
                    "name": "_useSafeKey",
                    "default": {
                        "type": "bool",
                        "value": "false",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                        "line": 69,
                        "char": 29
                    },
                    "docblock": "**\n\t * Default to false for backwards compatibility\n\t *\n\t * @var boolean\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                    "line": 73,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 74,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 74,
                            "char": 58
                        },
                        {
                            "type": "parameter",
                            "name": "options",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 74,
                            "char": 73
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 76,
                                    "char": 13
                                },
                                {
                                    "variable": "safekey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 76,
                                    "char": 22
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 78,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "isset",
                                    "left": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 78,
                                            "char": 20
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "cacheDir",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 78,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 78,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 78,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 78,
                                "char": 33
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Cache directory must be specified with the option cacheDir",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 79,
                                                    "char": 84
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 79,
                                                "char": 84
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 79,
                                        "char": 85
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 80,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 82,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "safekey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 82,
                                    "char": 40
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 82,
                                        "char": 28
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "safekey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 82,
                                        "char": 38
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 82,
                                    "char": 40
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 82,
                                "char": 40
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not-identical",
                                        "left": {
                                            "type": "typeof",
                                            "left": {
                                                "type": "variable",
                                                "value": "safekey",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 83,
                                                "char": 24
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 83,
                                            "char": 24
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "boolean",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 83,
                                            "char": 36
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 83,
                                        "char": 36
                                    },
                                    "statements": [
                                        {
                                            "type": "throw",
                                            "expr": {
                                                "type": "new",
                                                "class": "Exception",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "safekey option should be a boolean.",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 84,
                                                            "char": 62
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 84,
                                                        "char": 62
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 84,
                                                "char": 63
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 85,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 87,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_useSafeKey",
                                            "expr": {
                                                "type": "variable",
                                                "value": "safekey",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 87,
                                                "char": 35
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 87,
                                            "char": 35
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 88,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 91,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fetch",
                                "left": {
                                    "type": "variable",
                                    "value": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 91,
                                    "char": 38
                                },
                                "right": {
                                    "type": "array-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "options",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 91,
                                        "char": 27
                                    },
                                    "right": {
                                        "type": "string",
                                        "value": "prefix",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 91,
                                        "char": 36
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 91,
                                    "char": 38
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 91,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "and",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 92,
                                                "char": 12
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_useSafeKey",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 92,
                                                "char": 26
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 92,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "fcall",
                                            "name": "preg_match",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "\/[^a-zA-Z0-9_.-]+\/",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 92,
                                                        "char": 59
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 92,
                                                    "char": 59
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "prefix",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 92,
                                                        "char": 67
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 92,
                                                    "char": 67
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 92,
                                            "char": 69
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 92,
                                        "char": 69
                                    },
                                    "statements": [
                                        {
                                            "type": "throw",
                                            "expr": {
                                                "type": "new",
                                                "class": "Exception",
                                                "dynamic": 0,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "FileCache prefix should only use alphanumeric characters.",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 93,
                                                            "char": 84
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 93,
                                                        "char": 84
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 93,
                                                "char": 85
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 94,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 95,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 97,
                            "char": 8
                        },
                        {
                            "type": "scall",
                            "expr": {
                                "type": "scall",
                                "dynamic-class": 0,
                                "class": "parent",
                                "dynamic": 0,
                                "name": "__construct",
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "frontend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 97,
                                            "char": 31
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 97,
                                        "char": 31
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "options",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 97,
                                            "char": 40
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 97,
                                        "char": 40
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 97,
                                "char": 41
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 98,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Vof\\Cache\\Backend\\File constructor\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                    "line": 74,
                    "last-line": 102,
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
                            "name": "keyName",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 103,
                            "char": 36
                        },
                        {
                            "type": "parameter",
                            "name": "lifetime",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 103,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 103,
                            "char": 57
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "prefixedKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 105,
                                    "char": 18
                                },
                                {
                                    "variable": "cacheDir",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 105,
                                    "char": 28
                                },
                                {
                                    "variable": "cacheFile",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 105,
                                    "char": 39
                                },
                                {
                                    "variable": "frontend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 105,
                                    "char": 49
                                },
                                {
                                    "variable": "lastLifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 105,
                                    "char": 63
                                },
                                {
                                    "variable": "ttl",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 105,
                                    "char": 68
                                },
                                {
                                    "variable": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 105,
                                    "char": 83
                                },
                                {
                                    "variable": "ret",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 105,
                                    "char": 88
                                },
                                {
                                    "variable": "modifiedTime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 105,
                                    "char": 102
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 107,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "prefixedKey",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 107,
                                                "char": 27
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_prefix",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 107,
                                                "char": 36
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 107,
                                            "char": 36
                                        },
                                        "right": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 107,
                                                "char": 43
                                            },
                                            "name": "getKey",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "keyName",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 107,
                                                        "char": 58
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 107,
                                                    "char": 58
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 107,
                                            "char": 59
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 107,
                                        "char": 59
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 107,
                                    "char": 59
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 108,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_lastKey",
                                    "expr": {
                                        "type": "variable",
                                        "value": "prefixedKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 108,
                                        "char": 35
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 108,
                                    "char": 35
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 110,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "cacheDir",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 110,
                                        "char": 50
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 110,
                                                "char": 28
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 110,
                                                "char": 37
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 110,
                                            "char": 37
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "cacheDir",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 110,
                                            "char": 48
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 110,
                                        "char": 50
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 110,
                                    "char": 50
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 110,
                                "char": 50
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Unexpected inconsistency in options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 111,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 111,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 111,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 112,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 114,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "cacheFile",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "variable",
                                            "value": "cacheDir",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 114,
                                            "char": 28
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "prefixedKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 114,
                                            "char": 41
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 114,
                                        "char": 41
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 114,
                                    "char": 41
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 116,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "fcall",
                                    "name": "file_exists",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "cacheFile",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 116,
                                                "char": 27
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 116,
                                            "char": 27
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 116,
                                    "char": 31
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 116,
                                    "char": 38
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 116,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "frontend",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 118,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_frontend",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 118,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 118,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 118,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 123,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "variable",
                                            "value": "lifetime",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 123,
                                            "char": 17
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 123,
                                        "char": 17
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "lastLifetime",
                                                    "expr": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 124,
                                                            "char": 29
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "_lastLifetime",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 124,
                                                            "char": 43
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 124,
                                                        "char": 43
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 124,
                                                    "char": 43
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 125,
                                            "char": 6
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "not",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "lastLifetime",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 125,
                                                    "char": 22
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 125,
                                                "char": 22
                                            },
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "ttl",
                                                            "expr": {
                                                                "type": "cast",
                                                                "left": "int",
                                                                "right": {
                                                                    "type": "mcall",
                                                                    "variable": {
                                                                        "type": "variable",
                                                                        "value": "frontend",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 126,
                                                                        "char": 31
                                                                    },
                                                                    "name": "getLifeTime",
                                                                    "call-type": 1,
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 126,
                                                                    "char": 45
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 126,
                                                                "char": 45
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 126,
                                                            "char": 45
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 127,
                                                    "char": 5
                                                }
                                            ],
                                            "else_statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "ttl",
                                                            "expr": {
                                                                "type": "cast",
                                                                "left": "int",
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "lastLifetime",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 128,
                                                                    "char": 34
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 128,
                                                                "char": 34
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 128,
                                                            "char": 34
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 129,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 130,
                                            "char": 4
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "ttl",
                                                    "expr": {
                                                        "type": "cast",
                                                        "left": "int",
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "lifetime",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 131,
                                                            "char": 29
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 131,
                                                        "char": 29
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 131,
                                                    "char": 29
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 132,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 134,
                                    "char": 17
                                },
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "clearstatcache",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "bool",
                                                    "value": "true",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 134,
                                                    "char": 23
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 134,
                                                "char": 23
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "cacheFile",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 134,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 134,
                                                "char": 34
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 134,
                                        "char": 35
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 135,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "modifiedTime",
                                            "expr": {
                                                "type": "cast",
                                                "left": "int",
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "filemtime",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "cacheFile",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 135,
                                                                "char": 48
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 135,
                                                            "char": 48
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 135,
                                                    "char": 49
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 135,
                                                "char": 49
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 135,
                                            "char": 49
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 141,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "greater",
                                        "left": {
                                            "type": "add",
                                            "left": {
                                                "type": "variable",
                                                "value": "modifiedTime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 141,
                                                "char": 20
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "ttl",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 141,
                                                "char": 26
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 141,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "fcall",
                                            "name": "time",
                                            "call-type": 1,
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 141,
                                            "char": 35
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 141,
                                        "char": 35
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "cachedContent",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "file_get_contents",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "cacheFile",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 146,
                                                                    "char": 52
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 146,
                                                                "char": 52
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 146,
                                                        "char": 53
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 146,
                                                    "char": 53
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 147,
                                            "char": 6
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "identical",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "cachedContent",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 147,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "bool",
                                                    "value": "false",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 147,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 147,
                                                "char": 32
                                            },
                                            "statements": [
                                                {
                                                    "type": "throw",
                                                    "expr": {
                                                        "type": "new",
                                                        "class": "Exception",
                                                        "dynamic": 0,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "concat",
                                                                    "left": {
                                                                        "type": "concat",
                                                                        "left": {
                                                                            "type": "string",
                                                                            "value": "Cache file ",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                            "line": 148,
                                                                            "char": 39
                                                                        },
                                                                        "right": {
                                                                            "type": "variable",
                                                                            "value": "cacheFile",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                            "line": 148,
                                                                            "char": 50
                                                                        },
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 148,
                                                                        "char": 50
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": " could not be opened",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 148,
                                                                        "char": 74
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 148,
                                                                    "char": 74
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 148,
                                                                "char": 74
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 148,
                                                        "char": 75
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 149,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 151,
                                            "char": 6
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "is_numeric",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "cachedContent",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 151,
                                                            "char": 32
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 151,
                                                        "char": 32
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 151,
                                                "char": 34
                                            },
                                            "statements": [
                                                {
                                                    "type": "return",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "cachedContent",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 152,
                                                        "char": 26
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 153,
                                                    "char": 5
                                                }
                                            ],
                                            "else_statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "ret",
                                                            "expr": {
                                                                "type": "mcall",
                                                                "variable": {
                                                                    "type": "variable",
                                                                    "value": "frontend",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 157,
                                                                    "char": 25
                                                                },
                                                                "name": "afterRetrieve",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "variable",
                                                                            "value": "cachedContent",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                            "line": 157,
                                                                            "char": 53
                                                                        },
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 157,
                                                                        "char": 53
                                                                    }
                                                                ],
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 157,
                                                                "char": 54
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 157,
                                                            "char": 54
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 158,
                                                    "char": 11
                                                },
                                                {
                                                    "type": "return",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "ret",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 158,
                                                        "char": 16
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 159,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 160,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 161,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 163,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 163,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 164,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Returns a cached content\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "variable",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 103,
                                "char": 66
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 104,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                        "line": 104,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                    "line": 103,
                    "last-line": 173,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "save",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "keyName",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 174,
                                "char": 41
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 174,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "content",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 174,
                                "char": 61
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 174,
                            "char": 61
                        },
                        {
                            "type": "parameter",
                            "name": "lifetime",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 174,
                                "char": 78
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 174,
                            "char": 78
                        },
                        {
                            "type": "parameter",
                            "name": "stopBuffer",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 174,
                                "char": 105
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 174,
                            "char": 105
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 176,
                                    "char": 14
                                },
                                {
                                    "variable": "frontend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 176,
                                    "char": 24
                                },
                                {
                                    "variable": "cacheDir",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 176,
                                    "char": 34
                                },
                                {
                                    "variable": "isBuffering",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 176,
                                    "char": 47
                                },
                                {
                                    "variable": "cacheFile",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 176,
                                    "char": 58
                                },
                                {
                                    "variable": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 176,
                                    "char": 73
                                },
                                {
                                    "variable": "preparedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 176,
                                    "char": 90
                                },
                                {
                                    "variable": "status",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 176,
                                    "char": 98
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 178,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 178,
                                    "char": 16
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 178,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 178,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "lastKey",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 179,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 179,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 179,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 179,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 180,
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
                                            "variable": "lastKey",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 181,
                                                        "char": 23
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "_prefix",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 181,
                                                        "char": 32
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 181,
                                                    "char": 32
                                                },
                                                "right": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 181,
                                                        "char": 39
                                                    },
                                                    "name": "getKey",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "keyName",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 181,
                                                                "char": 54
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 181,
                                                            "char": 54
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 181,
                                                    "char": 55
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 181,
                                                "char": 55
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 181,
                                            "char": 55
                                        },
                                        {
                                            "assign-type": "object-property",
                                            "operator": "assign",
                                            "variable": "this",
                                            "property": "_lastKey",
                                            "expr": {
                                                "type": "variable",
                                                "value": "lastKey",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 182,
                                                "char": 29
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 182,
                                            "char": 29
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 183,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 185,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 185,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 185,
                                "char": 15
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Cache must be started first",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 186,
                                                    "char": 53
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 186,
                                                "char": 53
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 186,
                                        "char": 54
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 187,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 189,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "frontend",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 189,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_frontend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 189,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 189,
                                        "char": 33
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 189,
                                    "char": 33
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 191,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "cacheDir",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 191,
                                        "char": 50
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 191,
                                                "char": 28
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 191,
                                                "char": 37
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 191,
                                            "char": 37
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "cacheDir",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 191,
                                            "char": 48
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 191,
                                        "char": 50
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 191,
                                    "char": 50
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 191,
                                "char": 50
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Unexpected inconsistency in options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 192,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 192,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 192,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 193,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 195,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "cacheFile",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "variable",
                                            "value": "cacheDir",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 195,
                                            "char": 28
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "lastKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 195,
                                            "char": 37
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 195,
                                        "char": 37
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 195,
                                    "char": 37
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 197,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "content",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 197,
                                    "char": 16
                                },
                                "right": {
                                    "type": "null",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 197,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 197,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "cachedContent",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "frontend",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 198,
                                                    "char": 33
                                                },
                                                "name": "getContent",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 198,
                                                "char": 46
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 198,
                                            "char": 46
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 199,
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
                                            "variable": "cachedContent",
                                            "expr": {
                                                "type": "variable",
                                                "value": "content",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 200,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 200,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 201,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 203,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fcall",
                                    "name": "is_numeric",
                                    "call-type": 1,
                                    "parameters": [
                                        {
                                            "parameter": {
                                                "type": "variable",
                                                "value": "cachedContent",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 203,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 203,
                                            "char": 31
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 203,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 203,
                                "char": 33
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "preparedContent",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "frontend",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 204,
                                                    "char": 35
                                                },
                                                "name": "beforeStore",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "cachedContent",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 204,
                                                            "char": 61
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 204,
                                                        "char": 61
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 204,
                                                "char": 62
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 204,
                                            "char": 62
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 205,
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
                                            "variable": "preparedContent",
                                            "expr": {
                                                "type": "variable",
                                                "value": "cachedContent",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 206,
                                                "char": 39
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 206,
                                            "char": 39
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 207,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 212,
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
                                        "name": "file_put_contents",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "cacheFile",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 212,
                                                    "char": 43
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 212,
                                                "char": 43
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "preparedContent",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 212,
                                                    "char": 60
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 212,
                                                "char": 60
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 212,
                                        "char": 61
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 212,
                                    "char": 61
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 214,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "status",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 214,
                                    "char": 15
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "false",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 214,
                                    "char": 23
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 214,
                                "char": 23
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "concat",
                                                    "left": {
                                                        "type": "concat",
                                                        "left": {
                                                            "type": "string",
                                                            "value": "Cache file ",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 215,
                                                            "char": 37
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "cacheFile",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 215,
                                                            "char": 49
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 215,
                                                        "char": 49
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": " could not be written",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 215,
                                                        "char": 74
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 215,
                                                    "char": 74
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 215,
                                                "char": 74
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 215,
                                        "char": 75
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 216,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 218,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "isBuffering",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "frontend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 218,
                                            "char": 30
                                        },
                                        "name": "isBuffering",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 218,
                                        "char": 44
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 218,
                                    "char": 44
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 220,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "stopBuffer",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 220,
                                    "char": 19
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 220,
                                    "char": 26
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 220,
                                "char": 26
                            },
                            "statements": [
                                {
                                    "type": "mcall",
                                    "expr": {
                                        "type": "mcall",
                                        "variable": {
                                            "type": "variable",
                                            "value": "frontend",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 221,
                                            "char": 13
                                        },
                                        "name": "stop",
                                        "call-type": 1,
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 221,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 222,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 224,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "variable",
                                    "value": "isBuffering",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 224,
                                    "char": 20
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 224,
                                    "char": 27
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 224,
                                "char": 27
                            },
                            "statements": [
                                {
                                    "type": "echo",
                                    "expressions": [
                                        {
                                            "type": "variable",
                                            "value": "cachedContent",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 225,
                                            "char": 22
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 226,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 228,
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
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 228,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 228,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 230,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "not-identical",
                                "left": {
                                    "type": "variable",
                                    "value": "status",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 230,
                                    "char": 19
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "false",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 230,
                                    "char": 26
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 230,
                                "char": 26
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 231,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Stores cached content into the file backend and stops the frontend\n\t *\n\t * @param int|string keyName\n\t * @param string content\n\t * @param int lifetime\n\t * @param boolean stopBuffer\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 175,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                        "line": 175,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                    "line": 174,
                    "last-line": 237,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "delete",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "keyName",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 238,
                            "char": 36
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "cacheFile",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 240,
                                    "char": 16
                                },
                                {
                                    "variable": "cacheDir",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 240,
                                    "char": 26
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 242,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "cacheDir",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 242,
                                        "char": 50
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 242,
                                                "char": 28
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 242,
                                                "char": 37
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 242,
                                            "char": 37
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "cacheDir",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 242,
                                            "char": 48
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 242,
                                        "char": 50
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 242,
                                    "char": 50
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 242,
                                "char": 50
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Unexpected inconsistency in options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 243,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 243,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 243,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 244,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 246,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "cacheFile",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "concat",
                                            "left": {
                                                "type": "variable",
                                                "value": "cacheDir",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 246,
                                                "char": 28
                                            },
                                            "right": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 246,
                                                    "char": 35
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 246,
                                                    "char": 44
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 246,
                                                "char": 44
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 246,
                                            "char": 44
                                        },
                                        "right": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 246,
                                                "char": 51
                                            },
                                            "name": "getKey",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "keyName",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 246,
                                                        "char": 66
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 246,
                                                    "char": 66
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 246,
                                            "char": 67
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 246,
                                        "char": 67
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 246,
                                    "char": 67
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 247,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "file_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "cacheFile",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 247,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 247,
                                        "char": 27
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 247,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "unlink",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "cacheFile",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 248,
                                                    "char": 27
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 248,
                                                "char": 27
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 248,
                                        "char": 28
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 249,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 251,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 251,
                                "char": 15
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 252,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Deletes a value from the cache by its key\n\t *\n\t * @param int|string keyName\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 239,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                        "line": 239,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                    "line": 238,
                    "last-line": 263,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "queryKeys",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "prefix",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 264,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 264,
                            "char": 48
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "item",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 266,
                                    "char": 11
                                },
                                {
                                    "variable": "key",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 266,
                                    "char": 16
                                },
                                {
                                    "variable": "cacheDir",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 266,
                                    "char": 26
                                },
                                {
                                    "variable": "prefixedKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 266,
                                    "char": 39
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 267,
                            "char": 7
                        },
                        {
                            "type": "declare",
                            "data-type": "array",
                            "variables": [
                                {
                                    "variable": "keys",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 267,
                                        "char": 18
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 267,
                                    "char": 18
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 269,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "cacheDir",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 269,
                                        "char": 50
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 269,
                                                "char": 28
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 269,
                                                "char": 37
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 269,
                                            "char": 37
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "cacheDir",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 269,
                                            "char": 48
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 269,
                                        "char": 50
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 269,
                                    "char": 50
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 269,
                                "char": 50
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Unexpected inconsistency in options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 270,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 270,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 270,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 271,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 273,
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
                                        "value": "prefix",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 273,
                                        "char": 20
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 273,
                                    "char": 20
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 273,
                                "char": 20
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "prefixedKey",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "property-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 274,
                                                        "char": 27
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "_prefix",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 274,
                                                        "char": 36
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 274,
                                                    "char": 36
                                                },
                                                "right": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 274,
                                                        "char": 43
                                                    },
                                                    "name": "getKey",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "prefix",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 274,
                                                                "char": 57
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 274,
                                                            "char": 57
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 274,
                                                    "char": 58
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 274,
                                                "char": 58
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 274,
                                            "char": 58
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 275,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 280,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "fcall",
                                "name": "iterator",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "new",
                                            "class": "\\DirectoryIterator",
                                            "dynamic": 0,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "cacheDir",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 280,
                                                        "char": 55
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 280,
                                                    "char": 55
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 280,
                                            "char": 56
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 280,
                                        "char": 56
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 280,
                                "char": 58
                            },
                            "value": "item",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "likely",
                                        "left": {
                                            "type": "identical",
                                            "left": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "item",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 281,
                                                    "char": 19
                                                },
                                                "name": "isDir",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 281,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "bool",
                                                "value": "false",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 281,
                                                "char": 38
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 281,
                                            "char": 38
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 281,
                                        "char": 38
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
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "item",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 282,
                                                            "char": 20
                                                        },
                                                        "name": "getFileName",
                                                        "call-type": 1,
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 282,
                                                        "char": 34
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 282,
                                                    "char": 34
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 283,
                                            "char": 6
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "not",
                                                "left": {
                                                    "type": "empty",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "prefix",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 283,
                                                        "char": 22
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 283,
                                                    "char": 22
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 283,
                                                "char": 22
                                            },
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
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 284,
                                                                    "char": 24
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 284,
                                                                "char": 24
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "prefixedKey",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 284,
                                                                    "char": 37
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 284,
                                                                "char": 37
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 284,
                                                        "char": 39
                                                    },
                                                    "statements": [
                                                        {
                                                            "type": "let",
                                                            "assignments": [
                                                                {
                                                                    "assign-type": "variable-append",
                                                                    "operator": "assign",
                                                                    "variable": "keys",
                                                                    "expr": {
                                                                        "type": "variable",
                                                                        "value": "key",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 285,
                                                                        "char": 23
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 285,
                                                                    "char": 23
                                                                }
                                                            ],
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 286,
                                                            "char": 6
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 287,
                                                    "char": 5
                                                }
                                            ],
                                            "else_statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable-append",
                                                            "operator": "assign",
                                                            "variable": "keys",
                                                            "expr": {
                                                                "type": "variable",
                                                                "value": "key",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 288,
                                                                "char": 22
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 288,
                                                            "char": 22
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 289,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 290,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 291,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 293,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "keys",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 293,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 294,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Query the existing cached keys.\n\t *\n\t * <code>\n\t * $cache->save(\"users-ids\", [1, 2, 3]);\n\t * $cache->save(\"projects-ids\", [4, 5, 6]);\n\t *\n\t * var_dump($cache->queryKeys(\"users\")); \/\/ [\"users-ids\"]\n\t * <\/code>\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "array",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 265,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                        "line": 265,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                    "line": 264,
                    "last-line": 301,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "exists",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "keyName",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 302,
                                "char": 43
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 302,
                            "char": 43
                        },
                        {
                            "type": "parameter",
                            "name": "lifetime",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 302,
                                "char": 64
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 302,
                            "char": 64
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "lastKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 304,
                                    "char": 14
                                },
                                {
                                    "variable": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 304,
                                    "char": 22
                                },
                                {
                                    "variable": "cacheFile",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 304,
                                    "char": 33
                                },
                                {
                                    "variable": "ttl",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 304,
                                    "char": 38
                                },
                                {
                                    "variable": "modifiedTime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 304,
                                    "char": 52
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 306,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "keyName",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 306,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 306,
                                "char": 15
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "lastKey",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 307,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 307,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 307,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 307,
                                            "char": 32
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 308,
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
                                            "variable": "prefix",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 309,
                                                    "char": 22
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 309,
                                                    "char": 30
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 309,
                                                "char": 30
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 309,
                                            "char": 30
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 310,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "lastKey",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "prefix",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 310,
                                                    "char": 25
                                                },
                                                "right": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 310,
                                                        "char": 32
                                                    },
                                                    "name": "getKey",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "keyName",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 310,
                                                                "char": 47
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 310,
                                                            "char": 47
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 310,
                                                    "char": 48
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 310,
                                                "char": 48
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 310,
                                            "char": 48
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 311,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 313,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "lastKey",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 313,
                                "char": 14
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "cacheFile",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "property-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 315,
                                                            "char": 25
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "_options",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 315,
                                                            "char": 34
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 315,
                                                        "char": 34
                                                    },
                                                    "right": {
                                                        "type": "string",
                                                        "value": "cacheDir",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 315,
                                                        "char": 45
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 315,
                                                    "char": 47
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "lastKey",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 315,
                                                    "char": 56
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 315,
                                                "char": 56
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 315,
                                            "char": 56
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 317,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "file_exists",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "cacheFile",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 317,
                                                    "char": 28
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 317,
                                                "char": 28
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 317,
                                        "char": 30
                                    },
                                    "statements": [
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "not",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "lifetime",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 322,
                                                    "char": 18
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 322,
                                                "char": 18
                                            },
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "ttl",
                                                            "expr": {
                                                                "type": "cast",
                                                                "left": "int",
                                                                "right": {
                                                                    "type": "mcall",
                                                                    "variable": {
                                                                        "type": "property-access",
                                                                        "left": {
                                                                            "type": "variable",
                                                                            "value": "this",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                            "line": 323,
                                                                            "char": 27
                                                                        },
                                                                        "right": {
                                                                            "type": "variable",
                                                                            "value": "_frontend",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                            "line": 323,
                                                                            "char": 38
                                                                        },
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 323,
                                                                        "char": 38
                                                                    },
                                                                    "name": "getLifeTime",
                                                                    "call-type": 1,
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 323,
                                                                    "char": 52
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 323,
                                                                "char": 52
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 323,
                                                            "char": 52
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 324,
                                                    "char": 5
                                                }
                                            ],
                                            "else_statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "ttl",
                                                            "expr": {
                                                                "type": "cast",
                                                                "left": "int",
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "lifetime",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 325,
                                                                    "char": 30
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 325,
                                                                "char": 30
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 325,
                                                            "char": 30
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 326,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 328,
                                            "char": 18
                                        },
                                        {
                                            "type": "fcall",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "clearstatcache",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "bool",
                                                            "value": "true",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 328,
                                                            "char": 24
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 328,
                                                        "char": 24
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "cacheFile",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 328,
                                                            "char": 35
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 328,
                                                        "char": 35
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 328,
                                                "char": 36
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 329,
                                            "char": 7
                                        },
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "modifiedTime",
                                                    "expr": {
                                                        "type": "cast",
                                                        "left": "int",
                                                        "right": {
                                                            "type": "fcall",
                                                            "name": "filemtime",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "cacheFile",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 329,
                                                                        "char": 49
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 329,
                                                                    "char": 49
                                                                }
                                                            ],
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 329,
                                                            "char": 50
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 329,
                                                        "char": 50
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 329,
                                                    "char": 50
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 331,
                                            "char": 6
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "greater",
                                                "left": {
                                                    "type": "add",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "modifiedTime",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 331,
                                                        "char": 21
                                                    },
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "ttl",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 331,
                                                        "char": 27
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 331,
                                                    "char": 27
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "time",
                                                    "call-type": 1,
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 331,
                                                    "char": 36
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 331,
                                                "char": 36
                                            },
                                            "statements": [
                                                {
                                                    "type": "return",
                                                    "expr": {
                                                        "type": "bool",
                                                        "value": "true",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 332,
                                                        "char": 17
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 333,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 334,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 335,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 337,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 337,
                                "char": 15
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 338,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Checks if cache exists and it isn't expired\n\t *\n\t * @param string|int keyName\n\t * @param int lifetime\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 303,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                        "line": 303,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                    "line": 302,
                    "last-line": 344,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "increment",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "keyName",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 345,
                                "char": 46
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 345,
                            "char": 46
                        },
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "int",
                                "value": "1",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 345,
                                "char": 61
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 345,
                            "char": 61
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "prefixedKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 347,
                                    "char": 18
                                },
                                {
                                    "variable": "cacheFile",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 347,
                                    "char": 29
                                },
                                {
                                    "variable": "frontend",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 347,
                                    "char": 39
                                },
                                {
                                    "variable": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 347,
                                    "char": 49
                                },
                                {
                                    "variable": "ttl",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 347,
                                    "char": 54
                                },
                                {
                                    "variable": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 348,
                                    "char": 17
                                },
                                {
                                    "variable": "result",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 348,
                                    "char": 25
                                },
                                {
                                    "variable": "modifiedTime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 348,
                                    "char": 39
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 350,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "prefixedKey",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 350,
                                                "char": 26
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_prefix",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 350,
                                                "char": 35
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 350,
                                            "char": 35
                                        },
                                        "right": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 350,
                                                "char": 42
                                            },
                                            "name": "getKey",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "keyName",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 350,
                                                        "char": 57
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 350,
                                                    "char": 57
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 350,
                                            "char": 58
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 350,
                                        "char": 58
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 350,
                                    "char": 58
                                },
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_lastKey",
                                    "expr": {
                                        "type": "variable",
                                        "value": "prefixedKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 351,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 351,
                                    "char": 32
                                },
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "cacheFile",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 352,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 352,
                                                    "char": 30
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 352,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "cacheDir",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 352,
                                                "char": 41
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 352,
                                            "char": 43
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "prefixedKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 352,
                                            "char": 56
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 352,
                                        "char": 56
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 352,
                                    "char": 56
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 354,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "file_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "cacheFile",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 354,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 354,
                                        "char": 27
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 354,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "frontend",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 356,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_frontend",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 356,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 356,
                                                "char": 34
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 356,
                                            "char": 34
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 361,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "lifetime",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 361,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastLifetime",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 361,
                                                    "char": 38
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 361,
                                                "char": 38
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 361,
                                            "char": 38
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 362,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "variable",
                                            "value": "lifetime",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 362,
                                            "char": 17
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 362,
                                        "char": 17
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "ttl",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "frontend",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 363,
                                                            "char": 24
                                                        },
                                                        "name": "getLifeTime",
                                                        "call-type": 1,
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 363,
                                                        "char": 38
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 363,
                                                    "char": 38
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 364,
                                            "char": 4
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "ttl",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "lifetime",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 365,
                                                        "char": 23
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 365,
                                                    "char": 23
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 366,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 368,
                                    "char": 17
                                },
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "clearstatcache",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "bool",
                                                    "value": "true",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 368,
                                                    "char": 23
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 368,
                                                "char": 23
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "cacheFile",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 368,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 368,
                                                "char": 34
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 368,
                                        "char": 35
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 369,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "modifiedTime",
                                            "expr": {
                                                "type": "cast",
                                                "left": "int",
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "filemtime",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "cacheFile",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 369,
                                                                "char": 48
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 369,
                                                            "char": 48
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 369,
                                                    "char": 49
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 369,
                                                "char": 49
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 369,
                                            "char": 49
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 375,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "greater",
                                        "left": {
                                            "type": "add",
                                            "left": {
                                                "type": "variable",
                                                "value": "modifiedTime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 375,
                                                "char": 20
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "ttl",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 375,
                                                "char": 26
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 375,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "fcall",
                                            "name": "time",
                                            "call-type": 1,
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 375,
                                            "char": 35
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 375,
                                        "char": 35
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "cachedContent",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "file_get_contents",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "cacheFile",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 380,
                                                                    "char": 52
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 380,
                                                                "char": 52
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 380,
                                                        "char": 53
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 380,
                                                    "char": 53
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 382,
                                            "char": 6
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "identical",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "cachedContent",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 382,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "bool",
                                                    "value": "false",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 382,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 382,
                                                "char": 32
                                            },
                                            "statements": [
                                                {
                                                    "type": "throw",
                                                    "expr": {
                                                        "type": "new",
                                                        "class": "Exception",
                                                        "dynamic": 0,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "concat",
                                                                    "left": {
                                                                        "type": "concat",
                                                                        "left": {
                                                                            "type": "string",
                                                                            "value": "Cache file ",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                            "line": 383,
                                                                            "char": 40
                                                                        },
                                                                        "right": {
                                                                            "type": "variable",
                                                                            "value": "cacheFile",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                            "line": 383,
                                                                            "char": 52
                                                                        },
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 383,
                                                                        "char": 52
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": " could not be opened",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 383,
                                                                        "char": 76
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 383,
                                                                    "char": 76
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 383,
                                                                "char": 76
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 383,
                                                        "char": 77
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 384,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 386,
                                            "char": 6
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "is_numeric",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "cachedContent",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 386,
                                                            "char": 32
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 386,
                                                        "char": 32
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 386,
                                                "char": 34
                                            },
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "result",
                                                            "expr": {
                                                                "type": "add",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "cachedContent",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 388,
                                                                    "char": 33
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "value",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 388,
                                                                    "char": 40
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 388,
                                                                "char": 40
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 388,
                                                            "char": 40
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 389,
                                                    "char": 7
                                                },
                                                {
                                                    "type": "if",
                                                    "expr": {
                                                        "type": "identical",
                                                        "left": {
                                                            "type": "fcall",
                                                            "name": "file_put_contents",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "cacheFile",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 389,
                                                                        "char": 36
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 389,
                                                                    "char": 36
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "result",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 389,
                                                                        "char": 44
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 389,
                                                                    "char": 44
                                                                }
                                                            ],
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 389,
                                                            "char": 48
                                                        },
                                                        "right": {
                                                            "type": "bool",
                                                            "value": "false",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 389,
                                                            "char": 56
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 389,
                                                        "char": 56
                                                    },
                                                    "statements": [
                                                        {
                                                            "type": "throw",
                                                            "expr": {
                                                                "type": "new",
                                                                "class": "Exception",
                                                                "dynamic": 0,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "string",
                                                                            "value": "Cache directory could not be written",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                            "line": 390,
                                                                            "char": 65
                                                                        },
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 390,
                                                                        "char": 65
                                                                    }
                                                                ],
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 390,
                                                                "char": 66
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 391,
                                                            "char": 6
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 393,
                                                    "char": 11
                                                },
                                                {
                                                    "type": "return",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "result",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 393,
                                                        "char": 19
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 394,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 395,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 396,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 398,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 398,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 399,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Increment of a given key, by number $value\n\t *\n\t * @param  string|int keyName\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 345,
                                "char": 70
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 346,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                        "line": 346,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                    "line": 345,
                    "last-line": 405,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "decrement",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "keyName",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 406,
                                "char": 46
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 406,
                            "char": 46
                        },
                        {
                            "type": "parameter",
                            "name": "value",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "int",
                                "value": "1",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 406,
                                "char": 61
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 406,
                            "char": 61
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "prefixedKey",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 408,
                                    "char": 18
                                },
                                {
                                    "variable": "cacheFile",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 408,
                                    "char": 29
                                },
                                {
                                    "variable": "lifetime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 408,
                                    "char": 39
                                },
                                {
                                    "variable": "ttl",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 408,
                                    "char": 44
                                },
                                {
                                    "variable": "cachedContent",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 408,
                                    "char": 59
                                },
                                {
                                    "variable": "result",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 408,
                                    "char": 67
                                },
                                {
                                    "variable": "modifiedTime",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 408,
                                    "char": 81
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 410,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "prefixedKey",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 410,
                                                "char": 26
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_prefix",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 410,
                                                "char": 35
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 410,
                                            "char": 35
                                        },
                                        "right": {
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 410,
                                                "char": 42
                                            },
                                            "name": "getKey",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "keyName",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 410,
                                                        "char": 57
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 410,
                                                    "char": 57
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 410,
                                            "char": 58
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 410,
                                        "char": 58
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 410,
                                    "char": 58
                                },
                                {
                                    "assign-type": "object-property",
                                    "operator": "assign",
                                    "variable": "this",
                                    "property": "_lastKey",
                                    "expr": {
                                        "type": "variable",
                                        "value": "prefixedKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 411,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 411,
                                    "char": 32
                                },
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "cacheFile",
                                    "expr": {
                                        "type": "concat",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 412,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 412,
                                                    "char": 30
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 412,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "string",
                                                "value": "cacheDir",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 412,
                                                "char": 41
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 412,
                                            "char": 43
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "prefixedKey",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 412,
                                            "char": 56
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 412,
                                        "char": 56
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 412,
                                    "char": 56
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 414,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "file_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "cacheFile",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 414,
                                            "char": 27
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 414,
                                        "char": 27
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 414,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "lifetime",
                                            "expr": {
                                                "type": "property-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 419,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "_lastLifetime",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 419,
                                                    "char": 38
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 419,
                                                "char": 38
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 419,
                                            "char": 38
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 420,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not",
                                        "left": {
                                            "type": "variable",
                                            "value": "lifetime",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 420,
                                            "char": 17
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 420,
                                        "char": 17
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "ttl",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "property-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "this",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 421,
                                                                "char": 20
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "_frontend",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 421,
                                                                "char": 31
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 421,
                                                            "char": 31
                                                        },
                                                        "name": "getLifeTime",
                                                        "call-type": 1,
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 421,
                                                        "char": 45
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 421,
                                                    "char": 45
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 422,
                                            "char": 4
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "ttl",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "lifetime",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 423,
                                                        "char": 23
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 423,
                                                    "char": 23
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 424,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 426,
                                    "char": 17
                                },
                                {
                                    "type": "fcall",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "clearstatcache",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "bool",
                                                    "value": "true",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 426,
                                                    "char": 23
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 426,
                                                "char": 23
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "cacheFile",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 426,
                                                    "char": 34
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 426,
                                                "char": 34
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 426,
                                        "char": 35
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 427,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "modifiedTime",
                                            "expr": {
                                                "type": "cast",
                                                "left": "int",
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "filemtime",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "cacheFile",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 427,
                                                                "char": 48
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 427,
                                                            "char": 48
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 427,
                                                    "char": 49
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 427,
                                                "char": 49
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 427,
                                            "char": 49
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 433,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "greater",
                                        "left": {
                                            "type": "add",
                                            "left": {
                                                "type": "variable",
                                                "value": "modifiedTime",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 433,
                                                "char": 20
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "ttl",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 433,
                                                "char": 26
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 433,
                                            "char": 26
                                        },
                                        "right": {
                                            "type": "fcall",
                                            "name": "time",
                                            "call-type": 1,
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 433,
                                            "char": 35
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 433,
                                        "char": 35
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "cachedContent",
                                                    "expr": {
                                                        "type": "fcall",
                                                        "name": "file_get_contents",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "cacheFile",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 438,
                                                                    "char": 52
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 438,
                                                                "char": 52
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 438,
                                                        "char": 53
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 438,
                                                    "char": 53
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 440,
                                            "char": 6
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "identical",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "cachedContent",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 440,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "bool",
                                                    "value": "false",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 440,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 440,
                                                "char": 32
                                            },
                                            "statements": [
                                                {
                                                    "type": "throw",
                                                    "expr": {
                                                        "type": "new",
                                                        "class": "Exception",
                                                        "dynamic": 0,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "concat",
                                                                    "left": {
                                                                        "type": "concat",
                                                                        "left": {
                                                                            "type": "string",
                                                                            "value": "Cache file ",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                            "line": 441,
                                                                            "char": 40
                                                                        },
                                                                        "right": {
                                                                            "type": "variable",
                                                                            "value": "cacheFile",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                            "line": 441,
                                                                            "char": 52
                                                                        },
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 441,
                                                                        "char": 52
                                                                    },
                                                                    "right": {
                                                                        "type": "string",
                                                                        "value": " could not be opened",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 441,
                                                                        "char": 76
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 441,
                                                                    "char": 76
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 441,
                                                                "char": 76
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 441,
                                                        "char": 77
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 442,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 444,
                                            "char": 6
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "is_numeric",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "cachedContent",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 444,
                                                            "char": 32
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 444,
                                                        "char": 32
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 444,
                                                "char": 34
                                            },
                                            "statements": [
                                                {
                                                    "type": "let",
                                                    "assignments": [
                                                        {
                                                            "assign-type": "variable",
                                                            "operator": "assign",
                                                            "variable": "result",
                                                            "expr": {
                                                                "type": "sub",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "cachedContent",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 446,
                                                                    "char": 33
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "value",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 446,
                                                                    "char": 40
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 446,
                                                                "char": 40
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 446,
                                                            "char": 40
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 447,
                                                    "char": 7
                                                },
                                                {
                                                    "type": "if",
                                                    "expr": {
                                                        "type": "identical",
                                                        "left": {
                                                            "type": "fcall",
                                                            "name": "file_put_contents",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "cacheFile",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 447,
                                                                        "char": 36
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 447,
                                                                    "char": 36
                                                                },
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "result",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 447,
                                                                        "char": 44
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 447,
                                                                    "char": 44
                                                                }
                                                            ],
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 447,
                                                            "char": 48
                                                        },
                                                        "right": {
                                                            "type": "bool",
                                                            "value": "false",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 447,
                                                            "char": 56
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 447,
                                                        "char": 56
                                                    },
                                                    "statements": [
                                                        {
                                                            "type": "throw",
                                                            "expr": {
                                                                "type": "new",
                                                                "class": "Exception",
                                                                "dynamic": 0,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "string",
                                                                            "value": "Cache directory can't be written",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                            "line": 448,
                                                                            "char": 61
                                                                        },
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 448,
                                                                        "char": 61
                                                                    }
                                                                ],
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 448,
                                                                "char": 62
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 449,
                                                            "char": 6
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 451,
                                                    "char": 11
                                                },
                                                {
                                                    "type": "return",
                                                    "expr": {
                                                        "type": "variable",
                                                        "value": "result",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 451,
                                                        "char": 19
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 452,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 453,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 454,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 456,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 456,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 457,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Decrement of a given key, by number $value\n\t *\n\t * @param string|int keyName\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 406,
                                "char": 70
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 407,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                        "line": 407,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                    "line": 406,
                    "last-line": 461,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "flush",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "prefix",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 464,
                                    "char": 13
                                },
                                {
                                    "variable": "cacheDir",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 464,
                                    "char": 23
                                },
                                {
                                    "variable": "item",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 464,
                                    "char": 29
                                },
                                {
                                    "variable": "key",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 464,
                                    "char": 34
                                },
                                {
                                    "variable": "cacheFile",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 464,
                                    "char": 45
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 466,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "prefix",
                                    "expr": {
                                        "type": "property-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "this",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 466,
                                            "char": 21
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "_prefix",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 466,
                                            "char": 29
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 466,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 466,
                                    "char": 29
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 468,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "fetch",
                                    "left": {
                                        "type": "variable",
                                        "value": "cacheDir",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 468,
                                        "char": 50
                                    },
                                    "right": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "property-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 468,
                                                "char": 28
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "_options",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 468,
                                                "char": 37
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 468,
                                            "char": 37
                                        },
                                        "right": {
                                            "type": "string",
                                            "value": "cacheDir",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 468,
                                            "char": 48
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 468,
                                        "char": 50
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 468,
                                    "char": 50
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 468,
                                "char": 50
                            },
                            "statements": [
                                {
                                    "type": "throw",
                                    "expr": {
                                        "type": "new",
                                        "class": "Exception",
                                        "dynamic": 0,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "Unexpected inconsistency in options",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 469,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 469,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 469,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 470,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 472,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "fcall",
                                "name": "iterator",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "new",
                                            "class": "\\DirectoryIterator",
                                            "dynamic": 0,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "cacheDir",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 472,
                                                        "char": 55
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 472,
                                                    "char": 55
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 472,
                                            "char": 56
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 472,
                                        "char": 56
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 472,
                                "char": 58
                            },
                            "value": "item",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "likely",
                                        "left": {
                                            "type": "equals",
                                            "left": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "item",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 474,
                                                    "char": 19
                                                },
                                                "name": "isFile",
                                                "call-type": 1,
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 474,
                                                "char": 30
                                            },
                                            "right": {
                                                "type": "bool",
                                                "value": "true",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 474,
                                                "char": 37
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 474,
                                            "char": 37
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 474,
                                        "char": 37
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
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "item",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 475,
                                                            "char": 20
                                                        },
                                                        "name": "getFileName",
                                                        "call-type": 1,
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 475,
                                                        "char": 34
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 475,
                                                    "char": 34
                                                },
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "cacheFile",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "item",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 476,
                                                            "char": 23
                                                        },
                                                        "name": "getPathName",
                                                        "call-type": 1,
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 476,
                                                        "char": 37
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 476,
                                                    "char": 37
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 478,
                                            "char": 6
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "or",
                                                "left": {
                                                    "type": "empty",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "prefix",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 478,
                                                        "char": 22
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 478,
                                                    "char": 22
                                                },
                                                "right": {
                                                    "type": "fcall",
                                                    "name": "starts_with",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "key",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 478,
                                                                "char": 39
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 478,
                                                            "char": 39
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "prefix",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 478,
                                                                "char": 47
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 478,
                                                            "char": 47
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 478,
                                                    "char": 49
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 478,
                                                "char": 49
                                            },
                                            "statements": [
                                                {
                                                    "type": "if",
                                                    "expr": {
                                                        "type": "not",
                                                        "left": {
                                                            "type": "fcall",
                                                            "name": "unlink",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "cacheFile",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                        "line": 479,
                                                                        "char": 27
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                    "line": 479,
                                                                    "char": 27
                                                                }
                                                            ],
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 479,
                                                            "char": 29
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                        "line": 479,
                                                        "char": 29
                                                    },
                                                    "statements": [
                                                        {
                                                            "type": "return",
                                                            "expr": {
                                                                "type": "bool",
                                                                "value": "false",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                                "line": 480,
                                                                "char": 19
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                            "line": 481,
                                                            "char": 6
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 482,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                            "line": 483,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 484,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 486,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 486,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 487,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Immediately invalidates all existing items.\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 463,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                        "line": 463,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                    "line": 462,
                    "last-line": 491,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getKey",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "key",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 492,
                            "char": 28
                        }
                    ],
                    "statements": [
                        {
                            "type": "if",
                            "expr": {
                                "type": "identical",
                                "left": {
                                    "type": "property-access",
                                    "left": {
                                        "type": "variable",
                                        "value": "this",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 494,
                                        "char": 11
                                    },
                                    "right": {
                                        "type": "variable",
                                        "value": "_useSafeKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 494,
                                        "char": 26
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 494,
                                    "char": 26
                                },
                                "right": {
                                    "type": "bool",
                                    "value": "true",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 494,
                                    "char": 33
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 494,
                                "char": 33
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "md5",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "key",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                    "line": 495,
                                                    "char": 18
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                                "line": 495,
                                                "char": 18
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 495,
                                        "char": 19
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 496,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 498,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "key",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 498,
                                "char": 13
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 499,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Return a file-system safe identifier for a given key\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 493,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                        "line": 493,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                    "line": 492,
                    "last-line": 503,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "useSafeKey",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "useSafeKey",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 504,
                            "char": 44
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
                                    "property": "_useSafeKey",
                                    "expr": {
                                        "type": "variable",
                                        "value": "useSafeKey",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                        "line": 506,
                                        "char": 37
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 506,
                                    "char": 37
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 508,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "this",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 508,
                                "char": 14
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                            "line": 509,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Set whether to use the safekey or not\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "cast": {
                                    "type": "variable",
                                    "value": "File",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                    "line": 505,
                                    "char": 2
                                },
                                "collection": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                                "line": 505,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                        "line": 505,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
                    "line": 504,
                    "last-line": 510,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
            "line": 62,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backend\/file.zep",
        "line": 62,
        "char": 5
    }
]