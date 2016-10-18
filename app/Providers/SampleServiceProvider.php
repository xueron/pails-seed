<?php
namespace App\Providers;

use Pails\Providers\AbstractServiceProvider;

class SampleServiceProvider extends AbstractServiceProvider
{
    protected $serviceName = 'sample';

    public function register()
    {
        $this->getDI()->setShared(
            $this->serviceName,
            function () {
                //
            }
        );
    }
}

