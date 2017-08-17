<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Logger\\Formatter',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
        'line' => 22,
        'char' => 25,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
    'line' => 28,
    'char' => 2,
  ),
  2 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Logger\\Formatter\\Line
 *
 * Formats messages using an one-line string
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
    'line' => 29,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'Line',
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
          'name' => '_dateFormat',
          'default' => 
          array (
            'type' => 'string',
            'value' => 'D, d M y H:i:s O',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
            'line' => 37,
            'char' => 45,
          ),
          'docblock' => '**
	 * Default date format
	 *
	 * @var string
	 *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 37,
              'char' => 50,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 37,
              'char' => 56,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
          'line' => 43,
          'char' => 3,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_format',
          'default' => 
          array (
            'type' => 'string',
            'value' => '[%date%][%type%] %message%',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
            'line' => 44,
            'char' => 51,
          ),
          'docblock' => '**
	 * Format applied to each message
	 *
	 * @var string
	 *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 44,
              'char' => 56,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 44,
              'char' => 62,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
          'line' => 51,
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
          'name' => '__construct',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'format',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                'line' => 52,
                'char' => 43,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 52,
              'char' => 43,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'dateFormat',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                'line' => 52,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 52,
              'char' => 62,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'format',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                'line' => 54,
                'char' => 13,
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
                      'property' => '_format',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'format',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                        'line' => 55,
                        'char' => 30,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                      'line' => 55,
                      'char' => 30,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                  'line' => 56,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 57,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'dateFormat',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                'line' => 57,
                'char' => 17,
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
                      'property' => '_dateFormat',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'dateFormat',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                        'line' => 58,
                        'char' => 38,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                      'line' => 58,
                      'char' => 38,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                  'line' => 59,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 60,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Logger\\Formatter\\Line construct
	 *
	 * @param string format
	 * @param string dateFormat
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
          'line' => 52,
          'last-line' => 70,
          'char' => 16,
        ),
        1 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 71,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 71,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 71,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                'line' => 71,
                'char' => 84,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 71,
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
                  'variable' => 'format',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                  'line' => 73,
                  'char' => 13,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 75,
              'char' => 5,
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
                  'variable' => 'format',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                      'line' => 75,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_format',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                      'line' => 75,
                      'char' => 29,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                    'line' => 75,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                  'line' => 75,
                  'char' => 29,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 80,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'memstr',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'format',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                      'line' => 80,
                      'char' => 19,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                    'line' => 80,
                    'char' => 19,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => '%date%',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                      'line' => 80,
                      'char' => 29,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                    'line' => 80,
                    'char' => 29,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                'line' => 80,
                'char' => 31,
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
                      'variable' => 'format',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'str_replace',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '%date%',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                              'line' => 81,
                              'char' => 37,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                            'line' => 81,
                            'char' => 37,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'date',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'property-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'this',
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                                      'line' => 81,
                                      'char' => 49,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => '_dateFormat',
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                                      'line' => 81,
                                      'char' => 61,
                                    ),
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                                    'line' => 81,
                                    'char' => 61,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                                  'line' => 81,
                                  'char' => 61,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'timestamp',
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                                    'line' => 81,
                                    'char' => 72,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                                  'line' => 81,
                                  'char' => 72,
                                ),
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                              'line' => 81,
                              'char' => 73,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                            'line' => 81,
                            'char' => 73,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'format',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                              'line' => 81,
                              'char' => 81,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                            'line' => 81,
                            'char' => 81,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                        'line' => 81,
                        'char' => 82,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                      'line' => 81,
                      'char' => 82,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                  'line' => 82,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 87,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'memstr',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'format',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                      'line' => 87,
                      'char' => 19,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                    'line' => 87,
                    'char' => 19,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => '%type%',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                      'line' => 87,
                      'char' => 29,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                    'line' => 87,
                    'char' => 29,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                'line' => 87,
                'char' => 31,
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
                      'variable' => 'format',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'str_replace',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => '%type%',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                              'line' => 88,
                              'char' => 37,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                            'line' => 88,
                            'char' => 37,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'mcall',
                              'variable' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                                'line' => 88,
                                'char' => 44,
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
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                                    'line' => 88,
                                    'char' => 63,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                                  'line' => 88,
                                  'char' => 63,
                                ),
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                              'line' => 88,
                              'char' => 64,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                            'line' => 88,
                            'char' => 64,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'format',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                              'line' => 88,
                              'char' => 72,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                            'line' => 88,
                            'char' => 72,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                        'line' => 88,
                        'char' => 73,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                      'line' => 88,
                      'char' => 73,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                  'line' => 89,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 91,
              'char' => 5,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'format',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'str_replace',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => '%message%',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                            'line' => 91,
                            'char' => 39,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                          'line' => 91,
                          'char' => 39,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'message',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                            'line' => 91,
                            'char' => 48,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                          'line' => 91,
                          'char' => 48,
                        ),
                        2 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'format',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                            'line' => 91,
                            'char' => 56,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                          'line' => 91,
                          'char' => 56,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                      'line' => 91,
                      'char' => 58,
                    ),
                    'right' => 
                    array (
                      'type' => 'constant',
                      'value' => 'PHP_EOL',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                      'line' => 91,
                      'char' => 67,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                    'line' => 91,
                    'char' => 67,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                  'line' => 91,
                  'char' => 67,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 93,
              'char' => 4,
            ),
            5 => 
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                    'line' => 93,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                  'line' => 93,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                  'line' => 93,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                'line' => 93,
                'char' => 33,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                      'line' => 94,
                      'char' => 16,
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
                          'value' => 'format',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                          'line' => 94,
                          'char' => 35,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                        'line' => 94,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'context',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                          'line' => 94,
                          'char' => 44,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                        'line' => 94,
                        'char' => 44,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                    'line' => 94,
                    'char' => 45,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                  'line' => 95,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 97,
              'char' => 8,
            ),
            6 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'format',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                'line' => 97,
                'char' => 16,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
              'line' => 98,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Applies a format to a message before sent it to the internal log
	 *
	 * @param string message
	 * @param int type
	 * @param int timestamp
	 * @param array $context
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
                'line' => 72,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
            'line' => 72,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
          'line' => 71,
          'last-line' => 99,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
      'line' => 29,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatter/line.zep',
    'line' => 29,
    'char' => 5,
  ),
);