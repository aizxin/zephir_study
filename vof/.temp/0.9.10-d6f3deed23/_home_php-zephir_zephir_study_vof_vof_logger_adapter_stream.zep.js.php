<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Logger\\Adapter',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
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
        'name' => 'Vof\\Logger\\Exception',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
        'line' => 22,
        'char' => 25,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
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
        'name' => 'Vof\\Logger\\Adapter',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
        'line' => 23,
        'char' => 23,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
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
        'name' => 'Vof\\Logger\\FormatterInterface',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
        'line' => 24,
        'char' => 34,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
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
        'name' => 'Vof\\Logger\\Formatter\\Line',
        'alias' => 'LineFormatter',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
        'line' => 25,
        'char' => 47,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
    'line' => 42,
    'char' => 2,
  ),
  5 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Logger\\Adapter\\Stream
 *
 * Sends logs to a valid PHP stream
 *
 * <code>
 * use Vof\\Logger;
 * use Vof\\Logger\\Adapter\\Stream;
 *
 * $logger = new Stream("php://stderr");
 *
 * $logger->log("This is a message");
 * $logger->log(Logger::ERROR, "This is an error");
 * $logger->error("This is another error");
 * </code>
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
    'line' => 43,
    'char' => 5,
  ),
  6 => 
  array (
    'type' => 'class',
    'name' => 'Stream',
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
          'name' => '_stream',
          'docblock' => '**
	 * File handler resource
	 *
	 * @var resource
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
          'line' => 58,
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
              'name' => 'name',
              'const' => 0,
              'data-type' => 'string',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 59,
              'char' => 42,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                'line' => 59,
                'char' => 58,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 59,
              'char' => 58,
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
                  'variable' => 'mode',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 61,
                  'char' => 11,
                ),
                1 => 
                array (
                  'variable' => 'stream',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 61,
                  'char' => 19,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 63,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'fetch',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'mode',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 63,
                  'char' => 34,
                ),
                'right' => 
                array (
                  'type' => 'array-access',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'options',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                    'line' => 63,
                    'char' => 25,
                  ),
                  'right' => 
                  array (
                    'type' => 'string',
                    'value' => 'mode',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                    'line' => 63,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 63,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                'line' => 63,
                'char' => 34,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'memstr',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'mode',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                          'line' => 64,
                          'char' => 18,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                        'line' => 64,
                        'char' => 18,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'string',
                          'value' => 'r',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                          'line' => 64,
                          'char' => 23,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                        'line' => 64,
                        'char' => 23,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                    'line' => 64,
                    'char' => 25,
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
                              'value' => 'Stream must be opened in append or write mode',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                              'line' => 65,
                              'char' => 72,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                            'line' => 65,
                            'char' => 72,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                        'line' => 65,
                        'char' => 73,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                      'line' => 66,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 67,
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
                      'variable' => 'mode',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'ab',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                        'line' => 68,
                        'char' => 19,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                      'line' => 68,
                      'char' => 19,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 69,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 74,
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
                  'variable' => 'stream',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'fopen',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'name',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                          'line' => 74,
                          'char' => 26,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                        'line' => 74,
                        'char' => 26,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'mode',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                          'line' => 74,
                          'char' => 32,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                        'line' => 74,
                        'char' => 32,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                    'line' => 74,
                    'char' => 33,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 74,
                  'char' => 33,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
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
                  'type' => 'variable',
                  'value' => 'stream',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 75,
                  'char' => 14,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                'line' => 75,
                'char' => 14,
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
                              'value' => 'Can\'t open stream \'',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                              'line' => 76,
                              'char' => 46,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'name',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                              'line' => 76,
                              'char' => 53,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                            'line' => 76,
                            'char' => 53,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => '\'',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                            'line' => 76,
                            'char' => 58,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                          'line' => 76,
                          'char' => 58,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                        'line' => 76,
                        'char' => 58,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                    'line' => 76,
                    'char' => 59,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 77,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 79,
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
                  'property' => '_stream',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'stream',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                    'line' => 79,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 79,
                  'char' => 29,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 80,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Logger\\Adapter\\Stream constructor
	 *
	 * @param string name
	 * @param array options
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
          'line' => 59,
          'last-line' => 84,
          'char' => 16,
        ),
        1 => 
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                      'line' => 87,
                      'char' => 18,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_formatter',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                      'line' => 87,
                      'char' => 32,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                    'line' => 87,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 87,
                  'char' => 32,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'object',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 87,
                  'char' => 43,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                'line' => 87,
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
                        'class' => 'LineFormatter',
                        'dynamic' => 0,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                        'line' => 88,
                        'char' => 46,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                      'line' => 88,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 89,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 91,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 91,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_formatter',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 91,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                'line' => 91,
                'char' => 26,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 92,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 86,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                'line' => 86,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
            'line' => 86,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
          'line' => 85,
          'last-line' => 96,
          'char' => 16,
        ),
        2 => 
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 97,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 97,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 97,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 97,
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
                  'variable' => 'stream',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 99,
                  'char' => 13,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 101,
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
                  'variable' => 'stream',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                      'line' => 101,
                      'char' => 21,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_stream',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                      'line' => 101,
                      'char' => 29,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                    'line' => 101,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 101,
                  'char' => 29,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 102,
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
                    'value' => 'stream',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                    'line' => 102,
                    'char' => 21,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 102,
                  'char' => 21,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'resource',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 102,
                  'char' => 34,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                'line' => 102,
                'char' => 34,
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
                          'value' => 'Cannot send message to the log because it is invalid',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                          'line' => 103,
                          'char' => 78,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                        'line' => 103,
                        'char' => 78,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                    'line' => 103,
                    'char' => 79,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                  'line' => 104,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 106,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'fwrite',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'variable',
                      'value' => 'stream',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                      'line' => 106,
                      'char' => 16,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                    'line' => 106,
                    'char' => 16,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'mcall',
                      'variable' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                          'line' => 106,
                          'char' => 23,
                        ),
                        'name' => 'getFormatter',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                        'line' => 106,
                        'char' => 39,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                            'line' => 106,
                            'char' => 54,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                          'line' => 106,
                          'char' => 54,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'type',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                            'line' => 106,
                            'char' => 60,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                          'line' => 106,
                          'char' => 60,
                        ),
                        2 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'time',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                            'line' => 106,
                            'char' => 66,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                          'line' => 106,
                          'char' => 66,
                        ),
                        3 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'context',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                            'line' => 106,
                            'char' => 75,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                          'line' => 106,
                          'char' => 75,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                      'line' => 106,
                      'char' => 76,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                    'line' => 106,
                    'char' => 76,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                'line' => 106,
                'char' => 77,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 107,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Writes the log to the stream itself
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
          'line' => 97,
          'last-line' => 111,
          'char' => 16,
        ),
        3 => 
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
                'type' => 'fcall',
                'name' => 'fclose',
                'call-type' => 1,
                'parameters' => 
                array (
                  0 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'property-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'this',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                        'line' => 114,
                        'char' => 22,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_stream',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                        'line' => 114,
                        'char' => 30,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                      'line' => 114,
                      'char' => 30,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                    'line' => 114,
                    'char' => 30,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                'line' => 114,
                'char' => 31,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
              'line' => 115,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
                'line' => 113,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
            'line' => 113,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
          'line' => 112,
          'last-line' => 116,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
      'line' => 43,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/stream.zep',
    'line' => 43,
    'char' => 5,
  ),
);