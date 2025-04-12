@extends('layouts.app')

@section('content')
<div class="min-h-screen pt-44 bg-primary p-8">
    <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
        @if(isset($article))
        <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->title }}"
            class="w-full h-64 object-cover" />
        <div class="p-8">
            <h1 class="text-3xl font-bold mb-4">{{ $article->title }}</h1>
            <div class="flex items-center mb-6">
                <span class="text-gray-500">By {{ $article->author ?? 'Unknown' }}</span>
                <span class="mx-2">•</span>
                <span class="text-gray-500">{{ isset($article->created_at) ? $article->created_at->format('F j, Y') :
                    'Unknown date' }}</span>
            </div>
            <div class="prose max-w-none">
                {!! $article->content ?? 'No content available' !!}
            </div>
            <div class="mt-8">
                <a href="{{ url('/article') }}"
                    class="bg-accent text-white px-6 py-2 rounded hover:bg-opacity-90 transition-colors">
                    Back to Articles
                </a>
            </div>
        </div>
        @else
        <div class="p-8 text-center">
            <p class="text-xl text-gray-600">Article not found</p>
            <div class="mt-8">
                <a href="{{ url('/article') }}"
                    class="bg-accent text-white px-6 py-2 rounded hover:bg-opacity-90 transition-colors">
                    Back to Articles
                </a>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection