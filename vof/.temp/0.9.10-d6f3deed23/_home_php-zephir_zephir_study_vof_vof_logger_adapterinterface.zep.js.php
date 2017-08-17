<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Logger',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
    'line' => 26,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Logger\\AdapterInterface
 *
 * Interface for Vof\\Logger adapters
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
    'line' => 27,
    'char' => 9,
  ),
  2 => 
  array (
    'type' => 'interface',
    'name' => 'AdapterInterface',
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 33,
                'char' => 60,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 33,
              'char' => 61,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                  'line' => 33,
                  'char' => 84,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 33,
                'char' => 84,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 33,
            'char' => 84,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 33,
          'last-line' => 37,
          'char' => 16,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getFormatter',
          'docblock' => '**
	 * Returns the internal formatter
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
                  'value' => 'FormatterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                  'line' => 38,
                  'char' => 56,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 38,
                'char' => 56,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 38,
            'char' => 56,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 38,
          'last-line' => 42,
          'char' => 16,
        ),
        2 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 43,
              'char' => 39,
            ),
          ),
          'docblock' => '**
	 * Filters the logs sent to the handlers to be greater or equals than a specific level
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                  'line' => 43,
                  'char' => 62,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 43,
                'char' => 62,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 43,
            'char' => 62,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 43,
          'last-line' => 47,
          'char' => 16,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getLogLevel',
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 48,
                'char' => 38,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 48,
            'char' => 38,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 48,
          'last-line' => 52,
          'char' => 16,
        ),
        4 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 53,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 53,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 53,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 53,
                'char' => 73,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 53,
              'char' => 73,
            ),
          ),
          'docblock' => '**
	 * Sends/Writes messages to the file log
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                  'line' => 53,
                  'char' => 96,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 53,
                'char' => 96,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 53,
            'char' => 96,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 53,
          'last-line' => 57,
          'char' => 16,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'begin',
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                  'line' => 58,
                  'char' => 47,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 58,
                'char' => 47,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 58,
            'char' => 47,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 58,
          'last-line' => 62,
          'char' => 16,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'commit',
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                  'line' => 63,
                  'char' => 48,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 63,
                'char' => 48,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 63,
            'char' => 48,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 63,
          'last-line' => 67,
          'char' => 16,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'rollback',
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                  'line' => 68,
                  'char' => 50,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 68,
                'char' => 50,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 68,
            'char' => 50,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 68,
          'last-line' => 72,
          'char' => 16,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'close',
          'docblock' => '**
 	 * Closes the logger
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 73,
                'char' => 36,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 73,
            'char' => 36,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 73,
          'last-line' => 77,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 78,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 78,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 78,
              'char' => 62,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                  'line' => 78,
                  'char' => 85,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 78,
                'char' => 85,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 78,
            'char' => 85,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 78,
          'last-line' => 82,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 83,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 83,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 83,
              'char' => 62,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                  'line' => 83,
                  'char' => 85,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 83,
                'char' => 85,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 83,
            'char' => 85,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 83,
          'last-line' => 87,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 88,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 88,
                'char' => 61,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 88,
              'char' => 61,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                  'line' => 88,
                  'char' => 84,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 88,
                'char' => 84,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 88,
            'char' => 84,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 88,
          'last-line' => 92,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 93,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 93,
                'char' => 63,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 93,
              'char' => 63,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                  'line' => 93,
                  'char' => 86,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 93,
                'char' => 86,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 93,
            'char' => 86,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 93,
          'last-line' => 97,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 98,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 98,
                'char' => 64,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 98,
              'char' => 64,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                  'line' => 98,
                  'char' => 87,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 98,
                'char' => 87,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 98,
            'char' => 87,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 98,
          'last-line' => 102,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 103,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 103,
                'char' => 62,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 103,
              'char' => 62,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                  'line' => 103,
                  'char' => 85,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 103,
                'char' => 85,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 103,
            'char' => 85,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 103,
          'last-line' => 107,
          'char' => 16,
        ),
        15 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 108,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 108,
                'char' => 66,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
              'line' => 108,
              'char' => 66,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                  'line' => 108,
                  'char' => 89,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
                'line' => 108,
                'char' => 89,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
            'line' => 108,
            'char' => 89,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
          'line' => 108,
          'last-line' => 109,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
      'line' => 109,
      'char' => 1,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapterinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);