<?php

if (\PHP_VERSION_ID < 70400) {
    echo sprintf("Fatal Error: composer.lock was created for PHP version 7.4 or higher but the current PHP version is %d.%d.%d.\n", PHP_MAJOR_VERSION, PHP_MINOR_VERSION, PHP_RELEASE_VERSION);
    exit(1);
}

// autoload.php @generated by Composer

require_once __DIR__ . '/composer/autoload_real.php';

return ComposerAutoloaderInitbe4ce76c15f4836c8fa86c27959e2f80::getLoader();