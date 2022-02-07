<x-dashboard-tile :position="$position">
    <div class="h-full">
        <h2>Prochain Congé</h2>

        <div class="grid h-full justify-items-center text-center">
            <div class="self-center text-center font-bold text-xl tracking-wide">
                <span class="text-dimmed">
                    {{ $nextHoliday->getDateFormatted() }}
                </span>
                <span class="text-4xl block">
                    {{ $nextHoliday->name }}
                </span>
                <span class="block text-sm text-dimmed">
                    {{ $nextHoliday->date->diffForHumans() }}
                </span>
            </div>
        </div>
    </div>
</x-dashboard-tile>
