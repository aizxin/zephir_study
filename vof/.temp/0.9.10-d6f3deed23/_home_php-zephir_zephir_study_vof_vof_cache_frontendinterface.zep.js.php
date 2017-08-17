<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Cache',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
    'line' => 26,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Cache\\FrontendInterface
 *
 * Interface for Vof\\Cache\\Frontend adapters
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
    'line' => 27,
    'char' => 9,
  ),
  2 => 
  array (
    'type' => 'interface',
    'name' => 'FrontendInterface',
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
          'name' => 'getLifetime',
          'docblock' => '**
	 * Returns the cache lifetime
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
                'line' => 33,
                'char' => 38,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
            'line' => 33,
            'char' => 38,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
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
          'name' => 'isBuffering',
          'docblock' => '**
	 * Check whether if frontend is buffering output
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
                'line' => 38,
                'char' => 42,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
            'line' => 38,
            'char' => 42,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
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
          'name' => 'start',
          'docblock' => '**
	 * Starts the frontend
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
          'line' => 43,
          'last-line' => 49,
          'char' => 16,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getContent',
          'docblock' => '**
	 * Returns output cached content
	 *
	 * @return string
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
          'line' => 50,
          'last-line' => 54,
          'char' => 16,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'stop',
          'docblock' => '**
	 * Stops the frontend
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
          'line' => 55,
          'last-line' => 61,
          'char' => 16,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'beforeStore',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'data',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
              'line' => 62,
              'char' => 34,
            ),
          ),
          'docblock' => '**
	 * Serializes data before storing it
	 *
	 * @param mixed data
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
          'line' => 62,
          'last-line' => 68,
          'char' => 16,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'afterRetrieve',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'data',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
              'line' => 69,
              'char' => 36,
            ),
          ),
          'docblock' => '**
	 * Unserializes data after retrieving it
	 *
	 * @param mixed data
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
          'line' => 69,
          'last-line' => 70,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
      'line' => 70,
      'char' => 1,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontendinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);