<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Session\\Adapter',
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
        'line' => 22,
        'char' => 24,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
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
        'name' => 'Vof\\Cache\\Backend\\Memcache',
        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
        'line' => 23,
        'char' => 31,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
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
        'name' => 'Vof\\Cache\\Frontend\\Data',
        'alias' => 'FrontendData',
        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
        'line' => 24,
        'char' => 44,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
    'line' => 51,
    'char' => 2,
  ),
  4 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Session\\Adapter\\Memcache
 *
 * This adapter store sessions in memcache
 *
 * <code>
 * use Vof\\Session\\Adapter\\Memcache;
 *
 * $session = new Memcache(
 *     [
 *         "uniqueId"   => "my-private-app",
 *         "host"       => "127.0.0.1",
 *         "port"       => 11211,
 *         "persistent" => true,
 *         "lifetime"   => 3600,
 *         "prefix"     => "my_",
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
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
    'line' => 52,
    'char' => 5,
  ),
  5 => 
  array (
    'type' => 'class',
    'name' => 'Memcache',
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
          'name' => '_memcache',
          'default' => 
          array (
            'type' => 'null',
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
            'line' => 54,
            'char' => 29,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 54,
              'char' => 35,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
          'line' => 56,
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
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
            'line' => 56,
            'char' => 29,
          ),
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 56,
              'char' => 35,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
          'line' => 60,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 61,
                'char' => 48,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 61,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 63,
                  'char' => 15,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 65,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 65,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'host',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 65,
                      'char' => 27,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 65,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 65,
                  'char' => 29,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 65,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 66,
                          'char' => 22,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => '127.0.0.1',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                        'line' => 66,
                        'char' => 37,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 66,
                      'char' => 37,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 67,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 69,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 69,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'port',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 69,
                      'char' => 27,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 69,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 69,
                  'char' => 29,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 69,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 70,
                          'char' => 22,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'int',
                        'value' => '11211',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                        'line' => 70,
                        'char' => 31,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 70,
                      'char' => 31,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 71,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 73,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 73,
                      'char' => 20,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'persistent',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 73,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 73,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 73,
                  'char' => 35,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 73,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 74,
                          'char' => 28,
                        ),
                      ),
                      'expr' => 
                      array (
                        'type' => 'int',
                        'value' => '0',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                        'line' => 74,
                        'char' => 33,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 74,
                      'char' => 33,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 75,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 77,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 77,
                  'char' => 42,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'options',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 77,
                    'char' => 29,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'lifetime',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 77,
                    'char' => 40,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 77,
                  'char' => 42,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 77,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                        'line' => 78,
                        'char' => 34,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 78,
                      'char' => 34,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 79,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 81,
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
                  'property' => '_memcache',
                  'expr' => 
                  array (
                    'type' => 'new',
                    'class' => 'Memcache',
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
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                                      'line' => 82,
                                      'char' => 32,
                                    ),
                                    'value' => 
                                    array (
                                      'type' => 'property-access',
                                      'left' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => 'this',
                                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                                        'line' => 82,
                                        'char' => 39,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'variable',
                                        'value' => '_lifetime',
                                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                                        'line' => 82,
                                        'char' => 49,
                                      ),
                                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                                      'line' => 82,
                                      'char' => 49,
                                    ),
                                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                                    'line' => 82,
                                    'char' => 49,
                                  ),
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                                'line' => 82,
                                'char' => 50,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                              'line' => 82,
                              'char' => 50,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 82,
                          'char' => 51,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                        'line' => 82,
                        'char' => 51,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 84,
                          'char' => 3,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                        'line' => 84,
                        'char' => 3,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 84,
                    'char' => 4,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 84,
                  'char' => 4,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 86,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                            'line' => 87,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 87,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'open',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                            'line' => 87,
                            'char' => 17,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 87,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 87,
                      'char' => 18,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 87,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                            'line' => 88,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 88,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'close',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                            'line' => 88,
                            'char' => 18,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 88,
                          'char' => 18,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 88,
                      'char' => 19,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 88,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                            'line' => 89,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 89,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'read',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                            'line' => 89,
                            'char' => 17,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 89,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 89,
                      'char' => 18,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 89,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                            'line' => 90,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 90,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'write',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                            'line' => 90,
                            'char' => 18,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 90,
                          'char' => 18,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 90,
                      'char' => 19,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 90,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                            'line' => 91,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 91,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'destroy',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                            'line' => 91,
                            'char' => 20,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 91,
                          'char' => 20,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 91,
                      'char' => 21,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 91,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                            'line' => 92,
                            'char' => 9,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 92,
                          'char' => 9,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => 'gc',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                            'line' => 92,
                            'char' => 15,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 92,
                          'char' => 15,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 93,
                      'char' => 3,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 93,
                    'char' => 3,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 93,
                'char' => 4,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 95,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 95,
                      'char' => 30,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 95,
                    'char' => 30,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 95,
                'char' => 31,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 96,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Session\\Adapter\\Memcache constructor
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
          'line' => 61,
          'last-line' => 98,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 100,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 101,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 99,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
            'line' => 99,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
          'line' => 98,
          'last-line' => 103,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 105,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 106,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 104,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
            'line' => 104,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
          'line' => 103,
          'last-line' => 110,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 111,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 113,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 113,
                      'char' => 35,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 113,
                    'char' => 35,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                        'line' => 113,
                        'char' => 49,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 113,
                      'char' => 49,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 113,
                          'char' => 56,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_lifetime',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 113,
                          'char' => 66,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                        'line' => 113,
                        'char' => 66,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 113,
                      'char' => 66,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 113,
                  'char' => 67,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 113,
                'char' => 67,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
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
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 112,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
            'line' => 112,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
          'line' => 111,
          'last-line' => 118,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 119,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 119,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 121,
                    'char' => 15,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_memcache',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 121,
                    'char' => 26,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 121,
                  'char' => 26,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 121,
                      'char' => 41,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 121,
                    'char' => 41,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'data',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 121,
                      'char' => 47,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 121,
                    'char' => 47,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                        'line' => 121,
                        'char' => 54,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_lifetime',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                        'line' => 121,
                        'char' => 64,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 121,
                      'char' => 64,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 121,
                    'char' => 64,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 121,
                'char' => 65,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
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
                'data-type' => 'bool',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 120,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
            'line' => 120,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
          'line' => 119,
          'last-line' => 126,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 127,
                'char' => 49,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 127,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 129,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 131,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 131,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 131,
                  'char' => 25,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 131,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 132,
                          'char' => 18,
                        ),
                        'name' => 'getId',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                        'line' => 132,
                        'char' => 26,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 132,
                      'char' => 26,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 133,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                        'line' => 134,
                        'char' => 22,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 134,
                      'char' => 22,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 135,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 137,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 137,
                  'char' => 8,
                ),
                'name' => 'removeSessionData',
                'call-type' => 1,
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 137,
                'char' => 28,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 139,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 139,
                      'char' => 17,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 139,
                    'char' => 17,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 139,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 139,
                      'char' => 24,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_memcache',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 139,
                      'char' => 35,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 139,
                    'char' => 35,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                        'line' => 139,
                        'char' => 45,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 139,
                      'char' => 45,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 139,
                  'char' => 47,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 139,
                'char' => 47,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 140,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => '_memcache',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 140,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                        'line' => 140,
                        'char' => 34,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                            'line' => 140,
                            'char' => 44,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                          'line' => 140,
                          'char' => 44,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                      'line' => 140,
                      'char' => 45,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                    'line' => 140,
                    'char' => 45,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                  'line' => 141,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 143,
              'char' => 8,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'true',
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 143,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 144,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 128,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
            'line' => 128,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
          'line' => 127,
          'last-line' => 148,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 151,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
              'line' => 152,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
                'line' => 150,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
            'line' => 150,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
          'line' => 149,
          'last-line' => 153,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
      'line' => 52,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/memcache.zep',
    'line' => 52,
    'char' => 5,
  ),
);