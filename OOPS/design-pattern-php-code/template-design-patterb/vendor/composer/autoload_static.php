<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8203b0d64de48b210459c2ebd77eafb8
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8203b0d64de48b210459c2ebd77eafb8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8203b0d64de48b210459c2ebd77eafb8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
