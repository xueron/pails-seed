<?php
/**
 *
 */
namespace App\Http;

use App\Providers\SampleServiceProvider;

class Application extends \Pails\Mvc\Application
{
    protected $providers = [
        SampleServiceProvider::class,
    ];
}
