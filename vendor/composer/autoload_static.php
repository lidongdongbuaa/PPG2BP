<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07599b5a385f585dbcdc1829bd317a6c
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Curl\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07599b5a385f585dbcdc1829bd317a6c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07599b5a385f585dbcdc1829bd317a6c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
