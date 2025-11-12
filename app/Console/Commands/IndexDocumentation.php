<?php

namespace App\Console\Commands;

use App\Models\Documentation;
use App\Services\DocumentationService;
use Illuminate\Console\Command;

class IndexDocumentation extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'docs:index
                            {--fresh : Clear existing index before importing}';

    /**
     * The console command description.
     */
    protected $description = 'Index documentation into Meilisearch';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->info('Loading documentation files...');

        if ($this->option('fresh')) {
            $this->warn('Clearing existing documentation from search index...');
            $this->call('docs:flush');
        }

        // Load all documentation from files
        $documents = Documentation::loadFromFiles();

        if ($documents->isEmpty()) {
            $this->error('No documentation files found!');

            return self::FAILURE;
        }

        $this->info("Found {$documents->count()} documentation files.");
        $this->newLine();

        // Index documents with progress bar
        $this->withProgressBar($documents, function (Documentation $document) {
            $document->searchable();
        });

        $this->newLine(2);

        // Clear documentation cache
        $service = app(DocumentationService::class);
        $service->clearCache();

        $this->info('Documentation cache cleared.');
        $this->newLine();

        // Sync index settings
        $this->info('Syncing Meilisearch index settings...');
        $this->call('scout:sync-index-settings');

        $this->newLine();
        $this->info('✓ Documentation indexed successfully!');

        return self::SUCCESS;
    }
}
