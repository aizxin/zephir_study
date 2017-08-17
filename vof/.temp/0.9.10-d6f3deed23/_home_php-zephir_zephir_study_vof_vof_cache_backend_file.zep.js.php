<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Cache\\Backend',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
        'line' => 22,
        'char' => 24,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
        'line' => 23,
        'char' => 22,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
        'line' => 24,
        'char' => 32,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
    'line' => 61,
    'char' => 2,
  ),
  4 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Cache\\Backend\\File
 *
 * Allows to cache output fragments using a file backend
 *
 *<code>
 * use Vof\\Cache\\Backend\\File;
 * use Vof\\Cache\\Frontend\\Output as FrontOutput;
 *
 * // Cache the file for 2 days
 * $frontendOptions = [
 *     "lifetime" => 172800,
 * ];
 *
 * // Create an output cache
 * $frontCache = FrontOutput($frontOptions);
 *
 * // Set the cache directory
 * $backendOptions = [
 *     "cacheDir" => "../app/cache/",
 * ];
 *
 * // Create the File backend
 * $cache = new File($frontCache, $backendOptions);
 *
 * $content = $cache->start("my-cache");
 *
 * if ($content === null) {
 *     echo "<h1>", time(), "</h1>";
 *
 *     $cache->save();
 * } else {
 *     echo $content;
 * }
 *</code>
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
    'line' => 62,
    'char' => 5,
  ),
  5 => 
  array (
    'type' => 'class',
    'name' => 'File',
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
            0 => 'private',
          ),
          'type' => 'property',
          'name' => '_useSafeKey',
          'default' => 
          array (
            'type' => 'bool',
            'value' => 'false',
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
            'line' => 69,
            'char' => 29,
          ),
          'docblock' => '**
	 * Default to false for backwards compatibility
	 *
	 * @var boolean
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
          'line' => 73,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 74,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 74,
              'char' => 58,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'options',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 74,
              'char' => 73,
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
                  'variable' => 'prefix',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 76,
                  'char' => 13,
                ),
                1 => 
                array (
                  'variable' => 'safekey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 76,
                  'char' => 22,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 78,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'cacheDir',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 78,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 78,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 78,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 78,
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
                          'value' => 'Cache directory must be specified with the option cacheDir',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 79,
                          'char' => 84,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 79,
                        'char' => 84,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 79,
                    'char' => 85,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 80,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 82,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'safekey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 82,
                  'char' => 40,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'options',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 82,
                    'char' => 28,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'safekey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 82,
                    'char' => 38,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 82,
                  'char' => 40,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 82,
                'char' => 40,
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
                        'value' => 'safekey',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 83,
                        'char' => 24,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 83,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'boolean',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 83,
                      'char' => 36,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 83,
                    'char' => 36,
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
                              'value' => 'safekey option should be a boolean.',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 84,
                              'char' => 62,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 84,
                            'char' => 62,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 84,
                        'char' => 63,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 85,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 87,
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
                      'property' => '_useSafeKey',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'safekey',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 87,
                        'char' => 35,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 87,
                      'char' => 35,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 88,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 91,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'prefix',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 91,
                  'char' => 38,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'options',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 91,
                    'char' => 27,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'prefix',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 91,
                    'char' => 36,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 91,
                  'char' => 38,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 91,
                'char' => 38,
              ),
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
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 92,
                        'char' => 12,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_useSafeKey',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 92,
                        'char' => 26,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 92,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'preg_match',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'string',
                            'value' => '/[^a-zA-Z0-9_.-]+/',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 92,
                            'char' => 59,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 92,
                          'char' => 59,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'prefix',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 92,
                            'char' => 67,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 92,
                          'char' => 67,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 92,
                      'char' => 69,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 92,
                    'char' => 69,
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
                              'value' => 'FileCache prefix should only use alphanumeric characters.',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 93,
                              'char' => 84,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 93,
                            'char' => 84,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 93,
                        'char' => 85,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 94,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 95,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 97,
              'char' => 8,
            ),
            4 => 
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 97,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 97,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 97,
                      'char' => 40,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 97,
                    'char' => 40,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 97,
                'char' => 41,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 98,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Cache\\Backend\\File constructor
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
          'line' => 74,
          'last-line' => 102,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 103,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 103,
                'char' => 57,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 103,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 105,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'cacheDir',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 105,
                  'char' => 28,
                ),
                2 => 
                array (
                  'variable' => 'cacheFile',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 105,
                  'char' => 39,
                ),
                3 => 
                array (
                  'variable' => 'frontend',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 105,
                  'char' => 49,
                ),
                4 => 
                array (
                  'variable' => 'lastLifetime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 105,
                  'char' => 63,
                ),
                5 => 
                array (
                  'variable' => 'ttl',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 105,
                  'char' => 68,
                ),
                6 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 105,
                  'char' => 83,
                ),
                7 => 
                array (
                  'variable' => 'ret',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 105,
                  'char' => 88,
                ),
                8 => 
                array (
                  'variable' => 'modifiedTime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 105,
                  'char' => 102,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 107,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 107,
                        'char' => 27,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_prefix',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 107,
                        'char' => 36,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 107,
                      'char' => 36,
                    ),
                    'right' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 107,
                        'char' => 43,
                      ),
                      'name' => 'getKey',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'keyName',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 107,
                            'char' => 58,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 107,
                          'char' => 58,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 107,
                      'char' => 59,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 107,
                    'char' => 59,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 107,
                  'char' => 59,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 108,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 108,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 108,
                  'char' => 35,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 110,
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
                    'value' => 'cacheDir',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 110,
                    'char' => 50,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 110,
                        'char' => 28,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 110,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 110,
                      'char' => 37,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'cacheDir',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 110,
                      'char' => 48,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 110,
                    'char' => 50,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 110,
                  'char' => 50,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 110,
                'char' => 50,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 111,
                          'char' => 61,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 111,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 111,
                    'char' => 62,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 112,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 114,
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
                  'variable' => 'cacheFile',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'cacheDir',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 114,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'prefixedKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 114,
                      'char' => 41,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 114,
                    'char' => 41,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 114,
                  'char' => 41,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 116,
              'char' => 4,
            ),
            5 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'fcall',
                  'name' => 'file_exists',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'variable',
                        'value' => 'cacheFile',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 116,
                        'char' => 27,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 116,
                      'char' => 27,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 116,
                  'char' => 31,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 116,
                  'char' => 38,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 116,
                'char' => 38,
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
                      'variable' => 'frontend',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 118,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_frontend',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 118,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 118,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 118,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 123,
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
                      'value' => 'lifetime',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 123,
                      'char' => 17,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 123,
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
                          'variable' => 'lastLifetime',
                          'expr' => 
                          array (
                            'type' => 'property-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'this',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 124,
                              'char' => 29,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_lastLifetime',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 124,
                              'char' => 43,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 124,
                            'char' => 43,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 124,
                          'char' => 43,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 125,
                      'char' => 6,
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
                          'value' => 'lastLifetime',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 125,
                          'char' => 22,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 125,
                        'char' => 22,
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
                                'type' => 'cast',
                                'left' => 'int',
                                'right' => 
                                array (
                                  'type' => 'mcall',
                                  'variable' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'frontend',
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 126,
                                    'char' => 31,
                                  ),
                                  'name' => 'getLifeTime',
                                  'call-type' => 1,
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 126,
                                  'char' => 45,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 126,
                                'char' => 45,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 126,
                              'char' => 45,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 127,
                          'char' => 5,
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
                                'type' => 'cast',
                                'left' => 'int',
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'lastLifetime',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 128,
                                  'char' => 34,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 128,
                                'char' => 34,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 128,
                              'char' => 34,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 129,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 130,
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
                            'type' => 'cast',
                            'left' => 'int',
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'lifetime',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 131,
                              'char' => 29,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 131,
                            'char' => 29,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 131,
                          'char' => 29,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 132,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 134,
                  'char' => 17,
                ),
                2 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'clearstatcache',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'bool',
                          'value' => 'true',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 134,
                          'char' => 23,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 134,
                        'char' => 23,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'cacheFile',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 134,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 134,
                        'char' => 34,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 134,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 135,
                  'char' => 6,
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
                      'variable' => 'modifiedTime',
                      'expr' => 
                      array (
                        'type' => 'cast',
                        'left' => 'int',
                        'right' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'filemtime',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'cacheFile',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 135,
                                'char' => 48,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 135,
                              'char' => 48,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 135,
                          'char' => 49,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 135,
                        'char' => 49,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 135,
                      'char' => 49,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 141,
                  'char' => 5,
                ),
                4 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'greater',
                    'left' => 
                    array (
                      'type' => 'add',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'modifiedTime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 141,
                        'char' => 20,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'ttl',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 141,
                        'char' => 26,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 141,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'time',
                      'call-type' => 1,
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 141,
                      'char' => 35,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 141,
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
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'cachedContent',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'file_get_contents',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'cacheFile',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 146,
                                  'char' => 52,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 146,
                                'char' => 52,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 146,
                            'char' => 53,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 146,
                          'char' => 53,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 147,
                      'char' => 6,
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
                          'value' => 'cachedContent',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 147,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'bool',
                          'value' => 'false',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 147,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 147,
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
                                  'type' => 'concat',
                                  'left' => 
                                  array (
                                    'type' => 'concat',
                                    'left' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'Cache file ',
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                      'line' => 148,
                                      'char' => 39,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'cacheFile',
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                      'line' => 148,
                                      'char' => 50,
                                    ),
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 148,
                                    'char' => 50,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => ' could not be opened',
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 148,
                                    'char' => 74,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 148,
                                  'char' => 74,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 148,
                                'char' => 74,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 148,
                            'char' => 75,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 149,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 151,
                      'char' => 6,
                    ),
                    2 => 
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 151,
                              'char' => 32,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 151,
                            'char' => 32,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 151,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 152,
                            'char' => 26,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 153,
                          'char' => 5,
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
                              'variable' => 'ret',
                              'expr' => 
                              array (
                                'type' => 'mcall',
                                'variable' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'frontend',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 157,
                                  'char' => 25,
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
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                      'line' => 157,
                                      'char' => 53,
                                    ),
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 157,
                                    'char' => 53,
                                  ),
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 157,
                                'char' => 54,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 157,
                              'char' => 54,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 158,
                          'char' => 11,
                        ),
                        1 => 
                        array (
                          'type' => 'return',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ret',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 158,
                            'char' => 16,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 159,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 160,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 161,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 163,
              'char' => 8,
            ),
            6 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 163,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 164,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 103,
                'char' => 66,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 104,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
            'line' => 104,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
          'line' => 103,
          'last-line' => 173,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 174,
                'char' => 41,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 174,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 174,
                'char' => 61,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 174,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 174,
                'char' => 78,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 174,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 174,
                'char' => 105,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 174,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 176,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'frontend',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 176,
                  'char' => 24,
                ),
                2 => 
                array (
                  'variable' => 'cacheDir',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 176,
                  'char' => 34,
                ),
                3 => 
                array (
                  'variable' => 'isBuffering',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 176,
                  'char' => 47,
                ),
                4 => 
                array (
                  'variable' => 'cacheFile',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 176,
                  'char' => 58,
                ),
                5 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 176,
                  'char' => 73,
                ),
                6 => 
                array (
                  'variable' => 'preparedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 176,
                  'char' => 90,
                ),
                7 => 
                array (
                  'variable' => 'status',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 176,
                  'char' => 98,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 178,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 178,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 178,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 178,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 179,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 179,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 179,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 179,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 180,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 181,
                            'char' => 23,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_prefix',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 181,
                            'char' => 32,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 181,
                          'char' => 32,
                        ),
                        'right' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 181,
                            'char' => 39,
                          ),
                          'name' => 'getKey',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'keyName',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 181,
                                'char' => 54,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 181,
                              'char' => 54,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 181,
                          'char' => 55,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 181,
                        'char' => 55,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 181,
                      'char' => 55,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 182,
                        'char' => 29,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 182,
                      'char' => 29,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 183,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 185,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 185,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 185,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 186,
                          'char' => 53,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 186,
                        'char' => 53,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 186,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 187,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 189,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 189,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_frontend',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 189,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 189,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 189,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 191,
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
                    'value' => 'cacheDir',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 191,
                    'char' => 50,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 191,
                        'char' => 28,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 191,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 191,
                      'char' => 37,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'cacheDir',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 191,
                      'char' => 48,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 191,
                    'char' => 50,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 191,
                  'char' => 50,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 191,
                'char' => 50,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 192,
                          'char' => 61,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 192,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 192,
                    'char' => 62,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 193,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 195,
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
                  'variable' => 'cacheFile',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'cacheDir',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 195,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'lastKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 195,
                      'char' => 37,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 195,
                    'char' => 37,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 195,
                  'char' => 37,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 197,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 197,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 197,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 197,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 198,
                          'char' => 33,
                        ),
                        'name' => 'getContent',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 198,
                        'char' => 46,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 198,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 199,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 200,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 200,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 201,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 203,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 203,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 203,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 203,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 203,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 204,
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 204,
                              'char' => 61,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 204,
                            'char' => 61,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 204,
                        'char' => 62,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 204,
                      'char' => 62,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 205,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 206,
                        'char' => 39,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 206,
                      'char' => 39,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 207,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 212,
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
                  'variable' => 'status',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'file_put_contents',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'cacheFile',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 212,
                          'char' => 43,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 212,
                        'char' => 43,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'preparedContent',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 212,
                          'char' => 60,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 212,
                        'char' => 60,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 212,
                    'char' => 61,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 212,
                  'char' => 61,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 214,
              'char' => 4,
            ),
            9 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'status',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 214,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'false',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 214,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 214,
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
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'string',
                              'value' => 'Cache file ',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 215,
                              'char' => 37,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'cacheFile',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 215,
                              'char' => 49,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 215,
                            'char' => 49,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => ' could not be written',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 215,
                            'char' => 74,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 215,
                          'char' => 74,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 215,
                        'char' => 74,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 215,
                    'char' => 75,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 216,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 218,
              'char' => 5,
            ),
            10 => 
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 218,
                      'char' => 30,
                    ),
                    'name' => 'isBuffering',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 218,
                    'char' => 44,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 218,
                  'char' => 44,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 220,
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
                  'value' => 'stopBuffer',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 220,
                  'char' => 19,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 220,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 220,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 221,
                      'char' => 13,
                    ),
                    'name' => 'stop',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 221,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 222,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 224,
              'char' => 4,
            ),
            12 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'isBuffering',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 224,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 224,
                  'char' => 27,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 224,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 225,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 226,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 228,
              'char' => 5,
            ),
            13 => 
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 228,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 228,
                  'char' => 29,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 230,
              'char' => 8,
            ),
            14 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'not-identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'status',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 230,
                  'char' => 19,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'false',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 230,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 230,
                'char' => 26,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 231,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 175,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
            'line' => 175,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
          'line' => 174,
          'last-line' => 237,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 238,
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
                  'variable' => 'cacheFile',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 240,
                  'char' => 16,
                ),
                1 => 
                array (
                  'variable' => 'cacheDir',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 240,
                  'char' => 26,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 242,
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
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'cacheDir',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 242,
                    'char' => 50,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 242,
                        'char' => 28,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 242,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 242,
                      'char' => 37,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'cacheDir',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 242,
                      'char' => 48,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 242,
                    'char' => 50,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 242,
                  'char' => 50,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 242,
                'char' => 50,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 243,
                          'char' => 61,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 243,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 243,
                    'char' => 62,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 244,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 246,
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
                  'variable' => 'cacheFile',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'concat',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'cacheDir',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 246,
                        'char' => 28,
                      ),
                      'right' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 246,
                          'char' => 35,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 246,
                          'char' => 44,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 246,
                        'char' => 44,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 246,
                      'char' => 44,
                    ),
                    'right' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 246,
                        'char' => 51,
                      ),
                      'name' => 'getKey',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'keyName',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 246,
                            'char' => 66,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 246,
                          'char' => 66,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 246,
                      'char' => 67,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 246,
                    'char' => 67,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 246,
                  'char' => 67,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 247,
              'char' => 4,
            ),
            3 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'file_exists',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'cacheFile',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 247,
                      'char' => 27,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 247,
                    'char' => 27,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 247,
                'char' => 29,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'unlink',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'cacheFile',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 248,
                          'char' => 27,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 248,
                        'char' => 27,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 248,
                    'char' => 28,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 249,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 251,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 251,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 252,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Deletes a value from the cache by its key
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
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 239,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
            'line' => 239,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
          'line' => 238,
          'last-line' => 263,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 264,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 264,
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
                  'variable' => 'item',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 266,
                  'char' => 11,
                ),
                1 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 266,
                  'char' => 16,
                ),
                2 => 
                array (
                  'variable' => 'cacheDir',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 266,
                  'char' => 26,
                ),
                3 => 
                array (
                  'variable' => 'prefixedKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 266,
                  'char' => 39,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 267,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 267,
                    'char' => 18,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 267,
                  'char' => 18,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 269,
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
                    'value' => 'cacheDir',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 269,
                    'char' => 50,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 269,
                        'char' => 28,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 269,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 269,
                      'char' => 37,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'cacheDir',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 269,
                      'char' => 48,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 269,
                    'char' => 50,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 269,
                  'char' => 50,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 269,
                'char' => 50,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 270,
                          'char' => 61,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 270,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 270,
                    'char' => 62,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 271,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 273,
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
                  'type' => 'empty',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'prefix',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 273,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 273,
                  'char' => 20,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 273,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 274,
                            'char' => 27,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => '_prefix',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 274,
                            'char' => 36,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 274,
                          'char' => 36,
                        ),
                        'right' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 274,
                            'char' => 43,
                          ),
                          'name' => 'getKey',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'prefix',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 274,
                                'char' => 57,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 274,
                              'char' => 57,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 274,
                          'char' => 58,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 274,
                        'char' => 58,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 274,
                      'char' => 58,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 275,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 280,
              'char' => 5,
            ),
            4 => 
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
                      'class' => '\\DirectoryIterator',
                      'dynamic' => 0,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'cacheDir',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 280,
                            'char' => 55,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 280,
                          'char' => 55,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 280,
                      'char' => 56,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 280,
                    'char' => 56,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 280,
                'char' => 58,
              ),
              'value' => 'item',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'likely',
                    'left' => 
                    array (
                      'type' => 'identical',
                      'left' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'item',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 281,
                          'char' => 19,
                        ),
                        'name' => 'isDir',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 281,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 281,
                        'char' => 38,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 281,
                      'char' => 38,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 281,
                    'char' => 38,
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
                          'variable' => 'key',
                          'expr' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'item',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 282,
                              'char' => 20,
                            ),
                            'name' => 'getFileName',
                            'call-type' => 1,
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 282,
                            'char' => 34,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 282,
                          'char' => 34,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 283,
                      'char' => 6,
                    ),
                    1 => 
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 283,
                            'char' => 22,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 283,
                          'char' => 22,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 283,
                        'char' => 22,
                      ),
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
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 284,
                                  'char' => 24,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 284,
                                'char' => 24,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'prefixedKey',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 284,
                                  'char' => 37,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 284,
                                'char' => 37,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 284,
                            'char' => 39,
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
                                    'value' => 'key',
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 285,
                                    'char' => 23,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 285,
                                  'char' => 23,
                                ),
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 286,
                              'char' => 6,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 287,
                          'char' => 5,
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
                              'assign-type' => 'variable-append',
                              'operator' => 'assign',
                              'variable' => 'keys',
                              'expr' => 
                              array (
                                'type' => 'variable',
                                'value' => 'key',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 288,
                                'char' => 22,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 288,
                              'char' => 22,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 289,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 290,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 291,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 293,
              'char' => 8,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'keys',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 293,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 294,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 265,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
            'line' => 265,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
          'line' => 264,
          'last-line' => 301,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 302,
                'char' => 43,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 302,
              'char' => 43,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 302,
                'char' => 64,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 302,
              'char' => 64,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 304,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'prefix',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 304,
                  'char' => 22,
                ),
                2 => 
                array (
                  'variable' => 'cacheFile',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 304,
                  'char' => 33,
                ),
                3 => 
                array (
                  'variable' => 'ttl',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 304,
                  'char' => 38,
                ),
                4 => 
                array (
                  'variable' => 'modifiedTime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 304,
                  'char' => 52,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 306,
                  'char' => 15,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 307,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 307,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 307,
                        'char' => 32,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 307,
                      'char' => 32,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
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
                      'variable' => 'prefix',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 309,
                          'char' => 22,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_prefix',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 309,
                          'char' => 30,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 309,
                        'char' => 30,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 309,
                      'char' => 30,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 310,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 310,
                          'char' => 25,
                        ),
                        'right' => 
                        array (
                          'type' => 'mcall',
                          'variable' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 310,
                            'char' => 32,
                          ),
                          'name' => 'getKey',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'keyName',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 310,
                                'char' => 47,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 310,
                              'char' => 47,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 310,
                          'char' => 48,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 310,
                        'char' => 48,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 310,
                      'char' => 48,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 311,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 313,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'lastKey',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 313,
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
                      'variable' => 'cacheFile',
                      'expr' => 
                      array (
                        'type' => 'concat',
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 315,
                              'char' => 25,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => '_options',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 315,
                              'char' => 34,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 315,
                            'char' => 34,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'cacheDir',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 315,
                            'char' => 45,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 315,
                          'char' => 47,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'lastKey',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 315,
                          'char' => 56,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 315,
                        'char' => 56,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 315,
                      'char' => 56,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 317,
                  'char' => 5,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'file_exists',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'cacheFile',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 317,
                          'char' => 28,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 317,
                        'char' => 28,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 317,
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
                          'type' => 'variable',
                          'value' => 'lifetime',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 322,
                          'char' => 18,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 322,
                        'char' => 18,
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
                                'type' => 'cast',
                                'left' => 'int',
                                'right' => 
                                array (
                                  'type' => 'mcall',
                                  'variable' => 
                                  array (
                                    'type' => 'property-access',
                                    'left' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'this',
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                      'line' => 323,
                                      'char' => 27,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => '_frontend',
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                      'line' => 323,
                                      'char' => 38,
                                    ),
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 323,
                                    'char' => 38,
                                  ),
                                  'name' => 'getLifeTime',
                                  'call-type' => 1,
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 323,
                                  'char' => 52,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 323,
                                'char' => 52,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 323,
                              'char' => 52,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 324,
                          'char' => 5,
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
                                'type' => 'cast',
                                'left' => 'int',
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'lifetime',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 325,
                                  'char' => 30,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 325,
                                'char' => 30,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 325,
                              'char' => 30,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 326,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 328,
                      'char' => 18,
                    ),
                    1 => 
                    array (
                      'type' => 'fcall',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'clearstatcache',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'bool',
                              'value' => 'true',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 328,
                              'char' => 24,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 328,
                            'char' => 24,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'cacheFile',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 328,
                              'char' => 35,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 328,
                            'char' => 35,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 328,
                        'char' => 36,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 329,
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
                          'variable' => 'modifiedTime',
                          'expr' => 
                          array (
                            'type' => 'cast',
                            'left' => 'int',
                            'right' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'filemtime',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'cacheFile',
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 329,
                                    'char' => 49,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 329,
                                  'char' => 49,
                                ),
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 329,
                              'char' => 50,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 329,
                            'char' => 50,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 329,
                          'char' => 50,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 331,
                      'char' => 6,
                    ),
                    3 => 
                    array (
                      'type' => 'if',
                      'expr' => 
                      array (
                        'type' => 'greater',
                        'left' => 
                        array (
                          'type' => 'add',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'modifiedTime',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 331,
                            'char' => 21,
                          ),
                          'right' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ttl',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 331,
                            'char' => 27,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 331,
                          'char' => 27,
                        ),
                        'right' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'time',
                          'call-type' => 1,
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 331,
                          'char' => 36,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 331,
                        'char' => 36,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 332,
                            'char' => 17,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 333,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 334,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 335,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 337,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 337,
                'char' => 15,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 338,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Checks if cache exists and it isn\'t expired
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 303,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
            'line' => 303,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
          'line' => 302,
          'last-line' => 344,
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
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 345,
                'char' => 46,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 345,
              'char' => 46,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 345,
                'char' => 61,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 345,
              'char' => 61,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 347,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'cacheFile',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 347,
                  'char' => 29,
                ),
                2 => 
                array (
                  'variable' => 'frontend',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 347,
                  'char' => 39,
                ),
                3 => 
                array (
                  'variable' => 'lifetime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 347,
                  'char' => 49,
                ),
                4 => 
                array (
                  'variable' => 'ttl',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 347,
                  'char' => 54,
                ),
                5 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 348,
                  'char' => 17,
                ),
                6 => 
                array (
                  'variable' => 'result',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 348,
                  'char' => 25,
                ),
                7 => 
                array (
                  'variable' => 'modifiedTime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 348,
                  'char' => 39,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 350,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 350,
                        'char' => 26,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_prefix',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 350,
                        'char' => 35,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 350,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 350,
                        'char' => 42,
                      ),
                      'name' => 'getKey',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'keyName',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 350,
                            'char' => 57,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 350,
                          'char' => 57,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 350,
                      'char' => 58,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 350,
                    'char' => 58,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 350,
                  'char' => 58,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 351,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 351,
                  'char' => 32,
                ),
                2 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'cacheFile',
                  'expr' => 
                  array (
                    'type' => 'concat',
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 352,
                          'char' => 21,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 352,
                          'char' => 30,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 352,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'cacheDir',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 352,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 352,
                      'char' => 43,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'prefixedKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 352,
                      'char' => 56,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 352,
                    'char' => 56,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 352,
                  'char' => 56,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 354,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'file_exists',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'cacheFile',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 354,
                      'char' => 27,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 354,
                    'char' => 27,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 354,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 356,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_frontend',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 356,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 356,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 356,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 361,
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
                      'variable' => 'lifetime',
                      'expr' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 361,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastLifetime',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 361,
                          'char' => 38,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 361,
                        'char' => 38,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 361,
                      'char' => 38,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 362,
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
                      'type' => 'variable',
                      'value' => 'lifetime',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 362,
                      'char' => 17,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 362,
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
                          'variable' => 'ttl',
                          'expr' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'frontend',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 363,
                              'char' => 24,
                            ),
                            'name' => 'getLifeTime',
                            'call-type' => 1,
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 363,
                            'char' => 38,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 363,
                          'char' => 38,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 364,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 365,
                            'char' => 23,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 365,
                          'char' => 23,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 366,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 368,
                  'char' => 17,
                ),
                3 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'clearstatcache',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'bool',
                          'value' => 'true',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 368,
                          'char' => 23,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 368,
                        'char' => 23,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'cacheFile',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 368,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 368,
                        'char' => 34,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 368,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 369,
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
                      'variable' => 'modifiedTime',
                      'expr' => 
                      array (
                        'type' => 'cast',
                        'left' => 'int',
                        'right' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'filemtime',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'cacheFile',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 369,
                                'char' => 48,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 369,
                              'char' => 48,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 369,
                          'char' => 49,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 369,
                        'char' => 49,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 369,
                      'char' => 49,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 375,
                  'char' => 5,
                ),
                5 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'greater',
                    'left' => 
                    array (
                      'type' => 'add',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'modifiedTime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 375,
                        'char' => 20,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'ttl',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 375,
                        'char' => 26,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 375,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'time',
                      'call-type' => 1,
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 375,
                      'char' => 35,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 375,
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
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'cachedContent',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'file_get_contents',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'cacheFile',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 380,
                                  'char' => 52,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 380,
                                'char' => 52,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 380,
                            'char' => 53,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 380,
                          'char' => 53,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 382,
                      'char' => 6,
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
                          'value' => 'cachedContent',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 382,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'bool',
                          'value' => 'false',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 382,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 382,
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
                                  'type' => 'concat',
                                  'left' => 
                                  array (
                                    'type' => 'concat',
                                    'left' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'Cache file ',
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                      'line' => 383,
                                      'char' => 40,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'cacheFile',
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                      'line' => 383,
                                      'char' => 52,
                                    ),
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 383,
                                    'char' => 52,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => ' could not be opened',
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 383,
                                    'char' => 76,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 383,
                                  'char' => 76,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 383,
                                'char' => 76,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 383,
                            'char' => 77,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 384,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 386,
                      'char' => 6,
                    ),
                    2 => 
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 386,
                              'char' => 32,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 386,
                            'char' => 32,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 386,
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
                              'variable' => 'result',
                              'expr' => 
                              array (
                                'type' => 'add',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'cachedContent',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 388,
                                  'char' => 33,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'value',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 388,
                                  'char' => 40,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 388,
                                'char' => 40,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 388,
                              'char' => 40,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 389,
                          'char' => 7,
                        ),
                        1 => 
                        array (
                          'type' => 'if',
                          'expr' => 
                          array (
                            'type' => 'identical',
                            'left' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'file_put_contents',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'cacheFile',
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 389,
                                    'char' => 36,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 389,
                                  'char' => 36,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'result',
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 389,
                                    'char' => 44,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 389,
                                  'char' => 44,
                                ),
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 389,
                              'char' => 48,
                            ),
                            'right' => 
                            array (
                              'type' => 'bool',
                              'value' => 'false',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 389,
                              'char' => 56,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 389,
                            'char' => 56,
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
                                      'value' => 'Cache directory could not be written',
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                      'line' => 390,
                                      'char' => 65,
                                    ),
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 390,
                                    'char' => 65,
                                  ),
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 390,
                                'char' => 66,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 391,
                              'char' => 6,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 393,
                          'char' => 11,
                        ),
                        2 => 
                        array (
                          'type' => 'return',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'result',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 393,
                            'char' => 19,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 394,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 395,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 396,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 398,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 398,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 399,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Increment of a given key, by number $value
	 *
	 * @param  string|int keyName
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 345,
                'char' => 70,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 346,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
            'line' => 346,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
          'line' => 345,
          'last-line' => 405,
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
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 406,
                'char' => 46,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 406,
              'char' => 46,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 406,
                'char' => 61,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 406,
              'char' => 61,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 408,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'cacheFile',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 408,
                  'char' => 29,
                ),
                2 => 
                array (
                  'variable' => 'lifetime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 408,
                  'char' => 39,
                ),
                3 => 
                array (
                  'variable' => 'ttl',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 408,
                  'char' => 44,
                ),
                4 => 
                array (
                  'variable' => 'cachedContent',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 408,
                  'char' => 59,
                ),
                5 => 
                array (
                  'variable' => 'result',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 408,
                  'char' => 67,
                ),
                6 => 
                array (
                  'variable' => 'modifiedTime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 408,
                  'char' => 81,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 410,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 410,
                        'char' => 26,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_prefix',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 410,
                        'char' => 35,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 410,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 410,
                        'char' => 42,
                      ),
                      'name' => 'getKey',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'keyName',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 410,
                            'char' => 57,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 410,
                          'char' => 57,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 410,
                      'char' => 58,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 410,
                    'char' => 58,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 410,
                  'char' => 58,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 411,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 411,
                  'char' => 32,
                ),
                2 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'cacheFile',
                  'expr' => 
                  array (
                    'type' => 'concat',
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 412,
                          'char' => 21,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 412,
                          'char' => 30,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 412,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'cacheDir',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 412,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 412,
                      'char' => 43,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'prefixedKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 412,
                      'char' => 56,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 412,
                    'char' => 56,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 412,
                  'char' => 56,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 414,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'file_exists',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'cacheFile',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 414,
                      'char' => 27,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 414,
                    'char' => 27,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 414,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 419,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lastLifetime',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 419,
                          'char' => 38,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 419,
                        'char' => 38,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 419,
                      'char' => 38,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 420,
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
                      'value' => 'lifetime',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 420,
                      'char' => 17,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 420,
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
                          'variable' => 'ttl',
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
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 421,
                                'char' => 20,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => '_frontend',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 421,
                                'char' => 31,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 421,
                              'char' => 31,
                            ),
                            'name' => 'getLifeTime',
                            'call-type' => 1,
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 421,
                            'char' => 45,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 421,
                          'char' => 45,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 422,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 423,
                            'char' => 23,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 423,
                          'char' => 23,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 424,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 426,
                  'char' => 17,
                ),
                2 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'clearstatcache',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'bool',
                          'value' => 'true',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 426,
                          'char' => 23,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 426,
                        'char' => 23,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'cacheFile',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 426,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 426,
                        'char' => 34,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 426,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 427,
                  'char' => 6,
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
                      'variable' => 'modifiedTime',
                      'expr' => 
                      array (
                        'type' => 'cast',
                        'left' => 'int',
                        'right' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'filemtime',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'cacheFile',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 427,
                                'char' => 48,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 427,
                              'char' => 48,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 427,
                          'char' => 49,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 427,
                        'char' => 49,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 427,
                      'char' => 49,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 433,
                  'char' => 5,
                ),
                4 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'greater',
                    'left' => 
                    array (
                      'type' => 'add',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'modifiedTime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 433,
                        'char' => 20,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'ttl',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 433,
                        'char' => 26,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 433,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'time',
                      'call-type' => 1,
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 433,
                      'char' => 35,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 433,
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
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'cachedContent',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'file_get_contents',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'cacheFile',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 438,
                                  'char' => 52,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 438,
                                'char' => 52,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 438,
                            'char' => 53,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 438,
                          'char' => 53,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 440,
                      'char' => 6,
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
                          'value' => 'cachedContent',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 440,
                          'char' => 24,
                        ),
                        'right' => 
                        array (
                          'type' => 'bool',
                          'value' => 'false',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 440,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 440,
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
                                  'type' => 'concat',
                                  'left' => 
                                  array (
                                    'type' => 'concat',
                                    'left' => 
                                    array (
                                      'type' => 'string',
                                      'value' => 'Cache file ',
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                      'line' => 441,
                                      'char' => 40,
                                    ),
                                    'right' => 
                                    array (
                                      'type' => 'variable',
                                      'value' => 'cacheFile',
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                      'line' => 441,
                                      'char' => 52,
                                    ),
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 441,
                                    'char' => 52,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => ' could not be opened',
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 441,
                                    'char' => 76,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 441,
                                  'char' => 76,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 441,
                                'char' => 76,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 441,
                            'char' => 77,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 442,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 444,
                      'char' => 6,
                    ),
                    2 => 
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 444,
                              'char' => 32,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 444,
                            'char' => 32,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 444,
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
                              'variable' => 'result',
                              'expr' => 
                              array (
                                'type' => 'sub',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'cachedContent',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 446,
                                  'char' => 33,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'value',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 446,
                                  'char' => 40,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 446,
                                'char' => 40,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 446,
                              'char' => 40,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 447,
                          'char' => 7,
                        ),
                        1 => 
                        array (
                          'type' => 'if',
                          'expr' => 
                          array (
                            'type' => 'identical',
                            'left' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'file_put_contents',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'cacheFile',
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 447,
                                    'char' => 36,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 447,
                                  'char' => 36,
                                ),
                                1 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'result',
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 447,
                                    'char' => 44,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 447,
                                  'char' => 44,
                                ),
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 447,
                              'char' => 48,
                            ),
                            'right' => 
                            array (
                              'type' => 'bool',
                              'value' => 'false',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 447,
                              'char' => 56,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 447,
                            'char' => 56,
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
                                      'value' => 'Cache directory can\'t be written',
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                      'line' => 448,
                                      'char' => 61,
                                    ),
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 448,
                                    'char' => 61,
                                  ),
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 448,
                                'char' => 62,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 449,
                              'char' => 6,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 451,
                          'char' => 11,
                        ),
                        2 => 
                        array (
                          'type' => 'return',
                          'expr' => 
                          array (
                            'type' => 'variable',
                            'value' => 'result',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 451,
                            'char' => 19,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 452,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 453,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 454,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 456,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 456,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 457,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Decrement of a given key, by number $value
	 *
	 * @param string|int keyName
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 406,
                'char' => 70,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'null',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 407,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
            'line' => 407,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
          'line' => 406,
          'last-line' => 461,
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
                  'variable' => 'prefix',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 464,
                  'char' => 13,
                ),
                1 => 
                array (
                  'variable' => 'cacheDir',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 464,
                  'char' => 23,
                ),
                2 => 
                array (
                  'variable' => 'item',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 464,
                  'char' => 29,
                ),
                3 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 464,
                  'char' => 34,
                ),
                4 => 
                array (
                  'variable' => 'cacheFile',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 464,
                  'char' => 45,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 466,
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
                  'variable' => 'prefix',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 466,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_prefix',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 466,
                      'char' => 29,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 466,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 466,
                  'char' => 29,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 468,
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
                    'value' => 'cacheDir',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 468,
                    'char' => 50,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 468,
                        'char' => 28,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 468,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 468,
                      'char' => 37,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'cacheDir',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 468,
                      'char' => 48,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 468,
                    'char' => 50,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 468,
                  'char' => 50,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 468,
                'char' => 50,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 469,
                          'char' => 61,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 469,
                        'char' => 61,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 469,
                    'char' => 62,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 470,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 472,
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
                      'type' => 'new',
                      'class' => '\\DirectoryIterator',
                      'dynamic' => 0,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'cacheDir',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 472,
                            'char' => 55,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 472,
                          'char' => 55,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 472,
                      'char' => 56,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 472,
                    'char' => 56,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 472,
                'char' => 58,
              ),
              'value' => 'item',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'likely',
                    'left' => 
                    array (
                      'type' => 'equals',
                      'left' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'item',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 474,
                          'char' => 19,
                        ),
                        'name' => 'isFile',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 474,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'bool',
                        'value' => 'true',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 474,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 474,
                      'char' => 37,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 474,
                    'char' => 37,
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
                          'variable' => 'key',
                          'expr' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'item',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 475,
                              'char' => 20,
                            ),
                            'name' => 'getFileName',
                            'call-type' => 1,
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 475,
                            'char' => 34,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 475,
                          'char' => 34,
                        ),
                        1 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'cacheFile',
                          'expr' => 
                          array (
                            'type' => 'mcall',
                            'variable' => 
                            array (
                              'type' => 'variable',
                              'value' => 'item',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 476,
                              'char' => 23,
                            ),
                            'name' => 'getPathName',
                            'call-type' => 1,
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 476,
                            'char' => 37,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 476,
                          'char' => 37,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 478,
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
                          'type' => 'empty',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'prefix',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 478,
                            'char' => 22,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 478,
                          'char' => 22,
                        ),
                        'right' => 
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
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 478,
                                'char' => 39,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 478,
                              'char' => 39,
                            ),
                            1 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'prefix',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 478,
                                'char' => 47,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 478,
                              'char' => 47,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 478,
                          'char' => 49,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 478,
                        'char' => 49,
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
                              'type' => 'fcall',
                              'name' => 'unlink',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'cacheFile',
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                    'line' => 479,
                                    'char' => 27,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                  'line' => 479,
                                  'char' => 27,
                                ),
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 479,
                              'char' => 29,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                            'line' => 479,
                            'char' => 29,
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
                                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                                'line' => 480,
                                'char' => 19,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                              'line' => 481,
                              'char' => 6,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 482,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                      'line' => 483,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 484,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 486,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 486,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 487,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 463,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
            'line' => 463,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
          'line' => 462,
          'last-line' => 491,
          'char' => 16,
        ),
        9 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getKey',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'key',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 492,
              'char' => 28,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 494,
                    'char' => 11,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_useSafeKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 494,
                    'char' => 26,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 494,
                  'char' => 26,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 494,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 494,
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
                    'name' => 'md5',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'key',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                          'line' => 495,
                          'char' => 18,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                        'line' => 495,
                        'char' => 18,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 495,
                    'char' => 19,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 496,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 498,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'key',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 498,
                'char' => 13,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 499,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Return a file-system safe identifier for a given key
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 493,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
            'line' => 493,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
          'line' => 492,
          'last-line' => 503,
          'char' => 16,
        ),
        10 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'useSafeKey',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'useSafeKey',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 504,
              'char' => 44,
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
                  'property' => '_useSafeKey',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'useSafeKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                    'line' => 506,
                    'char' => 37,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 506,
                  'char' => 37,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 508,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'this',
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 508,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
              'line' => 509,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Set whether to use the safekey or not
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
                  'value' => 'File',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                  'line' => 505,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
                'line' => 505,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
            'line' => 505,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
          'line' => 504,
          'last-line' => 510,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
      'line' => 62,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/cache/backend/file.zep',
    'line' => 62,
    'char' => 5,
  ),
);