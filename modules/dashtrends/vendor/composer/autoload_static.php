<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7d5cbffe10ebe45a0e16579660711b38
{
    public static $classMap = array (
        'dashtrends' => __DIR__ . '/../..' . '/dashtrends.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7d5cbffe10ebe45a0e16579660711b38::$classMap;

        }, null, ClassLoader::class);
    }
}