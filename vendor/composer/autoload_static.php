<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc648d909b9e6bdb1ea511d11f3afcd7d
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'KevinBernard\\PhpCrypto\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'KevinBernard\\PhpCrypto\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc648d909b9e6bdb1ea511d11f3afcd7d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc648d909b9e6bdb1ea511d11f3afcd7d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc648d909b9e6bdb1ea511d11f3afcd7d::$classMap;

        }, null, ClassLoader::class);
    }
}