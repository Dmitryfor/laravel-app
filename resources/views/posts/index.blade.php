@extends('layouts.main')

@section('page.title', 'Posts')
    
@section('main.content')

    <x-title>{{ __('Posts lists') }}</x-title>

    @include('posts.filter')

    @if ( ! $posts->isEmpty() )

        <div class="row">
    
            @foreach ($posts as $post)

                <div class="col-12 col-md-4">

                    <x-post.card :post="$post"/>

                </div>
                
            @endforeach

        </div>

        {{ $posts->links() }}

    @else 

        <div>{{ __('No posts were found.') }}</div>

    @endif
    
@endsection