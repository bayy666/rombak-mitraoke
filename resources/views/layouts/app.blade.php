<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MitraOKE – Kebutuhan Perkantoran Anda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mitraoke.css') }}">
    @stack('styles')
</head>
<body>
    @yield('content')
    <script src="{{ asset('js/mitraoke.js') }}" defer></script>
    @stack('scripts')
</body>
</html>
