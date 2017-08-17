<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
    'line' => 35,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Phalcon\\Logger
 *
 * Phalcon\\Logger is a component whose purpose is create logs using
 * different backends via adapters, generating options, formats and filters
 * also implementing transactions.
 *
 *<code>
 *	$logger = new \\Phalcon\\Logger\\Adapter\\File("app/logs/test.log");
 *	$logger->log("This is a message");
 *	$logger->log(\\Phalcon\\Logger::ERROR, "This is an error");
 *	$logger->error("This is another error");
 *</code>
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
    'line' => 36,
    'char' => 8,
  ),
  2 => 
  array (
    'type' => 'class',
    'name' => 'Logger',
    'abstract' => 1,
    'final' => 0,
    'definition' => 
    array (
      'constants' => 
      array (
        0 => 
        array (
          'type' => 'const',
          'name' => 'SPECIAL',
          'default' => 
          array (
            'type' => 'int',
            'value' => '9',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
            'line' => 39,
            'char' => 19,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
          'line' => 41,
          'char' => 6,
        ),
        1 => 
        array (
          'type' => 'const',
          'name' => 'CUSTOM',
          'default' => 
          array (
            'type' => 'int',
            'value' => '8',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
            'line' => 41,
            'char' => 18,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
          'line' => 43,
          'char' => 6,
        ),
        2 => 
        array (
          'type' => 'const',
          'name' => 'DEBUG',
          'default' => 
          array (
            'type' => 'int',
            'value' => '7',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
            'line' => 43,
            'char' => 17,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
          'line' => 45,
          'char' => 6,
        ),
        3 => 
        array (
          'type' => 'const',
          'name' => 'INFO',
          'default' => 
          array (
            'type' => 'int',
            'value' => '6',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
            'line' => 45,
            'char' => 16,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
          'line' => 47,
          'char' => 6,
        ),
        4 => 
        array (
          'type' => 'const',
          'name' => 'NOTICE',
          'default' => 
          array (
            'type' => 'int',
            'value' => '5',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
            'line' => 47,
            'char' => 18,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
          'line' => 49,
          'char' => 6,
        ),
        5 => 
        array (
          'type' => 'const',
          'name' => 'WARNING',
          'default' => 
          array (
            'type' => 'int',
            'value' => '4',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
            'line' => 49,
            'char' => 19,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
          'line' => 51,
          'char' => 6,
        ),
        6 => 
        array (
          'type' => 'const',
          'name' => 'ERROR',
          'default' => 
          array (
            'type' => 'int',
            'value' => '3',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
            'line' => 51,
            'char' => 17,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
          'line' => 53,
          'char' => 6,
        ),
        7 => 
        array (
          'type' => 'const',
          'name' => 'ALERT',
          'default' => 
          array (
            'type' => 'int',
            'value' => '2',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
            'line' => 53,
            'char' => 17,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
          'line' => 55,
          'char' => 6,
        ),
        8 => 
        array (
          'type' => 'const',
          'name' => 'CRITICAL',
          'default' => 
          array (
            'type' => 'int',
            'value' => '1',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
            'line' => 55,
            'char' => 20,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
          'line' => 57,
          'char' => 6,
        ),
        9 => 
        array (
          'type' => 'const',
          'name' => 'EMERGENCE',
          'default' => 
          array (
            'type' => 'int',
            'value' => '0',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
            'line' => 57,
            'char' => 21,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
          'line' => 59,
          'char' => 6,
        ),
        10 => 
        array (
          'type' => 'const',
          'name' => 'EMERGENCY',
          'default' => 
          array (
            'type' => 'int',
            'value' => '0',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
            'line' => 59,
            'char' => 21,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
          'line' => 60,
          'char' => 1,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
      'line' => 36,
      'char' => 14,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger.zep',
    'line' => 36,
    'char' => 14,
  ),
);