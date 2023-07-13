<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $rom->name }}
        </h2>
    </x-slot>

    <x-slot name="links">
        <div class="flex">
            @if ($rom->official_website)
                <x-link-button class="mr-2" href="{{ $rom->official_website }}?utm_source={{ config('app.name') }}" target="_blank">
                    <span>🌐 </span>
                    <span>{{ __('Website') }}</span>
                </x-link-button>
            @endif

            @if ($rom->metacritic_url && $rom->metacritic_score >0)
                <x-link-button href="{{ $rom->metacritic_url }}?utm_source={{ config('app.name') }}" target="_blank">
                    <span><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="16px" height="16px"><circle cx="24" cy="24" r="20" fill="#ffcb00"/><circle cx="24" cy="24" r="16"/><path fill="#fff" d="M-10.713,40.702h4.423v-8.518c0-0.359,0.03-0.777,0.179-1.136 c0.269-0.747,0.956-1.644,2.122-1.644c1.435,0,2.092,1.255,2.092,3.108v8.189h4.423v-8.548c0-0.359,0.06-0.837,0.179-1.166 c0.299-0.867,1.046-1.584,2.092-1.584c1.464,0,2.152,1.225,2.152,3.347v7.95h4.423v-8.607c0-4.363-2.122-6.336-4.931-6.336 c-1.076,0-1.973,0.239-2.779,0.717c-0.687,0.418-1.345,0.986-1.883,1.763H1.72c-0.628-1.524-2.122-2.481-4.005-2.481 c-2.51,0-3.796,1.375-4.423,2.301h-0.09l-0.209-1.973h-3.825c0.06,1.285,0.12,2.839,0.12,4.662L-10.713,40.702L-10.713,40.702z" transform="rotate(-45)"/></svg></span>
                    <span>{{ $rom->metacritic_score }}/100</span>
                </x-link-button>
            @endif
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow-sm sm:rounded-lg">

                <div class="grid grid-cols-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-4 gap-4">
                    @foreach($rom->images as $image)
                        <div class="aspect-w-9 aspect-h-16 cover-image">
                            <img src="{{ $image->image_url }}" alt="{{ $rom->name }}" class="object-cover w-full h-full">
                        </div>
                    @endforeach
                </div>

                <h1 class="text-3xl font-semibold mt-4 px-0 py-2 text-primary">
                    {{ $rom->name }}
                </h1>

                <p class="text-primary">
                    {!! nl2br($rom->description) !!}
                </p>

            </div>
        </div>
    </div>
</x-app-layout>