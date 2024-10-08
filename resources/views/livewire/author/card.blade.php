<a href="{{ $href }}" class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70 {{ $class }}">
    <img class="h-auto rounded-t-xl object-fit" src="{{ $image }}" alt="Card Image">
    <div class="p-4 md:p-5">
        <h3 class="text-lg font-bold text-gray-800 dark:text-white">
            {{ $title }}
        </h3>
        <p class="mt-1 break-words text-gray-500 dark:text-neutral-400">
            {{ $content }}
        </p>
        <p class="mt-5 text-xs text-gray-500 dark:text-neutral-500">
            {{ $timestamp }}
        </p>
    </div>
</a>