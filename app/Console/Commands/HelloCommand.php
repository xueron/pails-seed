<?php
namespace App\Console\Commands;

use Pails\Console\Command;

class HelloCommand extends Command
{
    protected $signature = 'app:hello {name}';

    protected $description = 'A demo Command';

    public function handle()
    {
        $name = trim($this->argument('name'));
        $this->line("Hello $name, I'm a pails app");
    }
}
