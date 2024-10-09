<a href="{{ $href }}" class="grid row-span-1 {{ $class }}">
    <div class="rounded-xl shadow-sm sm:flex">
        <div class="shrink-0 relative w-full rounded-t-xl overflow-hidden sm:rounded-s-xl sm:max-w-60 md:rounded-se-none md:max-w-48">
            <img class="size-full absolute top-0 start-0 object-cover" src="{{ $image }}" alt="Card Image">
        </div>
        <div class="flex flex-wrap">
            <div class="p-4 flex flex-col h-full sm:px-6 sm:py-1">
                <h3 class="text-lg font-bold text-gray-800">
                    {{ $title }}
                </h3>
                <p class="mt-1 text-gray-500 line-clamp-3">
                    {{ $content }}
                </p>
            </div>
        </div>
    </div>
</a>