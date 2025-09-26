<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chupatu - Layanan Cuci Sepatu</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="bg-gray-50 text-black">
        <div class="relative min-h-screen flex flex-col items-center justify-center">
            <div class="relative w-full max-w-2xl px-6">
                <!-- Header -->
                <header class="grid grid-cols-2 items-center gap-2 py-10">
                    <div class="flex justify-center">
                        <h1 class="text-4xl font-bold text-[#FF2D20]">Chupatu - Cuci Sepatu</h1>
                    </div>
                    <nav class="flex justify-end">
                        {{-- Perubahan ada di sini --}}
                        <a href="{{ route('login') }}" class="px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Login</a>
                        <a href="{{ route('register') }}" class="ml-4 px-4 py-2 text-white bg-gray-700 rounded hover:bg-gray-800">Register</a>
                        {{-- Akhir Perubahan --}}
                    </nav>
                </header>

                <!-- Main Content -->
                <main class="mt-6 text-center">
                    <h2 class="text-3xl font-bold">Layanan Cuci Sepatu Terpercaya</h2>
                    <p class="mt-4 text-lg">Layanan terbaik untuk sepatu Anda: Cuci Reguler, Deep Clean, dan Repaint.</p>

                    <div class="mt-6">
                        <a href="/order" class="px-6 py-2 bg-[#FF2D20] text-white rounded-md">Pesan Layanan</a>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>
</html>
