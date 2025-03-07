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
    {{-- <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('build/assets/app-a20cebfd.css') }}" rel="stylesheet">
    <link href="{{ asset('build/assets/app-a546d813.css') }}" rel="stylesheet">
    <script src="{{ asset('build/assets/app-b8a140d8.js') }}" type="module"></script> --}}
</head>
<body>
    @inertia
</body>
</html>
