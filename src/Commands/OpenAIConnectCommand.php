<?php

namespace Connectors\OpenAIConnect\Commands;

use Illuminate\Console\Command;

class OpenAIConnectCommand extends Command
{
    public $signature = 'laravel-openai-connect';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
