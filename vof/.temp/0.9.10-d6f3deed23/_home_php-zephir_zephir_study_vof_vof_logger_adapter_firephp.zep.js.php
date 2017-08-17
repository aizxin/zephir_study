<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Logger\\Adapter',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
    'line' => 23,
    'char' => 3,
  ),
  1 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Vof\\Logger\\Adapter',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
        'line' => 23,
        'char' => 23,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
    'line' => 24,
    'char' => 3,
  ),
  2 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Vof\\Logger\\Exception',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
        'line' => 24,
        'char' => 25,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
    'line' => 25,
    'char' => 3,
  ),
  3 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Vof\\Logger\\FormatterInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
        'line' => 25,
        'char' => 34,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
    'line' => 26,
    'char' => 3,
  ),
  4 => 
  array (
    'type' => 'use',
    'aliases' => 
    array (
      0 => 
      array (
        'name' => 'Vof\\Logger\\Formatter\\Firephp',
        'alias' => 'FirePhpFormatter',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
        'line' => 26,
        'char' => 53,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
    'line' => 42,
    'char' => 2,
  ),
  5 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Logger\\Adapter\\Firephp
 *
 * Sends logs to FirePHP
 *
 *<code>
 * use Vof\\Logger\\Adapter\\Firephp;
 * use Vof\\Logger;
 *
 * $logger = new Firephp();
 *
 * $logger->log(Logger::ERROR, "This is an error");
 * $logger->error("This is another error");
 *</code>
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
    'line' => 43,
    'char' => 5,
  ),
  6 => 
  array (
    'type' => 'class',
    'name' => 'Firephp',
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
            0 => 'private',
          ),
          'type' => 'property',
          'name' => '_initialized',
          'default' => 
          array (
            'type' => 'bool',
            'value' => 'false',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
            'line' => 45,
            'char' => 30,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
          'line' => 47,
          'char' => 8,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'property',
          'name' => '_index',
          'default' => 
          array (
            'type' => 'int',
            'value' => '1',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
            'line' => 47,
            'char' => 20,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
          'line' => 51,
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
          'name' => 'getFormatter',
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
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                      'line' => 54,
                      'char' => 18,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_formatter',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                      'line' => 54,
                      'char' => 32,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                    'line' => 54,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 54,
                  'char' => 32,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'object',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 54,
                  'char' => 43,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                'line' => 54,
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
                      'assign-type' => 'object-property',
                      'operator' => 'assign',
                      'variable' => 'this',
                      'property' => '_formatter',
                      'expr' => 
                      array (
                        'type' => 'new',
                        'class' => 'FirePhpFormatter',
                        'dynamic' => 0,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                        'line' => 55,
                        'char' => 49,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                      'line' => 55,
                      'char' => 49,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 56,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
              'line' => 58,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'property-access',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'this',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 58,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_formatter',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 58,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                'line' => 58,
                'char' => 26,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
              'line' => 59,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Returns the internal formatter
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
                  'value' => 'FormatterInterface',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 53,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                'line' => 53,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
            'line' => 53,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
          'line' => 52,
          'last-line' => 63,
          'char' => 16,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'logInternal',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'message',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
              'line' => 64,
              'char' => 44,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'type',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
              'line' => 64,
              'char' => 54,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'time',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
              'line' => 64,
              'char' => 64,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
              'line' => 64,
              'char' => 79,
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
                  'variable' => 'chunk',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 66,
                  'char' => 12,
                ),
                1 => 
                array (
                  'variable' => 'format',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 66,
                  'char' => 20,
                ),
                2 => 
                array (
                  'variable' => 'chString',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 66,
                  'char' => 30,
                ),
                3 => 
                array (
                  'variable' => 'content',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 66,
                  'char' => 39,
                ),
                4 => 
                array (
                  'variable' => 'key',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 66,
                  'char' => 44,
                ),
                5 => 
                array (
                  'variable' => 'index',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 66,
                  'char' => 51,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
              'line' => 68,
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
                  'type' => 'property-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'this',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                    'line' => 68,
                    'char' => 12,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_initialized',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                    'line' => 68,
                    'char' => 26,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 68,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                'line' => 68,
                'char' => 26,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'header',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'X-Wf-Protocol-1: http://meta.wildfirehq.org/Protocol/JsonStream/0.2',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                          'line' => 69,
                          'char' => 80,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                        'line' => 69,
                        'char' => 80,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                    'line' => 69,
                    'char' => 81,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 70,
                  'char' => 9,
                ),
                1 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'header',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'X-Wf-1-Plugin-1: http://meta.firephp.org/Wildfire/Plugin/FirePHP/Library-FirePHPCore/0.3',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                          'line' => 70,
                          'char' => 101,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                        'line' => 70,
                        'char' => 101,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                    'line' => 70,
                    'char' => 102,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 71,
                  'char' => 9,
                ),
                2 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'header',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'X-Wf-Structure-1: http://meta.firephp.org/Wildfire/Structure/FirePHP/FirebugConsole/0.1',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                          'line' => 71,
                          'char' => 100,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                        'line' => 71,
                        'char' => 100,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                    'line' => 71,
                    'char' => 101,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 73,
                  'char' => 6,
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
                      'property' => '_initialized',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'true',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                        'line' => 73,
                        'char' => 33,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                      'line' => 73,
                      'char' => 33,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 74,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
              'line' => 76,
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
                  'variable' => 'format',
                  'expr' => 
                  array (
                    'type' => 'mcall',
                    'variable' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                        'line' => 76,
                        'char' => 21,
                      ),
                      'name' => 'getFormatter',
                      'call-type' => 1,
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                      'line' => 76,
                      'char' => 37,
                    ),
                    'name' => 'format',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'message',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                          'line' => 76,
                          'char' => 52,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                        'line' => 76,
                        'char' => 52,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'type',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                          'line' => 76,
                          'char' => 58,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                        'line' => 76,
                        'char' => 58,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'time',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                          'line' => 76,
                          'char' => 64,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                        'line' => 76,
                        'char' => 64,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'context',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                          'line' => 76,
                          'char' => 73,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                        'line' => 76,
                        'char' => 73,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                    'line' => 76,
                    'char' => 74,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 76,
                  'char' => 74,
                ),
                1 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'chunk',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'str_split',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'format',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                          'line' => 77,
                          'char' => 28,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                        'line' => 77,
                        'char' => 28,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'int',
                          'value' => '4500',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                          'line' => 77,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                        'line' => 77,
                        'char' => 34,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                    'line' => 77,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 77,
                  'char' => 35,
                ),
                2 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'index',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                      'line' => 78,
                      'char' => 17,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_index',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                      'line' => 78,
                      'char' => 24,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                    'line' => 78,
                    'char' => 24,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 78,
                  'char' => 24,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
              'line' => 80,
              'char' => 5,
            ),
            3 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'chunk',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                'line' => 80,
                'char' => 30,
              ),
              'key' => 'key',
              'value' => 'chString',
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
                        'type' => 'concat',
                        'left' => 
                        array (
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'string',
                              'value' => 'X-Wf-1-1-1-',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                              'line' => 81,
                              'char' => 32,
                            ),
                            'right' => 
                            array (
                              'type' => 'cast',
                              'left' => 'string',
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'index',
                                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                                'line' => 81,
                                'char' => 49,
                              ),
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                              'line' => 81,
                              'char' => 49,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                            'line' => 81,
                            'char' => 49,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => ': ',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                            'line' => 81,
                            'char' => 56,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                          'line' => 81,
                          'char' => 56,
                        ),
                        'right' => 
                        array (
                          'type' => 'variable',
                          'value' => 'chString',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                          'line' => 81,
                          'char' => 66,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                        'line' => 81,
                        'char' => 66,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                      'line' => 81,
                      'char' => 66,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 83,
                  'char' => 5,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'isset',
                    'left' => 
                    array (
                      'type' => 'list',
                      'left' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'chunk',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                          'line' => 83,
                          'char' => 18,
                        ),
                        'right' => 
                        array (
                          'type' => 'add',
                          'left' => 
                          array (
                            'type' => 'variable',
                            'value' => 'key',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                            'line' => 83,
                            'char' => 23,
                          ),
                          'right' => 
                          array (
                            'type' => 'int',
                            'value' => '1',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                            'line' => 83,
                            'char' => 26,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                          'line' => 83,
                          'char' => 26,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                        'line' => 83,
                        'char' => 27,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                      'line' => 83,
                      'char' => 29,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                    'line' => 83,
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
                          'operator' => 'concat-assign',
                          'variable' => 'content',
                          'expr' => 
                          array (
                            'type' => 'string',
                            'value' => '|\\\\',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                            'line' => 84,
                            'char' => 24,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                          'line' => 84,
                          'char' => 24,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                      'line' => 85,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 87,
                  'char' => 9,
                ),
                2 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'header',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'content',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                          'line' => 87,
                          'char' => 18,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                        'line' => 87,
                        'char' => 18,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                    'line' => 87,
                    'char' => 19,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 89,
                  'char' => 6,
                ),
                3 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'incr',
                      'variable' => 'index',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                      'line' => 89,
                      'char' => 15,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 90,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
              'line' => 92,
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
                  'property' => '_index',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'index',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                    'line' => 92,
                    'char' => 27,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                  'line' => 92,
                  'char' => 27,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
              'line' => 93,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Writes the log to the stream itself
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
            'line' => 65,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
          'line' => 64,
          'last-line' => 97,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                'line' => 100,
                'char' => 14,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
              'line' => 101,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Closes the logger
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
                'line' => 99,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
            'line' => 99,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
          'line' => 98,
          'last-line' => 102,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
      'line' => 43,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/firephp.zep',
    'line' => 43,
    'char' => 5,
  ),
);