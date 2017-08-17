<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Session\\Adapter',
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
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
        'name' => 'Vof\\Session\\Adapter',
        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
        'line' => 22,
        'char' => 24,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
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
        'name' => 'Vof\\Session\\Exception',
        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
        'line' => 23,
        'char' => 26,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
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
        'name' => 'Vof\\Cache\\Backend\\Libmemcached',
        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
        'line' => 24,
        'char' => 35,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
    'line' => 25,
    'char' => 3,
  ),
  4 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Vof\\Cache\\Frontend\\Data',
        'alias' => 'FrontendData',
        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
        'line' => 25,
        'char' => 44,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
    'line' => 59,
    'char' => 2,
  ),
  5 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Session\\Adapter\\Libmemcached
 *
 * This adapter store sessions in libmemcached
 *
 * <code>
 * use Vof\\Session\\Adapter\\Libmemcached;
 *
 * $session = new Libmemcached(
 *     [
 *         "servers" => [
 *             [
 *                 "host"   => "localhost",
 *                 "port"   => 11211,
 *                 "weight" => 1,
 *             ],
 *         ],
 *         "client" => [
 *             \\Memcached::OPT_HASH       => \\Memcached::HASH_MD5,
 *             \\Memcached::OPT_PREFIX_KEY => "prefix.",
 *         ],
 *         "lifetime" => 3600,
 *         "prefix"   => "my_",
 *     ]
 * );
 *
 * $session->start();
 *
 * $session->set("var", "some-value");
 *
 * echo $session->get("var");
 * </code>
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
    'line' => 60,
    'char' => 5,
  ),
  6 => 
  array (
    'type' => 'class',
    'name' => 'Libmemcached',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'Adapter',
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
          'name' => '_libmemcached',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
            'line' => 62,
            'char' => 33,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 62,
              'char' => 39,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
          'line' => 64,
          'char' => 10,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_lifetime',
          'default' => 
          array (
            'type' => 'int',
            'value' => '8600',
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
            'line' => 64,
            'char' => 29,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 64,
              'char' => 35,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
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
              'name' => 'options',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 71,
              'char' => 43,
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
                  'variable' => 'servers',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 73,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'client',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 73,
                  'char' => 22,
                ),
                2 => 
                array (
                  'variable' => 'lifetime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 73,
                  'char' => 32,
                ),
                3 => 
                array (
                  'variable' => 'prefix',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 73,
                  'char' => 40,
                ),
                4 => 
                array (
                  'variable' => 'statsKey',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 73,
                  'char' => 50,
                ),
                5 => 
                array (
                  'variable' => 'persistentId',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 73,
                  'char' => 64,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 75,
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
                    'value' => 'servers',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 75,
                    'char' => 41,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 75,
                      'char' => 29,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'servers',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 75,
                      'char' => 39,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 75,
                    'char' => 41,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 75,
                  'char' => 41,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 75,
                'char' => 41,
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
                          'value' => 'No servers given in options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 76,
                          'char' => 53,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 76,
                        'char' => 53,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 76,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 77,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 79,
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
                    'value' => 'client',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 79,
                    'char' => 39,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 79,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'client',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 79,
                      'char' => 37,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 79,
                    'char' => 39,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 79,
                  'char' => 39,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 79,
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
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'client',
                      'expr' => 
                      array (
                        'type' => 'null',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 80,
                        'char' => 21,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 80,
                      'char' => 21,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 81,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 83,
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
                    'value' => 'lifetime',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 83,
                    'char' => 43,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 83,
                      'char' => 30,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'lifetime',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 83,
                      'char' => 41,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 83,
                    'char' => 43,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 83,
                  'char' => 43,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 83,
                'char' => 43,
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
                        'type' => 'int',
                        'value' => '8600',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 84,
                        'char' => 23,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 84,
                      'char' => 23,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 85,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 88,
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
                  'property' => '_lifetime',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'min',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'lifetime',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 88,
                          'char' => 37,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 88,
                        'char' => 37,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'int',
                          'value' => '2592000',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 88,
                          'char' => 46,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 88,
                        'char' => 46,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 88,
                    'char' => 47,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 88,
                  'char' => 47,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 90,
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
                    'value' => 'prefix',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 90,
                    'char' => 39,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 90,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'prefix',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 90,
                      'char' => 37,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 90,
                    'char' => 39,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 90,
                  'char' => 39,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 90,
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
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'prefix',
                      'expr' => 
                      array (
                        'type' => 'null',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 91,
                        'char' => 21,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 91,
                      'char' => 21,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 92,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 94,
              'char' => 4,
            ),
            6 => 
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
                    'value' => 'statsKey',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 94,
                    'char' => 43,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 94,
                      'char' => 30,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'statsKey',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 94,
                      'char' => 41,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 94,
                    'char' => 43,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 94,
                  'char' => 43,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 94,
                'char' => 43,
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
                      'variable' => 'statsKey',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => '',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 95,
                        'char' => 21,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 95,
                      'char' => 21,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 96,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 98,
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
                  'type' => 'fetch',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'persistentId',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 98,
                    'char' => 52,
                  ),
                  'right' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 98,
                      'char' => 34,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'persistent_id',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 98,
                      'char' => 50,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 98,
                    'char' => 52,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 98,
                  'char' => 52,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 98,
                'char' => 52,
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
                      'variable' => 'persistentId',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'phalcon-session',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 99,
                        'char' => 40,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 99,
                      'char' => 40,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 100,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 102,
              'char' => 5,
            ),
            8 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_libmemcached',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'Libmemcached',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'new',
                          'class' => 'FrontendData',
                          'dynamic' => 0,
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
                                      'value' => 'lifetime',
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                      'line' => 103,
                                      'char' => 32,
                                    ),
                                    'value' => 
                                    array (
                                      'type' => 'property-access',
                                      'left' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'this',
                                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                        'line' => 103,
                                        'char' => 39,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => '_lifetime',
                                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                        'line' => 103,
                                        'char' => 49,
                                      ),
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                      'line' => 103,
                                      'char' => 49,
                                    ),
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                    'line' => 103,
                                    'char' => 49,
                                  ),
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                'line' => 103,
                                'char' => 50,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                              'line' => 103,
                              'char' => 50,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 103,
                          'char' => 51,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 103,
                        'char' => 51,
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
                                'value' => 'servers',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                'line' => 105,
                                'char' => 14,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'servers',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                'line' => 105,
                                'char' => 24,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                              'line' => 105,
                              'char' => 24,
                            ),
                            1 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'client',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                'line' => 106,
                                'char' => 13,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'client',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                'line' => 106,
                                'char' => 23,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                              'line' => 106,
                              'char' => 23,
                            ),
                            2 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'prefix',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                'line' => 107,
                                'char' => 13,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'prefix',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                'line' => 107,
                                'char' => 23,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                              'line' => 107,
                              'char' => 23,
                            ),
                            3 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'statsKey',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                'line' => 108,
                                'char' => 15,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'statsKey',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                'line' => 108,
                                'char' => 25,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                              'line' => 108,
                              'char' => 25,
                            ),
                            4 => 
                            array (
                              'key' => 
                              array (
                                'type' => 'string',
                                'value' => 'persistent_id',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                'line' => 109,
                                'char' => 20,
                              ),
                              'value' => 
                              array (
                                'type' => 'variable',
                                'value' => 'persistentId',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                                'line' => 110,
                                'char' => 4,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                              'line' => 110,
                              'char' => 4,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 111,
                          'char' => 3,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 111,
                        'char' => 3,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 111,
                    'char' => 4,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 111,
                  'char' => 4,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 113,
              'char' => 26,
            ),
            9 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'session_set_save_handler',
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
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                            'line' => 114,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 114,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'open',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                            'line' => 114,
                            'char' => 17,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 114,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 114,
                      'char' => 18,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 114,
                    'char' => 18,
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
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                            'line' => 115,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 115,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'close',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                            'line' => 115,
                            'char' => 18,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 115,
                          'char' => 18,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 115,
                      'char' => 19,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 115,
                    'char' => 19,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'array',
                      'left' => 
                      array (
                        0 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                            'line' => 116,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 116,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'read',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                            'line' => 116,
                            'char' => 17,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 116,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 116,
                      'char' => 18,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 116,
                    'char' => 18,
                  ),
                  3 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'array',
                      'left' => 
                      array (
                        0 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                            'line' => 117,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 117,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'write',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                            'line' => 117,
                            'char' => 18,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 117,
                          'char' => 18,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 117,
                      'char' => 19,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 117,
                    'char' => 19,
                  ),
                  4 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'array',
                      'left' => 
                      array (
                        0 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                            'line' => 118,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 118,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'destroy',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                            'line' => 118,
                            'char' => 20,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 118,
                          'char' => 20,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 118,
                      'char' => 21,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 118,
                    'char' => 21,
                  ),
                  5 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'array',
                      'left' => 
                      array (
                        0 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'this',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                            'line' => 119,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 119,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'gc',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                            'line' => 119,
                            'char' => 15,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 119,
                          'char' => 15,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 120,
                      'char' => 3,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 120,
                    'char' => 3,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 120,
                'char' => 4,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 122,
              'char' => 8,
            ),
            10 => 
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
                      'value' => 'options',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 122,
                      'char' => 30,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 122,
                    'char' => 30,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 122,
                'char' => 31,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 123,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Session\\Adapter\\Libmemcached constructor
	 *
	 * @throws \\Vof\\Session\\Exception
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
          'line' => 71,
          'last-line' => 125,
          'char' => 16,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'open',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 127,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 128,
              'char' => 2,
            ),
          ),
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 126,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
            'line' => 126,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
          'line' => 125,
          'last-line' => 130,
          'char' => 16,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'close',
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 132,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 133,
              'char' => 2,
            ),
          ),
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 131,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
            'line' => 131,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
          'line' => 130,
          'last-line' => 137,
          'char' => 16,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'read',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'sessionId',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 138,
              'char' => 39,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'cast',
                'left' => 'string',
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 140,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_libmemcached',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 140,
                      'char' => 39,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 140,
                    'char' => 39,
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
                        'value' => 'sessionId',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 140,
                        'char' => 53,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 140,
                      'char' => 53,
                    ),
                    1 => 
                    array (
                      'parameter' => 
                      array (
                        'type' => 'property-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 140,
                          'char' => 60,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lifetime',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 140,
                          'char' => 70,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 140,
                        'char' => 70,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 140,
                      'char' => 70,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 140,
                  'char' => 71,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 140,
                'char' => 71,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 141,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * {@inheritdoc}
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 139,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
            'line' => 139,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
          'line' => 138,
          'last-line' => 145,
          'char' => 16,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'write',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'sessionId',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 146,
              'char' => 40,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'data',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 146,
              'char' => 53,
            ),
          ),
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
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 148,
                    'char' => 15,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_libmemcached',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 148,
                    'char' => 30,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 148,
                  'char' => 30,
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
                      'value' => 'sessionId',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 148,
                      'char' => 45,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 148,
                    'char' => 45,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 148,
                      'char' => 51,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 148,
                    'char' => 51,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 148,
                        'char' => 58,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_lifetime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 148,
                        'char' => 68,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 148,
                      'char' => 68,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 148,
                    'char' => 68,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 148,
                'char' => 69,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 149,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * {@inheritdoc}
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 147,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
            'line' => 147,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
          'line' => 146,
          'last-line' => 153,
          'char' => 16,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'destroy',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'sessionId',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 154,
                'char' => 49,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 154,
              'char' => 49,
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
                  'variable' => 'id',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 156,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 158,
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
                  'value' => 'sessionId',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 158,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 158,
                  'char' => 25,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 158,
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
                      'variable' => 'id',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 159,
                          'char' => 18,
                        ),
                        'name' => 'getId',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 159,
                        'char' => 26,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 159,
                      'char' => 26,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 160,
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
                      'variable' => 'id',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'sessionId',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 161,
                        'char' => 22,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 161,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 162,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 164,
              'char' => 6,
            ),
            2 => 
            array (
              'type' => 'mcall',
              'expr' => 
              array (
                'type' => 'mcall',
                'variable' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 164,
                  'char' => 8,
                ),
                'name' => 'removeSessionData',
                'call-type' => 1,
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 164,
                'char' => 28,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 166,
              'char' => 4,
            ),
            3 => 
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
                      'value' => 'id',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 166,
                      'char' => 17,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 166,
                    'char' => 17,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 166,
                  'char' => 17,
                ),
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 166,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_libmemcached',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 166,
                      'char' => 39,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 166,
                    'char' => 39,
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
                        'value' => 'id',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 166,
                        'char' => 49,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 166,
                      'char' => 49,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 166,
                  'char' => 51,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 166,
                'char' => 51,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'cast',
                    'left' => 'bool',
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 167,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_libmemcached',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 167,
                          'char' => 38,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                        'line' => 167,
                        'char' => 38,
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
                            'value' => 'id',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                            'line' => 167,
                            'char' => 48,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                          'line' => 167,
                          'char' => 48,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                      'line' => 167,
                      'char' => 49,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                    'line' => 167,
                    'char' => 49,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                  'line' => 168,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 170,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 170,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 171,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * {@inheritdoc}
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 155,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
            'line' => 155,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
          'line' => 154,
          'last-line' => 175,
          'char' => 16,
        ),
        6 => 
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
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 178,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
              'line' => 179,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * {@inheritdoc}
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
                'line' => 177,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
            'line' => 177,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
          'line' => 176,
          'last-line' => 180,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
      'line' => 60,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/libmemcached.zep',
    'line' => 60,
    'char' => 5,
  ),
);