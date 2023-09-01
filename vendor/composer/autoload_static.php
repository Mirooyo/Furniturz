<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitefb2a85ff653589003feb6ab748fe3a3
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
        'B' => 
        array (
            'Badyss\\Ecommerce\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
        'Badyss\\Ecommerce\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitefb2a85ff653589003feb6ab748fe3a3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitefb2a85ff653589003feb6ab748fe3a3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitefb2a85ff653589003feb6ab748fe3a3::$classMap;

        }, null, ClassLoader::class);
    }
}
