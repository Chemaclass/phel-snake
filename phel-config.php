<?php

declare(strict_types=1);

use Phel\Config\PhelConfig;
use Phel\Config\PhelOutConfig;

return (new PhelConfig())
    ->setSrcDirs(['src'])
    ->setTestDirs(['tests'])
    ->setVendorDir('vendor')
    ->setOut((new PhelOutConfig())
        ->setMainPhelNamespace('phel-snake\main')
        ->setMainPhpPath('out/main.php'))
    ->setIgnoreWhenBuilding(['local.phel'])
    ->setKeepGeneratedTempFiles(false)
;
