<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf34811b9d95bf1143b0cb5f8bf1bdeb8
{
    public static $files = array (
        '5ec26a44593cffc3089bdca7ce7a56c3' => __DIR__ . '/../..' . '/core/helpers.php',
    );

    public static $classMap = array (
        'App\\Controllers\\CategoriesController' => __DIR__ . '/../..' . '/app/controllers/CategoriesController.php',
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/app/controllers/PagesController.php',
        'App\\Controllers\\ProductsController' => __DIR__ . '/../..' . '/app/controllers/ProductsController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/app/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'App\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'ComposerAutoloaderInitf34811b9d95bf1143b0cb5f8bf1bdeb8' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitf34811b9d95bf1143b0cb5f8bf1bdeb8' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'ErrorHandler' => __DIR__ . '/../..' . '/composer-setup.php',
        'HttpClient' => __DIR__ . '/../..' . '/composer-setup.php',
        'Installer' => __DIR__ . '/../..' . '/composer-setup.php',
        'NoProxyPattern' => __DIR__ . '/../..' . '/composer-setup.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf34811b9d95bf1143b0cb5f8bf1bdeb8::$classMap;

        }, null, ClassLoader::class);
    }
}
