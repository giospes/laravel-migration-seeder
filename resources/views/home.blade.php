<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <h1 class="text-center">Trains Today</h1>

    <div class="container">
        @if ($trains->count() > 0)
            <ul class="list-group">
                @foreach ($trains as $train)
                    <li class="list-group-item">
                        <strong>Train Code:</strong> {{ $train->train_code }}<br>
                        <strong>Company:</strong> {{ $train->company }}<br>
                        <strong>Departure Time:</strong> {{ $train->departure_time }}<br>
                        <strong>Destination:</strong> {{ $train->destination }}<br>
                        <strong>Departure:</strong> {{ $train->departure }}<br>
                        <strong>Number of Wagons:</strong> {{ $train->nr_wagons }}<br>
                        <strong>Late:</strong> {{ $train->late ? 'Yes' : 'No' }}<br>
                        <strong>Cancelled:</strong> {{ $train->cancelled ? 'Yes' : 'No' }}
                    </li>
                @endforeach
            </ul>
        @else
            <p class="text-muted">No trains are scheduled for today.</p>
        @endif
    </div> 

    
</body>

</html>