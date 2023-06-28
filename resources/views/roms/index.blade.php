<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ROMs') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow-sm sm:rounded-lg">
                <div class="grid grid-cols-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-4">

                    @foreach($roms as $rom)
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                        <x-rom-grid-item :rom="$rom" />
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
