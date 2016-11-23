<?php
/**
 * Application.php
 *
 */
namespace App\Console;


class Application extends \Pails\Console\Application
{
    protected $providers = [

    ];

    protected $commands = [
        Commands\Hello::class
    ];
}
