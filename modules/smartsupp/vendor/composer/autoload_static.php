<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99ce7f53aeb8a13d0239412668564219
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Smartsupp\\LiveChat\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Smartsupp\\LiveChat\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Smartsupp' => 
            array (
                0 => __DIR__ . '/..' . '/smartsupp/chat-code-generator/src',
                1 => __DIR__ . '/..' . '/smartsupp/php-partner-client/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit99ce7f53aeb8a13d0239412668564219::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99ce7f53aeb8a13d0239412668564219::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit99ce7f53aeb8a13d0239412668564219::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit99ce7f53aeb8a13d0239412668564219::$classMap;

        }, null, ClassLoader::class);
    }
}
