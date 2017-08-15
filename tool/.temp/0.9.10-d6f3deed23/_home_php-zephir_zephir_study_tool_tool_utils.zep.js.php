<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Tool',
    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Utils',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'is_valid_email',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'email',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 5,
              'char' => 55,
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
                'name' => 'preg_match',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => '/^[a-zA-Z0-9._%-]+@([a-zA-Z0-9.-]+\\.)+[a-zA-Z]{2,4}$/u',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 6,
                      'char' => 83,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 6,
                    'char' => 83,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'email',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 6,
                      'char' => 90,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 6,
                    'char' => 90,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 6,
                'char' => 91,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 7,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
          'line' => 5,
          'last-line' => 10,
          'char' => 26,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'is_valid_num',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'num',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 10,
              'char' => 48,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'equals',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'num',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 11,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'fcall',
                  'name' => 'strval',
                  'call-type' => 1,
                  'parameters' => 
                  array (
                    0 => 
                    array (
                      'parameter' => 
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
                              'value' => 'num',
                              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                              'line' => 11,
                              'char' => 40,
                            ),
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 11,
                            'char' => 40,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 11,
                        'char' => 41,
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 11,
                      'char' => 41,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 11,
                  'char' => 42,
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 11,
                'char' => 42,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 12,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
          'line' => 10,
          'last-line' => 15,
          'char' => 26,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'is_valid_mobile',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'mobile',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 15,
              'char' => 57,
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
                'name' => 'preg_match',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => '/^1[0-9]{10}$/i',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 16,
                      'char' => 44,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 16,
                    'char' => 44,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'mobile',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 16,
                      'char' => 52,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 16,
                    'char' => 52,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 16,
                'char' => 53,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 17,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
          'line' => 15,
          'last-line' => 20,
          'char' => 26,
        ),
        3 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'show_filesize',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'bytes',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 20,
              'char' => 51,
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
                  'variable' => 'kb',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 21,
                  'char' => 15,
                ),
                1 => 
                array (
                  'variable' => 'mb',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 21,
                  'char' => 18,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 22,
              'char' => 11,
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
                  'variable' => 'kb',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'ceil',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'div',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'bytes',
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 22,
                            'char' => 29,
                          ),
                          'right' => 
                          array (
                            'type' => 'int',
                            'value' => '1024',
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 22,
                            'char' => 35,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 22,
                          'char' => 35,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 22,
                        'char' => 35,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 22,
                    'char' => 36,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 22,
                  'char' => 36,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 23,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'less',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'kb',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 23,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'int',
                  'value' => '1024',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 23,
                  'char' => 22,
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 23,
                'char' => 22,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'concat',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'kb',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 24,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'KB',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 24,
                      'char' => 29,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 24,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 25,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 26,
              'char' => 11,
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
                  'variable' => 'mb',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'round',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'div',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'kb',
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 26,
                            'char' => 27,
                          ),
                          'right' => 
                          array (
                            'type' => 'int',
                            'value' => '1024',
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 26,
                            'char' => 33,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 26,
                          'char' => 33,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 26,
                        'char' => 33,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'int',
                          'value' => '1',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 26,
                          'char' => 36,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 26,
                        'char' => 36,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 26,
                    'char' => 37,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 26,
                  'char' => 37,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 27,
              'char' => 14,
            ),
            4 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'concat',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'mb',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 27,
                  'char' => 19,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'MB',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 27,
                  'char' => 25,
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 27,
                'char' => 25,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 28,
              'char' => 5,
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
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 20,
                'char' => 63,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
            'line' => 20,
            'char' => 63,
          ),
          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
          'line' => 20,
          'last-line' => 31,
          'char' => 26,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'is_mobile',
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
                  'variable' => 'user_agent',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 32,
                  'char' => 23,
                ),
                1 => 
                array (
                  'variable' => 'mobile_agents',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 32,
                  'char' => 37,
                ),
                2 => 
                array (
                  'variable' => 'device',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 32,
                  'char' => 44,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 33,
              'char' => 11,
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
                  'variable' => 'user_agent',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => '_SERVER',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 33,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'HTTP_USER_AGENT',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 33,
                      'char' => 51,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 33,
                    'char' => 52,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 33,
                  'char' => 52,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 34,
              'char' => 11,
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
                  'variable' => 'mobile_agents',
                  'expr' => 
                  array (
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => '240x320',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 39,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 39,
                      ),
                      1 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'acer',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 46,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 46,
                      ),
                      2 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'acoon',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 54,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 54,
                      ),
                      3 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'acs-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 61,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 61,
                      ),
                      4 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'abacho',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 70,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 70,
                      ),
                      5 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'ahong',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 78,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 78,
                      ),
                      6 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'airness',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 88,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 88,
                      ),
                      7 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'alcatel',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 98,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 98,
                      ),
                      8 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'amoi',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 105,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 105,
                      ),
                      9 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'android',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 115,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 115,
                      ),
                      10 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'anywhereyougo.com',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 135,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 135,
                      ),
                      11 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'applewebkit/525',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 153,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 153,
                      ),
                      12 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'applewebkit/532',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 171,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 171,
                      ),
                      13 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'asus',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 178,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 178,
                      ),
                      14 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'audio',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 186,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 186,
                      ),
                      15 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'au-mic',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 195,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 195,
                      ),
                      16 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'avantogo',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 206,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 206,
                      ),
                      17 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'becker',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 215,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 215,
                      ),
                      18 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'benq',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 222,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 222,
                      ),
                      19 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'bilbo',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 230,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 230,
                      ),
                      20 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'bird',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 237,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 237,
                      ),
                      21 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'blackberry',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 250,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 250,
                      ),
                      22 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'blazer',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 259,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 259,
                      ),
                      23 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'bleu',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 266,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 266,
                      ),
                      24 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'cdm-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 273,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 273,
                      ),
                      25 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'compal',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 282,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 282,
                      ),
                      26 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'coolpad',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 292,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 292,
                      ),
                      27 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'danger',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 301,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 301,
                      ),
                      28 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'dbtel',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 309,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 309,
                      ),
                      29 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'dopod',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 317,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 317,
                      ),
                      30 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'elaine',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 326,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 326,
                      ),
                      31 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'eric',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 333,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 333,
                      ),
                      32 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'etouch',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 342,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 342,
                      ),
                      33 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'fly ',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 349,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 349,
                      ),
                      34 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'fly_',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 356,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 356,
                      ),
                      35 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'fly-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 363,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 363,
                      ),
                      36 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'go.web',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 372,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 372,
                      ),
                      37 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'goodaccess',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 385,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 385,
                      ),
                      38 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'gradiente',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 397,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 397,
                      ),
                      39 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'grundig',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 407,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 407,
                      ),
                      40 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'haier',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 415,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 415,
                      ),
                      41 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'hedy',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 422,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 422,
                      ),
                      42 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'hitachi',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 432,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 432,
                      ),
                      43 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'htc',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 438,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 438,
                      ),
                      44 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'huawei',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 447,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 447,
                      ),
                      45 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'hutchison',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 459,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 459,
                      ),
                      46 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'inno',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 466,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 466,
                      ),
                      47 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'ipad',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 473,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 473,
                      ),
                      48 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'ipaq',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 480,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 480,
                      ),
                      49 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'ipod',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 487,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 487,
                      ),
                      50 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'jbrowser',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 498,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 498,
                      ),
                      51 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'kddi',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 505,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 505,
                      ),
                      52 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'kgt',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 511,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 511,
                      ),
                      53 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'kwc',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 517,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 517,
                      ),
                      54 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'lenovo',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 526,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 526,
                      ),
                      55 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'lg ',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 532,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 532,
                      ),
                      56 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'lg2',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 538,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 538,
                      ),
                      57 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'lg3',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 544,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 544,
                      ),
                      58 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'lg4',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 550,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 550,
                      ),
                      59 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'lg5',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 556,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 556,
                      ),
                      60 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'lg7',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 562,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 562,
                      ),
                      61 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'lg8',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 568,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 568,
                      ),
                      62 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'lg9',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 574,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 574,
                      ),
                      63 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'lg-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 580,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 580,
                      ),
                      64 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'lge-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 587,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 587,
                      ),
                      65 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'lge9',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 594,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 594,
                      ),
                      66 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'longcos',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 604,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 604,
                      ),
                      67 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'maemo',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 612,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 612,
                      ),
                      68 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'mercator',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 623,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 623,
                      ),
                      69 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'meridian',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 634,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 634,
                      ),
                      70 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'micromax',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 645,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 645,
                      ),
                      71 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'midp',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 652,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 652,
                      ),
                      72 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'mini',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 659,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 659,
                      ),
                      73 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'mitsu',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 667,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 667,
                      ),
                      74 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'mmm',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 673,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 673,
                      ),
                      75 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'mmp',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 679,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 679,
                      ),
                      76 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'mobi',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 686,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 686,
                      ),
                      77 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'mot-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 693,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 693,
                      ),
                      78 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'moto',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 700,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 700,
                      ),
                      79 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'nec-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 707,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 707,
                      ),
                      80 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'netfront',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 718,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 718,
                      ),
                      81 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'newgen',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 727,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 727,
                      ),
                      82 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'nexian',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 736,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 736,
                      ),
                      83 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'nf-browser',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 749,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 749,
                      ),
                      84 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'nintendo',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 760,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 760,
                      ),
                      85 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'nitro',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 768,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 768,
                      ),
                      86 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'nokia',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 776,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 776,
                      ),
                      87 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'nook',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 783,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 783,
                      ),
                      88 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'novarra',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 793,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 793,
                      ),
                      89 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'obigo',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 801,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 801,
                      ),
                      90 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'palm',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 808,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 808,
                      ),
                      91 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'panasonic',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 820,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 820,
                      ),
                      92 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'pantech',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 830,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 830,
                      ),
                      93 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'philips',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 840,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 840,
                      ),
                      94 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'phone',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 848,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 848,
                      ),
                      95 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'pg-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 854,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 854,
                      ),
                      96 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'playstation',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 868,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 868,
                      ),
                      97 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'pocket',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 877,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 877,
                      ),
                      98 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'pt-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 883,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 883,
                      ),
                      99 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'qc-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 889,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 889,
                      ),
                      100 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'qtek',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 896,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 896,
                      ),
                      101 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'rover',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 904,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 904,
                      ),
                      102 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'sagem',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 912,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 912,
                      ),
                      103 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'sama',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 919,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 919,
                      ),
                      104 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'samu',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 926,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 926,
                      ),
                      105 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'sanyo',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 934,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 934,
                      ),
                      106 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'samsung',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 944,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 944,
                      ),
                      107 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'sch-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 951,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 951,
                      ),
                      108 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'scooter',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 961,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 961,
                      ),
                      109 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'sec-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 968,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 968,
                      ),
                      110 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'sendo',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 976,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 976,
                      ),
                      111 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'sgh-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 983,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 983,
                      ),
                      112 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'sharp',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 991,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 991,
                      ),
                      113 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'siemens',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1001,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1001,
                      ),
                      114 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'sie-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1008,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1008,
                      ),
                      115 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'softbank',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1019,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1019,
                      ),
                      116 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'sony',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1026,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1026,
                      ),
                      117 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'spice',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1034,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1034,
                      ),
                      118 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'sprint',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1043,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1043,
                      ),
                      119 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'spv',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1049,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1049,
                      ),
                      120 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'symbian',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1059,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1059,
                      ),
                      121 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'tablet',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1068,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1068,
                      ),
                      122 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'talkabout',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1080,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1080,
                      ),
                      123 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'tcl-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1087,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1087,
                      ),
                      124 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'teleca',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1096,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1096,
                      ),
                      125 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'telit',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1104,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1104,
                      ),
                      126 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'tianyu',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1113,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1113,
                      ),
                      127 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'tim-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1120,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1120,
                      ),
                      128 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'toshiba',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1130,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1130,
                      ),
                      129 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'tsm',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1136,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1136,
                      ),
                      130 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'up.browser',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1149,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1149,
                      ),
                      131 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'utec',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1156,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1156,
                      ),
                      132 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'utstar',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1165,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1165,
                      ),
                      133 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'verykool',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1176,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1176,
                      ),
                      134 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'virgin',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1185,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1185,
                      ),
                      135 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'vk-',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1191,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1191,
                      ),
                      136 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'voda',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1198,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1198,
                      ),
                      137 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'voxtel',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1207,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1207,
                      ),
                      138 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'vx',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1212,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1212,
                      ),
                      139 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'wap',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1218,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1218,
                      ),
                      140 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'wellco',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1227,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1227,
                      ),
                      141 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'wig browser',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1241,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1241,
                      ),
                      142 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'wii',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1247,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1247,
                      ),
                      143 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'windows ce',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1260,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1260,
                      ),
                      144 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'wireless',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1271,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1271,
                      ),
                      145 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'xda',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1277,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1277,
                      ),
                      146 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'xde',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1283,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1283,
                      ),
                      147 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'zte',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 34,
                          'char' => 1289,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 34,
                        'char' => 1289,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 34,
                    'char' => 1290,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 34,
                  'char' => 1290,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 35,
              'char' => 15,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'bool',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'is_mobile',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 35,
                    'char' => 34,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 35,
                  'char' => 34,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 36,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'mobile_agents',
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 36,
                'char' => 37,
              ),
              'value' => 'device',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'stristr',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'user_agent',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 37,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 37,
                        'char' => 34,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'device',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 37,
                          'char' => 41,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 37,
                        'char' => 41,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 37,
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
                          'variable' => 'is_mobile',
                          'expr' => 
                          array (
                            'type' => 'bool',
                            'value' => 'true',
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 38,
                            'char' => 37,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 38,
                          'char' => 37,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 39,
                      'char' => 21,
                    ),
                    1 => 
                    array (
                      'type' => 'break',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 40,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 41,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 42,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'is_mobile',
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 42,
                'char' => 25,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 43,
              'char' => 5,
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
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 31,
                'char' => 51,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
            'line' => 31,
            'char' => 51,
          ),
          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
          'line' => 31,
          'last-line' => 46,
          'char' => 26,
        ),
        5 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'get_client_ip',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'type',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'int',
                'value' => '0',
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 46,
                'char' => 54,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 46,
              'char' => 54,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'adv',
              'const' => 0,
              'data-type' => 'bool',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 46,
                'char' => 74,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 46,
              'char' => 74,
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
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'type',
                  'expr' => 
                  array (
                    'type' => 'ternary',
                    'left' => 
                    array (
                      'type' => 'equals',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'type',
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 47,
                        'char' => 26,
                      ),
                      'right' => 
                      array (
                        'type' => 'int',
                        'value' => '1',
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 47,
                        'char' => 29,
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 47,
                      'char' => 29,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 47,
                      'char' => 33,
                    ),
                    'extra' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 47,
                      'char' => 36,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 47,
                    'char' => 36,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 47,
                  'char' => 36,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 48,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'ip',
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 48,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 48,
                  'char' => 22,
                ),
                1 => 
                array (
                  'variable' => 'arr',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 48,
                  'char' => 26,
                ),
                2 => 
                array (
                  'variable' => 'pos',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 48,
                  'char' => 30,
                ),
                3 => 
                array (
                  'variable' => 'longip',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 48,
                  'char' => 37,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 49,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'adv',
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 49,
                'char' => 16,
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
                        'type' => 'variable',
                        'value' => '_SERVER',
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 50,
                        'char' => 29,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'HTTP_X_FORWARDED_FOR',
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 50,
                        'char' => 52,
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 50,
                      'char' => 54,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 50,
                    'char' => 54,
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
                          'variable' => 'arr',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'explode',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => ',',
                                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                  'line' => 51,
                                  'char' => 38,
                                ),
                                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                'line' => 51,
                                'char' => 38,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'array-access',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => '_SERVER',
                                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                    'line' => 51,
                                    'char' => 46,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'string',
                                    'value' => 'HTTP_X_FORWARDED_FOR',
                                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                    'line' => 51,
                                    'char' => 69,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                  'line' => 51,
                                  'char' => 70,
                                ),
                                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                'line' => 51,
                                'char' => 70,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 51,
                            'char' => 71,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 51,
                          'char' => 71,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 52,
                      'char' => 19,
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
                          'variable' => 'pos',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'array_search',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'unknown',
                                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                  'line' => 52,
                                  'char' => 49,
                                ),
                                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                'line' => 52,
                                'char' => 49,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'arr',
                                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                  'line' => 52,
                                  'char' => 53,
                                ),
                                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                'line' => 52,
                                'char' => 53,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 52,
                            'char' => 54,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 52,
                          'char' => 54,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 53,
                      'char' => 18,
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
                          'value' => 'pos',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 53,
                          'char' => 25,
                        ),
                        'right' => 
                        array (
                          'type' => 'bool',
                          'value' => 'false',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 53,
                          'char' => 33,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 53,
                        'char' => 33,
                      ),
                      'statements' => 
                      array (
                        0 => 
                        array (
                          'type' => 'unset',
                          'expr' => 
                          array (
                            'type' => 'list',
                            'left' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'arr',
                                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                'line' => 54,
                                'char' => 30,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'pos',
                                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                'line' => 54,
                                'char' => 34,
                              ),
                              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                              'line' => 54,
                              'char' => 35,
                            ),
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 54,
                            'char' => 36,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 55,
                          'char' => 17,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 56,
                      'char' => 19,
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
                          'variable' => 'ip',
                          'expr' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'trim',
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
                                    'value' => 'arr',
                                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                    'line' => 56,
                                    'char' => 34,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'int',
                                    'value' => '0',
                                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                    'line' => 56,
                                    'char' => 36,
                                  ),
                                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                  'line' => 56,
                                  'char' => 37,
                                ),
                                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                'line' => 56,
                                'char' => 37,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 56,
                            'char' => 38,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 56,
                          'char' => 38,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 57,
                      'char' => 13,
                    ),
                  ),
                  'elseif_statements' => 
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
                            'type' => 'variable',
                            'value' => '_SERVER',
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 57,
                            'char' => 34,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'HTTP_CLIENT_IP',
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 57,
                            'char' => 51,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 57,
                          'char' => 52,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 57,
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
                              'variable' => 'ip',
                              'expr' => 
                              array (
                                'type' => 'array-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => '_SERVER',
                                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                  'line' => 58,
                                  'char' => 33,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'HTTP_CLIENT_IP',
                                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                  'line' => 58,
                                  'char' => 50,
                                ),
                                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                'line' => 58,
                                'char' => 51,
                              ),
                              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                              'line' => 58,
                              'char' => 51,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 59,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 59,
                      'char' => 19,
                    ),
                    1 => 
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
                            'value' => '_SERVER',
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 59,
                            'char' => 34,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => 'REMOTE_ADDR',
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 59,
                            'char' => 48,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 59,
                          'char' => 50,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 59,
                        'char' => 50,
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
                              'variable' => 'ip',
                              'expr' => 
                              array (
                                'type' => 'array-access',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => '_SERVER',
                                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                  'line' => 60,
                                  'char' => 33,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'REMOTE_ADDR',
                                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                  'line' => 60,
                                  'char' => 47,
                                ),
                                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                'line' => 60,
                                'char' => 48,
                              ),
                              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                              'line' => 60,
                              'char' => 48,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 61,
                          'char' => 13,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 62,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 62,
                  'char' => 9,
                ),
              ),
              'elseif_statements' => 
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
                        'type' => 'variable',
                        'value' => '_SERVER',
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 62,
                        'char' => 30,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'REMOTE_ADDR',
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 62,
                        'char' => 44,
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 62,
                      'char' => 46,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 62,
                    'char' => 46,
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
                          'variable' => 'ip',
                          'expr' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => '_SERVER',
                              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                              'line' => 63,
                              'char' => 29,
                            ),
                            'right' => 
                            array (
                              'type' => 'string',
                              'value' => 'REMOTE_ADDR',
                              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                              'line' => 63,
                              'char' => 43,
                            ),
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 63,
                            'char' => 44,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 63,
                          'char' => 44,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 64,
                      'char' => 9,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 65,
                  'char' => 11,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 65,
              'char' => 11,
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
                  'variable' => 'longip',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'sprintf',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => '%u',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 65,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 65,
                        'char' => 34,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'ip2long',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'variable',
                                'value' => 'ip',
                                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                'line' => 65,
                                'char' => 45,
                              ),
                              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                              'line' => 65,
                              'char' => 45,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 65,
                          'char' => 46,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 65,
                        'char' => 46,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 65,
                    'char' => 47,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 65,
                  'char' => 47,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 66,
              'char' => 11,
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
                  'variable' => 'ip',
                  'expr' => 
                  array (
                    'type' => 'ternary',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'longip',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 66,
                      'char' => 25,
                    ),
                    'right' => 
                    array (
                      'type' => 'array',
                      'left' => 
                      array (
                        0 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'ip',
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 66,
                            'char' => 30,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 66,
                          'char' => 30,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'variable',
                            'value' => 'longip',
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 66,
                            'char' => 37,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 66,
                          'char' => 37,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 66,
                      'char' => 39,
                    ),
                    'extra' => 
                    array (
                      'type' => 'array',
                      'left' => 
                      array (
                        0 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'string',
                            'value' => '0.0.0.0',
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 66,
                            'char' => 51,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 66,
                          'char' => 51,
                        ),
                        1 => 
                        array (
                          'value' => 
                          array (
                            'type' => 'int',
                            'value' => '0',
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 66,
                            'char' => 53,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 66,
                          'char' => 53,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 66,
                      'char' => 54,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 66,
                    'char' => 54,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 66,
                  'char' => 54,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 67,
              'char' => 14,
            ),
            5 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'array-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'ip',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 67,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'type',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 67,
                  'char' => 23,
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 67,
                'char' => 24,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 68,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
          'line' => 46,
          'last-line' => 70,
          'char' => 26,
        ),
        6 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'is_wechat',
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
                  'variable' => 'ret',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 71,
                  'char' => 17,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 72,
              'char' => 11,
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
                  'variable' => 'ret',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'strpos',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'strtolower',
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
                                  'value' => '_SERVER',
                                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                  'line' => 72,
                                  'char' => 44,
                                ),
                                'right' => 
                                array (
                                  'type' => 'string',
                                  'value' => 'HTTP_USER_AGENT',
                                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                  'line' => 72,
                                  'char' => 62,
                                ),
                                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                'line' => 72,
                                'char' => 63,
                              ),
                              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                              'line' => 72,
                              'char' => 63,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 72,
                          'char' => 64,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 72,
                        'char' => 64,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'fcall',
                          'name' => 'strtolower',
                          'call-type' => 1,
                          'parameters' => 
                          array (
                            0 => 
                            array (
                              'parameter' => 
                              array (
                                'type' => 'string',
                                'value' => 'MicroMessenger',
                                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                                'line' => 72,
                                'char' => 93,
                              ),
                              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                              'line' => 72,
                              'char' => 93,
                            ),
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 72,
                          'char' => 94,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 72,
                        'char' => 94,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 72,
                    'char' => 95,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 72,
                  'char' => 95,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 73,
              'char' => 10,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'not-identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'ret',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 73,
                  'char' => 18,
                ),
                'right' => 
                array (
                  'type' => 'bool',
                  'value' => 'false',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 73,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 73,
                'char' => 26,
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
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 74,
                    'char' => 24,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 75,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 76,
              'char' => 14,
            ),
            3 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'bool',
                'value' => 'false',
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 76,
                'char' => 21,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 77,
              'char' => 5,
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
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 70,
                'char' => 48,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
            'line' => 70,
            'char' => 48,
          ),
          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
          'line' => 70,
          'last-line' => 82,
          'char' => 26,
        ),
        7 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'httpGet',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'url',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'string',
                'value' => '',
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 84,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 84,
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
                  'variable' => 'curlHandle',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 85,
                  'char' => 23,
                ),
                1 => 
                array (
                  'variable' => 'content',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 85,
                  'char' => 32,
                ),
                2 => 
                array (
                  'variable' => 'timeout',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 85,
                  'char' => 41,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 86,
              'char' => 11,
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
                  'variable' => 'timeout',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'globals_get',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'curl_timeout',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 86,
                          'char' => 52,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 86,
                        'char' => 52,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 86,
                    'char' => 53,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 86,
                  'char' => 53,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 87,
              'char' => 11,
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
                  'variable' => 'curlHandle',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'curl_init',
                    'call-type' => 1,
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 87,
                    'char' => 37,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 87,
                  'char' => 37,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 88,
              'char' => 19,
            ),
            3 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'curlHandle',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 88,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 88,
                    'char' => 33,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_URL',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 88,
                      'char' => 46,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 88,
                    'char' => 46,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'url',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 88,
                      'char' => 52,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 88,
                    'char' => 52,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 88,
                'char' => 53,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 89,
              'char' => 19,
            ),
            4 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'curlHandle',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 89,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 89,
                    'char' => 33,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_RETURNTRANSFER',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 89,
                      'char' => 57,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 89,
                    'char' => 57,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 89,
                      'char' => 61,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 89,
                    'char' => 61,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 89,
                'char' => 62,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 90,
              'char' => 19,
            ),
            5 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'curlHandle',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 90,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 90,
                    'char' => 33,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_SSL_VERIFYPEER',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 90,
                      'char' => 57,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 90,
                    'char' => 57,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 90,
                      'char' => 64,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 90,
                    'char' => 64,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 90,
                'char' => 65,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 91,
              'char' => 19,
            ),
            6 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'curlHandle',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 91,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 91,
                    'char' => 33,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_SSL_VERIFYHOST',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 91,
                      'char' => 57,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 91,
                    'char' => 57,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 91,
                      'char' => 64,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 91,
                    'char' => 64,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 91,
                'char' => 65,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 92,
              'char' => 19,
            ),
            7 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'curlHandle',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 92,
                      'char' => 33,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 92,
                    'char' => 33,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_TIMEOUT',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 92,
                      'char' => 50,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 92,
                    'char' => 50,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'timeout',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 92,
                      'char' => 60,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 92,
                    'char' => 60,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 92,
                'char' => 61,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 93,
              'char' => 11,
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
                  'variable' => 'content',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'curl_exec',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'curlHandle',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 93,
                          'char' => 45,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 93,
                        'char' => 45,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 93,
                    'char' => 46,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 93,
                  'char' => 46,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 94,
              'char' => 18,
            ),
            9 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_close',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'curlHandle',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 94,
                      'char' => 32,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 94,
                    'char' => 32,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 94,
                'char' => 33,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 95,
              'char' => 14,
            ),
            10 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'content',
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 95,
                'char' => 23,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 96,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * HTTP GET 方法
     * @param  string url
     * @author widuu <admin@widuu.com>
     *',
          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
          'line' => 84,
          'last-line' => 103,
          'char' => 26,
        ),
        8 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
            1 => 'static',
          ),
          'type' => 'method',
          'name' => 'httpPost',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'url',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 105,
                'char' => 54,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 105,
              'char' => 54,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'info',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 105,
              'char' => 65,
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
                  'variable' => 'curlHandle',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 106,
                  'char' => 23,
                ),
                1 => 
                array (
                  'variable' => 'content',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 106,
                  'char' => 32,
                ),
                2 => 
                array (
                  'variable' => 'timeout',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 106,
                  'char' => 41,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 107,
              'char' => 10,
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
                    'value' => 'info',
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 107,
                    'char' => 25,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 107,
                  'char' => 25,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 107,
                  'char' => 35,
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 107,
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
                          'value' => 'infomation must be type array',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 108,
                          'char' => 64,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 108,
                        'char' => 64,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'int',
                          'value' => '4004',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 108,
                          'char' => 69,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 108,
                        'char' => 69,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 108,
                    'char' => 70,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 109,
                  'char' => 9,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 110,
              'char' => 11,
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
                  'variable' => 'timeout',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'globals_get',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'curl_timeout',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 110,
                          'char' => 52,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 110,
                        'char' => 52,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 110,
                    'char' => 53,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 110,
                  'char' => 53,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 111,
              'char' => 11,
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
                  'variable' => 'curlHandle',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'curl_init',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'url',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 111,
                          'char' => 41,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 111,
                        'char' => 41,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 111,
                    'char' => 42,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 111,
                  'char' => 42,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 112,
              'char' => 19,
            ),
            4 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'curlHandle',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 112,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 112,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_HEADER',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 112,
                      'char' => 47,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 112,
                    'char' => 47,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 112,
                      'char' => 50,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 112,
                    'char' => 50,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 112,
                'char' => 51,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 113,
              'char' => 19,
            ),
            5 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'curlHandle',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 113,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 113,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_RETURNTRANSFER',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 113,
                      'char' => 55,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 113,
                    'char' => 55,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 113,
                      'char' => 58,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 113,
                    'char' => 58,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 113,
                'char' => 59,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 114,
              'char' => 19,
            ),
            6 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'curlHandle',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 114,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 114,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_POST',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 114,
                      'char' => 45,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 114,
                    'char' => 45,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 114,
                      'char' => 48,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 114,
                    'char' => 48,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 114,
                'char' => 49,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 115,
              'char' => 19,
            ),
            7 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'curlHandle',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 115,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 115,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_POSTFIELDS',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 115,
                      'char' => 51,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 115,
                    'char' => 51,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'fcall',
                      'name' => 'json_encode',
                      'call-type' => 1,
                      'parameters' => 
                      array (
                        0 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'info',
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 115,
                            'char' => 69,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 115,
                          'char' => 69,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'constant',
                            'value' => 'JSON_UNESCAPED_UNICODE',
                            'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                            'line' => 115,
                            'char' => 92,
                          ),
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 115,
                          'char' => 92,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 115,
                      'char' => 93,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 115,
                    'char' => 93,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 115,
                'char' => 94,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 116,
              'char' => 19,
            ),
            8 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'curlHandle',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 116,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 116,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_SSL_VERIFYPEER',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 116,
                      'char' => 55,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 116,
                    'char' => 55,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 116,
                      'char' => 62,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 116,
                    'char' => 62,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 116,
                'char' => 63,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 117,
              'char' => 19,
            ),
            9 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'curlHandle',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 117,
                      'char' => 31,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 117,
                    'char' => 31,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_SSL_VERIFYHOST',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 117,
                      'char' => 55,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 117,
                    'char' => 55,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 117,
                      'char' => 62,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 117,
                    'char' => 62,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 117,
                'char' => 63,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 118,
              'char' => 19,
            ),
            10 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_setopt',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'curlHandle',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 118,
                      'char' => 32,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 118,
                    'char' => 32,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'constant',
                      'value' => 'CURLOPT_TIMEOUT',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 118,
                      'char' => 48,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 118,
                    'char' => 48,
                  ),
                  2 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'timeout',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 118,
                      'char' => 58,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 118,
                    'char' => 58,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 118,
                'char' => 59,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 119,
              'char' => 11,
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
                  'variable' => 'content',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'curl_exec',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'curlHandle',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                          'line' => 119,
                          'char' => 45,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                        'line' => 119,
                        'char' => 45,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 119,
                    'char' => 46,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                  'line' => 119,
                  'char' => 46,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 120,
              'char' => 18,
            ),
            12 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'curl_close',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'curlHandle',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                      'line' => 120,
                      'char' => 32,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                    'line' => 120,
                    'char' => 32,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 120,
                'char' => 33,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 121,
              'char' => 14,
            ),
            13 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'content',
                'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
                'line' => 121,
                'char' => 23,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
              'line' => 122,
              'char' => 5,
            ),
          ),
          'docblock' => '**
     * HTTP POST 方法
     * @param  string url
     * @param  array  info
     * @author widuu <admin@widuu.com>
     *',
          'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
          'line' => 105,
          'last-line' => 123,
          'char' => 26,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/tool/tool/utils.zep',
    'line' => 3,
    'char' => 5,
  ),
);