<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body class="antialiased">
    <x-dashboard>
        <livewire:weather-forecast-tile position="a1" />
        <livewire:training position="b1"/>
    </x-dashboard>
</body>
</html>
