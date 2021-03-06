<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitad8b4bac0b49a3c238e90e7dde87b3d4
{
    public static $files = array (
        '6bc45d0537e6858fd179bdbc31d62c79' => __DIR__ . '/..' . '/raveren/kint/Kint.class.php',
        'f1d513d50bfd65b27deec8bf404ace94' => __DIR__ . '/../../..' . '/src/support/exceptions.php',
        '9ce4a06b69c5e6c13b3a16498d85acad' => __DIR__ . '/../../..' . '/src/sandbox.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitad8b4bac0b49a3c238e90e7dde87b3d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitad8b4bac0b49a3c238e90e7dde87b3d4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
