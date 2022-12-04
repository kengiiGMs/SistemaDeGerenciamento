<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc798d4bd660856c7b6d3b4e776bdf0d4
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc798d4bd660856c7b6d3b4e776bdf0d4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc798d4bd660856c7b6d3b4e776bdf0d4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc798d4bd660856c7b6d3b4e776bdf0d4::$classMap;

        }, null, ClassLoader::class);
    }
}
