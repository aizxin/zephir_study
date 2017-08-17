<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Cache\\Backend',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
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
        'name' => 'Vof\\Cache\\Backend',
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
        'line' => 22,
        'char' => 22,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
        'line' => 23,
        'char' => 24,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
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
        'name' => 'Vof\\Cache\\FrontendInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
        'line' => 24,
        'char' => 32,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
    'line' => 60,
    'char' => 2,
  ),
  4 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Cache\\Backend\\Memcache
 *
 * Allows to cache output fragments, PHP data or raw data to a memcache backend
 *
 * This adapter uses the special memcached key "_PHCM" to store all the keys internally used by the adapter
 *
 *<code>
 * use Vof\\Cache\\Backend\\Memcache;
 * use Vof\\Cache\\Frontend\\Data as FrontData;
 *
 * // Cache data for 2 days
 * $frontCache = new FrontData(
 *     [
 *         "lifetime" => 172800,
 *     ]
 * );
 *
 * // Create the Cache setting memcached connection options
 * $cache = new Memcache(
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
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
    'line' => 61,
    'char' => 5,
  ),
  5 => 
  array (
    'type' => 'class',
    'name' => 'Memcache',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'Backend',
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
          'name' => '_memcache',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
            'line' => 64,
            'char' => 28,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
          'line' => 71,
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
              'name' => 'frontend',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'FrontendInterface',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 72,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 72,
              'char' => 58,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'options',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 72,
                'char' => 74,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 72,
              'char' => 74,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'options',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 74,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 74,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 74,
                  'char' => 32,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 74,
                'char' => 32,
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
                      'variable' => 'options',
                      'expr' => 
                      array (
                        'type' => 'empty-array',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 75,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 75,
                      'char' => 20,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 76,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 78,
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
                  'type' => 'isset',
                  'left' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 78,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'host',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 78,
                      'char' => 27,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 78,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 78,
                  'char' => 29,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 78,
                'char' => 29,
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'options',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'host',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 79,
                          'char' => 22,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => '127.0.0.1',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 79,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 79,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 80,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 82,
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
                  'type' => 'isset',
                  'left' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 82,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'port',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 82,
                      'char' => 27,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 82,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 82,
                  'char' => 29,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 82,
                'char' => 29,
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'options',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'port',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 83,
                          'char' => 22,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'int',
                        'value' => '11211',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 83,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 83,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 84,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 86,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'isset',
                  'left' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 86,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'persistent',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 86,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 86,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 86,
                  'char' => 35,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 86,
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'options',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'persistent',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 87,
                          'char' => 28,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 87,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 87,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 88,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 90,
              'char' => 4,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'isset',
                  'left' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 90,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'statsKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 90,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 90,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 90,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 90,
                'char' => 33,
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'options',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'statsKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 92,
                          'char' => 26,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => '',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 92,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 92,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 93,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 95,
              'char' => 8,
            ),
            5 => 
            array (
              'type' => 'scall',
              'expr' => 
              array (
                'type' => 'scall',
                'dynamic-class' => 0,
                'class' => 'parent',
                'dynamic' => 0,
                'name' => '__construct',
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'frontend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 95,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 95,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 95,
                      'char' => 40,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 95,
                    'char' => 40,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 95,
                'char' => 41,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 96,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Cache\\Backend\\Memcache constructor
	 *
	 * @param	Vof\\Cache\\FrontendInterface frontend
	 * @param	array options
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
          'line' => 72,
          'last-line' => 100,
          'char' => 16,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '_connect',
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 103,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'memcache',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 103,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'persistent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 103,
                  'char' => 36,
                ),
                3 => 
                array (
                  'variable' => 'success',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 103,
                  'char' => 45,
                ),
                4 => 
                array (
                  'variable' => 'host',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 103,
                  'char' => 51,
                ),
                5 => 
                array (
                  'variable' => 'port',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 103,
                  'char' => 57,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 105,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 105,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 105,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 105,
                    'char' => 31,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 105,
                  'char' => 31,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 106,
              'char' => 5,
            ),
            2 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'memcache',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\Memcache',
                    'dynamic' => 0,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 106,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 106,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 108,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'or',
                'left' => 
                array (
                  'type' => 'or',
                  'left' => 
                  array (
                    'type' => 'not',
                    'left' => 
                    array (
                      'type' => 'fetch',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'host',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 108,
                        'char' => 36,
                      ),
                      'right' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 108,
                          'char' => 26,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'host',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 108,
                          'char' => 33,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 108,
                        'char' => 36,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 108,
                      'char' => 36,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 108,
                    'char' => 36,
                  ),
                  'right' => 
                  array (
                    'type' => 'not',
                    'left' => 
                    array (
                      'type' => 'fetch',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'port',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 108,
                        'char' => 68,
                      ),
                      'right' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 108,
                          'char' => 58,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'port',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 108,
                          'char' => 65,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 108,
                        'char' => 68,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 108,
                      'char' => 68,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 108,
                    'char' => 68,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 108,
                  'char' => 68,
                ),
                'right' => 
                array (
                  'type' => 'not',
                  'left' => 
                  array (
                    'type' => 'fetch',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'persistent',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 108,
                      'char' => 111,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 108,
                        'char' => 96,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'persistent',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 108,
                        'char' => 109,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 108,
                      'char' => 111,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 108,
                    'char' => 111,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 108,
                  'char' => 111,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 108,
                'char' => 111,
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
                          'value' => 'Unexpected inconsistency in options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 109,
                          'char' => 61,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 109,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 109,
                    'char' => 62,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 110,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 112,
              'char' => 4,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'persistent',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 112,
                'char' => 17,
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
                      'variable' => 'success',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 113,
                          'char' => 27,
                        ),
                        'name' => 'pconnect',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'host',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 113,
                              'char' => 41,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 113,
                            'char' => 41,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'port',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 113,
                              'char' => 47,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 113,
                            'char' => 47,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 113,
                        'char' => 48,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 113,
                      'char' => 48,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 114,
                  'char' => 3,
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
                      'variable' => 'success',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 115,
                          'char' => 27,
                        ),
                        'name' => 'connect',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'host',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 115,
                              'char' => 40,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 115,
                            'char' => 40,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'port',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 115,
                              'char' => 46,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 115,
                            'char' => 46,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 115,
                        'char' => 47,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 115,
                      'char' => 47,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 116,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 118,
              'char' => 4,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'success',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 118,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 118,
                'char' => 15,
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
                          'value' => 'Cannot connect to Memcached server',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 119,
                          'char' => 60,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 119,
                        'char' => 60,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 119,
                    'char' => 61,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 120,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 122,
              'char' => 5,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_memcache',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'memcache',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 122,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 122,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 123,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Create internal connection to memcached
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
          'line' => 101,
          'last-line' => 127,
          'char' => 16,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'addServers',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'host',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 128,
              'char' => 41,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'port',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 128,
              'char' => 51,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'persistent',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 128,
                'char' => 79,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 128,
              'char' => 79,
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
                  'variable' => 'memcache',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 130,
                  'char' => 15,
                ),
                1 => 
                array (
                  'variable' => 'success',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 130,
                  'char' => 24,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 134,
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
                  'variable' => 'memcache',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 134,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 134,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 134,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 134,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 135,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'memcache',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 135,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 135,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'object',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 135,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 135,
                'char' => 34,
              ),
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 136,
                      'char' => 12,
                    ),
                    'name' => '_connect',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 136,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 137,
                  'char' => 9,
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
                      'variable' => 'memcache',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 137,
                          'char' => 27,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 137,
                          'char' => 37,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 137,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 137,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 138,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 139,
              'char' => 5,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'success',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 139,
                      'char' => 26,
                    ),
                    'name' => 'addServer',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'host',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 139,
                          'char' => 41,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 139,
                        'char' => 41,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'port',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 139,
                          'char' => 47,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 139,
                        'char' => 47,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'persistent',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 139,
                          'char' => 59,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 139,
                        'char' => 59,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 139,
                    'char' => 60,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 139,
                  'char' => 60,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 140,
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
                  'property' => '_memcache',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'memcache',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 140,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 140,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 141,
              'char' => 8,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'success',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 141,
                'char' => 17,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 142,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Add servers to memcache pool
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 129,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
            'line' => 129,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
          'line' => 128,
          'last-line' => 146,
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
              'name' => 'keyName',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 147,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 147,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 147,
              'char' => 57,
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
                  'variable' => 'memcache',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 149,
                  'char' => 15,
                ),
                1 => 
                array (
                  'variable' => 'prefixedKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 149,
                  'char' => 28,
                ),
                2 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 149,
                  'char' => 43,
                ),
                3 => 
                array (
                  'variable' => 'retrieve',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 149,
                  'char' => 53,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 151,
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
                  'variable' => 'memcache',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 151,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 151,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 151,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 151,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 152,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'memcache',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 152,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 152,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'object',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 152,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 152,
                'char' => 34,
              ),
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 153,
                      'char' => 9,
                    ),
                    'name' => '_connect',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 153,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 154,
                  'char' => 6,
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
                      'variable' => 'memcache',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 154,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 154,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 154,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 154,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 155,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 157,
              'char' => 5,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'prefixedKey',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 157,
                        'char' => 26,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_prefix',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 157,
                        'char' => 35,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 157,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'keyName',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 157,
                      'char' => 44,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 157,
                    'char' => 44,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 157,
                  'char' => 44,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 158,
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
                  'property' => '_lastKey',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'prefixedKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 158,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 158,
                  'char' => 35,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 159,
              'char' => 5,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'cachedContent',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 159,
                      'char' => 32,
                    ),
                    'name' => 'get',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'prefixedKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 159,
                          'char' => 48,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 159,
                        'char' => 48,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 159,
                    'char' => 49,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 159,
                  'char' => 49,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 161,
              'char' => 4,
            ),
            6 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 161,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'false',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 161,
                  'char' => 30,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 161,
                'char' => 30,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 162,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 163,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 165,
              'char' => 4,
            ),
            7 => 
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
                      'value' => 'cachedContent',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 165,
                      'char' => 30,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 165,
                    'char' => 30,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 165,
                'char' => 32,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'cachedContent',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 166,
                    'char' => 24,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 167,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 169,
              'char' => 5,
            ),
            8 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'retrieve',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 169,
                        'char' => 23,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_frontend',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 169,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 169,
                      'char' => 34,
                    ),
                    'name' => 'afterRetrieve',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'cachedContent',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 169,
                          'char' => 62,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 169,
                        'char' => 62,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 169,
                    'char' => 63,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 169,
                  'char' => 63,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 170,
              'char' => 8,
            ),
            9 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'retrieve',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 170,
                'char' => 18,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 171,
              'char' => 2,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 147,
                'char' => 66,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 148,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
            'line' => 148,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
          'line' => 147,
          'last-line' => 180,
          'char' => 16,
        ),
        4 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 181,
                'char' => 41,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 181,
              'char' => 41,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 181,
                'char' => 61,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 181,
              'char' => 61,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 181,
                'char' => 82,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 181,
              'char' => 82,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'stopBuffer',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 181,
                'char' => 109,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 181,
              'char' => 109,
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
                  'variable' => 'lastKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 183,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'frontend',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 183,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'memcache',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 183,
                  'char' => 34,
                ),
                3 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 183,
                  'char' => 49,
                ),
                4 => 
                array (
                  'variable' => 'preparedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 183,
                  'char' => 66,
                ),
                5 => 
                array (
                  'variable' => 'tmp',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 183,
                  'char' => 71,
                ),
                6 => 
                array (
                  'variable' => 'ttl',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 183,
                  'char' => 76,
                ),
                7 => 
                array (
                  'variable' => 'success',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 183,
                  'char' => 85,
                ),
                8 => 
                array (
                  'variable' => 'options',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 183,
                  'char' => 94,
                ),
                9 => 
                array (
                  'variable' => 'specialKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 184,
                  'char' => 14,
                ),
                10 => 
                array (
                  'variable' => 'keys',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 184,
                  'char' => 20,
                ),
                11 => 
                array (
                  'variable' => 'isBuffering',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 184,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 186,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'keyName',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 186,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 186,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 186,
                'char' => 23,
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
                      'variable' => 'lastKey',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 187,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 187,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 187,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 187,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 188,
                  'char' => 3,
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
                      'variable' => 'lastKey',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 189,
                            'char' => 23,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_prefix',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 189,
                            'char' => 32,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 189,
                          'char' => 32,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 189,
                          'char' => 41,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 189,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 189,
                      'char' => 41,
                    ),
                    1 => 
                    array (
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => '_lastKey',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'lastKey',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 190,
                        'char' => 29,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 190,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 191,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 193,
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
                  'value' => 'lastKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 193,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 193,
                'char' => 15,
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
                          'value' => 'Cache must be started first',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 194,
                          'char' => 53,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 194,
                        'char' => 53,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 194,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 195,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 197,
              'char' => 5,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'frontend',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 197,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_frontend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 197,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 197,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 197,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 202,
              'char' => 5,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'memcache',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 202,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 202,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 202,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 202,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 203,
              'char' => 4,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'memcache',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 203,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 203,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'object',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 203,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 203,
                'char' => 34,
              ),
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 204,
                      'char' => 9,
                    ),
                    'name' => '_connect',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 204,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 205,
                  'char' => 6,
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
                      'variable' => 'memcache',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 205,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 205,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 205,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 205,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 206,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 208,
              'char' => 4,
            ),
            6 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'content',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 208,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 208,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 208,
                'char' => 23,
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
                      'variable' => 'cachedContent',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'frontend',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 209,
                          'char' => 33,
                        ),
                        'name' => 'getContent',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 209,
                        'char' => 46,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 209,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 210,
                  'char' => 3,
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
                      'variable' => 'cachedContent',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'content',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 211,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 211,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 212,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 217,
              'char' => 4,
            ),
            7 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
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
                        'value' => 'cachedContent',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 217,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 217,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 217,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 217,
                'char' => 33,
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
                      'variable' => 'preparedContent',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'frontend',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 218,
                          'char' => 35,
                        ),
                        'name' => 'beforeStore',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'cachedContent',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 218,
                              'char' => 61,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 218,
                            'char' => 61,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 218,
                        'char' => 62,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 218,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 219,
                  'char' => 3,
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
                      'variable' => 'preparedContent',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'cachedContent',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 220,
                        'char' => 39,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 220,
                      'char' => 39,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 221,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 223,
              'char' => 4,
            ),
            8 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'lifetime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 223,
                  'char' => 17,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 223,
                  'char' => 24,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 223,
                'char' => 24,
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
                      'variable' => 'tmp',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 224,
                          'char' => 19,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastLifetime',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 224,
                          'char' => 33,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 224,
                        'char' => 33,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 224,
                      'char' => 33,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 226,
                  'char' => 5,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'tmp',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 226,
                      'char' => 12,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 226,
                    'char' => 12,
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
                          'variable' => 'ttl',
                          'expr' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'frontend',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 227,
                              'char' => 24,
                            ),
                            'name' => 'getLifetime',
                            'call-type' => 1,
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 227,
                            'char' => 38,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 227,
                          'char' => 38,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 228,
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
                          'variable' => 'ttl',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'tmp',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 229,
                            'char' => 18,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 229,
                          'char' => 18,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 230,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 231,
                  'char' => 3,
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
                      'variable' => 'ttl',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'lifetime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 232,
                        'char' => 22,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 232,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 233,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 238,
              'char' => 5,
            ),
            9 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'success',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 238,
                      'char' => 26,
                    ),
                    'name' => 'set',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 238,
                          'char' => 38,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 238,
                        'char' => 38,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'preparedContent',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 238,
                          'char' => 55,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 238,
                        'char' => 55,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'int',
                          'value' => '0',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 238,
                          'char' => 58,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 238,
                        'char' => 58,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'ttl',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 238,
                          'char' => 63,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 238,
                        'char' => 63,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 238,
                    'char' => 64,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 238,
                  'char' => 64,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 240,
              'char' => 4,
            ),
            10 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'success',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 240,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 240,
                'char' => 15,
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
                          'value' => 'Failed storing data in memcached',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 241,
                          'char' => 58,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 241,
                        'char' => 58,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 241,
                    'char' => 59,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 242,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 244,
              'char' => 5,
            ),
            11 => 
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 244,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 244,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 244,
                    'char' => 31,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 244,
                  'char' => 31,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 246,
              'char' => 4,
            ),
            12 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'specialKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 246,
                    'char' => 45,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 246,
                      'char' => 32,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'statsKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 246,
                      'char' => 43,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 246,
                    'char' => 45,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 246,
                  'char' => 45,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 246,
                'char' => 45,
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
                          'value' => 'Unexpected inconsistency in options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 247,
                          'char' => 61,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 247,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 247,
                    'char' => 62,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 248,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 250,
              'char' => 4,
            ),
            13 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'specialKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 250,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => '',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 250,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 250,
                'char' => 23,
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
                      'variable' => 'keys',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 254,
                          'char' => 24,
                        ),
                        'name' => 'get',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'specialKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 254,
                              'char' => 39,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 254,
                            'char' => 39,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 254,
                        'char' => 40,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 254,
                      'char' => 40,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 255,
                  'char' => 5,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not-equals',
                    'left' => 
                    array (
                      'type' => 'typeof',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'keys',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 255,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 255,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'array',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 255,
                      'char' => 30,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 255,
                    'char' => 30,
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
                          'variable' => 'keys',
                          'expr' => 
                          array (
                            'type' => 'empty-array',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 256,
                            'char' => 18,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 256,
                          'char' => 18,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 257,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 259,
                  'char' => 5,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not',
                    'left' => 
                    array (
                      'type' => 'isset',
                      'left' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keys',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 259,
                          'char' => 18,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 259,
                          'char' => 26,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 259,
                        'char' => 28,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 259,
                      'char' => 28,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 259,
                    'char' => 28,
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
                          'assign-type' => 'array-index',
                          'operator' => 'assign',
                          'variable' => 'keys',
                          'index-expr' => 
                          array (
                            0 => 
                            array (
                              'type' => 'variable',
                              'value' => 'lastKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 260,
                              'char' => 21,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ttl',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 260,
                            'char' => 28,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 260,
                          'char' => 28,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 261,
                      'char' => 12,
                    ),
                    1 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 261,
                          'char' => 14,
                        ),
                        'name' => 'set',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'specialKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 261,
                              'char' => 29,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 261,
                            'char' => 29,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'keys',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 261,
                              'char' => 35,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 261,
                            'char' => 35,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 261,
                        'char' => 36,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 262,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 263,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 265,
              'char' => 5,
            ),
            14 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'isBuffering',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'frontend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 265,
                      'char' => 30,
                    ),
                    'name' => 'isBuffering',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 265,
                    'char' => 44,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 265,
                  'char' => 44,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 267,
              'char' => 4,
            ),
            15 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'stopBuffer',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 267,
                  'char' => 19,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 267,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 267,
                'char' => 26,
              ),
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
                      'value' => 'frontend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 268,
                      'char' => 13,
                    ),
                    'name' => 'stop',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 268,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 269,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 271,
              'char' => 4,
            ),
            16 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'isBuffering',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 271,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 271,
                  'char' => 27,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 271,
                'char' => 27,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'echo',
                  'expressions' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'cachedContent',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 272,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 273,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 275,
              'char' => 5,
            ),
            17 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_started',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 275,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 275,
                  'char' => 29,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 277,
              'char' => 8,
            ),
            18 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'success',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 277,
                'char' => 17,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 278,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Stores cached content into the file backend and stops the frontend
	 *
	 * @param int|string keyName
	 * @param string content
	 * @param int lifetime
	 * @param boolean stopBuffer
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 182,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
            'line' => 182,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
          'line' => 181,
          'last-line' => 285,
          'char' => 16,
        ),
        5 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 286,
              'char' => 36,
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
                  'variable' => 'memcache',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 288,
                  'char' => 15,
                ),
                1 => 
                array (
                  'variable' => 'prefixedKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 288,
                  'char' => 28,
                ),
                2 => 
                array (
                  'variable' => 'options',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 288,
                  'char' => 37,
                ),
                3 => 
                array (
                  'variable' => 'keys',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 288,
                  'char' => 43,
                ),
                4 => 
                array (
                  'variable' => 'specialKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 288,
                  'char' => 55,
                ),
                5 => 
                array (
                  'variable' => 'ret',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 288,
                  'char' => 60,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 290,
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
                  'variable' => 'memcache',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 290,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 290,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 290,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 290,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 291,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'memcache',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 291,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 291,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'object',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 291,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 291,
                'char' => 34,
              ),
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 292,
                      'char' => 9,
                    ),
                    'name' => '_connect',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 292,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 293,
                  'char' => 6,
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
                      'variable' => 'memcache',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 293,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 293,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 293,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 293,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 294,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 296,
              'char' => 5,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'prefixedKey',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 296,
                        'char' => 26,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_prefix',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 296,
                        'char' => 35,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 296,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'keyName',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 296,
                      'char' => 44,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 296,
                    'char' => 44,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 296,
                  'char' => 44,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 297,
              'char' => 5,
            ),
            4 => 
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 297,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 297,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 297,
                    'char' => 31,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 297,
                  'char' => 31,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 299,
              'char' => 4,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'specialKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 299,
                    'char' => 45,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 299,
                      'char' => 32,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'statsKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 299,
                      'char' => 43,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 299,
                    'char' => 45,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 299,
                  'char' => 45,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 299,
                'char' => 45,
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
                          'value' => 'Unexpected inconsistency in options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 300,
                          'char' => 61,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 300,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 300,
                    'char' => 62,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 301,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 303,
              'char' => 4,
            ),
            6 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'specialKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 303,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => '',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 303,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 303,
                'char' => 23,
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
                      'variable' => 'keys',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 304,
                          'char' => 24,
                        ),
                        'name' => 'get',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'specialKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 304,
                              'char' => 39,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 304,
                            'char' => 39,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 304,
                        'char' => 40,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 304,
                      'char' => 40,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 306,
                  'char' => 5,
                ),
                1 => 
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
                        'value' => 'keys',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 306,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 306,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'array',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 306,
                      'char' => 30,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 306,
                    'char' => 30,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'unset',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keys',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 307,
                          'char' => 15,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'prefixedKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 307,
                          'char' => 27,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 307,
                        'char' => 28,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 308,
                      'char' => 12,
                    ),
                    1 => 
                    array (
                      'type' => 'mcall',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 308,
                          'char' => 14,
                        ),
                        'name' => 'set',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'specialKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 308,
                              'char' => 29,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 308,
                            'char' => 29,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'keys',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 308,
                              'char' => 35,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 308,
                            'char' => 35,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 308,
                        'char' => 36,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 309,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 310,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 315,
              'char' => 5,
            ),
            7 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'ret',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 315,
                      'char' => 22,
                    ),
                    'name' => 'delete',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'prefixedKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 315,
                          'char' => 41,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 315,
                        'char' => 41,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 315,
                    'char' => 42,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 315,
                  'char' => 42,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 316,
              'char' => 8,
            ),
            8 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'ret',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 316,
                'char' => 13,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 317,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Deletes a value from the cache by its key
	 *
	 * @param int|string keyName
	 * @return boolean
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
          'line' => 286,
          'last-line' => 328,
          'char' => 16,
        ),
        6 => 
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
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 329,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 329,
              'char' => 48,
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
                  'variable' => 'memcache',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 331,
                  'char' => 15,
                ),
                1 => 
                array (
                  'variable' => 'options',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 331,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'keys',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 331,
                  'char' => 30,
                ),
                3 => 
                array (
                  'variable' => 'specialKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 331,
                  'char' => 42,
                ),
                4 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 331,
                  'char' => 47,
                ),
                5 => 
                array (
                  'variable' => 'idx',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 331,
                  'char' => 52,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 333,
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
                  'variable' => 'memcache',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 333,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 333,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 333,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 333,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 335,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'memcache',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 335,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 335,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'object',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 335,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 335,
                'char' => 34,
              ),
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 336,
                      'char' => 9,
                    ),
                    'name' => '_connect',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 336,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 337,
                  'char' => 6,
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
                      'variable' => 'memcache',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 337,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 337,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 337,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 337,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 338,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 340,
              'char' => 5,
            ),
            3 => 
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 340,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 340,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 340,
                    'char' => 31,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 340,
                  'char' => 31,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 342,
              'char' => 4,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'specialKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 342,
                    'char' => 45,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 342,
                      'char' => 32,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'statsKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 342,
                      'char' => 43,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 342,
                    'char' => 45,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 342,
                  'char' => 45,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 342,
                'char' => 45,
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
                          'value' => 'Unexpected inconsistency in options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 343,
                          'char' => 61,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 343,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 343,
                    'char' => 62,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 344,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 346,
              'char' => 4,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'specialKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 346,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => '',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 346,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 346,
                'char' => 23,
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
                          'value' => 'Cached keys need to be enabled to use this function (options[\'statsKey\'] == \'_PHCM\')!',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 347,
                          'char' => 111,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 347,
                        'char' => 111,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 347,
                    'char' => 112,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 348,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 353,
              'char' => 5,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'keys',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 353,
                      'char' => 23,
                    ),
                    'name' => 'get',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'specialKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 353,
                          'char' => 38,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 353,
                        'char' => 38,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 353,
                    'char' => 39,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 353,
                  'char' => 39,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 354,
              'char' => 4,
            ),
            7 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'unlikely',
                'left' => 
                array (
                  'type' => 'not-equals',
                  'left' => 
                  array (
                    'type' => 'typeof',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'keys',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 354,
                      'char' => 28,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 354,
                    'char' => 28,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'array',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 354,
                    'char' => 38,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 354,
                  'char' => 38,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 354,
                'char' => 38,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 355,
                    'char' => 13,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 356,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 358,
              'char' => 5,
            ),
            8 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'keys',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'array_keys',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keys',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 358,
                          'char' => 29,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 358,
                        'char' => 29,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 358,
                    'char' => 30,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 358,
                  'char' => 30,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 359,
              'char' => 5,
            ),
            9 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'keys',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 359,
                'char' => 24,
              ),
              'key' => 'idx',
              'value' => 'key',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'and',
                    'left' => 
                    array (
                      'type' => 'not',
                      'left' => 
                      array (
                        'type' => 'empty',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 360,
                          'char' => 22,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 360,
                        'char' => 22,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 360,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'not',
                      'left' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'starts_with',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 360,
                              'char' => 40,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 360,
                            'char' => 40,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'prefix',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 360,
                              'char' => 48,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 360,
                            'char' => 48,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 360,
                        'char' => 50,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 360,
                      'char' => 50,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 360,
                    'char' => 50,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'unset',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keys',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 361,
                          'char' => 15,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'idx',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 361,
                          'char' => 19,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 361,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 362,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 363,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 365,
              'char' => 8,
            ),
            10 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'keys',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 365,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 366,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Query the existing cached keys.
	 *
	 * <code>
	 * $cache->save("users-ids", [1, 2, 3]);
	 * $cache->save("projects-ids", [4, 5, 6]);
	 *
	 * var_dump($cache->queryKeys("users")); // ["users-ids"]
	 * </code>
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 330,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
            'line' => 330,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
          'line' => 329,
          'last-line' => 373,
          'char' => 16,
        ),
        7 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 374,
                'char' => 39,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 374,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 374,
                'char' => 56,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 374,
              'char' => 56,
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
                  'variable' => 'lastKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 376,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'memcache',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 376,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'prefix',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 376,
                  'char' => 32,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 378,
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
                  'type' => 'variable',
                  'value' => 'keyName',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 378,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 378,
                'char' => 15,
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
                      'variable' => 'lastKey',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 379,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 379,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 379,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 379,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 380,
                  'char' => 3,
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
                      'variable' => 'prefix',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 381,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 381,
                          'char' => 30,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 381,
                        'char' => 30,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 381,
                      'char' => 30,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 382,
                  'char' => 6,
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
                      'variable' => 'lastKey',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 382,
                          'char' => 25,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 382,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 382,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 382,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 383,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 385,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'lastKey',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 385,
                'char' => 14,
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
                      'variable' => 'memcache',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 387,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 387,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 387,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 387,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 388,
                  'char' => 5,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not-equals',
                    'left' => 
                    array (
                      'type' => 'typeof',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'memcache',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 388,
                        'char' => 24,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 388,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'object',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 388,
                      'char' => 35,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 388,
                    'char' => 35,
                  ),
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 389,
                          'char' => 10,
                        ),
                        'name' => '_connect',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 389,
                        'char' => 21,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 390,
                      'char' => 7,
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
                          'variable' => 'memcache',
                          'expr' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 390,
                              'char' => 25,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_memcache',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                              'line' => 390,
                              'char' => 35,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 390,
                            'char' => 35,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 390,
                          'char' => 35,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 391,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 393,
                  'char' => 5,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not',
                    'left' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'memcache',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 393,
                        'char' => 17,
                      ),
                      'name' => 'get',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'lastKey',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                            'line' => 393,
                            'char' => 29,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 393,
                          'char' => 29,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 393,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 393,
                    'char' => 31,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 394,
                        'char' => 17,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 395,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 396,
                  'char' => 9,
                ),
                3 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 396,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 397,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 399,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 399,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 400,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Checks if cache exists and it isn\'t expired
	 *
	 * @param string keyName
	 * @param int lifetime
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 375,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
            'line' => 375,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
          'line' => 374,
          'last-line' => 406,
          'char' => 16,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'increment',
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 407,
                'char' => 42,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 407,
              'char' => 42,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'int',
                'value' => '1',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 407,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 407,
              'char' => 57,
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
                  'variable' => 'memcache',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 409,
                  'char' => 15,
                ),
                1 => 
                array (
                  'variable' => 'prefix',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 409,
                  'char' => 23,
                ),
                2 => 
                array (
                  'variable' => 'lastKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 409,
                  'char' => 32,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 411,
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
                  'variable' => 'memcache',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 411,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 411,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 411,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 411,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 413,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'memcache',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 413,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 413,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'object',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 413,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 413,
                'char' => 34,
              ),
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 414,
                      'char' => 9,
                    ),
                    'name' => '_connect',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 414,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 415,
                  'char' => 6,
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
                      'variable' => 'memcache',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 415,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 415,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 415,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 415,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 416,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 418,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'keyName',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 418,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 418,
                'char' => 15,
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
                      'variable' => 'lastKey',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 419,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 419,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 419,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 419,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 420,
                  'char' => 3,
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
                      'variable' => 'prefix',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 421,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 421,
                          'char' => 30,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 421,
                        'char' => 30,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 421,
                      'char' => 30,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 422,
                  'char' => 6,
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
                      'variable' => 'lastKey',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 422,
                          'char' => 25,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 422,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 422,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 422,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 423,
                  'char' => 6,
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
                      'property' => '_lastKey',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'lastKey',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 423,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 423,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 424,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 426,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'memcache',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 426,
                  'char' => 19,
                ),
                'name' => 'increment',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'lastKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 426,
                      'char' => 37,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 426,
                    'char' => 37,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 426,
                      'char' => 44,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 426,
                    'char' => 44,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 426,
                'char' => 45,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 427,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Increment of given $keyName by $value
	 *
	 * @param string keyName
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 407,
                'char' => 66,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 408,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
            'line' => 408,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
          'line' => 407,
          'last-line' => 433,
          'char' => 16,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'decrement',
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 434,
                'char' => 42,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 434,
              'char' => 42,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'value',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'int',
                'value' => '1',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 434,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 434,
              'char' => 57,
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
                  'variable' => 'memcache',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 436,
                  'char' => 15,
                ),
                1 => 
                array (
                  'variable' => 'prefix',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 436,
                  'char' => 23,
                ),
                2 => 
                array (
                  'variable' => 'lastKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 436,
                  'char' => 32,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 438,
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
                  'variable' => 'memcache',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 438,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 438,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 438,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 438,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 440,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'memcache',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 440,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 440,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'object',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 440,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 440,
                'char' => 34,
              ),
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 441,
                      'char' => 9,
                    ),
                    'name' => '_connect',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 441,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 442,
                  'char' => 6,
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
                      'variable' => 'memcache',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 442,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 442,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 442,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 442,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 443,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 445,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'keyName',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 445,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 445,
                'char' => 15,
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
                      'variable' => 'lastKey',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 446,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 446,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 446,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 446,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 447,
                  'char' => 3,
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
                      'variable' => 'prefix',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 448,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 448,
                          'char' => 30,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 448,
                        'char' => 30,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 448,
                      'char' => 30,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 449,
                  'char' => 6,
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
                      'variable' => 'lastKey',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 449,
                          'char' => 25,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 449,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 449,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 449,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 450,
                  'char' => 6,
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
                      'property' => '_lastKey',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'lastKey',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 450,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 450,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 451,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 453,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'memcache',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 453,
                  'char' => 19,
                ),
                'name' => 'decrement',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'lastKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 453,
                      'char' => 37,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 453,
                    'char' => 37,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 453,
                      'char' => 44,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 453,
                    'char' => 44,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 453,
                'char' => 45,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 454,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Decrement of $keyName by given $value
	 *
	 * @param string keyName
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 434,
                'char' => 66,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 435,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
            'line' => 435,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
          'line' => 434,
          'last-line' => 458,
          'char' => 16,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'flush',
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
                  'variable' => 'memcache',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 461,
                  'char' => 15,
                ),
                1 => 
                array (
                  'variable' => 'options',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 461,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'keys',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 461,
                  'char' => 30,
                ),
                3 => 
                array (
                  'variable' => 'specialKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 461,
                  'char' => 42,
                ),
                4 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 461,
                  'char' => 47,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 463,
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
                  'variable' => 'memcache',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 463,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 463,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 463,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 463,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 465,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'memcache',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 465,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 465,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'object',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 465,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 465,
                'char' => 34,
              ),
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 466,
                      'char' => 9,
                    ),
                    'name' => '_connect',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 466,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 467,
                  'char' => 6,
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
                      'variable' => 'memcache',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 467,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 467,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 467,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 467,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 468,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 470,
              'char' => 5,
            ),
            3 => 
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 470,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 470,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 470,
                    'char' => 31,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 470,
                  'char' => 31,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 472,
              'char' => 4,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'specialKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 472,
                    'char' => 45,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 472,
                      'char' => 32,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'statsKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 472,
                      'char' => 43,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 472,
                    'char' => 45,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 472,
                  'char' => 45,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 472,
                'char' => 45,
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
                          'value' => 'Unexpected inconsistency in options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 473,
                          'char' => 61,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 473,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 473,
                    'char' => 62,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 474,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 476,
              'char' => 4,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'specialKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 476,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => '',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 476,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 476,
                'char' => 23,
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
                          'value' => 'Cached keys need to be enabled to use this function (options[\'statsKey\'] == \'_PHCM\')!',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 477,
                          'char' => 111,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 477,
                        'char' => 111,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 477,
                    'char' => 112,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 478,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 483,
              'char' => 5,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'keys',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 483,
                      'char' => 23,
                    ),
                    'name' => 'get',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'specialKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 483,
                          'char' => 38,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 483,
                        'char' => 38,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 483,
                    'char' => 39,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 483,
                  'char' => 39,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 484,
              'char' => 4,
            ),
            7 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'unlikely',
                'left' => 
                array (
                  'type' => 'not-equals',
                  'left' => 
                  array (
                    'type' => 'typeof',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'keys',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 484,
                      'char' => 28,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 484,
                    'char' => 28,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'array',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 484,
                    'char' => 38,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 484,
                  'char' => 38,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 484,
                'char' => 38,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 485,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 486,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 488,
              'char' => 5,
            ),
            8 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'keys',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 488,
                'char' => 22,
              ),
              'key' => 'key',
              'value' => '_',
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
                      'value' => 'memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 489,
                      'char' => 13,
                    ),
                    'name' => 'delete',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                          'line' => 489,
                          'char' => 24,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                        'line' => 489,
                        'char' => 24,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 489,
                    'char' => 25,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 490,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 492,
              'char' => 10,
            ),
            9 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'memcache',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                  'line' => 492,
                  'char' => 12,
                ),
                'name' => 'delete',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'specialKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                      'line' => 492,
                      'char' => 30,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                    'line' => 492,
                    'char' => 30,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 492,
                'char' => 31,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 494,
              'char' => 8,
            ),
            10 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 494,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
              'line' => 495,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Immediately invalidates all existing items.
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
                'line' => 460,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
            'line' => 460,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
          'line' => 459,
          'last-line' => 497,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
      'line' => 61,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memcache.zep',
    'line' => 61,
    'char' => 5,
  ),
);