<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit93d5dbe4099478c30e41ac078561afac
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'Yrehan32\\PhpHaversine\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Yrehan32\\PhpHaversine\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit93d5dbe4099478c30e41ac078561afac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit93d5dbe4099478c30e41ac078561afac::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit93d5dbe4099478c30e41ac078561afac::$classMap;

        }, null, ClassLoader::class);
    }
}
