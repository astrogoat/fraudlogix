<?php

namespace Astrogoat\Fraudlogix\Commands;

use Illuminate\Console\Command;

class FraudlogixCommand extends Command
{
    public $signature = 'fraudlogix';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
