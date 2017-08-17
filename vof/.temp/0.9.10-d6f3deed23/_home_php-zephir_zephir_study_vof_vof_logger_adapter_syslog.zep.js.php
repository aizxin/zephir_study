<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Logger\\Adapter',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
        'line' => 22,
        'char' => 25,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
        'line' => 23,
        'char' => 23,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
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
        'name' => 'Vof\\Logger\\Formatter\\Syslog',
        'alias' => 'SyslogFormatter',
        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
        'line' => 24,
        'char' => 51,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
    'line' => 48,
    'char' => 2,
  ),
  4 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Logger\\Adapter\\Syslog
 *
 * Sends logs to the system logger
 *
 * <code>
 * use Vof\\Logger;
 * use Vof\\Logger\\Adapter\\Syslog;
 *
 * // LOG_USER is the only valid log type under Windows operating systems
 * $logger = new Syslog(
 *     "ident",
 *     [
 *         "option"   => LOG_CONS | LOG_NDELAY | LOG_PID,
 *         "facility" => LOG_USER,
 *     ]
 * );
 *
 * $logger->log("This is a message");
 * $logger->log(Logger::ERROR, "This is an error");
 * $logger->error("This is another error");
 *</code>
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
    'line' => 49,
    'char' => 5,
  ),
  5 => 
  array (
    'type' => 'class',
    'name' => 'Syslog',
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
          'name' => '_opened',
          'default' => 
          array (
            'type' => 'bool',
            'value' => 'false',
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
            'line' => 52,
            'char' => 27,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
          'line' => 59,
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
              'data-type' => 'variable',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 60,
              'char' => 34,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                'line' => 60,
                'char' => 50,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 60,
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
                  'variable' => 'option',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 62,
                  'char' => 13,
                ),
                1 => 
                array (
                  'variable' => 'facility',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 62,
                  'char' => 23,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 64,
              'char' => 4,
            ),
            1 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'name',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                'line' => 64,
                'char' => 11,
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
                      'type' => 'fetch',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'option',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 66,
                        'char' => 40,
                      ),
                      'right' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                          'line' => 66,
                          'char' => 29,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'option',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                          'line' => 66,
                          'char' => 38,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 66,
                        'char' => 40,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                      'line' => 66,
                      'char' => 40,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                    'line' => 66,
                    'char' => 40,
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
                          'variable' => 'option',
                          'expr' => 
                          array (
                            'type' => 'constant',
                            'value' => 'LOG_ODELAY',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                            'line' => 67,
                            'char' => 28,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                          'line' => 67,
                          'char' => 28,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                      'line' => 68,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 70,
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
                        'value' => 'facility',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 70,
                        'char' => 44,
                      ),
                      'right' => 
                      array (
                        'type' => 'array-access',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'options',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                          'line' => 70,
                          'char' => 31,
                        ),
                        'right' => 
                        array (
                          'type' => 'string',
                          'value' => 'facility',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                          'line' => 70,
                          'char' => 42,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 70,
                        'char' => 44,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                      'line' => 70,
                      'char' => 44,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                    'line' => 70,
                    'char' => 44,
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
                          'variable' => 'facility',
                          'expr' => 
                          array (
                            'type' => 'constant',
                            'value' => 'LOG_USER',
                            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                            'line' => 71,
                            'char' => 28,
                          ),
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                          'line' => 71,
                          'char' => 28,
                        ),
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                      'line' => 72,
                      'char' => 4,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 74,
                  'char' => 10,
                ),
                2 => 
                array (
                  'type' => 'fcall',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'openlog',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'name',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                          'line' => 74,
                          'char' => 16,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 74,
                        'char' => 16,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'option',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                          'line' => 74,
                          'char' => 24,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 74,
                        'char' => 24,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'facility',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                          'line' => 74,
                          'char' => 34,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 74,
                        'char' => 34,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                    'line' => 74,
                    'char' => 35,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 75,
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
                      'property' => '_opened',
                      'expr' => 
                      array (
                        'type' => 'bool',
                        'value' => 'true',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 75,
                        'char' => 28,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                      'line' => 75,
                      'char' => 28,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 76,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 78,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Vof\\Logger\\Adapter\\Syslog constructor
	 *
	 * @param string name
	 * @param array options
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
          'line' => 60,
          'last-line' => 82,
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
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                      'line' => 85,
                      'char' => 18,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => '_formatter',
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                      'line' => 85,
                      'char' => 32,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                    'line' => 85,
                    'char' => 32,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 85,
                  'char' => 32,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'object',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 85,
                  'char' => 43,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                'line' => 85,
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
                        'class' => 'SyslogFormatter',
                        'dynamic' => 0,
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 86,
                        'char' => 48,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                      'line' => 86,
                      'char' => 48,
                    ),
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 87,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 89,
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
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 89,
                  'char' => 15,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => '_formatter',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 89,
                  'char' => 26,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                'line' => 89,
                'char' => 26,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 90,
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
                  'value' => 'SyslogFormatter',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 84,
                  'char' => 2,
                ),
                'collection' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                'line' => 84,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
            'line' => 84,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
          'line' => 83,
          'last-line' => 94,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 95,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 95,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 95,
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 95,
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
                  'variable' => 'appliedFormat',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 97,
                  'char' => 20,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 99,
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
                  'variable' => 'appliedFormat',
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
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 99,
                        'char' => 28,
                      ),
                      'name' => 'getFormatter',
                      'call-type' => 1,
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                      'line' => 99,
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
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                          'line' => 99,
                          'char' => 59,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 99,
                        'char' => 59,
                      ),
                      1 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'type',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                          'line' => 99,
                          'char' => 65,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 99,
                        'char' => 65,
                      ),
                      2 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'time',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                          'line' => 99,
                          'char' => 71,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 99,
                        'char' => 71,
                      ),
                      3 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'context',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                          'line' => 99,
                          'char' => 80,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 99,
                        'char' => 80,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                    'line' => 99,
                    'char' => 81,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 99,
                  'char' => 81,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 100,
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
                    'value' => 'appliedFormat',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                    'line' => 100,
                    'char' => 29,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 100,
                  'char' => 29,
                ),
                'right' => 
                array (
                  'type' => 'string',
                  'value' => 'array',
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 100,
                  'char' => 39,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                'line' => 100,
                'char' => 39,
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
                          'value' => 'The formatted message is not valid',
                          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                          'line' => 101,
                          'char' => 60,
                        ),
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 101,
                        'char' => 60,
                      ),
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                    'line' => 101,
                    'char' => 61,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 102,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 104,
              'char' => 8,
            ),
            3 => 
            array (
              'type' => 'fcall',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'syslog',
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
                        'value' => 'appliedFormat',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 104,
                        'char' => 23,
                      ),
                      'right' => 
                      array (
                        'type' => 'int',
                        'value' => '0',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 104,
                        'char' => 25,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                      'line' => 104,
                      'char' => 26,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                    'line' => 104,
                    'char' => 26,
                  ),
                  1 => 
                  array (
                    'parameter' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'appliedFormat',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 104,
                        'char' => 41,
                      ),
                      'right' => 
                      array (
                        'type' => 'int',
                        'value' => '1',
                        'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                        'line' => 104,
                        'char' => 43,
                      ),
                      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                      'line' => 104,
                      'char' => 44,
                    ),
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                    'line' => 104,
                    'char' => 44,
                  ),
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                'line' => 104,
                'char' => 45,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 105,
              'char' => 2,
            ),
          ),
          'docblock' => '**
	 * Writes the log to the stream itself
	 *',
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
          'line' => 95,
          'last-line' => 109,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                    'line' => 112,
                    'char' => 12,
                  ),
                  'right' => 
                  array (
                    'type' => 'variable',
                    'value' => '_opened',
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                    'line' => 112,
                    'char' => 21,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 112,
                  'char' => 21,
                ),
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                'line' => 112,
                'char' => 21,
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
                    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                    'line' => 113,
                    'char' => 15,
                  ),
                  'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                  'line' => 114,
                  'char' => 3,
                ),
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 116,
              'char' => 8,
            ),
            1 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'fcall',
                'name' => 'closelog',
                'call-type' => 1,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                'line' => 116,
                'char' => 20,
              ),
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
              'line' => 117,
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
                'line' => 111,
                'char' => 2,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
            'line' => 111,
            'char' => 2,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
          'line' => 110,
          'last-line' => 119,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
      'line' => 49,
      'char' => 5,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/adapter/syslog.zep',
    'line' => 49,
    'char' => 5,
  ),
);