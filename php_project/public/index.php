<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Router;
use App\Controllers\AboutMeController;

$router = new Router();

$router->add('/', function () {
    echo "Hello from main page!";
});

$router->add('/aboutme', function () {
    $controller = new AboutMeController();
    echo $controller->index();
});

$router->run();