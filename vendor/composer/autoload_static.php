<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c6d62eaa17ff730b22ce2fe4d27f7a2
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'DesignPatterns\\Structural\\Proxy\\File' => __DIR__ . '/../..' . '/src/File.php',
        'DesignPatterns\\Structural\\Proxy\\ProxyFile' => __DIR__ . '/../..' . '/src/ProxyFile.php',
        'DesignPatterns\\Structural\\Proxy\\RealFile' => __DIR__ . '/../..' . '/src/RealFile.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit7c6d62eaa17ff730b22ce2fe4d27f7a2::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit7c6d62eaa17ff730b22ce2fe4d27f7a2::$classMap;

        }, null, ClassLoader::class);
    }
}