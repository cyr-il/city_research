<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2dbda63bfa23720d6b888c4bdafc1fbf
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Cyril\\Testvilles\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Cyril\\Testvilles\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2dbda63bfa23720d6b888c4bdafc1fbf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2dbda63bfa23720d6b888c4bdafc1fbf::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2dbda63bfa23720d6b888c4bdafc1fbf::$classMap;

        }, null, ClassLoader::class);
    }
}
