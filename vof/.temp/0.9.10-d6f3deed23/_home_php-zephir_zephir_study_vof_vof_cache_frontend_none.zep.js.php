<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Cache\\Frontend',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
        'line' => 22,
        'char' => 32,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
    'line' => 67,
    'char' => 2,
  ),
  2 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Cache\\Frontend\\None
 *
 * Discards any kind of frontend data input. This frontend does not have expiration time or any other options
 *
 *<code>
 *<?php
 *
 * //Create a None Cache
 * $frontCache = new \\Vof\\Cache\\Frontend\\None();
 *
 * // Create the component that will cache "Data" to a "Memcached" backend
 * // Memcached connection settings
 * $cache = new \\Vof\\Cache\\Backend\\Memcache(
 *     $frontCache,
 *     [
 *         "host" => "localhost",
 *         "port" => "11211",
 *     ]
 * );
 *
 * $cacheKey = "robots_order_id.cache";
 *
 * // This Frontend always return the data as it\'s returned by the backend
 * $robots = $cache->get($cacheKey);
 *
 * if ($robots === null) {
 *     // This cache doesn\'t perform any expiration checking, so the data is always expired
 *     // Make the database call and populate the variable
 *     $robots = Robots::find(
 *         [
 *             "order" => "id",
 *         ]
 *     );
 *
 *     $cache->save($cacheKey, $robots);
 * }
 *
 * // Use $robots :)
 * foreach ($robots as $robot) {
 *     echo $robot->name, "\\n";
 * }
 *</code>
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
    'line' => 68,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'None',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'FrontendInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
        'line' => 69,
        'char' => 1,
      ),
    ),
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
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'int',
                'value' => '1',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
                'line' => 76,
                'char' => 11,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
              'line' => 77,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Returns cache lifetime, always one second expiring content
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
                'line' => 75,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
            'line' => 75,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
          'line' => 74,
          'last-line' => 81,
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
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
                'line' => 84,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
              'line' => 85,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Check whether if frontend is buffering output, always false
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
                'line' => 83,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
            'line' => 83,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
          'line' => 82,
          'last-line' => 89,
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
	 * Starts output frontend
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
          'line' => 90,
          'last-line' => 99,
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
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
          'line' => 100,
          'last-line' => 107,
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
	 * Stops output frontend
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
          'line' => 108,
          'last-line' => 115,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
              'line' => 116,
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
                'type' => 'variable',
                'value' => 'data',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
                'line' => 118,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
              'line' => 119,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Prepare data to be stored
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
          'line' => 116,
          'last-line' => 123,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
              'line' => 124,
              'char' => 40,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'data',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
                'line' => 126,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
              'line' => 127,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Prepares data to be retrieved to user
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
                'line' => 125,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
            'line' => 125,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
          'line' => 124,
          'last-line' => 128,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
      'line' => 68,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/none.zep',
    'line' => 68,
    'char' => 5,
  ),
);