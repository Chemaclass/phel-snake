<?php

declare(strict_types=1);

use Phel\Phel;

$projectRootDir = dirname(__DIR__, 2) . '/';

require $projectRootDir . 'vendor/autoload.php';

Phel::run($projectRootDir, 'phel-scaffolding\web\views\main');
