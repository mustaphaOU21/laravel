<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alle planeten</title>
</head>

<body>
    @foreach ($planets as $planet)
    <h1>{{ $planet->name }}</h1>
    <p>{{ $planet->description }}</p>
    @if ($planet->solar_system)
    <p>Solar System: {{ $planet->solar_system->name }}</p>
    @else
    <p>No Solar System assigned</p>
    @endif
    @endforeach
</body>

</html>