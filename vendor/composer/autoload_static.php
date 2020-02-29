<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfd4b2ec5b07bcc748dd8e3f38535de02
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfd4b2ec5b07bcc748dd8e3f38535de02::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfd4b2ec5b07bcc748dd8e3f38535de02::$prefixDirsPsr4;
        }, null, ClassLoader::class);
    }
}
