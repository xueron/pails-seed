<?php
error_reporting(0);
$env = getenv('APP_ENV');
defined('APP_DEBUG') or define('APP_DEBUG', $env == 'production' ? false : true);

// Phalcon Debugger Listen to Exceptions Globally
$debug = new \Phalcon\Debug();
$debug->setUri('//static.pails.xueron.com/debug/3.0.x/'); // 国内CDN静态资源
$debug->listen();

require_once __DIR__ . '/../vendor/autoload.php';

$container = new Pails\Container(dirname(__DIR__));

$container->run(App\Http\Application::class);
