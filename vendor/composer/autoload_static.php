<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6f4ced8d4705f13e7881e267df9f8a96
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\Extensions\\' => 16,
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Services\\' => 9,
        ),

        'P' => 
        array (
            'Post\\' => 5,
        ),
        'M' => 
        array (
            'MyFramework\\' => 12,
            'Model\\' => 6,
        ),
        'E' => 
        array (
            'Entity\\' => 7,
        ),

        'C' => 
        array (
            'Config\\' => 7,
        ),
        'A' => 
        array (
            'Appdefault\\' => 11,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\Extensions\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/extensions/src',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Services',
        ),
        'Post\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Post',
        ),
        'MyFramework\\' => 
        array (
            0 => __DIR__ . '/..' . '/MyFramework',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Repository',
        ),
        'Entity\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Entity',
        ),
        'Config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Config',
        ),
        'Appdefault\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App/Appdefault',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_Extensions_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/extensions/lib',
            ),
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6f4ced8d4705f13e7881e267df9f8a96::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6f4ced8d4705f13e7881e267df9f8a96::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit6f4ced8d4705f13e7881e267df9f8a96::$prefixesPsr0;
        }, null, ClassLoader::class);
    }
}
