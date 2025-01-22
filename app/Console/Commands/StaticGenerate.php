<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class StaticGenerate extends Command
{
    protected $signature = 'static:generate';
    protected $description = 'Generate static files for Firebase hosting';

    public function handle()
    {
        $this->info('Generating static files...');

        // Create static directory
        $staticDir = public_path('static');
        if (File::exists($staticDir)) {
            File::deleteDirectory($staticDir);
        }
        File::makeDirectory($staticDir, 0755, true);

        // Create subdirectories
        $directories = ['menu', 'contact', 'book-table'];
        foreach ($directories as $dir) {
            File::makeDirectory($staticDir . '/' . $dir, 0755, true);
        }

        // Generate home page
        $home = view('home')->render();
        File::put($staticDir . '/index.html', $home);

        // Generate menu page
        $menu = view('menu')->render();
        File::put($staticDir . '/menu/index.html', $menu);

        // Generate contact page
        $contact = view('contact')->render();
        File::put($staticDir . '/contact/index.html', $contact);

        // Generate book-table page
        $bookTable = view('book-table')->render();
        File::put($staticDir . '/book-table/index.html', $bookTable);

        // Create assets directory
        File::makeDirectory($staticDir . '/build', 0755, true);
        File::makeDirectory($staticDir . '/images', 0755, true);

        // Copy assets
        if (File::exists(public_path('build'))) {
            File::copyDirectory(public_path('build'), $staticDir . '/build');
        }
        if (File::exists(public_path('images'))) {
            File::copyDirectory(public_path('images'), $staticDir . '/images');
        }

        $this->info('Static files generated successfully!');
    }
} 