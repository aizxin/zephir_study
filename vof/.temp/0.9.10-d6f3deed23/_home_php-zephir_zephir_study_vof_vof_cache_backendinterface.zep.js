[
    {
        "type": "namespace",
        "name": "Vof\\Cache",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
        "line": 26,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Vof\\Cache\\BackendInterface\n *\n * Interface for Vof\\Cache\\Backend adapters\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
        "line": 27,
        "char": 9
    },
    {
        "type": "interface",
        "name": "BackendInterface",
        "definition": {
            "methods": [
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                            "line": 36,
                            "char": 31
                        },
                        {
                            "type": "parameter",
                            "name": "lifetime",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                                "line": 36,
                                "char": 48
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                            "line": 36,
                            "char": 48
                        }
                    ],
                    "docblock": "**\n\t * Starts a cache. The keyname allows to identify the created fragment\n\t *\n\t * @param int|string keyName\n\t * @param   int lifetime\n\t * @return  mixed\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                    "line": 36,
                    "last-line": 42,
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
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                                "line": 43,
                                "char": 40
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                            "line": 43,
                            "char": 40
                        }
                    ],
                    "docblock": "**\n\t * Stops the frontend without store any cached content\n\t *\n\t * @param boolean stopBuffer\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                    "line": 43,
                    "last-line": 49,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getFrontend",
                    "docblock": "**\n\t * Returns front-end instance adapter related to the back-end\n\t *\n\t * @return mixed\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                    "line": 50,
                    "last-line": 56,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getOptions",
                    "docblock": "**\n\t * Returns the backend options\n\t *\n\t * @return array\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                    "line": 57,
                    "last-line": 61,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isFresh",
                    "docblock": "**\n\t * Checks whether the last cache is fresh or cached\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                                "line": 62,
                                "char": 38
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                        "line": 62,
                        "char": 38
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                    "line": 62,
                    "last-line": 66,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "isStarted",
                    "docblock": "**\n\t * Checks whether the cache has starting buffering or not\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                                "line": 67,
                                "char": 40
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                        "line": 67,
                        "char": 40
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                    "line": 67,
                    "last-line": 73,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "setLastKey",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "lastKey",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                            "line": 74,
                            "char": 36
                        }
                    ],
                    "docblock": "**\n\t * Sets the last key used in the cache\n\t *\n\t * @param string lastKey\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                    "line": 74,
                    "last-line": 80,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getLastKey",
                    "docblock": "**\n\t * Gets the last key stored by the cache\n\t *\n\t * @return string\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                    "line": 81,
                    "last-line": 85,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                            "line": 86,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                                "line": 86,
                                "char": 57
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                            "line": 86,
                            "char": 57
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                                "line": 86,
                                "char": 66
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "null",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                                "line": 86,
                                "char": 72
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                        "line": 86,
                        "char": 72
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                    "line": 86,
                    "last-line": 96,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                                "line": 97,
                                "char": 37
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                            "line": 97,
                            "char": 37
                        },
                        {
                            "type": "parameter",
                            "name": "content",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                                "line": 97,
                                "char": 53
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                            "line": 97,
                            "char": 53
                        },
                        {
                            "type": "parameter",
                            "name": "lifetime",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                                "line": 97,
                                "char": 70
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                            "line": 97,
                            "char": 70
                        },
                        {
                            "type": "parameter",
                            "name": "stopBuffer",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "true",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                                "line": 97,
                                "char": 89
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                            "line": 97,
                            "char": 89
                        }
                    ],
                    "docblock": "**\n\t * Stores cached content into the file backend and stops the frontend\n\t *\n\t * @param int|string keyName\n\t * @param string content\n\t * @param int lifetime\n\t * @param boolean stopBuffer\n\t * @return boolean true on success\/false otherwise\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "bool",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                                "line": 97,
                                "char": 101
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                        "line": 97,
                        "char": 101
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                    "line": 97,
                    "last-line": 104,
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
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                            "line": 105,
                            "char": 32
                        }
                    ],
                    "docblock": "**\n\t * Deletes a value from the cache by its key\n\t *\n\t * @param int|string keyName\n\t * @return boolean\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                    "line": 105,
                    "last-line": 112,
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
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                                "line": 113,
                                "char": 41
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                            "line": 113,
                            "char": 41
                        }
                    ],
                    "docblock": "**\n\t * Query the existing cached keys\n\t *\n\t * @param string prefix\n\t * @return array\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                    "line": 113,
                    "last-line": 121,
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
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                                "line": 122,
                                "char": 39
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                            "line": 122,
                            "char": 39
                        },
                        {
                            "type": "parameter",
                            "name": "lifetime",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                                "line": 122,
                                "char": 56
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                            "line": 122,
                            "char": 56
                        }
                    ],
                    "docblock": "**\n\t * Checks if cache exists and it hasn't expired\n\t *\n\t * @param  string keyName\n\t * @param  int lifetime\n\t * @return boolean\n\t *",
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
                    "line": 122,
                    "last-line": 123,
                    "char": 16
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
            "line": 123,
            "char": 1
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/cache\/backendinterface.zep",
        "line": 0,
        "char": 0
    }
]