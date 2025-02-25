<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1 class="mb-4">Game List</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Genre</th>
                <th>Price ($)</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td>{{ $game['id'] }}</td>
                    <td>{{ $game['name'] }}</td>
                    <td>{{ $game['genre'] }}</td>
                    <td>${{ number_format($game['price'], 2) }}</td>
                    <td>
                        <a href="{{ route('games.show', $game['id']) }}" class="btn btn-primary btn-sm">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
