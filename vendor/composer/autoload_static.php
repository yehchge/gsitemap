<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitebfb1259366323523dca8c5b642411a8
{
    public static $prefixLengthsPsr4 = array (
        'g' => 
        array (
            'galaxytw\\utils\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'galaxytw\\utils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'galaxytw\\utils\\CDbShell' => __DIR__ . '/../..' . '/src/CDbShell.php',
        'galaxytw\\utils\\CJavaScript' => __DIR__ . '/../..' . '/src/CJavaScript.php',
        'galaxytw\\utils\\CMisc' => __DIR__ . '/../..' . '/src/CMisc.php',
        'galaxytw\\utils\\CPageBar' => __DIR__ . '/../..' . '/src/CPageBar.php',
        'galaxytw\\utils\\session' => __DIR__ . '/../..' . '/src/session.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitebfb1259366323523dca8c5b642411a8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitebfb1259366323523dca8c5b642411a8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitebfb1259366323523dca8c5b642411a8::$classMap;

        }, null, ClassLoader::class);
    }
}
