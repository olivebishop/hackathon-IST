<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matwana</title>
    <!-- Include your CSS stylesheets here -->
    <!-- Include Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Include Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
      <h1 style="text-align: center;">Matwana</h1>
    <div class="container mt-4">
        <!-- The content of your views will be dynamically inserted here -->
        @yield('content')
    </div>

    <footer>
        <!-- Your footer content here -->
    </footer>

    <!-- Include your JavaScript scripts here -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
