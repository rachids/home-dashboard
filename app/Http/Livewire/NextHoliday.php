<?php

namespace App\Http\Livewire;

use App\Services\NextHoliday\HolidayDTO;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Spatie\Dashboard\Models\Tile;

class NextHoliday extends Component
{
    public string $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }

    public function render()
    {
        $data = Tile::firstOrCreateForName('holiday')->getData('next-holiday');

        $date = Carbon::createFromFormat('Y-m-d', $data['date']);

        $nextHoliday = new HolidayDTO($data['name'], $date);

        return view('components.tiles.next-holiday', [
            'nextHoliday' => $nextHoliday,
        ]);
    }
}
