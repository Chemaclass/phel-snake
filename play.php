<?php

declare(strict_types=1);

use SebastianBergmann\Timer\Timer;

require_once __DIR__ . "/vendor/autoload.php";

$phelMode = getenv('PHEL_MODE');
echo "Phel mode: $phelMode\n";

$timer = new Timer();
$timer->start();
echo 'Starting...' . PHP_EOL;

if ($phelMode === 'slow') {
    Phel\Phel::run(__DIR__, 'phel_snake\\game', 'play');
} else {
    $GLOBALS['argv'][] = 'play';
    require_once __DIR__ . "/out/phel_snake/game.php";
}

echo 'Total time: ' . $timer->stop()->asString() . PHP_EOL;

