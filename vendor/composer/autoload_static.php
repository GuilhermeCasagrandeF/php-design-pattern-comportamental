<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdcceca4f011fa7d11c78338d40c0fcd5
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\DesignPattern\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\DesignPattern\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdcceca4f011fa7d11c78338d40c0fcd5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdcceca4f011fa7d11c78338d40c0fcd5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdcceca4f011fa7d11c78338d40c0fcd5::$classMap;

        }, null, ClassLoader::class);
    }
}
