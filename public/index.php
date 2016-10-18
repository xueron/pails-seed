<?php
try {
    require_once __DIR__ . '/../vendor/autoload.php';
    $debug = new \Phalcon\Debug();
    $debug->listen(true, true);



    $container = new Pails\Container(dirname(__DIR__));

    $container->run(App\Application::class);
} catch (\Exception $e) {
    echo "系统内部错错误: " . $e->getMessage();
} catch (\Error $e) {
    echo "系统内部错错误: " . $e->getMessage();
}
