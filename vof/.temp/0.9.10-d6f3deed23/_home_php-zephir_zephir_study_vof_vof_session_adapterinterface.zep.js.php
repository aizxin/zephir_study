<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Session',
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
    'line' => 26,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Session\\AdapterInterface
 *
 * Interface for Vof\\Session adapters
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
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
          'name' => 'start',
          'docblock' => '**
	 * Starts session, optionally using an adapter
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
          'line' => 32,
          'last-line' => 36,
          'char' => 16,
        ),
        1 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
              'line' => 37,
              'char' => 43,
            ),
          ),
          'docblock' => '**
	 * Sets session options
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
          'line' => 37,
          'last-line' => 41,
          'char' => 16,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getOptions',
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
                'line' => 42,
                'char' => 39,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
            'line' => 42,
            'char' => 39,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
          'line' => 42,
          'last-line' => 46,
          'char' => 16,
        ),
        3 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
              'line' => 47,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
                'line' => 47,
                'char' => 59,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
              'line' => 47,
              'char' => 59,
            ),
          ),
          'docblock' => '**
	 * Gets a session variable from an application context
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
                'line' => 47,
                'char' => 67,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
            'line' => 47,
            'char' => 67,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
          'line' => 47,
          'last-line' => 51,
          'char' => 16,
        ),
        4 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
              'line' => 52,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
              'line' => 52,
              'char' => 45,
            ),
          ),
          'docblock' => '**
	 * Sets a session variable in an application context
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
          'line' => 52,
          'last-line' => 56,
          'char' => 16,
        ),
        5 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
              'line' => 57,
              'char' => 34,
            ),
          ),
          'docblock' => '**
	 * Check whether a session variable is set in an application context
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
                'line' => 57,
                'char' => 46,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
            'line' => 57,
            'char' => 46,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
          'line' => 57,
          'last-line' => 61,
          'char' => 16,
        ),
        6 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
              'line' => 62,
              'char' => 37,
            ),
          ),
          'docblock' => '**
	 * Removes a session variable from an application context
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
          'line' => 62,
          'last-line' => 66,
          'char' => 16,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getId',
          'docblock' => '**
	 * Returns active session id
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
                'line' => 67,
                'char' => 35,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
            'line' => 67,
            'char' => 35,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
          'line' => 67,
          'last-line' => 71,
          'char' => 16,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isStarted',
          'docblock' => '**
	 * Check whether the session has been started
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
                'line' => 72,
                'char' => 40,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
            'line' => 72,
            'char' => 40,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
          'line' => 72,
          'last-line' => 76,
          'char' => 16,
        ),
        9 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
                'line' => 77,
                'char' => 52,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
              'line' => 77,
              'char' => 52,
            ),
          ),
          'docblock' => '**
	 * Destroys the active session
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
                'line' => 77,
                'char' => 64,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
            'line' => 77,
            'char' => 64,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
          'line' => 77,
          'last-line' => 81,
          'char' => 16,
        ),
        10 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
                'line' => 82,
                'char' => 59,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
              'line' => 82,
              'char' => 59,
            ),
          ),
          'docblock' => '**
	 * Regenerate session\'s id
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
                  'line' => 82,
                  'char' => 82,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
                'line' => 82,
                'char' => 82,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
            'line' => 82,
            'char' => 82,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
          'line' => 82,
          'last-line' => 86,
          'char' => 16,
        ),
        11 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
              'line' => 87,
              'char' => 37,
            ),
          ),
          'docblock' => '**
	 * Set session name
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
          'line' => 87,
          'last-line' => 91,
          'char' => 16,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getName',
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
                'line' => 92,
                'char' => 37,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
            'line' => 92,
            'char' => 37,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
          'line' => 92,
          'last-line' => 93,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
      'line' => 93,
      'char' => 1,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapterinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);