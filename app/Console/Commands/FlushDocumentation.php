<?php

namespace App\Console\Commands;

use App\Models\Documentation;
use Illuminate\Console\Command;

class FlushDocumentation extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'docs:flush';

    /**
     * The console command description.
     */
    protected $description = 'Clear documentation from Meilisearch index';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->warn('Flushing documentation from search index...');

        // Use Scout's flush command for the Documentation model
        $this->call('scout:flush', [
            'model' => Documentation::class,
        ]);

        $this->newLine();
        $this->info('✓ Documentation search index cleared successfully!');

        return self::SUCCESS;
    }
}
