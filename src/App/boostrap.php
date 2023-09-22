<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Config\Paths;
use function App\Config\{addRoutes, registerMiddleware};
// use App\Controllers\{HomeController, AboutController};

$app = new App(Paths::SOURCE . "App/container-defenitions.php");
//Home Controller Array Creation 
addRoutes($app);
registerMiddleware($app);
// dd($app);

return $app;
