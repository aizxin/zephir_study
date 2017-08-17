<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Logger\\Formatter',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
    'line' => 23,
    'char' => 3,
  ),
  1 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Vof\\Logger',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
        'line' => 23,
        'char' => 15,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
    'line' => 24,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Vof\\Logger\\Formatter',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
        'line' => 24,
        'char' => 25,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
    'line' => 30,
    'char' => 2,
  ),
  3 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Logger\\Formatter\\Firephp
 *
 * Formats messages so that they can be sent to FirePHP
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
    'line' => 31,
    'char' => 5,
  ),
  4 => 
  array (
    'type' => 'class',
    'name' => 'Firephp',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'Formatter',
    'definition' => 
    array (
      'properties' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_showBacktrace',
          'default' => 
          array (
            'type' => 'bool',
            'value' => 'true',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
            'line' => 33,
            'char' => 33,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
          'line' => 35,
          'char' => 10,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_enableLabels',
          'default' => 
          array (
            'type' => 'bool',
            'value' => 'true',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
            'line' => 35,
            'char' => 32,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
          'line' => 39,
          'char' => 3,
        ),
      ),
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 40,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 42,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 44,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'EMERGENCY',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 44,
                      'char' => 26,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 44,
                    'char' => 26,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 45,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 45,
                      'char' => 25,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'CRITICAL',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 45,
                      'char' => 25,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 45,
                    'char' => 25,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 46,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ERROR',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 46,
                      'char' => 22,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 46,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 47,
                        'char' => 19,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 49,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 49,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ALERT',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 49,
                      'char' => 22,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 49,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 50,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 50,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'WARNING',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 50,
                      'char' => 24,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 50,
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
                        'value' => 'WARN',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 51,
                        'char' => 18,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 53,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 53,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 53,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'INFO',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 53,
                      'char' => 21,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 53,
                    'char' => 21,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 54,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 54,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'NOTICE',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 54,
                      'char' => 23,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 54,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 55,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 55,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'CUSTOM',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 55,
                      'char' => 23,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 55,
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
                        'value' => 'INFO',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 56,
                        'char' => 18,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 58,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 58,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 58,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'DEBUG',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 58,
                      'char' => 22,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 58,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 59,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 59,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'SPECIAL',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 59,
                      'char' => 24,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 59,
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
                        'value' => 'LOG',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 60,
                        'char' => 17,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 61,
                      'char' => 3,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 61,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 63,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'string',
                'value' => 'CUSTOM',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 63,
                'char' => 18,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 64,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 41,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
            'line' => 41,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
          'line' => 40,
          'last-line' => 68,
          'char' => 16,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setShowBacktrace',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'isShow',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 69,
                'char' => 56,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 69,
              'char' => 56,
            ),
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
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_showBacktrace',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'isShow',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 71,
                    'char' => 36,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 71,
                  'char' => 36,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 72,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 72,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 73,
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
                'cast' => 
                array (
                  'type' => 'variable',
                  'value' => 'Firephp',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 70,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 70,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
            'line' => 70,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
          'line' => 69,
          'last-line' => 77,
          'char' => 16,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getShowBacktrace',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 80,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_showBacktrace',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 80,
                  'char' => 30,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 80,
                'char' => 30,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 81,
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
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 79,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
            'line' => 79,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
          'line' => 78,
          'last-line' => 85,
          'char' => 16,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'enableLabels',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'isEnable',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 86,
                'char' => 54,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 86,
              'char' => 54,
            ),
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
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_enableLabels',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'isEnable',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 88,
                    'char' => 37,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 88,
                  'char' => 37,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 89,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 89,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 90,
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
                'cast' => 
                array (
                  'type' => 'variable',
                  'value' => 'Firephp',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 87,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 87,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
            'line' => 87,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
          'line' => 86,
          'last-line' => 94,
          'char' => 16,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'labelsEnabled',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 97,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_enableLabels',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 97,
                  'char' => 29,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 97,
                'char' => 29,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 98,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Returns the labels enabled
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 96,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
            'line' => 96,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
          'line' => 95,
          'last-line' => 109,
          'char' => 16,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'format',
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 110,
              'char' => 39,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'type',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 110,
              'char' => 49,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'timestamp',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 110,
              'char' => 64,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 110,
                'char' => 84,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 110,
              'char' => 84,
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
                  'variable' => 'meta',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 112,
                  'char' => 11,
                ),
                1 => 
                array (
                  'variable' => 'body',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 112,
                  'char' => 17,
                ),
                2 => 
                array (
                  'variable' => 'backtrace',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 112,
                  'char' => 28,
                ),
                3 => 
                array (
                  'variable' => 'encoded',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 112,
                  'char' => 37,
                ),
                4 => 
                array (
                  'variable' => 'len',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 112,
                  'char' => 42,
                ),
                5 => 
                array (
                  'variable' => 'lastTrace',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 112,
                  'char' => 53,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 114,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'context',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 114,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 114,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 114,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 114,
                'char' => 33,
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
                      'variable' => 'message',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 115,
                          'char' => 23,
                        ),
                        'name' => 'interpolate',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'message',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 115,
                              'char' => 43,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                            'line' => 115,
                            'char' => 43,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'context',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 115,
                              'char' => 52,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                            'line' => 115,
                            'char' => 52,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 115,
                        'char' => 53,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 115,
                      'char' => 53,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 116,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 118,
              'char' => 5,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'meta',
                  'expr' => 
                  array (
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => 'Type',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 118,
                          'char' => 21,
                        ),
                        'value' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                            'line' => 118,
                            'char' => 28,
                          ),
                          'name' => 'getTypeString',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'type',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                                'line' => 118,
                                'char' => 47,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 118,
                              'char' => 47,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 118,
                          'char' => 48,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 118,
                        'char' => 48,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 118,
                    'char' => 49,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 118,
                  'char' => 49,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 120,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 120,
                  'char' => 11,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_showBacktrace',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 120,
                  'char' => 27,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 120,
                'char' => 27,
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
                      'variable' => 'param',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 121,
                      'char' => 13,
                    ),
                    1 => 
                    array (
                      'variable' => 'backtraceItem',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 121,
                      'char' => 28,
                    ),
                    2 => 
                    array (
                      'variable' => 'key',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 121,
                      'char' => 33,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 122,
                  'char' => 6,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'param',
                      'expr' => 
                      array (
                        'type' => 'constant',
                        'value' => 'DEBUG_BACKTRACE_IGNORE_ARGS',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 122,
                        'char' => 43,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 122,
                      'char' => 43,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 124,
                  'char' => 6,
                ),
                2 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'backtrace',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'debug_backtrace',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'param',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 124,
                              'char' => 41,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                            'line' => 124,
                            'char' => 41,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 124,
                        'char' => 42,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 124,
                      'char' => 42,
                    ),
                    1 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'lastTrace',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'end',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'backtrace',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 125,
                              'char' => 30,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                            'line' => 125,
                            'char' => 30,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 125,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 125,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 127,
                  'char' => 5,
                ),
                3 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'isset',
                    'left' => 
                    array (
                      'type' => 'list',
                      'left' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'lastTrace',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 127,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'file',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 127,
                          'char' => 29,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 127,
                        'char' => 30,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 127,
                      'char' => 32,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 127,
                    'char' => 32,
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
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'meta',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'string',
                              'value' => 'File',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 128,
                              'char' => 20,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'lastTrace',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 128,
                              'char' => 33,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'file',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 128,
                              'char' => 40,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                            'line' => 128,
                            'char' => 41,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 128,
                          'char' => 41,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 129,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 131,
                  'char' => 5,
                ),
                4 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'isset',
                    'left' => 
                    array (
                      'type' => 'list',
                      'left' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'lastTrace',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 131,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'line',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 131,
                          'char' => 29,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 131,
                        'char' => 30,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 131,
                      'char' => 32,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 131,
                    'char' => 32,
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
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'meta',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'string',
                              'value' => 'Line',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 132,
                              'char' => 20,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'lastTrace',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 132,
                              'char' => 33,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'line',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 132,
                              'char' => 40,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                            'line' => 132,
                            'char' => 41,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 132,
                          'char' => 41,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 133,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 135,
                  'char' => 6,
                ),
                5 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'backtrace',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 135,
                    'char' => 40,
                  ),
                  'key' => 'key',
                  'value' => 'backtraceItem',
                  'reverse' => 0,
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'unset',
                      'expr' => 
                      array (
                        'type' => 'list',
                        'left' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'backtraceItem',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                            'line' => 136,
                            'char' => 24,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'object',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                            'line' => 136,
                            'char' => 33,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 136,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 136,
                        'char' => 35,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 137,
                      'char' => 9,
                    ),
                    1 => 
                    array (
                      'type' => 'unset',
                      'expr' => 
                      array (
                        'type' => 'list',
                        'left' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'backtraceItem',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                            'line' => 137,
                            'char' => 24,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'args',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                            'line' => 137,
                            'char' => 31,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 137,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 137,
                        'char' => 33,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 139,
                      'char' => 7,
                    ),
                    2 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'backtrace',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 139,
                              'char' => 22,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'backtraceItem',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                            'line' => 139,
                            'char' => 39,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 139,
                          'char' => 39,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 140,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 141,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 143,
              'char' => 4,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 143,
                  'char' => 11,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_enableLabels',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 143,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 143,
                'char' => 26,
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'meta',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'Label',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 144,
                          'char' => 20,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'message',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 144,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 144,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 145,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 147,
              'char' => 4,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 147,
                      'char' => 12,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_enableLabels',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 147,
                      'char' => 28,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 147,
                    'char' => 28,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 147,
                  'char' => 28,
                ),
                'right' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 147,
                      'char' => 36,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_showBacktrace',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 147,
                      'char' => 52,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 147,
                    'char' => 52,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 147,
                  'char' => 52,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 147,
                'char' => 52,
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
                      'variable' => 'body',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'message',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 148,
                        'char' => 22,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 148,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 149,
                  'char' => 3,
                ),
              ),
              'elseif_statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 149,
                        'char' => 17,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_enableLabels',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 149,
                        'char' => 33,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 149,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'not',
                      'left' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 149,
                          'char' => 41,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_showBacktrace',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 149,
                          'char' => 57,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 149,
                        'char' => 57,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 149,
                      'char' => 57,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 149,
                    'char' => 57,
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
                          'variable' => 'body',
                          'expr' => 
                          array (
                            'type' => 'string',
                            'value' => '',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                            'line' => 150,
                            'char' => 17,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 150,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 151,
                      'char' => 3,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 151,
                  'char' => 8,
                ),
              ),
              'else_statements' => 
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
                      'variable' => 'body',
                      'expr' => 
                      array (
                        'type' => 'empty-array',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 152,
                        'char' => 17,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 152,
                      'char' => 17,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 154,
                  'char' => 5,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 154,
                      'char' => 12,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_showBacktrace',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 154,
                      'char' => 28,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 154,
                    'char' => 28,
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
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'body',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'string',
                              'value' => 'backtrace',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 155,
                              'char' => 25,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'backtrace',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                            'line' => 155,
                            'char' => 38,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 155,
                          'char' => 38,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 156,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 158,
                  'char' => 5,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 158,
                        'char' => 13,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_enableLabels',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 158,
                        'char' => 28,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 158,
                      'char' => 28,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 158,
                    'char' => 28,
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
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'body',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'string',
                              'value' => 'message',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 159,
                              'char' => 23,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'message',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                            'line' => 159,
                            'char' => 34,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 159,
                          'char' => 34,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 160,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 161,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 163,
              'char' => 5,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'encoded',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'json_encode',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'meta',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                                'line' => 163,
                                'char' => 34,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 163,
                              'char' => 34,
                            ),
                            1 => 
                            array (
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'body',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                                'line' => 163,
                                'char' => 40,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                              'line' => 163,
                              'char' => 40,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 163,
                          'char' => 41,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 163,
                        'char' => 41,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 163,
                    'char' => 42,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 163,
                  'char' => 42,
                ),
                1 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'len',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'strlen',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'encoded',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                          'line' => 164,
                          'char' => 24,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                        'line' => 164,
                        'char' => 24,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 164,
                    'char' => 25,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 164,
                  'char' => 25,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 166,
              'char' => 8,
            ),
            7 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'concat',
                'left' => 
                array (
                  'type' => 'concat',
                  'left' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'len',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 166,
                      'char' => 14,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '|',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                      'line' => 166,
                      'char' => 20,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 166,
                    'char' => 20,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'encoded',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                    'line' => 166,
                    'char' => 30,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 166,
                  'char' => 30,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => '|',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                  'line' => 166,
                  'char' => 35,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 166,
                'char' => 35,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
              'line' => 167,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Applies a format to a message before sending it to the log
	 *
	 * @param string $message
	 * @param int $type
	 * @param int $timestamp
	 * @param array $context
	 *
	 * @return string
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
                'line' => 111,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
            'line' => 111,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
          'line' => 110,
          'last-line' => 168,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
      'line' => 31,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/firephp.zep',
    'line' => 31,
    'char' => 5,
  ),
);