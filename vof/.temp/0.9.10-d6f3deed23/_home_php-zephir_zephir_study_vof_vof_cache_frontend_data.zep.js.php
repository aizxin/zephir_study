<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Cache\\Frontend',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
        'line' => 22,
        'char' => 32,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
    'line' => 73,
    'char' => 2,
  ),
  2 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Cache\\Frontend\\Data
 *
 * Allows to cache native PHP data in a serialized form
 *
 *<code>
 * use Vof\\Cache\\Backend\\File;
 * use Vof\\Cache\\Frontend\\Data;
 *
 * // Cache the files for 2 days using a Data frontend
 * $frontCache = new Data(
 *     [
 *         "lifetime" => 172800,
 *     ]
 * );
 *
 * // Create the component that will cache "Data" to a \'File\' backend
 * // Set the cache file directory - important to keep the \'/\' at the end of
 * // of the value for the folder
 * $cache = new File(
 *     $frontCache,
 *     [
 *         "cacheDir" => "../app/cache/",
 *     ]
 * );
 *
 * $cacheKey = "robots_order_id.cache";
 *
 * // Try to get cached records
 * $robots = $cache->get($cacheKey);
 *
 * if ($robots === null) {
 *     // $robots is null due to cache expiration or data does not exist
 *     // Make the database call and populate the variable
 *     $robots = Robots::find(
 *         [
 *             "order" => "id",
 *         ]
 *     );
 *
 *     // Store it in the cache
 *     $cache->save($cacheKey, $robots);
 * }
 *
 * // Use $robots :)
 * foreach ($robots as $robot) {
 *     echo $robot->name, "\\n";
 * }
 *</code>
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
    'line' => 74,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'Data',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'FrontendInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
        'line' => 75,
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
          'name' => '_frontendOptions',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
          'line' => 83,
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
              'name' => 'frontendOptions',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                'line' => 84,
                'char' => 52,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
              'line' => 84,
              'char' => 52,
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
                  'property' => '_frontendOptions',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'frontendOptions',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                    'line' => 86,
                    'char' => 47,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                  'line' => 86,
                  'char' => 47,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
              'line' => 87,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Cache\\Frontend\\Data constructor
	 *
	 * @param array frontendOptions
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
          'line' => 84,
          'last-line' => 91,
          'char' => 16,
        ),
        1 => 
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
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'options',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                  'line' => 94,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'lifetime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                  'line' => 94,
                  'char' => 24,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
              'line' => 95,
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
                  'variable' => 'options',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                      'line' => 95,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_frontendOptions',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                      'line' => 95,
                      'char' => 39,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                    'line' => 95,
                    'char' => 39,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                  'line' => 95,
                  'char' => 39,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
              'line' => 96,
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
                    'value' => 'options',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                    'line' => 96,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                  'line' => 96,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                  'line' => 96,
                  'char' => 32,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                'line' => 96,
                'char' => 32,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fetch',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'lifetime',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                      'line' => 97,
                      'char' => 43,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                        'line' => 97,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'lifetime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                        'line' => 97,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                      'line' => 97,
                      'char' => 43,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                    'line' => 97,
                    'char' => 43,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'lifetime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                        'line' => 98,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                      'line' => 99,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                  'line' => 100,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
              'line' => 101,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'int',
                'value' => '1',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                'line' => 101,
                'char' => 11,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
              'line' => 102,
              'char' => 2,
            ),
          ),
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                'line' => 93,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
            'line' => 93,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
          'line' => 92,
          'last-line' => 106,
          'char' => 16,
        ),
        2 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                'line' => 109,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
              'line' => 110,
              'char' => 2,
            ),
          ),
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                'line' => 108,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
            'line' => 108,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
          'line' => 107,
          'last-line' => 114,
          'char' => 16,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'start',
          'docblock' => '**
	 * Starts output frontend. Actually, does nothing
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
          'line' => 115,
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
          'name' => 'getContent',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                'line' => 127,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
              'line' => 128,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Returns output cached content
	 *
	 * @return string
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
          'line' => 125,
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
          'name' => 'stop',
          'docblock' => '**
	 * Stops output frontend
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
          'line' => 133,
          'last-line' => 140,
          'char' => 16,
        ),
        6 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
              'line' => 141,
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
                'type' => 'fcall',
                'name' => 'serialize',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                      'line' => 143,
                      'char' => 24,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                    'line' => 143,
                    'char' => 24,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                'line' => 143,
                'char' => 25,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
              'line' => 144,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Serializes data before storing them
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
          'line' => 141,
          'last-line' => 148,
          'char' => 16,
        ),
        7 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
              'line' => 149,
              'char' => 40,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'is_numeric',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                      'line' => 151,
                      'char' => 21,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                    'line' => 151,
                    'char' => 21,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                'line' => 151,
                'char' => 23,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                    'line' => 152,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                  'line' => 153,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
              'line' => 156,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'empty',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'data',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                  'line' => 156,
                  'char' => 17,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                'line' => 156,
                'char' => 17,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                    'line' => 157,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                  'line' => 158,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
              'line' => 160,
              'char' => 8,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'unserialize',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                      'line' => 160,
                      'char' => 26,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                    'line' => 160,
                    'char' => 26,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                'line' => 160,
                'char' => 27,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
              'line' => 161,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Unserializes data after retrieval
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
                'line' => 150,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
            'line' => 150,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
          'line' => 149,
          'last-line' => 162,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
      'line' => 74,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/data.zep',
    'line' => 74,
    'char' => 5,
  ),
);