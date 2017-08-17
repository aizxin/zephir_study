<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Cache\\Frontend',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
        'line' => 22,
        'char' => 32,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
    'line' => 68,
    'char' => 2,
  ),
  2 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Cache\\Frontend\\Base64
 *
 * Allows to cache data converting/deconverting them to base64.
 *
 * This adapter uses the base64_encode/base64_decode PHP\'s functions
 *
 *<code>
 *<?php
 *
 * // Cache the files for 2 days using a Base64 frontend
 * $frontCache = new \\Vof\\Cache\\Frontend\\Base64(
 *     [
 *         "lifetime" => 172800,
 *     ]
 * );
 *
 * //Create a MongoDB cache
 * $cache = new \\Vof\\Cache\\Backend\\Mongo(
 *     $frontCache,
 *     [
 *         "server"     => "mongodb://localhost",
 *         "db"         => "caches",
 *         "collection" => "images",
 *     ]
 * );
 *
 * $cacheKey = "some-image.jpg.cache";
 *
 * // Try to get cached image
 * $image = $cache->get($cacheKey);
 *
 * if ($image === null) {
 *     // Store the image in the cache
 *     $cache->save(
 *         $cacheKey,
 *         file_get_contents("tmp-dir/some-image.jpg")
 *     );
 * }
 *
 * header("Content-Type: image/jpeg");
 *
 * echo $image;
 *</code>
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
    'line' => 69,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'Base64',
    'abstract' => 0,
    'final' => 0,
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => 'FrontendInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
        'line' => 70,
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
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
          'line' => 78,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                'line' => 79,
                'char' => 52,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
              'line' => 79,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                    'line' => 81,
                    'char' => 47,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                  'line' => 81,
                  'char' => 47,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
              'line' => 82,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Cache\\Frontend\\Base64 constructor
	 *
	 * @param array frontendOptions
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
          'line' => 79,
          'last-line' => 86,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                  'line' => 89,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'lifetime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                  'line' => 89,
                  'char' => 24,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
              'line' => 90,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                      'line' => 90,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_frontendOptions',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                      'line' => 90,
                      'char' => 39,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                    'line' => 90,
                    'char' => 39,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                  'line' => 90,
                  'char' => 39,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
              'line' => 91,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                    'line' => 91,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                  'line' => 91,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                  'line' => 91,
                  'char' => 32,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                'line' => 91,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                      'line' => 92,
                      'char' => 43,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                        'line' => 92,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'lifetime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                        'line' => 92,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                      'line' => 92,
                      'char' => 43,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                    'line' => 92,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                        'line' => 93,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                      'line' => 94,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                  'line' => 95,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
              'line' => 96,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'int',
                'value' => '1',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                'line' => 96,
                'char' => 11,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
              'line' => 97,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                'line' => 88,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
            'line' => 88,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
          'line' => 87,
          'last-line' => 101,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                'line' => 104,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
              'line' => 105,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                'line' => 103,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
            'line' => 103,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
          'line' => 102,
          'last-line' => 109,
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
	 * Starts output frontend. Actually, does nothing in this adapter
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
          'line' => 110,
          'last-line' => 119,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                'line' => 122,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
              'line' => 123,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Returns output cached content
	 *
	 * @return string
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
          'line' => 120,
          'last-line' => 127,
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
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
          'line' => 128,
          'last-line' => 135,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
              'line' => 136,
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
                'name' => 'base64_encode',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                      'line' => 138,
                      'char' => 28,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                    'line' => 138,
                    'char' => 28,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                'line' => 138,
                'char' => 29,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
              'line' => 139,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                'line' => 137,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
            'line' => 137,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
          'line' => 136,
          'last-line' => 143,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
              'line' => 144,
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
                'name' => 'base64_decode',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                      'line' => 146,
                      'char' => 28,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                    'line' => 146,
                    'char' => 28,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                'line' => 146,
                'char' => 29,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
              'line' => 147,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
                'line' => 145,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
            'line' => 145,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
          'line' => 144,
          'last-line' => 148,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
      'line' => 69,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/frontend/base64.zep',
    'line' => 69,
    'char' => 5,
  ),
);