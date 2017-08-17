<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Session\\Adapter',
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
        'line' => 22,
        'char' => 24,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
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
        'name' => 'Vof\\Cache\\Backend\\Redis',
        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
        'line' => 23,
        'char' => 28,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
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
        'name' => 'Vof\\Cache\\Frontend\\None',
        'alias' => 'FrontendNone',
        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
        'line' => 24,
        'char' => 44,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
    'line' => 53,
    'char' => 2,
  ),
  4 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Session\\Adapter\\Redis
 *
 * This adapter store sessions in Redis
 *
 * <code>
 * use Vof\\Session\\Adapter\\Redis;
 *
 * $session = new Redis(
 *     [
 *         "uniqueId"   => "my-private-app",
 *         "host"       => "localhost",
 *         "port"       => 6379,
 *         "auth"       => "foobared",
 *         "persistent" => false,
 *         "lifetime"   => 3600,
 *         "prefix"     => "my",
 *         "index"      => 1,
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
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
    'line' => 54,
    'char' => 5,
  ),
  5 => 
  array (
    'type' => 'class',
    'name' => 'Redis',
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
          'name' => '_redis',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
            'line' => 56,
            'char' => 26,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 56,
              'char' => 32,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
          'line' => 58,
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
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
            'line' => 58,
            'char' => 29,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 58,
              'char' => 35,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
          'line' => 62,
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
              'default' => 
              array (
                'type' => 'empty-array',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 63,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 63,
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
                  'variable' => 'lifetime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 65,
                  'char' => 15,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 67,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 67,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'host',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 67,
                      'char' => 27,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 67,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 67,
                  'char' => 29,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 67,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 68,
                          'char' => 22,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => '127.0.0.1',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                        'line' => 68,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 68,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 69,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 71,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 71,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'port',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 71,
                      'char' => 27,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 71,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 71,
                  'char' => 29,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 71,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 72,
                          'char' => 22,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'int',
                        'value' => '6379',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                        'line' => 72,
                        'char' => 30,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 72,
                      'char' => 30,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 73,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 75,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 75,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'persistent',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 75,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 75,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 75,
                  'char' => 35,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 75,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 76,
                          'char' => 28,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'false',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                        'line' => 76,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 76,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 77,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 79,
              'char' => 4,
            ),
            4 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'lifetime',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 79,
                  'char' => 42,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'options',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 79,
                    'char' => 29,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'lifetime',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 79,
                    'char' => 40,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 79,
                  'char' => 42,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 79,
                'char' => 42,
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
                      'property' => '_lifetime',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'lifetime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                        'line' => 80,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 80,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 81,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 83,
              'char' => 5,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_redis',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'Redis',
                    'dynamic' => 0,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'new',
                          'class' => 'FrontendNone',
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
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                                      'line' => 84,
                                      'char' => 32,
                                    ),
                                    'value' => 
                                    array (
                                      'type' => 'property-access',
                                      'left' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'this',
                                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                                        'line' => 84,
                                        'char' => 39,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => '_lifetime',
                                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                                        'line' => 84,
                                        'char' => 49,
                                      ),
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                                      'line' => 84,
                                      'char' => 49,
                                    ),
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                                    'line' => 84,
                                    'char' => 49,
                                  ),
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                                'line' => 84,
                                'char' => 50,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                              'line' => 84,
                              'char' => 50,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 84,
                          'char' => 51,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                        'line' => 84,
                        'char' => 51,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 86,
                          'char' => 3,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                        'line' => 86,
                        'char' => 3,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 86,
                    'char' => 4,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 86,
                  'char' => 4,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 88,
              'char' => 26,
            ),
            6 => 
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                            'line' => 89,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 89,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'open',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                            'line' => 89,
                            'char' => 17,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 89,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 89,
                      'char' => 18,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 89,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                            'line' => 90,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 90,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'close',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                            'line' => 90,
                            'char' => 18,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 90,
                          'char' => 18,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 90,
                      'char' => 19,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 90,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                            'line' => 91,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 91,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'read',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                            'line' => 91,
                            'char' => 17,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 91,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 91,
                      'char' => 18,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 91,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                            'line' => 92,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 92,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'write',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                            'line' => 92,
                            'char' => 18,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 92,
                          'char' => 18,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 92,
                      'char' => 19,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 92,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                            'line' => 93,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 93,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'destroy',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                            'line' => 93,
                            'char' => 20,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 93,
                          'char' => 20,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 93,
                      'char' => 21,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 93,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                            'line' => 94,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 94,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'gc',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                            'line' => 94,
                            'char' => 15,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 94,
                          'char' => 15,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 95,
                      'char' => 3,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 95,
                    'char' => 3,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 95,
                'char' => 4,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 97,
              'char' => 8,
            ),
            7 => 
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 97,
                      'char' => 30,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 97,
                    'char' => 30,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 97,
                'char' => 31,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 98,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Session\\Adapter\\Redis constructor
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
          'line' => 63,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 105,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 106,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 104,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
            'line' => 104,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
          'line' => 103,
          'last-line' => 110,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 113,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 114,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 112,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
            'line' => 112,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
          'line' => 111,
          'last-line' => 118,
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
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 119,
              'char' => 32,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 121,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_redis',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 121,
                      'char' => 32,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 121,
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
                        'value' => 'sessionId',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                        'line' => 121,
                        'char' => 46,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 121,
                      'char' => 46,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 121,
                          'char' => 53,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lifetime',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 121,
                          'char' => 63,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                        'line' => 121,
                        'char' => 63,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 121,
                      'char' => 63,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 121,
                  'char' => 64,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 121,
                'char' => 64,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 122,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 120,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
            'line' => 120,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
          'line' => 119,
          'last-line' => 126,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 127,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 127,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 129,
                    'char' => 15,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_redis',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 129,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 129,
                  'char' => 23,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 129,
                      'char' => 38,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 129,
                    'char' => 38,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 129,
                      'char' => 44,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 129,
                    'char' => 44,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                        'line' => 129,
                        'char' => 51,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_lifetime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                        'line' => 129,
                        'char' => 61,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 129,
                      'char' => 61,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 129,
                    'char' => 61,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 129,
                'char' => 62,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 130,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 128,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
            'line' => 128,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
          'line' => 127,
          'last-line' => 134,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 135,
                'char' => 49,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 135,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 137,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 139,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 139,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 139,
                  'char' => 25,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 139,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                          'line' => 140,
                          'char' => 18,
                        ),
                        'name' => 'getId',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                        'line' => 140,
                        'char' => 26,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 140,
                      'char' => 26,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 141,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                        'line' => 142,
                        'char' => 22,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 142,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 143,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 145,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 145,
                  'char' => 8,
                ),
                'name' => 'removeSessionData',
                'call-type' => 1,
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 145,
                'char' => 28,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 147,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'ternary',
                'left' => 
                array (
                  'type' => 'mcall',
                  'variable' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 147,
                      'char' => 15,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_redis',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 147,
                      'char' => 23,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 147,
                    'char' => 23,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                        'line' => 147,
                        'char' => 33,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 147,
                      'char' => 33,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 147,
                  'char' => 35,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 147,
                      'char' => 42,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_redis',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 147,
                      'char' => 50,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                    'line' => 147,
                    'char' => 50,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                        'line' => 147,
                        'char' => 60,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                      'line' => 147,
                      'char' => 60,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 147,
                  'char' => 62,
                ),
                'extra' => 
                array (
                  'type' => 'bool',
                  'value' => 'true',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                  'line' => 147,
                  'char' => 68,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 147,
                'char' => 68,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 148,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 136,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
            'line' => 136,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
          'line' => 135,
          'last-line' => 152,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 155,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
              'line' => 156,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
                'line' => 154,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
            'line' => 154,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
          'line' => 153,
          'last-line' => 157,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
      'line' => 54,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/redis.zep',
    'line' => 54,
    'char' => 5,
  ),
);