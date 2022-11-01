<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b968f58b727f4815ecdee809cf66ddd
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Rafael\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Rafael\\' => 
        array (
            0 => __DIR__ . '/..' . '/Rafael/php-classes/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b968f58b727f4815ecdee809cf66ddd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b968f58b727f4815ecdee809cf66ddd::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0b968f58b727f4815ecdee809cf66ddd::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0b968f58b727f4815ecdee809cf66ddd::$classMap;

        }, null, ClassLoader::class);
    }
}
