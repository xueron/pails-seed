<?php
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Pails\Application(dirname(__DIR__));

$app->run(App\Application::class);
