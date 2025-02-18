<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    @inertiaHead
    @routes
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @inertia
</body>
</html>
