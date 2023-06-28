<form method="POST" action="{{ route('roms.store') }}" class="margin-none" enctype="multipart/form-data">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Create Rom') }}
            </h2>
        </x-slot>

        <x-slot name="links">
            <div>
                <x-link-button class="ml-3" :href="route('dashboard')">
                    ◀️
                    {{ __('Back') }}
                </x-link-button>
                <x-primary-button class="ml-3 bg-indigo-50">
                    💾
                    {{ __('Save') }}
                </x-primary-button>
            </div>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                            @csrf

                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Name') }}
                                    <x-text-input
                                        id="name"
                                        class="block mt-1 w-full"
                                        type="text"
                                        name="name"
                                        required
                                        autofocus
                                        placeholder="{{ __('The Last Of Us, Dying Light, The Legend Of Zelda ...') }}" />
                                </x-input-label>
                            </div>
                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Release Date') }}
                                    <x-text-input id="release_date"  class="block mt-1 w-full" type="date" name="release_date" required />
                                </x-input-label>
                            </div>
                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Publisher') }}
                                    <x-text-input id="publisher" class="block mt-1 w-full" type="text" name="publisher" required placeholder="{{ __('Sony, Nintendo, Microsoft ...') }}" />
                                </x-input-label>
                            </div>

                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Genre') }}
                                    <x-text-input id="genre" class="block mt-1 w-full" type="text" name="genre" required placeholder="{{ __('Action, Adventure, RPG ...') }}" />
                                </x-input-label>
                            </div>

                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Region Code') }}
                                    <x-text-input id="region_code" class="block mt-1 w-full" type="text" name="region_code"  placeholder="{{ __('US, EU, JP ...') }}" />
                                </x-input-label>
                            </div>

                            <div class="flex w-full mb-4">
                                <div class="mr-4 flex-1">
                                    <x-input-label>
                                        {{ __('Metacritic Score') }}
                                        <x-text-input id="metacritic_score" class="block mt-1 w-full" type="number" name="metacritic_score" placeholder="{{ __('0-100') }}"  />
                                    </x-input-label>
                                </div>

                                <div class="flex-1">
                                    <x-input-label>
                                        {{ __('Metacritic URL') }}
                                        <x-text-input id="metacritic_url" class="block mt-1 w-full" type="text" name="metacritic_url"  placeholder="{{ __('https://www.metacritic.com/game/pc/the-last-of-us...') }}" />
                                    </x-input-label>
                                </div>
                            </div>

                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Video Trailer') }}
                                    <x-text-input id="video_trailer" class="block mt-1 w-full" type="text" name="video_trailer"  placeholder="{{ __('https://www.youtube.com/watch?v=...') }}" />
                                </x-input-label>
                            </div>

                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Official Website') }}
                                    <x-text-input id="official_website" class="block mt-1 w-full" type="text" name="official_website"  placeholder="{{ __('https://www.thelastofus.com/...') }}" />
                                </x-input-label>
                            </div>

                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Description') }}
                                    <x-textarea-input rows="4" id="description" class="block mt-1 w-full md-editor" type="text" name="description" required></x-textarea-input>
                                </x-input-label>
                            </div>

                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Platform') }}
                                    <x-select-input id="platform" class="block mt-1 w-full" type="text" name="platform" required>
                                        @foreach($platforms as $platform)
                                            <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                                        @endforeach
                                    </x-select-input>
                                </x-input-label>
                            </div>

                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Emulator') }}
                                    <x-select-input id="emulator" class="block mt-1 w-full" type="text" name="emulator" required>
                                        @foreach($emulators as $emulator)
                                            <option value="{{ $emulator->id }}">{{ $emulator->name }}</option>
                                        @endforeach
                                    </x-select-input>
                                </x-input-label>
                            </div>

                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Images') }}
                                    <x-text-input id="images" class="block mt-1 w-full" type="file" multiple name="images[]" required />
                                </x-input-label>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</form>
