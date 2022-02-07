<?php

namespace App\Http\Livewire;

use App\Services\Training\ExerciceDTO;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Spatie\Dashboard\Models\Tile;

class Training extends Component
{
    public string $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }

    public function render()
    {
        $data = Tile::firstOrCreateForName('training-app')->getData('last-training');
        $date = Carbon::createFromFormat('Y-m-d', $data['date']);
        $trainings = collect($data['training'])->map(fn ($item) => new ExerciceDTO($item['exercice_name'], $item['repetitions']));

        return view('components.tiles.training', [
            'date' => $date,
            'data' => $trainings,
        ]);
    }
}
