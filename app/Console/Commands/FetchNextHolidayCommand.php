<?php

namespace App\Console\Commands;

use App\Services\NextHoliday\CanadaHolidayService;
use Illuminate\Console\Command;
use Spatie\Dashboard\Models\Tile;

class FetchNextHolidayCommand extends Command
{
    protected $signature = 'dashboard:fetch-next-holiday';
    protected $description = 'Get the next holiday from Canada Holidays API';

    public function handle()
    {
        $service = new CanadaHolidayService();
        $data = $service->getNextHoliday();

        Tile::firstOrCreateForName('holiday')->putData('next-holiday', [
            'name' => $data['nameFr'],
            'date' => $data['date'],
        ]);
    }
}
