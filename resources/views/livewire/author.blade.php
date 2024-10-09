<div class="flex flex-col items-center">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="w-screen bg-red-600">
        <h1 class="text-center text-7xl py-16 text-white">{{ $author_row->name }}</h1>
    </div>

    <div class="max-w-2xl lg:max-w-7xl grid grid-cols-6 gap-4 mt-6">
        @foreach ($posts as $post)
            <livewire:author.card 
                href="/post/{{ $post->slug }}"
                image="{{ asset('storage/' .$post->banner) }}"
                title="{{ $post->title }}"
                content="{{ $post->excerpt }}"
                class="col-span-2 [&:nth-child(1)]:col-span-3 [&:nth-child(2)]:col-span-3"
                timestamp="{{ $post->published_at }}"
            />
        @endforeach
    </div>
</div>