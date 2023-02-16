<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

$compiledFile = __DIR__ . "/out/phel_snake/main.php";
if (!file_exists($compiledFile)) {
    echo 'Building the project...';
    exec('vendor/bin/phel build --no-cache');
}

require_once $compiledFile;
