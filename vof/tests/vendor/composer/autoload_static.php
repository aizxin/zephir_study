<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2c62fe9d7056f7d1af6fe78f355da95
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita2c62fe9d7056f7d1af6fe78f355da95::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2c62fe9d7056f7d1af6fe78f355da95::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
