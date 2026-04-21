<?php

declare(strict_types=1);

use Phel\Config\PhelConfig;

return PhelConfig::forProject('phel-snake\main')
    ->setMainPhpPath('out/main.php')
    ->setIgnoreWhenBuilding(['local.phel']);
