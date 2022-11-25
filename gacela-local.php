<?php

declare(strict_types = 1);

use Gacela\Framework\Bootstrap\GacelaConfig;
use Gacela\Framework\Event\GacelaEventInterface;
use Phel\Compiler\CompilerFacadeInterface;

/**
 * This file is totally optional.
 * This is here just as a demonstration of overriding/combining the gacela config from phel-lang itself.
 * Full docs: https://gacela-project.com/docs/bootstrap/#different-environments
 *
 * You can run this configuration using `APP_ENV=local`
 * For example: `APP_ENV=local composer play`
 */
return static function (GacelaConfig $config): void {
    // Enabling the gacela file cache system to improve the class-resolver performance
    $config->setFileCacheEnabled(true);

    // Registering a generic listener to know what's happening internally in Gacela
    $config->registerGenericListener(static function (GacelaEventInterface $event): void {
        echo $event->toString() . PHP_EOL;
    });

    // Hook into a service to be able to extend it however you want
    $config->extendService('FACADE_COMPILER', function (CompilerFacadeInterface $compilerFacade): void {
        dump(get_class($compilerFacade));
    });
};
