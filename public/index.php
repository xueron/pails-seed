<?php
require_once __DIR__ . '/../vendor/autoload.php';

$container = new Pails\Container(dirname(__DIR__));

$container->run(App\Application::class);
