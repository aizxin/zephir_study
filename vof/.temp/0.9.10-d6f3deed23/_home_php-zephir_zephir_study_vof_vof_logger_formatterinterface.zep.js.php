<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Logger',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatterinterface.zep',
    'line' => 26,
    'char' => 2,
  ),
  1 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Logger\\FormatterInterface
 *
 * This interface must be implemented by formatters in Vof\\Logger
 *',
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatterinterface.zep',
    'line' => 27,
    'char' => 9,
  ),
  2 => 
  array (
    'type' => 'interface',
    'name' => 'FormatterInterface',
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'format',
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
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatterinterface.zep',
              'line' => 38,
              'char' => 39,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'type',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatterinterface.zep',
              'line' => 38,
              'char' => 49,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'timestamp',
              'const' => 0,
              'data-type' => 'int',
              'mandatory' => 0,
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatterinterface.zep',
              'line' => 38,
              'char' => 64,
            ),
            3 => 
            array (
              'type' => 'parameter',
              'name' => 'context',
              'const' => 0,
              'data-type' => 'variable',
              'mandatory' => 0,
              'default' => 
              array (
                'type' => 'null',
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatterinterface.zep',
                'line' => 38,
                'char' => 84,
              ),
              'reference' => 0,
              'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatterinterface.zep',
              'line' => 38,
              'char' => 84,
            ),
          ),
          'docblock' => '**
	 * Applies a format to a message before sent it to the internal log
	 *
	 * @param string message
	 * @param int type
	 * @param int timestamp
	 * @param array $context
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
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatterinterface.zep',
                'line' => 38,
                'char' => 95,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'array',
                'mandatory' => 0,
                'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatterinterface.zep',
                'line' => 38,
                'char' => 101,
              ),
            ),
            'void' => 0,
            'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatterinterface.zep',
            'line' => 38,
            'char' => 101,
          ),
          'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatterinterface.zep',
          'line' => 38,
          'last-line' => 39,
          'char' => 16,
        ),
      ),
      'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatterinterface.zep',
      'line' => 39,
      'char' => 1,
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/logger/formatterinterface.zep',
    'line' => 0,
    'char' => 0,
  ),
);