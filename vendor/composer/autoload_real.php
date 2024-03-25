<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc648d909b9e6bdb1ea511d11f3afcd7d
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitc648d909b9e6bdb1ea511d11f3afcd7d', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc648d909b9e6bdb1ea511d11f3afcd7d', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc648d909b9e6bdb1ea511d11f3afcd7d::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
