<!DOCTYPE html>
<html lang="sk" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Webtovaren Cloud - 125+ nastrojov v jednej aplikacii. Kompletna alternativa k Google Workspace a Microsoft 365 pre male timy.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Webtovaren Cloud - 125+ nastrojov. Jedna aplikacia.' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-white text-gray-900">
    @include('landing.partials.nav')

    <main>
        @yield('content')
    </main>

    @include('landing.partials.footer')
</body>
</html>
