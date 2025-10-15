<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Daftar artisan command custom.
     *
     * @var array
     */
    protected $commands = [
        // \App\Console\Commands\MakeService::class,
    ];

    /**
     * Definisikan schedule task.
     */
    protected function schedule(Schedule $schedule): void
    {
        // contoh: $schedule->command('inspire')->hourly();
    }

    /**
     * Daftar command artisan yang otomatis load.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
