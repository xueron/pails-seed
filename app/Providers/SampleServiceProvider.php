<?php
namespace App\Providers;

use App\Services\SampleService;
use Pails\Providers\AbstractServiceProvider;

class SampleServiceProvider extends AbstractServiceProvider
{
    public function register()
    {
        $this->di->setShared(
            'sampleService',
            function () {
                return new SampleService();
            }
        );
    }
}

