<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Cache\\Backend',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
        'line' => 22,
        'char' => 22,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
        'line' => 23,
        'char' => 24,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
    'line' => 45,
    'char' => 2,
  ),
  3 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Cache\\Backend\\Memory
 *
 * Stores content in memory. Data is lost when the request is finished
 *
 *<code>
 * use Vof\\Cache\\Backend\\Memory;
 * use Vof\\Cache\\Frontend\\Data as FrontData;
 *
 * // Cache data
 * $frontCache = new FrontData();
 *
 * $cache = new Memory($frontCache);
 *
 * // Cache arbitrary data
 * $cache->save("my-data", [1, 2, 3, 4, 5]);
 *
 * // Get data
 * $data = $cache->get("my-data");
 *</code>
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
    'line' => 46,
    'char' => 5,
  ),
  4 => 
  array (
    'type' => 'class',
    'name' => 'Memory',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'Backend',
    'implements' => 
    array (
      0 => 
      array (
        'type' => 'variable',
        'value' => '\\Serializable',
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
        'line' => 47,
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
          'name' => '_data',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
          'line' => 53,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 54,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 54,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 54,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 56,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 56,
                  'char' => 29,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 58,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 58,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 58,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 58,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 59,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 59,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 59,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 59,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 60,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                            'line' => 61,
                            'char' => 23,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_prefix',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                            'line' => 61,
                            'char' => 32,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 61,
                          'char' => 32,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 61,
                          'char' => 41,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 61,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 61,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 61,
                        'char' => 67,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 61,
                      'char' => 67,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 62,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 64,
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
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'cachedContent',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 64,
                    'char' => 49,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 64,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_data',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 64,
                        'char' => 39,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 64,
                      'char' => 39,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'lastKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 64,
                      'char' => 47,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 64,
                    'char' => 49,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 64,
                  'char' => 49,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 64,
                'char' => 49,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 65,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 66,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 68,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 68,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 68,
                  'char' => 29,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 68,
                'char' => 29,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 69,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 70,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 72,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 72,
                    'char' => 15,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_frontend',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 72,
                    'char' => 26,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 72,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 72,
                      'char' => 54,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 72,
                    'char' => 54,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 72,
                'char' => 55,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 73,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 54,
                'char' => 66,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 55,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
            'line' => 55,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
          'line' => 54,
          'last-line' => 82,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 83,
                'char' => 41,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 83,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 83,
                'char' => 61,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 83,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 83,
                'char' => 78,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 83,
              'char' => 78,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 83,
                'char' => 105,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 83,
              'char' => 105,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 85,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'frontend',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 85,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 85,
                  'char' => 39,
                ),
                3 => 
                array (
                  'variable' => 'preparedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 85,
                  'char' => 56,
                ),
                4 => 
                array (
                  'variable' => 'isBuffering',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 85,
                  'char' => 69,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 87,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 87,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 87,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 87,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 88,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 88,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 88,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 88,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 89,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                            'line' => 90,
                            'char' => 23,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_prefix',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                            'line' => 90,
                            'char' => 32,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 90,
                          'char' => 32,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 90,
                          'char' => 41,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 90,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 90,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 91,
                        'char' => 29,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 91,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 92,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 94,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 94,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 94,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 95,
                          'char' => 53,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 95,
                        'char' => 53,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 95,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 96,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 98,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 98,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_frontend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 98,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 98,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 98,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 100,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 100,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 100,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 100,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 101,
                          'char' => 33,
                        ),
                        'name' => 'getContent',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 101,
                        'char' => 46,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 101,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 102,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 103,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 103,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 104,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 106,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 106,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 106,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 106,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 106,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 107,
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                              'line' => 107,
                              'char' => 61,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                            'line' => 107,
                            'char' => 61,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 107,
                        'char' => 62,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 107,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 108,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 109,
                        'char' => 39,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 109,
                      'char' => 39,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 110,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 112,
              'char' => 5,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_data',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'lastKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 112,
                      'char' => 26,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'preparedContent',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 112,
                    'char' => 45,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 112,
                  'char' => 45,
                ),
                1 => 
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 113,
                      'char' => 27,
                    ),
                    'name' => 'isBuffering',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 113,
                    'char' => 41,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 113,
                  'char' => 41,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 115,
              'char' => 4,
            ),
            7 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'stopBuffer',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 115,
                  'char' => 19,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 115,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 115,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 116,
                      'char' => 13,
                    ),
                    'name' => 'stop',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 116,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 117,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 119,
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
                  'value' => 'isBuffering',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 119,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 119,
                  'char' => 27,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 119,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 120,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 121,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 123,
              'char' => 5,
            ),
            9 => 
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 123,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 123,
                  'char' => 29,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 125,
              'char' => 8,
            ),
            10 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 125,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 126,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Stores cached content into the backend and stops the frontend
	 *
	 * @param string keyName
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 84,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
            'line' => 84,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
          'line' => 83,
          'last-line' => 133,
          'char' => 16,
        ),
        2 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 134,
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
                  'variable' => 'key',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 136,
                  'char' => 10,
                ),
                1 => 
                array (
                  'variable' => 'data',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 136,
                  'char' => 16,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 138,
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
                  'variable' => 'key',
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 138,
                        'char' => 18,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_prefix',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 138,
                        'char' => 27,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 138,
                      'char' => 27,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'keyName',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 138,
                      'char' => 36,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 138,
                    'char' => 36,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 138,
                  'char' => 36,
                ),
                1 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'data',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 139,
                      'char' => 16,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_data',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 139,
                      'char' => 22,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 139,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 139,
                  'char' => 22,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 141,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'isset',
                'left' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'data',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 141,
                    'char' => 16,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => 'key',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 141,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 141,
                  'char' => 22,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 141,
                'char' => 22,
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
                      'value' => 'data',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 142,
                      'char' => 14,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'key',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 142,
                      'char' => 18,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 142,
                    'char' => 19,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 143,
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
                      'property' => '_data',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'data',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 143,
                        'char' => 26,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 143,
                      'char' => 26,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 145,
                  'char' => 9,
                ),
                2 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 145,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 146,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 148,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 148,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 149,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Deletes a value from the cache by its key
	 *
	 * @param string keyName
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 135,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
            'line' => 135,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
          'line' => 134,
          'last-line' => 160,
          'char' => 16,
        ),
        3 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 161,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 161,
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
                  'variable' => 'data',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 163,
                  'char' => 11,
                ),
                1 => 
                array (
                  'variable' => 'keys',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 163,
                  'char' => 17,
                ),
                2 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 163,
                  'char' => 22,
                ),
                3 => 
                array (
                  'variable' => 'idx',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 163,
                  'char' => 27,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 165,
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
                  'variable' => 'data',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 165,
                      'char' => 19,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_data',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 165,
                      'char' => 25,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 165,
                    'char' => 25,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 165,
                  'char' => 25,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 166,
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
                    'value' => 'data',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 166,
                    'char' => 19,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 166,
                  'char' => 19,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 166,
                  'char' => 29,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 166,
                'char' => 29,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 167,
                    'char' => 13,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 168,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 170,
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
                          'value' => 'data',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 170,
                          'char' => 29,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 170,
                        'char' => 29,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 170,
                    'char' => 30,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 170,
                  'char' => 30,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 171,
              'char' => 5,
            ),
            4 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'keys',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 171,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 172,
                          'char' => 22,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 172,
                        'char' => 22,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 172,
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                              'line' => 172,
                              'char' => 40,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                            'line' => 172,
                            'char' => 40,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'prefix',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                              'line' => 172,
                              'char' => 48,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                            'line' => 172,
                            'char' => 48,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 172,
                        'char' => 50,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 172,
                      'char' => 50,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 172,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 173,
                          'char' => 15,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'idx',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 173,
                          'char' => 19,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 173,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 174,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 175,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 177,
              'char' => 8,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'keys',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 177,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 178,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 162,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
            'line' => 162,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
          'line' => 161,
          'last-line' => 185,
          'char' => 16,
        ),
        4 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 186,
                'char' => 43,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 186,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 186,
                'char' => 60,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 186,
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
                  'variable' => 'lastKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 188,
                  'char' => 14,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 190,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 190,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 190,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 190,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 191,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 191,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 191,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 191,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 192,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                            'line' => 193,
                            'char' => 23,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_prefix',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                            'line' => 193,
                            'char' => 32,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 193,
                          'char' => 32,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 193,
                          'char' => 41,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 193,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 193,
                      'char' => 41,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 194,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 196,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'lastKey',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 196,
                'char' => 14,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'isset',
                    'left' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 197,
                          'char' => 18,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_data',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 197,
                          'char' => 24,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 197,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'lastKey',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 197,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 197,
                      'char' => 34,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 197,
                    'char' => 34,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 198,
                        'char' => 16,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 199,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 200,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 202,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 202,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 203,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Checks if cache exists and it hasn\'t expired
	 *
	 * @param string|int keyName
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 187,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
            'line' => 187,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
          'line' => 186,
          'last-line' => 209,
          'char' => 16,
        ),
        5 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 210,
                'char' => 42,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 210,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 210,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 210,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 212,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'prefix',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 212,
                  'char' => 22,
                ),
                2 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 212,
                  'char' => 37,
                ),
                3 => 
                array (
                  'variable' => 'result',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 212,
                  'char' => 45,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 214,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 214,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 214,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 215,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 215,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 215,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 215,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 216,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 217,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 217,
                          'char' => 30,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 217,
                        'char' => 30,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 217,
                      'char' => 30,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 218,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 218,
                          'char' => 25,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 218,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 218,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 218,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 219,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 219,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 219,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 220,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 222,
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
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'cachedContent',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 222,
                    'char' => 49,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 222,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_data',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 222,
                        'char' => 39,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 222,
                      'char' => 39,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'lastKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 222,
                      'char' => 47,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 222,
                    'char' => 49,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 222,
                  'char' => 49,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 222,
                'char' => 49,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 223,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 224,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 226,
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
                  'value' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 226,
                  'char' => 21,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 226,
                'char' => 21,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 227,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 228,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 230,
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
                  'variable' => 'result',
                  'expr' => 
                  array (
                    'type' => 'add',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'cachedContent',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 230,
                      'char' => 30,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 230,
                      'char' => 37,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 230,
                    'char' => 37,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 230,
                  'char' => 37,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 231,
              'char' => 5,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_data',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'lastKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 231,
                      'char' => 26,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'result',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 231,
                    'char' => 36,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 231,
                  'char' => 36,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 233,
              'char' => 8,
            ),
            6 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'result',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 233,
                'char' => 16,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 234,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 210,
                'char' => 66,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 211,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
            'line' => 211,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
          'line' => 210,
          'last-line' => 240,
          'char' => 16,
        ),
        6 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 241,
                'char' => 42,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 241,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 241,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 241,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 243,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'prefix',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 243,
                  'char' => 22,
                ),
                2 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 243,
                  'char' => 37,
                ),
                3 => 
                array (
                  'variable' => 'result',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 243,
                  'char' => 45,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 245,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 245,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 245,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 246,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 246,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 246,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 246,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 247,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 248,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 248,
                          'char' => 30,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 248,
                        'char' => 30,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 248,
                      'char' => 30,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 249,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 249,
                          'char' => 25,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 249,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 249,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 249,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 250,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 250,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 250,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 251,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 253,
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
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'cachedContent',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 253,
                    'char' => 49,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 253,
                        'char' => 33,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_data',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 253,
                        'char' => 39,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 253,
                      'char' => 39,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'lastKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 253,
                      'char' => 47,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 253,
                    'char' => 49,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 253,
                  'char' => 49,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 253,
                'char' => 49,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 254,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 255,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 257,
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
                  'value' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 257,
                  'char' => 21,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 257,
                'char' => 21,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 258,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 259,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 261,
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
                  'variable' => 'result',
                  'expr' => 
                  array (
                    'type' => 'sub',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'cachedContent',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 261,
                      'char' => 30,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'value',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 261,
                      'char' => 37,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 261,
                    'char' => 37,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 261,
                  'char' => 37,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 262,
              'char' => 5,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property-array-index',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_data',
                  'index-expr' => 
                  array (
                    0 => 
                    array (
                      'type' => 'variable',
                      'value' => 'lastKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 262,
                      'char' => 26,
                    ),
                  ),
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'result',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 262,
                    'char' => 36,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 262,
                  'char' => 36,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 264,
              'char' => 8,
            ),
            6 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'result',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 264,
                'char' => 16,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 265,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 241,
                'char' => 66,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 242,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
            'line' => 242,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
          'line' => 241,
          'last-line' => 269,
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
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_data',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 272,
                    'char' => 25,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 272,
                  'char' => 25,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 273,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 273,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 274,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 271,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
            'line' => 271,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
          'line' => 270,
          'last-line' => 278,
          'char' => 16,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'serialize',
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
                      'type' => 'array',
                      'left' => 
                      array (
                        0 => 
                        array (
                          'key' => 
                          array (
                            'type' => 'string',
                            'value' => 'frontend',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                            'line' => 282,
                            'char' => 14,
                          ),
                          'value' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                              'line' => 282,
                              'char' => 21,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_frontend',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                              'line' => 283,
                              'char' => 3,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                            'line' => 283,
                            'char' => 3,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 283,
                          'char' => 3,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 283,
                      'char' => 4,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 283,
                    'char' => 4,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 283,
                'char' => 5,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 284,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Required for interface \\Serializable
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 280,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
            'line' => 280,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
          'line' => 279,
          'last-line' => 288,
          'char' => 16,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'unserialize',
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 289,
              'char' => 38,
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
                  'variable' => 'unserialized',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 291,
                  'char' => 19,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 293,
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
                  'variable' => 'unserialized',
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 293,
                          'char' => 38,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 293,
                        'char' => 38,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 293,
                    'char' => 39,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 293,
                  'char' => 39,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 294,
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
                    'value' => 'unserialized',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 294,
                    'char' => 27,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 294,
                  'char' => 27,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 294,
                  'char' => 37,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                'line' => 294,
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
                    'class' => '\\Exception',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'Unserialized data must be an array',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                          'line' => 295,
                          'char' => 61,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                        'line' => 295,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 295,
                    'char' => 62,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 296,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 298,
              'char' => 5,
            ),
            3 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_frontend',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'unserialized',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 298,
                      'char' => 37,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'frontend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                      'line' => 298,
                      'char' => 48,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                    'line' => 298,
                    'char' => 49,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
                  'line' => 298,
                  'char' => 49,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
              'line' => 299,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Required for interface \\Serializable
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
          'line' => 289,
          'last-line' => 300,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
      'line' => 46,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/memory.zep',
    'line' => 46,
    'char' => 5,
  ),
);