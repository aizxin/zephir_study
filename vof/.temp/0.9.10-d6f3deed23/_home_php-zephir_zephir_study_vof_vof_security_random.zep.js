[
    {
        "type": "namespace",
        "name": "Vof\\Security",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
        "line": 92,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Phalcon\\Security\\Random\n *\n * Secure random number generator class.\n *\n * Provides secure random number generator which is suitable for generating\n * session key in HTTP cookies, etc.\n *\n * It supports following secure random number generators:\n *\n * - random_bytes (PHP 7)\n * - libsodium\n * - openssl, libressl\n * - \/dev\/urandom\n *\n * `Phalcon\\Security\\Random` could be mainly useful for:\n *\n * - Key generation (e.g. generation of complicated keys)\n * - Generating random passwords for new user accounts\n * - Encryption systems\n *\n *<code>\n * $random = new \\Phalcon\\Security\\Random();\n *\n * \/\/ Random binary string\n * $bytes = $random->bytes();\n *\n * \/\/ Random hex string\n * echo $random->hex(10); \/\/ a29f470508d5ccb8e289\n * echo $random->hex(10); \/\/ 533c2f08d5eee750e64a\n * echo $random->hex(11); \/\/ f362ef96cb9ffef150c9cd\n * echo $random->hex(12); \/\/ 95469d667475125208be45c4\n * echo $random->hex(13); \/\/ 05475e8af4a34f8f743ab48761\n *\n * \/\/ Random base62 string\n * echo $random->base62(); \/\/ z0RkwHfh8ErDM1xw\n *\n * \/\/ Random base64 string\n * echo $random->base64(12); \/\/ XfIN81jGGuKkcE1E\n * echo $random->base64(12); \/\/ 3rcq39QzGK9fUqh8\n * echo $random->base64();   \/\/ DRcfbngL\/iOo9hGGvy1TcQ==\n * echo $random->base64(16); \/\/ SvdhPcIHDZFad838Bb0Swg==\n *\n * \/\/ Random URL-safe base64 string\n * echo $random->base64Safe();           \/\/ PcV6jGbJ6vfVw7hfKIFDGA\n * echo $random->base64Safe();           \/\/ GD8JojhzSTrqX7Q8J6uug\n * echo $random->base64Safe(8);          \/\/ mGyy0evy3ok\n * echo $random->base64Safe(null, true); \/\/ DRrAgOFkS4rvRiVHFefcQ==\n *\n * \/\/ Random UUID\n * echo $random->uuid(); \/\/ db082997-2572-4e2c-a046-5eefe97b1235\n * echo $random->uuid(); \/\/ da2aa0e2-b4d0-4e3c-99f5-f5ef62c57fe2\n * echo $random->uuid(); \/\/ 75e6b628-c562-4117-bb76-61c4153455a9\n * echo $random->uuid(); \/\/ dc446df1-0848-4d05-b501-4af3c220c13d\n *\n * \/\/ Random number between 0 and $len\n * echo $random->number(256); \/\/ 84\n * echo $random->number(256); \/\/ 79\n * echo $random->number(100); \/\/ 29\n * echo $random->number(300); \/\/ 40\n *\n * \/\/ Random base58 string\n * echo $random->base58();   \/\/ 4kUgL2pdQMSCQtjE\n * echo $random->base58();   \/\/ Umjxqf7ZPwh765yR\n * echo $random->base58(24); \/\/ qoXcgmw4A9dys26HaNEdCRj9\n * echo $random->base58(7);  \/\/ 774SJD3vgP\n *<\/code>\n *\n * This class partially borrows SecureRandom library from Ruby\n *\n * @link http:\/\/ruby-doc.org\/stdlib-2.2.2\/libdoc\/securerandom\/rdoc\/SecureRandom.html\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
        "line": 93,
        "char": 5
    },
    {
        "type": "class",
        "name": "Random",
        "abstract": 0,
        "final": 0,
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "bytes",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "len",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "int",
                                "value": "16",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 114,
                                "char": 36
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 114,
                            "char": 36
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "handle",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 116,
                                    "char": 13
                                },
                                {
                                    "variable": "ret",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 116,
                                    "char": 18
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 118,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "less-equal",
                                "left": {
                                    "type": "variable",
                                    "value": "len",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 118,
                                    "char": 10
                                },
                                "right": {
                                    "type": "int",
                                    "value": "0",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 118,
                                    "char": 14
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 118,
                                "char": 14
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "len",
                                            "expr": {
                                                "type": "int",
                                                "value": "16",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 119,
                                                "char": 16
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 119,
                                            "char": 16
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 120,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 122,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "function_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "random_bytes",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 122,
                                            "char": 36
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 122,
                                        "char": 36
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 122,
                                "char": 38
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "random_bytes",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "len",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 123,
                                                    "char": 27
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 123,
                                                "char": 27
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 123,
                                        "char": 28
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 124,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 126,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "function_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "\\\\Sodium\\\\randombytes_buf",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 126,
                                            "char": 49
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 126,
                                        "char": 49
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 126,
                                "char": 51
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "\\\\Sodium\\\\randombytes_buf",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "len",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 127,
                                                    "char": 40
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 127,
                                                "char": 40
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 127,
                                        "char": 41
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 128,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 130,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "function_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "openssl_random_pseudo_bytes",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 130,
                                            "char": 51
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 130,
                                        "char": 51
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 130,
                                "char": 53
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "openssl_random_pseudo_bytes",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "len",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 131,
                                                    "char": 42
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 131,
                                                "char": 42
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 131,
                                        "char": 43
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 132,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 134,
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
                                            "type": "string",
                                            "value": "\/dev\/urandom",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 134,
                                            "char": 32
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 134,
                                        "char": 32
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 134,
                                "char": 34
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "handle",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "fopen",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "\/dev\/urandom",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 135,
                                                            "char": 37
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 135,
                                                        "char": 37
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "string",
                                                            "value": "rb",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 135,
                                                            "char": 43
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 135,
                                                        "char": 43
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 135,
                                                "char": 44
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 135,
                                            "char": 44
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 137,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not-identical",
                                        "left": {
                                            "type": "variable",
                                            "value": "handle",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 137,
                                            "char": 16
                                        },
                                        "right": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 137,
                                            "char": 24
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 137,
                                        "char": 24
                                    },
                                    "statements": [
                                        {
                                            "type": "fcall",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "stream_set_read_buffer",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "handle",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 138,
                                                            "char": 34
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 138,
                                                        "char": 34
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "0",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 138,
                                                            "char": 37
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 138,
                                                        "char": 37
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 138,
                                                "char": 38
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 139,
                                            "char": 7
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
                                                        "name": "fread",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "handle",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                    "line": 139,
                                                                    "char": 27
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                "line": 139,
                                                                "char": 27
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "len",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                    "line": 139,
                                                                    "char": 32
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                "line": 139,
                                                                "char": 32
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 139,
                                                        "char": 33
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 139,
                                                    "char": 33
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 140,
                                            "char": 10
                                        },
                                        {
                                            "type": "fcall",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "fclose",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "handle",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 140,
                                                            "char": 18
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 140,
                                                        "char": 18
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 140,
                                                "char": 19
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 142,
                                            "char": 6
                                        },
                                        {
                                            "type": "if",
                                            "expr": {
                                                "type": "not-equals",
                                                "left": {
                                                    "type": "fcall",
                                                    "name": "strlen",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "ret",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                "line": 142,
                                                                "char": 18
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 142,
                                                            "char": 18
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 142,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "len",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 142,
                                                    "char": 27
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 142,
                                                "char": 27
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
                                                                    "value": "Unexpected partial read from random device",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                    "line": 143,
                                                                    "char": 70
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                "line": 143,
                                                                "char": 70
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 143,
                                                        "char": 71
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 144,
                                                    "char": 5
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 146,
                                            "char": 10
                                        },
                                        {
                                            "type": "return",
                                            "expr": {
                                                "type": "variable",
                                                "value": "ret",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 146,
                                                "char": 15
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 147,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 148,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 150,
                            "char": 7
                        },
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
                                            "value": "No random device available",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 150,
                                            "char": 51
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 150,
                                        "char": 51
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 150,
                                "char": 52
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 151,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Generates a random binary string\n\t *\n\t * The `Random::bytes` method returns a string and accepts as input an int\n\t * representing the length in bytes to be returned.\n\t *\n\t * If $len is not specified, 16 is assumed. It may be larger in future.\n\t * The result may contain any byte: \"x00\" - \"xFF\".\n\t *\n\t *<code>\n\t * $random = new \\Phalcon\\Security\\Random();\n\t *\n\t * $bytes = $random->bytes();\n\t * var_dump(bin2hex($bytes));\n\t * \/\/ Possible output: string(32) \"00f6c04b144b41fad6a59111c126e1ee\"\n\t *<\/code>\n\t *\n\t * @throws Exception If secure random number generator is not available or unexpected partial read\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 115,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                        "line": 115,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                    "line": 114,
                    "last-line": 166,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "hex",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "len",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 167,
                                "char": 36
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 167,
                            "char": 36
                        }
                    ],
                    "statements": [
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "array_shift",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "fcall",
                                            "name": "unpack",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "string",
                                                        "value": "H*",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 169,
                                                        "char": 33
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 169,
                                                    "char": 33
                                                },
                                                {
                                                    "parameter": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 169,
                                                            "char": 40
                                                        },
                                                        "name": "bytes",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "len",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                    "line": 169,
                                                                    "char": 50
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                "line": 169,
                                                                "char": 50
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 169,
                                                        "char": 51
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 169,
                                                    "char": 51
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 169,
                                            "char": 52
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 169,
                                        "char": 52
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 169,
                                "char": 53
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 170,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Generates a random hex string\n\t *\n\t * If $len is not specified, 16 is assumed. It may be larger in future.\n\t * The length of the result string is usually greater of $len.\n\t *\n\t *<code>\n\t * $random = new \\Phalcon\\Security\\Random();\n\t *\n\t * echo $random->hex(10); \/\/ a29f470508d5ccb8e289\n\t *<\/code>\n\t *\n\t * @throws Exception If secure random number generator is not available or unexpected partial read\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 168,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                        "line": 168,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                    "line": 167,
                    "last-line": 190,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "base58",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "len",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 191,
                                "char": 39
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 191,
                            "char": 39
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 193,
                                    "char": 15
                                },
                                "name": "base",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 193,
                                            "char": 81
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 193,
                                        "char": 81
                                    },
                                    {
                                        "parameter": {
                                            "type": "int",
                                            "value": "58",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 193,
                                            "char": 85
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 193,
                                        "char": 85
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "len",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 193,
                                            "char": 90
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 193,
                                        "char": 90
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 193,
                                "char": 91
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 194,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Generates a random base58 string\n\t *\n\t * If $len is not specified, 16 is assumed. It may be larger in future.\n\t * The result may contain alphanumeric characters except 0, O, I and l.\n\t *\n\t * It is similar to `Phalcon\\Security\\Random:base64` but has been modified to avoid both non-alphanumeric\n\t * characters and letters which might look ambiguous when printed.\n\t *\n\t * <code>\n\t * $random = new \\Phalcon\\Security\\Random();\n\t *\n\t * echo $random->base58(); \/\/ 4kUgL2pdQMSCQtjE\n\t * <\/code>\n\t *\n\t * @see    \\Phalcon\\Security\\Random:base64\n\t * @link   https:\/\/en.wikipedia.org\/wiki\/Base58\n\t * @throws Exception If secure random number generator is not available or unexpected partial read\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 192,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                        "line": 192,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                    "line": 191,
                    "last-line": 212,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "base62",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "len",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 213,
                                "char": 39
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 213,
                            "char": 39
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
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 215,
                                    "char": 15
                                },
                                "name": "base",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 215,
                                            "char": 85
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 215,
                                        "char": 85
                                    },
                                    {
                                        "parameter": {
                                            "type": "int",
                                            "value": "62",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 215,
                                            "char": 89
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 215,
                                        "char": 89
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "len",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 215,
                                            "char": 94
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 215,
                                        "char": 94
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 215,
                                "char": 95
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 216,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Generates a random base62 string\n\t *\n\t * If $len is not specified, 16 is assumed. It may be larger in future.\n\t *\n\t * It is similar to `Phalcon\\Security\\Random:base58` but has been modified to provide the largest value that can\n\t * safely be used in URLs without needing to take extra characters into consideration because it is [A-Za-z0-9].\n\t *\n\t *< code>\n\t * $random = new \\Phalcon\\Security\\Random();\n\t *\n\t * echo $random->base62(); \/\/ z0RkwHfh8ErDM1xw\n\t * <\/code>\n\t *\n\t * @see    \\Phalcon\\Security\\Random:base58\n\t * @throws Exception If secure random number generator is not available or unexpected partial read\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 214,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                        "line": 214,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                    "line": 213,
                    "last-line": 232,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "base64",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "len",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 233,
                                "char": 39
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 233,
                            "char": 39
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
                                            "type": "mcall",
                                            "variable": {
                                                "type": "variable",
                                                "value": "this",
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 235,
                                                "char": 29
                                            },
                                            "name": "bytes",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "len",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 235,
                                                        "char": 39
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 235,
                                                    "char": 39
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 235,
                                            "char": 40
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 235,
                                        "char": 40
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 235,
                                "char": 41
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 236,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Generates a random base64 string\n\t *\n\t * If $len is not specified, 16 is assumed. It may be larger in future.\n\t * The length of the result string is usually greater of $len.\n\t * Size formula: 4 * ($len \/ 3) and this need to be rounded up to a multiple of 4.\n\t *\n\t *<code>\n\t * $random = new \\Phalcon\\Security\\Random();\n\t *\n\t * echo $random->base64(12); \/\/ 3rcq39QzGK9fUqh8\n\t *<\/code>\n\t *\n\t * @throws Exception If secure random number generator is not available or unexpected partial read\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 234,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                        "line": 234,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                    "line": 233,
                    "last-line": 256,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "base64Safe",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "len",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 257,
                                "char": 43
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 257,
                            "char": 43
                        },
                        {
                            "type": "parameter",
                            "name": "padding",
                            "const": 0,
                            "data-type": "bool",
                            "mandatory": 0,
                            "default": {
                                "type": "bool",
                                "value": "false",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 257,
                                "char": 68
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 257,
                            "char": 68
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "s",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 259,
                                    "char": 8
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 261,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "s",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "strtr",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "fcall",
                                                    "name": "base64_encode",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "mcall",
                                                                "variable": {
                                                                    "type": "variable",
                                                                    "value": "this",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                    "line": 261,
                                                                    "char": 36
                                                                },
                                                                "name": "base64",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "variable",
                                                                            "value": "len",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                            "line": 261,
                                                                            "char": 47
                                                                        },
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                        "line": 261,
                                                                        "char": 47
                                                                    }
                                                                ],
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                "line": 261,
                                                                "char": 48
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 261,
                                                            "char": 48
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 261,
                                                    "char": 49
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 261,
                                                "char": 49
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "+\/",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 261,
                                                    "char": 55
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 261,
                                                "char": 55
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "-_",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 261,
                                                    "char": 61
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 261,
                                                "char": 61
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 261,
                                        "char": 62
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 261,
                                    "char": 62
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 262,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "s",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "preg_replace",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "#[^a-z0-9_=-]+#i",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 262,
                                                    "char": 42
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 262,
                                                "char": 42
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 262,
                                                    "char": 46
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 262,
                                                "char": 46
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "s",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 262,
                                                    "char": 49
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 262,
                                                "char": 49
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 262,
                                        "char": 50
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 262,
                                    "char": 50
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 264,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "not",
                                "left": {
                                    "type": "variable",
                                    "value": "padding",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 264,
                                    "char": 15
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 264,
                                "char": 15
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "rtrim",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "s",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 265,
                                                    "char": 18
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 265,
                                                "char": 18
                                            },
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "=",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 265,
                                                    "char": 23
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 265,
                                                "char": 23
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 265,
                                        "char": 24
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 266,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 268,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "s",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 268,
                                "char": 11
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 269,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Generates a random URL-safe base64 string\n\t *\n\t * If $len is not specified, 16 is assumed. It may be larger in future.\n\t * The length of the result string is usually greater of $len.\n\t *\n\t * By default, padding is not generated because \"=\" may be used as a URL delimiter.\n\t * The result may contain A-Z, a-z, 0-9, \"-\" and \"_\". \"=\" is also used if $padding is true.\n\t * See RFC 3548 for the definition of URL-safe base64.\n\t *\n\t *<code>\n\t * $random = new \\Phalcon\\Security\\Random();\n\t *\n\t * echo $random->base64Safe(); \/\/ GD8JojhzSTrqX7Q8J6uug\n\t *<\/code>\n\t *\n\t * @link https:\/\/www.ietf.org\/rfc\/rfc3548.txt\n\t * @throws Exception If secure random number generator is not available or unexpected partial read\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 258,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                        "line": 258,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                    "line": 257,
                    "last-line": 290,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "uuid",
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "ary",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 293,
                                    "char": 10
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 295,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "ary",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "array_values",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "fcall",
                                                    "name": "unpack",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "string",
                                                                "value": "N1a\/n1b\/n1c\/n1d\/n1e\/N1f",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                "line": 295,
                                                                "char": 58
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 295,
                                                            "char": 58
                                                        },
                                                        {
                                                            "parameter": {
                                                                "type": "mcall",
                                                                "variable": {
                                                                    "type": "variable",
                                                                    "value": "this",
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                    "line": 295,
                                                                    "char": 65
                                                                },
                                                                "name": "bytes",
                                                                "call-type": 1,
                                                                "parameters": [
                                                                    {
                                                                        "parameter": {
                                                                            "type": "int",
                                                                            "value": "16",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                            "line": 295,
                                                                            "char": 74
                                                                        },
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                        "line": 295,
                                                                        "char": 74
                                                                    }
                                                                ],
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                "line": 295,
                                                                "char": 75
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 295,
                                                            "char": 75
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 295,
                                                    "char": 76
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 295,
                                                "char": 76
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 295,
                                        "char": 77
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 295,
                                    "char": 77
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 296,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "array-index",
                                    "operator": "assign",
                                    "variable": "ary",
                                    "index-expr": [
                                        {
                                            "type": "int",
                                            "value": "2",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 296,
                                            "char": 12
                                        }
                                    ],
                                    "expr": {
                                        "type": "bitwise_or",
                                        "left": {
                                            "type": "list",
                                            "left": {
                                                "type": "bitwise_and",
                                                "left": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "ary",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 296,
                                                        "char": 20
                                                    },
                                                    "right": {
                                                        "type": "int",
                                                        "value": "2",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 296,
                                                        "char": 22
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 296,
                                                    "char": 24
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "0x0fff",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 296,
                                                    "char": 32
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 296,
                                                "char": 32
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 296,
                                            "char": 34
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "0x4000",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 296,
                                            "char": 42
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 296,
                                        "char": 42
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 296,
                                    "char": 42
                                },
                                {
                                    "assign-type": "array-index",
                                    "operator": "assign",
                                    "variable": "ary",
                                    "index-expr": [
                                        {
                                            "type": "int",
                                            "value": "3",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 297,
                                            "char": 9
                                        }
                                    ],
                                    "expr": {
                                        "type": "bitwise_or",
                                        "left": {
                                            "type": "list",
                                            "left": {
                                                "type": "bitwise_and",
                                                "left": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "ary",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 297,
                                                        "char": 17
                                                    },
                                                    "right": {
                                                        "type": "int",
                                                        "value": "3",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 297,
                                                        "char": 19
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 297,
                                                    "char": 21
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "0x3fff",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 297,
                                                    "char": 29
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 297,
                                                "char": 29
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 297,
                                            "char": 31
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "0x8000",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 297,
                                            "char": 39
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 297,
                                        "char": 39
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 297,
                                    "char": 39
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 299,
                            "char": 15
                        },
                        {
                            "type": "fcall",
                            "expr": {
                                "type": "fcall",
                                "name": "array_unshift",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "ary",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 299,
                                            "char": 20
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 299,
                                        "char": 20
                                    },
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "%08x-%04x-%04x-%04x-%04x%08x",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 299,
                                            "char": 52
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 299,
                                        "char": 52
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 299,
                                "char": 53
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 301,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "call_user_func_array",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "sprintf",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 301,
                                            "char": 40
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 301,
                                        "char": 40
                                    },
                                    {
                                        "parameter": {
                                            "type": "variable",
                                            "value": "ary",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 301,
                                            "char": 45
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 301,
                                        "char": 45
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 301,
                                "char": 46
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 302,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Generates a v4 random UUID (Universally Unique IDentifier)\n\t *\n\t * The version 4 UUID is purely random (except the version). It doesn't contain meaningful\n\t * information such as MAC address, time, etc. See RFC 4122 for details of UUID.\n\t *\n\t * This algorithm sets the version number (4 bits) as well as two reserved bits.\n\t * All other bits (the remaining 122 bits) are set using a random or pseudorandom data source.\n\t * Version 4 UUIDs have the form xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx where x is any hexadecimal\n\t * digit and y is one of 8, 9, A, or B (e.g., f47ac10b-58cc-4372-a567-0e02b2c3d479).\n\t *\n\t *<code>\n\t * $random = new \\Phalcon\\Security\\Random();\n\t *\n\t * echo $random->uuid(); \/\/ 1378c906-64bb-4f81-a8d6-4ae1bfcdec22\n\t *<\/code>\n\t *\n\t * @link https:\/\/www.ietf.org\/rfc\/rfc4122.txt\n\t * @throws Exception If secure random number generator is not available or unexpected partial read\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 292,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                        "line": 292,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                    "line": 291,
                    "last-line": 315,
                    "char": 16
                },
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "number",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "len",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 316,
                            "char": 32
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "hex",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 318,
                                    "char": 10
                                },
                                {
                                    "variable": "mask",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 318,
                                    "char": 16
                                },
                                {
                                    "variable": "rnd",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 318,
                                    "char": 21
                                },
                                {
                                    "variable": "ret",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 318,
                                    "char": 26
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 319,
                            "char": 8
                        },
                        {
                            "type": "declare",
                            "data-type": "string",
                            "variables": [
                                {
                                    "variable": "bin",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 319,
                                        "char": 18
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 319,
                                    "char": 18
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 321,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "less-equal",
                                "left": {
                                    "type": "variable",
                                    "value": "len",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 321,
                                    "char": 10
                                },
                                "right": {
                                    "type": "int",
                                    "value": "0",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 321,
                                    "char": 14
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 321,
                                "char": 14
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
                                                    "value": "Require a positive integer > 0",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 322,
                                                    "char": 56
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 322,
                                                "char": 56
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 322,
                                        "char": 57
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 323,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 325,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "function_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "random_int",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 325,
                                            "char": 34
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 325,
                                        "char": 34
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 325,
                                "char": 36
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "random_int",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "int",
                                                    "value": "0",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 326,
                                                    "char": 23
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 326,
                                                "char": 23
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "len",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 326,
                                                    "char": 28
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 326,
                                                "char": 28
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 326,
                                        "char": 29
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 327,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 329,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "fcall",
                                "name": "function_exists",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "string",
                                            "value": "\\\\Sodium\\\\randombytes_uniform",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 329,
                                            "char": 53
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 329,
                                        "char": 53
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 329,
                                "char": 55
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "add",
                                        "left": {
                                            "type": "fcall",
                                            "name": "\\\\Sodium\\\\randombytes_uniform",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "len",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 331,
                                                        "char": 44
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 331,
                                                    "char": 44
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 331,
                                            "char": 46
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "1",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 331,
                                            "char": 49
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 331,
                                        "char": 49
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 332,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 334,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "hex",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "dechex",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "len",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 334,
                                                    "char": 23
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 334,
                                                "char": 23
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 334,
                                        "char": 24
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 334,
                                    "char": 24
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 336,
                            "char": 4
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "equals",
                                "left": {
                                    "type": "list",
                                    "left": {
                                        "type": "bitwise_and",
                                        "left": {
                                            "type": "fcall",
                                            "name": "strlen",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "hex",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 336,
                                                        "char": 17
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 336,
                                                    "char": 17
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 336,
                                            "char": 19
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "1",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 336,
                                            "char": 22
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 336,
                                        "char": 22
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 336,
                                    "char": 25
                                },
                                "right": {
                                    "type": "int",
                                    "value": "1",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 336,
                                    "char": 29
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 336,
                                "char": 29
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "hex",
                                            "expr": {
                                                "type": "concat",
                                                "left": {
                                                    "type": "string",
                                                    "value": "0",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 337,
                                                    "char": 18
                                                },
                                                "right": {
                                                    "type": "variable",
                                                    "value": "hex",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 337,
                                                    "char": 23
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 337,
                                                "char": 23
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 337,
                                            "char": 23
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 338,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 340,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "concat-assign",
                                    "variable": "bin",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "pack",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "H*",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 340,
                                                    "char": 22
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 340,
                                                "char": 22
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "hex",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 340,
                                                    "char": 27
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 340,
                                                "char": 27
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 340,
                                        "char": 28
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 340,
                                    "char": 28
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 342,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "mask",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "ord",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "array-access",
                                                    "left": {
                                                        "type": "variable",
                                                        "value": "bin",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 342,
                                                        "char": 21
                                                    },
                                                    "right": {
                                                        "type": "int",
                                                        "value": "0",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 342,
                                                        "char": 23
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 342,
                                                    "char": 24
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 342,
                                                "char": 24
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 342,
                                        "char": 25
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 342,
                                    "char": 25
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 343,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "mask",
                                    "expr": {
                                        "type": "bitwise_or",
                                        "left": {
                                            "type": "variable",
                                            "value": "mask",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 343,
                                            "char": 19
                                        },
                                        "right": {
                                            "type": "list",
                                            "left": {
                                                "type": "bitwise_shiftright",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "mask",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 343,
                                                    "char": 28
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "1",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 343,
                                                    "char": 31
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 343,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 343,
                                            "char": 32
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 343,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 343,
                                    "char": 32
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 344,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "mask",
                                    "expr": {
                                        "type": "bitwise_or",
                                        "left": {
                                            "type": "variable",
                                            "value": "mask",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 344,
                                            "char": 19
                                        },
                                        "right": {
                                            "type": "list",
                                            "left": {
                                                "type": "bitwise_shiftright",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "mask",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 344,
                                                    "char": 28
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "2",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 344,
                                                    "char": 31
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 344,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 344,
                                            "char": 32
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 344,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 344,
                                    "char": 32
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 345,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "mask",
                                    "expr": {
                                        "type": "bitwise_or",
                                        "left": {
                                            "type": "variable",
                                            "value": "mask",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 345,
                                            "char": 19
                                        },
                                        "right": {
                                            "type": "list",
                                            "left": {
                                                "type": "bitwise_shiftright",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "mask",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 345,
                                                    "char": 28
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "4",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 345,
                                                    "char": 31
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 345,
                                                "char": 31
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 345,
                                            "char": 32
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 345,
                                        "char": 32
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 345,
                                    "char": 32
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 347,
                            "char": 4
                        },
                        {
                            "type": "do-while",
                            "expr": {
                                "type": "less",
                                "left": {
                                    "type": "variable",
                                    "value": "bin",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 350,
                                    "char": 15
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "rnd",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 350,
                                    "char": 20
                                },
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 350,
                                "char": 20
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "rnd",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 348,
                                                    "char": 19
                                                },
                                                "name": "bytes",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "fcall",
                                                            "name": "strlen",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "bin",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                        "line": 348,
                                                                        "char": 36
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                    "line": 348,
                                                                    "char": 36
                                                                }
                                                            ],
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 348,
                                                            "char": 37
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 348,
                                                        "char": 37
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 348,
                                                "char": 38
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 348,
                                            "char": 38
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 349,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "rnd",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "substr_replace",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "rnd",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 349,
                                                            "char": 32
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 349,
                                                        "char": 32
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "fcall",
                                                            "name": "chr",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "bitwise_and",
                                                                        "left": {
                                                                            "type": "fcall",
                                                                            "name": "ord",
                                                                            "call-type": 1,
                                                                            "parameters": [
                                                                                {
                                                                                    "parameter": {
                                                                                        "type": "fcall",
                                                                                        "name": "substr",
                                                                                        "call-type": 1,
                                                                                        "parameters": [
                                                                                            {
                                                                                                "parameter": {
                                                                                                    "type": "variable",
                                                                                                    "value": "rnd",
                                                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                                                    "line": 349,
                                                                                                    "char": 52
                                                                                                },
                                                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                                                "line": 349,
                                                                                                "char": 52
                                                                                            },
                                                                                            {
                                                                                                "parameter": {
                                                                                                    "type": "int",
                                                                                                    "value": "0",
                                                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                                                    "line": 349,
                                                                                                    "char": 55
                                                                                                },
                                                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                                                "line": 349,
                                                                                                "char": 55
                                                                                            },
                                                                                            {
                                                                                                "parameter": {
                                                                                                    "type": "int",
                                                                                                    "value": "1",
                                                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                                                    "line": 349,
                                                                                                    "char": 58
                                                                                                },
                                                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                                                "line": 349,
                                                                                                "char": 58
                                                                                            }
                                                                                        ],
                                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                                        "line": 349,
                                                                                        "char": 59
                                                                                    },
                                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                                    "line": 349,
                                                                                    "char": 59
                                                                                }
                                                                            ],
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                            "line": 349,
                                                                            "char": 61
                                                                        },
                                                                        "right": {
                                                                            "type": "variable",
                                                                            "value": "mask",
                                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                            "line": 349,
                                                                            "char": 67
                                                                        },
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                        "line": 349,
                                                                        "char": 67
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                    "line": 349,
                                                                    "char": 67
                                                                }
                                                            ],
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 349,
                                                            "char": 68
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 349,
                                                        "char": 68
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "0",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 349,
                                                            "char": 71
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 349,
                                                        "char": 71
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "int",
                                                            "value": "1",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 349,
                                                            "char": 74
                                                        },
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 349,
                                                        "char": 74
                                                    }
                                                ],
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 349,
                                                "char": 75
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 349,
                                            "char": 75
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 350,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 352,
                            "char": 5
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
                                        "name": "unpack",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "H*",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 352,
                                                    "char": 24
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 352,
                                                "char": 24
                                            },
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "rnd",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 352,
                                                    "char": 29
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 352,
                                                "char": 29
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 352,
                                        "char": 30
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 352,
                                    "char": 30
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 354,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "fcall",
                                "name": "hexdec",
                                "call-type": 1,
                                "parameters": [
                                    {
                                        "parameter": {
                                            "type": "fcall",
                                            "name": "array_shift",
                                            "call-type": 1,
                                            "parameters": [
                                                {
                                                    "parameter": {
                                                        "type": "variable",
                                                        "value": "ret",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 354,
                                                        "char": 32
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 354,
                                                    "char": 32
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 354,
                                            "char": 33
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 354,
                                        "char": 33
                                    }
                                ],
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 354,
                                "char": 34
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 355,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Generates a random number between 0 and $len\n\t *\n\t * Returns an integer: 0 <= result <= $len.\n\t *\n\t *<code>\n\t * $random = new \\Phalcon\\Security\\Random();\n\t *\n\t * echo $random->number(16); \/\/ 8\n\t *<\/code>\n\t * @throws Exception If secure random number generator is not available, unexpected partial read or $len <= 0\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "int",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 317,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                        "line": 317,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                    "line": 316,
                    "last-line": 363,
                    "char": 16
                },
                {
                    "visibility": [
                        "protected"
                    ],
                    "type": "method",
                    "name": "base",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "alphabet",
                            "const": 0,
                            "data-type": "string",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 364,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "base",
                            "const": 0,
                            "data-type": "int",
                            "mandatory": 0,
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 364,
                            "char": 51
                        },
                        {
                            "type": "parameter",
                            "name": "n",
                            "const": 0,
                            "data-type": "variable",
                            "mandatory": 0,
                            "default": {
                                "type": "null",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 364,
                                "char": 61
                            },
                            "reference": 0,
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 364,
                            "char": 61
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "bytes",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 366,
                                    "char": 12
                                },
                                {
                                    "variable": "idx",
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 366,
                                    "char": 17
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 367,
                            "char": 8
                        },
                        {
                            "type": "declare",
                            "data-type": "string",
                            "variables": [
                                {
                                    "variable": "byteString",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 367,
                                        "char": 25
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 367,
                                    "char": 25
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 369,
                            "char": 5
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "bytes",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "unpack",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "string",
                                                    "value": "C*",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 369,
                                                    "char": 26
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 369,
                                                "char": 26
                                            },
                                            {
                                                "parameter": {
                                                    "type": "mcall",
                                                    "variable": {
                                                        "type": "variable",
                                                        "value": "this",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 369,
                                                        "char": 33
                                                    },
                                                    "name": "bytes",
                                                    "call-type": 1,
                                                    "parameters": [
                                                        {
                                                            "parameter": {
                                                                "type": "variable",
                                                                "value": "n",
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                "line": 369,
                                                                "char": 41
                                                            },
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 369,
                                                            "char": 41
                                                        }
                                                    ],
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 369,
                                                    "char": 42
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 369,
                                                "char": 42
                                            }
                                        ],
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 369,
                                        "char": 43
                                    },
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 369,
                                    "char": 43
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 371,
                            "char": 5
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "bytes",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 371,
                                "char": 20
                            },
                            "value": "idx",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "idx",
                                            "expr": {
                                                "type": "mod",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "idx",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 372,
                                                    "char": 18
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "64",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 372,
                                                    "char": 22
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 372,
                                                "char": 22
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 372,
                                            "char": 22
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 374,
                                    "char": 5
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "greater-equal",
                                        "left": {
                                            "type": "variable",
                                            "value": "idx",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 374,
                                            "char": 11
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "base",
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 374,
                                            "char": 18
                                        },
                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                        "line": 374,
                                        "char": 18
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "idx",
                                                    "expr": {
                                                        "type": "mcall",
                                                        "variable": {
                                                            "type": "variable",
                                                            "value": "this",
                                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                            "line": 375,
                                                            "char": 20
                                                        },
                                                        "name": "number",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "sub",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "base",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                        "line": 375,
                                                                        "char": 33
                                                                    },
                                                                    "right": {
                                                                        "type": "int",
                                                                        "value": "1",
                                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                        "line": 375,
                                                                        "char": 36
                                                                    },
                                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                    "line": 375,
                                                                    "char": 36
                                                                },
                                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                                "line": 375,
                                                                "char": 36
                                                            }
                                                        ],
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 375,
                                                        "char": 37
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 375,
                                                    "char": 37
                                                }
                                            ],
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 376,
                                            "char": 4
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 378,
                                    "char": 6
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "concat-assign",
                                            "variable": "byteString",
                                            "expr": {
                                                "type": "array-access",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "alphabet",
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 378,
                                                    "char": 29
                                                },
                                                "right": {
                                                    "type": "cast",
                                                    "left": "int",
                                                    "right": {
                                                        "type": "variable",
                                                        "value": "idx",
                                                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                        "line": 378,
                                                        "char": 39
                                                    },
                                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                    "line": 378,
                                                    "char": 39
                                                },
                                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                                "line": 378,
                                                "char": 40
                                            },
                                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                            "line": 378,
                                            "char": 40
                                        }
                                    ],
                                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                    "line": 379,
                                    "char": 3
                                }
                            ],
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 381,
                            "char": 8
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "byteString",
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 381,
                                "char": 20
                            },
                            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                            "line": 382,
                            "char": 2
                        }
                    ],
                    "docblock": "**\n\t * Generates a random string based on the number ($base) of characters ($alphabet).\n\t *\n\t * If $n is not specified, 16 is assumed. It may be larger in future.\n\t *\n\t * @throws Exception If secure random number generator is not available or unexpected partial read\n\t *",
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                                "line": 365,
                                "char": 2
                            }
                        ],
                        "void": 0,
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                        "line": 365,
                        "char": 2
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
                    "line": 364,
                    "last-line": 383,
                    "char": 19
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
            "line": 93,
            "char": 5
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/security\/random.zep",
        "line": 93,
        "char": 5
    }
]