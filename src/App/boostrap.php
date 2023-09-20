<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Controllers\HomeController;

$app = new App();
//Home Controller Array Creation 
$app->get('/', [HomeController::class, 'home']);

// dd($app);

return $app;
