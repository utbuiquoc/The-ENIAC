<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Page Title' }}</title>

        <!-- Fonts -->

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-50">
            <div class="min-h-screen flex flex-col items-center selection:bg-[#FF2D20] selection:text-white">
                <header class="grid items-center w-full max-w-2xl px-6 lg:max-w-7xl">
                    <livewire:welcome.navigation />
                </header>

                <div class="relative w-full">

                    <!-- Page Heading -->
                    @if (isset($header))
                        <header class="bg-white">
                            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                                {{ $header }}
                            </div>
                        </header>
                    @endif

                    <!-- Page Content -->
                    <main class="">
                        {{ $slot }}
                    </main>

                    <livewire:layout.footer />
                </div>
            </div>
        </div>
    </body>
</html>