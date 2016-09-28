<?php
namespace App;

use Pails\Bootstraps\Sample;

class Application extends \Pails\Mvc\Application
{
    protected $debug = true;

    protected $bootstraps = [
        Sample::class
    ];
}
