<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Session',
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
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
        'name' => 'Vof\\Session\\AdapterInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
        'line' => 22,
        'char' => 33,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
    'line' => 27,
    'char' => 2,
  ),
  2 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Session\\Adapter
 *
 * Base class for Vof\\Session adapters
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
    'line' => 28,
    'char' => 8,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'Adapter',
    'abstract' => 1,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'AdapterInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
        'line' => 29,
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
          'name' => '_uniqueId',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 38,
          'char' => 10,
        ),
        1 => 
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
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 38,
            'char' => 28,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 40,
          'char' => 10,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_options',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 46,
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
              'name' => 'options',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 47,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 47,
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
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'options',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 49,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 49,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 49,
                  'char' => 32,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 49,
                'char' => 32,
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
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 50,
                      'char' => 9,
                    ),
                    'name' => 'setOptions',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 50,
                          'char' => 28,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 50,
                        'char' => 28,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 50,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 51,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 52,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Session\\Adapter constructor
	 *
	 * @param array options
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 47,
          'last-line' => 56,
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
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'headers_sent',
                  'call-type' => 1,
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 59,
                  'char' => 22,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 59,
                'char' => 22,
              ),
              'statements' => 
              array (
                0 => 
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 60,
                          'char' => 13,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_started',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 60,
                          'char' => 24,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 60,
                        'char' => 24,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 60,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'not-identical',
                      'left' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 60,
                          'char' => 31,
                        ),
                        'name' => 'status',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 60,
                        'char' => 43,
                      ),
                      'right' => 
                      array (
                        'type' => 'static-constant-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'self',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 60,
                          'char' => 66,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'SESSION_ACTIVE',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 60,
                          'char' => 66,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 60,
                        'char' => 66,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 60,
                      'char' => 66,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 60,
                    'char' => 66,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'fcall',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'session_start',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 61,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 62,
                      'char' => 7,
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
                            'value' => 'true',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                            'line' => 62,
                            'char' => 30,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 62,
                          'char' => 30,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 63,
                      'char' => 10,
                    ),
                    2 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'true',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 63,
                        'char' => 16,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 64,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 65,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 66,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 66,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 67,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Starts the session (if headers are already sent the session will not be started)
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 58,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 58,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 57,
          'last-line' => 79,
          'char' => 16,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setOptions',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'options',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 80,
              'char' => 43,
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
                  'variable' => 'uniqueId',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 82,
                  'char' => 15,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 84,
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
                  'value' => 'uniqueId',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 84,
                  'char' => 42,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'options',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 84,
                    'char' => 29,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'uniqueId',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 84,
                    'char' => 40,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 84,
                  'char' => 42,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 84,
                'char' => 42,
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
                      'property' => '_uniqueId',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'uniqueId',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 85,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 85,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 86,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 88,
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
                  'property' => '_options',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'options',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 88,
                    'char' => 31,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 88,
                  'char' => 31,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 89,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Sets session\'s options
	 *
	 *<code>
	 * $session->setOptions(
	 *     [
	 *         "uniqueId" => "my-private-app",
	 *     ]
	 * );
	 *</code>
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 80,
          'last-line' => 93,
          'char' => 16,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getOptions',
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 96,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_options',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 96,
                  'char' => 24,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 96,
                'char' => 24,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 97,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Get internal options
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 95,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 95,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 94,
          'last-line' => 101,
          'char' => 16,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setName',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'name',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 102,
              'char' => 37,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'session_name',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'name',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 104,
                      'char' => 23,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 104,
                    'char' => 23,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 104,
                'char' => 24,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 105,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Set session name
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 102,
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
          'name' => 'getName',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'session_name',
                'call-type' => 1,
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 112,
                'char' => 27,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 113,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Get session name
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 111,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 111,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 110,
          'last-line' => 117,
          'char' => 16,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'regenerateId',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'deleteOldSession',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 118,
                'char' => 59,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 118,
              'char' => 59,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'session_regenerate_id',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'deleteOldSession',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 120,
                      'char' => 41,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 120,
                    'char' => 41,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 120,
                'char' => 42,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 121,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 121,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 122,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * {@inheritdoc}
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
                  'value' => 'Adapter',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 119,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 119,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 119,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 118,
          'last-line' => 130,
          'char' => 16,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'get',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'index',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 131,
              'char' => 34,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'defaultValue',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 131,
                'char' => 59,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 131,
              'char' => 59,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'remove',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 131,
                'char' => 83,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 131,
              'char' => 83,
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
                  'variable' => 'value',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 133,
                  'char' => 12,
                ),
                1 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 133,
                  'char' => 17,
                ),
                2 => 
                array (
                  'variable' => 'uniqueId',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 133,
                  'char' => 27,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 135,
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
                  'variable' => 'uniqueId',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 135,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_uniqueId',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 135,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 135,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 135,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 136,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'uniqueId',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 136,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 136,
                  'char' => 22,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 136,
                'char' => 22,
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
                      'variable' => 'key',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'uniqueId',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                            'line' => 137,
                            'char' => 23,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => '#',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                            'line' => 137,
                            'char' => 29,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 137,
                          'char' => 29,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'index',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 137,
                          'char' => 36,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 137,
                        'char' => 36,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 137,
                      'char' => 36,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 138,
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
                      'variable' => 'key',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'index',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 139,
                        'char' => 19,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 139,
                      'char' => 19,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 140,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 142,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'value',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 142,
                  'char' => 33,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => '_SESSION',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 142,
                    'char' => 27,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'key',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 142,
                    'char' => 31,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 142,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 142,
                'char' => 33,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'remove',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 143,
                    'char' => 14,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'unset',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => '_SESSION',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 144,
                          'char' => 19,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 144,
                          'char' => 23,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 144,
                        'char' => 24,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 145,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 146,
                  'char' => 9,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'value',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 146,
                    'char' => 16,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 147,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 149,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'defaultValue',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 149,
                'char' => 22,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 150,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Gets a session variable from an application context
	 *
	 * <code>
	 * $session->get("auth", "yes");
	 * </code>
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'variable',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 132,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 132,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 131,
          'last-line' => 158,
          'char' => 16,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'set',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'index',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 159,
              'char' => 34,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 159,
              'char' => 45,
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
                  'variable' => 'uniqueId',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 161,
                  'char' => 15,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 163,
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
                  'variable' => 'uniqueId',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 163,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_uniqueId',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 163,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 163,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 163,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 164,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'uniqueId',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 164,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 164,
                  'char' => 22,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 164,
                'char' => 22,
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
                      'variable' => '_SESSION',
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
                              'type' => 'variable',
                              'value' => 'uniqueId',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                              'line' => 165,
                              'char' => 26,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => '#',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                              'line' => 165,
                              'char' => 32,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                            'line' => 165,
                            'char' => 32,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'index',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                            'line' => 165,
                            'char' => 39,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 165,
                          'char' => 39,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'value',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 165,
                        'char' => 48,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 165,
                      'char' => 48,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 166,
                  'char' => 9,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 167,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 169,
              'char' => 5,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'array-index',
                  'operator' => 'assign',
                  'variable' => '_SESSION',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'index',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 169,
                      'char' => 21,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'value',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 169,
                    'char' => 30,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 169,
                  'char' => 30,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 170,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Sets a session variable in an application context
	 *
	 *<code>
	 * $session->set("auth", "yes");
	 *</code>
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 159,
          'last-line' => 180,
          'char' => 16,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'has',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'index',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 181,
              'char' => 34,
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
                  'variable' => 'uniqueId',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 183,
                  'char' => 15,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 185,
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
                  'variable' => 'uniqueId',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 185,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_uniqueId',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 185,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 185,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 185,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 186,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'uniqueId',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 186,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 186,
                  'char' => 22,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 186,
                'char' => 22,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'isset',
                    'left' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => '_SESSION',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 187,
                        'char' => 25,
                      ),
                      'right' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'uniqueId',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                            'line' => 187,
                            'char' => 35,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => '#',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                            'line' => 187,
                            'char' => 41,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 187,
                          'char' => 41,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'index',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 187,
                          'char' => 48,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 187,
                        'char' => 48,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 187,
                      'char' => 49,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 187,
                    'char' => 49,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 188,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 190,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'isset',
                'left' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => '_SESSION',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 190,
                    'char' => 24,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'index',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 190,
                    'char' => 30,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 190,
                  'char' => 31,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 190,
                'char' => 31,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 191,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Check whether a session variable is set in an application context
	 *
	 *<code>
	 * var_dump(
	 *     $session->has("auth")
	 * );
	 *</code>
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 182,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 182,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 181,
          'last-line' => 199,
          'char' => 16,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'remove',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'index',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 200,
              'char' => 37,
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
                  'variable' => 'uniqueId',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 202,
                  'char' => 15,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 204,
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
                  'variable' => 'uniqueId',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 204,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_uniqueId',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 204,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 204,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 204,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 205,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'uniqueId',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 205,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 205,
                  'char' => 22,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 205,
                'char' => 22,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'unset',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => '_SESSION',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 206,
                      'char' => 18,
                    ),
                    'right' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'uniqueId',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 206,
                          'char' => 28,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '#',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 206,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 206,
                        'char' => 34,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'index',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 206,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 206,
                      'char' => 41,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 206,
                    'char' => 42,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 207,
                  'char' => 9,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 208,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 210,
              'char' => 7,
            ),
            3 => 
            array (
              'type' => 'unset',
              'expr' => 
              array (
                'type' => 'array-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => '_SESSION',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 210,
                  'char' => 17,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'index',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 210,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 210,
                'char' => 24,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 211,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Removes a session variable from an application context
	 *
	 * <code>
	 * $session->remove("auth");
	 * </code>
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 201,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 200,
          'last-line' => 219,
          'char' => 16,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getId',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'session_id',
                'call-type' => 1,
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 222,
                'char' => 22,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 223,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Returns active session id
	 *
	 *<code>
	 * echo $session->getId();
	 *</code>
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 221,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 221,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 220,
          'last-line' => 231,
          'char' => 16,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setId',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'id',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 232,
              'char' => 33,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'session_id',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'id',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 234,
                      'char' => 16,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 234,
                    'char' => 16,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 234,
                'char' => 17,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 235,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Set the current session id
	 *
	 *<code>
	 * $session->setId($id);
	 *</code>
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 232,
          'last-line' => 245,
          'char' => 16,
        ),
        13 => 
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 248,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_started',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 248,
                  'char' => 24,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 248,
                'char' => 24,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 249,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Check whether the session has been started
	 *
	 *<code>
	 * var_dump(
	 *     $session->isStarted()
	 * );
	 *</code>
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 247,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 247,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 246,
          'last-line' => 263,
          'char' => 16,
        ),
        14 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'destroy',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'removeData',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 264,
                'char' => 52,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 264,
              'char' => 52,
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
                'value' => 'removeData',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 266,
                'char' => 17,
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
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 267,
                      'char' => 9,
                    ),
                    'name' => 'removeSessionData',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 267,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 268,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 270,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 270,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 270,
                  'char' => 29,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 271,
              'char' => 8,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'session_destroy',
                'call-type' => 1,
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 271,
                'char' => 27,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 272,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Destroys the active session
	 *
	 *<code>
	 * var_dump(
	 *     $session->destroy()
	 * );
	 *
	 * var_dump(
	 *     $session->destroy(true)
	 * );
	 *</code>
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 265,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 265,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 264,
          'last-line' => 286,
          'char' => 16,
        ),
        15 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'status',
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
                  'variable' => 'status',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 289,
                  'char' => 13,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 291,
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
                  'variable' => 'status',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'session_status',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 291,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 291,
                  'char' => 32,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 293,
              'char' => 8,
            ),
            2 => 
            array (
              'type' => 'switch',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'status',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 293,
                'char' => 17,
              ),
              'clauses' => 
              array (
                0 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'constant',
                    'value' => 'PHP_SESSION_DISABLED',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 294,
                    'char' => 29,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'static-constant-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'self',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 295,
                          'char' => 34,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'SESSION_DISABLED',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 295,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 295,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 297,
                      'char' => 7,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 297,
                  'char' => 7,
                ),
                1 => 
                array (
                  'type' => 'case',
                  'expr' => 
                  array (
                    'type' => 'constant',
                    'value' => 'PHP_SESSION_ACTIVE',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 297,
                    'char' => 27,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'static-constant-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'self',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 298,
                          'char' => 32,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'SESSION_ACTIVE',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 298,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 298,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 299,
                      'char' => 3,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 299,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 301,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'static-constant-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'self',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 301,
                  'char' => 28,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'SESSION_NONE',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 301,
                  'char' => 28,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 301,
                'char' => 28,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 302,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Returns the status of the current session.
	 *
	 *<code>
	 * var_dump(
	 *     $session->status()
	 * );
	 *
	 * if ($session->status() !== $session::SESSION_ACTIVE) {
	 *     $session->start();
	 * }
	 *</code>
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 288,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 288,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 287,
          'last-line' => 306,
          'char' => 16,
        ),
        16 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__get',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'index',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 307,
              'char' => 36,
            ),
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 309,
                  'char' => 15,
                ),
                'name' => 'get',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'index',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 309,
                      'char' => 25,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 309,
                    'char' => 25,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 309,
                'char' => 26,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 310,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Alias: Gets a session variable from an application context
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'variable',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 308,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 308,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 307,
          'last-line' => 314,
          'char' => 16,
        ),
        17 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__set',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'index',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 315,
              'char' => 36,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 315,
              'char' => 47,
            ),
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 317,
                  'char' => 15,
                ),
                'name' => 'set',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'index',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 317,
                      'char' => 25,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 317,
                    'char' => 25,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 317,
                      'char' => 32,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 317,
                    'char' => 32,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 317,
                'char' => 33,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 318,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Alias: Sets a session variable in an application context
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 315,
          'last-line' => 322,
          'char' => 16,
        ),
        18 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__isset',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'index',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 323,
              'char' => 38,
            ),
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 325,
                  'char' => 15,
                ),
                'name' => 'has',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'index',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 325,
                      'char' => 25,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 325,
                    'char' => 25,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 325,
                'char' => 26,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 326,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Alias: Check whether a session variable is set in an application context
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 324,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 324,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 323,
          'last-line' => 334,
          'char' => 16,
        ),
        19 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__unset',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'index',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 335,
              'char' => 38,
            ),
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
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 337,
                  'char' => 8,
                ),
                'name' => 'remove',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'index',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 337,
                      'char' => 21,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 337,
                    'char' => 21,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 337,
                'char' => 22,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 338,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Alias: Removes a session variable from an application context
	 *
	 * <code>
	 * unset($session->auth);
	 * </code>
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 335,
          'last-line' => 340,
          'char' => 16,
        ),
        20 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__destruct',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 342,
                  'char' => 11,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_started',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 342,
                  'char' => 21,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 342,
                'char' => 21,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'session_write_close',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 343,
                    'char' => 25,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 344,
                  'char' => 6,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 344,
                        'char' => 30,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 344,
                      'char' => 30,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 345,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 346,
              'char' => 2,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 340,
          'last-line' => 348,
          'char' => 16,
        ),
        21 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'method',
          'name' => 'removeSessionData',
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
                  'variable' => 'uniqueId',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 350,
                  'char' => 15,
                ),
                1 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 350,
                  'char' => 20,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 352,
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
                  'variable' => 'uniqueId',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 352,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_uniqueId',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 352,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 352,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 352,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 354,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => '_SESSION',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 354,
                  'char' => 21,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 354,
                'char' => 21,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 356,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 358,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'uniqueId',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 358,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 358,
                  'char' => 22,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                'line' => 358,
                'char' => 22,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => '_SESSION',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                    'line' => 359,
                    'char' => 27,
                  ),
                  'key' => 'key',
                  'value' => '_',
                  'reverse' => 0,
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'starts_with',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                              'line' => 360,
                              'char' => 23,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                            'line' => 360,
                            'char' => 23,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'uniqueId',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                                'line' => 360,
                                'char' => 34,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => '#',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                                'line' => 360,
                                'char' => 39,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                              'line' => 360,
                              'char' => 39,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                            'line' => 360,
                            'char' => 39,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 360,
                        'char' => 41,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'unset',
                          'expr' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => '_SESSION',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                              'line' => 361,
                              'char' => 20,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                              'line' => 361,
                              'char' => 24,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                            'line' => 361,
                            'char' => 25,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                          'line' => 362,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 363,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 364,
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
                      'variable' => '_SESSION',
                      'expr' => 
                      array (
                        'type' => 'empty-array',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                        'line' => 365,
                        'char' => 21,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                      'line' => 365,
                      'char' => 21,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
                  'line' => 366,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
              'line' => 367,
              'char' => 2,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 349,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 348,
          'last-line' => 368,
          'char' => 19,
        ),
      ),
      'constants' => 
      array (
        0 => 
        array (
          'type' => 'const',
          'name' => 'SESSION_ACTIVE',
          'default' => 
          array (
            'type' => 'int',
            'value' => '2',
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 30,
            'char' => 26,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 32,
          'char' => 6,
        ),
        1 => 
        array (
          'type' => 'const',
          'name' => 'SESSION_NONE',
          'default' => 
          array (
            'type' => 'int',
            'value' => '1',
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 32,
            'char' => 24,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 34,
          'char' => 6,
        ),
        2 => 
        array (
          'type' => 'const',
          'name' => 'SESSION_DISABLED',
          'default' => 
          array (
            'type' => 'int',
            'value' => '0',
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
            'line' => 34,
            'char' => 28,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
          'line' => 36,
          'char' => 10,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
      'line' => 28,
      'char' => 14,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter.zep',
    'line' => 28,
    'char' => 14,
  ),
);