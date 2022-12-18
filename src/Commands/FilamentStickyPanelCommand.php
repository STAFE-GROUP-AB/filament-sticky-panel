<?php

namespace STAFEGROUPAB\FilamentStickyPanel\Commands;

use Illuminate\Console\Command;

class FilamentStickyPanelCommand extends Command
{
    public $signature = 'filament-sticky-panel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
