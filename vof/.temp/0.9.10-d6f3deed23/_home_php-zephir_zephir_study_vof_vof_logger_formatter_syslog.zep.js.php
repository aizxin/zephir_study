<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Logger\\Formatter',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
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
        'name' => 'Vof\\Logger\\Formatter',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
        'line' => 22,
        'char' => 25,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
    'line' => 28,
    'char' => 2,
  ),
  2 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Logger\\Formatter\\Syslog
 *
 * Prepares a message to be used in a Syslog backend
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
    'line' => 29,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'Syslog',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'Formatter',
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
          'name' => 'format',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
              'line' => 41,
              'char' => 32,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'type',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
              'line' => 41,
              'char' => 42,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'timestamp',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
              'line' => 41,
              'char' => 57,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                'line' => 41,
                'char' => 77,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
              'line' => 41,
              'char' => 77,
            ),
          ),
          'statements' => 
          array (
            0 => 
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                    'line' => 43,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                  'line' => 43,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                  'line' => 43,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                'line' => 43,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                          'line' => 44,
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                              'line' => 44,
                              'char' => 43,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                            'line' => 44,
                            'char' => 43,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'context',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                              'line' => 44,
                              'char' => 52,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                            'line' => 44,
                            'char' => 52,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                        'line' => 44,
                        'char' => 53,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                      'line' => 44,
                      'char' => 53,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                  'line' => 45,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
              'line' => 46,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'array',
                'left' => 
                array (
                  0 => 
                  array (
                    'value' => 
                    array (
                      'type' => 'variable',
                      'value' => 'type',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                      'line' => 46,
                      'char' => 15,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                    'line' => 46,
                    'char' => 15,
                  ),
                  1 => 
                  array (
                    'value' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                      'line' => 46,
                      'char' => 24,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                    'line' => 46,
                    'char' => 24,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                'line' => 46,
                'char' => 25,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
              'line' => 47,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Applies a format to a message before sent it to the internal log
	 *
	 * @param string message
	 * @param int type
	 * @param int timestamp
	 * @param array context
	 * @return array
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'array',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
                'line' => 42,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
            'line' => 42,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
          'line' => 41,
          'last-line' => 48,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
      'line' => 29,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/syslog.zep',
    'line' => 29,
    'char' => 5,
  ),
);