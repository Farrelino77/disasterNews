<div class="bg-second py-16">
    <div class="flex justify-between mx-24 items-center">
        <p>01/Latest Concerns</p>
        <a href="/article" class="flex items-center text-accent">
            See All
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M7 17l9.2-9.2M17 17V7H7" />
            </svg>
        </a>
    </div>
    <hr class="border-black" />
    <div class="flex md:flex-row flex-col justify-evenly items-center mt-10">
        @foreach($articles ?? [] as $item)
        <div
            class="relative flex flex-col md:my-6 my-3 bg-primary shadow-sm border border-slate-200 rounded-lg md:w-96 w-72 md:h-96 h-72">
            <div class="relative h-56 m-2.5 overflow-hidden text-white rounded-md">
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                    class="w-full h-full object-cover" />
            </div>
            <div class="p-4">
                <h6 class="mb-2 text-slate-800 text-xl font-semibold">{{ $item->title }}</h6>
                <p class="text-slate-600 leading-normal font-light">
                    {{ Str::limit(strip_tags($item->content ?? ''), 100) }}
                </p>
            </div>
            <div class="px-4 pb-4 pt-0 mt-2">
                <a href="{{ url('/article/' . $item->id) }}">
                    <button
                        class="rounded-md bg-accent py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg hover:bg-slate-700">
                        Read more
                    </button>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>