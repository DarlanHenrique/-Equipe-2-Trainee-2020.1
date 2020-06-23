<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'App\\Controllers\\PagesController' => $baseDir . '/app/controllers/PagesController.php',

    'App\\Controllers\\ProductsController' => $baseDir . '/app/controllers/ProductsController.php',
    'App\\Core\\App' => $baseDir . '/core/App.php',
    'App\\Core\\Database\\Connection' => $baseDir . '/core/database/Connection.php',
    'App\\Core\\Database\\QueryBuilder' => $baseDir . '/core/database/QueryBuilder.php',
    'App\\Core\\Request' => $baseDir . '/core/Request.php',
    'App\\Core\\Router' => $baseDir . '/core/Router.php',

    'ComposerAutoloaderInitf34811b9d95bf1143b0cb5f8bf1bdeb8' => $vendorDir . '/composer/autoload_real.php',
    'Composer\\Autoload\\ClassLoader' => $vendorDir . '/composer/ClassLoader.php',
    'Composer\\Autoload\\ComposerStaticInitf34811b9d95bf1143b0cb5f8bf1bdeb8' => $vendorDir . '/composer/autoload_static.php',
    'ErrorHandler' => $baseDir . '/composer-setup.php',
    'HttpClient' => $baseDir . '/composer-setup.php',
    'Installer' => $baseDir . '/composer-setup.php',
    'NoProxyPattern' => $baseDir . '/composer-setup.php',
);
