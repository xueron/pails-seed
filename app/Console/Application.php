<?php
/**
 * Application.
 */
namespace App\Console;

use App\Providers\SampleServiceProvider;

class Application extends \Pails\Console\Application
{
    protected $providers = [
        SampleServiceProvider::class,
    ];

    protected $commands = [
        Commands\HelloCommand::class,
    ];
}
