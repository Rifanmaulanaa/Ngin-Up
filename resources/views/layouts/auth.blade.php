<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

    <title>@yield('title', 'NginUp')</title>
    <!-- Alpine.js for Interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gradient-to-br from-orange-50 via-white to-orange-50 min-h-screen flex items-center justify-center p-4" style="font-family: 'Inter', sans-serif;">

    {{-- Decorative Background Elements --}}
    <div class="fixed inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-brand-orange/5 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-brand-green/5 rounded-full blur-3xl"></div>
    </div>

    {{-- Main Container --}}
    <div class="relative z-10 w-full @yield('container_class', 'max-w-md')">
        @yield('content')
    </div>

</body>
</html>
