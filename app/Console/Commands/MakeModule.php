<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeModule extends Command
{
    protected $signature = 'make:module {name}';
    protected $description = 'Generate module structure with Controller, Model, Service, Repository, Request';

    public function handle()
    {
        $name = Str::studly($this->argument('name'));
        $basePath = app_path($name);

        $folders = [
            'Controllers',
            'Models',
            'Services',
            'Repositories',
            'Requests',
        ];

        foreach ($folders as $folder) {
            File::makeDirectory("{$basePath}/{$folder}", 0755, true, true);
        }

        $this->makeController($name, $basePath);
        $this->makeModel($name, $basePath);
        $this->makeService($name, $basePath);
        $this->makeRepository($name, $basePath);
        $this->makeRequest($name, $basePath);

        $this->info("Module {$name} created successfully!");
    }

    protected function makeController($name, $basePath)
    {
        $content = <<<PHP
        <?php

        namespace App\\{$name}\\Controllers;

        use App\\Http\\Controllers\\Controller;

        class {$name}Controller extends Controller
        {
            public function index()
            {
                //
            }
        }
        PHP;

        File::put("{$basePath}/Controllers/{$name}Controller.php", $content);
    }

    protected function makeModel($name, $basePath)
    {
        $content = <<<PHP
        <?php

        namespace App\\{$name}\\Models;

        use Illuminate\\Database\\Eloquent\\Model;

        class {$name} extends Model
        {
            protected \$guarded = [];
        }
        PHP;

        File::put("{$basePath}/Models/{$name}.php", $content);
    }

    protected function makeService($name, $basePath)
    {
        $content = <<<PHP
        <?php

        namespace App\\{$name}\\Services;

        class {$name}Service
        {
            //
        }
        PHP;

        File::put("{$basePath}/Services/{$name}Service.php", $content);
    }

    protected function makeRepository($name, $basePath)
    {
        $interface = <<<PHP
        <?php

        namespace App\\{$name}\\Repositories;

        interface {$name}RepositoryInterface
        {
            public function all();
        }
        PHP;

        $eloquent = <<<PHP
        <?php

        namespace App\\{$name}\\Repositories;

        use App\\{$name}\\Models\\{$name};

        class Eloquent{$name}Repository implements {$name}RepositoryInterface
        {
            public function all()
            {
                return {$name}::all();
            }
        }
        PHP;

        File::put("{$basePath}/Repositories/{$name}RepositoryInterface.php", $interface);
        File::put("{$basePath}/Repositories/Eloquent{$name}Repository.php", $eloquent);
    }

    protected function makeRequest($name, $basePath)
    {
        $content = <<<PHP
        <?php

        namespace App\\{$name}\\Requests;

        use Illuminate\\Foundation\\Http\\FormRequest;

        class {$name}Request extends FormRequest
        {
            public function authorize(): bool
            {
                return true;
            }

            public function rules(): array
            {
                return [
                    // Tambahkan rules validasi
                ];
            }
        }
        PHP;

        File::put("{$basePath}/Requests/{$name}Request.php", $content);
    }
}
