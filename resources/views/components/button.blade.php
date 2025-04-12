@props(['text'])

<button {{ $attributes->merge(['class' => 'bg-accent text-white/70 flex items-center py-2 md:pl-7 pl-3 pr-2 mt-8
    md:font-bold md:text-xl text-lg gap-2 rounded-r-full']) }}>
    {{ $text }}
    <div class="bg-white rounded-full md:p-3 p-1">
        <svg xmlns="http://www.w3.org/2000/svg" class="text-black" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M5 12h14"></path>
            <path d="m12 5 7 7-7 7"></path>
        </svg>
    </div>
</button>