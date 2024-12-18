<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Aplikasi KKN UKDW') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


</head>

<body class="font-sans antialiased bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between py-4">
            <!-- Logo dan Tulisan -->
            <div class="flex items-center space-x-4">
                <img src="{{ asset('assets/logo-lppm.png') }}" alt="Logo Kampus" class="h-10">
                <h1 class="text-lg font-semibold text-gray-800">Kuliah Kerja Nyata</h1>
            </div>
            <!-- Menu -->
            <nav class="flex items-center space-x-6">
                <a href="" class="text-[#1A5319] hover:text-green-700">Dashboard</a>
                <a href="#" class="text-[#1A5319] hover:text-green-700">Notifikasi</a>
                <a href="" class="text-[#1A5319] hover:text-green-700">Change Password</a>
            </nav>
        </div>
    </header>

    <!-- Page Heading -->
    @isset($header)
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endisset

    <!-- Page Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8">
        {{ $slot }}
    </main>
</body>

</html>