<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Cache\\Frontend',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
        'line' => 22,
        'char' => 32,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
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
        'name' => 'Vof\\Cache\\Exception',
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
        'line' => 23,
        'char' => 24,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
    'line' => 77,
    'char' => 2,
  ),
  3 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Cache\\Frontend\\Msgpack
 *
 * Allows to cache native PHP data in a serialized form using msgpack extension
 * This adapter uses a Msgpack frontend to store the cached content and requires msgpack extension.
 *
 * @link https://github.com/msgpack/msgpack-php
 *
 *<code>
 * use Vof\\Cache\\Backend\\File;
 * use Vof\\Cache\\Frontend\\Msgpack;
 *
 * // Cache the files for 2 days using Msgpack frontend
 * $frontCache = new Msgpack(
 *     [
 *         "lifetime" => 172800,
 *     ]
 * );
 *
 * // Create the component that will cache "Msgpack" to a "File" backend
 * // Set the cache file directory - important to keep the "/" at the end of
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
 *     // $robots is null due to cache expiration or data do not exist
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
 * // Use $robots
 * foreach ($robots as $robot) {
 *     echo $robot->name, "\\n";
 * }
 *</code>
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
    'line' => 78,
    'char' => 5,
  ),
  4 => 
  array (
    'type' => 'class',
    'name' => 'Msgpack',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'Data',
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'FrontendInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
        'line' => 79,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                'line' => 85,
                'char' => 52,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
              'line' => 85,
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
                  'variable' => 'lifetime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                  'line' => 87,
                  'char' => 15,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
              'line' => 89,
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
                  'value' => 'lifetime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                  'line' => 89,
                  'char' => 50,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'frontendOptions',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                    'line' => 89,
                    'char' => 37,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'lifetime',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                    'line' => 89,
                    'char' => 48,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                  'line' => 89,
                  'char' => 50,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                'line' => 89,
                'char' => 50,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not-identical',
                    'left' => 
                    array (
                      'type' => 'typeof',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'lifetime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                        'line' => 90,
                        'char' => 25,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                      'line' => 90,
                      'char' => 25,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'integer',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                      'line' => 90,
                      'char' => 37,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                    'line' => 90,
                    'char' => 37,
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
                              'value' => 'Option \'lifetime\' must be an integer',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                              'line' => 91,
                              'char' => 63,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                            'line' => 91,
                            'char' => 63,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                        'line' => 91,
                        'char' => 64,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                      'line' => 92,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                  'line' => 93,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
              'line' => 94,
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
                  'property' => '_frontendOptions',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'frontendOptions',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                    'line' => 94,
                    'char' => 47,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                  'line' => 94,
                  'char' => 47,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
              'line' => 95,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Cache\\Frontend\\Msgpack constructor
	 *
	 * @param array frontendOptions
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
          'line' => 85,
          'last-line' => 99,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                  'line' => 102,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'lifetime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                  'line' => 102,
                  'char' => 24,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
              'line' => 103,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                      'line' => 103,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_frontendOptions',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                      'line' => 103,
                      'char' => 39,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                    'line' => 103,
                    'char' => 39,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                  'line' => 103,
                  'char' => 39,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
              'line' => 104,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                    'line' => 104,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                  'line' => 104,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                  'line' => 104,
                  'char' => 32,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                'line' => 104,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                      'line' => 105,
                      'char' => 43,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                        'line' => 105,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'lifetime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                        'line' => 105,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                      'line' => 105,
                      'char' => 43,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                    'line' => 105,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                        'line' => 106,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                      'line' => 107,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                  'line' => 108,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
              'line' => 109,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'int',
                'value' => '1',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                'line' => 109,
                'char' => 11,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
              'line' => 110,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                'line' => 101,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
            'line' => 101,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
          'line' => 100,
          'last-line' => 114,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                'line' => 117,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
              'line' => 118,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                'line' => 116,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
            'line' => 116,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
          'line' => 115,
          'last-line' => 122,
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
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
          'line' => 123,
          'last-line' => 129,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                'line' => 132,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
              'line' => 133,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Returns output cached content
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                'line' => 131,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
            'line' => 131,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
          'line' => 130,
          'last-line' => 137,
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
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
          'line' => 138,
          'last-line' => 144,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
              'line' => 145,
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
                'name' => 'msgpack_pack',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                      'line' => 147,
                      'char' => 27,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                    'line' => 147,
                    'char' => 27,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                'line' => 147,
                'char' => 28,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
              'line' => 148,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Serializes data before storing them
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                'line' => 146,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
            'line' => 146,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
          'line' => 145,
          'last-line' => 152,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
              'line' => 153,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                      'line' => 155,
                      'char' => 21,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                    'line' => 155,
                    'char' => 21,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                'line' => 155,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                    'line' => 156,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                  'line' => 157,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
              'line' => 159,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'msgpack_unpack',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                      'line' => 159,
                      'char' => 29,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                    'line' => 159,
                    'char' => 29,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                'line' => 159,
                'char' => 30,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
              'line' => 160,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
                'line' => 154,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
            'line' => 154,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
          'line' => 153,
          'last-line' => 161,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
      'line' => 78,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/msgpack.zep',
    'line' => 78,
    'char' => 5,
  ),
);