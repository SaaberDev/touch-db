<?php

namespace SaaberDev\TouchDB\Commands;

use Illuminate\Console\Command;

class TouchDBCommand extends Command
{
    public $signature = 'touch-db';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
