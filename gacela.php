<?php

declare(strict_types = 1);

use Gacela\Framework\Bootstrap\GacelaConfig;

return static function (GacelaConfig $config): void {
    // Enabling the gacela file cache system to improve the class-resolver performance
    $config->enableFileCache();
};
