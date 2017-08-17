<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Cache',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
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
        'name' => 'Vof\\Cache\\Exception',
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
        'line' => 22,
        'char' => 24,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
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
        'name' => 'Vof\\Cache\\BackendInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
        'line' => 23,
        'char' => 31,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
    'line' => 85,
    'char' => 2,
  ),
  3 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Cache\\Multiple
 *
 * Allows to read to chained backend adapters writing to multiple backends
 *
 *<code>
 * use Vof\\Cache\\Frontend\\Data as DataFrontend;
 * use Vof\\Cache\\Multiple;
 * use Vof\\Cache\\Backend\\Apc as ApcCache;
 * use Vof\\Cache\\Backend\\Memcache as MemcacheCache;
 * use Vof\\Cache\\Backend\\File as FileCache;
 *
 * $ultraFastFrontend = new DataFrontend(
 *     [
 *         "lifetime" => 3600,
 *     ]
 * );
 *
 * $fastFrontend = new DataFrontend(
 *     [
 *         "lifetime" => 86400,
 *     ]
 * );
 *
 * $slowFrontend = new DataFrontend(
 *     [
 *         "lifetime" => 604800,
 *     ]
 * );
 *
 * //Backends are registered from the fastest to the slower
 * $cache = new Multiple(
 *     [
 *         new ApcCache(
 *             $ultraFastFrontend,
 *             [
 *                 "prefix" => "cache",
 *             ]
 *         ),
 *         new MemcacheCache(
 *             $fastFrontend,
 *             [
 *                 "prefix" => "cache",
 *                 "host"   => "localhost",
 *                 "port"   => "11211",
 *             ]
 *         ),
 *         new FileCache(
 *             $slowFrontend,
 *             [
 *                 "prefix"   => "cache",
 *                 "cacheDir" => "../app/cache/",
 *             ]
 *         ),
 *     ]
 * );
 *
 * //Save, saves in every backend
 * $cache->save("my-key", $data);
 *</code>
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
    'line' => 86,
    'char' => 5,
  ),
  4 => 
  array (
    'type' => 'class',
    'name' => 'Multiple',
    'abstract' => 0,
    'final' => 0,
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
          'name' => '_backends',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
          'line' => 95,
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
              'name' => 'backends',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 96,
                'char' => 45,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 96,
              'char' => 45,
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
                    'value' => 'backends',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                    'line' => 98,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 98,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 98,
                  'char' => 32,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 98,
                'char' => 32,
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
                        'value' => 'backends',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                        'line' => 99,
                        'char' => 24,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                      'line' => 99,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'array',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                      'line' => 99,
                      'char' => 34,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                    'line' => 99,
                    'char' => 34,
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
                              'value' => 'The backends must be an array',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                              'line' => 100,
                              'char' => 56,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                            'line' => 100,
                            'char' => 56,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                        'line' => 100,
                        'char' => 57,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                      'line' => 101,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 102,
                  'char' => 6,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => '_backends',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'backends',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                        'line' => 102,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                      'line' => 102,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 103,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 104,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Cache\\Multiple constructor
	 *
	 * @param	Vof\\Cache\\BackendInterface[] backends
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
          'line' => 96,
          'last-line' => 108,
          'char' => 16,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'push',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'backend',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'cast' => 
              array (
                'type' => 'variable',
                'value' => 'BackendInterface',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 109,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 109,
              'char' => 49,
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
                  'assign-type' => 'object-property-append',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_backends',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'backend',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                    'line' => 111,
                    'char' => 34,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 111,
                  'char' => 34,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 112,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 112,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 113,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Adds a backend
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
                  'value' => 'Multiple',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 110,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 110,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
            'line' => 110,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
          'line' => 109,
          'last-line' => 121,
          'char' => 16,
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
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 122,
              'char' => 33,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 122,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 122,
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
                  'variable' => 'backend',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 124,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'content',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 124,
                  'char' => 23,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 126,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 126,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_backends',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 126,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 126,
                'char' => 34,
              ),
              'value' => 'backend',
              'reverse' => 0,
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
                      'variable' => 'content',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'backend',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                          'line' => 127,
                          'char' => 26,
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
                              'value' => 'keyName',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                              'line' => 127,
                              'char' => 38,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                            'line' => 127,
                            'char' => 38,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'lifetime',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                              'line' => 127,
                              'char' => 48,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                            'line' => 127,
                            'char' => 48,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                        'line' => 127,
                        'char' => 49,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                      'line' => 127,
                      'char' => 49,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 128,
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
                      'type' => 'variable',
                      'value' => 'content',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                      'line' => 128,
                      'char' => 16,
                    ),
                    'right' => 
                    array (
                      'type' => 'null',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                      'line' => 128,
                      'char' => 23,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                    'line' => 128,
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
                        'value' => 'content',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                        'line' => 129,
                        'char' => 19,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                      'line' => 130,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 131,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 133,
              'char' => 8,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 133,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 134,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Returns a cached content reading the internal backends
	 *
	 * @param string|int keyName
	 * @param int lifetime
	 * @return mixed
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
          'line' => 122,
          'last-line' => 141,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 142,
              'char' => 35,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 142,
                'char' => 52,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 142,
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
                  'variable' => 'backend',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 144,
                  'char' => 14,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 146,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 146,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_backends',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 146,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 146,
                'char' => 34,
              ),
              'value' => 'backend',
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
                      'value' => 'backend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                      'line' => 147,
                      'char' => 12,
                    ),
                    'name' => 'start',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                          'line' => 147,
                          'char' => 26,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                        'line' => 147,
                        'char' => 26,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'lifetime',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                          'line' => 147,
                          'char' => 36,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                        'line' => 147,
                        'char' => 36,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                    'line' => 147,
                    'char' => 37,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 148,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 149,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Starts every backend
	 *
	 * @param string|int keyName
	 * @param int lifetime
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
            'line' => 143,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
          'line' => 142,
          'last-line' => 158,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 159,
                'char' => 41,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 159,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 159,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 159,
              'char' => 57,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 159,
                'char' => 74,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 159,
              'char' => 74,
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
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 159,
                'char' => 93,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 159,
              'char' => 93,
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
                  'variable' => 'backend',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 161,
                  'char' => 14,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 163,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 163,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_backends',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 163,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 163,
                'char' => 34,
              ),
              'value' => 'backend',
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
                      'value' => 'backend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                      'line' => 164,
                      'char' => 12,
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
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                          'line' => 164,
                          'char' => 25,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                        'line' => 164,
                        'char' => 25,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'content',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                          'line' => 164,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                        'line' => 164,
                        'char' => 34,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'lifetime',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                          'line' => 164,
                          'char' => 44,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                        'line' => 164,
                        'char' => 44,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'stopBuffer',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                          'line' => 164,
                          'char' => 56,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                        'line' => 164,
                        'char' => 56,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                    'line' => 164,
                    'char' => 57,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 165,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 166,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	* Stores cached content into all backends and stops the frontend
	*
	* @param string keyName
	* @param string content
	* @param int lifetime
	* @param boolean stopBuffer
	*',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
            'line' => 160,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
          'line' => 159,
          'last-line' => 173,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 174,
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
                  'variable' => 'backend',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 176,
                  'char' => 14,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 178,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 178,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_backends',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 178,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 178,
                'char' => 34,
              ),
              'value' => 'backend',
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
                      'value' => 'backend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                      'line' => 179,
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
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                          'line' => 179,
                          'char' => 27,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                        'line' => 179,
                        'char' => 27,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                    'line' => 179,
                    'char' => 28,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 180,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 182,
              'char' => 8,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 182,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 183,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Deletes a value from each backend
	 *
	 * @param string|int keyName
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 175,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
            'line' => 175,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
          'line' => 174,
          'last-line' => 190,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 191,
                'char' => 43,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 191,
              'char' => 43,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 191,
                'char' => 60,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 191,
              'char' => 60,
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
                  'variable' => 'backend',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 193,
                  'char' => 14,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 195,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 195,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_backends',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 195,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 195,
                'char' => 34,
              ),
              'value' => 'backend',
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
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'backend',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                        'line' => 196,
                        'char' => 15,
                      ),
                      'name' => 'exists',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'keyName',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                            'line' => 196,
                            'char' => 30,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                          'line' => 196,
                          'char' => 30,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'lifetime',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                            'line' => 196,
                            'char' => 40,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                          'line' => 196,
                          'char' => 40,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                      'line' => 196,
                      'char' => 43,
                    ),
                    'right' => 
                    array (
                      'type' => 'bool',
                      'value' => 'true',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                      'line' => 196,
                      'char' => 50,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                    'line' => 196,
                    'char' => 50,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                        'line' => 197,
                        'char' => 16,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                      'line' => 198,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 199,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 201,
              'char' => 8,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 201,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 202,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Checks if cache exists in at least one backend
	 *
	 * @param  string|int keyName
	 * @param  int lifetime
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 192,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
            'line' => 192,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
          'line' => 191,
          'last-line' => 206,
          'char' => 16,
        ),
        7 => 
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
                  'variable' => 'backend',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 209,
                  'char' => 14,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 211,
              'char' => 5,
            ),
            1 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 211,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_backends',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 211,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 211,
                'char' => 34,
              ),
              'value' => 'backend',
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
                      'value' => 'backend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                      'line' => 212,
                      'char' => 12,
                    ),
                    'name' => 'flush',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                    'line' => 212,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                  'line' => 213,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 215,
              'char' => 8,
            ),
            2 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 215,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
              'line' => 216,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Flush all backend(s)
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
                'line' => 208,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
            'line' => 208,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
          'line' => 207,
          'last-line' => 217,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
      'line' => 86,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/multiple.zep',
    'line' => 86,
    'char' => 5,
  ),
);