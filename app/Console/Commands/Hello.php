<?php
namespace App\Console\Commands;

use Pails\Console\Command;

class Hello extends Command
{
    protected $name = 'app:hello';

    protected $description = 'App defined Command';

    public function handle()
    {
        $this->line("hi, i'm pails app");
    }
}
