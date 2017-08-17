<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Cache\\Backend',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
        'line' => 22,
        'char' => 22,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
        'line' => 23,
        'char' => 24,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
        'line' => 24,
        'char' => 32,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
    'line' => 55,
    'char' => 2,
  ),
  4 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Cache\\Backend\\Xcache
 *
 * Allows to cache output fragments, PHP data and raw data using an XCache backend
 *
 *<code>
 * use Vof\\Cache\\Backend\\Xcache;
 * use Vof\\Cache\\Frontend\\Data as FrontData;
 *
 * // Cache data for 2 days
 * $frontCache = new FrontData(
 *     [
 *        "lifetime" => 172800,
 *     ]
 * );
 *
 * $cache = new Xcache(
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
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
    'line' => 56,
    'char' => 5,
  ),
  5 => 
  array (
    'type' => 'class',
    'name' => 'Xcache',
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 65,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 65,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 65,
                'char' => 74,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 65,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 67,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 67,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 67,
                  'char' => 32,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 67,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 68,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 68,
                      'char' => 20,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 69,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 71,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 71,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'statsKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 71,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 71,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 71,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 71,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 73,
                          'char' => 26,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => '',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 73,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 73,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 74,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 76,
              'char' => 8,
            ),
            2 => 
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 76,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 76,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 76,
                      'char' => 40,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 76,
                    'char' => 40,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 76,
                'char' => 41,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 77,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Cache\\Backend\\Xcache constructor
	 *
	 * @param \\Vof\\Cache\\FrontendInterface frontend
	 * @param array options
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
          'line' => 65,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 82,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 82,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 82,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 84,
                  'char' => 15,
                ),
                1 => 
                array (
                  'variable' => 'prefixedKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 84,
                  'char' => 28,
                ),
                2 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 84,
                  'char' => 43,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 86,
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
                  'variable' => 'frontend',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 86,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_frontend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 86,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 86,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 86,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 87,
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
                        'value' => '_PHCX',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 87,
                        'char' => 29,
                      ),
                      'right' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 87,
                          'char' => 36,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 87,
                          'char' => 45,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 87,
                        'char' => 45,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 87,
                      'char' => 45,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'keyName',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 87,
                      'char' => 54,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 87,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 87,
                  'char' => 54,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 88,
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
                  'property' => '_lastKey',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'prefixedKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 88,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 88,
                  'char' => 35,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 89,
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
                  'variable' => 'cachedContent',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'xcache_get',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'prefixedKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 89,
                          'char' => 45,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 89,
                        'char' => 45,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 89,
                    'char' => 46,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 89,
                  'char' => 46,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 91,
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
                  'value' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 91,
                  'char' => 21,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 91,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 92,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 93,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 95,
              'char' => 4,
            ),
            6 => 
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 95,
                      'char' => 30,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 95,
                    'char' => 30,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 95,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 96,
                    'char' => 24,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 97,
                  'char' => 3,
                ),
              ),
              'else_statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'variable',
                      'value' => 'frontend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 98,
                      'char' => 20,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 98,
                          'char' => 48,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 98,
                        'char' => 48,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 98,
                    'char' => 49,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 99,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 100,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 82,
                'char' => 66,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 83,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
            'line' => 83,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
          'line' => 82,
          'last-line' => 109,
          'char' => 16,
        ),
        2 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 110,
                'char' => 37,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 110,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 110,
                'char' => 53,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 110,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 110,
                'char' => 70,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 110,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 110,
                'char' => 97,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 110,
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
                  'variable' => 'lastKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 112,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'frontend',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 112,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 112,
                  'char' => 39,
                ),
                3 => 
                array (
                  'variable' => 'preparedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 112,
                  'char' => 56,
                ),
                4 => 
                array (
                  'variable' => 'tmp',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 112,
                  'char' => 61,
                ),
                5 => 
                array (
                  'variable' => 'tt1',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 112,
                  'char' => 66,
                ),
                6 => 
                array (
                  'variable' => 'success',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 112,
                  'char' => 75,
                ),
                7 => 
                array (
                  'variable' => 'isBuffering',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 112,
                  'char' => 88,
                ),
                8 => 
                array (
                  'variable' => 'options',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 113,
                  'char' => 11,
                ),
                9 => 
                array (
                  'variable' => 'keys',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 113,
                  'char' => 17,
                ),
                10 => 
                array (
                  'variable' => 'specialKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 113,
                  'char' => 29,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 115,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 115,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 115,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 115,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 116,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 116,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 116,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 116,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 117,
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
                            'value' => '_PHCX',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 118,
                            'char' => 26,
                          ),
                          'right' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 118,
                              'char' => 33,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_prefix',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 118,
                              'char' => 42,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 118,
                            'char' => 42,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 118,
                          'char' => 42,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 118,
                          'char' => 51,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 118,
                        'char' => 51,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 118,
                      'char' => 51,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 119,
                        'char' => 29,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 119,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 120,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 122,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 122,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 122,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 123,
                          'char' => 53,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 123,
                        'char' => 53,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 123,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 124,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 126,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 126,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_frontend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 126,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 126,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 126,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 127,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 127,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 127,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 127,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 128,
                          'char' => 33,
                        ),
                        'name' => 'getContent',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 128,
                        'char' => 46,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 128,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 129,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 130,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 130,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 131,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 133,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 133,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 133,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 133,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 133,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 134,
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 134,
                              'char' => 61,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 134,
                            'char' => 61,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 134,
                        'char' => 62,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 134,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 135,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 136,
                        'char' => 39,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 136,
                      'char' => 39,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 137,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 142,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 142,
                  'char' => 17,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 142,
                  'char' => 24,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 142,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 143,
                          'char' => 19,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastLifetime',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 143,
                          'char' => 33,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 143,
                        'char' => 33,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 143,
                      'char' => 33,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 144,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 144,
                      'char' => 12,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 144,
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
                          'variable' => 'tt1',
                          'expr' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'frontend',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 145,
                              'char' => 24,
                            ),
                            'name' => 'getLifetime',
                            'call-type' => 1,
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 145,
                            'char' => 38,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 145,
                          'char' => 38,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 146,
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
                          'variable' => 'tt1',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'tmp',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 147,
                            'char' => 18,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 147,
                          'char' => 18,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 148,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 149,
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
                      'variable' => 'tt1',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'lifetime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 150,
                        'char' => 22,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 150,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 151,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 153,
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
                    'name' => 'xcache_set',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 153,
                          'char' => 35,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 153,
                        'char' => 35,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'preparedContent',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 153,
                          'char' => 52,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 153,
                        'char' => 52,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'tt1',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 153,
                          'char' => 57,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 153,
                        'char' => 57,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 153,
                    'char' => 58,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 153,
                  'char' => 58,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 155,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 155,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 155,
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
                          'value' => 'Failed storing the data in xcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 156,
                          'char' => 59,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 156,
                        'char' => 59,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 156,
                    'char' => 60,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 157,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 159,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 159,
                      'char' => 30,
                    ),
                    'name' => 'isBuffering',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 159,
                    'char' => 44,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 159,
                  'char' => 44,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 161,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 161,
                  'char' => 19,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 161,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 161,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 162,
                      'char' => 13,
                    ),
                    'name' => 'stop',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 162,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 163,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 165,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 165,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 165,
                  'char' => 27,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 165,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 166,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 167,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 169,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 169,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 169,
                  'char' => 29,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 171,
              'char' => 4,
            ),
            13 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'success',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 171,
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
                      'variable' => 'options',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 172,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 172,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 172,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 172,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 174,
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
                      'type' => 'fetch',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'specialKey',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 174,
                        'char' => 53,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 174,
                            'char' => 31,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_options',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 174,
                            'char' => 40,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 174,
                          'char' => 40,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'statsKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 174,
                          'char' => 51,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 174,
                        'char' => 53,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 174,
                      'char' => 53,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 174,
                    'char' => 53,
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 175,
                              'char' => 62,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 175,
                            'char' => 62,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 175,
                        'char' => 63,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 176,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 178,
                  'char' => 5,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not-equals',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'specialKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 178,
                      'char' => 19,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => '',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 178,
                      'char' => 24,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 178,
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
                          'variable' => 'keys',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'xcache_get',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'specialKey',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                                  'line' => 183,
                                  'char' => 37,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                                'line' => 183,
                                'char' => 37,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 183,
                            'char' => 38,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 183,
                          'char' => 38,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 184,
                      'char' => 6,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 184,
                            'char' => 21,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 184,
                          'char' => 21,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'array',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 184,
                          'char' => 31,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 184,
                        'char' => 31,
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
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                                'line' => 185,
                                'char' => 19,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 185,
                              'char' => 19,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 186,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 188,
                      'char' => 7,
                    ),
                    2 => 
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 188,
                              'char' => 21,
                            ),
                          ),
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'tt1',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 188,
                            'char' => 28,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 188,
                          'char' => 28,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 189,
                      'char' => 14,
                    ),
                    3 => 
                    array (
                      'type' => 'fcall',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'xcache_set',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'specialKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 189,
                              'char' => 26,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 189,
                            'char' => 26,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'keys',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 189,
                              'char' => 32,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 189,
                            'char' => 32,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 189,
                        'char' => 33,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 190,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 191,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 193,
              'char' => 8,
            ),
            14 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'success',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 193,
                'char' => 17,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 194,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 111,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
            'line' => 111,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
          'line' => 110,
          'last-line' => 201,
          'char' => 16,
        ),
        3 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 202,
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
                  'variable' => 'prefixedKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 204,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'specialKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 204,
                  'char' => 30,
                ),
                2 => 
                array (
                  'variable' => 'keys',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 204,
                  'char' => 36,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 206,
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
                        'value' => '_PHCX',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 206,
                        'char' => 29,
                      ),
                      'right' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 206,
                          'char' => 36,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 206,
                          'char' => 45,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 206,
                        'char' => 45,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 206,
                      'char' => 45,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'keyName',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 206,
                      'char' => 54,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 206,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 206,
                  'char' => 54,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 208,
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
                    'value' => 'specialKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 208,
                    'char' => 52,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 208,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 208,
                        'char' => 39,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 208,
                      'char' => 39,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'statsKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 208,
                      'char' => 50,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 208,
                    'char' => 52,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 208,
                  'char' => 52,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 208,
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
                          'value' => 'Unexpected inconsistency in options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 209,
                          'char' => 61,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 209,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 209,
                    'char' => 62,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 210,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 212,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'specialKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 212,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => '',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 212,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
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
                      'variable' => 'keys',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'xcache_get',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'specialKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 213,
                              'char' => 36,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 213,
                            'char' => 36,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 213,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 213,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 214,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 214,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 214,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'array',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 214,
                      'char' => 30,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 214,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 215,
                            'char' => 18,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 215,
                          'char' => 18,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 216,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 218,
                  'char' => 8,
                ),
                2 => 
                array (
                  'type' => 'unset',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'keys',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 218,
                      'char' => 14,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'prefixedKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 218,
                      'char' => 26,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 218,
                    'char' => 27,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 220,
                  'char' => 13,
                ),
                3 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'xcache_set',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'specialKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 220,
                          'char' => 25,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 220,
                        'char' => 25,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keys',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 220,
                          'char' => 31,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 220,
                        'char' => 31,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 220,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 221,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 222,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Deletes a value from the cache by its key
	 *
	 * @param int|string keyName
	 * @return boolean
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
          'line' => 202,
          'last-line' => 233,
          'char' => 16,
        ),
        4 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 234,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 234,
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
                  'variable' => 'options',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 236,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'prefixed',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 236,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'specialKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 236,
                  'char' => 36,
                ),
                3 => 
                array (
                  'variable' => 'keys',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 236,
                  'char' => 42,
                ),
                4 => 
                array (
                  'variable' => 'retval',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 236,
                  'char' => 50,
                ),
                5 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 236,
                  'char' => 55,
                ),
                6 => 
                array (
                  'variable' => 'realKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 236,
                  'char' => 64,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 238,
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
                  'value' => 'prefix',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 238,
                  'char' => 14,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 238,
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
                      'variable' => 'prefixed',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => '_PHCX',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 239,
                        'char' => 26,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 239,
                      'char' => 26,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 240,
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
                      'variable' => 'prefixed',
                      'expr' => 
                      array (
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'string',
                          'value' => '_PHCX',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 241,
                          'char' => 27,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 241,
                          'char' => 35,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 241,
                        'char' => 35,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 241,
                      'char' => 35,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 242,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 244,
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
                  'variable' => 'options',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 244,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 244,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 244,
                    'char' => 31,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 244,
                  'char' => 31,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 246,
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
                    'value' => 'specialKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 246,
                    'char' => 52,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 246,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 246,
                        'char' => 39,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 246,
                      'char' => 39,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'statsKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 246,
                      'char' => 50,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 246,
                    'char' => 52,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 246,
                  'char' => 52,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 246,
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
                          'value' => 'Unexpected inconsistency in options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 247,
                          'char' => 61,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 247,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 247,
                    'char' => 62,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 248,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 250,
              'char' => 4,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'specialKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 250,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => '',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 250,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 250,
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
                          'value' => 'Cached keys need to be enabled to use this function (options[\'statsKey\'] == \'_PHCX\')!',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 251,
                          'char' => 111,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 251,
                        'char' => 111,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 251,
                    'char' => 112,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 252,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 258,
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
                  'variable' => 'keys',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'xcache_get',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'specialKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 258,
                          'char' => 35,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 258,
                        'char' => 35,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 258,
                    'char' => 36,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 258,
                  'char' => 36,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 259,
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
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'keys',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 259,
                    'char' => 19,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 259,
                  'char' => 19,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 259,
                  'char' => 29,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 259,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 260,
                    'char' => 13,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 261,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 263,
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
                  'variable' => 'retval',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 263,
                    'char' => 18,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 263,
                  'char' => 18,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 265,
              'char' => 5,
            ),
            8 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'keys',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 265,
                'char' => 22,
              ),
              'key' => 'key',
              'value' => '_',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 266,
                          'char' => 22,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 266,
                        'char' => 22,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'prefixed',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 266,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 266,
                        'char' => 32,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 266,
                    'char' => 34,
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
                          'variable' => 'realKey',
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
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                                  'line' => 267,
                                  'char' => 29,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                                'line' => 267,
                                'char' => 29,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'int',
                                  'value' => '5',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                                  'line' => 267,
                                  'char' => 32,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                                'line' => 267,
                                'char' => 32,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 267,
                            'char' => 33,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 267,
                          'char' => 33,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 268,
                      'char' => 7,
                    ),
                    1 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable-append',
                          'operator' => 'assign',
                          'variable' => 'retval',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'realKey',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 268,
                            'char' => 27,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 268,
                          'char' => 27,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 269,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 270,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 272,
              'char' => 8,
            ),
            9 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'retval',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 272,
                'char' => 16,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 273,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 235,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
            'line' => 235,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
          'line' => 234,
          'last-line' => 280,
          'char' => 16,
        ),
        5 => 
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 281,
                'char' => 43,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 281,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 281,
                'char' => 60,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 281,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 283,
                  'char' => 14,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 285,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 285,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 285,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 286,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 286,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 286,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 286,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 287,
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
                            'value' => '_PHCX',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 288,
                            'char' => 26,
                          ),
                          'right' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 288,
                              'char' => 33,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_prefix',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 288,
                              'char' => 42,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 288,
                            'char' => 42,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 288,
                          'char' => 42,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 288,
                          'char' => 51,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 288,
                        'char' => 51,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 288,
                      'char' => 51,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 289,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 291,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'lastKey',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 291,
                'char' => 14,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'xcache_isset',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 292,
                          'char' => 31,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 292,
                        'char' => 31,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 292,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 293,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 294,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 294,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 295,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 282,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
            'line' => 282,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
          'line' => 281,
          'last-line' => 301,
          'char' => 16,
        ),
        6 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 302,
              'char' => 39,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 302,
                'char' => 54,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 302,
              'char' => 54,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 304,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'newVal',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 304,
                  'char' => 22,
                ),
                2 => 
                array (
                  'variable' => 'origVal',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 304,
                  'char' => 31,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 306,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 306,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 306,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 307,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 307,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 307,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 307,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 308,
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
                            'value' => '_PHCX',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 309,
                            'char' => 26,
                          ),
                          'right' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 309,
                              'char' => 33,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_prefix',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 309,
                              'char' => 42,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 309,
                            'char' => 42,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 309,
                          'char' => 42,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 309,
                          'char' => 51,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 309,
                        'char' => 51,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 309,
                      'char' => 51,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 310,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 312,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 312,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 312,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 313,
                          'char' => 53,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 313,
                        'char' => 53,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 313,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 314,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 316,
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
                      'value' => 'xcache_inc',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 316,
                      'char' => 34,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 316,
                    'char' => 34,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 316,
                'char' => 36,
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
                      'variable' => 'newVal',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'xcache_inc',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'lastKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 317,
                              'char' => 35,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 317,
                            'char' => 35,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 317,
                              'char' => 42,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 317,
                            'char' => 42,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 317,
                        'char' => 43,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 317,
                      'char' => 43,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 318,
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
                      'variable' => 'origVal',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'xcache_get',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'lastKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 319,
                              'char' => 36,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 319,
                            'char' => 36,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 319,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 319,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 320,
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
                      'variable' => 'newVal',
                      'expr' => 
                      array (
                        'type' => 'sub',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'origVal',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 320,
                          'char' => 25,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 320,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 320,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 320,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 321,
                  'char' => 13,
                ),
                2 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'xcache_set',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 321,
                          'char' => 22,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 321,
                        'char' => 22,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'newVal',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 321,
                          'char' => 30,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 321,
                        'char' => 30,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 321,
                    'char' => 31,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 322,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 324,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'newVal',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 324,
                'char' => 16,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 325,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	* Atomic increment of a given key, by number $value
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 303,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
            'line' => 303,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
          'line' => 302,
          'last-line' => 331,
          'char' => 16,
        ),
        7 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 332,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 332,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 332,
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
                  'variable' => 'lastKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 334,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'newVal',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 334,
                  'char' => 22,
                ),
                2 => 
                array (
                  'variable' => 'origVal',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 334,
                  'char' => 31,
                ),
                3 => 
                array (
                  'variable' => 'success',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 334,
                  'char' => 40,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 336,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 336,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 336,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 337,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 337,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 337,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 337,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 338,
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
                            'value' => '_PHCX',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 339,
                            'char' => 26,
                          ),
                          'right' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 339,
                              'char' => 33,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_prefix',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 339,
                              'char' => 42,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 339,
                            'char' => 42,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 339,
                          'char' => 42,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keyName',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 339,
                          'char' => 51,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 339,
                        'char' => 51,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 339,
                      'char' => 51,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 340,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 342,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 342,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 342,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 343,
                          'char' => 53,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 343,
                        'char' => 53,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 343,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 344,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 346,
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
                      'value' => 'xcache_dec',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 346,
                      'char' => 34,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 346,
                    'char' => 34,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 346,
                'char' => 36,
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
                      'variable' => 'newVal',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'xcache_dec',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'lastKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 347,
                              'char' => 35,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 347,
                            'char' => 35,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'value',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 347,
                              'char' => 42,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 347,
                            'char' => 42,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 347,
                        'char' => 43,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 347,
                      'char' => 43,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 348,
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
                      'variable' => 'origVal',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'xcache_get',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'lastKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 349,
                              'char' => 36,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 349,
                            'char' => 36,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 349,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 349,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 350,
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
                      'variable' => 'newVal',
                      'expr' => 
                      array (
                        'type' => 'sub',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'origVal',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 350,
                          'char' => 25,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'value',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 350,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 350,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 350,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 351,
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
                      'variable' => 'success',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'xcache_set',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'lastKey',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 351,
                              'char' => 36,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 351,
                            'char' => 36,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'newVal',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 351,
                              'char' => 44,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 351,
                            'char' => 44,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 351,
                        'char' => 45,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 351,
                      'char' => 45,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 352,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 354,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'newVal',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 354,
                'char' => 16,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 355,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Atomic decrement of a given key, by number $value
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 333,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
            'line' => 333,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
          'line' => 332,
          'last-line' => 359,
          'char' => 16,
        ),
        8 => 
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
                  'variable' => 'options',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 362,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'specialKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 362,
                  'char' => 26,
                ),
                2 => 
                array (
                  'variable' => 'keys',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 362,
                  'char' => 32,
                ),
                3 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 362,
                  'char' => 37,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
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
                  'variable' => 'options',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 364,
                      'char' => 22,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 364,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 364,
                    'char' => 31,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 364,
                  'char' => 31,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 366,
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
                    'value' => 'specialKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 366,
                    'char' => 52,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 366,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 366,
                        'char' => 39,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 366,
                      'char' => 39,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'statsKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 366,
                      'char' => 50,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 366,
                    'char' => 52,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 366,
                  'char' => 52,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 366,
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
                          'value' => 'Unexpected inconsistency in options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 367,
                          'char' => 61,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 367,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 367,
                    'char' => 62,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 368,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 370,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'specialKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 370,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => '',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 370,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 370,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 371,
                          'char' => 111,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 371,
                        'char' => 111,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 371,
                    'char' => 112,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 372,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 374,
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
                  'variable' => 'keys',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'xcache_get',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'specialKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 374,
                          'char' => 35,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 374,
                        'char' => 35,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 374,
                    'char' => 36,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 374,
                  'char' => 36,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 376,
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
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'keys',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 376,
                    'char' => 19,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 376,
                  'char' => 19,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 376,
                  'char' => 29,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 376,
                'char' => 29,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'for',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'keys',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 377,
                    'char' => 23,
                  ),
                  'key' => 'key',
                  'value' => '_',
                  'reverse' => 0,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 378,
                          'char' => 15,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 378,
                          'char' => 19,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 378,
                        'char' => 20,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 379,
                      'char' => 16,
                    ),
                    1 => 
                    array (
                      'type' => 'fcall',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'xcache_unset',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'key',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                              'line' => 379,
                              'char' => 21,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                            'line' => 379,
                            'char' => 21,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 379,
                        'char' => 22,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                      'line' => 380,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 381,
                  'char' => 13,
                ),
                1 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'xcache_set',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'specialKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 381,
                          'char' => 25,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 381,
                        'char' => 25,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'keys',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                          'line' => 381,
                          'char' => 31,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                        'line' => 381,
                        'char' => 31,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                    'line' => 381,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                  'line' => 382,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 384,
              'char' => 8,
            ),
            6 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 384,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
              'line' => 385,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
                'line' => 361,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
            'line' => 361,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
          'line' => 360,
          'last-line' => 386,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
      'line' => 56,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/xcache.zep',
    'line' => 56,
    'char' => 5,
  ),
);