<?php

namespace App\Services\Training;

use Illuminate\Support\Str;

class ExerciceDTO
{
    public function __construct(
        public string $name,
        public int $repetitions,
    )
    {
    }

    public function getIcon(): string
    {
        return match (Str::lower($this->name)) {
            'pompes' => 'pompes.png',
            'abdos' => 'abdos.png',
            'squats' => 'squats.png',
            default => '',
        };
    }
}
