<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Logger\\Adapter',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
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
        'name' => 'Vof\\Logger\\Adapter',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
        'line' => 22,
        'char' => 23,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
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
        'name' => 'Vof\\Logger\\Exception',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
        'line' => 23,
        'char' => 25,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
        'line' => 24,
        'char' => 34,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
        'line' => 25,
        'char' => 47,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
    'line' => 41,
    'char' => 2,
  ),
  5 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Logger\\Adapter\\File
 *
 * Adapter to store logs in plain text files
 *
 *<code>
 * $logger = new \\Vof\\Logger\\Adapter\\File("app/logs/test.log");
 *
 * $logger->log("This is a message");
 * $logger->log(\\Vof\\Logger::ERROR, "This is an error");
 * $logger->error("This is another error");
 *
 * $logger->close();
 *</code>
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
    'line' => 42,
    'char' => 5,
  ),
  6 => 
  array (
    'type' => 'class',
    'name' => 'File',
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
          'name' => '_fileHandler',
          'docblock' => '**
	 * File handler resource
	 *
	 * @var resource
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
          'line' => 54,
          'char' => 3,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_path',
          'docblock' => '**
	 * File Path
	 *',
          'shortcuts' => 
          array (
            0 => 
            array (
              'type' => 'shortcut',
              'name' => 'get',
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 55,
              'char' => 24,
            ),
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
          'line' => 59,
          'char' => 3,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'protected',
          ),
          'type' => 'property',
          'name' => '_options',
          'docblock' => '**
	 * Path options
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
          'line' => 67,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 68,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                'line' => 68,
                'char' => 58,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 68,
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
                  'expr' => 
                  array (
                    'type' => 'null',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 70,
                    'char' => 18,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 70,
                  'char' => 18,
                ),
                1 => 
                array (
                  'variable' => 'handler',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 70,
                  'char' => 27,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 72,
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
                  'type' => 'typeof',
                  'left' => 
                  array (
                    'type' => 'variable',
                    'value' => 'options',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 72,
                    'char' => 23,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 72,
                  'char' => 23,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 72,
                  'char' => 33,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                'line' => 72,
                'char' => 33,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'fetch',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'mode',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 73,
                      'char' => 35,
                    ),
                    'right' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 73,
                        'char' => 26,
                      ),
                      'right' => 
                      array (
                        'type' => 'string',
                        'value' => 'mode',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 73,
                        'char' => 33,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 73,
                      'char' => 35,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 73,
                    'char' => 35,
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
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                              'line' => 74,
                              'char' => 19,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                            'line' => 74,
                            'char' => 19,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'string',
                              'value' => 'r',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                              'line' => 74,
                              'char' => 24,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                            'line' => 74,
                            'char' => 24,
                          ),
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 74,
                        'char' => 26,
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
                                  'value' => 'Logger must be opened in append or write mode',
                                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                                  'line' => 75,
                                  'char' => 73,
                                ),
                                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                                'line' => 75,
                                'char' => 73,
                              ),
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                            'line' => 75,
                            'char' => 74,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                          'line' => 76,
                          'char' => 5,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 77,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 78,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 80,
              'char' => 4,
            ),
            2 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'identical',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'mode',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 80,
                  'char' => 13,
                ),
                'right' => 
                array (
                  'type' => 'null',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 80,
                  'char' => 20,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                'line' => 80,
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
                      'variable' => 'mode',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'ab',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 81,
                        'char' => 19,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 81,
                      'char' => 19,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 82,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 87,
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
                  'variable' => 'handler',
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                          'line' => 87,
                          'char' => 27,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 87,
                        'char' => 27,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'mode',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                          'line' => 87,
                          'char' => 33,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 87,
                        'char' => 33,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 87,
                    'char' => 34,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 87,
                  'char' => 34,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 88,
              'char' => 4,
            ),
            4 => 
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
                    'value' => 'handler',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 88,
                    'char' => 22,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 88,
                  'char' => 22,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'resource',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 88,
                  'char' => 35,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                'line' => 88,
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
                          'type' => 'concat',
                          'left' => 
                          array (
                            'type' => 'concat',
                            'left' => 
                            array (
                              'type' => 'string',
                              'value' => 'Can\'t open log file at \'',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                              'line' => 89,
                              'char' => 51,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'name',
                              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                              'line' => 89,
                              'char' => 58,
                            ),
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                            'line' => 89,
                            'char' => 58,
                          ),
                          'right' => 
                          array (
                            'type' => 'string',
                            'value' => '\'',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                            'line' => 89,
                            'char' => 63,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                          'line' => 89,
                          'char' => 63,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 89,
                        'char' => 63,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 89,
                    'char' => 64,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 90,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 92,
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
                  'property' => '_path',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'name',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 92,
                    'char' => 25,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 92,
                  'char' => 25,
                ),
                1 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_options',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'options',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 93,
                    'char' => 28,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 93,
                  'char' => 28,
                ),
                2 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_fileHandler',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'handler',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 94,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 94,
                  'char' => 32,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 95,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Logger\\Adapter\\File constructor
	 *
	 * @param string name
	 * @param array options
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
          'line' => 68,
          'last-line' => 99,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 102,
                      'char' => 18,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_formatter',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 102,
                      'char' => 32,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 102,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 102,
                  'char' => 32,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'object',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 102,
                  'char' => 43,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                'line' => 102,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 103,
                        'char' => 46,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 103,
                      'char' => 46,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 104,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 106,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 106,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_formatter',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 106,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                'line' => 106,
                'char' => 26,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 107,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 101,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                'line' => 101,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
            'line' => 101,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
          'line' => 100,
          'last-line' => 111,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 112,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 112,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 112,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 112,
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
                  'variable' => 'fileHandler',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 114,
                  'char' => 18,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 116,
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
                  'variable' => 'fileHandler',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 116,
                      'char' => 26,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_fileHandler',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 116,
                      'char' => 39,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 116,
                    'char' => 39,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 116,
                  'char' => 39,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 117,
              'char' => 4,
            ),
            2 => 
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
                    'value' => 'fileHandler',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 117,
                    'char' => 27,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 117,
                  'char' => 27,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'resource',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 117,
                  'char' => 40,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                'line' => 117,
                'char' => 40,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                          'line' => 118,
                          'char' => 78,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 118,
                        'char' => 78,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 118,
                    'char' => 79,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 119,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 121,
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
                      'value' => 'fileHandler',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 121,
                      'char' => 21,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 121,
                    'char' => 21,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                          'line' => 121,
                          'char' => 28,
                        ),
                        'name' => 'getFormatter',
                        'call-type' => 1,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 121,
                        'char' => 44,
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
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                            'line' => 121,
                            'char' => 59,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                          'line' => 121,
                          'char' => 59,
                        ),
                        1 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'type',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                            'line' => 121,
                            'char' => 65,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                          'line' => 121,
                          'char' => 65,
                        ),
                        2 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'time',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                            'line' => 121,
                            'char' => 71,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                          'line' => 121,
                          'char' => 71,
                        ),
                        3 => 
                        array (
                          'parameter' => 
                          array (
                            'type' => 'variable',
                            'value' => 'context',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                            'line' => 121,
                            'char' => 80,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                          'line' => 121,
                          'char' => 80,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 121,
                      'char' => 81,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 121,
                    'char' => 81,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                'line' => 121,
                'char' => 82,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 122,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Writes the log to the file itself
	 *',
          'return-type' => 
          array (
            'type' => 'return-type',
            'void' => 1,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
            'line' => 113,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
          'line' => 112,
          'last-line' => 126,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 129,
                        'char' => 22,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_fileHandler',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 129,
                        'char' => 35,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 129,
                      'char' => 35,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 129,
                    'char' => 35,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                'line' => 129,
                'char' => 36,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 130,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                'line' => 128,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
            'line' => 128,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
          'line' => 127,
          'last-line' => 134,
          'char' => 16,
        ),
        4 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => '__wakeup',
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
                  'variable' => 'path',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 137,
                  'char' => 11,
                ),
                1 => 
                array (
                  'variable' => 'mode',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 137,
                  'char' => 17,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 139,
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
                  'variable' => 'path',
                  'expr' => 
                  array (
                    'type' => 'property-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'this',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 139,
                      'char' => 19,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_path',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 139,
                      'char' => 25,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 139,
                    'char' => 25,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 139,
                  'char' => 25,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 140,
              'char' => 4,
            ),
            2 => 
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
                    'value' => 'path',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 140,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 140,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'string',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 140,
                  'char' => 31,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                'line' => 140,
                'char' => 31,
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
                          'value' => 'Invalid data passed to Vof\\\\Logger\\\\Adapter\\\\File::__wakeup()',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                          'line' => 141,
                          'char' => 87,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 141,
                        'char' => 87,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 141,
                    'char' => 88,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 142,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 144,
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
                    'value' => 'mode',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 144,
                    'char' => 42,
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 144,
                        'char' => 24,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => '_options',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 144,
                        'char' => 33,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 144,
                      'char' => 33,
                    ),
                    'right' => 
                    array (
                      'type' => 'string',
                      'value' => 'mode',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 144,
                      'char' => 40,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 144,
                    'char' => 42,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 144,
                  'char' => 42,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                'line' => 144,
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
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'mode',
                      'expr' => 
                      array (
                        'type' => 'string',
                        'value' => 'ab',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 145,
                        'char' => 19,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 145,
                      'char' => 19,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 146,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 148,
              'char' => 4,
            ),
            4 => 
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
                    'value' => 'mode',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 148,
                    'char' => 20,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 148,
                  'char' => 20,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'string',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 148,
                  'char' => 31,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                'line' => 148,
                'char' => 31,
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
                          'value' => 'Invalid data passed to Vof\\\\Logger\\\\Adapter\\\\File::__wakeup()',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                          'line' => 149,
                          'char' => 87,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 149,
                        'char' => 87,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 149,
                    'char' => 88,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 150,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 152,
              'char' => 4,
            ),
            5 => 
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 152,
                      'char' => 17,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 152,
                    'char' => 17,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'string',
                      'value' => 'r',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                      'line' => 152,
                      'char' => 22,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 152,
                    'char' => 22,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                'line' => 152,
                'char' => 24,
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
                          'value' => 'Logger must be opened in append or write mode',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                          'line' => 153,
                          'char' => 71,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 153,
                        'char' => 71,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 153,
                    'char' => 72,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 154,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 159,
              'char' => 5,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'object-property',
                  'operator' => 'assign',
                  'variable' => 'this',
                  'property' => '_fileHandler',
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
                          'value' => 'path',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                          'line' => 159,
                          'char' => 38,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 159,
                        'char' => 38,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'mode',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                          'line' => 159,
                          'char' => 44,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                        'line' => 159,
                        'char' => 44,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                    'line' => 159,
                    'char' => 45,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
                  'line' => 159,
                  'char' => 45,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
              'line' => 160,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Opens the internal file handler after unserialization
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
          'line' => 135,
          'last-line' => 161,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
      'line' => 42,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/file.zep',
    'line' => 42,
    'char' => 5,
  ),
);