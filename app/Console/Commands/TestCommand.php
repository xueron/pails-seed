<?php
/**
 * HelloCommand.
 */
namespace App\Console\Commands;

use Pails\Console\Command;

class TestCommand extends Command
{
    protected $signature = 'app:test';

    protected $description = '测试专用';

    public function handle()
    {
        $this->line("Hello , I'm a pails app");
    }
}
