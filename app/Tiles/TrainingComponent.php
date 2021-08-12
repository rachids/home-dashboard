<?php

namespace App\Tiles;

use Livewire\Component;

class TrainingComponent extends Component
{
    public string $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }

    public function render()
    {
        return view('components.tiles.dummy');
    }
}
