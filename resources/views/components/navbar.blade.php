<div class="fixed z-10 w-full bg-white" x-data="{ isOpen: false }">
    <div class="flex justify-between items-center md:mx-20 mx-10 mt-3 mb-5">
        <div class="logo flex items-center">
            <a href="{{ url('/') }}">
                <img class="w-14" src="{{ asset('images/logo.png') }}" alt="Logo" />
            </a>
            <p class="font-bold text-2xl underline font-jersey">It's Dry</p>
        </div>
        <nav class="flex items-center">
            <ul class="md:flex hidden gap-8">
                <a href="{{ url('/') }}">
                    <li class="text-xl font-semibold hover:bg-primary px-2 py-1 rounded italic">Home</li>
                </a>
                <a href="{{ url('/article') }}">
                    <li class="text-xl font-semibold hover:bg-primary px-2 py-1 rounded italic">Article</li>
                </a>
                <a href="{{ url('/admin') }}">
                    <li class="text-xl font-semibold hover:bg-primary px-2 py-1 rounded italic">Login Admin</li>
                </a>
            </ul>
            <div class="md:hidden">
                <button @click="isOpen = !isOpen">
                    <template x-if="isOpen">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </template>
                    <template x-if="!isOpen">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </template>
                </button>
            </div>
        </nav>
    </div>
    <div x-show="isOpen" class="md:hidden bg-white mt-2">
        <hr />
        <ul class="block gap-8">
            <a href="{{ url('/') }}">
                <button class="hover:bg-primary w-screen text-center">Home</button>
            </a>
            <a href="{{ url('/about') }}">
                <button class="hover:bg-primary w-screen text-center">About</button>
            </a>
            <a href="{{ url('/article') }}">
                <button class="hover:bg-primary w-screen text-center">Article</button>
            </a>
            <a href="{{ url('/login') }}">
                <button class="hover:bg-primary w-screen text-center">Login</button>
            </a>
        </ul>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>