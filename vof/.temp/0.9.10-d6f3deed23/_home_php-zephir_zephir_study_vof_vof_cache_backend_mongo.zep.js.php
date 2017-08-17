<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Cache\\Backend',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
        'line' => 22,
        'char' => 22,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
        'line' => 23,
        'char' => 24,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
        'line' => 24,
        'char' => 32,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
    'line' => 61,
    'char' => 2,
  ),
  4 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Cache\\Backend\\Mongo
 *
 * Allows to cache output fragments, PHP data or raw data to a MongoDb backend
 *
 *<code>
 * use Vof\\Cache\\Backend\\Mongo;
 * use Vof\\Cache\\Frontend\\Base64;
 *
 * // Cache data for 2 days
 * $frontCache = new Base64(
 *     [
 *         "lifetime" => 172800,
 *     ]
 * );
 *
 * // Create a MongoDB cache
 * $cache = new Mongo(
 *     $frontCache,
 *     [
 *         "server"     => "mongodb://localhost",
 *         "db"         => "caches",
 *         "collection" => "images",
 *     ]
 * );
 *
 * // Cache arbitrary data
 * $cache->save(
 *     "my-data",
 *     file_get_contents("some-image.jpg")
 * );
 *
 * // Get data
 * $data = $cache->get("my-data");
 *</code>
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
    'line' => 62,
    'char' => 5,
  ),
  5 => 
  array (
    'type' => 'class',
    'name' => 'Mongo',
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
          'name' => '_collection',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
            'line' => 65,
            'char' => 30,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
          'line' => 72,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 73,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 73,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 73,
                'char' => 74,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 73,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 75,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'mongo',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 75,
                      'char' => 28,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 75,
                    'char' => 30,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 75,
                  'char' => 30,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 75,
                'char' => 30,
              ),
              'statements' => 
              array (
                0 => 
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 76,
                          'char' => 21,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'server',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 76,
                          'char' => 30,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 76,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 76,
                      'char' => 32,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 76,
                    'char' => 32,
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
                              'value' => 'The parameter \'server\' is required',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 77,
                              'char' => 61,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 77,
                            'char' => 61,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 77,
                        'char' => 62,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 78,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 79,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 81,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 81,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'db',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 81,
                      'char' => 25,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 81,
                    'char' => 27,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 81,
                  'char' => 27,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 81,
                'char' => 27,
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
                          'value' => 'The parameter \'db\' is required',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 82,
                          'char' => 56,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 82,
                        'char' => 56,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 82,
                    'char' => 57,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 83,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 85,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 85,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'collection',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 85,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 85,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 85,
                  'char' => 35,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 85,
                'char' => 35,
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
                          'value' => 'The parameter \'collection\' is required',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 86,
                          'char' => 64,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 86,
                        'char' => 64,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 86,
                    'char' => 65,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 87,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 89,
              'char' => 8,
            ),
            3 => 
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 89,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 89,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 89,
                      'char' => 40,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 89,
                    'char' => 40,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 89,
                'char' => 41,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 90,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Cache\\Backend\\Mongo constructor
	 *
	 * @param \\Vof\\Cache\\FrontendInterface frontend
	 * @param array options
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
          'line' => 73,
          'last-line' => 96,
          'char' => 16,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
            1 => 'final',
          ),
          'type' => 'method',
          'name' => '_getCollection',
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 99,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'mongo',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 99,
                  'char' => 21,
                ),
                2 => 
                array (
                  'variable' => 'server',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 99,
                  'char' => 29,
                ),
                3 => 
                array (
                  'variable' => 'database',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 99,
                  'char' => 39,
                ),
                4 => 
                array (
                  'variable' => 'collection',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 99,
                  'char' => 51,
                ),
                5 => 
                array (
                  'variable' => 'mongoCollection',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 99,
                  'char' => 68,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 101,
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
                  'variable' => 'mongoCollection',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 101,
                      'char' => 30,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_collection',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 101,
                      'char' => 42,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 101,
                    'char' => 42,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 101,
                  'char' => 42,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 102,
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
                    'value' => 'mongoCollection',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 102,
                    'char' => 30,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 102,
                  'char' => 30,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'object',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 102,
                  'char' => 41,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 102,
                'char' => 41,
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
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 103,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 103,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 103,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 103,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 108,
                  'char' => 5,
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
                      'value' => 'mongo',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 108,
                      'char' => 37,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 108,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'mongo',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 108,
                        'char' => 35,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 108,
                      'char' => 37,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 108,
                    'char' => 37,
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
                            'value' => 'mongo',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 110,
                            'char' => 22,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 110,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'object',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 110,
                          'char' => 33,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 110,
                        'char' => 33,
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
                                  'value' => 'The \'mongo\' parameter must be a valid Mongo instance',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                  'line' => 111,
                                  'char' => 80,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 111,
                                'char' => 80,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 111,
                            'char' => 81,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 112,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 114,
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
                          'variable' => 'server',
                          'expr' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'options',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 119,
                              'char' => 25,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'server',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 119,
                              'char' => 34,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 119,
                            'char' => 35,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 119,
                          'char' => 35,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 120,
                      'char' => 6,
                    ),
                    1 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'or',
                        'left' => 
                        array (
                          'type' => 'not',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'server',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 120,
                            'char' => 17,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 120,
                          'char' => 17,
                        ),
                        'right' => 
                        array (
                          'type' => 'not-equals',
                          'left' => 
                          array (
                            'type' => 'typeof',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'server',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 120,
                              'char' => 34,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 120,
                            'char' => 34,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'string',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 120,
                            'char' => 45,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 120,
                          'char' => 45,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 120,
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
                                  'value' => 'The backend requires a valid MongoDB connection string',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                  'line' => 121,
                                  'char' => 82,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 121,
                                'char' => 82,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 121,
                            'char' => 83,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 122,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 124,
                      'char' => 7,
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
                          'variable' => 'mongo',
                          'expr' => 
                          array (
                            'type' => 'new',
                            'class' => '\\MongoClient',
                            'dynamic' => 0,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'server',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                  'line' => 124,
                                  'char' => 40,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 124,
                                'char' => 40,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 124,
                            'char' => 41,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 124,
                          'char' => 41,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 125,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 130,
                  'char' => 6,
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
                      'variable' => 'database',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 130,
                          'char' => 26,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'db',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 130,
                          'char' => 31,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 130,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 130,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 131,
                  'char' => 5,
                ),
                3 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'or',
                    'left' => 
                    array (
                      'type' => 'not',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'database',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 131,
                        'char' => 18,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 131,
                      'char' => 18,
                    ),
                    'right' => 
                    array (
                      'type' => 'not-equals',
                      'left' => 
                      array (
                        'type' => 'typeof',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'database',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 131,
                          'char' => 37,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 131,
                        'char' => 37,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'string',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 131,
                        'char' => 48,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 131,
                      'char' => 48,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 131,
                    'char' => 48,
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
                              'value' => 'The backend requires a valid MongoDB db',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 132,
                              'char' => 66,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 132,
                            'char' => 66,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 132,
                        'char' => 67,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 133,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 138,
                  'char' => 6,
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
                      'variable' => 'collection',
                      'expr' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 138,
                          'char' => 28,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'collection',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 138,
                          'char' => 41,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 138,
                        'char' => 42,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 138,
                      'char' => 42,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 139,
                  'char' => 5,
                ),
                5 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'or',
                    'left' => 
                    array (
                      'type' => 'not',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'collection',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 139,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 139,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'not-equals',
                      'left' => 
                      array (
                        'type' => 'typeof',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'collection',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 139,
                          'char' => 41,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 139,
                        'char' => 41,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'string',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 139,
                        'char' => 52,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 139,
                      'char' => 52,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 139,
                    'char' => 52,
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
                              'value' => 'The backend requires a valid MongoDB collection',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 140,
                              'char' => 74,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 140,
                            'char' => 74,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 140,
                        'char' => 75,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 141,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 146,
                  'char' => 6,
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
                      'variable' => 'mongoCollection',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'mongo',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 146,
                            'char' => 32,
                          ),
                          'name' => 'selectDb',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'database',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 146,
                                'char' => 50,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 146,
                              'char' => 50,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 146,
                          'char' => 52,
                        ),
                        'name' => 'selectCollection',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'collection',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 146,
                              'char' => 80,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 146,
                            'char' => 80,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 146,
                        'char' => 81,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 146,
                      'char' => 81,
                    ),
                    1 => 
                    array (
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => '_collection',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'mongoCollection',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 147,
                        'char' => 40,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 147,
                      'char' => 40,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 148,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 150,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'mongoCollection',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 150,
                'char' => 25,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 151,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Returns a MongoDb collection based on the backend parameters
	 *
	 * @return MongoCollection
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
          'line' => 97,
          'last-line' => 155,
          'char' => 25,
        ),
        2 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 156,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 156,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 156,
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
                  'variable' => 'frontend',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 158,
                  'char' => 15,
                ),
                1 => 
                array (
                  'variable' => 'prefixedKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 158,
                  'char' => 28,
                ),
                2 => 
                array (
                  'variable' => 'conditions',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 158,
                  'char' => 40,
                ),
                3 => 
                array (
                  'variable' => 'document',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 158,
                  'char' => 51,
                ),
                4 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 158,
                  'char' => 66,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 160,
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
                  'variable' => 'conditions',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 160,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 160,
                  'char' => 22,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 161,
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
                  'variable' => 'frontend',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 161,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_frontend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 161,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 161,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 161,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 162,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 162,
                        'char' => 26,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_prefix',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 162,
                        'char' => 35,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 162,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'keyName',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 162,
                      'char' => 44,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 162,
                    'char' => 44,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 162,
                  'char' => 44,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 163,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 163,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 163,
                  'char' => 35,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 165,
              'char' => 5,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'array-index',
                  'operator' => 'assign',
                  'variable' => 'conditions',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => 'key',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 165,
                      'char' => 23,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'prefixedKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 165,
                    'char' => 38,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 165,
                  'char' => 38,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 166,
              'char' => 5,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'array-index',
                  'operator' => 'assign',
                  'variable' => 'conditions',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => 'time',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 166,
                      'char' => 24,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => '$gt',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 166,
                          'char' => 34,
                        ),
                        'value' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'time',
                          'call-type' => 1,
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 166,
                          'char' => 42,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 166,
                        'char' => 42,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 166,
                    'char' => 43,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 166,
                  'char' => 43,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 168,
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
                  'variable' => 'document',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 168,
                        'char' => 23,
                      ),
                      'name' => '_getCollection',
                      'call-type' => 1,
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 168,
                      'char' => 41,
                    ),
                    'name' => 'findOne',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'conditions',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 168,
                          'char' => 60,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 168,
                        'char' => 60,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 168,
                    'char' => 61,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 168,
                  'char' => 61,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 169,
              'char' => 4,
            ),
            8 => 
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
                    'value' => 'document',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 169,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 169,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 169,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 169,
                'char' => 33,
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
                      'value' => 'cachedContent',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 170,
                      'char' => 45,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'document',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 170,
                        'char' => 36,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'data',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 170,
                        'char' => 43,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 170,
                      'char' => 45,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 170,
                    'char' => 45,
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
                              'value' => 'cachedContent',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 171,
                              'char' => 32,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 171,
                            'char' => 32,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 171,
                        'char' => 34,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 172,
                            'char' => 26,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 173,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 174,
                      'char' => 10,
                    ),
                    1 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'frontend',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 174,
                          'char' => 21,
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 174,
                              'char' => 49,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 174,
                            'char' => 49,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 174,
                        'char' => 50,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 175,
                      'char' => 4,
                    ),
                  ),
                  'else_statements' => 
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
                              'value' => 'The cache is corrupt',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 176,
                              'char' => 47,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 176,
                            'char' => 47,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 176,
                        'char' => 48,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 177,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 178,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 180,
              'char' => 8,
            ),
            9 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 180,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 181,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 156,
                'char' => 66,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 157,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
            'line' => 157,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
          'line' => 156,
          'last-line' => 190,
          'char' => 16,
        ),
        3 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 191,
                'char' => 37,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 191,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 191,
                'char' => 53,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 191,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 191,
                'char' => 70,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 191,
              'char' => 70,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 191,
                'char' => 97,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 191,
              'char' => 97,
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
                  'variable' => 'lastkey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 193,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'frontend',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 193,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 193,
                  'char' => 39,
                ),
                3 => 
                array (
                  'variable' => 'tmp',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 193,
                  'char' => 44,
                ),
                4 => 
                array (
                  'variable' => 'ttl',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 193,
                  'char' => 49,
                ),
                5 => 
                array (
                  'variable' => 'collection',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 194,
                  'char' => 14,
                ),
                6 => 
                array (
                  'variable' => 'timestamp',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 194,
                  'char' => 25,
                ),
                7 => 
                array (
                  'variable' => 'conditions',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 194,
                  'char' => 37,
                ),
                8 => 
                array (
                  'variable' => 'document',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 194,
                  'char' => 47,
                ),
                9 => 
                array (
                  'variable' => 'preparedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 194,
                  'char' => 64,
                ),
                10 => 
                array (
                  'variable' => 'isBuffering',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 195,
                  'char' => 15,
                ),
                11 => 
                array (
                  'variable' => 'data',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 195,
                  'char' => 21,
                ),
                12 => 
                array (
                  'variable' => 'success',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 195,
                  'char' => 30,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 197,
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
                  'variable' => 'conditions',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 197,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 197,
                  'char' => 22,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 198,
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
                  'variable' => 'data',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 198,
                    'char' => 16,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 198,
                  'char' => 16,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 200,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'keyName',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 200,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 200,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 200,
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
                      'variable' => 'lastkey',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 201,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 201,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 201,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 201,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 202,
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
                      'variable' => 'lastkey',
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 203,
                            'char' => 23,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_prefix',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 203,
                            'char' => 32,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 203,
                          'char' => 32,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 203,
                          'char' => 41,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 203,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 203,
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
                        'value' => 'lastkey',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 204,
                        'char' => 29,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 204,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 205,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 207,
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
                  'type' => 'variable',
                  'value' => 'lastkey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 207,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 207,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 208,
                          'char' => 53,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 208,
                        'char' => 53,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 208,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 209,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 211,
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
                  'variable' => 'frontend',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 211,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_frontend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 211,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 211,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 211,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 212,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 212,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 212,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 212,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 213,
                          'char' => 33,
                        ),
                        'name' => 'getContent',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 213,
                        'char' => 46,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 213,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 214,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 215,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 215,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 216,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 218,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 218,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 218,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 218,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 218,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 219,
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 219,
                              'char' => 61,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 219,
                            'char' => 61,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 219,
                        'char' => 62,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 219,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 220,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 221,
                        'char' => 39,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 221,
                      'char' => 39,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 222,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 224,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 224,
                  'char' => 17,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 224,
                  'char' => 24,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 224,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 225,
                          'char' => 19,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastLifetime',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 225,
                          'char' => 33,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 225,
                        'char' => 33,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 225,
                      'char' => 33,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 226,
                      'char' => 12,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 227,
                              'char' => 24,
                            ),
                            'name' => 'getLifetime',
                            'call-type' => 1,
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 227,
                            'char' => 38,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 227,
                          'char' => 38,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 229,
                            'char' => 18,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 229,
                          'char' => 18,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 230,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 232,
                        'char' => 22,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 232,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 233,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 235,
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
                  'variable' => 'collection',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 235,
                      'char' => 25,
                    ),
                    'name' => '_getCollection',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 235,
                    'char' => 42,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 235,
                  'char' => 42,
                ),
                1 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'timestamp',
                  'expr' => 
                  array (
                    'type' => 'add',
                    'left' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'time',
                      'call-type' => 1,
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 236,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'intval',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ttl',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 236,
                            'char' => 35,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 236,
                          'char' => 35,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 236,
                      'char' => 36,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 236,
                    'char' => 36,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 236,
                  'char' => 36,
                ),
                2 => 
                array (
                  'assign-type' => 'array-index',
                  'operator' => 'assign',
                  'variable' => 'conditions',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => 'key',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 237,
                      'char' => 20,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'lastkey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 237,
                    'char' => 31,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 237,
                  'char' => 31,
                ),
                3 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'document',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'collection',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 238,
                      'char' => 26,
                    ),
                    'name' => 'findOne',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'conditions',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 238,
                          'char' => 45,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 238,
                        'char' => 45,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 238,
                    'char' => 46,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 238,
                  'char' => 46,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 240,
              'char' => 4,
            ),
            10 => 
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
                    'value' => 'document',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 240,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 240,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 240,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 240,
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
                      'variable' => 'document',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'time',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 241,
                          'char' => 23,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'timestamp',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 241,
                        'char' => 36,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 241,
                      'char' => 36,
                    ),
                    1 => 
                    array (
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'document',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'data',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 242,
                          'char' => 20,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'preparedContent',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 242,
                        'char' => 39,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 242,
                      'char' => 39,
                    ),
                    2 => 
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
                          'value' => 'collection',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 243,
                          'char' => 26,
                        ),
                        'name' => 'update',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'array',
                              'left' => 
                              array (
                                0 => 
                                array (
                                  'key' => 
                                  array (
                                    'type' => 'string',
                                    'value' => '_id',
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                    'line' => 243,
                                    'char' => 40,
                                  ),
                                  'value' => 
                                  array (
                                    'type' => 'array-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'document',
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                      'line' => 243,
                                      'char' => 50,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'string',
                                      'value' => '_id',
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                      'line' => 243,
                                      'char' => 56,
                                    ),
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                    'line' => 243,
                                    'char' => 57,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                  'line' => 243,
                                  'char' => 57,
                                ),
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 243,
                              'char' => 58,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 243,
                            'char' => 58,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'document',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 243,
                              'char' => 68,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 243,
                            'char' => 68,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 243,
                        'char' => 69,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 243,
                      'char' => 69,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 244,
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
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'data',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'key',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 245,
                          'char' => 18,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'lastkey',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 245,
                        'char' => 29,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 245,
                      'char' => 29,
                    ),
                    1 => 
                    array (
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'data',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'time',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 246,
                          'char' => 16,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'timestamp',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 246,
                        'char' => 29,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 246,
                      'char' => 29,
                    ),
                    2 => 
                    array (
                      'assign-type' => 'array-index',
                      'operator' => 'assign',
                      'variable' => 'data',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'data',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 247,
                          'char' => 16,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'preparedContent',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 247,
                        'char' => 35,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 247,
                      'char' => 35,
                    ),
                    3 => 
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
                          'value' => 'collection',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 248,
                          'char' => 26,
                        ),
                        'name' => 'insert',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'data',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 248,
                              'char' => 38,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 248,
                            'char' => 38,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 248,
                        'char' => 39,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 248,
                      'char' => 39,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 249,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 251,
              'char' => 4,
            ),
            11 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'success',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 251,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 251,
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
                          'value' => 'Failed storing data in mongodb',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 252,
                          'char' => 56,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 252,
                        'char' => 56,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 252,
                    'char' => 57,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 253,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 255,
              'char' => 5,
            ),
            12 => 
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 255,
                      'char' => 30,
                    ),
                    'name' => 'isBuffering',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 255,
                    'char' => 44,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 255,
                  'char' => 44,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 257,
              'char' => 4,
            ),
            13 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'stopBuffer',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 257,
                  'char' => 19,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 257,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 257,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 258,
                      'char' => 13,
                    ),
                    'name' => 'stop',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 258,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 259,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 261,
              'char' => 4,
            ),
            14 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'isBuffering',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 261,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 261,
                  'char' => 27,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 261,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 262,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 263,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 265,
              'char' => 5,
            ),
            15 => 
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 265,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 265,
                  'char' => 29,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 267,
              'char' => 8,
            ),
            16 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'success',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 267,
                'char' => 17,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 268,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 192,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
            'line' => 192,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
          'line' => 191,
          'last-line' => 275,
          'char' => 16,
        ),
        4 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 276,
              'char' => 32,
            ),
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
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 278,
                    'char' => 8,
                  ),
                  'name' => '_getCollection',
                  'call-type' => 1,
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 278,
                  'char' => 26,
                ),
                'name' => 'remove',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'array',
                      'left' => 
                      array (
                        0 => 
                        array (
                          'key' => 
                          array (
                            'type' => 'string',
                            'value' => 'key',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 278,
                            'char' => 40,
                          ),
                          'value' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'property-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'this',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 278,
                                'char' => 47,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => '_prefix',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 278,
                                'char' => 56,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 278,
                              'char' => 56,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'keyName',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 278,
                              'char' => 65,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 278,
                            'char' => 65,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 278,
                          'char' => 65,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 278,
                      'char' => 66,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 278,
                    'char' => 66,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 278,
                'char' => 67,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 280,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'mod',
                  'left' => 
                  array (
                    'type' => 'list',
                    'left' => 
                    array (
                      'type' => 'cast',
                      'left' => 'int',
                      'right' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'rand',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 280,
                        'char' => 19,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 280,
                      'char' => 19,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 280,
                    'char' => 21,
                  ),
                  'right' => 
                  array (
                    'type' => 'int',
                    'value' => '100',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 280,
                    'char' => 28,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 280,
                  'char' => 28,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '0',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 280,
                  'char' => 32,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 280,
                'char' => 32,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 281,
                      'char' => 9,
                    ),
                    'name' => 'gc',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 281,
                    'char' => 14,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 282,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 284,
              'char' => 8,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 284,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 285,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Deletes a value from the cache by its key
	 *
	 * @param int|string keyName
	 * @return boolean
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 277,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
            'line' => 277,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
          'line' => 276,
          'last-line' => 296,
          'char' => 16,
        ),
        5 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 297,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 297,
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
                  'variable' => 'collection',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 299,
                  'char' => 17,
                ),
                1 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 299,
                  'char' => 22,
                ),
                2 => 
                array (
                  'variable' => 'item',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 299,
                  'char' => 28,
                ),
                3 => 
                array (
                  'variable' => 'items',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 299,
                  'char' => 35,
                ),
                4 => 
                array (
                  'variable' => 'value',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 299,
                  'char' => 42,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 300,
              'char' => 7,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'array',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'keys',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 300,
                    'char' => 18,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 300,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'conditions',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 300,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 300,
                  'char' => 35,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 302,
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
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'prefix',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 302,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 302,
                  'char' => 20,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 302,
                'char' => 20,
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
                      'variable' => 'conditions',
                      'index-expr' => 
                      array (
                        0 => 
                        array (
                          'type' => 'string',
                          'value' => 'key',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 303,
                          'char' => 24,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => '\\MongoRegex',
                        'dynamic' => 0,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'concat',
                              'left' => 
                              array (
                                'type' => 'concat',
                                'left' => 
                                array (
                                  'type' => 'string',
                                  'value' => '/^',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                  'line' => 303,
                                  'char' => 49,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'prefix',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                  'line' => 303,
                                  'char' => 58,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 303,
                                'char' => 58,
                              ),
                              'right' => 
                              array (
                                'type' => 'string',
                                'value' => '/',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 303,
                                'char' => 63,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 303,
                              'char' => 63,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 303,
                            'char' => 63,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 303,
                        'char' => 64,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 303,
                      'char' => 64,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 304,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 306,
              'char' => 5,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'array-index',
                  'operator' => 'assign',
                  'variable' => 'conditions',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'string',
                      'value' => 'time',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 306,
                      'char' => 24,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'key' => 
                        array (
                          'type' => 'string',
                          'value' => '$gt',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 306,
                          'char' => 34,
                        ),
                        'value' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'time',
                          'call-type' => 1,
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 306,
                          'char' => 42,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 306,
                        'char' => 42,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 306,
                    'char' => 43,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 306,
                  'char' => 43,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 308,
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
                  'variable' => 'collection',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 308,
                      'char' => 25,
                    ),
                    'name' => '_getCollection',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 308,
                    'char' => 42,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 308,
                  'char' => 42,
                ),
                1 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'items',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'collection',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 309,
                      'char' => 23,
                    ),
                    'name' => 'find',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'conditions',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 309,
                          'char' => 39,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 309,
                        'char' => 39,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'key',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 309,
                                'char' => 47,
                              ),
                              'value' => 
                              array (
                                'type' => 'int',
                                'value' => '1',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 309,
                                'char' => 50,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 309,
                              'char' => 50,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 309,
                          'char' => 51,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 309,
                        'char' => 51,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 309,
                    'char' => 52,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 309,
                  'char' => 52,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 311,
              'char' => 5,
            ),
            5 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'iterator',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'items',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 311,
                      'char' => 29,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 311,
                    'char' => 29,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 311,
                'char' => 31,
              ),
              'value' => 'item',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'item',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 312,
                    'char' => 27,
                  ),
                  'key' => 'key',
                  'value' => 'value',
                  'reverse' => 0,
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'equals',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 313,
                          'char' => 13,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'key',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 313,
                          'char' => 21,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 313,
                        'char' => 21,
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
                              'assign-type' => 'variable-append',
                              'operator' => 'assign',
                              'variable' => 'keys',
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'value',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 314,
                                'char' => 24,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 314,
                              'char' => 24,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 315,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 316,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 317,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 319,
              'char' => 8,
            ),
            6 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'keys',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 319,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 320,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 298,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
            'line' => 298,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
          'line' => 297,
          'last-line' => 327,
          'char' => 16,
        ),
        6 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 328,
                'char' => 39,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 328,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 328,
                'char' => 56,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 328,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 330,
                  'char' => 14,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 332,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 332,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 332,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 332,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 333,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 333,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 333,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 333,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 334,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 335,
                            'char' => 23,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_prefix',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 335,
                            'char' => 32,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 335,
                          'char' => 32,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 335,
                          'char' => 41,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 335,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 335,
                      'char' => 41,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 336,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 338,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'lastKey',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 338,
                'char' => 14,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'greater',
                    'left' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 339,
                          'char' => 16,
                        ),
                        'name' => '_getCollection',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 339,
                        'char' => 34,
                      ),
                      'name' => 'count',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'array',
                            'left' => 
                            array (
                              0 => 
                              array (
                                'key' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'key',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                  'line' => 339,
                                  'char' => 47,
                                ),
                                'value' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'lastKey',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                  'line' => 339,
                                  'char' => 56,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 339,
                                'char' => 56,
                              ),
                              1 => 
                              array (
                                'key' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'time',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                  'line' => 339,
                                  'char' => 64,
                                ),
                                'value' => 
                                array (
                                  'type' => 'array',
                                  'left' => 
                                  array (
                                    0 => 
                                    array (
                                      'key' => 
                                      array (
                                        'type' => 'string',
                                        'value' => '$gt',
                                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                        'line' => 339,
                                        'char' => 72,
                                      ),
                                      'value' => 
                                      array (
                                        'type' => 'fcall',
                                        'name' => 'time',
                                        'call-type' => 1,
                                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                        'line' => 339,
                                        'char' => 80,
                                      ),
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                      'line' => 339,
                                      'char' => 80,
                                    ),
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                  'line' => 339,
                                  'char' => 81,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 339,
                                'char' => 81,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 339,
                            'char' => 82,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 339,
                          'char' => 82,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 339,
                      'char' => 84,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 339,
                      'char' => 87,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 339,
                    'char' => 87,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 340,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 342,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 342,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 343,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 329,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
            'line' => 329,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
          'line' => 328,
          'last-line' => 348,
          'char' => 16,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'gc',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 351,
                    'char' => 15,
                  ),
                  'name' => '_getCollection',
                  'call-type' => 1,
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 351,
                  'char' => 33,
                ),
                'name' => 'remove',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'array',
                      'left' => 
                      array (
                        0 => 
                        array (
                          'key' => 
                          array (
                            'type' => 'string',
                            'value' => 'time',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 351,
                            'char' => 48,
                          ),
                          'value' => 
                          array (
                            'type' => 'array',
                            'left' => 
                            array (
                              0 => 
                              array (
                                'key' => 
                                array (
                                  'type' => 'string',
                                  'value' => '$lt',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                  'line' => 351,
                                  'char' => 56,
                                ),
                                'value' => 
                                array (
                                  'type' => 'fcall',
                                  'name' => 'time',
                                  'call-type' => 1,
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                  'line' => 351,
                                  'char' => 64,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 351,
                                'char' => 64,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 351,
                            'char' => 65,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 351,
                          'char' => 65,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 351,
                      'char' => 66,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 351,
                    'char' => 66,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 351,
                'char' => 67,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 352,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * gc
	 * @return collection->remove(...)
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
          'line' => 349,
          'last-line' => 358,
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
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 359,
              'char' => 35,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 359,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 359,
              'char' => 50,
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
                  'variable' => 'prefixedKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 361,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'document',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 361,
                  'char' => 28,
                ),
                2 => 
                array (
                  'variable' => 'modifiedTime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 362,
                  'char' => 16,
                ),
                3 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 362,
                  'char' => 32,
                ),
                4 => 
                array (
                  'variable' => 'incremented',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 362,
                  'char' => 45,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 364,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 364,
                        'char' => 26,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_prefix',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 364,
                        'char' => 35,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 364,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'keyName',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 364,
                      'char' => 44,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 364,
                    'char' => 44,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 364,
                  'char' => 44,
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
                    'value' => 'prefixedKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 365,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 365,
                  'char' => 32,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 367,
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
                  'variable' => 'document',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 367,
                        'char' => 23,
                      ),
                      'name' => '_getCollection',
                      'call-type' => 1,
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 367,
                      'char' => 41,
                    ),
                    'name' => 'findOne',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'key',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 367,
                                'char' => 56,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'prefixedKey',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 367,
                                'char' => 69,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 367,
                              'char' => 69,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 367,
                          'char' => 70,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 367,
                        'char' => 70,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 367,
                    'char' => 71,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 367,
                  'char' => 71,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 369,
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
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'modifiedTime',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 369,
                    'char' => 44,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'document',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 369,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'time',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 369,
                      'char' => 42,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 369,
                    'char' => 44,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 369,
                  'char' => 44,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 369,
                'char' => 44,
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
                          'value' => 'The cache is corrupted',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 370,
                          'char' => 48,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 370,
                        'char' => 48,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 370,
                    'char' => 49,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 371,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 376,
              'char' => 4,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'less',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'time',
                  'call-type' => 1,
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 376,
                  'char' => 13,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'modifiedTime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 376,
                  'char' => 28,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 376,
                'char' => 28,
              ),
              'statements' => 
              array (
                0 => 
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
                        'value' => 'cachedContent',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 378,
                        'char' => 46,
                      ),
                      'right' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'document',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 378,
                          'char' => 37,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'data',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 378,
                          'char' => 44,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 378,
                        'char' => 46,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 378,
                      'char' => 46,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 378,
                    'char' => 46,
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
                              'value' => 'The cache is corrupted',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 379,
                              'char' => 49,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 379,
                            'char' => 49,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 379,
                        'char' => 50,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 380,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 382,
                  'char' => 5,
                ),
                1 => 
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 382,
                          'char' => 31,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 382,
                        'char' => 31,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 382,
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
                          'variable' => 'incremented',
                          'expr' => 
                          array (
                            'type' => 'add',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'cachedContent',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 383,
                              'char' => 37,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 383,
                              'char' => 44,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 383,
                            'char' => 44,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 383,
                          'char' => 44,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 384,
                      'char' => 8,
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
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 384,
                          'char' => 10,
                        ),
                        'name' => 'save',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'prefixedKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 384,
                              'char' => 27,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 384,
                            'char' => 27,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'incremented',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 384,
                              'char' => 40,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 384,
                            'char' => 40,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 384,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 385,
                      'char' => 10,
                    ),
                    2 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'incremented',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 385,
                        'char' => 23,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 386,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 387,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 389,
              'char' => 8,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 389,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 390,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Increment of a given key by $value
	 *
	 * @param int|string keyName
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 359,
                'char' => 59,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 360,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
            'line' => 360,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
          'line' => 359,
          'last-line' => 396,
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
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 397,
              'char' => 35,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 397,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 397,
              'char' => 50,
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
                  'variable' => 'prefixedKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 399,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'document',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 399,
                  'char' => 28,
                ),
                2 => 
                array (
                  'variable' => 'modifiedTime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 399,
                  'char' => 42,
                ),
                3 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 399,
                  'char' => 58,
                ),
                4 => 
                array (
                  'variable' => 'decremented',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 399,
                  'char' => 71,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 401,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 401,
                        'char' => 26,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_prefix',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 401,
                        'char' => 35,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 401,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'keyName',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 401,
                      'char' => 44,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 401,
                    'char' => 44,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 401,
                  'char' => 44,
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
                    'value' => 'prefixedKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 402,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 402,
                  'char' => 32,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 404,
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
                  'variable' => 'document',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 404,
                        'char' => 23,
                      ),
                      'name' => '_getCollection',
                      'call-type' => 1,
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 404,
                      'char' => 41,
                    ),
                    'name' => 'findOne',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array',
                          'left' => 
                          array (
                            0 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'key',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 404,
                                'char' => 56,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'prefixedKey',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                                'line' => 404,
                                'char' => 69,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 404,
                              'char' => 69,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 404,
                          'char' => 70,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 404,
                        'char' => 70,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 404,
                    'char' => 71,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 404,
                  'char' => 71,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 406,
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
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'modifiedTime',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 406,
                    'char' => 44,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'document',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 406,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'time',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 406,
                      'char' => 42,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 406,
                    'char' => 44,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 406,
                  'char' => 44,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 406,
                'char' => 44,
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
                          'value' => 'The cache is corrupted',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 407,
                          'char' => 48,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 407,
                        'char' => 48,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 407,
                    'char' => 49,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 408,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 413,
              'char' => 4,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'less',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'time',
                  'call-type' => 1,
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 413,
                  'char' => 13,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'modifiedTime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 413,
                  'char' => 28,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 413,
                'char' => 28,
              ),
              'statements' => 
              array (
                0 => 
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
                        'value' => 'cachedContent',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 415,
                        'char' => 46,
                      ),
                      'right' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'document',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 415,
                          'char' => 37,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'data',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 415,
                          'char' => 44,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 415,
                        'char' => 46,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 415,
                      'char' => 46,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 415,
                    'char' => 46,
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
                              'value' => 'The cache is corrupted',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 416,
                              'char' => 49,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 416,
                            'char' => 49,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 416,
                        'char' => 50,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 417,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 419,
                  'char' => 5,
                ),
                1 => 
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 419,
                          'char' => 31,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 419,
                        'char' => 31,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 419,
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
                          'variable' => 'decremented',
                          'expr' => 
                          array (
                            'type' => 'sub',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'cachedContent',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 420,
                              'char' => 37,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 420,
                              'char' => 44,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 420,
                            'char' => 44,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 420,
                          'char' => 44,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 421,
                      'char' => 8,
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
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                          'line' => 421,
                          'char' => 10,
                        ),
                        'name' => 'save',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'prefixedKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 421,
                              'char' => 27,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 421,
                            'char' => 27,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'decremented',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                              'line' => 421,
                              'char' => 40,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                            'line' => 421,
                            'char' => 40,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 421,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 422,
                      'char' => 10,
                    ),
                    2 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'decremented',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                        'line' => 422,
                        'char' => 23,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                      'line' => 423,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 424,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 426,
              'char' => 8,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 426,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 427,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Decrement of a given key by $value
	 *
	 * @param int|string $keyName
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 397,
                'char' => 59,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 398,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
            'line' => 398,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
          'line' => 397,
          'last-line' => 431,
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
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                    'line' => 434,
                    'char' => 8,
                  ),
                  'name' => '_getCollection',
                  'call-type' => 1,
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                  'line' => 434,
                  'char' => 26,
                ),
                'name' => 'remove',
                'call-type' => 1,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 434,
                'char' => 35,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 436,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 436,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
              'line' => 437,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
                'line' => 433,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
            'line' => 433,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
          'line' => 432,
          'last-line' => 438,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
      'line' => 62,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/mongo.zep',
    'line' => 62,
    'char' => 5,
  ),
);