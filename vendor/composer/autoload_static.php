<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit834193067bf25b99d365cba21d01c4b7
{
    public static $files = array (
        'bd9634f2d41831496de0d3dfe4c94881' => __DIR__ . '/..' . '/symfony/polyfill-php56/bootstrap.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        'b33e3d135e5d9e47d845c576147bda89' => __DIR__ . '/..' . '/php-di/php-di/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Util\\' => 22,
            'Symfony\\Polyfill\\Php56\\' => 23,
            'SuperClosure\\' => 13,
        ),
        'P' => 
        array (
            'Psr\\Container\\' => 14,
            'PhpParser\\' => 10,
            'PhpDocReader\\' => 13,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'I' => 
        array (
            'Invoker\\' => 8,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'D' => 
        array (
            'Delight\\Http\\' => 13,
            'Delight\\Db\\' => 11,
            'Delight\\Cookie\\' => 15,
            'Delight\\Base64\\' => 15,
            'Delight\\Auth\\' => 13,
            'DI\\' => 3,
        ),
        'A' => 
        array (
            'Aura\\SqlQuery\\' => 14,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-util',
        ),
        'Symfony\\Polyfill\\Php56\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php56',
        ),
        'SuperClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeremeamia/superclosure/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'PhpDocReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/phpdoc-reader/src/PhpDocReader',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'Invoker\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/invoker/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'Delight\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/delight-im/http/src',
        ),
        'Delight\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/delight-im/db/src',
        ),
        'Delight\\Cookie\\' => 
        array (
            0 => __DIR__ . '/..' . '/delight-im/cookie/src',
        ),
        'Delight\\Base64\\' => 
        array (
            0 => __DIR__ . '/..' . '/delight-im/base64/src',
        ),
        'Delight\\Auth\\' => 
        array (
            0 => __DIR__ . '/..' . '/delight-im/auth/src',
        ),
        'DI\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-di/php-di/src',
        ),
        'Aura\\SqlQuery\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/sqlquery/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit834193067bf25b99d365cba21d01c4b7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit834193067bf25b99d365cba21d01c4b7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
