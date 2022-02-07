<x-dashboard-tile :position="$position">
    <div class="h-full">
        <h2>Workout de Rachid</h2>

        <div class="text-center font-bold text-xl tracking-wide">
                <span class="block text-sm text-dimmed">
                    Dernier training en date:
                </span>
            {{ $date->isoFormat('dddd DD MMMM OY') }}
        </div>

        <div class="grid justify-items-center text-center">
            @forelse($data as $training)
                <div class="self-center font-bold text-2xl tracking-wide">
                    <div class="text-sm text-dimmed">
                        {{ $training->name }}
                    </div>

                    {{ $training->repetitions }}
                </div>
            @empty
                <p class="text-dimmed">
                    Aucune donnée trouvée. 😬
                </p>
            @endforelse
        </div>
    </div>

</x-dashboard-tile>
