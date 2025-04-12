@extends('layouts.app')

@section('content')
<div class="min-h-screen pt-44 bg-primary p-8">
    <h1 class="text-center font-condensed uppercase font-bold text-4xl mb-11">
        Our Article
    </h1>

    <div class="max-w-7xl mx-auto">
        <div class="mb-8">
            <form action="{{ url('/article') }}" method="GET">
                <input type="text" name="search" placeholder="Search articles..."
                    class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:border-accent"
                    value="{{ request('search') }}" onkeyup="this.form.submit()" />
            </form>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @forelse($articles ?? [] as $article)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
                    class="w-full h-48 object-cover" />
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2">{{ $article->title }}</h2>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-sm text-gray-500">
                            By {{ $article->author ?? 'Unknown' }}
                        </span>
                        <a href="{{ url('/article/' . $article->id) }}">
                            <button
                                class="bg-accent text-white px-4 py-2 rounded hover:bg-opacity-90 transition-colors">
                                Read More
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="text-center py-8 col-span-3">
                <p class="text-xl text-gray-600">No articles found</p>
            </div>
            @endforelse
        </div>
    </div>
</div>

@if(isset($isLoading) && $isLoading)
<div class="fixed inset-0 bg-primary flex justify-center items-center z-50">
    <p class="text-2xl">Loading...</p>
</div>
@endif

@endsection