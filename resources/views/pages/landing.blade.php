@extends('layouts.app')

@section('content')
<div class="bg-primary">
    @include('components.home.hero')
    @include('components.home.statistic')
    @include('components.home.about')
    @include('components.home.blog')
</div>
@endsection