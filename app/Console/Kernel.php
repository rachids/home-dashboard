<?php

namespace App\Console;

use App\Console\Commands\FetchNextHolidayCommand;
use App\Console\Commands\FetchTrainingDataCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Solitweb\WeatherForecastTile\FetchDataFromApiCommand;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command(FetchDataFromApiCommand::class)->daily();
        $schedule->command(FetchTrainingDataCommand::class)->daily();
        $schedule->command(FetchNextHolidayCommand::class)->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
