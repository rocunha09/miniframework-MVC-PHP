<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9a9cea650aa1384ee216fe6a0d654cb
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9a9cea650aa1384ee216fe6a0d654cb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9a9cea650aa1384ee216fe6a0d654cb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf9a9cea650aa1384ee216fe6a0d654cb::$classMap;

        }, null, ClassLoader::class);
    }
}