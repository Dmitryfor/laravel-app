@extends('layouts.main')

@section('page.title', 'Create Post')
    
@section('main.content')

    <x-title>
        
        {{ __('Create Post') }}

        <x-slot name="back_link">

            <a href="{{ route('user.posts') }}">{{ __('Back to posts') }}</a>

        </x-slot>

    </x-title>

    <x-post.form action="{{ route('user.posts.store') }}" method="POST">

        <x-button type="submit">{{ __('Create Post') }}</x-button>

    </x-post.form>
    
@endsection