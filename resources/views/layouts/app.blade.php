<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Movies App')</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body style="font-family: 'Roboto', sans-serif;">

    <!-- Navigation Bar -->
    <nav style="background-color: #333; padding: 10px;">
        <a href="{{ url('/') }}" style="color: #fff; text-decoration: none; margin-right: 20px;">Home</a>
        <a href="{{ route('movies.index') }}" style="color: #fff; text-decoration: none;">Movies</a>
    </nav>

    <!-- Main Content -->
    <div style="padding: 20px;">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer style="background-color: #333; color: #fff; text-align: center; padding: 10px; position: fixed; width: 100%; bottom: 0;">
        <p>&copy; {{ date('Y') }} Movies App. All rights reserved.</p>
    </footer>

</body>
</html>
