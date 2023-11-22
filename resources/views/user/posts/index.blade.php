@extends('layouts.main')

@section('page.title', 'Author posts')
    
@section('main.content')

    <x-title>
        
        {{ __('Author posts') }}

        <x-slot name="right">

            <x-button-link href="{{ route('user.posts.create') }}" size="sm">

                {{ __('Create Post') }}

            </x-button-link>

        </x-slot>
    
    </x-title>

    @if ( ! empty( $posts ) )

        @foreach ($posts as $post)

            <div class="mb-3">

                <h2 class="h6">

                    <a href="{{ route('user.posts.show', $post['id']) }}">{{ $post['title'] }}</a>

                </h2>

                <div class="small text-muted">{{ $post['published_at']->format('d.m.Y') }}</div>

            </div>
            
        @endforeach

        {{ $posts->links() }}

    @else 

        <div>{{ __('No posts were found.') }}</div>

    @endif
    
@endsection