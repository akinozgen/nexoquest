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
        @vite(['resources/css/app.scss', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between">
                            <div>
                                {{ $header }}
                            </div>
                            @if (auth()->check() && auth()->user()->role == 'admin')
                                @if (!@$links)
                                    <div>
                                        <x-link-button class="ml-3 bg-indigo-50" :href="route('roms.create')">
                                            💿
                                            {{ __('New ROM') }}
                                        </x-link-button>

                                        <x-link-button class="ml-3 bg-indigo-50" :href="route('emulators.create')">
                                            🖥️
                                            {{ __('New Emulator') }}
                                        </x-link-button>

                                        <x-link-button class="ml-3 bg-indigo-50" :href="route('platforms.create')">
                                            🕹️
                                            {{ __('New Platform') }}
                                        </x-link-button>
                                    </div>
                                @else
                                    {{ $links }}
                                @endif
                            @endif
                        </div>
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
