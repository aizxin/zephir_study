<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Cache\\Frontend',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
        'line' => 22,
        'char' => 32,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
    'line' => 60,
    'char' => 2,
  ),
  2 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Cache\\Frontend\\Json
 *
 * Allows to cache data converting/deconverting them to JSON.
 *
 * This adapter uses the json_encode/json_decode PHP\'s functions
 *
 * As the data is encoded in JSON other systems accessing the same backend could
 * process them
 *
 *<code>
 *<?php
 *
 * // Cache the data for 2 days
 * $frontCache = new \\Vof\\Cache\\Frontend\\Json(
 *     [
 *         "lifetime" => 172800,
 *     ]
 * );
 *
 * // Create the Cache setting memcached connection options
 * $cache = new \\Vof\\Cache\\Backend\\Memcache(
 *     $frontCache,
 *     [
 *         "host"       => "localhost",
 *         "port"       => 11211,
 *         "persistent" => false,
 *     ]
 * );
 *
 * // Cache arbitrary data
 * $cache->save("my-data", [1, 2, 3, 4, 5]);
 *
 * // Get data
 * $data = $cache->get("my-data");
 *</code>
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
    'line' => 61,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'Json',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'FrontendInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
        'line' => 62,
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
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
          'line' => 70,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                'line' => 71,
                'char' => 52,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
              'line' => 71,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                    'line' => 73,
                    'char' => 47,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                  'line' => 73,
                  'char' => 47,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
              'line' => 74,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Cache\\Frontend\\Base64 constructor
	 *
	 * @param array frontendOptions
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
          'line' => 71,
          'last-line' => 78,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                  'line' => 81,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'lifetime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                  'line' => 81,
                  'char' => 24,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
              'line' => 82,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                      'line' => 82,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_frontendOptions',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                      'line' => 82,
                      'char' => 39,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                    'line' => 82,
                    'char' => 39,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                  'line' => 82,
                  'char' => 39,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
              'line' => 83,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                    'line' => 83,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                  'line' => 83,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                  'line' => 83,
                  'char' => 32,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                'line' => 83,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                      'line' => 84,
                      'char' => 43,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                        'line' => 84,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'lifetime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                        'line' => 84,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                      'line' => 84,
                      'char' => 43,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                    'line' => 84,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                        'line' => 85,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                      'line' => 86,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                  'line' => 87,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
              'line' => 88,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'int',
                'value' => '1',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                'line' => 88,
                'char' => 11,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
              'line' => 89,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                'line' => 80,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
            'line' => 80,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
          'line' => 79,
          'last-line' => 93,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                'line' => 96,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
              'line' => 97,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                'line' => 95,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
            'line' => 95,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
          'line' => 94,
          'last-line' => 101,
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
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
          'line' => 102,
          'last-line' => 111,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                'line' => 114,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
              'line' => 115,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Returns output cached content
	 *
	 * @return string
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
          'line' => 112,
          'last-line' => 119,
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
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
            'line' => 121,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
          'line' => 120,
          'last-line' => 127,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
              'line' => 128,
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
                'name' => 'json_encode',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                      'line' => 130,
                      'char' => 26,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                    'line' => 130,
                    'char' => 26,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                'line' => 130,
                'char' => 27,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
              'line' => 131,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                'line' => 129,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
            'line' => 129,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
          'line' => 128,
          'last-line' => 135,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
              'line' => 136,
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
                'type' => 'fcall',
                'name' => 'json_decode',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                      'line' => 139,
                      'char' => 26,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                    'line' => 139,
                    'char' => 26,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                'line' => 139,
                'char' => 27,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
              'line' => 140,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
                'line' => 137,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
            'line' => 137,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
          'line' => 136,
          'last-line' => 141,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
      'line' => 61,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/json.zep',
    'line' => 61,
    'char' => 5,
  ),
);