<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda7ececa5dae8959af42bbb2e14a911c
{
    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Calc' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitda7ececa5dae8959af42bbb2e14a911c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
