<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Spatie\Dashboard\Models\Tile;

class FetchTrainingDataCommand extends Command
{
    protected $signature = 'dashboard:fetch-training';

    protected $description = 'Fetch data from the training app.';

    public function handle()
    {
        $endpoint = config('services.training-app.url') . 'training/last';

        $data = Http::get($endpoint)->json();

        Tile::firstOrCreateForName('training-app')->putData('last-training', $this->formatValue($data));
    }

    private function formatValue(array $data): array
    {
        $value = [
            'date' => $data['meta']['training_date'],
        ];

        unset($data['meta']);

        foreach ($data['data'] as $training)
        {
            $value['training'][] = [
                'repetitions' => $training['repetitions'],
                'exercice_name' => $training['exercice']['name'],
            ];
        }

        return $value;
    }
}
