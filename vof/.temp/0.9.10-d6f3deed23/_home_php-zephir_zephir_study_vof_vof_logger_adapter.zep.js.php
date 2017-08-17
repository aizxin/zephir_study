<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Logger',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
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
        'name' => 'Vof\\Logger',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
        'line' => 22,
        'char' => 15,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
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
        'name' => 'Vof\\Logger\\Item',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
        'line' => 23,
        'char' => 20,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
    'line' => 24,
    'char' => 3,
  ),
  3 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Vof\\Logger\\Exception',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
        'line' => 24,
        'char' => 25,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
    'line' => 25,
    'char' => 3,
  ),
  4 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Vof\\Logger\\AdapterInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
        'line' => 25,
        'char' => 32,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
    'line' => 26,
    'char' => 3,
  ),
  5 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Vof\\Logger\\FormatterInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
        'line' => 26,
        'char' => 34,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
    'line' => 32,
    'char' => 2,
  ),
  6 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Logger\\Adapter
 *
 * Base class for Vof\\Logger adapters
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
    'line' => 33,
    'char' => 8,
  ),
  7 => 
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
        'line' => 34,
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
          'name' => '_transaction',
          'default' => 
          array (
            'type' => 'bool',
            'value' => 'false',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 41,
            'char' => 32,
          ),
          'docblock' => '**
	 * Tells if there is an active transaction or not
	 *
	 * @var boolean
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 47,
          'char' => 3,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_queue',
          'default' => 
          array (
            'type' => 'empty-array',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 48,
            'char' => 23,
          ),
          'docblock' => '**
	 * Array with messages queued in the transaction
	 *
	 * @var array
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 54,
          'char' => 3,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_formatter',
          'docblock' => '**
	 * Formatter
	 *
	 * @var object
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 61,
          'char' => 3,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_logLevel',
          'default' => 
          array (
            'type' => 'int',
            'value' => '9',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 62,
            'char' => 25,
          ),
          'docblock' => '**
	 * Log level
	 *
	 * @var int
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 66,
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
          'name' => 'setLogLevel',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'level',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 67,
              'char' => 39,
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
                  'property' => '_logLevel',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'level',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 69,
                    'char' => 30,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 69,
                  'char' => 30,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 70,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 70,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 71,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Filters the logs sent to the handlers that are less or equal than a specific level
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
                  'value' => 'AdapterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 68,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 68,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 68,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 67,
          'last-line' => 75,
          'char' => 16,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getLogLevel',
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 78,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_logLevel',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 78,
                  'char' => 25,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 78,
                'char' => 25,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 79,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Returns the current log level
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 77,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 77,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 76,
          'last-line' => 83,
          'char' => 16,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setFormatter',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'formatter',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'FormatterInterface',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 84,
                'char' => 60,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 84,
              'char' => 61,
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
                  'property' => '_formatter',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'formatter',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 86,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 86,
                  'char' => 35,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 87,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 87,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 88,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Sets the message formatter
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
                  'value' => 'AdapterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 85,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 85,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 85,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 84,
          'last-line' => 92,
          'char' => 16,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'begin',
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
                  'property' => '_transaction',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 95,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 95,
                  'char' => 32,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 96,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 96,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 97,
              'char' => 2,
            ),
          ),
          'docblock' => '**
 	 * Starts a transaction
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
                  'value' => 'AdapterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 94,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 94,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 94,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 93,
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
          'name' => 'commit',
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
                  'variable' => 'message',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 104,
                  'char' => 14,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 106,
              'char' => 4,
            ),
            1 => 
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 106,
                    'char' => 12,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_transaction',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 106,
                    'char' => 26,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 106,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 106,
                'char' => 26,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'Exception',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'There is no active transaction',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 107,
                          'char' => 56,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 107,
                        'char' => 56,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 107,
                    'char' => 57,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 108,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 110,
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
                  'property' => '_transaction',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 110,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 110,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 115,
              'char' => 5,
            ),
            3 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 115,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_queue',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 115,
                  'char' => 31,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 115,
                'char' => 31,
              ),
              'value' => 'message',
              'reverse' => 0,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 116,
                      'char' => 9,
                    ),
                    'name' => 'logInternal',
                    'call-type' => 3,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'message',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                            'line' => 117,
                            'char' => 13,
                          ),
                          'name' => 'getMessage',
                          'call-type' => 1,
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 117,
                          'char' => 26,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 117,
                        'char' => 26,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'message',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                            'line' => 118,
                            'char' => 13,
                          ),
                          'name' => 'getType',
                          'call-type' => 1,
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 118,
                          'char' => 23,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 118,
                        'char' => 23,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'message',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                            'line' => 119,
                            'char' => 13,
                          ),
                          'name' => 'getTime',
                          'call-type' => 1,
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 119,
                          'char' => 23,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 119,
                        'char' => 23,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'message',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                            'line' => 120,
                            'char' => 13,
                          ),
                          'name' => 'getContext',
                          'call-type' => 1,
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 121,
                          'char' => 4,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 121,
                        'char' => 4,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 121,
                    'char' => 5,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 122,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 125,
              'char' => 5,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_queue',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 125,
                    'char' => 24,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 125,
                  'char' => 24,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 127,
              'char' => 8,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 127,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 128,
              'char' => 2,
            ),
          ),
          'docblock' => '**
 	 * Commits the internal transaction
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
                  'value' => 'AdapterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 103,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 103,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 103,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 102,
          'last-line' => 132,
          'char' => 16,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'rollback',
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
                  'variable' => 'transaction',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 135,
                  'char' => 18,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 137,
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
                  'variable' => 'transaction',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 137,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_transaction',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 137,
                      'char' => 39,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 137,
                    'char' => 39,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 137,
                  'char' => 39,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 138,
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
                  'type' => 'variable',
                  'value' => 'transaction',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 138,
                  'char' => 19,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 138,
                'char' => 19,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'throw',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'Exception',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'There is no active transaction',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 139,
                          'char' => 56,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 139,
                        'char' => 56,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 139,
                    'char' => 57,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 140,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 142,
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
                  'property' => '_transaction',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 142,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 142,
                  'char' => 33,
                ),
                1 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_queue',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 143,
                    'char' => 21,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 143,
                  'char' => 21,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 145,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 145,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 146,
              'char' => 2,
            ),
          ),
          'docblock' => '**
 	 * Rollbacks the internal transaction
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
                  'value' => 'AdapterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 134,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 134,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 134,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 133,
          'last-line' => 150,
          'char' => 16,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isTransaction',
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 153,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_transaction',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 153,
                  'char' => 28,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 153,
                'char' => 28,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 154,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Returns the whether the logger is currently in an active transaction or not
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 152,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 152,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 151,
          'last-line' => 158,
          'char' => 16,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'critical',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 159,
              'char' => 42,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 159,
                'char' => 65,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 159,
              'char' => 65,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 161,
                  'char' => 15,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'Logger',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 161,
                        'char' => 36,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'CRITICAL',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 161,
                        'char' => 36,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 161,
                      'char' => 36,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 161,
                    'char' => 36,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 161,
                      'char' => 45,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 161,
                    'char' => 45,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 161,
                      'char' => 54,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 161,
                    'char' => 54,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 161,
                'char' => 55,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 162,
              'char' => 2,
            ),
          ),
          'docblock' => '**
 	 * Sends/Writes a critical message to the log
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
                  'value' => 'AdapterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 160,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 160,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 160,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 159,
          'last-line' => 166,
          'char' => 16,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'emergency',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 167,
              'char' => 43,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 167,
                'char' => 66,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 167,
              'char' => 66,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 169,
                  'char' => 15,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'Logger',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 169,
                        'char' => 37,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'EMERGENCY',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 169,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 169,
                      'char' => 37,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 169,
                    'char' => 37,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 169,
                      'char' => 46,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 169,
                    'char' => 46,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 169,
                      'char' => 55,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 169,
                    'char' => 55,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 169,
                'char' => 56,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 170,
              'char' => 2,
            ),
          ),
          'docblock' => '**
 	 * Sends/Writes an emergency message to the log
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
                  'value' => 'AdapterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 168,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 168,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 168,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 167,
          'last-line' => 174,
          'char' => 16,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'debug',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 175,
              'char' => 39,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 175,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 175,
              'char' => 62,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 177,
                  'char' => 15,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'Logger',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 177,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'DEBUG',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 177,
                        'char' => 33,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 177,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 177,
                    'char' => 33,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 177,
                      'char' => 42,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 177,
                    'char' => 42,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 177,
                      'char' => 51,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 177,
                    'char' => 51,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 177,
                'char' => 52,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 178,
              'char' => 2,
            ),
          ),
          'docblock' => '**
 	 * Sends/Writes a debug message to the log
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
                  'value' => 'AdapterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 176,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 176,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 176,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 175,
          'last-line' => 182,
          'char' => 16,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'error',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 183,
              'char' => 39,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 183,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 183,
              'char' => 62,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 185,
                  'char' => 15,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'Logger',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 185,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'ERROR',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 185,
                        'char' => 33,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 185,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 185,
                    'char' => 33,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 185,
                      'char' => 42,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 185,
                    'char' => 42,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 185,
                      'char' => 51,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 185,
                    'char' => 51,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 185,
                'char' => 52,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 186,
              'char' => 2,
            ),
          ),
          'docblock' => '**
 	 * Sends/Writes an error message to the log
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
                  'value' => 'AdapterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 184,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 184,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 184,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 183,
          'last-line' => 190,
          'char' => 16,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'info',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 191,
              'char' => 38,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 191,
                'char' => 61,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 191,
              'char' => 61,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 193,
                  'char' => 15,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'Logger',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 193,
                        'char' => 32,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'INFO',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 193,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 193,
                      'char' => 32,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 193,
                    'char' => 32,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 193,
                      'char' => 41,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 193,
                    'char' => 41,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 193,
                      'char' => 50,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 193,
                    'char' => 50,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 193,
                'char' => 51,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 194,
              'char' => 2,
            ),
          ),
          'docblock' => '**
 	 * Sends/Writes an info message to the log
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
                  'value' => 'AdapterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 192,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 192,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 192,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 191,
          'last-line' => 198,
          'char' => 16,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'notice',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 199,
              'char' => 40,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 199,
                'char' => 63,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 199,
              'char' => 63,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 201,
                  'char' => 15,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'Logger',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 201,
                        'char' => 34,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'NOTICE',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 201,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 201,
                      'char' => 34,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 201,
                    'char' => 34,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 201,
                      'char' => 43,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 201,
                    'char' => 43,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 201,
                      'char' => 52,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 201,
                    'char' => 52,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 201,
                'char' => 53,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 202,
              'char' => 2,
            ),
          ),
          'docblock' => '**
 	 * Sends/Writes a notice message to the log
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
                  'value' => 'AdapterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 200,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 200,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 200,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 199,
          'last-line' => 206,
          'char' => 16,
        ),
        13 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'warning',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 207,
              'char' => 41,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 207,
                'char' => 64,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 207,
              'char' => 64,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 209,
                  'char' => 15,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'Logger',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 209,
                        'char' => 35,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'WARNING',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 209,
                        'char' => 35,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 209,
                      'char' => 35,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 209,
                    'char' => 35,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 209,
                      'char' => 44,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 209,
                    'char' => 44,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 209,
                      'char' => 53,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 209,
                    'char' => 53,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 209,
                'char' => 54,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 210,
              'char' => 2,
            ),
          ),
          'docblock' => '**
 	 * Sends/Writes a warning message to the log
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
                  'value' => 'AdapterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 208,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 208,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 208,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 207,
          'last-line' => 214,
          'char' => 16,
        ),
        14 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'alert',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 215,
              'char' => 39,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 215,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 215,
              'char' => 62,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 217,
                  'char' => 15,
                ),
                'name' => 'log',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'static-constant-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'Logger',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 217,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'ALERT',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 217,
                        'char' => 33,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 217,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 217,
                    'char' => 33,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 217,
                      'char' => 42,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 217,
                    'char' => 42,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'context',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 217,
                      'char' => 51,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 217,
                    'char' => 51,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 217,
                'char' => 52,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 218,
              'char' => 2,
            ),
          ),
          'docblock' => '**
 	 * Sends/Writes an alert message to the log
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
                  'value' => 'AdapterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 216,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 216,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 216,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 215,
          'last-line' => 222,
          'char' => 16,
        ),
        15 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'log',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'type',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 223,
              'char' => 30,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 223,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 223,
              'char' => 50,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 223,
                'char' => 73,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 223,
              'char' => 73,
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
                  'variable' => 'timestamp',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 225,
                  'char' => 16,
                ),
                1 => 
                array (
                  'variable' => 'toggledMessage',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 225,
                  'char' => 32,
                ),
                2 => 
                array (
                  'variable' => 'toggledType',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 225,
                  'char' => 45,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 230,
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
                      'value' => 'type',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 230,
                      'char' => 19,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 230,
                    'char' => 19,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'string',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 230,
                    'char' => 31,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 230,
                  'char' => 31,
                ),
                'right' => 
                array (
                  'type' => 'equals',
                  'left' => 
                  array (
                    'type' => 'typeof',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'message',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 230,
                      'char' => 49,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 230,
                    'char' => 49,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'integer',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 230,
                    'char' => 61,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 230,
                  'char' => 61,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 230,
                'char' => 61,
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
                      'variable' => 'toggledMessage',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'type',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 231,
                        'char' => 29,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 231,
                      'char' => 29,
                    ),
                    1 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'toggledType',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'message',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 231,
                        'char' => 52,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 231,
                      'char' => 52,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 232,
                  'char' => 3,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
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
                          'value' => 'type',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 233,
                          'char' => 20,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 233,
                        'char' => 20,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'string',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 233,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 233,
                      'char' => 32,
                    ),
                    'right' => 
                    array (
                      'type' => 'equals',
                      'left' => 
                      array (
                        'type' => 'typeof',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 233,
                          'char' => 50,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 233,
                        'char' => 50,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'null',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 233,
                        'char' => 59,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 233,
                      'char' => 59,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 233,
                    'char' => 59,
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
                          'variable' => 'toggledMessage',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'type',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                            'line' => 234,
                            'char' => 30,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 234,
                          'char' => 30,
                        ),
                        1 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'toggledType',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'message',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                            'line' => 234,
                            'char' => 53,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 234,
                          'char' => 53,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 235,
                      'char' => 4,
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
                          'variable' => 'toggledMessage',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'message',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                            'line' => 236,
                            'char' => 33,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 236,
                          'char' => 33,
                        ),
                        1 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'toggledType',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'type',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                            'line' => 236,
                            'char' => 53,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 236,
                          'char' => 53,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 237,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 238,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 240,
              'char' => 4,
            ),
            2 => 
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
                    'value' => 'toggledType',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 240,
                    'char' => 26,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 240,
                  'char' => 26,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 240,
                  'char' => 35,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 240,
                'char' => 35,
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
                      'variable' => 'toggledType',
                      'expr' => 
                      array (
                        'type' => 'static-constant-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'Logger',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 241,
                          'char' => 35,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'DEBUG',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 241,
                          'char' => 35,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 241,
                        'char' => 35,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 241,
                      'char' => 35,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 242,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 247,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'greater-equal',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 247,
                    'char' => 11,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_logLevel',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 247,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 247,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'toggledType',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 247,
                  'char' => 36,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 247,
                'char' => 36,
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
                      'variable' => 'timestamp',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'time',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 248,
                        'char' => 26,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 248,
                      'char' => 26,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 249,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 249,
                      'char' => 12,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_transaction',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 249,
                      'char' => 26,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                    'line' => 249,
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
                          'assign-type' => 'object-property-append',
                          'operator' => 'assign',
                          'variable' => 'this',
                          'property' => '_queue',
                          'expr' => 
                          array (
                            'type' => 'new',
                            'class' => 'Item',
                            'dynamic' => 0,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'toggledMessage',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                                  'line' => 250,
                                  'char' => 49,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                                'line' => 250,
                                'char' => 49,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'toggledType',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                                  'line' => 250,
                                  'char' => 62,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                                'line' => 250,
                                'char' => 62,
                              ),
                              2 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'timestamp',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                                  'line' => 250,
                                  'char' => 73,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                                'line' => 250,
                                'char' => 73,
                              ),
                              3 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'context',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                                  'line' => 250,
                                  'char' => 82,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                                'line' => 250,
                                'char' => 82,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                            'line' => 250,
                            'char' => 83,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 250,
                          'char' => 83,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 251,
                      'char' => 4,
                    ),
                  ),
                  'else_statements' => 
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                          'line' => 252,
                          'char' => 10,
                        ),
                        'name' => 'logInternal',
                        'call-type' => 3,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'toggledMessage',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                              'line' => 252,
                              'char' => 41,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                            'line' => 252,
                            'char' => 41,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'toggledType',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                              'line' => 252,
                              'char' => 54,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                            'line' => 252,
                            'char' => 54,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'timestamp',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                              'line' => 252,
                              'char' => 65,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                            'line' => 252,
                            'char' => 65,
                          ),
                          3 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'context',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                              'line' => 252,
                              'char' => 74,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                            'line' => 252,
                            'char' => 74,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                        'line' => 252,
                        'char' => 75,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                      'line' => 253,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 254,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 256,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 256,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
              'line' => 257,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Logs messages to the internal logger. Appends logs to the logger
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
                  'value' => 'AdapterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                  'line' => 224,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
                'line' => 224,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
            'line' => 224,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
          'line' => 223,
          'last-line' => 258,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
      'line' => 33,
      'char' => 14,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter.zep',
    'line' => 33,
    'char' => 14,
  ),
);