<?php declare(strict_types=1);

use Phel\Phel;
use PhelGenerated\PhelScaffolding\Modules\AdderModule;

$projectRootDir = dirname(__DIR__) . '/';

require $projectRootDir . 'vendor/autoload.php';

Phel::run($projectRootDir, 'phel-scaffolding\modules\adder-module');

$adder = new AdderModule();
$result = $adder->adder(1, 2, 3);

echo 'Result = ' . $result . PHP_EOL;
