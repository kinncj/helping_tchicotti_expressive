<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a607ce113a53f880f94763184b3ebc1
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\Stratigility\\' => 18,
            'Zend\\ServiceManager\\' => 20,
            'Zend\\Expressive\\Twig\\' => 21,
            'Zend\\Expressive\\Template\\' => 25,
            'Zend\\Expressive\\Router\\' => 23,
            'Zend\\Expressive\\Helper\\' => 23,
            'Zend\\Expressive\\' => 16,
            'Zend\\Escaper\\' => 13,
            'Zend\\Diactoros\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\Stratigility\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-stratigility/src',
        ),
        'Zend\\ServiceManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-servicemanager/src',
        ),
        'Zend\\Expressive\\Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-expressive-twigrenderer/src',
        ),
        'Zend\\Expressive\\Template\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-expressive-template/src',
        ),
        'Zend\\Expressive\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-expressive-router/src',
            1 => __DIR__ . '/..' . '/zendframework/zend-expressive-fastroute/src',
        ),
        'Zend\\Expressive\\Helper\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-expressive-helpers/src',
        ),
        'Zend\\Expressive\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-expressive/src',
        ),
        'Zend\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-escaper/src',
        ),
        'Zend\\Diactoros\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zend-diactoros/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a607ce113a53f880f94763184b3ebc1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a607ce113a53f880f94763184b3ebc1::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0a607ce113a53f880f94763184b3ebc1::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}