<?php

namespace App\Tiles;

use Livewire\Component;

class DummyTileComponent extends Component
{
    /** @var string */
    public $position;

    public function mount(string $position)
    {
        $this->position = $position;
    }

    public function render()
    {
        return view('components.tiles.dummy');
    }
}
