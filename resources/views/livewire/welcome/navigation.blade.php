<nav class="-mx-3 grid grid-cols-3 justify-center">
    <div class="flex grow">
        @auth
            <a
                href="{{ url('/dashboard') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
            >
                Dashboard
            </a>
        @else
            <a
                href="{{ route('login') }}"
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
            >
                Log in
            </a>

            @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                >
                    Register
                </a>
            @endif
        @endauth
    </div>

    <div class="flex lg:justify-center lg:col-start-2">
        <a href="/" wire:navigate class="text-3xl">THE ENIAC</a>
    </div>

    <div class="navigation-menu flex flex-row-reverse px-3 py-2">
        <ul class="inline">
            <a href="" class="inline p-1 underline underline-offset-2">Events</a>
            <a href="/clubs" wire:navigate class="inline p-1 underline underline-offset-2">Clubs</a>
            <a class="inline p-1 underline underline-offset-2">About us</a>
            <a class="inline p-1 underline underline-offset-2">Contact us</a>
        </ul>
    </div>

</nav>
