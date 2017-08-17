<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Cache\\Backend',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
        'line' => 22,
        'char' => 24,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
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
        'name' => 'Vof\\Cache\\Backend',
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
        'line' => 23,
        'char' => 22,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
    'line' => 57,
    'char' => 2,
  ),
  3 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Cache\\Backend\\Apc
 *
 * Allows to cache output fragments, PHP data and raw data using an APC backend
 *
 *<code>
 * use Vof\\Cache\\Backend\\Apc;
 * use Vof\\Cache\\Frontend\\Data as FrontData;
 *
 * // Cache data for 2 days
 * $frontCache = new FrontData(
 *     [
 *         "lifetime" => 172800,
 *     ]
 * );
 *
 * $cache = new Apc(
 *     $frontCache,
 *     [
 *         "prefix" => "app-data",
 *     ]
 * );
 *
 * // Cache arbitrary data
 * $cache->save("my-data", [1, 2, 3, 4, 5]);
 *
 * // Get data
 * $data = $cache->get("my-data");
 *</code>
 *
 * @see \\Vof\\Cache\\Backend\\Apcu
 * @deprecated
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
    'line' => 58,
    'char' => 5,
  ),
  4 => 
  array (
    'type' => 'class',
    'name' => 'Apc',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'Backend',
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 64,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 64,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 64,
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
                  'variable' => 'prefixedKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 66,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 66,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 68,
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
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'string',
                        'value' => '_PHCA',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 68,
                        'char' => 29,
                      ),
                      'right' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 68,
                          'char' => 36,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 68,
                          'char' => 45,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 68,
                        'char' => 45,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 68,
                      'char' => 45,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'keyName',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 68,
                      'char' => 54,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 68,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 68,
                  'char' => 54,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 69,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 69,
                  'char' => 32,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 71,
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
                  'variable' => 'cachedContent',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'apc_fetch',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'prefixedKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 71,
                          'char' => 44,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 71,
                        'char' => 44,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 71,
                    'char' => 45,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 71,
                  'char' => 45,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 72,
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
                  'value' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 72,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'false',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 72,
                  'char' => 30,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 72,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 73,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 74,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 76,
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
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 76,
                    'char' => 15,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_frontend',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 76,
                    'char' => 26,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 76,
                  'char' => 26,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 76,
                      'char' => 54,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 76,
                    'char' => 54,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 76,
                'char' => 55,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 77,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 64,
                'char' => 66,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 65,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
            'line' => 65,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
          'line' => 64,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 87,
                'char' => 41,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 87,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 87,
                'char' => 61,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 87,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 87,
                'char' => 82,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 87,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 87,
                'char' => 109,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 87,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 89,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'frontend',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 89,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 89,
                  'char' => 39,
                ),
                3 => 
                array (
                  'variable' => 'preparedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 89,
                  'char' => 56,
                ),
                4 => 
                array (
                  'variable' => 'ttl',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 89,
                  'char' => 61,
                ),
                5 => 
                array (
                  'variable' => 'isBuffering',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 89,
                  'char' => 74,
                ),
                6 => 
                array (
                  'variable' => 'success',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 89,
                  'char' => 83,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 91,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 91,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 91,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 91,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 92,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 92,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 92,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 92,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 93,
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
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'string',
                            'value' => '_PHCA',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 94,
                            'char' => 26,
                          ),
                          'right' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 94,
                              'char' => 33,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_prefix',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 94,
                              'char' => 42,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 94,
                            'char' => 42,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 94,
                          'char' => 42,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 94,
                          'char' => 51,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 94,
                        'char' => 51,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 94,
                      'char' => 51,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 95,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 97,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 97,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 97,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 98,
                          'char' => 53,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 98,
                        'char' => 53,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 98,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 99,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 101,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 101,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_frontend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 101,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 101,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 101,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 102,
              'char' => 4,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'content',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 102,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 102,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 102,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 103,
                          'char' => 33,
                        ),
                        'name' => 'getContent',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 103,
                        'char' => 46,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 103,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 104,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 105,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 105,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 106,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 108,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 108,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 108,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 108,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 108,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 109,
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 109,
                              'char' => 61,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 109,
                            'char' => 61,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 109,
                        'char' => 62,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 109,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 110,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 111,
                        'char' => 39,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 111,
                      'char' => 39,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 112,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 117,
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
                  'value' => 'lifetime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 117,
                  'char' => 17,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 117,
                  'char' => 24,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 117,
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
                      'variable' => 'lifetime',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 118,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastLifetime',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 118,
                          'char' => 38,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 118,
                        'char' => 38,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 118,
                      'char' => 38,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 119,
                  'char' => 5,
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
                      'value' => 'lifetime',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 119,
                      'char' => 18,
                    ),
                    'right' => 
                    array (
                      'type' => 'null',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 119,
                      'char' => 25,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 119,
                    'char' => 25,
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 120,
                              'char' => 24,
                            ),
                            'name' => 'getLifetime',
                            'call-type' => 1,
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 120,
                            'char' => 38,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 120,
                          'char' => 38,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 121,
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
                            'value' => 'lifetime',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 122,
                            'char' => 23,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 122,
                          'char' => 23,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 123,
                            'char' => 30,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 123,
                          'char' => 30,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 124,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 125,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 126,
                        'char' => 22,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 126,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 127,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 132,
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
                  'variable' => 'success',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'apc_store',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 132,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 132,
                        'char' => 34,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'preparedContent',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 132,
                          'char' => 51,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 132,
                        'char' => 51,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'ttl',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 132,
                          'char' => 56,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 132,
                        'char' => 56,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 132,
                    'char' => 57,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 132,
                  'char' => 57,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 134,
              'char' => 4,
            ),
            8 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'success',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 134,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 134,
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
                          'value' => 'Failed storing data in apc',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 135,
                          'char' => 52,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 135,
                        'char' => 52,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 135,
                    'char' => 53,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 136,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 138,
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
                  'variable' => 'isBuffering',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'frontend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 138,
                      'char' => 30,
                    ),
                    'name' => 'isBuffering',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 138,
                    'char' => 44,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 138,
                  'char' => 44,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 140,
              'char' => 4,
            ),
            10 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'stopBuffer',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 140,
                  'char' => 19,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 140,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 140,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 141,
                      'char' => 13,
                    ),
                    'name' => 'stop',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 141,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 142,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 144,
              'char' => 4,
            ),
            11 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'isBuffering',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 144,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 144,
                  'char' => 27,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 144,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 145,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 146,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 148,
              'char' => 5,
            ),
            12 => 
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 148,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 148,
                  'char' => 29,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 150,
              'char' => 8,
            ),
            13 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'success',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 150,
                'char' => 17,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 151,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Stores cached content into the APC backend and stops the frontend
	 *
	 * @param string|int keyName
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 88,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
            'line' => 88,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
          'line' => 87,
          'last-line' => 157,
          'char' => 16,
        ),
        2 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 158,
                'char' => 42,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 158,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 158,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 158,
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
                  'variable' => 'prefixedKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 160,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 160,
                  'char' => 33,
                ),
                2 => 
                array (
                  'variable' => 'result',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 160,
                  'char' => 41,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 162,
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
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'string',
                        'value' => '_PHCA',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 162,
                        'char' => 29,
                      ),
                      'right' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 162,
                          'char' => 36,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 162,
                          'char' => 45,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 162,
                        'char' => 45,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 162,
                      'char' => 45,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'keyName',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 162,
                      'char' => 54,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 162,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 162,
                  'char' => 54,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 163,
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
                  'property' => '_lastKey',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'prefixedKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 163,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 163,
                  'char' => 35,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 165,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'function_exists',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'apc_inc',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 165,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 165,
                    'char' => 31,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 165,
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
                      'variable' => 'result',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'apc_inc',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'prefixedKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 166,
                              'char' => 36,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 166,
                            'char' => 36,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 166,
                              'char' => 43,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 166,
                            'char' => 43,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 166,
                        'char' => 44,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 166,
                      'char' => 44,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 167,
                  'char' => 9,
                ),
                1 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'result',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 167,
                    'char' => 17,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 168,
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
                        'type' => 'fcall',
                        'name' => 'apc_fetch',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'prefixedKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 169,
                              'char' => 45,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 169,
                            'char' => 45,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 169,
                        'char' => 46,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 169,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 171,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 171,
                          'char' => 31,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 171,
                        'char' => 31,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 171,
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
                          'variable' => 'result',
                          'expr' => 
                          array (
                            'type' => 'add',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'cachedContent',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 172,
                              'char' => 32,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 172,
                              'char' => 39,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 172,
                            'char' => 39,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 172,
                          'char' => 39,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 173,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 173,
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
                              'value' => 'keyName',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 173,
                              'char' => 23,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 173,
                            'char' => 23,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'result',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 173,
                              'char' => 31,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 173,
                            'char' => 31,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 173,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 174,
                      'char' => 10,
                    ),
                    2 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'result',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 174,
                        'char' => 18,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 175,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 176,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 178,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 178,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 179,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Increment of a given key, by number $value
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 158,
                'char' => 66,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 159,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
            'line' => 159,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
          'line' => 158,
          'last-line' => 185,
          'char' => 16,
        ),
        3 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 186,
                'char' => 42,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 186,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 186,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 186,
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
                  'variable' => 'lastKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 188,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 188,
                  'char' => 29,
                ),
                2 => 
                array (
                  'variable' => 'result',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 188,
                  'char' => 37,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 190,
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
                  'variable' => 'lastKey',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'string',
                        'value' => '_PHCA',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 190,
                        'char' => 25,
                      ),
                      'right' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 190,
                          'char' => 32,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 190,
                          'char' => 41,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 190,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 190,
                      'char' => 41,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'keyName',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 190,
                      'char' => 50,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 190,
                    'char' => 50,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 190,
                  'char' => 50,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 191,
                    'char' => 28,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 191,
                  'char' => 28,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 193,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'function_exists',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'apc_dec',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 193,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 193,
                    'char' => 31,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 193,
                'char' => 33,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'apc_dec',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 194,
                          'char' => 26,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 194,
                        'char' => 26,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 194,
                          'char' => 33,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 194,
                        'char' => 33,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 194,
                    'char' => 34,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 195,
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
                        'type' => 'fcall',
                        'name' => 'apc_fetch',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'lastKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 196,
                              'char' => 41,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 196,
                            'char' => 41,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 196,
                        'char' => 42,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 196,
                      'char' => 42,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 198,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 198,
                          'char' => 31,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 198,
                        'char' => 31,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 198,
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
                          'variable' => 'result',
                          'expr' => 
                          array (
                            'type' => 'sub',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'cachedContent',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 199,
                              'char' => 32,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 199,
                              'char' => 39,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 199,
                            'char' => 39,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 199,
                          'char' => 39,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 200,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 200,
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
                              'value' => 'keyName',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 200,
                              'char' => 23,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 200,
                            'char' => 23,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'result',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 200,
                              'char' => 31,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 200,
                            'char' => 31,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 200,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 201,
                      'char' => 10,
                    ),
                    2 => 
                    array (
                      'type' => 'return',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'result',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 201,
                        'char' => 18,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 202,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 203,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 205,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 205,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 206,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Decrement of a given key, by number $value
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 186,
                'char' => 66,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 187,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
            'line' => 187,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
          'line' => 186,
          'last-line' => 210,
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
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 211,
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
                'name' => 'apc_delete',
                'call-type' => 1,
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
                          'value' => '_PHCA',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 213,
                          'char' => 29,
                        ),
                        'right' => 
                        array (
                          'type' => 'property-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 213,
                            'char' => 36,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_prefix',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 213,
                            'char' => 45,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 213,
                          'char' => 45,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 213,
                        'char' => 45,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'keyName',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 213,
                        'char' => 54,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 213,
                      'char' => 54,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 213,
                    'char' => 54,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 213,
                'char' => 55,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 214,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Deletes a value from the cache by its key
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 212,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
            'line' => 212,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
          'line' => 211,
          'last-line' => 225,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 226,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 226,
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
                  'variable' => 'prefixPattern',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 228,
                  'char' => 20,
                ),
                1 => 
                array (
                  'variable' => 'apc',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 228,
                  'char' => 25,
                ),
                2 => 
                array (
                  'variable' => 'keys',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 228,
                  'char' => 31,
                ),
                3 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 228,
                  'char' => 36,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 230,
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
                  'value' => 'prefix',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 230,
                  'char' => 19,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 230,
                'char' => 19,
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
                      'variable' => 'prefixPattern',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => '/^_PHCA/',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 231,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 231,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 232,
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
                      'variable' => 'prefixPattern',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'string',
                            'value' => '/^_PHCA',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 233,
                            'char' => 34,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'prefix',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 233,
                            'char' => 43,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 233,
                          'char' => 43,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => '/',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 233,
                          'char' => 48,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 233,
                        'char' => 48,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 233,
                      'char' => 48,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 234,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 236,
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
                  'variable' => 'keys',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 236,
                    'char' => 16,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 236,
                  'char' => 16,
                ),
                1 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'apc',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => '\\APCIterator',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'user',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 237,
                          'char' => 33,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 237,
                        'char' => 33,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'prefixPattern',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 237,
                          'char' => 48,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 237,
                        'char' => 48,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 237,
                    'char' => 49,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 237,
                  'char' => 49,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 239,
              'char' => 5,
            ),
            3 => 
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
                      'value' => 'apc',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 239,
                      'char' => 29,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 239,
                    'char' => 29,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 239,
                'char' => 31,
              ),
              'key' => 'key',
              'value' => '_',
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
                      'assign-type' => 'variable-append',
                      'operator' => 'assign',
                      'variable' => 'keys',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'substr',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 240,
                              'char' => 27,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 240,
                            'char' => 27,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'int',
                              'value' => '5',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 240,
                              'char' => 30,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 240,
                            'char' => 30,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 240,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 240,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 241,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 243,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'keys',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 243,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 244,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 227,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
            'line' => 227,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
          'line' => 226,
          'last-line' => 251,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 252,
                'char' => 39,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 252,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 252,
                'char' => 56,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 252,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 254,
                  'char' => 14,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 256,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 256,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 256,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 256,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 257,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 257,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 257,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 257,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 258,
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
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'string',
                            'value' => '_PHCA',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 259,
                            'char' => 26,
                          ),
                          'right' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 259,
                              'char' => 33,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_prefix',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                              'line' => 259,
                              'char' => 42,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 259,
                            'char' => 42,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 259,
                          'char' => 42,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 259,
                          'char' => 51,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 259,
                        'char' => 51,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 259,
                      'char' => 51,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 260,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 262,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'lastKey',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 262,
                'char' => 14,
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
                      'type' => 'fcall',
                      'name' => 'apc_exists',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'lastKey',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 263,
                            'char' => 25,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 263,
                          'char' => 25,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 263,
                      'char' => 29,
                    ),
                    'right' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 263,
                      'char' => 37,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 263,
                    'char' => 37,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 264,
                        'char' => 16,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 265,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 266,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 268,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 268,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 269,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Checks if cache exists and it hasn\'t expired
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 253,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
            'line' => 253,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
          'line' => 252,
          'last-line' => 284,
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
                  'variable' => 'item',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 287,
                  'char' => 11,
                ),
                1 => 
                array (
                  'variable' => 'prefixPattern',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 287,
                  'char' => 26,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 289,
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
                  'variable' => 'prefixPattern',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'string',
                        'value' => '/^_PHCA',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 289,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 289,
                          'char' => 40,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 289,
                          'char' => 49,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 289,
                        'char' => 49,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 289,
                      'char' => 49,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '/',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 289,
                      'char' => 54,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 289,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 289,
                  'char' => 54,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 291,
              'char' => 5,
            ),
            2 => 
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
                      'type' => 'new',
                      'class' => '\\APCIterator',
                      'dynamic' => 0,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => 'user',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 291,
                            'char' => 47,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 291,
                          'char' => 47,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'prefixPattern',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 291,
                            'char' => 62,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 291,
                          'char' => 62,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                      'line' => 291,
                      'char' => 63,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 291,
                    'char' => 63,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 291,
                'char' => 65,
              ),
              'value' => 'item',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'apc_delete',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'array-access',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'item',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 292,
                            'char' => 19,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'key',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                            'line' => 292,
                            'char' => 25,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                          'line' => 292,
                          'char' => 26,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                        'line' => 292,
                        'char' => 26,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                    'line' => 292,
                    'char' => 27,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                  'line' => 293,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 295,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 295,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
              'line' => 296,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Immediately invalidates all existing items.
	 *
	 * <code>
	 * use Vof\\Cache\\Backend\\Apc;
	 *
	 * $cache = new Apc($frontCache, ["prefix" => "app-data"]);
	 *
	 * $cache->save("my-data", [1, 2, 3, 4, 5]);
	 *
	 * // \'my-data\' and all other used keys are deleted
	 * $cache->flush();
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
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
                'line' => 286,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
            'line' => 286,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
          'line' => 285,
          'last-line' => 297,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
      'line' => 58,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/apc.zep',
    'line' => 58,
    'char' => 5,
  ),
);