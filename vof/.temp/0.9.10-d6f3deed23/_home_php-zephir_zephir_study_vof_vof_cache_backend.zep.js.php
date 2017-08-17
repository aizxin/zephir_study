<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Cache',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
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
        'name' => 'Vof\\Cache\\FrontendInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
        'line' => 22,
        'char' => 32,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
    'line' => 28,
    'char' => 2,
  ),
  2 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Cache\\Backend
 *
 * This class implements common functionality for backend adapters. A backend cache adapter may extend this class
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
    'line' => 29,
    'char' => 8,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'Backend',
    'abstract' => 1,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'BackendInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
        'line' => 30,
        'char' => 1,
      ),
    ),
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
          'name' => '_frontend',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 32,
              'char' => 27,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 32,
              'char' => 33,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
          'line' => 34,
          'char' => 10,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_options',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 34,
              'char' => 26,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 34,
              'char' => 32,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
          'line' => 36,
          'char' => 10,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_prefix',
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
            'line' => 36,
            'char' => 24,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
          'line' => 38,
          'char' => 10,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_lastKey',
          'default' => 
          array (
            'type' => 'string',
            'value' => '',
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
            'line' => 38,
            'char' => 26,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 38,
              'char' => 31,
            ),
            1 => 
            array (
              'type' => 'shortcut',
              'name' => 'set',
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 38,
              'char' => 37,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
          'line' => 40,
          'char' => 10,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_lastLifetime',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
            'line' => 40,
            'char' => 32,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
          'line' => 42,
          'char' => 10,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_fresh',
          'default' => 
          array (
            'type' => 'bool',
            'value' => 'false',
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
            'line' => 42,
            'char' => 26,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
          'line' => 44,
          'char' => 10,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_started',
          'default' => 
          array (
            'type' => 'bool',
            'value' => 'false',
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
            'line' => 44,
            'char' => 28,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
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
              'name' => 'frontend',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'FrontendInterface',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                'line' => 52,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 52,
              'char' => 58,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'options',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                'line' => 52,
                'char' => 74,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 52,
              'char' => 74,
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
                  'variable' => 'prefix',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 54,
                  'char' => 13,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 59,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'prefix',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 59,
                  'char' => 38,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'options',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                    'line' => 59,
                    'char' => 27,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'prefix',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                    'line' => 59,
                    'char' => 36,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 59,
                  'char' => 38,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                'line' => 59,
                'char' => 38,
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
                      'property' => '_prefix',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'prefix',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                        'line' => 60,
                        'char' => 30,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                      'line' => 60,
                      'char' => 30,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 61,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 63,
              'char' => 5,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_frontend',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'frontend',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                    'line' => 63,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 63,
                  'char' => 33,
                ),
                1 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_options',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'options',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                    'line' => 64,
                    'char' => 28,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 64,
                  'char' => 28,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 65,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Cache\\Backend constructor
	 *
	 * @param \\Vof\\Cache\\FrontendInterface frontend
	 * @param array options
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
          'line' => 52,
          'last-line' => 73,
          'char' => 16,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'start',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'keyName',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 74,
              'char' => 35,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'lifetime',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                'line' => 74,
                'char' => 52,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 74,
              'char' => 52,
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
                  'variable' => 'existingCache',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 76,
                  'char' => 20,
                ),
                1 => 
                array (
                  'variable' => 'fresh',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 76,
                  'char' => 27,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 81,
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
                  'variable' => 'existingCache',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                      'line' => 81,
                      'char' => 28,
                    ),
                    'name' => 'get',
                    'call-type' => 3,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                          'line' => 81,
                          'char' => 44,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                        'line' => 81,
                        'char' => 44,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'lifetime',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                          'line' => 81,
                          'char' => 54,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                        'line' => 81,
                        'char' => 54,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                    'line' => 81,
                    'char' => 55,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 81,
                  'char' => 55,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 83,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'existingCache',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 83,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 83,
                  'char' => 29,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                'line' => 83,
                'char' => 29,
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
                      'variable' => 'fresh',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'true',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                        'line' => 84,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                      'line' => 84,
                      'char' => 20,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 85,
                  'char' => 7,
                ),
                1 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                        'line' => 85,
                        'char' => 9,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_frontend',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                        'line' => 85,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                      'line' => 85,
                      'char' => 20,
                    ),
                    'name' => 'start',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                    'line' => 85,
                    'char' => 28,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 86,
                  'char' => 3,
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
                      'variable' => 'fresh',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                        'line' => 87,
                        'char' => 21,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                      'line' => 87,
                      'char' => 21,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 88,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 90,
              'char' => 5,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_fresh',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'fresh',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                    'line' => 90,
                    'char' => 27,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 90,
                  'char' => 27,
                ),
                1 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_started',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                    'line' => 91,
                    'char' => 25,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 91,
                  'char' => 25,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 96,
              'char' => 4,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'lifetime',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                    'line' => 96,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 96,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 96,
                  'char' => 32,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                'line' => 96,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => '_lastLifetime',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'lifetime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                        'line' => 97,
                        'char' => 38,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                      'line' => 97,
                      'char' => 38,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 98,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 100,
              'char' => 8,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'existingCache',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                'line' => 100,
                'char' => 23,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 101,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Starts a cache. The keyname allows to identify the created fragment
	 *
	 * @param   int|string keyName
	 * @param   int lifetime
	 * @return  mixed
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
          'line' => 74,
          'last-line' => 105,
          'char' => 16,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'stop',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'stopBuffer',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                'line' => 106,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 106,
              'char' => 48,
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
                  'type' => 'variable',
                  'value' => 'stopBuffer',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 108,
                  'char' => 19,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 108,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                'line' => 108,
                'char' => 26,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'mcall',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                        'line' => 109,
                        'char' => 9,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_frontend',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                        'line' => 109,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                      'line' => 109,
                      'char' => 20,
                    ),
                    'name' => 'stop',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                    'line' => 109,
                    'char' => 27,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 110,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 111,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_started',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                    'line' => 111,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 111,
                  'char' => 29,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 112,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Stops the frontend without store any cached content
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
            'line' => 107,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
          'line' => 106,
          'last-line' => 116,
          'char' => 16,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isFresh',
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 119,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_fresh',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 119,
                  'char' => 22,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                'line' => 119,
                'char' => 22,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 120,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Checks whether the last cache is fresh or cached
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                'line' => 118,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
            'line' => 118,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
          'line' => 117,
          'last-line' => 124,
          'char' => 16,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isStarted',
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 127,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_started',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 127,
                  'char' => 24,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                'line' => 127,
                'char' => 24,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 128,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Checks whether the cache has starting buffering or not
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                'line' => 126,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
            'line' => 126,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
          'line' => 125,
          'last-line' => 134,
          'char' => 16,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getLifetime',
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 137,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_lastLifetime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                  'line' => 137,
                  'char' => 29,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                'line' => 137,
                'char' => 29,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
              'line' => 138,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Gets the last lifetime set
	 *
	 * @return int
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'int',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
                'line' => 136,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
            'line' => 136,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
          'line' => 135,
          'last-line' => 139,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
      'line' => 29,
      'char' => 14,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend.zep',
    'line' => 29,
    'char' => 14,
  ),
);