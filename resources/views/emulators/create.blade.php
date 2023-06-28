<form method="POST" action="{{ route('emulators.store') }}" class="margin-none" enctype="multipart/form-data">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Create Emulator') }}
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
                                    placeholder="{{ __('PCSX2, VirtuaNES ...') }}"/>
                            </x-input-label>
                        </div>

                        <div class="mb-4">
                            <x-input-label>
                                {{ __('Homepage') }}
                                <x-text-input
                                    id="homepage"
                                    class="block mt-1 w-full"
                                    type="text"
                                    name="homepage"
                                    required
                                    placeholder="{{ __('https://pcsx2.net, https://virtuanes.s1.xrea.com ...') }}"/>
                            </x-input-label>
                        </div>

                        <div class="mb-4">
                            <x-input-label>
                                {{ __('Download') }}
                                <x-text-input
                                    id="download"
                                    class="block mt-1 w-full"
                                    type="text"
                                    name="download"
                                    required
                                    placeholder="{{ __('https://pcsx2.net/download/...html, https://virtuanes.s1.xrea.com/ ...') }}"/>
                            </x-input-label>
                        </div>

                        <div class="mb-4">
                            <x-input-label>
                                {{ __('Platform') }}
                                <x-select-input id="platform" class="block mt-1 w-full" type="text" name="platform"
                                                required>
                                    @foreach($platforms as $platform)
                                        <option value="{{ $platform->id }}">{{ $platform->name }}</option>
                                    @endforeach
                                </x-select-input>
                            </x-input-label>
                        </div>

                        <div class="mb-4">
                            <x-input-label>
                                {{ __('Description') }}
                                <x-textarea-input rows="4" id="description" class="block mt-1 w-full md-editor" type="text" name="description" required></x-textarea-input>
                            </x-input-label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</form>
