<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            {{-- @livewire('navigation-menu') --}}

            <!-- Page Heading -->
            <div class="grid lg:grid-cols-12 relative">
                <div class="lg:col-span-2 lg:p-8 p-4 w-full bg-[#202A36] xl:block hidden shadow min-h-screen">
                    <x-sidebar.default />
                </div>
                <!-- Page Content -->
                <main class="col-span-10 w-full">
                    <x-navbar.default />
                    @if (isset($header))
                        <header class="bg-white shadow hidden">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif
                    {{ $slot }}
                </main>
            </div>

        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
