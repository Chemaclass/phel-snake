<?php

declare(strict_types=1);

use Phel\Config\PhelConfig;

return PhelConfig::forProject(mainNamespace: 'phel-snake.main')
    ->withMainPhpPath('out/main.php')
    ->withOptimizationLevel(2)
    ->withStripSymbolMeta()
    ->withIgnoreWhenBuilding(['local.phel']);
