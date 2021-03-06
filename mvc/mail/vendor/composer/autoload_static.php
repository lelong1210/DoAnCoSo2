<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54cfc0ea7da1a8396cf76ccfd09053ab
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54cfc0ea7da1a8396cf76ccfd09053ab::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54cfc0ea7da1a8396cf76ccfd09053ab::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit54cfc0ea7da1a8396cf76ccfd09053ab::$classMap;

        }, null, ClassLoader::class);
    }
}
