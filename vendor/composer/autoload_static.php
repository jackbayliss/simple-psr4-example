<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcfe2582500340dbb925f2f49bcd2bd48
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JackBayliss\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JackBayliss\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/JackBayliss',
        ),
    );

    public static $classMap = array (
        'JackBayliss\\Models\\User' => __DIR__ . '/../..' . '/app/JackBayliss/Models/User.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcfe2582500340dbb925f2f49bcd2bd48::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcfe2582500340dbb925f2f49bcd2bd48::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitcfe2582500340dbb925f2f49bcd2bd48::$classMap;

        }, null, ClassLoader::class);
    }
}
