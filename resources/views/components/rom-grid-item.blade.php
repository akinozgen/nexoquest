<div class="text-white rom-grid-item relative">
    <div class="aspect-w-9 aspect-h-16 cover-image">
        <a href="{{ route('roms.show', $rom->slug) }}">
            <img src="{{ $rom->getCoverImage() }}" alt="{{ $rom->name }}" class="object-cover w-full h-full">
        </a>
    </div>

    <!-- Additional Information -->
    <div class="mt-2 px-4 py-2 relative">
        <h3 class="text-lg font-medium">
            <a href="{{ route('roms.show', $rom->slug) }}">{{ ucwords($rom->name) }}</a>
        </h3>
        <div class="flex mt-4">
            <div class="text-xs mr-4">
                <span>🌟</span>
                <span class="text-sm">4.5</span>
            </div>
            <p class="text-xs mr-4">
                <span>🔽 </span>
                {{ intval($rom->downloads) }}
            </p>
            <p class="text-xs">
                <span>🕹️</span>
                <a href="{{ route('platforms.show', $rom->platform->slug) }}">
                    {{ $rom->platform->name }}
                </a>
            </p>
        </div>
    </div>
</div>
