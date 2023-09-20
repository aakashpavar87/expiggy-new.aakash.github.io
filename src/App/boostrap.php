<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use function App\Config\addRoutes;
// use App\Controllers\{HomeController, AboutController};

$app = new App();
//Home Controller Array Creation 
addRoutes($app);
// dd($app);

return $app;
