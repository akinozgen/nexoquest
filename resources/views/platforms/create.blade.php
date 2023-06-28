<form method="POST" action="{{ route('platforms.store') }}" class="margin-none" enctype="multipart/form-data">
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Create Platform') }}
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
                                        placeholder="{{ __('Ninteno 64, Playstation Portable, Sega Dreamcast ...') }}" />
                                </x-input-label>
                            </div>

                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Icon') }}
                                    <small>{{ __('(64x64 platform icon)') }}</small>
                                    <x-text-input
                                        id="icon"
                                        class="block mt-1 w-full"
                                        type="file"
                                        name="icon"
                                        required />
                                </x-input-label>
                            </div>

                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Poster/Cover Image') }}
                                    <x-text-input
                                        id="image"
                                        class="block mt-1 w-full"
                                        type="file"
                                        name="image"
                                        required />
                                </x-input-label>
                            </div>

                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Company') }}
                                    <x-text-input
                                        id="company"
                                        class="block mt-1 w-full"
                                        type="text"
                                        name="company"
                                        placeholder="{{ __('Nintendo, Sony, Microsoft ...') }}"
                                        required />
                                </x-input-label>
                            </div>

                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Release Date') }}
                                    <x-text-input
                                        id="release_date"
                                        class="block mt-1 w-full"
                                        type="date"
                                        name="release_date"
                                        required />
                                </x-input-label>
                            </div>

                            <div class="mb-4">
                                <x-input-label>
                                    {{ __('Discontinuation Date') }}
                                    <x-text-input
                                        id="discontinued_date"
                                        class="block mt-1 w-full"
                                        type="date"
                                        name="discontinued_date" />
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
