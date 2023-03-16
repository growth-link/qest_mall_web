<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeViewCommand extends Command
{
    protected $signature = 'make:view {name}';

    protected $description = 'Create a new view file';

    public function handle()
    {
        $name = $this->argument('name');
        $path = resource_path('views/' . $name . '.blade.php');
        if (file_exists($path)) {
            $this->error('View already exists!');
            return;
        }

        // ディレクトリが存在しなければ作成する
        $dir = dirname($path);
        if (!File::isDirectory($dir)) {
            File::makeDirectory($dir, 0755, true, true);
        }

        // ファイルを作成する
        file_put_contents($path, '');
        $this->info('View created successfully.');
    }
}