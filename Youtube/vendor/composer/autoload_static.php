<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf5b539978544d602c002ebfbda84505
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'oPinqz\\Main' => __DIR__ . '/../..' . '/src/oPinqz/Main.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbf5b539978544d602c002ebfbda84505::$classMap;

        }, null, ClassLoader::class);
    }
}
