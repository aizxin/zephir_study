[
    {
        "type": "namespace",
        "name": "Vof",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
        "line": 35,
        "char": 2
    },
    {
        "type": "comment",
        "value": "**\n * Phalcon\\Logger\n *\n * Phalcon\\Logger is a component whose purpose is create logs using\n * different backends via adapters, generating options, formats and filters\n * also implementing transactions.\n *\n *<code>\n *\t$logger = new \\Phalcon\\Logger\\Adapter\\File(\"app\/logs\/test.log\");\n *\t$logger->log(\"This is a message\");\n *\t$logger->log(\\Phalcon\\Logger::ERROR, \"This is an error\");\n *\t$logger->error(\"This is another error\");\n *<\/code>\n *",
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
        "line": 36,
        "char": 8
    },
    {
        "type": "class",
        "name": "Logger",
        "abstract": 1,
        "final": 0,
        "definition": {
            "constants": [
                {
                    "type": "const",
                    "name": "SPECIAL",
                    "default": {
                        "type": "int",
                        "value": "9",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                        "line": 39,
                        "char": 19
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                    "line": 41,
                    "char": 6
                },
                {
                    "type": "const",
                    "name": "CUSTOM",
                    "default": {
                        "type": "int",
                        "value": "8",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                        "line": 41,
                        "char": 18
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                    "line": 43,
                    "char": 6
                },
                {
                    "type": "const",
                    "name": "DEBUG",
                    "default": {
                        "type": "int",
                        "value": "7",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                        "line": 43,
                        "char": 17
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                    "line": 45,
                    "char": 6
                },
                {
                    "type": "const",
                    "name": "INFO",
                    "default": {
                        "type": "int",
                        "value": "6",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                        "line": 45,
                        "char": 16
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                    "line": 47,
                    "char": 6
                },
                {
                    "type": "const",
                    "name": "NOTICE",
                    "default": {
                        "type": "int",
                        "value": "5",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                        "line": 47,
                        "char": 18
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                    "line": 49,
                    "char": 6
                },
                {
                    "type": "const",
                    "name": "WARNING",
                    "default": {
                        "type": "int",
                        "value": "4",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                        "line": 49,
                        "char": 19
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                    "line": 51,
                    "char": 6
                },
                {
                    "type": "const",
                    "name": "ERROR",
                    "default": {
                        "type": "int",
                        "value": "3",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                        "line": 51,
                        "char": 17
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                    "line": 53,
                    "char": 6
                },
                {
                    "type": "const",
                    "name": "ALERT",
                    "default": {
                        "type": "int",
                        "value": "2",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                        "line": 53,
                        "char": 17
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                    "line": 55,
                    "char": 6
                },
                {
                    "type": "const",
                    "name": "CRITICAL",
                    "default": {
                        "type": "int",
                        "value": "1",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                        "line": 55,
                        "char": 20
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                    "line": 57,
                    "char": 6
                },
                {
                    "type": "const",
                    "name": "EMERGENCE",
                    "default": {
                        "type": "int",
                        "value": "0",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                        "line": 57,
                        "char": 21
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                    "line": 59,
                    "char": 6
                },
                {
                    "type": "const",
                    "name": "EMERGENCY",
                    "default": {
                        "type": "int",
                        "value": "0",
                        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                        "line": 59,
                        "char": 21
                    },
                    "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
                    "line": 60,
                    "char": 1
                }
            ],
            "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
            "line": 36,
            "char": 14
        },
        "file": "\/home\/php-zephir\/zephir_study\/vof\/vof\/logger.zep",
        "line": 36,
        "char": 14
    }
]