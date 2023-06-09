<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita0a6166cfc682e449e84d51a06402486
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Saiyedyamin\\Contact\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Saiyedyamin\\Contact\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita0a6166cfc682e449e84d51a06402486::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita0a6166cfc682e449e84d51a06402486::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita0a6166cfc682e449e84d51a06402486::$classMap;

        }, null, ClassLoader::class);
    }
}
