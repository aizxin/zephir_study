<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Logger',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
    'line' => 22,
    'char' => 3,
  ),
  1 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Vof\\Logger\\FormatterInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
        'line' => 22,
        'char' => 34,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
    'line' => 23,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Vof\\Logger',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
        'line' => 23,
        'char' => 15,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
    'line' => 29,
    'char' => 2,
  ),
  3 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Logger\\Formatter
 *
 * This is a base class for logger formatters
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
    'line' => 30,
    'char' => 8,
  ),
  4 => 
  array (
    'type' => 'class',
    'name' => 'Formatter',
    'abstract' => 1,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'FormatterInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
        'line' => 31,
        'char' => 1,
      ),
    ),
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getTypeString',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'type',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
              'line' => 36,
              'char' => 40,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'switch',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'type',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                'line' => 38,
                'char' => 15,
              ),
              'clauses' => 
              array (
                0 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'static-constant-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'Logger',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 40,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'DEBUG',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 40,
                      'char' => 22,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 40,
                    'char' => 22,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'DEBUG',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                        'line' => 41,
                        'char' => 19,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 43,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 43,
                  'char' => 7,
                ),
                1 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'static-constant-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'Logger',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 43,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ERROR',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 43,
                      'char' => 22,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 43,
                    'char' => 22,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'ERROR',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                        'line' => 44,
                        'char' => 19,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 46,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 46,
                  'char' => 7,
                ),
                2 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'static-constant-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'Logger',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 46,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'WARNING',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 46,
                      'char' => 24,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 46,
                    'char' => 24,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'WARNING',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                        'line' => 47,
                        'char' => 21,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 49,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 49,
                  'char' => 7,
                ),
                3 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'static-constant-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'Logger',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 49,
                      'char' => 25,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'CRITICAL',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 49,
                      'char' => 25,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 49,
                    'char' => 25,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'CRITICAL',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                        'line' => 50,
                        'char' => 22,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 52,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 52,
                  'char' => 7,
                ),
                4 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'static-constant-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'Logger',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 52,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'CUSTOM',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 52,
                      'char' => 23,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 52,
                    'char' => 23,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'CUSTOM',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                        'line' => 53,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 55,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 55,
                  'char' => 7,
                ),
                5 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'static-constant-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'Logger',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 55,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ALERT',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 55,
                      'char' => 22,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 55,
                    'char' => 22,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'ALERT',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                        'line' => 56,
                        'char' => 19,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 58,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 58,
                  'char' => 7,
                ),
                6 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'static-constant-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'Logger',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 58,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'NOTICE',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 58,
                      'char' => 23,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 58,
                    'char' => 23,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'NOTICE',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                        'line' => 59,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 61,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 61,
                  'char' => 7,
                ),
                7 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'static-constant-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'Logger',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 61,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'INFO',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 61,
                      'char' => 21,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 61,
                    'char' => 21,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'INFO',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                        'line' => 62,
                        'char' => 18,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 64,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 64,
                  'char' => 7,
                ),
                8 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'static-constant-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'Logger',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 64,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'EMERGENCY',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 64,
                      'char' => 26,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 64,
                    'char' => 26,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'EMERGENCY',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                        'line' => 65,
                        'char' => 23,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 67,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 67,
                  'char' => 7,
                ),
                9 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'static-constant-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'Logger',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 67,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'SPECIAL',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 67,
                      'char' => 24,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 67,
                    'char' => 24,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'SPECIAL',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                        'line' => 68,
                        'char' => 21,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 69,
                      'char' => 3,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 69,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
              'line' => 71,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'string',
                'value' => 'CUSTOM',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                'line' => 71,
                'char' => 18,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
              'line' => 72,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Returns the string meaning of a logger constant
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                'line' => 37,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
            'line' => 37,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
          'line' => 36,
          'last-line' => 80,
          'char' => 16,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'interpolate',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
              'line' => 81,
              'char' => 44,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                'line' => 81,
                'char' => 64,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
              'line' => 81,
              'char' => 64,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'replace',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 83,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 83,
                  'char' => 19,
                ),
                2 => 
                array (
                  'variable' => 'value',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 83,
                  'char' => 26,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
              'line' => 85,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'equals',
                  'left' => 
                  array (
                    'type' => 'typeof',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 85,
                      'char' => 22,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 85,
                    'char' => 22,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'array',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 85,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 85,
                  'char' => 33,
                ),
                'right' => 
                array (
                  'type' => 'greater',
                  'left' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'count',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'context',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                          'line' => 85,
                          'char' => 48,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                        'line' => 85,
                        'char' => 48,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 85,
                    'char' => 50,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 85,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 85,
                  'char' => 54,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                'line' => 85,
                'char' => 54,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'replace',
                      'expr' => 
                      array (
                        'type' => 'empty-array',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                        'line' => 86,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 86,
                      'char' => 20,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 87,
                  'char' => 6,
                ),
                1 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'context',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 87,
                    'char' => 30,
                  ),
                  'key' => 'key',
                  'value' => 'value',
                  'reverse' => 0,
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'replace',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'string',
                                  'value' => '{',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                                  'line' => 88,
                                  'char' => 21,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'key',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                                  'line' => 88,
                                  'char' => 27,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                                'line' => 88,
                                'char' => 27,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => '}',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                                'line' => 88,
                                'char' => 32,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                              'line' => 88,
                              'char' => 32,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'value',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                            'line' => 88,
                            'char' => 41,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                          'line' => 88,
                          'char' => 41,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                      'line' => 89,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 90,
                  'char' => 9,
                ),
                2 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'strtr',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                          'line' => 90,
                          'char' => 24,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                        'line' => 90,
                        'char' => 24,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'replace',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                          'line' => 90,
                          'char' => 33,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                        'line' => 90,
                        'char' => 33,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                    'line' => 90,
                    'char' => 34,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                  'line' => 91,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
              'line' => 92,
              'char' => 8,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'message',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
                'line' => 92,
                'char' => 17,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
              'line' => 93,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Interpolates context values into the message placeholders
	 *
	 * @see http://www.php-fig.org/psr/psr-3/ Section 1.2 Message
	 * @param string $message
	 * @param array $context
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
          'line' => 81,
          'last-line' => 94,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
      'line' => 30,
      'char' => 14,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter.zep',
    'line' => 30,
    'char' => 14,
  ),
);