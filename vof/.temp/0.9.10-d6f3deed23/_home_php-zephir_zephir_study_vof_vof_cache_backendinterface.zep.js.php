<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Cache',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
    'line' => 26,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Cache\\BackendInterface
 *
 * Interface for Vof\\Cache\\Backend adapters
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
    'line' => 27,
    'char' => 9,
  ),
  2 => 
  array (
    'type' => 'interface',
    'name' => 'BackendInterface',
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
              'line' => 36,
              'char' => 31,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
                'line' => 36,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
              'line' => 36,
              'char' => 48,
            ),
          ),
          'docblock' => '**
	 * Starts a cache. The keyname allows to identify the created fragment
	 *
	 * @param int|string keyName
	 * @param   int lifetime
	 * @return  mixed
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
          'line' => 36,
          'last-line' => 42,
          'char' => 16,
        ),
        1 => 
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
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
                'line' => 43,
                'char' => 40,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
              'line' => 43,
              'char' => 40,
            ),
          ),
          'docblock' => '**
	 * Stops the frontend without store any cached content
	 *
	 * @param boolean stopBuffer
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
          'line' => 43,
          'last-line' => 49,
          'char' => 16,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getFrontend',
          'docblock' => '**
	 * Returns front-end instance adapter related to the back-end
	 *
	 * @return mixed
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
          'line' => 50,
          'last-line' => 56,
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
          'docblock' => '**
	 * Returns the backend options
	 *
	 * @return array
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
          'line' => 57,
          'last-line' => 61,
          'char' => 16,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isFresh',
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
                'line' => 62,
                'char' => 38,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
            'line' => 62,
            'char' => 38,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
          'line' => 62,
          'last-line' => 66,
          'char' => 16,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'isStarted',
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
                'line' => 67,
                'char' => 40,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
            'line' => 67,
            'char' => 40,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
          'line' => 67,
          'last-line' => 73,
          'char' => 16,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'setLastKey',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'lastKey',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
              'line' => 74,
              'char' => 36,
            ),
          ),
          'docblock' => '**
	 * Sets the last key used in the cache
	 *
	 * @param string lastKey
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
          'line' => 74,
          'last-line' => 80,
          'char' => 16,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getLastKey',
          'docblock' => '**
	 * Gets the last key stored by the cache
	 *
	 * @return string
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
          'line' => 81,
          'last-line' => 85,
          'char' => 16,
        ),
        8 => 
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
              'name' => 'keyName',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
              'line' => 86,
              'char' => 36,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'lifetime',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
                'line' => 86,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
              'line' => 86,
              'char' => 57,
            ),
          ),
          'docblock' => '**
	 * Returns a cached content
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
                'line' => 86,
                'char' => 66,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
                'line' => 86,
                'char' => 72,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
            'line' => 86,
            'char' => 72,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
          'line' => 86,
          'last-line' => 96,
          'char' => 16,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'save',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'keyName',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
                'line' => 97,
                'char' => 37,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
              'line' => 97,
              'char' => 37,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'content',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
                'line' => 97,
                'char' => 53,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
              'line' => 97,
              'char' => 53,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'lifetime',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
                'line' => 97,
                'char' => 70,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
              'line' => 97,
              'char' => 70,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'stopBuffer',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
                'line' => 97,
                'char' => 89,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
              'line' => 97,
              'char' => 89,
            ),
          ),
          'docblock' => '**
	 * Stores cached content into the file backend and stops the frontend
	 *
	 * @param int|string keyName
	 * @param string content
	 * @param int lifetime
	 * @param boolean stopBuffer
	 * @return boolean true on success/false otherwise
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
                'line' => 97,
                'char' => 101,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
            'line' => 97,
            'char' => 101,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
          'line' => 97,
          'last-line' => 104,
          'char' => 16,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'delete',
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
              'line' => 105,
              'char' => 32,
            ),
          ),
          'docblock' => '**
	 * Deletes a value from the cache by its key
	 *
	 * @param int|string keyName
	 * @return boolean
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
          'line' => 105,
          'last-line' => 112,
          'char' => 16,
        ),
        11 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'queryKeys',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'prefix',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
                'line' => 113,
                'char' => 41,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
              'line' => 113,
              'char' => 41,
            ),
          ),
          'docblock' => '**
	 * Query the existing cached keys
	 *
	 * @param string prefix
	 * @return array
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
          'line' => 113,
          'last-line' => 121,
          'char' => 16,
        ),
        12 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'exists',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'keyName',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
                'line' => 122,
                'char' => 39,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
              'line' => 122,
              'char' => 39,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
                'line' => 122,
                'char' => 56,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
              'line' => 122,
              'char' => 56,
            ),
          ),
          'docblock' => '**
	 * Checks if cache exists and it hasn\'t expired
	 *
	 * @param  string keyName
	 * @param  int lifetime
	 * @return boolean
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
          'line' => 122,
          'last-line' => 123,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
      'line' => 123,
      'char' => 1,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backendinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);