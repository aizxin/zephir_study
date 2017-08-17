<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Vof\\Session\\Adapter',
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/files.zep',
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
        'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/files.zep',
        'line' => 22,
        'char' => 24,
      ),
    ),
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/files.zep',
    'line' => 44,
    'char' => 2,
  ),
  2 => 
  array (
    'type' => 'comment',
    'value' => '**
 * Vof\\Session\\Adapter\\Files
 *
 * This adapter store sessions in plain files
 *
 * <code>
 * use Vof\\Session\\Adapter\\Files;
 *
 * $session = new Files(
 *     [
 *         "uniqueId" => "my-private-app",
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
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/files.zep',
    'line' => 45,
    'char' => 5,
  ),
  3 => 
  array (
    'type' => 'class',
    'name' => 'Files',
    'abstract' => 0,
    'final' => 0,
    'extends' => 'Adapter',
    'file' => '/home/php-zephir/zephir_study/vof/vof/session/adapter/files.zep',
    'line' => 45,
    'char' => 5,
  ),
);