<?php

declare(strict_types=1);

use Gacela\Framework\Bootstrap\GacelaConfig;
use Gacela\Framework\Event\GacelaEventInterface;

/**
 * Debug overlay enabled with `APP_ENV=local`, e.g. `APP_ENV=local composer play`.
 * Re-enables Gacela event listeners and echoes each event to stderr.
 * Docs: https://gacela-project.com/docs/bootstrap/#different-environments
 */
return static function (GacelaConfig $config): void {
    $config->setFileCache(false);
    $config->registerGenericListener(static function (GacelaEventInterface $event): void {
        fwrite(STDERR, $event->toString() . PHP_EOL);
    });
};
