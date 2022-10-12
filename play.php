<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

$compiledFile = __DIR__ . "/out/phel_snake/game.php";
if (!file_exists($compiledFile)) {
    exit('You have to compile the game first. Try with: `composer compile`');
}

require_once $compiledFile;
