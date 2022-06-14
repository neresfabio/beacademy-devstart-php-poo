<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0337b4988f55ca6d3e90f341b5b450e0
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Classes\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0337b4988f55ca6d3e90f341b5b450e0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0337b4988f55ca6d3e90f341b5b450e0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0337b4988f55ca6d3e90f341b5b450e0::$classMap;

        }, null, ClassLoader::class);
    }
}
