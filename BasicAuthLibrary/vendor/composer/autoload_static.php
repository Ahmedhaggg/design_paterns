<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c5601d6e76d79e0c7e3fb80a7b97247
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BasicAuth\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BasicAuth\\' => 
        array (
            0 => __DIR__ . '/../..' . '/BasicAuth',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9c5601d6e76d79e0c7e3fb80a7b97247::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9c5601d6e76d79e0c7e3fb80a7b97247::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9c5601d6e76d79e0c7e3fb80a7b97247::$classMap;

        }, null, ClassLoader::class);
    }
}