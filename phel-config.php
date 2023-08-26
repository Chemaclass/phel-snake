<?php

declare(strict_types=1);

use Phel\Config\PhelConfig;
use Phel\Config\PhelOutConfig;

return (new PhelConfig())
    ->setSrcDirs(['src'])
    ->setTestDirs(['tests'])
    ->setVendorDir('vendor')
    ->setOut((new PhelOutConfig())
        ->setDestDir('out')
        ->setMainPhelNamespace('phel-snake\main')
        ->setMainPhpFilename('play'))
    ->setIgnoreWhenBuilding(['local.phel'])
    ->setKeepGeneratedTempFiles(false);
