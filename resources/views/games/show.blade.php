<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $game['name'] }} Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1>{{ $game['name'] }}</h1>
    <p><strong>Genre:</strong> {{ $game['genre'] }}</p>
    <p><strong>Price:</strong> ${{ number_format($game['price'], 2) }}</p>
    <a href="{{ route('games.index') }}" class="btn btn-secondary">Back to List</a>
</body>
</html>
