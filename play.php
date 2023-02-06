<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

$compiledFile = __DIR__ . "/out/phel_snake/game.php";
if (!file_exists($compiledFile)) {
    echo 'Building the project...';
    exec('vendor/bin/phel compile --no-cache');
}

require_once $compiledFile;
