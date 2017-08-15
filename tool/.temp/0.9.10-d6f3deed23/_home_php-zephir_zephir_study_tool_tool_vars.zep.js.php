<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Tool',
    'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Vars',
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
          'name' => 'testVarDump',
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
                  'variable' => 'a',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                  'line' => 7,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'ar',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                  'line' => 7,
                  'char' => 18,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
              'line' => 9,
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
                  'variable' => 'a',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'hello',
                    'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                    'line' => 9,
                    'char' => 24,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                  'line' => 9,
                  'char' => 24,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
              'line' => 10,
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
                  'variable' => 'ar',
                  'expr' => 
                  array (
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'int',
                          'value' => '1',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                          'line' => 10,
                          'char' => 20,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                        'line' => 10,
                        'char' => 20,
                      ),
                      1 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'world',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                          'line' => 10,
                          'char' => 29,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                        'line' => 10,
                        'char' => 29,
                      ),
                      2 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'bool',
                          'value' => 'false',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                          'line' => 10,
                          'char' => 36,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                        'line' => 10,
                        'char' => 36,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                    'line' => 10,
                    'char' => 37,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                  'line' => 10,
                  'char' => 37,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
              'line' => 12,
              'char' => 16,
            ),
            3 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'var_dump',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ar',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                      'line' => 12,
                      'char' => 20,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                    'line' => 12,
                    'char' => 20,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                'line' => 12,
                'char' => 21,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
              'line' => 13,
              'char' => 16,
            ),
            4 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'var_dump',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'a',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                      'line' => 13,
                      'char' => 19,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                    'line' => 13,
                    'char' => 19,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                'line' => 13,
                'char' => 20,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
              'line' => 14,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
          'line' => 5,
          'last-line' => 16,
          'char' => 26,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'testVarDump2',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'ret',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
              'line' => 16,
              'char' => 37,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'var_dump',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'equals',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'ret',
                        'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                        'line' => 18,
                        'char' => 23,
                      ),
                      'right' => 
                      array (
                        'type' => 'int',
                        'value' => '1',
                        'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                        'line' => 18,
                        'char' => 26,
                      ),
                      'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                      'line' => 18,
                      'char' => 26,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                    'line' => 18,
                    'char' => 26,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                'line' => 18,
                'char' => 27,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
              'line' => 19,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
          'line' => 16,
          'last-line' => 21,
          'char' => 19,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'testVarExport',
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
                  'variable' => 'a',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                  'line' => 23,
                  'char' => 14,
                ),
                1 => 
                array (
                  'variable' => 'ar',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                  'line' => 23,
                  'char' => 18,
                ),
                2 => 
                array (
                  'variable' => 'ret',
                  'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                  'line' => 23,
                  'char' => 23,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
              'line' => 25,
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
                  'variable' => 'a',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => 'hello',
                    'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                    'line' => 25,
                    'char' => 24,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                  'line' => 25,
                  'char' => 24,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
              'line' => 26,
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
                  'variable' => 'ar',
                  'expr' => 
                  array (
                    'type' => 'array',
                    'left' => 
                    array (
                      0 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'int',
                          'value' => '1',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                          'line' => 26,
                          'char' => 20,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                        'line' => 26,
                        'char' => 20,
                      ),
                      1 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'string',
                          'value' => 'world',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                          'line' => 26,
                          'char' => 29,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                        'line' => 26,
                        'char' => 29,
                      ),
                      2 => 
                      array (
                        'value' => 
                        array (
                          'type' => 'bool',
                          'value' => 'false',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                          'line' => 26,
                          'char' => 36,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                        'line' => 26,
                        'char' => 36,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                    'line' => 26,
                    'char' => 37,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                  'line' => 26,
                  'char' => 37,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
              'line' => 28,
              'char' => 18,
            ),
            3 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'var_export',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'ar',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                      'line' => 28,
                      'char' => 22,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                    'line' => 28,
                    'char' => 22,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                'line' => 28,
                'char' => 23,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
              'line' => 29,
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
                  'variable' => 'ret',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'var_export',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'ar',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                          'line' => 29,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                        'line' => 29,
                        'char' => 32,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                    'line' => 29,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                  'line' => 29,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
              'line' => 31,
              'char' => 18,
            ),
            5 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'var_export',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'a',
                      'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                      'line' => 31,
                      'char' => 21,
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                    'line' => 31,
                    'char' => 21,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                'line' => 31,
                'char' => 22,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
              'line' => 32,
              'char' => 11,
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
                  'variable' => 'ret',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'var_export',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'a',
                          'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                          'line' => 32,
                          'char' => 31,
                        ),
                        'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                        'line' => 32,
                        'char' => 31,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                    'line' => 32,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                  'line' => 32,
                  'char' => 32,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
              'line' => 34,
              'char' => 14,
            ),
            7 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'ret',
                'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
                'line' => 34,
                'char' => 19,
              ),
              'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
              'line' => 35,
              'char' => 5,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
          'line' => 21,
          'last-line' => 36,
          'char' => 19,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/tool/tool/vars.zep',
    'line' => 3,
    'char' => 5,
  ),
);